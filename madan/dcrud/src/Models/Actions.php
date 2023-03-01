<?php

namespace Madan\Dcrud\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Actions extends Model
{
    protected $table = 'actions';
    use SoftDeletes;
    
    
    
      protected $fillable = [
       "id","models_name","forms_name","name","btnclass","onupdate","state","reverse","namerev","bclassrev","updaterev"
    ];
	
      public static $modelData=[
        
         "id"=>"","models_name"=>"","forms_name"=>"","name"=>"","btnclass"=>"","onupdate"=>"","state"=>"","reverse"=>"","namerev"=>"","bclassrev"=>"","updaterev"=>""
        ];
		public static $tabHeadsG=["id","models_name","forms_name","name","btnclass","onupdate","state","reverse","namerev","bclassrev","updaterev"];
		public static $formDataG=["id","models_name","forms_name","name","btnclass","onupdate","state","reverse","namerev","bclassrev","updaterev"];
		public static $validator= 
               array (
  'id' => 'max:191',
  'models_name' => 'required|max:191',
  'forms_name' => 'required|max:191',
  'name' => 'required|max:191',
  'btnclass' => 'required|max:191',
  'onupdate' => 'required|max:191',
  'state' => 'max:191',
  'reverse' => 'required|max:191',
  'namerev' => 'required|max:191',
  'bclassrev' => 'required|max:191',
  'updaterev' => 'required|max:191',
)
            ;
		public static $subModules=array (
);
			public static $actions=array (
);
		public static $access=array (
  0 => '1',
);
		public static $pType=['dashboard'=>'no','showCrud'=>''];
		
		public static $formType=array (
  'id' => 
  array (
    'id' => 21,
    'created_at' => '2021-09-15T15:30:45.000000Z',
    'updated_at' => '2022-05-09T21:35:24.000000Z',
    'deleted_at' => NULL,
    'models_name' => '41',
    'name' => 'id',
    'createvalidator' => 'max:191',
    'updatevalidator' => 'max:191',
    'type' => 'hidden',
    'modeldata' => 1,
    'tablehead' => 1,
    'formdata' => 1,
    'fillable' => 0,
    'formclass' => 'hide',
    'defaultvalue' => NULL,
    'options' => NULL,
    'sortale' => 0,
    'searchableforms' => 0,
  ),
  'models_name' => 
  array (
    'id' => 22,
    'created_at' => '2021-09-15T15:30:45.000000Z',
    'updated_at' => '2021-12-18T12:29:48.000000Z',
    'deleted_at' => NULL,
    'models_name' => '41',
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
    'options' => '\\Madan\\Dcrud\\Models\\Models::whereNull("deleted_at")->pluck("name","id")->prepend("Select One...","")',
    'sortale' => 0,
    'searchableforms' => 0,
  ),
  'forms_name' => 
  array (
    'id' => 23,
    'created_at' => '2021-09-15T15:30:45.000000Z',
    'updated_at' => '2021-12-18T12:30:02.000000Z',
    'deleted_at' => NULL,
    'models_name' => '41',
    'name' => 'forms_name',
    'createvalidator' => 'required|max:191',
    'updatevalidator' => 'required|max:191',
    'type' => 'select',
    'modeldata' => 1,
    'tablehead' => 1,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'col-lg-2',
    'defaultvalue' => NULL,
    'options' => '\\Madan\\Dcrud\\Models\\Forms::whereNull("deleted_at")->pluck("name","id")->prepend("Select One...","")',
    'sortale' => 0,
    'searchableforms' => 0,
  ),
  'name' => 
  array (
    'id' => 24,
    'created_at' => '2021-09-15T15:30:45.000000Z',
    'updated_at' => '2021-09-15T15:30:45.000000Z',
    'deleted_at' => NULL,
    'models_name' => '41',
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
  'btnclass' => 
  array (
    'id' => 25,
    'created_at' => '2021-09-15T15:30:45.000000Z',
    'updated_at' => '2021-09-15T15:30:45.000000Z',
    'deleted_at' => NULL,
    'models_name' => '41',
    'name' => 'btnclass',
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
  'onupdate' => 
  array (
    'id' => 26,
    'created_at' => '2021-09-15T15:30:45.000000Z',
    'updated_at' => '2021-09-15T16:12:20.000000Z',
    'deleted_at' => NULL,
    'models_name' => '41',
    'name' => 'onupdate',
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
  'state' => 
  array (
    'id' => 27,
    'created_at' => '2021-09-15T15:30:45.000000Z',
    'updated_at' => '2021-09-15T15:30:45.000000Z',
    'deleted_at' => NULL,
    'models_name' => '41',
    'name' => 'state',
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
    'sortale' => 0,
    'searchableforms' => 0,
  ),
  'reverse' => 
  array (
    'id' => 28,
    'created_at' => '2021-09-15T15:30:45.000000Z',
    'updated_at' => '2021-09-15T15:36:14.000000Z',
    'deleted_at' => NULL,
    'models_name' => '41',
    'name' => 'reverse',
    'createvalidator' => 'required|max:191',
    'updatevalidator' => 'required|max:191',
    'type' => 'switch',
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
  'namerev' => 
  array (
    'id' => 29,
    'created_at' => '2021-09-15T15:30:45.000000Z',
    'updated_at' => '2021-09-15T15:30:45.000000Z',
    'deleted_at' => NULL,
    'models_name' => '41',
    'name' => 'namerev',
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
  'bclassrev' => 
  array (
    'id' => 30,
    'created_at' => '2021-09-15T15:30:45.000000Z',
    'updated_at' => '2021-09-15T15:30:45.000000Z',
    'deleted_at' => NULL,
    'models_name' => '41',
    'name' => 'bclassrev',
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
  'updaterev' => 
  array (
    'id' => 31,
    'created_at' => '2021-09-15T15:30:45.000000Z',
    'updated_at' => '2021-09-15T15:30:45.000000Z',
    'deleted_at' => NULL,
    'models_name' => '41',
    'name' => 'updaterev',
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
);
		public static function getSelectData(){
			$options=[];
		 $options["models_name"]=\Madan\Dcrud\Models\Models::whereNull("deleted_at")->pluck("name","id")->prepend("Select One...","");$options["forms_name"]=\Madan\Dcrud\Models\Forms::whereNull("deleted_at")->pluck("name","id")->prepend("Select One...","");
	

		return $options;
		}
		
    
}