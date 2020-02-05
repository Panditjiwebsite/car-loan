<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1'], function(){
    
    Route::post('signUp', 'Api\v1\ApiController@signUp');
    Route::post('logIn', 'Api\v1\ApiController@logIn');
    Route::post('Places', 'Api\v1\ApiController@Places');
    Route::post('FeaturedPlaces', 'Api\v1\ApiController@FeaturedPlaces');
    Route::post('About', 'Api\v1\ApiController@About');
    Route::post('sendForgetPasswordToken', 'Api\v1\ApiController@sendForgetPasswordToken');
    Route::post('verifyOtp', 'Api\v1\ApiController@verifyOtp');
    Route::post('privacyPolicy', 'Api\v1\ApiController@privacyPolicy');
    Route::post('resetPassword', 'Api\v1\ApiController@resetPassword');
    /*Route::post('updatePassword', 'Api\v1\ApiController@updatePassword');

    Route::post('resetPassword', 'Api\v1\ApiController@resetPassword');
    Route::post('getNotificationLog', 'Api\v1\ApiController@getNotificationLog');
    Route::post('deleteNotificationLog', 'Api\v1\ApiController@deleteNotificationLog');
    Route::post('deleteNotification', 'Api\v1\ApiController@deleteNotification');
    Route::post('test_notification', 'Api\v1\ApiController@test_notification');
    Route::get('labTestTypesList', 'Api\v1\ApiController@labTestTypesList');
    Route::get('SurgeryTypeList', 'Api\v1\ApiController@SurgeryTypeList');*/

    Route::group(['prefix' => 'user', 'middleware' => ['auth:api']], function(){
    Route::post('changePassword', 'Api\v1\ApiController@changePassword');
    Route::post('updatePlace', 'Api\v1\ApiController@updatePlace');
    Route::post('userProfile', 'Api\v1\ApiController@userProfile');
    Route::post('updateuserprofile', 'Api\v1\ApiController@updateuserprofile');
    Route::post('updateuserprofilepic', 'Api\v1\ApiController@updateuserprofilepic');
    Route::post('updateusersocialProfile', 'Api\v1\ApiController@updateusersocialProfile');
    Route::post('usersocialProfile', 'Api\v1\ApiController@usersocialProfile');
    Route::post('usersettings', 'Api\v1\ApiController@usersettings');
    Route::post('updateusersettings', 'Api\v1\ApiController@updateusersettings');
    Route::post('friendRequest', 'Api\v1\ApiController@friendRequest');
    Route::post('friendlist', 'Api\v1\ApiController@friendlist');
    Route::post('updatefriendstatus', 'Api\v1\ApiController@updatefriendstatus');
    Route::post('placedetails', 'Api\v1\ApiController@placedetails');
    Route::post('placedata', 'Api\v1\ApiController@placedata');
    Route::post('savereview', 'Api\v1\ApiController@savereview');
    Route::post('showreview', 'Api\v1\ApiController@showreview');
    Route::post('chat', 'Api\v1\ApiController@chat');
    Route::post('chatuserlist', 'Api\v1\ApiController@chatuserlist');
    Route::post('savechat', 'Api\v1\ApiController@savechat');
    Route::post('chathistory', 'Api\v1\ApiController@chathistory');
    Route::post('notificationlist', 'Api\v1\ApiController@notificationlist');
    Route::post('visitedplaces', 'Api\v1\ApiController@visitedplaces');


    
        /*Route::post('updateMember', 'Api\v1\ApiController@updateMember');
        Route::post('addProfileImage', 'Api\v1\ApiController@addProfileImage');
        Route::post('addHealthCard', 'Api\v1\ApiController@addHealthCard');
        Route::post('healthCardDelete', 'Api\v1\ApiController@healthCardDelete');
        Route::post('addPrescriptionCard', 'Api\v1\ApiController@addPrescriptionCard');
        Route::post('prescriptionCardDelete', 'Api\v1\ApiController@prescriptionCardDelete');
        Route::post('updateProfile', 'Api\v1\ApiController@updateProfile');
        Route::post('removeChild', 'Api\v1\ApiController@removeChild');
        Route::get('memberList', 'Api\v1\ApiController@memberList');
        Route::post('viewmember', 'Api\v1\ApiController@viewmember');
        Route::post('addTemperature', 'Api\v1\ApiController@addTemperature');
        Route::post('temperatureList', 'Api\v1\ApiController@temperatureList');
        Route::post('temperatureDelete', 'Api\v1\ApiController@temperatureDelete');
        Route::post('addHeart_rate', 'Api\v1\ApiController@addHeart_rate');
        Route::post('heartRateList', 'Api\v1\ApiController@heartRateList');
        Route::post('heartRateDelete', 'Api\v1\ApiController@heartRateDelete');
        Route::post('addWeight', 'Api\v1\ApiController@addWeight');
        Route::post('weightList', 'Api\v1\ApiController@weightList');
        Route::post('weightDelete', 'Api\v1\ApiController@weightDelete');
        Route::post('addBlood_pressure', 'Api\v1\ApiController@addBlood_pressure');
        Route::post('bloodPressureList', 'Api\v1\ApiController@bloodPressureList');
        Route::post('bloodPressureDelete', 'Api\v1\ApiController@bloodPressureDelete');
        Route::post('addBlood_glucose', 'Api\v1\ApiController@addBlood_glucose');
        Route::post('bloodGlucoseList', 'Api\v1\ApiController@bloodGlucoseList');
        Route::post('bloodGlucoseDelete', 'Api\v1\ApiController@bloodGlucoseDelete');
        Route::post('addInternational_normalised_ratio', 'Api\v1\ApiController@addInternational_normalised_ratio');
        Route::post('internationalNormalisedRatioList', 'Api\v1\ApiController@internationalNormalisedRatioList');
        Route::post('internationalNormalisedDelete', 'Api\v1\ApiController@internationalNormalisedDelete');
        Route::post('addMedications', 'Api\v1\ApiController@addMedications');
        Route::post('medicationstList', 'Api\v1\ApiController@medicationstList');
        Route::post('medicationsDelete', 'Api\v1\ApiController@medicationsDelete');
        
        Route::post('addHistory', 'Api\v1\ApiController@addHistory');
        Route::post('historytList', 'Api\v1\ApiController@historytList');
        Route::post('historyDelete', 'Api\v1\ApiController@historyDelete');

        Route::post('addConsultation', 'Api\v1\ApiController@addConsultation');
        Route::post('consultationList', 'Api\v1\ApiController@consultationList');
        Route::post('ConsultationDelete', 'Api\v1\ApiController@ConsultationDelete');

        Route::post('addConsultationNote', 'Api\v1\ApiController@addConsultationNote');
        Route::post('consultationNoteList', 'Api\v1\ApiController@consultationNoteList');
        Route::post('ConsultationNoteDelete', 'Api\v1\ApiController@ConsultationNoteDelete');

        Route::post('addProgressNote', 'Api\v1\ApiController@addProgressNote');
        Route::post('progressNoteList', 'Api\v1\ApiController@progressNoteList');
        Route::post('ProgressNoteDelete', 'Api\v1\ApiController@ProgressNoteDelete');

        Route::post('addProgressOfficeNote', 'Api\v1\ApiController@addProgressOfficeNote');
        Route::post('progressOfficeNoteList', 'Api\v1\ApiController@progressOfficeNoteList');
        Route::post('ProgressOfficeNoteDelete', 'Api\v1\ApiController@ProgressOfficeNoteDelete');

        Route::post('addSurgeryNote', 'Api\v1\ApiController@addSurgeryNote');
        Route::post('surgeryNoteList', 'Api\v1\ApiController@surgeryNoteList');
        Route::post('SurgeryNoteDelete', 'Api\v1\ApiController@SurgeryNoteDelete');

        Route::post('addDischargeSummary', 'Api\v1\ApiController@addDischargeSummary');
        Route::post('dischargeSummaryList', 'Api\v1\ApiController@dischargeSummaryList');
        Route::post('DischargeSummaryDelete', 'Api\v1\ApiController@DischargeSummaryDelete');

        Route::post('addDischargeMedication', 'Api\v1\ApiController@addDischargeMedication');
        Route::post('dischargeMedicationList', 'Api\v1\ApiController@dischargeMedicationList');
        Route::post('DischargeMedicationDelete', 'Api\v1\ApiController@DischargeMedicationDelete');

        Route::post('addAnnualWellnessVisit', 'Api\v1\ApiController@addAnnualWellnessVisit');
        Route::post('annualWellnessVisitList', 'Api\v1\ApiController@annualWellnessVisitList');
        Route::post('AnnualWellnessVisitDelete', 'Api\v1\ApiController@AnnualWellnessVisitDelete');

        Route::post('addMiscellaneousNote', 'Api\v1\ApiController@addMiscellaneousNote');
        Route::post('MiscellaneousNoteList', 'Api\v1\ApiController@MiscellaneousNoteList');
        Route::post('MiscellaneousNoteDelete', 'Api\v1\ApiController@MiscellaneousNoteDelete');
        
        Route::post('addImagingDiagnostics', 'Api\v1\ApiController@addImagingDiagnostics');
        Route::post('ImagingDiagnosticsList', 'Api\v1\ApiController@ImagingDiagnosticsList');
        Route::post('ImagingDiagnosticsDelete', 'Api\v1\ApiController@ImagingDiagnosticsDelete');

        Route::post('addNote', 'Api\v1\ApiController@addNote');
        Route::post('NoteList', 'Api\v1\ApiController@NoteList');
        Route::post('NoteDelete', 'Api\v1\ApiController@NoteDelete');
        
        Route::post('addFile', 'Api\v1\ApiController@addFile');
        Route::post('editFile', 'Api\v1\ApiController@editFile');
        Route::post('FileList', 'Api\v1\ApiController@FileList');
        Route::post('FileDelete', 'Api\v1\ApiController@FileDelete');
        
        Route::post('addSurgery', 'Api\v1\ApiController@addSurgery');
        Route::post('SurgeryList', 'Api\v1\ApiController@SurgeryList');
        Route::post('SurgeryDelete', 'Api\v1\ApiController@SurgeryDelete');

        Route::post('addLabReport', 'Api\v1\ApiController@addLabReport');
        Route::post('labReportList', 'Api\v1\ApiController@labReportList');
        Route::post('labReportDelete', 'Api\v1\ApiController@labReportDelete');
        Route::post('addAppointment', 'Api\v1\ApiController@addAppointment');
        Route::post('appointmentList', 'Api\v1\ApiController@appointmentList');
        Route::post('appointmentDelete', 'Api\v1\ApiController@appointmentDelete');
        Route::post('doctorList', 'Api\v1\ApiController@doctorList');*/

    });
    
/******************************************************************************************************************/    
 
});