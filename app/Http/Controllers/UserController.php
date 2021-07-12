<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QualificationDetail;
use App\Models\documents;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

        public function index(){
            return view('dashboards.users.index');


        }

        public function profile(){
            return view('dashboards.users.profile');

        }

        public function settings(){
            return view('dashboards.users.settings');

        }

        public function getDoc(){
            
            return QualificationDetail::where('user_id','=',Auth::user()->id)->get();

        }

  public function postDoc(Request $request){
            
    $request->validate([
        'certificate'=>'required|image|mimes:jpeg,png,jpg|max:1024',
     ]);


      $check=documents::where('doc_title','=',$request->docName)->first();

if($check){

    return 'already Uploaded';
}

     if($request->hasFile('certificate')) {
         $img_ext = $request->file('certificate')->getClientOriginalExtension();
         $filename = Auth::user()->name.' - '.$request->docName.'- certificate -' . time() . '.' . $img_ext;
         $path = $request->file('certificate')->move(public_path('uploads'), $filename);//image save public folder
       }
 $user = documents::create([
     'user_id'=>$request->userId,
     'doc_title'=>$request->docName,
     'document'=>$filename,
 ]);

if( $user){

    return 'success';
}




        }


}
