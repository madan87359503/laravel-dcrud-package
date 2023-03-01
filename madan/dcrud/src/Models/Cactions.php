<?php

namespace Madan\Dcrud\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Cactions extends Model
{
    protected $table = 'cactions';
    use SoftDeletes;
    
    
    
      protected $fillable = [
       "controllers_name","name","role_name","component_name","id"
    ];
	
      public static $modelData=[
        
         "controllers_name"=>"","name"=>"","role_name"=>"","component_name"=>"","id"=>""
        ];
		public static $tabHeadsG=["controllers_name","name","role_name","component_name","id"];
		public static $formDataG=["controllers_name","name","role_name","component_name","id"];
		public static $validator= 
               array (
  'controllers_name' => 'required|max:191',
  'name' => 'required|max:191',
  'role_name' => 'required|max:191',
  'component_name' => 'required|max:191',
  'id' => 'max:9999999',
)
            ;
		public static $subModules=array (
  'cavariables' => 'cactions_name',
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
  'controllers_name' => 
  array (
    'id' => 55,
    'created_at' => '2021-10-31T16:00:50.000000Z',
    'updated_at' => '2021-10-31T16:03:38.000000Z',
    'deleted_at' => NULL,
    'models_name' => '49',
    'name' => 'controllers_name',
    'createvalidator' => 'required|max:191',
    'updatevalidator' => 'required|max:191',
    'type' => 'select',
    'modeldata' => 1,
    'tablehead' => 1,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'col-lg-2',
    'defaultvalue' => NULL,
    'options' => '\\Madan\\Dcrud\\Models\\Controllers::pluck("name","id")->prepend("Select One...","")',
    'sortale' => 0,
    'searchableforms' => 0,
  ),
  'name' => 
  array (
    'id' => 56,
    'created_at' => '2021-10-31T16:00:50.000000Z',
    'updated_at' => '2021-10-31T16:00:50.000000Z',
    'deleted_at' => NULL,
    'models_name' => '49',
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
  'role_name' => 
  array (
    'id' => 57,
    'created_at' => '2021-10-31T16:00:50.000000Z',
    'updated_at' => '2021-10-31T16:03:53.000000Z',
    'deleted_at' => NULL,
    'models_name' => '49',
    'name' => 'role_name',
    'createvalidator' => 'required|max:191',
    'updatevalidator' => 'required|max:191',
    'type' => 'select',
    'modeldata' => 1,
    'tablehead' => 1,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'col-lg-2',
    'defaultvalue' => NULL,
    'options' => '\\App\\Models\\Role::pluck("name","id")->prepend("Select One...","")',
    'sortale' => 0,
    'searchableforms' => 0,
  ),
  'component_name' => 
  array (
    'id' => 58,
    'created_at' => '2021-10-31T16:00:50.000000Z',
    'updated_at' => '2021-10-31T16:04:08.000000Z',
    'deleted_at' => NULL,
    'models_name' => '49',
    'name' => 'component_name',
    'createvalidator' => 'required|max:191',
    'updatevalidator' => 'required|max:191',
    'type' => 'select',
    'modeldata' => 1,
    'tablehead' => 1,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'col-lg-2',
    'defaultvalue' => NULL,
    'options' => '\\Madan\\Dcrud\\Models\\Component::pluck("name","id")->prepend("Select One...","")',
    'sortale' => 0,
    'searchableforms' => 0,
  ),
  'id' => 
  array (
    'id' => 890,
    'created_at' => '2021-12-21T15:08:36.000000Z',
    'updated_at' => '2021-12-21T15:08:36.000000Z',
    'deleted_at' => NULL,
    'models_name' => '49',
    'name' => 'id',
    'createvalidator' => 'max:9999999',
    'updatevalidator' => 'max:9999999',
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
		 $options["controllers_name"]=\Madan\Dcrud\Models\Controllers::pluck("name","id")->prepend("Select One...","");$options["role_name"]= \Spatie\Permission\Models\Role::pluck("name","id")->prepend("Select One...","");$options["component_name"]=\Madan\Dcrud\Models\Component::pluck("name","id")->prepend("Select One...","");
	

		return $options;
		}
		
    
}