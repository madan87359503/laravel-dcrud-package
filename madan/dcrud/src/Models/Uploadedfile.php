<?php

namespace Madan\Dcrud\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Uploadedfile extends Model
{
    protected $table = 'uploadedfile';
    use SoftDeletes;
    
    	public static $access=array (
  0 => '1',
);
public static $pType=['dashboard'=>false,'showCrud'=>true];
    
      protected $fillable = [
       "name","uploader","path"
    ];
	
      public static $modelData=[
          'id'=>'',
         "name"=>"","uploader"=>"","path"=>""
        ];
		public static $tabHeadsG=["id","name","uploader","path"];
		public static $formDataG=["name","uploader","path"];
		public static $validator= [
               "name"=>"required|max:191","uploader"=>"required|max:191","path"=>"required|max:191"
            ];
		public static $subModules=[];
			public static $actions=[];
		
		public static function getSelectData(){
			$options=[];
		 
		return $options;
		}
    
}