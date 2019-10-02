<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class StandardSewingAudit extends Model
{
    //
    //protected $table = "table";
    //protected $primaryKey = array('id');
    protected $primaryKey = "id";
    protected $keyType = 'string';
    public $incrementing = false;
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
    protected $fillable = array('id', 'is_visible', 'is_active', 'colour_id', 'code', 'name', 'display_name', 'image_uri', 'standard_sewing_audit_id_parent', 'standard_a_q_l_id', 'audit_frequency_type', 'audit_frequency_count');
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
            $id = null;
            if( (isset($model->id)) ){
                $id = $model->id;
            }else{
                $id = (bin2hex(time().Str::uuid()->toString()));
            }
            $model->id = $id;
        });
    }
    
    //one to many (inverse)
    public function sewingAuditStandardParent(){
        return $this->belongsTo('App\StandardSewingAudit', 'sewing_audit_standard_id_parent', 'id');
    }
    
    //one to many
    public function sewingAuditStandardChildren(){
        return $this->hasMany('App\StandardSewingAudit', 'sewing_audit_standard_id_parent', 'id');
    }
    
    //one to many (inverse)
    public function standardAQL(){
        return $this->belongsTo('App\StandardAQL', 'standard_a_q_l_id', 'id');
    }
    
    //one to many
    public function standardDataSewingAudit(){
        return $this->hasMany('App\StandardDataSewingAudit', 'standard_sewing_audit_id', 'id');
    }
    
}
