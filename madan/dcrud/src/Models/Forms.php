<?php

namespace Madan\Dcrud\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Forms extends Model
{
    protected $table = 'forms';
    use SoftDeletes;
    
    
    
      protected $fillable = [
       "id","models_name","name","createvalidator","updatevalidator","type","modeldata","tablehead","formdata","fillable","formclass","defaultvalue","options","sortale","searchableforms"
    ];
	
      public static $modelData=[
        
         "id"=>"","models_name"=>"","name"=>"","createvalidator"=>"","updatevalidator"=>"","type"=>"","modeldata"=>"","tablehead"=>"","formdata"=>"","fillable"=>"","formclass"=>"","defaultvalue"=>"","options"=>"","sortale"=>"","searchableforms"=>""
        ];
		public static $tabHeadsG=["id","models_name","name","createvalidator","updatevalidator","type","modeldata","tablehead","formdata","fillable","formclass","defaultvalue","options","sortale","searchableforms"];
		public static $formDataG=["id","models_name","name","createvalidator","updatevalidator","type","modeldata","tablehead","formdata","fillable","formclass","defaultvalue","options","sortale","searchableforms"];
		public static $validator= 
               array (
  'id' => 'max:191',
  'models_name' => 'required|max:191',
  'name' => 'required|max:191',
  'createvalidator' => 'max:19199999999',
  'updatevalidator' => 'max:1919999999',
  'type' => 'required|max:191',
  'modeldata' => 'required|max:191',
  'tablehead' => 'required|max:191',
  'formdata' => 'required|max:191',
  'fillable' => 'required|max:191',
  'formclass' => 'required|max:191',
  'defaultvalue' => 'max:191',
  'options' => 'max:191',
  'sortale' => 'max:191',
  'searchableforms' => 'max:191',
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
  'id' => 
  array (
    'id' => 1,
    'created_at' => '2021-09-15T11:59:00.000000Z',
    'updated_at' => '2021-12-25T18:16:20.000000Z',
    'deleted_at' => NULL,
    'models_name' => '35',
    'name' => 'id',
    'createvalidator' => 'max:191',
    'updatevalidator' => 'required|max:191',
    'type' => 'hidden',
    'modeldata' => 1,
    'tablehead' => 0,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'hide',
    'defaultvalue' => NULL,
    'options' => NULL,
    'sortale' => 1,
    'searchableforms' => 1,
  ),
  'models_name' => 
  array (
    'id' => 2,
    'created_at' => '2021-09-15T11:59:00.000000Z',
    'updated_at' => '2021-09-15T12:26:57.000000Z',
    'deleted_at' => NULL,
    'models_name' => '35',
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
    'options' => '\\Madan\\Dcrud\\Models\\Models::pluck("name","id")->prepend("Select One...","");',
    'sortale' => 1,
    'searchableforms' => 1,
  ),
  'name' => 
  array (
    'id' => 3,
    'created_at' => '2021-09-15T11:59:00.000000Z',
    'updated_at' => '2021-09-15T14:09:59.000000Z',
    'deleted_at' => NULL,
    'models_name' => '35',
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
    'sortale' => 1,
    'searchableforms' => 0,
  ),
  'createvalidator' => 
  array (
    'id' => 4,
    'created_at' => '2021-09-15T11:59:00.000000Z',
    'updated_at' => '2021-12-25T18:18:35.000000Z',
    'deleted_at' => NULL,
    'models_name' => '35',
    'name' => 'createvalidator',
    'createvalidator' => 'max:19199999999',
    'updatevalidator' => 'max:19999999991',
    'type' => 'text',
    'modeldata' => 1,
    'tablehead' => 0,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'col-lg-2',
    'defaultvalue' => 'max:191',
    'options' => NULL,
    'sortale' => 0,
    'searchableforms' => 0,
  ),
  'updatevalidator' => 
  array (
    'id' => 5,
    'created_at' => '2021-09-15T11:59:00.000000Z',
    'updated_at' => '2021-12-25T18:18:47.000000Z',
    'deleted_at' => NULL,
    'models_name' => '35',
    'name' => 'updatevalidator',
    'createvalidator' => 'max:1919999999',
    'updatevalidator' => 'max:1919999999',
    'type' => 'text',
    'modeldata' => 1,
    'tablehead' => 0,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'col-lg-2',
    'defaultvalue' => 'max:191',
    'options' => NULL,
    'sortale' => 0,
    'searchableforms' => 0,
  ),
  'type' => 
  array (
    'id' => 6,
    'created_at' => '2021-09-15T11:59:00.000000Z',
    'updated_at' => '2021-09-15T16:15:48.000000Z',
    'deleted_at' => NULL,
    'models_name' => '35',
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
    'options' => '[\'text\'=>\'text\',\'textarea\'=>\'textarea\',\'dropzone\'=>\'dropzone\',\'editorjs\'=>\'editorjs\',\'select\'=>\'select\',\'switch\'=>\'switch\',\'radio\'=>\'radio\',\'hidden\'=>\'hidden\',\'pagebuilder\'=>\'pagebuilder\']',
    'sortale' => 0,
    'searchableforms' => 0,
  ),
  'modeldata' => 
  array (
    'id' => 7,
    'created_at' => '2021-09-15T11:59:00.000000Z',
    'updated_at' => '2021-09-15T12:30:07.000000Z',
    'deleted_at' => NULL,
    'models_name' => '35',
    'name' => 'modeldata',
    'createvalidator' => 'required|max:191',
    'updatevalidator' => 'required|max:191',
    'type' => 'switch',
    'modeldata' => 1,
    'tablehead' => 0,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'col-lg-2',
    'defaultvalue' => NULL,
    'options' => NULL,
    'sortale' => 0,
    'searchableforms' => 0,
  ),
  'tablehead' => 
  array (
    'id' => 8,
    'created_at' => '2021-09-15T11:59:00.000000Z',
    'updated_at' => '2021-09-15T12:30:15.000000Z',
    'deleted_at' => NULL,
    'models_name' => '35',
    'name' => 'tablehead',
    'createvalidator' => 'required|max:191',
    'updatevalidator' => 'required|max:191',
    'type' => 'switch',
    'modeldata' => 1,
    'tablehead' => 0,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'col-lg-2',
    'defaultvalue' => NULL,
    'options' => NULL,
    'sortale' => 0,
    'searchableforms' => 0,
  ),
  'formdata' => 
  array (
    'id' => 9,
    'created_at' => '2021-09-15T11:59:00.000000Z',
    'updated_at' => '2021-09-15T12:30:22.000000Z',
    'deleted_at' => NULL,
    'models_name' => '35',
    'name' => 'formdata',
    'createvalidator' => 'required|max:191',
    'updatevalidator' => 'required|max:191',
    'type' => 'switch',
    'modeldata' => 1,
    'tablehead' => 0,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'col-lg-2',
    'defaultvalue' => NULL,
    'options' => NULL,
    'sortale' => 0,
    'searchableforms' => 0,
  ),
  'fillable' => 
  array (
    'id' => 10,
    'created_at' => '2021-09-15T11:59:00.000000Z',
    'updated_at' => '2021-09-15T12:30:31.000000Z',
    'deleted_at' => NULL,
    'models_name' => '35',
    'name' => 'fillable',
    'createvalidator' => 'required|max:191',
    'updatevalidator' => 'required|max:191',
    'type' => 'switch',
    'modeldata' => 1,
    'tablehead' => 0,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'col-lg-2',
    'defaultvalue' => NULL,
    'options' => NULL,
    'sortale' => 0,
    'searchableforms' => 0,
  ),
  'formclass' => 
  array (
    'id' => 11,
    'created_at' => '2021-09-15T11:59:00.000000Z',
    'updated_at' => '2021-09-15T11:59:00.000000Z',
    'deleted_at' => NULL,
    'models_name' => '35',
    'name' => 'formclass',
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
  'defaultvalue' => 
  array (
    'id' => 12,
    'created_at' => '2021-09-15T11:59:00.000000Z',
    'updated_at' => '2021-09-15T12:08:38.000000Z',
    'deleted_at' => NULL,
    'models_name' => '35',
    'name' => 'defaultvalue',
    'createvalidator' => 'max:191',
    'updatevalidator' => 'max:191',
    'type' => 'text',
    'modeldata' => 1,
    'tablehead' => 1,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'col-lg-2',
    'defaultvalue' => NULL,
    'options' => NULL,
    'sortale' => 1,
    'searchableforms' => 1,
  ),
  'options' => 
  array (
    'id' => 13,
    'created_at' => '2021-09-15T11:59:00.000000Z',
    'updated_at' => '2021-09-15T12:09:38.000000Z',
    'deleted_at' => NULL,
    'models_name' => '35',
    'name' => 'options',
    'createvalidator' => 'max:191',
    'updatevalidator' => 'max:191',
    'type' => 'text',
    'modeldata' => 1,
    'tablehead' => 0,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'col-lg-2',
    'defaultvalue' => NULL,
    'options' => NULL,
    'sortale' => 0,
    'searchableforms' => 0,
  ),
  'sortale' => 
  array (
    'id' => 14,
    'created_at' => '2021-09-15T11:59:00.000000Z',
    'updated_at' => '2021-09-15T12:08:57.000000Z',
    'deleted_at' => NULL,
    'models_name' => '35',
    'name' => 'sortale',
    'createvalidator' => 'max:191',
    'updatevalidator' => 'max:191',
    'type' => 'switch',
    'modeldata' => 1,
    'tablehead' => 0,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'col-lg-2',
    'defaultvalue' => NULL,
    'options' => NULL,
    'sortale' => 0,
    'searchableforms' => 0,
  ),
  'searchableforms' => 
  array (
    'id' => 15,
    'created_at' => '2021-09-15T11:59:00.000000Z',
    'updated_at' => '2021-09-15T12:09:25.000000Z',
    'deleted_at' => NULL,
    'models_name' => '35',
    'name' => 'searchableforms',
    'createvalidator' => 'max:191',
    'updatevalidator' => 'max:191',
    'type' => 'switch',
    'modeldata' => 1,
    'tablehead' => 0,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'col-lg-2',
    'defaultvalue' => NULL,
    'options' => NULL,
    'sortale' => 0,
    'searchableforms' => 0,
  ),
);
		public static function getSelectData(){
			$options=[];
		 $options["models_name"]=\Madan\Dcrud\Models\Models::pluck("name","id")->prepend("Select One...","");;$options["type"]=['text'=>'text','textarea'=>'textarea','dropzone'=>'dropzone','editorjs'=>'editorjs','select'=>'select','switch'=>'switch','radio'=>'radio','hidden'=>'hidden','pagebuilder'=>'pagebuilder'];
	

		return $options;
		}
		
    
}