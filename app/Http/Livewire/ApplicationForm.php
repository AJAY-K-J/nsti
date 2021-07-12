<?php

namespace App\Http\Livewire;

use App\Models\ExperienceDetail;
use App\Models\QualificationDetail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;
use Livewire\Component;

class ApplicationForm extends Component
{

    use WithFileUploads;
    public $tradeName;
    public $itiPassed;
    public $isDiplomaHolder;
    public $dob;
    public $fatherGuardianName,$motherName,$gender,$category,$physicallyHandicapped,$traineeType,$employeeCodePEN,$aadharNumber,$maritalStatus,$address,$candidatePhoto;

    public $nameOfExamination,$nameOfUniversityOrBoard,$tradeOrSubject,$yearOfPassing,$certificateNumber,$duration,$percentageOfMarks,$technicalOrAcademic,$certificatePhoto;


    public $nameOfEmployer,$natureOfJob,$fromDate,$toDate,$designation,$currentEmployerStatus;

    public $user;
    public $step;



    private $stepActions = [
        'submit1',
        'submit2',
        'submit3',
    ];


    public function mount(){
        $this->step=0;
    }

     public function increaseStep(){
        $this->step++;
    }

    public function decreaseStep(){
        $this->step--;
    }

    public function render()
    {

        return view('livewire.application-form');
    }


    public function submit(){
        $action=$this->stepActions[$this->step];
        $this->$action();
    }



    public function submit1(){
        $this->validate([
            'tradeName'=>'required',
            'itiPassed'=>'required',
            'isDiplomaHolder'=>'required',
            'dob'=>'required',
            'fatherGuardianName'=>'required',
            'motherName'=>'required',
            'gender'=>'required',
            'category'=>'required',
            'physicallyHandicapped'=>'required',
            'traineeType'=>'required',
            'employeeCodePEN'=>'required',
            'aadharNumber'=>['required','digits:12'],
            'maritalStatus'=>'required',
            'address'=>'required',
            'candidatePhoto'=>'required|image|mimes:jpeg,png,jpg|max:1024',

        ]);


        $user = user::find(Auth::user()->id)->update([
            'tradeName' => $this->tradeName,
            'itiPassed' => $this->itiPassed,
            'isDiplomaHolder'=>$this->isDiplomaHolder,
            'dob'=>$this->dob,
            'fatherGuardianName'=>$this->fatherGuardianName,
            'motherName'=>$this->motherName,
            'gender'=>$this->gender,
            'category'=>$this->category,
            'physicallyHandicapped'=>$this->physicallyHandicapped,
            'traineeType'=>$this->traineeType,
            'employeeCodePEN'=>$this->employeeCodePEN,
            'aadharNumber'=>$this->aadharNumber,
            'maritalStatus'=>$this->maritalStatus,
            'address'=>$this->address,
            'candidatePhoto'=>$this->candidatePhoto->store('files','public'),



        ]);


        $this->updateMode = false;

        session()->flash('message', 'Post Updated Successfully.');
        $this->step++;
}

// ******************  uncomment on next day(05/06/21)
public function submit2()
{
    $this->validate([
        'nameOfExamination' => 'required',
        'nameOfUniversityOrBoard'=>'required',
        'tradeOrSubject'=>'required',
        'yearOfPassing'=>'required',
        'certificateNumber'=>'required',
        'duration'=>'required',
        'percentageOfMarks'=>'required',
        'technicalOrAcademic'=>'required',
        'certificatePhoto'=>'required|image|mimes:jpeg,png,jpg|max:1024',
    ]);

    $user =QualificationDetail::create([
        'user_id'=>Auth::user()->id,
        'nameOfExamination'=>$this->nameOfExamination,
        'nameOfUniversityOrBoard'=>$this->nameOfUniversityOrBoard,
        'tradeOrSubject'=>$this->tradeOrSubject,
        'yearOfPassing'=>$this->yearOfPassing,
        'certificateNumber'=>$this->certificateNumber,
        'duration'=>$this->duration,
        'percentageOfMarks'=>$this->percentageOfMarks,
        'technicalOrAcademic'=>$this->technicalOrAcademic,
        'certificatePhoto'=>$this->certificatePhoto->store('files','public'),

    ]);
    $this->step++;
}



public function submit3()
    {
        $this->validate([
            'nameOfEmployer' => 'required',
            'natureOfJob'=>'required',
            'fromDate'=>'required',
            'toDate'=>'required',
            'designation'=>'required',
            'currentEmployerStatus'=>'required',
        ]);

        $user =ExperienceDetail::create([
            'user_id'=>Auth::user()->id,
            'nameOfEmployer'=>$this->nameOfEmployer,
            'natureOfJob'=>$this->natureOfJob,
            'fromDate'=>$this->fromDate,
            'toDate'=>$this->toDate,
            'designation'=>$this->designation,
            'currentEmployerStatus'=>$this->currentEmployerStatus,


        ]);
        session()->flash('message', 'Thank You ! ');

        $this->step++;

    }


}

