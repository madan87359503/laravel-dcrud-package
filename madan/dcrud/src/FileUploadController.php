<?php
namespace Madan\Dcrud;
use App\Http\Controllers\Controller;
use Madan\Dcrud\Models\Uploadedfile;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;
class FileUploadController extends Controller {

    /**
     * Show the profile for the given user.
     */
    public function update(Request $req)
    {
         $uuploadedfile= Uploadedfile::insert($req['data']);return true;
        
    }
	 public function fileUpload(Request $req,$va,$na){
		 $mode='App\Models\\'.ucfirst($va);
		 
        $req->validate([
        'file' => $mode::$validator[$na]
        ]);
        $fileModel = new Uploadedfile;

        if($req->file()) {
            $fileName = time().'_'.$req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');

            $fileModel->name = time().'_'.$req->file->getClientOriginalName();
            $fileModel->path = '/storage/' . $filePath;
            $fileModel->save();
$ret['success']=1;
$ret['file']['url']=url('/').$fileModel->path;
           return json_encode($ret);
        }
	 }
    public function index(Request $req)
    {
   
     $uploadedfile=Uploadedfile::selectRaw('id,created_at,name,uploader,path')->get();
    return view('fileUpload', compact('req','uploadedfile'));
    }
    }