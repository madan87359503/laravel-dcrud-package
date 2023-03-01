<?php

namespace Madan\Dcrud\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Modules extends Model
{
    protected $table = 'modules';
    use SoftDeletes;
    
    
    
      protected $fillable = [
       "title","name","id"
    ];
	
      public static $modelData=[
        
         "title"=>"","name"=>"","id"=>""
        ];
		public static $tabHeadsG=["title","name","id"];
		public static $formDataG=["title","name","id"];
		public static $validator= 
               ["title"=>"required|max:191","name"=>"required|max:191","id"=>"required|max:191"]
            ;
		public static $subModules=[];
			public static $actions=[];
		public static $access=[0=>"1"];
		public static $pType=['dashboard'=>'no','showCrud'=>'yes'];
		
		public static $formType=array (
  'title' => 
  array (
    'id' => 1045,
    'created_at' => '2023-01-18T22:18:02.000000Z',
    'updated_at' => '2023-01-18T22:18:02.000000Z',
    'deleted_at' => NULL,
    'models_name' => '83',
    'name' => 'title',
    'createvalidator' => 'required|max:191',
    'updatevalidator' => 'required|max:191',
    'type' => 'text',
    'modeldata' => 1,
    'tablehead' => 1,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'col-lg-2',
    'defaultvalue' => NULL,
    'options' => NULL,
    'sortale' => NULL,
    'searchableforms' => NULL,
  ),
  'name' => 
  array (
    'id' => 1046,
    'created_at' => '2023-01-18T22:18:02.000000Z',
    'updated_at' => '2023-01-18T22:18:02.000000Z',
    'deleted_at' => NULL,
    'models_name' => '83',
    'name' => 'name',
    'createvalidator' => 'required|max:191',
    'updatevalidator' => 'required|max:191',
    'type' => 'text',
    'modeldata' => 1,
    'tablehead' => 1,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'col-lg-2',
    'defaultvalue' => NULL,
    'options' => NULL,
    'sortale' => NULL,
    'searchableforms' => NULL,
  ),
  'id' => 
  array (
    'id' => 1047,
    'created_at' => '2023-01-18T22:18:02.000000Z',
    'updated_at' => '2023-01-18T22:18:02.000000Z',
    'deleted_at' => NULL,
    'models_name' => '83',
    'name' => 'id',
    'createvalidator' => 'required|max:191',
    'updatevalidator' => 'required|max:191',
    'type' => 'text',
    'modeldata' => 1,
    'tablehead' => 1,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'col-lg-2',
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