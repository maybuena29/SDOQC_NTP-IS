<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NTPLogInCTLR;
use App\Http\Controllers\NTPLogOutCTLR;
use App\Http\Controllers\ApplicantCTRL;
use App\Http\Controllers\DashBoardCTLR;
use App\Http\Controllers\StatusCTRL;
use App\Http\Controllers\DistrictCTRL;
use App\Http\Controllers\SchoolCTRL;
use App\Http\Controllers\ReportCTRL;
use App\Http\Controllers\SchoolReportCTRL;
use App\Http\Controllers\PrintAllCTRL;
use App\Http\Controllers\PrintSchoolReportCTRL;


Route::get('/', [NTPLogInCTLR::class,'index'])->middleware(['guest:web']);

Route::group(['prefix' => 'admin'],function(){

    Route::middleware(['guest:web'])->group(function(){
        Route::resource('NTPLogin',NTPLogInCTLR::class);
    });

    Route::middleware(['auth:web'])->group(function(){

         Route::resource('NTPDashBoard',DashBoardCTLR::class);

         Route::get('front/ApplicantArchives',[ApplicantCTRL::class,'ApplicantArchives'])->name('ApplicantArchives');
         Route::put('front/ApplicantArchivesRestore/{id}',[ApplicantCTRL::class,'ApplicantArchivesRestore'])->name('ApplicantArchivesRestore');
         Route::delete('front/ApplicantArchivesDestroy/{id}',[ApplicantCTRL::class,'ApplicantArchivesDestroy'])->name('ApplicantArchivesDestroy');
         Route::resource('NTPApplicant',ApplicantCTRL::class);
         Route::resource('NTPDistrict',DistrictCTRL::class);
         Route::resource('NTPSchool',SchoolCTRL::class);
         Route::resource('NTPEmployeeReport',ReportCTRL::class);
         Route::resource('NTPSchoolReport',SchoolReportCTRL::class);
        //  Route::resource('NTPStatus',StatusCTRL::class);

        //For Employee Reports
         Route::get('PrintAllEMP',[PrintAllCTRL::class,'PrintAllEMP'])->name('PrintAllEMP');
         Route::get('PrintNATIONAL',[PrintAllCTRL::class,'PrintNATIONAL'])->name('PrintNATIONAL');
         Route::get('PrintCITY',[PrintAllCTRL::class,'PrintCITY'])->name('PrintCITY');
         Route::get('PrintCONTRACT',[PrintAllCTRL::class,'PrintCONTRACT'])->name('PrintCONTRACT');
         Route::get('PrintMOOE',[PrintAllCTRL::class,'PrintMOOE'])->name('PrintMOOE');

        //For School Reports
         Route::get('PrintAllSchool',[PrintSchoolReportCTRL::class,'PrintAllSchool'])->name('PrintAllSchool');
         Route::get('PrintES',[PrintSchoolReportCTRL::class,'PrintES'])->name('PrintES');
         Route::get('PrintJHS',[PrintSchoolReportCTRL::class,'PrintJHS'])->name('PrintJHS');
         Route::get('PrintSHS',[PrintSchoolReportCTRL::class,'PrintSHS'])->name('PrintSHS');
         Route::get('PrintJHSandSHS',[PrintSchoolReportCTRL::class,'PrintJHSandSHS'])->name('PrintJHSandSHS');

        //  Route::get('NTPSchoolReportTable', [GenerateSchoolReport::class, 'showTable']);
        //  Route::get('showDataTable',[GenerateSchoolReport::class,'showDataTable'])->name('showDataTable');

         Route::get('/NTPLogout', [NTPLogOutCTLR::class, 'store'])->name('NTPLogout');
    });
});
