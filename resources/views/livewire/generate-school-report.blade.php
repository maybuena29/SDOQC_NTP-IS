{{-- The whole world belongs to you. --}}

<div class="Table-1" >
    <div class="Table-con">

        <div class="Cnt">
            <H3 class="ORP">School Reports</H3>
            <p class="DY">SDO QC</p>
        </div>

        <div class="ResponsiveSection">
            <div class="ResponsiveItem">
                <a href="{{ Route('PrintAllSchool') }}" class="Add-P"><span>PRINT ALL</span></a>
            </div>
            <div class="ResponsiveItem">
                <a href="{{ Route('PrintES') }}" class="Add-P"><span>ELEMENTARY</span></a>
            </div>
            <div class="ResponsiveItem">
                <a href="{{ Route('PrintJHS') }}" class="Add-P"><span>JHS</span></a>
            </div>
            <div class="ResponsiveItem">
                <a href="{{ Route('PrintSHS') }}" class="Add-P"><span>SHS</span></a>
            </div>
            <div class="ResponsiveItem">
                <a href="{{ Route('PrintJHSandSHS') }}" class="Add-P"><span>JHS W/ SHS</span></a>
            </div>
        </div>

    </div>

    {{-- For Filtering Employees --}}

    <div class = "EXSepatorSchool">
        <div class="field">
            <label>District <span class="asterisk"> * </span> </label>
            <select  class ="selects"  name="id" id="districtNumber" value="" style="@error('id') border: 1px solid red; @enderror" wire:model="districtNum">
                <option disabled value="" selected>Select District</option>
                @foreach($dist as $districtData)
                    <option value="{{$districtData->id}}" {{ old('id') == $districtData->id ? "selected" :""}} >{{$districtData->district}}</option>
                @endforeach
            </select>
            <span style="color: red;">@error('school_id') {{$message}} @enderror </span>
        </div>

        <div class="field">
            <label>School Level <span class="asterisk"> * </span> </label>
            <select class ="availability" name="level" id="schoolLvl" value="" style="@error('level') border: 1px solid red; @enderror" wire:model="schoolLevel" @if($districtNum == "") disabled @endif>
                <option value="" disabled selected>Select School Level</option>
                <option value="Elementary">Elementary School</option>
                <option value="Secondary (Junior High School)">Secondary ( Junior High School )</option>
                <option value="Secondary (Senior High School)">Secondary ( Senior High School )</option>
                <option value="Secondary (Junior High School with Senior High School)">Secondary ( Junior High School with Senior High School )</option>
            </select>
            <span style="color: red;">@error('level') {{$message}} @enderror </span>
        </div>

        <div class="field">
            <label>School <span class="asterisk"> * </span> </label>
            <select class ="selects"  name="school_id" id="school" value="" style="@error('school_id') border: 1px solid red; @enderror" @if($schoolLevel == "" || $districtNum == "") disabled @endif wire:model="school">
                <option disabled="" value="" selected>Select School</option>
                @foreach($schools as $schoolData)
                    <option value="{{$schoolData->id}}" {{ old('school_id') == $schoolData->id ? "selected" :""}} >{{$schoolData->school}}</option>
                @endforeach
            </select>
            <span style="color: red;">@error('school_id') {{$message}} @enderror </span>
        </div>

        <div class="field">
            {{-- <button class ="GenerateReportBtn" wire:click="displayDataToTable"> <i class="fa-solid fa-arrows-rotate fa-shake"></i> <span> Generate Reports </span></button> --}}
            <a class ="GenerateReportBtn" wire:click="displayDataToTable"> <i class="fa-solid fa-arrows-rotate fa-shake"></i><span> Generate Report </span></a>
        </div>
    </div>
    {{-- end --}}

    {{-- For Table --}}
    @if($showTable)
        <div style="overflow-x: auto">
            <table id="Category" class="displayd responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Item Number </th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Gender</th>
                        <th>Appointment Type</th>
                        <th>Eligibility</th>
                        <th>School</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @if(!empty($employees))
                        @foreach ($employees as $stats)
                            <tr>
                                <td>{{$stats->itemnumber}}</td>
                                <td>{{$stats->firstname}} {{$stats->middlename}} {{$stats->lastname}}</td>
                                <td>{{$stats->position}}</td>
                                <td>{{$stats->gender}}</td>
                                <td>{{$stats->typeofappointment}}</td>
                                <td>{{$stats->eligibility}}</td>
                                <td>{{$stats->School->school}}</td>
                                <td>
                                    @if($stats->status == "Active")
                                        <p class="Done">{{$stats->status}}</p>
                                    @endif
                                    @if($stats->status == "Inactive")
                                        <p class="red">{{$stats->status}}</p>
                                    @endif
                                    @if($stats->status == "Diseased")
                                        <p class="gray">{{$stats->status}}</p>
                                    @endif
                                    @if($stats->status == "Retired")
                                        <p class="orange">{{$stats->status}}</p>
                                    @endif
                                    @if($stats->status == "Resigned")
                                        <p class="violet">{{$stats->status}}</p>
                                    @endif
                                    @if($stats->status == "Transferred")
                                        <p class="blue">{{$stats->status}}</p>
                                    @endif
                                    @if($stats->status == "AWOL")
                                        <p class="brown">{{$stats->status}}</p>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
        <div style="overflow-x: auto">
            <table id="Category" class="displayd responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th colspan="8">SUMMARY</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="2" colspan="2"><h4>Total Employees: {{count($employees)}}</h4></td>
                        <td rowspan="2"> </td>
                        <td rowspan="2"><h4>Gender</h4></td>
                        <td colspan="2"><h4>Total Male: {{count($totalMale)}}</h4></td>
                    </tr>
                    <tr>
                        <td colspan="2"><h4>Total Female: {{count($totalFemale)}}</h4></td>
                    </tr>
                </tbody>
            </table>
        </div>
    @endif
    {{-- end --}}

</div>

@push('scripts')
{{-- <script>

    document.addEventListener('livewire:load', function () {
        Livewire.hook('message.processed', function (message, component) {
            if (component.dataTableInstance) {
                // Reinitialize DataTables after Livewire updates the DOM
                $('#' + component.dataTableInstance).DataTable();
            }
        });
    });
</script> --}}
@endpush
