<?php

namespace Madan\Dcrud;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;
use Auth;
class ApiController extends Controller
{
	
	
public function __construct()
{
        $this->middleware('auth')->only(['index','destroy','update','store']);
        // OR
      
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request,$p,$m)
    {
	if(Auth::check()){
		$filter=explode('&',$request->get('filter'));
		$mode='Madan\\'.ucfirst($p).'\\Models\\'.ucfirst($m);
		if(!in_array(auth()->user()->role_name,$mode::$access)){
				
			  return redirect(Role::where('id',Auth::user()->role_name)->first()->dashboard);
			  die();
		}
	}
	else 
		 die('Not Logged in.');
		$data=$mode::select($mode::$tabHeadsG)->where('deleted_at',null);
		if($request->get('filter')!='')
		foreach($filter as $f){
			$fill=explode('=',$f);
			if($fill[1]=='')
				continue;
			$sf=explode('__',$fill[0]);
			if($sf[0]=='sort')
				$data=$data->orderBy($sf[1],$fill[1]);
			else if($sf[0]=='filter' ){
				if(strpos($sf[1],'_')===false)
				$data=$data->where($sf[1],'like',"%$fill[1]%");
			else 
				$data=$data->where($sf['1'],'=',$fill['1']);
			
			}
				
		}
		
		$data=$data->paginate(25);
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$p,$m)
    {
		$mode='Madan\\'.ucfirst($p).'\\Models\\'.ucfirst($m);
		if(Auth::check()){
		$filter=explode('&',$request->get('filter'));
		if(!in_array(auth()->user()->role_name,$mode::$access)){
				
			  return redirect(Role::where('id',Auth::user()->role_name)->first()->dashboard);
			  die();
		}
	}
	else 
		 die('Not Logged in.');
        // use /validate method provided by Illuminate\Http\Request object to validate post data
        // if validation fails JSON response will be sent for AJAX requests
        $this->validate($request,$mode::$validator);
		$data=[];
		foreach($mode::$formDataG as $v){
			if($v!='password')
				$data[$v]=$request[$v];
			else
				$data[$v]=Hash::make($request[$v]);
		}
        return $mode::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$p,$m,$id)
    {
		$mode='Madan\\'.ucfirst($p).'\\Models\\'.ucfirst($m);
        $user = $mode::findOrFail($id);
		if(!in_array(Auth::user()->role_name,$mode::$access)){
				
			  return redirect(Role::where('id',Auth::user()->role_name)->first()->dashboard);
			  die();
		}
		if($request->get('afterupdate')>''){
			$g=$request->get('afterupdate');
			$mode::$g($id);
		}
       $this->validate($request,$mode::$validator);
$data=[];
		foreach($mode::$formDataG as $v){
			if($v!='password')
				$data[$v]=$request[$v];
			else
				$data[$v]=Hash::make($request[$v]);
		}
        $user->update($data);

        return $user;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $p,$m,$id)
    {
		$mode='Madan\\'.ucfirst($p).'\\Models\\'.ucfirst($m);
        if(Auth::check()){
		$filter=explode('&',$request->get('filter'));
		if(!in_array(auth()->user()->role_name,$mode::$access)){
				
			  return redirect(Role::where('id',Auth::user()->role_name)->first()->dashboard);
			  die();
		}
	}
	else 
		 die('Not Logged in.');
		$user = $mode::findOrFail($id);

        $user->delete();

        return $user;
    }
} 