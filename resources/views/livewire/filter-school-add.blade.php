<div class="EXSepatorB">
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}

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
        <select class ="selects"  name="school_id" id="school" value="" style="@error('school_id') border: 1px solid red; @enderror" @if($schoolLevel == "" || $districtNum == "") disabled @endif>
            <option disabled="" value="" selected>Select School</option>
            @foreach($schools as $schoolData)
                <option value="{{$schoolData->id}}" >{{$schoolData->school}}</option>
            @endforeach
        </select>
        <span style="color: red;">@error('school_id') {{$message}} @enderror </span>
    </div>
</div>
{{-- {{ old('school_id') == $schoolData->id ? "selected" :""}}  --}}
