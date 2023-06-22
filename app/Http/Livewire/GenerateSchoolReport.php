<?php

namespace App\Http\Livewire;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\ApplicantMODEL;
use App\Models\SchoolMODEL;
use App\Models\DistrictMODEL;

class GenerateSchoolReport extends Component
{
    // public $districtNum = "4";
    // public $schoolLevel = "Secondary (Senior High School)";
    // public $school = "Voluptatem";

    public $districtNum = "";
    public $schoolLevel = "";
    public $school = "";
    public $search = "";
    public $totalMale = "";
    public $totalFemale = "";

    public $employees;
    public $showTable = false;

    protected $listeners = ['refreshTable' => '$refresh'];

    public function updated(){
        $this->showTable = false;
    }

    public function displayDataToTable()
    {
        if(!($this->districtNum == "" || $this->schoolLevel == "" || $this->school == "")){

            $this->showTable = true;

            $filterSchool = SchoolMODEL::
                select('id')
                ->where('id', $this->school)
                ->where('level', $this->schoolLevel)
                ->where('district_id', $this->districtNum)
                ->pluck('id');

            $this->employees = ApplicantMODEL::select('*')
                ->whereIn('school_id', $filterSchool)
                // ->where('typeofappointment', 'LIKE', '%' . $this->search . '%')
                // ->orWhere('itemnumber', 'LIKE', '%' . $this->search . '%')
                // ->orWhere('firstname', 'LIKE', '%' . $this->search . '%')
                // ->orWhere('middlename', 'LIKE', '%' . $this->search . '%')
                // ->orWhere('lastname', 'LIKE', '%' . $this->search . '%')
                // ->orWhere('position', 'LIKE', '%' . $this->search . '%')
                // ->orWhere('department', 'LIKE', '%' . $this->search . '%')
                // ->orWhere('gender', 'LIKE', '%' . $this->search . '%')
                // ->orWhere('birthdate', 'LIKE', '%' . $this->search . '%')
                // ->orWhere('tinnumber', 'LIKE', '%' . $this->search . '%')
                // ->orWhere('DOA', 'LIKE', '%' . $this->search . '%')
                // ->orWhere('DLP', 'LIKE', '%' . $this->search . '%')
                // ->orWhere('eligibility', 'LIKE', '%' . $this->search . '%')
                // ->orWhere('school_id', 'LIKE', '%' . $this->search . '%')
                // ->orWhere('status', 'LIKE', '%' . $this->search . '%')
                ->with('School')
                ->get();

            $this->totalMale = ApplicantMODEL::select('*')
            ->whereIn('school_id', $filterSchool)
            ->with('School')
            ->where('gender', 'Male')
            ->get();

            $this->totalFemale = ApplicantMODEL::select('*')
            ->whereIn('school_id', $filterSchool)
            ->with('School')
            ->where('gender', 'Female')
            ->get();

        }

    }

    public function render()
    {
        // $this->dispatchBrowserEvent('afterDomUpdate');
        $districts = DistrictMODEL::orderBy('district', 'ASC')->get();
        $schools = SchoolMODEL::orderBy('school', 'ASC')->where(['district_id' => $this->districtNum, 'level' => $this->schoolLevel])->get();

        return view('livewire.generate-school-report',  ['dist' => $districts, 'schools' => $schools, 'employees' => $this->employees]);
    }

}
