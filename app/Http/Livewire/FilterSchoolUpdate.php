<?php

namespace App\Http\Livewire;
use App\Models\ApplicantMODEL;
use App\Models\SchoolMODEL;
use App\Models\DistrictMODEL;

use Livewire\Component;

class FilterSchoolUpdate extends Component
{

    public $school = "";
    public $districtNum = "";
    public $schoolLevel = "";

    public function mount($schoolID)
    {
        $this->school = SchoolMODEL::where('id', $schoolID)->value('id');
        $this->districtNum = SchoolMODEL::where('id', $schoolID)->value('district_id');
        $this->schoolLevel = SchoolMODEL::where('id', $schoolID)->value('level');
    }

    protected $rules = [
        'schoolLevel' => 'required',
        'districtNum' => 'required',
    ];

    public function render()
    {
        // dd([$this->school, $this->districtNum, $this->schoolLevel]);
        $districts = DistrictMODEL::orderBy('district', 'ASC')->get();
        $schools = SchoolMODEL::orderBy('school', 'ASC')->where(['district_id' => $this->districtNum, 'level' => $this->schoolLevel])->get();

        return view('livewire.filter-school-update', ['dist' => $districts, 'schools' => $schools]);
    }
}
