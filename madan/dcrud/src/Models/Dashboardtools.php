<?php

namespace Madan\Dcrud\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Dashboardtools extends Model
{
    protected $table = 'dashboardtools';
    use SoftDeletes;
    
    
    
      protected $fillable = [
       "name","type","width","source","onclick"
    ];
	
      public static $modelData=[
          'id'=>'',
         "name"=>"","type"=>"","width"=>"","source"=>"","onclick"=>""
        ];
		public static $tabHeadsG=["id","name","type","width","source","onclick"];
		public static $formDataG=["name","type","width","source","onclick"];
		public static $validator= 
               array (
  'name' => 'required|max:191',
  'type' => 'required|max:191',
  'width' => 'required|max:191',
  'source' => 'required|max:191',
  'onclick' => 'required|max:191',
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
  'dashboard'=>'yes'
);
		
		public static $formType=array (
  'name' => 
  array (
    'id' => 63,
    'created_at' => '2021-09-13T15:59:28.000000Z',
    'updated_at' => '2021-09-13T15:59:28.000000Z',
    'deleted_at' => NULL,
    'models_name' => '22',
    'name' => 'name',
    'createvalidator' => 'required|max:191',
    'updatevalidator' => 'required|max:191',
    'type' => 'text',
    'modeldata' => 'Yes',
    'tablehead' => 'Yes',
    'formdata' => 'Yes',
    'fillable' => 'Yes',
  ),'id' => 
  array (
    'id' => 63,
    'created_at' => '2021-09-13T15:59:28.000000Z',
    'updated_at' => '2021-09-13T15:59:28.000000Z',
    'deleted_at' => NULL,
    'models_name' => '22',
    'name' => 'name',
    'createvalidator' => 'required|max:191',
    'updatevalidator' => 'required|max:191',
    'type' => 'text',
    'modeldata' => 'Yes',
    'tablehead' => 'Yes',
    'formdata' => 'Yes',
    'fillable' => 'Yes',
  ),
  'type' => 
  array (
    'id' => 64,
    'created_at' => '2021-09-13T15:59:28.000000Z',
    'updated_at' => '2021-09-13T15:59:28.000000Z',
    'deleted_at' => NULL,
    'models_name' => '22',
    'name' => 'type',
    'createvalidator' => 'required|max:191',
    'updatevalidator' => 'required|max:191',
    'type' => 'text',
    'modeldata' => 'Yes',
    'tablehead' => 'Yes',
    'formdata' => 'Yes',
    'fillable' => 'Yes',
  ),
  'width' => 
  array (
    'id' => 65,
    'created_at' => '2021-09-13T15:59:28.000000Z',
    'updated_at' => '2021-09-13T15:59:28.000000Z',
    'deleted_at' => NULL,
    'models_name' => '22',
    'name' => 'width',
    'createvalidator' => 'required|max:191',
    'updatevalidator' => 'required|max:191',
    'type' => 'text',
    'modeldata' => 'Yes',
    'tablehead' => 'Yes',
    'formdata' => 'Yes',
    'fillable' => 'Yes',
  ),
  'source' => 
  array (
    'id' => 66,
    'created_at' => '2021-09-13T15:59:28.000000Z',
    'updated_at' => '2021-09-13T15:59:28.000000Z',
    'deleted_at' => NULL,
    'models_name' => '22',
    'name' => 'source',
    'createvalidator' => 'required|max:191',
    'updatevalidator' => 'required|max:191',
    'type' => 'text',
    'modeldata' => 'Yes',
    'tablehead' => 'Yes',
    'formdata' => 'Yes',
    'fillable' => 'Yes',
  ),
  'onclick' => 
  array (
    'id' => 67,
    'created_at' => '2021-09-13T15:59:28.000000Z',
    'updated_at' => '2021-09-13T15:59:28.000000Z',
    'deleted_at' => NULL,
    'models_name' => '22',
    'name' => 'onclick',
    'createvalidator' => 'required|max:191',
    'updatevalidator' => 'required|max:191',
    'type' => 'text',
    'modeldata' => 'Yes',
    'tablehead' => 'Yes',
    'formdata' => 'Yes',
    'fillable' => 'Yes',
  ),
);
		public static function getSelectData(){
			$options=[];
		 
	

		return $options;
		}
		
    
}