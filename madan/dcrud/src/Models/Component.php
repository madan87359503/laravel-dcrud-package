<?php

namespace Madan\Dcrud\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Component extends Model
{
    protected $table = 'component';
    use SoftDeletes;
    
    
    
      protected $fillable = [
       "name","datasource","content","type","preview","cactions_name","id"
    ];
	
      public static $modelData=[
        
         "name"=>"","datasource"=>"","content"=>"","type"=>"","preview"=>"","cactions_name"=>"","id"=>""
        ];
		public static $tabHeadsG=["name","datasource","content","type","preview","cactions_name","id"];
		public static $formDataG=["name","datasource","content","type","preview","cactions_name","id"];
		public static $validator= 
               array (
  'name' => 'required|max:191',
  'datasource' => 'required|max:191',
  'content' => 'required|max:199999999999991',
  'type' => 'required|max:191',
  'preview' => 'max:19187695',
  'cactions_name' => 'max:99999999999999',
  'id' => 'max:88888888888888',
)
            ;
		public static $subModules=array (
);
			public static $actions=array (
);
		public static $access=array (
  0 => '1',
);
		public static $pType=['dashboard'=>'no','showCrud'=>'yes'];
		
		public static $formType=array (
  'name' => 
  array (
    'id' => 65,
    'created_at' => '2021-11-02T07:59:42.000000Z',
    'updated_at' => '2021-11-02T07:59:42.000000Z',
    'deleted_at' => NULL,
    'models_name' => '51',
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
  'datasource' => 
  array (
    'id' => 66,
    'created_at' => '2021-11-02T07:59:42.000000Z',
    'updated_at' => '2021-11-02T07:59:42.000000Z',
    'deleted_at' => NULL,
    'models_name' => '51',
    'name' => 'datasource',
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
  'content' => 
  array (
    'id' => 67,
    'created_at' => '2021-11-02T07:59:42.000000Z',
    'updated_at' => '2022-05-11T13:06:42.000000Z',
    'deleted_at' => NULL,
    'models_name' => '51',
    'name' => 'content',
    'createvalidator' => 'required|max:199999999999991',
    'updatevalidator' => 'required|max:19999999999991',
    'type' => 'pagebuilder',
    'modeldata' => 1,
    'tablehead' => 0,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'col-lg-12',
    'defaultvalue' => NULL,
    'options' => NULL,
    'sortale' => 0,
    'searchableforms' => 0,
  ),
  'type' => 
  array (
    'id' => 68,
    'created_at' => '2021-11-02T07:59:42.000000Z',
    'updated_at' => '2021-11-02T07:59:42.000000Z',
    'deleted_at' => NULL,
    'models_name' => '51',
    'name' => 'type',
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
  'preview' => 
  array (
    'id' => 69,
    'created_at' => '2021-11-02T07:59:42.000000Z',
    'updated_at' => '2022-05-11T16:01:34.000000Z',
    'deleted_at' => NULL,
    'models_name' => '51',
    'name' => 'preview',
    'createvalidator' => 'max:19187695',
    'updatevalidator' => 'max:19187695',
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
  'cactions_name' => 
  array (
    'id' => 902,
    'created_at' => '2021-12-29T14:12:20.000000Z',
    'updated_at' => '2022-04-08T09:50:09.000000Z',
    'deleted_at' => NULL,
    'models_name' => '51',
    'name' => 'cactions_name',
    'createvalidator' => 'max:99999999999999',
    'updatevalidator' => 'max:99999999999999',
    'type' => 'select',
    'modeldata' => 1,
    'tablehead' => 1,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'col-lg-2',
    'defaultvalue' => NULL,
    'options' => '\\Madan\\Dcrud\\Models\\Cactions::pluck("name","id")->prepend("Select One...","");',
    'sortale' => 1,
    'searchableforms' => 1,
  ),
  'id' => 
  array (
    'id' => 903,
    'created_at' => '2021-12-29T14:17:17.000000Z',
    'updated_at' => '2022-05-11T12:58:02.000000Z',
    'deleted_at' => NULL,
    'models_name' => '51',
    'name' => 'id',
    'createvalidator' => 'max:88888888888888',
    'updatevalidator' => 'max:88888888888888',
    'type' => 'text',
    'modeldata' => 1,
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
		 $options["cactions_name"]=\Madan\Dcrud\Models\Cactions::pluck("name","id")->prepend("Select One...","");;
	

		return $options;
		}
		
    
}