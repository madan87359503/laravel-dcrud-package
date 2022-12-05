<?php

namespace Madan\Dcrud\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Submodules extends Model
{
    protected $table = 'submodules';
    use SoftDeletes;
    
    
    
      protected $fillable = [
       "models_name","name","filter","id"
    ];
	
      public static $modelData=[
        
         "models_name"=>"","name"=>"","filter"=>"","id"=>""
        ];
		public static $tabHeadsG=["models_name","name","filter","id"];
		public static $formDataG=["models_name","name","filter","id"];
		public static $validator= 
               array (
  'models_name' => 'required|max:191',
  'name' => 'required|max:191',
  'filter' => 'required|max:191',
  'id' => 'max:100876989',
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
  11 => 'Routes',
  12 => 'Testmodel1',
  13 => 'Testmodel2',
  14 => 'Finaltest',
  15 => NULL,
  16 => NULL,
  17 => 'Mytemplates',
);
		
		public static $formType=array (
  'models_name' => 
  array (
    'id' => 33,
    'created_at' => '2021-09-15T16:33:46.000000Z',
    'updated_at' => '2021-09-15T16:33:46.000000Z',
    'deleted_at' => NULL,
    'models_name' => '44',
    'name' => 'models_name',
    'createvalidator' => 'required|max:191',
    'updatevalidator' => 'required|max:191',
    'type' => 'select',
    'modeldata' => 1,
    'tablehead' => 1,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'col-lg-2',
    'defaultvalue' => NULL,
    'options' => '\\Madan\\Dcrud\\Models\\Models::pluck("name","id")->prepend("Select One...","")',
    'sortale' => 0,
    'searchableforms' => 0,
  ),
  'name' => 
  array (
    'id' => 34,
    'created_at' => '2021-09-15T16:33:46.000000Z',
    'updated_at' => '2021-09-15T16:33:46.000000Z',
    'deleted_at' => NULL,
    'models_name' => '44',
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
  'filter' => 
  array (
    'id' => 35,
    'created_at' => '2021-09-15T16:33:46.000000Z',
    'updated_at' => '2021-11-25T16:24:18.000000Z',
    'deleted_at' => NULL,
    'models_name' => '44',
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
    'sortale' => 1,
    'searchableforms' => 0,
  ),
  'id' => 
  array (
    'id' => 889,
    'created_at' => '2021-12-18T12:33:07.000000Z',
    'updated_at' => '2021-12-18T12:37:04.000000Z',
    'deleted_at' => NULL,
    'models_name' => '44',
    'name' => 'id',
    'createvalidator' => 'max:100876989',
    'updatevalidator' => 'max:100876989',
    'type' => 'hidden',
    'modeldata' => 0,
    'tablehead' => 0,
    'formdata' => 0,
    'fillable' => 0,
    'formclass' => 'hidden',
    'defaultvalue' => NULL,
    'options' => NULL,
    'sortale' => 0,
    'searchableforms' => 0,
  ),
);
		public static function getSelectData(){
			$options=[];
		 $options["models_name"]=\Madan\Dcrud\Models\Models::pluck("name","id")->prepend("Select One...","");
	

		return $options;
		}
		
    
}