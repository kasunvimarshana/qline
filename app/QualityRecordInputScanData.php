<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class QualityRecordInputScanData extends Model
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
    protected $fillable = array('id', 'is_visible', 'is_active', 'time_create', 'code', 'count_data', 'company_id', 'strategic_business_unit_id', 'factory_id', 'line_id', 'customer_id', 'style_id', 'colour_id', 'export_id', 'user_id_create', 'ip_address');
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
    public function company(){
        return $this->belongsTo('App\Company', 'company_id', 'id');
    }
    
    //one to meny (inverse)
    public function strategicBusinessUnit(){
        return $this->belongsTo('App\StrategicBusinessUnit', 'strategic_business_unit_id', 'id');
    }
    
    //one to many (inverse)
    public function factory(){
        return $this->belongsTo('App\Factory', 'factory_id', 'id');
    }
    
    //one to many (inverse)
    public function line(){
        return $this->belongsTo('App\Line', 'line_id', 'id');
    }
    
    //one to many (inverse)
    public function customer(){
        return $this->belongsTo('App\Customer', 'customer_id', 'id');
    }
    
    //one to many (inverse)
    public function style(){
        return $this->belongsTo('App\Style', 'style_id', 'id');
    }
    
    //one to many (inverse)
    public function colour(){
        return $this->belongsTo('App\Colour', 'colour_id', 'id');
    }
    
    //one to many (inverse)
    public function export(){
        return $this->belongsTo('App\Export', 'export_id', 'id');
    }
    
    //one to many (inverse)
    public function user(){
        return $this->belongsTo('App\User', 'user_id_create', 'id');
    }
    
    //one to one
    public function qualityRecordInputScanDataStatus(){
        return $this->hasOne('App\QualityRecordInputScanDataStatus', 'quality_record_input_scan_data_id', 'id');
    }
    
    //one to one
    public function qualityRecordInputScanDataStatusSewingAudit(){
        return $this->hasOne('App\QualityRecordInputScanDataStatusSewingAudit', 'quality_record_input_scan_data_id', 'id');
    }
    
    //one to one
    public function qualityRecordInputScanDataStatusFinishing(){
        return $this->hasOne('App\QualityRecordInputScanDataStatusFinishing', 'quality_record_input_scan_data_id', 'id');
    }
}
