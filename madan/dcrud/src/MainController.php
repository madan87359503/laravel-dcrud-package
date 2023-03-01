<?php

namespace Madan\Dcrud;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use Madan\Dcrud\Models\Dashboardtools;
use Madan\Dcrud\Models\Models;
use Madan\Dcrud\Models\Forms;
use App\Models\Role;
use Madan\Dcrud\Models\Rolemodel;
use Madan\Dcrud\Models\Component;
use Madan\Dcrud\Models\Controllers;
use Madan\Dcrud\Models\Cactions;
use Madan\Dcrud\Models\Cavariables;
use Auth;
class MainController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $req,$p='',$m='')
    {
                        
			$mode='App\\'.'Models\\'.ucfirst($m);
                        
                         if(!File::exists(base_path().'/app/Models/'.ucfirst($m).'.php'))
			$mode='Madan\\'.ucfirst($p).'\\'.'Models\\'.ucfirst($m);
			if(!in_array(Auth::user()->role_name,$mode::$access)){
				
			  //return redirect(Role::where('id',Auth::user()->role_name)->first()->dashboard);
			  
                        }
               
                        $pType=$mode::$pType;
			$modelData=$mode::$modelData;
			$tabHeadsG=$mode::$tabHeadsG;
			$formDataG=$mode::$formDataG;
			$options=$mode::getSelectData();
			$subModules=$mode::$subModules;
			$actions=$mode::$actions;
			$formType=$mode::$formType;
                        if($req->ajax())
                            return view('dcrud::data',compact('formType','tabHeadsG','modelData','formDataG','options','subModules','req','actions','pType'));
                        else
                            return view('dcrud::main',compact('formType','tabHeadsG','modelData','formDataG','options','subModules','req','actions','pType'));
    }
	    public function home(Request $req)
    {
			$mode='App\Models\Dashboardtools';
			$modelData=$mode::$modelData;
			$tabHeadsG=$mode::$tabHeadsG;
			$formDataG=$mode::$formDataG;
			$options=$mode::getSelectData();
			$subModules=$mode::$subModules;
			$actions=$mode::$actions;
        return view('layouts.laravel-vue-js-crud-spa',compact('tabHeadsG','modelData','formDataG','options','subModules','req','actions'));
    }
	
	public function add(Request $req){
		$postdata=$req->all();
		  
       if($postdata['type']=='static'){
       $this->generateFile($postdata);
      
       }else if($postdata['type']=='file'){
           //$this->generateFileImage($postdata);
       }
       else{
       $this->generateCO($postdata);

 \Artisan::call('view:clear');
       }
      
       return true;
	   
	   

	}
	  public static function generateCO($req){
		 //dd($req);
        $use='';
        $update='';
        $index='';
		$option='';
        $api='';
        $comp='return view(\''.$req['name'].'\', compact(\'req\'';
        $cname=ucfirst($req['name']).'Controller';
		$newData=Controllers::where('name',$req['name'])->exists()?false:true;
		if($newData){ $c=new Component();
	   $c->name=$req['name'];
	   $c->type=$req['type'];
	   $c->datasource=$req['datasource'];
	   $c->content=$req['content'];
	   $c->save();
        $co=new Controllers();
	   $co->name=$req['name'];
	   $co->version=1;
	   $co->publish='not';
	   $co->save();
	   
	   $cac=new Cactions();
	   $cac->controllers_name=$co->id;
	   $cac->name='index';
	   $cac->role_name=1;
	   $cac->component_name=$c->id;
	   $cac->save();
		}
         $route=File::get(base_path().'/routes/web.php');
		 $api=File::get(base_path().'/routes/web.php');
         if(strpos($route,'use App\Http\Controllers\\'.$cname)==''){
			 
        $route.=' use App\Http\Controllers\\'.$cname.'; Route::post(\''.$req['name'].'\',['.$cname.'::class,\'update\'])->name(\'update'.$req['name'].'\'); Route::get(\''.$req['name'].'\',['.$cname.'::class,\'index\'])->name(\''.$req['name'].'\');'."\n";
         }
         File::put(base_path().'/routes/web.php',$route);
         $controller=File::get(base_path().'/buildTemplate/controller');
         $datasource=explode(',,',$req['datasource']);
         foreach($datasource as $d){
			 
            if($d=='')
            continue;
		
		 
             $va=explode('-',$d);
			 if($newData){
			  $cova=new Cavariables();
		 $cova->cactions_name=$cac->id;
		 $cova->name=$va[0];
		 $cova->model=$va[0];
		 $cova->columns=$va[1];
		 $cova->save();
			 }
			 $api.="Route::apiResources(['api/$va[0]' => 'App\Http\Controllers\API\UserController']);\n"; 
			  if(strpos($route,"Route::apiResources(['api/$va[0]' => 'App\Http\Controllers\API\UserController']);\n")==''){
	
                         File::put(base_path().'/routes/web.php',$api);
                          }
              $use.=' use App\Models\\'.ucfirst($va[0]).'; '; 
              MainController::checkTable($va[0]);
             $update.=' $u'.$va[0].'= '.ucfirst($va[0]).'::insert($req[\'data\']);';
             $index.=' $'.$va[0].'='.ucfirst($va[0]);
             $comp.=',\''.$va[0].'\'';
             if(isset($va[1])){
                 $col=explode(',',$va[1]);
                 $filter='';
                 $index.='::selectRaw(\'id,created_at'; 
                 foreach($col as $c){
					
					 
                     if(explode(' ',$c)[0]=='')
                     continue;
					
                     $index.=','.explode(' ',$c)[0];
                     MainController::checkCol($va[0],explode(' ',$c)[0]);
                     if(isset(explode(' ',$c)[1]))
                     $filter.='->where("'.explode(' ',$c)[0].'","'.explode(' ',$c)[1].'","'.explode(' ',$c)[2].'")';
				
				 }
                 $index.='\')'.$filter.'->get();';
                 
             }else
             $index.='::get();';
         MainController::checkModel($va[0],$va[1]);
             
         }
         
         $comp.='));';
         //index()--
        
         $update.='return true;';
          $controller=str_replace('%use%',$use,$controller);
         $controller=str_replace('%index%',$index,$controller);
        
            $controller=str_replace('%controller%',  ucfirst($req['name']),$controller);
           $controller=str_replace('%comp%',$comp,$controller);
           $controller=str_replace('%update%',$update,$controller);
         File::put(base_path().'/app/Http/Controllers/'.$cname.'.php',$controller);
        
                         File::put(base_path().'/resources/views/'.($req['path']==''?'':($req['path'].'/')).$req['name'].'.blade.php',str_replace('&gt;','>',$req['content']));
    }
        public static function checkModel($m,$c=''){
        
          if(!File::exists(base_path().'/app/Models/'.ucfirst($m).'.php')){
			                 $model='';
          $model=File::get(base_path().'/buildTemplate/model');
           $model=str_replace('%Table%',ucfirst($m),$model);
            $model=str_replace('%table%',$m,$model);
               $model=str_replace('%relation%','',$model);
               $model=str_replace('%fillable%','"'.str_replace(',','","',$c).'"',$model);
               $model=str_replace('%fillablea%','"'.str_replace(',','"=>"","',$c).'"=>""',$model);
			    $model=str_replace('%submodule%','[]',$model);
			    $model=str_replace('%action%','[]',$model);
			    $model=str_replace('%formType%','[]',$model);
			    $model=str_replace('%ptype%',"['dashboard'=>'no','showCrud'=>'yes']",$model);
			    $model=str_replace('%code%','',$model);
			   $model=str_replace('%access%','[0=>"1"]',$model);
		    $model=str_replace('%options%','',$model);
               $model=str_replace('%fillablev%','["'.str_replace(',','"=>"required|max:191","',$c).'"=>"required|max:191"]',$model);
           File::put(base_path().'/app/Models/'.ucfirst($m).'.php',$model);
			   $d=new Dashboardtools();
			   
		  $d->name=ucfirst($m);
		  $d->width='col-lg-2';
		  $d->onclick=$m;
		  $d->save();
		  $mod=new Models();
		  $mod->name=ucfirst($m);
		  $mod->table=$m;
		  $mod->version=1;
		  $mod->publish='published';
		  $mod->save();
		  $forms=explode(',',$c);
		  foreach($forms as $f){
			  $fo=new Forms();
			  $fo->models_name=$mod->id;
			  $fo->name=$f;
			  $fo->createvalidator="required|max:191";
			  $fo->updatevalidator="required|max:191";
			  $fo->type=isset(explode("_",$f)[1])?'select':'text';
			  $fo->modeldata=1;
			  $fo->tablehead=1;
			  $fo->formdata=1;
			  $fo->fillable=1;
			  $fo->formclass='col-lg-2';
			  	if(isset(explode("_",$f)[1])){
			  $fo->options='\App\Models\\'.ucfirst(explode('_',$f)[0]).'::pluck("'.explode("_",$f)[1].'","id")->prepend("Select One...","")';
				}
			  $fo->save();
		  }
		  $acc=new Rolemodel();
		  $acc->models_name=$mod->id;
		  $acc->role_name='1';
		  $acc->save();

          }
      
    }
	public static function checkTable($m){
		    if(!Schema::hasTable($m)){
              Schema::create($m, function($table)
{
    $table->increments('id');
    $table->timestamps();
    $table->softDeletes();
});
          }
	}
    public static function checkCol($t,$co){
        if (!Schema::hasColumn($t, $co))
{
    Schema::table($t, function($table) use($co)
{
    $table->string($co)->nullable();
});
}
    }
    protected function generateFile($req){
         File::put(base_path().'/public/assets/'.$req['name'].'.'.$req['datasource'],$req['content']);
    }
      protected function generateFileImage($src){
         $info = getimagesize($src);
         if ($info['mime'] == 'image/jpeg') 
	{
		$image = imagecreatefromjpeg($src);
	}
	elseif ($info['mime'] == 'image/gif') 
	{
		$image = imagecreatefromgif($src);
	}
	elseif ($info['mime'] == 'image/png') 
	{
		$image = imagecreatefrompng($src);
	}
	else
	{
		die('Unknown image file format');
	}
    $size=filesize($src);
    $v=$size<2400000?80:($size<4800000?60:($size<1000000?50:40));
	//compress and save file to jpg
	imagejpeg($image, $src.'50.jpg', $v);
 	imagejpeg($image, $src.'25.jpg', $v/1.5);
 	imagejpeg($image, $src.'5.jpg', $v/5);
 	if($info[0]*2/3<$info[1]){
 	$im2=imagecrop($image, ['x' => 0, 'y' => 0, 'width' => $info[0], 'height' => $info[0]*2/3]);
 	$im4=imagecrop($image, ['x' => 0, 'y' => 0, 'width' => $info[0], 'height' => $info[0]*1/2]);
 	$im3=imagecrop($image, ['x' => 0, 'y' => 0, 'width' => $info[0], 'height' => $info[0]*2/5]);
 	}else{
 	$im2=imagecrop($image, ['x' => 0, 'y' => 0, 'width' => $info[1]*3/2, 'height' => $info[1]]);
 	$im4=imagecrop($image, ['x' => 0, 'y' => 0, 'width' => $info[1]*2, 'height' => $info[1]]);
 	$im3=imagecrop($image, ['x' => 0, 'y' => 0, 'width' => $info[1]*5/2, 'height' => $info[1]]);
 	}
 	imagejpeg($im2, $src.'cropped23.jpg', $v);
 	imagejpeg($im3, $src.'cropped25.jpg', $v);
 	imagejpeg($im4, $src.'cropped12.jpg', $v);
 dd($src);
	//return destination file

//usage
    }
    public function allcomponents(){
         $component=Component::orderBy('id','desc')->whereNotNull('preview')->get();
   return json_encode($component);
    }

	
}
