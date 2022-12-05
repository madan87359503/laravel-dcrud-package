<?php

namespace Madan\Dcrud\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Cavariables extends Model
{
    protected $table = 'cavariables';
    use SoftDeletes;
    
    
    
      protected $fillable = [
       "cactions_name","name","model","columns","filter","other","id"
    ];
	
      public static $modelData=[
        
         "cactions_name"=>"","name"=>"","model"=>"","columns"=>"","filter"=>"","other"=>"","id"=>""
        ];
		public static $tabHeadsG=["cactions_name","name","model","columns","filter","other","id"];
		public static $formDataG=["cactions_name","name","model","columns","filter","other","id"];
		public static $validator= 
               array (
  'cactions_name' => 'required|max:191',
  'name' => 'required|max:191',
  'model' => 'required|max:191',
  'columns' => 'required|max:191',
  'filter' => 'required|max:191',
  'other' => 'required|max:191',
  'id' => 'max:9999999999999999',
)
            ;
		public static $subModules=array (
);
			public static $actions=array (
);
		public static $access=array (
  0 => '1',
);
		public static $pType=array (
  0 => 'Forms',
  1 => 'Actions',
  2 => 'Submodules',
  3 => 'Submodules',
  4 => 'Submodules',
  5 => 'Rolemodel',
  6 => 'Controllers',
  7 => 'Controllersa',
  8 => 'Cactions',
  9 => 'Cavariables',
  10 => 'Component',
);
		
		public static $formType=array (
  'cactions_name' => 
  array (
    'id' => 59,
    'created_at' => '2021-10-31T16:07:06.000000Z',
    'updated_at' => '2021-10-31T16:07:06.000000Z',
    'deleted_at' => NULL,
    'models_name' => '50',
    'name' => 'cactions_name',
    'createvalidator' => 'required|max:191',
    'updatevalidator' => 'required|max:191',
    'type' => 'select',
    'modeldata' => 1,
    'tablehead' => 1,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'col-lg-2',
    'defaultvalue' => NULL,
    'options' => '\\Madan\\Dcrud\\Models\\Cactions::pluck("name","id")->prepend("Select One...","")',
    'sortale' => 0,
    'searchableforms' => 0,
  ),
  'name' => 
  array (
    'id' => 60,
    'created_at' => '2021-10-31T16:07:06.000000Z',
    'updated_at' => '2021-10-31T16:07:06.000000Z',
    'deleted_at' => NULL,
    'models_name' => '50',
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
    'sortale' => 0,
    'searchableforms' => 0,
  ),
  'model' => 
  array (
    'id' => 61,
    'created_at' => '2021-10-31T16:07:06.000000Z',
    'updated_at' => '2021-10-31T16:07:06.000000Z',
    'deleted_at' => NULL,
    'models_name' => '50',
    'name' => 'model',
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
    'sortale' => 0,
    'searchableforms' => 0,
  ),
  'columns' => 
  array (
    'id' => 62,
    'created_at' => '2021-10-31T16:07:06.000000Z',
    'updated_at' => '2021-10-31T16:07:06.000000Z',
    'deleted_at' => NULL,
    'models_name' => '50',
    'name' => 'columns',
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
    'sortale' => 0,
    'searchableforms' => 0,
  ),
  'filter' => 
  array (
    'id' => 63,
    'created_at' => '2021-10-31T16:07:06.000000Z',
    'updated_at' => '2021-10-31T16:07:06.000000Z',
    'deleted_at' => NULL,
    'models_name' => '50',
    'name' => 'filter',
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
    'sortale' => 0,
    'searchableforms' => 0,
  ),
  'other' => 
  array (
    'id' => 64,
    'created_at' => '2021-10-31T16:07:06.000000Z',
    'updated_at' => '2021-10-31T16:07:06.000000Z',
    'deleted_at' => NULL,
    'models_name' => '50',
    'name' => 'other',
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
    'sortale' => 0,
    'searchableforms' => 0,
  ),
  'id' => 
  array (
    'id' => 891,
    'created_at' => '2021-12-21T15:13:46.000000Z',
    'updated_at' => '2021-12-21T15:13:46.000000Z',
    'deleted_at' => NULL,
    'models_name' => '50',
    'name' => 'id',
    'createvalidator' => 'max:9999999999999999',
    'updatevalidator' => 'max:9999999999999999',
    'type' => 'hidden',
    'modeldata' => NULL,
    'tablehead' => NULL,
    'formdata' => NULL,
    'fillable' => NULL,
    'formclass' => NULL,
    'defaultvalue' => NULL,
    'options' => NULL,
    'sortale' => NULL,
    'searchableforms' => NULL,
  ),
);
		public static function getSelectData(){
			$options=[];
		 $options["cactions_name"]=\Madan\Dcrud\Models\Cactions::pluck("name","id")->prepend("Select One...","");
	

		return $options;
		}
		
    
}