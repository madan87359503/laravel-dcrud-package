<?php

namespace Madan\Dcrud\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Routes extends Model
{
    protected $table = 'routes';
    use SoftDeletes;
    
    
    
      protected $fillable = [
       "name","type","url","controllers_name","cactions_name","id"
    ];
	
      public static $modelData=[
        
         "name"=>"","type"=>"","url"=>"","controllers_name"=>"","cactions_name"=>"","id"=>""
        ];
		public static $tabHeadsG=["name","type","url","controllers_name","cactions_name","id"];
		public static $formDataG=["name","type","url","controllers_name","cactions_name","id"];
		public static $validator= 
               array (
  'name' => 'required|max:191',
  'type' => 'required|max:191',
  'url' => 'required|max:191',
  'controllers_name' => 'required|max:191',
  'cactions_name' => 'required|max:191',
  'id' => NULL,
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
);
		
		public static $formType=array (
  'name' => 
  array (
    'id' => 892,
    'created_at' => '2021-12-25T18:14:00.000000Z',
    'updated_at' => '2021-12-25T18:14:00.000000Z',
    'deleted_at' => NULL,
    'models_name' => '52',
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
  'type' => 
  array (
    'id' => 893,
    'created_at' => '2021-12-25T18:14:00.000000Z',
    'updated_at' => '2021-12-25T18:37:52.000000Z',
    'deleted_at' => NULL,
    'models_name' => '52',
    'name' => 'type',
    'createvalidator' => 'required|max:191',
    'updatevalidator' => 'required|max:191',
    'type' => 'select',
    'modeldata' => 1,
    'tablehead' => 1,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'col-lg-2',
    'defaultvalue' => NULL,
    'options' => '[\'get\',\'post\']',
    'sortale' => NULL,
    'searchableforms' => NULL,
  ),
  'url' => 
  array (
    'id' => 894,
    'created_at' => '2021-12-25T18:14:00.000000Z',
    'updated_at' => '2021-12-25T18:14:00.000000Z',
    'deleted_at' => NULL,
    'models_name' => '52',
    'name' => 'url',
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
  'controllers_name' => 
  array (
    'id' => 895,
    'created_at' => '2021-12-25T18:14:00.000000Z',
    'updated_at' => '2021-12-25T18:25:48.000000Z',
    'deleted_at' => NULL,
    'models_name' => '52',
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
    'sortale' => NULL,
    'searchableforms' => NULL,
  ),
  'cactions_name' => 
  array (
    'id' => 896,
    'created_at' => '2021-12-25T18:14:00.000000Z',
    'updated_at' => '2021-12-25T18:27:11.000000Z',
    'deleted_at' => NULL,
    'models_name' => '52',
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
    'sortale' => NULL,
    'searchableforms' => NULL,
  ),
  'id' => 
  array (
    'id' => 897,
    'created_at' => '2021-12-25T18:20:06.000000Z',
    'updated_at' => '2021-12-25T18:29:05.000000Z',
    'deleted_at' => NULL,
    'models_name' => '52',
    'name' => 'id',
    'createvalidator' => NULL,
    'updatevalidator' => NULL,
    'type' => 'hidden',
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
);
		public static function getSelectData(){
			$options=[];
		 $options["type"]=['get','post'];$options["controllers_name"]=\Madan\Dcrud\Models\Controllers::pluck("name","id")->prepend("Select One...","");$options["cactions_name"]=\Madan\Dcrud\Models\Cactions::pluck("name","id")->prepend("Select One...","");
	

		return $options;
		}
		
    
}