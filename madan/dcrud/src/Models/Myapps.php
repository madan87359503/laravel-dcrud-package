<?php

namespace Madan\Dcrud\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Myapps extends Model
{
    protected $table = 'myapps';
    use SoftDeletes;
    
    
    
      protected $fillable = [
       "id","name","type","width","source","onclick"
    ];
	
      public static $modelData=[
        
         "id"=>"","name"=>"","type"=>"","width"=>"","source"=>"","onclick"=>""
        ];
		public static $tabHeadsG=["id","name","type","width","source","onclick"];
		public static $formDataG=["id","name","type","width","source","onclick"];
		public static $validator= 
               array (
  'id' => 'max:98980898989',
  'name' => 'required',
  'type' => 'max:98980898989',
  'width' => 'max:98980898989',
  'source' => 'max:98980898989',
  'onclick' => 'max:98980898989',
)
            ;
		public static $subModules=array (
);
			public static $actions=array (
);
		public static $access=array (
  0 => '1',
);
		public static $pType=['dashboard'=>'yes','showCrud'=>'yes'];
		
		public static $formType=array (
  'id' => 
  array (
    'id' => 913,
    'created_at' => '2022-03-27T03:41:38.000000Z',
    'updated_at' => '2022-03-27T03:41:38.000000Z',
    'deleted_at' => NULL,
    'models_name' => '59',
    'name' => 'id',
    'createvalidator' => 'max:98980898989',
    'updatevalidator' => 'max:98980898989',
    'type' => 'text',
    'modeldata' => 0,
    'tablehead' => 0,
    'formdata' => 0,
    'fillable' => 0,
    'formclass' => 'hide',
    'defaultvalue' => NULL,
    'options' => NULL,
    'sortale' => NULL,
    'searchableforms' => NULL,
  ),
  'name' => 
  array (
    'id' => 914,
    'created_at' => '2022-03-27T03:42:31.000000Z',
    'updated_at' => '2022-03-27T03:42:31.000000Z',
    'deleted_at' => NULL,
    'models_name' => '59',
    'name' => 'name',
    'createvalidator' => 'required',
    'updatevalidator' => 'required',
    'type' => 'text',
    'modeldata' => 0,
    'tablehead' => 0,
    'formdata' => 0,
    'fillable' => 0,
    'formclass' => 'a',
    'defaultvalue' => NULL,
    'options' => NULL,
    'sortale' => NULL,
    'searchableforms' => NULL,
  ),
  'type' => 
  array (
    'id' => 915,
    'created_at' => '2022-03-27T03:43:48.000000Z',
    'updated_at' => '2022-03-27T03:46:26.000000Z',
    'deleted_at' => NULL,
    'models_name' => '59',
    'name' => 'type',
    'createvalidator' => 'max:98980898989',
    'updatevalidator' => 'max:98980898989',
    'type' => 'text',
    'modeldata' => 0,
    'tablehead' => 0,
    'formdata' => 0,
    'fillable' => 0,
    'formclass' => 'a',
    'defaultvalue' => NULL,
    'options' => NULL,
    'sortale' => NULL,
    'searchableforms' => NULL,
  ),
  'width' => 
  array (
    'id' => 916,
    'created_at' => '2022-03-27T03:44:39.000000Z',
    'updated_at' => '2022-03-27T03:44:39.000000Z',
    'deleted_at' => NULL,
    'models_name' => '59',
    'name' => 'width',
    'createvalidator' => 'max:98980898989',
    'updatevalidator' => 'max:98980898989',
    'type' => 'text',
    'modeldata' => 0,
    'tablehead' => 0,
    'formdata' => 0,
    'fillable' => 0,
    'formclass' => 'jjj',
    'defaultvalue' => NULL,
    'options' => NULL,
    'sortale' => NULL,
    'searchableforms' => NULL,
  ),
  'source' => 
  array (
    'id' => 917,
    'created_at' => '2022-03-27T03:45:29.000000Z',
    'updated_at' => '2022-03-27T03:45:29.000000Z',
    'deleted_at' => NULL,
    'models_name' => '59',
    'name' => 'source',
    'createvalidator' => 'max:98980898989',
    'updatevalidator' => 'max:98980898989',
    'type' => 'text',
    'modeldata' => 0,
    'tablehead' => 0,
    'formdata' => 0,
    'fillable' => 0,
    'formclass' => 'jj',
    'defaultvalue' => NULL,
    'options' => NULL,
    'sortale' => NULL,
    'searchableforms' => NULL,
  ),
  'onclick' => 
  array (
    'id' => 918,
    'created_at' => '2022-03-27T03:45:58.000000Z',
    'updated_at' => '2022-03-27T03:45:58.000000Z',
    'deleted_at' => NULL,
    'models_name' => '59',
    'name' => 'onclick',
    'createvalidator' => 'max:98980898989',
    'updatevalidator' => 'max:98980898989',
    'type' => 'text',
    'modeldata' => 0,
    'tablehead' => 0,
    'formdata' => 0,
    'fillable' => 0,
    'formclass' => 'jj',
    'defaultvalue' => NULL,
    'options' => NULL,
    'sortale' => NULL,
    'searchableforms' => NULL,
  ),
);
		public static function getSelectData(){
			$options=[];
		 
	

		return $options;
		}
		
    
}