<?php

namespace Madan\Dcrud\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Controllers extends Model
{
    protected $table = 'controllers';
    use SoftDeletes;
    
    
    
      protected $fillable = [
       "name","version","publish","code","id"
    ];
	
      public static $modelData=[
        
         "name"=>"","version"=>"","publish"=>"","code"=>"","id"=>""
        ];
		public static $tabHeadsG=["name","version","publish","code","id"];
		public static $formDataG=["name","version","publish","code","id"];
		public static $validator= 
               array (
  'name' => 'required|max:191',
  'version' => 'required|max:191',
  'publish' => 'required|max:191',
  'code' => 'max:19999999999999999991',
  'id' => 'max:9999',
)
            ;
		public static $subModules=array (
  'cactions' => 'controllers_name',
);
			public static $actions=array (
  'publish' => 
  array (
    'name' => 'Publish',
    'bclass' => 'btn btn-danger',
    'update' => 'publish=published,afterupdate=generateController',
    'state' => 'published',
    'reverse' => 'true',
    'namerev' => 'Publish',
    'bclassrev' => 'btn btn-success',
    'updaterev' => 'publish=published,afterupdate=generateController',
    'forms_name' => '52',
  ),
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
);
		
		public static $formType=array (
  'name' => 
  array (
    'id' => 45,
    'created_at' => '2021-10-31T15:45:50.000000Z',
    'updated_at' => '2021-10-31T15:45:50.000000Z',
    'deleted_at' => NULL,
    'models_name' => '47',
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
  'version' => 
  array (
    'id' => 46,
    'created_at' => '2021-10-31T15:45:50.000000Z',
    'updated_at' => '2021-10-31T15:45:50.000000Z',
    'deleted_at' => NULL,
    'models_name' => '47',
    'name' => 'version',
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
  'publish' => 
  array (
    'id' => 47,
    'created_at' => '2021-10-31T15:45:50.000000Z',
    'updated_at' => '2021-10-31T15:45:50.000000Z',
    'deleted_at' => NULL,
    'models_name' => '47',
    'name' => 'publish',
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
  'code' => 
  array (
    'id' => 48,
    'created_at' => '2021-10-31T15:45:50.000000Z',
    'updated_at' => '2021-12-21T19:07:03.000000Z',
    'deleted_at' => NULL,
    'models_name' => '47',
    'name' => 'code',
    'createvalidator' => 'max:19999999999999999991',
    'updatevalidator' => 'max:1999999999999999991',
    'type' => 'text',
    'modeldata' => 1,
    'tablehead' => 1,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'col-lg-4',
    'defaultvalue' => NULL,
    'options' => NULL,
    'sortale' => 0,
    'searchableforms' => 0,
  ),
  'id' => 
  array (
    'id' => 70,
    'created_at' => '2021-11-25T16:19:37.000000Z',
    'updated_at' => '2022-03-18T14:13:40.000000Z',
    'deleted_at' => NULL,
    'models_name' => '47',
    'name' => 'id',
    'createvalidator' => 'max:9999',
    'updatevalidator' => 'max:9999',
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
		 
	

		return $options;
		}
		public function generateController($id){  		$vars=''; 		$cactions=\Madan\Dcrud\Models\Cactions::where('controllers_name','=',$id)->get(); 		foreach($cactions as $ca){ 			if($ca->name=='index'){ 				$cavar=\Madan\Dcrud\Models\Cavariables::where('cactions_name','=',$ca->id)->get(); 				$comp=\Madan\Dcrud\Models\Component::where('id','=',$ca->component_name)->first()->name; 				foreach($cavar as $cv){ 					$vars.=$cv->model.'-'.$cv->columns.',,'; 				} 			} 			 		} 		 \Madan\Dcrud\MainController::generateCO(['type'=>'page','datasource'=>$vars,'name'=>Controllers::find($id)->name,'content'=>$comp]); 		 		 		}
    
}