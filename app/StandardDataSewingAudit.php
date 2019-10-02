<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class StandardDataSewingAudit extends Model
{
    //
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
    protected $fillable = array('id', 'is_visible', 'is_active', 'count_sample', 'batch_count_min', 'batch_count_max', 'count_accept', 'count_reject', 'reject_level', 'reject_mode', 'accept_level', 'accept_mode', 'audit_frequency_type', 'audit_frequency_count', 'standard_sewing_audit_id');
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
    
    //one to many (inverse)
    public function standardSewingAudit(){
        return $this->belongsTo('App\StandardSewingAudit', 'standard_sewing_audit_id', 'id');
    }
}
