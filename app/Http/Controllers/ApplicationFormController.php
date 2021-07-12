<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\QualificationDetail;
use App\Models\ExperienceDetail;
use App\Models\documents;


use Illuminate\Database\Schema\ForeignKeyDefinition;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use Illuminate\Filesystem\FilesystemManager as Storage;

class ApplicationFormController extends Controller
{
    public function saveData(Request $request){



        $request->validate([//want to uncomment@18/16/2021 12:44am
            // 'tradeName'=>'required',
            // 'itiPassed'=>'required',
            // 'isDiplomaHolder'=>'required',
            // 'dob'=>'required',
            // 'fatherGuardianName'=>'required',
            // 'motherName'=>'required',
            // 'gender'=>'required',
            // 'category'=>'required',
            // 'physicallyHandicapped'=>'required',
            // 'traineeType'=>'required',
            // // 'employeeCodePEN'=>'required',
            // 'aadharNumber'=>['required','digits:12'],
            // 'maritalStatus'=>'required',
            // 'address'=>'required',

        ]);

        $user = User::find(Auth::user()->id)->update([


            'tradeName'=>$request->tradeName,
            'itiPassed' => $request->itiPassed,
            'isDiplomaHolder'=>$request->isDiplomaHolder,
            'dob'=>$request->dob,
            'fatherGuardianName'=>$request->fatherGuardianName,
            'motherName'=>$request->motherName,
            'gender'=>$request->gender,
            'category'=>$request->category,
            'physicallyHandicapped'=>$request->physicallyHandicapped,
            'traineeType'=>$request->traineeType,
            'employeeCodePEN'=>$request->employeeCodePEN,
            'aadharNumber'=>$request->aadharNumber,
            'maritalStatus'=>$request->maritalStatus,
            'address'=>$request->address,


        ]);


    }


        public function upCPhoto(Request $request){

                $request->validate([
                   'candidatePhoto'=>'required|image|mimes:jpeg,png,jpg|max:1024',
                ]);

                if($request->hasFile('candidatePhoto')) {
                    $img_ext = $request->file('candidatePhoto')->getClientOriginalExtension();
                    $filename = 'candidatePhoto-' . time() . '.' . $img_ext;
                    $path = $request->file('candidatePhoto')->move(public_path('uploads'), $filename);//image save public folder
                  }
            $user = documents::create([
                'user_id'=>Auth::user()->id,
                'doc_title'=>'Candidate Photo',
                'document'=>$filename,


            //    $uploaded='document'=>$request->file('candidatePhoto')->move(public_path('uploads'),Str::uuid().'_'.$request->file('candidatePhoto')->getClientOriginalExtension()),


            ]);



        }

        public function upAadharF(Request $request){

            $request->validate([
               'aadharFront'=>'required|image|mimes:jpeg,png,jpg|max:1024',
            ]);

            if($request->hasFile('aadharFront')) {
                $img_ext = $request->file('aadharFront')->getClientOriginalExtension();
                $filename = 'aadharFront-' . time() . '.' . $img_ext;
                $path = $request->file('aadharFront')->move(public_path('uploads'), $filename);//image save public folder
              }
        $user = documents::create([
            'user_id'=>Auth::user()->id,
            'doc_title'=>'Aadhar Front Side',
            'document'=>$filename,


        //    $uploaded='document'=>$request->file('aadharFront')->move(public_path('uploads'),Str::uuid().'_'.$request->file('aadharFront')->getClientOriginalExtension()),
        ]);



    }


    public function upAadharB(Request $request){

        

        $request->validate([
           'aadharBack'=>'required|image|mimes:jpeg,png,jpg|max:1024',
        ]);

        if($request->hasFile('aadharBack')) {
            $img_ext = $request->file('aadharBack')->getClientOriginalExtension();
            $filename = 'aadharBack-' . time() . '.' . $img_ext;
            $path = $request->file('aadharBack')->move(public_path('uploads'), $filename);//image save public folder
          }
    $user = documents::create([
        'user_id'=>Auth::user()->id,
        'doc_title'=>'Aadhar Back Side',
        'document'=>$filename,
    ]);

}




        public function postEducations(Request $request){

                foreach ($request->educations as $edu){

                    $user =QualificationDetail::create([
                      'user_id'=>Auth::user()->id,
                        'nameOfExamination'=>$edu['nameOfExamination'],
                        'nameOfUniversityOrBoard'=>$edu['nameOfUniversity'],
                        'tradeOrSubject'=>$edu['subject'],
                        'yearOfPassing'=>$edu['yearOfPass'],
                        'certificateNumber'=>$edu['certificateNo'],
                        'duration'=>$edu['duration'],
                        'percentageOfMarks'=>$edu['percentageOfMarks'],
                        'technicalOrAcademic'=>$edu['technicalOrAcademic'],
                    ]);

                }
        }

            //     public function upCertPhoto(Request $request){

            //         $request->validate([
            //            'certificatePhoto'=>'required|image|mimes:jpeg,png,jpg|max:1024',
            //         ]);

            //     //bug@19/16/2021
            //     $user = user::find(Auth::user()->id )->update([
            //        'certificatePhoto'=>$request->file('certificatePhoto')->move(public_path('uploads'),time().'.'.$request->file('certificatePhoto')->getClientOriginalExtension()),

            //     ]);

            // }




                public function postExperience(Request $request){

                    foreach ($request->experiences as $exp){

                        $user =ExperienceDetail::create([
                            'user_id'=>Auth::user()->id,
                            'nameOfEmployer'=>$exp['nameOfEmployer'],
                            'natureOfJob'=>$exp['natureOfJob'],
                            'fromDate'=>$exp['fromDate'],
                            'toDate'=>$exp['toDate'],
                            'designation'=>$exp['designation'],
                            'currentEmployerStatus'=>$exp['currentEmployerStatus'],

                        ]);

                    }

                }


}
