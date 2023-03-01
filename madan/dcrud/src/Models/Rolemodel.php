<?php

namespace Madan\Dcrud\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Rolemodel extends Model
{
    protected $table = 'rolemodel';
    use SoftDeletes;
    
    
    
      protected $fillable = [
       "id","models_name","role_name","isactive"
    ];
	
      public static $modelData=[
        
         "id"=>"","models_name"=>"","role_name"=>"","isactive"=>""
        ];
		public static $tabHeadsG=["id","models_name","role_name","isactive"];
		public static $formDataG=["id","models_name","role_name","isactive"];
		public static $validator= 
               array (
  'id' => 'required|max:191',
  'models_name' => 'required|max:191',
  'role_name' => 'required|max:191',
  'isactive' => 'required|max:191',
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
);
		
		public static $formType=array (
  'id' => 
  array (
    'id' => 36,
    'created_at' => '2021-09-15T16:36:51.000000Z',
    'updated_at' => '2021-09-15T16:36:51.000000Z',
    'deleted_at' => NULL,
    'models_name' => '45',
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
  'models_name' => 
  array (
    'id' => 37,
    'created_at' => '2021-09-15T16:36:51.000000Z',
    'updated_at' => '2021-09-15T16:36:51.000000Z',
    'deleted_at' => NULL,
    'models_name' => '45',
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
    'sortale' => NULL,
    'searchableforms' => NULL,
  ),
  'role_name' => 
  array (
    'id' => 38,
    'created_at' => '2021-09-15T16:36:51.000000Z',
    'updated_at' => '2021-09-15T16:36:51.000000Z',
    'deleted_at' => NULL,
    'models_name' => '45',
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
    'sortale' => NULL,
    'searchableforms' => NULL,
  ),
  'isactive' => 
  array (
    'id' => 39,
    'created_at' => '2021-09-15T16:36:51.000000Z',
    'updated_at' => '2021-09-15T16:36:51.000000Z',
    'deleted_at' => NULL,
    'models_name' => '45',
    'name' => 'isactive',
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
		 $options["models_name"]=\Madan\Dcrud\Models\Models::pluck("name","id")->prepend("Select One...","");$options["role_name"]=\App\Models\Role::pluck("name","id")->prepend("Select One...","");
	

		return $options;
		}
		
    
}