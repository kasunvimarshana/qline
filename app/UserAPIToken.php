<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
//use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class UserAPIToken extends Model implements AuthenticatableContract
{
    //
    //use AuthenticableTrait;
    //protected $table = "table";
    //protected $primaryKey = array('id');
    //protected $primaryKey = "id";
    //protected $keyType = 'int';
    //public $incrementing = false;
    //protected $connection = "mysql";
    //$this->setConnection("mysql");
    //protected $perPage = 25;
    //const CREATED_AT = 'created_at';
    //const UPDATED_AT = 'updated_at';
    //public $timestamps = false;
    
    //protected $dates = array('created_at', 'updated_at', 'deleted_at');
    //protected $appends = array('field1', 'field2');
    //protected $attributes = array();
    //protected $guarded = array();
    protected $fillable = array('id', 'is_visible', 'is_active', 'is_deactivatable', 'is_notifiable', 'access_token', 'refresh_token', 'code_active', 'ip_address', 'active_role', 'time_create', 'time_active', 'time_deactive', 'duration_active', 'time_last_activity', 'user_agent', 'user_id');
    //protected $hidden = array();
    //protected $casts = array();
    /**
     * All of the relationships to be touched.
     *
     * @var array
     */
    //protected $touches = ['table_name'];
    /**
    * The relations to eager load on every query.
    *
    * @var array
    */
    //protected $with = [];
    /*
    protected $supportedRelations = [];
    public function scopeWithAll($query){
        return $query->with($this->supportedRelations);
    }
    */
    
    
    /* implement AuthenticatableContract start */
    /**
     * Get the name of the unique identifier for the user.
     *
     * @return string
     */
    public function getAuthIdentifierName(){
        /*
        return "access_token";
        */
        return "id";
    }
    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier(){
        /*
        return $this->{$this->getAuthIdentifierName()};
        */
        return $this->{$this->getAuthIdentifierName()};
    }
    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword(){
        /*
        //return $this->password;
        return $this->user_id;
        */
        return $this->user_id;
    }
    /**
     * Get the token value for the "remember me" session.
     *
     * @return string
     */
    public function getRememberToken(){
        /*
        if ( (!empty($this->getRememberTokenName())) ) {
            return $this->{$this->getRememberTokenName()};
        }
        */
        if ( (!empty($this->getRememberTokenName())) ) {
            return $this->{$this->getRememberTokenName()};
        }
    }
    /**
     * Set the token value for the "remember me" session.
     *
     * @param  string  $value
     * @return void
     */
    public function setRememberToken($value){
        /*
        if ( (!empty($this->getRememberTokenName())) ) {
            $this->{$this->getRememberTokenName()} = $value;
        }
        */
        if ( (!empty($this->getRememberTokenName())) ) {
            $this->{$this->getRememberTokenName()} = $value;
        }
    }
    /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     */
    public function getRememberTokenName(){
        /*
        return "refresh_token";
        */
        return "refresh_token";
    }
    /* implement AuthenticatableContract end */
    
    /**
    * Set the keys for a save update query.
    *
    * @param  \Illuminate\Database\Eloquent\Builder  $query
    * @return \Illuminate\Database\Eloquent\Builder
    */
    protected function setKeysForSaveQuery(Builder $query){
        $keys = $this->getKeyName();
        if(!is_array($keys)){
            return parent::setKeysForSaveQuery($query);
        }
        foreach($keys as $keyName){
            $query->where($keyName, '=', $this->getKeyForSaveQuery($keyName));
        }
        return $query;
    }
    
    /**
    * Get the primary key value for a save query.
    *
    * @param mixed $keyName
    * @return mixed
    */
    protected function getKeyForSaveQuery($keyName = null){
        if(is_null($keyName)){
            $keyName = $this->getKeyName();
        }
        if (isset($this->original[$keyName])){
            return $this->original[$keyName];
        }
        return $this->getAttribute($keyName);
    }
    
    protected static function boot(){
        parent::boot();
        
        static::creating(function( $model ){
            $model->access_token = $model->generateAPIToken();
        });
    }
    
    //one to many (inverse)
    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    
    //one to many
    public function userAPITokenDatas(){
        return $this->hasMany('App\UserAPITokenData', 'user_a_p_i_token_id', 'id');
    }
    
    public static function generateAPIToken(){
        $plainToken = bin2hex( time() . '-' . Str::uuid()->toString() );
        return $plainToken;
    }
    
}