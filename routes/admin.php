<?php
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\Auth\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('login',[AuthController::class,'login'])->name('admin.login');
Route::post('/loginss',[AuthController::class,'createlogin'])->name('admin.createlogin');

Route::group(['middleware' => ['admin'], 'prefix' => 'admin', 'as' => 'admin.'], function(){
	Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
	Route::get('logout',[AuthController::class,'logout'])->name('logout');

	Route::get('service/proprietorship', [ServiceController::class, 'gst_reg_proprietorship'])->name('gst_reg_proprietorship');
	Route::get('service/proprietorship/delete/{id}', [ServiceController::class, 'gst_reg_proprietorship_delete'])->name('gst_reg_proprietorship.delete');

	Route::get('service/partnership-company', [ServiceController::class, 'gst_reg_partnershipCompany'])->name('gst_reg_partnershipCompany');
	Route::get('service/partnership-company/delete/{id}', [ServiceController::class, 'gst_reg_partnership_delete'])->name('gst_reg_partnership.delete');

	Route::get('service/pvt-ltd-company', [ServiceController::class, 'gst_reg_pvtltdCompany'])->name('gst_reg_pvtltdCompany');
	Route::get('service/pvt-ltd-company/delete/{id}', [ServiceController::class, 'gst_reg_pvtltdCompany_delete'])->name('gst_reg_pvtltdCompany.delete');

	Route::get('service/ltd-company', [ServiceController::class, 'gst_reg_ltdCompany'])->name('gst_reg_ltdCompany');
	Route::get('service/ltd-company/delete/{id}', [ServiceController::class, 'gst_reg_ltdCompany_delete'])->name('gst_reg_ltdCompany.delete');

	Route::get('service/nidhi-company', [ServiceController::class, 'gst_reg_nidhiCompany'])->name('gst_reg_nidhiCompany');
	Route::get('service/nidhi-company/delete/{id}', [ServiceController::class, 'gst_reg_nidhiCompany_delete'])->name('gst_reg_nidhiCompany.delete');

	Route::get('service/ngo', [ServiceController::class, 'gst_reg_ngo'])->name('gst_reg_ngo');
	Route::get('service/ngo/delete/{id}', [ServiceController::class, 'gst_reg_ngo_delete'])->name('gst_reg_ngo.delete');

	Route::get('service/salaried-persons', [ServiceController::class, 'itr_salariedPersons'])->name('itr_salariedPersons');
	Route::get('service/salaried-persons/delete/{id}', [ServiceController::class, 'itr_salariedPersons_delete'])->name('itr_salariedPersons.delete');

	Route::get('service/itr/selfEmployed', [ServiceController::class, 'itr_selfEmployed'])->name('itr_selfEmployed');
	Route::get('service/selfEmployed/delete/{id}', [ServiceController::class, 'itr_selfEmployed_delete'])->name('itr_selfEmployed.delete');


	Route::get('service/itr/professionals', [ServiceController::class, 'itr_professionals'])->name('itr_professionals');
	Route::get('service/professional/delete/{id}', [ServiceController::class, 'itr_professional_delete'])->name('itr_professional.delete');

	Route::get('service/3-balancesheet', [ServiceController::class, 'balancesheet_3'])->name('balancesheet_3');
	Route::get('service/3-balancesheet/delete/{id}', [ServiceController::class, 'balancesheet_3_delete'])->name('balancesheet_3_delete');

	Route::get('service/balancesheet/proprietorship', [ServiceController::class, 'balancesheet_proprietorship'])->name('balancesheet_proprietorship');
	Route::get('service/balancesheet/proprietorship/delete/{id}', [ServiceController::class, 'balancesheet_proprietorship_delete'])->name('balancesheet_proprietorship_delete');

	Route::get('service/gst-ret-filling/proprietorship(up to 1.5cr)', [ServiceController::class, 'gst_ret_proprietorship1'])->name('gst_ret_proprietorship1');
	Route::get('service/gst-ret-filling/proprietorship(up to 1.5cr/delete/{id})', [ServiceController::class, 'gst_ret_proprietorship1Delete'])->name('gst_ret_proprietorship1Delete');

	Route::get('service/gst-ret-filling/proprietorship(turn over 1.5cr to 5cr)', [ServiceController::class, 'gst_ret_proprietorship2'])->name('gst_ret_proprietorship2');
	Route::get('service/gst-ret-filling/proprietorship(turn over 1.5cr to 5cr/delete/{id})', [ServiceController::class, 'gst_ret_proprietorship2Delete'])->name('gst_ret_proprietorship2Delete');

	Route::get('service/gst-ret-filling/proprietorship(turn over 1.5cr to above)', [ServiceController::class, 'gst_ret_proprietorship3'])->name('gst_ret_proprietorship3');
	Route::get('service/gst-ret-filling/proprietorship(turn over 1.5cr to above/delete/{id})', [ServiceController::class, 'gst_ret_proprietorship3Delete'])->name('gst_ret_proprietorship3Delete');

	Route::get('service/gst-ret-filling/pvt-ltd(up to 1.5cr)', [ServiceController::class, 'gst_ret_pvtltd1'])->name('gst_ret_pvtltd1');
	Route::get('service/gst-ret-filling/pvt-ltd(up to 1.5cr/delete/{id})', [ServiceController::class, 'gst_ret_pvtltd1Delete'])->name('gst_ret_pvtltd1Delete');

	Route::get('service/gst-ret-filling/pvt-ltd(above 1.5cr)', [ServiceController::class, 'gst_ret_pvtltd2'])->name('gst_ret_pvtltd2');
	Route::get('service/gst-ret-filling/pvt-ltd(above 1.5cr/delete/{id})', [ServiceController::class, 'gst_ret_pvtltd2Delete'])->name('gst_ret_pvtltd2Delete');

	Route::get('service/company-registration/ngo/trust', [ServiceController::class, 'com_reg_ngo'])->name('com_reg_ngo');
	Route::get('service/company-registration/ngo/trust/Delete/{id}', [ServiceController::class, 'com_reg_ngo_delete'])->name('com_reg_ngo_delete');

	Route::get('service/company-registration/trademark', [ServiceController::class, 'com_reg_trademark'])->name('com_reg_trademark');
	Route::get('service/company-registration/trademark/Delete/{id}', [ServiceController::class, 'com_reg_trademark_delete'])->name('com_reg_trademark_delete');

	Route::get('service/company-registration/iso-certifications', [ServiceController::class, 'com_reg_isoCerti'])->name('com_reg_isoCerti');
	Route::get('service/company-registration/iso-certifications/Delete/{id}', [ServiceController::class, 'com_reg_isoCerti_delete'])->name('com_reg_isoCerti_delete');

	Route::get('service/company-registration/MSME(UDYOG ADHAR)', [ServiceController::class, 'com_reg_msme'])->name('com_reg_msme');
	Route::get('service/company-registration/MSME(UDYOG ADHAR)/delete/{id}', [ServiceController::class, 'com_reg_msmeDelete'])->name('com_reg_msmeDelete');

	Route::get('service/company-registration/fssai', [ServiceController::class, 'com_reg_fssai'])->name('com_reg_fssai');
	Route::get('service/company-registration/fssai/delete/{id}', [ServiceController::class, 'com_reg_fssaiDelete'])->name('com_reg_fssaiDelete');

	Route::get('service/company-registration/drugLicense', [ServiceController::class, 'com_reg_drugLicense'])->name('com_reg_drugLicense');
	Route::get('service/company-registration/drugLicense/Delete/{id}', [ServiceController::class, 'com_reg_drugLicenseDelete'])->name('com_reg_drugLicenseDelete');

	Route::get('service/company-registration/ngoDarpan', [ServiceController::class, 'com_reg_ngoDarpan'])->name('com_reg_ngoDarpan');
	Route::get('service/company-registration/ngoDarpan/Delete/{id}', [ServiceController::class, 'com_reg_ngoDarpanDelete'])->name('com_reg_ngoDarpanDelete');

	Route::get('service/company-registration/gemPortal', [ServiceController::class, 'com_reg_gemPortal'])->name('com_reg_gemPortal');
	Route::get('service/company-registration/gemPortal/Delete/{id}', [ServiceController::class, 'com_reg_gemPortalDelete'])->name('com_reg_gemPortalDelete');

	Route::get('service/company-registration/startUpIndia', [ServiceController::class, 'com_reg_startUpIndia'])->name('com_reg_startUpIndia');
	Route::get('service/company-registration/startUpIndia/Delete/{id}', [ServiceController::class, 'com_reg_startUpIndiaDelete'])->name('com_reg_startUpIndiaDelete');

	Route::get('service/company-registration/epf', [ServiceController::class, 'com_reg_epf'])->name('com_reg_epf');
	Route::get('service/company-registration/epf/Delete/{id}', [ServiceController::class, 'com_reg_epfDelete'])->name('com_reg_epfDelete');

	// Route::get('service/company-registration/drugLicense', [ServiceController::class, 'com_reg_epf'])->name('com_reg_epf');

	Route::get('service/company-registration/esi', [ServiceController::class, 'com_reg_esi'])->name('com_reg_esi');
	Route::get('service/company-registration/esi/Delete/{id}', [ServiceController::class, 'com_reg_esiDelete'])->name('com_reg_esiDelete');

	Route::get('service/company-registration/labourLicense', [ServiceController::class, 'com_reg_labourLicense'])->name('com_reg_labourLicense');
	Route::get('service/company-registration/labourLicense/Delete/{id}', [ServiceController::class, 'com_reg_labourLicenseDelete'])->name('com_reg_labourLicenseDelete');

	Route::get('service/company-registration/pasaraLicense', [ServiceController::class, 'com_reg_pasaraLicense'])->name('com_reg_pasaraLicense');
	Route::get('service/company-registration/pasaraLicense/Delete/{id}', [ServiceController::class, 'com_reg_pasaraLicenseDelete'])->name('com_reg_pasaraLicenseDelete');

	Route::get('service/company-registration/polutionControl', [ServiceController::class, 'com_reg_polutionControl'])->name('com_reg_polutionControl');
	Route::get('service/company-registration/polutionControl/Delete/{id}', [ServiceController::class, 'com_reg_polutionControlDelete'])->name('com_reg_polutionControlDelete');

	Route::get('service/company-registration/import-export-license', [ServiceController::class, 'com_reg_importLicense'])->name('com_reg_importLicense');
	Route::get('service/company-registration/import-export-license/Delete/{id}', [ServiceController::class, 'com_reg_importLicenseDelete'])->name('com_reg_importLicenseDelete');

	Route::get('service/company-registration/eighty', [ServiceController::class, 'com_reg_importEighty'])->name('com_reg_importEighty');
	Route::get('service/company-registration/eighty/Delete/{id}', [ServiceController::class, 'com_reg_importEightyDelete'])->name('com_reg_importEightyDelete');

	Route::get('service/company-registration/fcra', [ServiceController::class, 'com_reg_Fcra'])->name('com_reg_Fcra');
	Route::get('service/company-registration/fcra/Delete/{id}', [ServiceController::class, 'com_reg_FcraDelete'])->name('com_reg_FcraDelete');

	Route::get('service/company-registration/peso-certificate', [ServiceController::class, 'com_reg_pesoCertificatre'])->name('com_reg_pesoCertificatre');
	Route::get('service/company-registration/peso-certificate/Delete/{id}', [ServiceController::class, 'com_reg_pesoCertificatreDelete'])->name('com_reg_pesoCertificatreDelete');
	
	Route::get('service/company-registration/pvt-ltd-company', [ServiceController::class, 'com_reg_pvtltdCom'])->name('com_reg_pvtltdCom');	
	Route::get('service/company-registration/pvt-ltd-company/Delete/{id}', [ServiceController::class, 'com_reg_pvtltdComDelete'])->name('com_reg_pvtltdComDelete');	

	Route::get('service/company-registration/nidhi-company', [ServiceController::class, 'com_reg_nidhiCom'])->name('com_reg_nidhiCom');
	Route::get('service/company-registration/nidhi-company/Delete/{id}', [ServiceController::class, 'com_reg_nidhiComDelete'])->name('com_reg_nidhiComDelete');

	Route::get('service/company-registration/digital-signature', [ServiceController::class, 'com_reg_digitalSignature'])->name('com_reg_digitalSignature');
	Route::get('service/company-registration/digital-signature/Delete/{id}', [ServiceController::class, 'com_reg_digitalSignatureDelete'])->name('com_reg_digitalSignatureDelete');

	Route::get('service/company-registration/nidhi-company/digital-signature( SIGNATURE+ ENCRUPTION)', [ServiceController::class, 'com_reg_digitalSignatureEnc'])->name('com_reg_digitalSignatureEnc');
	Route::get('service/company-registration/nidhi-company/digital-signature( SIGNATURE+ ENCRUPTION)/Delete/{id}', [ServiceController::class, 'com_reg_digitalSignatureEncDelete'])->name('com_reg_digitalSignatureEncDelete');

	Route::get('services/homeLoan/salaried-persons', [ServiceController::class, 'home_loan_salaried'])->name('home_loan_salaried');
	Route::get('services/homeLoan/salaried-persons/Delete/{id}', [ServiceController::class, 'home_loan_salariedDelete'])->name('home_loan_salariedDelete');

	Route::get('services/homeLoan/BussinessMan', [ServiceController::class, 'home_loan_business_men'])->name('home_loan_business_men');
	Route::get('services/homeLoan/BussinessMan/Delete/{id}', [ServiceController::class, 'home_loan_business_menDelete'])->name('home_loan_business_menDelete');

	Route::get('services/homeLoan/salaried-persons-bt', [ServiceController::class, 'home_loan_salaried_bt'])->name('home_loan_salaried_bt');
	Route::get('services/homeLoan/salaried-persons-bt/Delete/{id}', [ServiceController::class, 'home_loan_salaried_btDelete'])->name('home_loan_salaried_btDelete');

	Route::get('services/homeLoan/BussinessManBt', [ServiceController::class, 'home_loan_business_men_bt'])->name('home_loan_business_men_bt');
	Route::get('services/homeLoan/BussinessManBt/Delete/{id}', [ServiceController::class, 'home_loan_business_men_btDelete'])->name('home_loan_business_men_btDelete');

	Route::get('services/homeLoan/BussinessLoan', [ServiceController::class, 'home_loan_businessLoan'])->name('home_loan_businessLoan');
	Route::get('services/homeLoan/BussinessLoan/Delete/{id}', [ServiceController::class, 'home_loan_businessLoanDelete'])->name('home_loan_businessLoanDelete');

	Route::get('services/homeLoan/personalLoan', [ServiceController::class, 'home_loan_PersonalLoan'])->name('home_loan_PersonalLoan');
	Route::get('services/homeLoan/personalLoan/Delete/{id}', [ServiceController::class, 'home_loan_PersonalLoanDelete'])->name('home_loan_PersonalLoanDelete');

	Route::get('services/homeLoan/startUpLoan', [ServiceController::class, 'home_loan_startUpLoan'])->name('home_loan_startUpLoan');
	Route::get('services/homeLoan/startUpLoan/Delete/{id}', [ServiceController::class, 'home_loan_startUpLoanDelete'])->name('home_loan_startUpLoanDelete');

});


