<?php

namespace Madan\Dcrud\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Component extends Model
{
    protected $table = 'component';
    use SoftDeletes;
    
    
    
      protected $fillable = [
       "name","datasource","content","type","preview","cactions_name","id","publish","modules_title"
    ];
	
      public static $modelData=[
        
         "name"=>"","datasource"=>"","content"=>"","type"=>"","preview"=>"","cactions_name"=>"","id"=>"","publish"=>"","modules_title"=>""
        ];
		public static $tabHeadsG=["name","datasource","content","type","preview","cactions_name","id","publish","modules_title"];
		public static $formDataG=["name","datasource","content","type","preview","cactions_name","id","publish","modules_title"];
		public static $validator= 
               array (
  'name' => 'required|max:191',
  'datasource' => 'required|max:191',
  'content' => 'required|max:199999999999991',
  'type' => 'required|max:191',
  'preview' => 'max:19187695',
  'cactions_name' => 'max:99999999999999',
  'id' => 'max:88888888888888',
  'publish' => 'max:191',
  'modules_title' => 'max:213',
)
            ;
		public static $subModules=array (
);
			public static $actions=array (
  'publish' => 
  array (
    'name' => 'Publish',
    'bclass' => 'btn-success',
    'update' => 'publish=published&afterupdate=updateComponent',
    'state' => 'no',
    'reverse' => 'true',
    'namerev' => 'Publish again',
    'bclassrev' => 'btn-info',
    'updaterev' => 'publish=published',
    'forms_name' => '1040',
  ),
);
		public static $access=array (
  0 => '1',
);
		public static $pType=['dashboard'=>'no','showCrud'=>'yes'];
		
		public static $formType=array (
  'name' => 
  array (
    'id' => 65,
    'created_at' => '2021-11-02T17:44:42.000000Z',
    'updated_at' => '2021-11-02T17:44:42.000000Z',
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
    'created_at' => '2021-11-02T17:44:42.000000Z',
    'updated_at' => '2021-11-02T17:44:42.000000Z',
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
    'created_at' => '2021-11-02T17:44:42.000000Z',
    'updated_at' => '2023-01-12T22:13:12.000000Z',
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
    'created_at' => '2021-11-02T17:44:42.000000Z',
    'updated_at' => '2023-01-18T22:44:56.000000Z',
    'deleted_at' => NULL,
    'models_name' => '51',
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
    'options' => '[\'page\',\'component\']',
    'sortale' => 0,
    'searchableforms' => 0,
  ),
  'preview' => 
  array (
    'id' => 69,
    'created_at' => '2021-11-02T17:44:42.000000Z',
    'updated_at' => '2023-01-12T21:03:08.000000Z',
    'deleted_at' => NULL,
    'models_name' => '51',
    'name' => 'preview',
    'createvalidator' => 'max:19187695',
    'updatevalidator' => 'max:19187695',
    'type' => 'dropzone',
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
    'created_at' => '2021-12-30T00:57:20.000000Z',
    'updated_at' => '2022-04-08T19:35:09.000000Z',
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
    'created_at' => '2021-12-30T01:02:17.000000Z',
    'updated_at' => '2023-01-12T21:35:21.000000Z',
    'deleted_at' => NULL,
    'models_name' => '51',
    'name' => 'id',
    'createvalidator' => 'max:88888888888888',
    'updatevalidator' => 'max:88888888888888',
    'type' => 'hidden',
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
  'publish' => 
  array (
    'id' => 1040,
    'created_at' => '2023-01-17T11:23:44.000000Z',
    'updated_at' => '2023-01-17T12:03:11.000000Z',
    'deleted_at' => NULL,
    'models_name' => '51',
    'name' => 'publish',
    'createvalidator' => 'max:191',
    'updatevalidator' => 'max:191',
    'type' => 'hidden',
    'modeldata' => 1,
    'tablehead' => 1,
    'formdata' => 0,
    'fillable' => 1,
    'formclass' => 'hide',
    'defaultvalue' => NULL,
    'options' => NULL,
    'sortale' => 0,
    'searchableforms' => 0,
  ),
  'modules_title' => 
  array (
    'id' => 1048,
    'created_at' => '2023-01-18T22:45:53.000000Z',
    'updated_at' => '2023-01-18T22:49:49.000000Z',
    'deleted_at' => NULL,
    'models_name' => '51',
    'name' => 'modules_title',
    'createvalidator' => 'max:213',
    'updatevalidator' => 'max:213',
    'type' => 'select',
    'modeldata' => 1,
    'tablehead' => 1,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'col-lg-2',
    'defaultvalue' => NULL,
    'options' => '\\Madan\\Dcrud\\Models\\Modules::pluck("title","id")->prepend("Select One...","");',
    'sortale' => NULL,
    'searchableforms' => NULL,
  ),
);
		public static function getSelectData(){
			$options=[];
		 $options["type"]=['page'];$options["cactions_name"]= \Madan\Dcrud\Models\Cactions::pluck("name","id")->prepend("Select One...","");;$options["modules_title"]=\Madan\Dcrud\Models\Modules::pluck("title","id")->prepend("Select One...","");;
	

		return $options;
		}
		public static function updateComponent($id){                     echo 'jjooooo';                     $postdata= Component::where('id',$id)->first(); 		          if($postdata['type']=='static'){            \Madan\Dcrud\MainController::generateFile($postdata);               }else if($postdata['type']=='file'){            $this->generateFileImage($postdata);        }        else{            \Madan\Dcrud\MainController::generateCO($postdata);   \Artisan::call('view:clear');  $comp= Component::findOrFail($req->id);
                $comp->type= 'gg';
                $comp->save();                } 		                 }
    
}