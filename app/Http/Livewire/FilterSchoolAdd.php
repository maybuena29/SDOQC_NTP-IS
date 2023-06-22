<?php

namespace App\Http\Livewire;
use App\Models\ApplicantMODEL;
use App\Models\SchoolMODEL;
use App\Models\DistrictMODEL;

use Livewire\Component;

class FilterSchoolAdd extends Component
{

    public $districtNum = "";
    public $schoolLevel = "";

    public function render()
    {
        $districts = DistrictMODEL::orderBy('district', 'ASC')->get();
        $schools = SchoolMODEL::orderBy('school', 'ASC')->where(['district_id' => $this->districtNum, 'level' => $this->schoolLevel])->get();

        return view('livewire.filter-school-add', ['dist' => $districts, 'schools' => $schools]);
    }
}
