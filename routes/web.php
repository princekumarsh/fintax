<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\WebController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [WebController::class, 'index'])->name('index');
Route::get('about', [WebController::class, 'about'])->name('about');
Route::get('contact', [WebController::class, 'contact'])->name('contact');
Route::get('cart', [WebController::class, 'cart'])->name('cart');
Route::get('checkout', [WebController::class, 'checkout'])->name('checkout');
Route::get('/service/confirm-order/{reference_no}/{table}', [WebController::class, 'confirm_order'])->name('confirm_order');
Route::get('/registration/associate', [WebController::class, 'associatedRegister'])->name('associateRegister');
Route::post('/associatedPost', [WebController::class, 'associatedPost'])->name('associatedPost');

Route::get('/login/associate', [WebController::class, 'associateLogin'])->name('associateLogin');
Route::post('/login/associateSubmit', [WebController::class, 'associateSubmit'])->name('associateSubmit');

Route::get('/associate/logout', [WebController::class, 'logout'])->name('associateLogout');

Route::get('services/proprietorship', [WebController::class, 'gst_reg_proprietorship'])->name('service.proprietorship');
Route::post('services/proprietorship', [WebController::class, 'gst_reg_proprietorshipPost'])->name('service.proprietorshipPost');

Route::get('services/partnershipcompany', [WebController::class, 'partnershipCom'])->name('service.partnershipCompany');
Route::post('services/partnershipcompany', [WebController::class, 'gst_reg_partnershipComPost'])->name('service.partnershipCompanyPost');

Route::get('services/gst-reg-pvt-ltd-com', [WebController::class, 'gst_reg_pvtltdCom'])->name('service.gst_reg_pvtltdCom');
Route::post('services/gst-reg-pvt-ltd-com', [WebController::class, 'gst_reg_pvtltdComPost'])->name('service.gst_reg_pvtltdComPost');



Route::get('services/gst-reg-limitedCompany', [WebController::class, 'gst_reg_limitedCompany'])->name('service.gst_reg_limitedCompany');
Route::post('services/gst-reg-limitedCompany', [WebController::class, 'gst_reg_limitedCompanyPost'])->name('service.gst_reg_limitedCompanyPost');


Route::get('services/gst-reg-nidhiCompany', [WebController::class, 'gst_reg_nidhiCompany'])->name('service.gst_reg_nidhiCompany');
Route::post('services/gst-reg-nidhiCompany', [WebController::class, 'gst_reg_nidhiCompanyPost'])->name('service.gst_reg_nidhiCompanyPost');


Route::get('services/gst-reg-ngo', [WebController::class, 'gst_reg_ngo'])->name('service.gst_reg_ngo');
Route::post('services/gst-reg-ngo', [WebController::class, 'gst_reg_ngoPost'])->name('service.gst_reg_ngoPost');

Route::get('services/salaried-Persons', [WebController::class, 'itr_salariedPersons'])->name('service.salariedParsons');
Route::post('services/salaried-PersonsPost', [WebController::class, 'itr_salariedPersonsPost'])->name('service.itr_salariedPersonsPost');


Route::get('services/self-employed-persons', [WebController::class, 'itr_selfEmployed'])->name('service.selfEmployed');
Route::post('services/self-employed-personsPost', [WebController::class, 'itr_selfEmployedPost'])->name('service.itr_selfEmployedPost');

Route::get('services/professionals', [WebController::class, 'professionals'])->name('service.professionals');
Route::post('services/professionalsPost', [WebController::class, 'itr_professionalsPost'])->name('service.itr_professionalsPost');

Route::get('services/3balancesheet', [WebController::class, 'balancesheet'])->name('service.3balancesheet');
Route::post('services/3balancesheetPost', [WebController::class, 'balancesheet_3Post'])->name('service.3balancesheetPost');

Route::get('services/balancesheet_proprietorship', [WebController::class, 'balancesheet_proprietorship'])->name('service.balancesheet_proprietorship');
Route::post('services/balancesheet_proprietorshipPost', [WebController::class, 'balancesheet_proprietorshipPost'])->name('service.balancesheet_proprietorshipPost');



Route::get('services/gst_return_proprietorship_1.5cr', [WebController::class, 'gst_proprietorship1'])->name('service.gst_proprietorship1');
Route::post('services/gst_return_proprietorship_1.5cr/Post', [WebController::class, 'gst_proprietorship1Post'])->name('service.gst_proprietorship1Post');

Route::get('services/gst_return_proprietorship_1.5crto5cr', [WebController::class, 'gst_proprietorship2'])->name('service.gst_proprietorship2');
Route::post('services/gst_return_proprietorship_1.5crto5cr/Post', [WebController::class, 'gst_proprietorship2Post'])->name('service.gst_proprietorship2Post');

Route::get('services/gst_return_proprietorship_above5cr', [WebController::class, 'gst_proprietorship3'])->name('service.gst_proprietorship3');
Route::post('services/gst_return_proprietorship_above5cr/post', [WebController::class, 'gst_proprietorship3Post'])->name('service.gst_proprietorship3Post');

Route::get('services/pvtLtdAndOtherCompanyUp1.5cr', [WebController::class, 'pvtLtdAndOtherCompany1'])->name('service.pvtLtdAndOtherCompany1');
Route::post('services/pvtLtdAndOtherCompanyUp1.5cr/post', [WebController::class, 'pvtLtdAndOtherCompany1Post'])->name('service.pvtLtdAndOtherCompany1Post');

Route::get('services/pvtLtdAndOtherCompanyAbove1.5cr', [WebController::class, 'pvtLtdAndOtherCompany2'])->name('service.pvtLtdAndOtherCompany2');
Route::post('services/pvtLtdAndOtherCompanyAbove1.5cr/post', [WebController::class, 'pvtLtdAndOtherCompany2Post'])->name('service.pvtLtdAndOtherCompany2Post');


Route::get('services/companyRegisterationPvtLtd', [WebController::class, 'companyRegisterationPvtLtd'])->name('service.companyRegisterationPvtLtd');
Route::post('services/companyRegisterationPvtLtd/post', [WebController::class, 'companyRegisterationPvtLtdPost'])->name('service.companyRegisterationPvtLtdPost');


Route::get('services/companyRegisterationNidhi', [WebController::class, 'companyRegisterationNidhi'])->name('service.companyRegisterationNidhi');
Route::post('services/companyRegisterationNidhi/Post', [WebController::class, 'companyRegisterationNidhiPost'])->name('service.companyRegisterationNidhiPost');


Route::get('services/digitalSignClass3', [WebController::class, 'digitalSignClass3'])->name('service.digitalSignClass3');
Route::post('services/digitalSignClass3Post', [WebController::class, 'digitalSignClass3Post'])->name('service.digitalSignClass3Post');

Route::get('services/digitalSignClass3Enc', [WebController::class, 'digitalSignClass3Enc'])->name('service.digitalSignClass3Enc');
Route::post('services/digitalSignClass3EncPost', [WebController::class, 'digitalSignClass3EncPost'])->name('service.digitalSignClass3EncPost');


// new

Route::get('services/Company-registation/ngo', [WebController::class, 'ngo'])->name('service.ngo');
Route::post('services/Company-registation/ngoPost', [WebController::class, 'com_reg_ngoPost'])->name('service.company_reg.ngo');


Route::get('services/tradeMarkRegistration', [WebController::class, 'tradeMarkRegistration'])->name('service.tradeMarkRegistration');
Route::post('services/tradeMarkRegistrationPost', [WebController::class, 'tradeMarkRegistrationPost'])->name('service.tradeMarkRegistrationPost');


Route::get('services/isoRegistration', [WebController::class, 'isoRegistration'])->name('service.isoRegistration');
Route::post('services/isoRegistrationPost', [WebController::class, 'isoRegistrationPost'])->name('service.isoRegistrationPost');

Route::get('services/msmeRegistration', [WebController::class, 'msmeRegistration'])->name('service.msmeRegistration');
Route::post('services/msmeRegistrationPost', [WebController::class, 'msmeRegistrationPost'])->name('service.msmeRegistrationPost');

Route::get('services/fssai', [WebController::class, 'fssai'])->name('service.fssai');
Route::post('services/fssaiPost', [WebController::class, 'fssaiPost'])->name('service.fssaiPost');

Route::get('services/drugLicense', [WebController::class, 'drugLicense'])->name('service.drugLicense');
Route::post('services/drugLicensePost', [WebController::class, 'drugLicensePost'])->name('service.drugLicensePost');

Route::get('services/ngoDarpan', [WebController::class, 'ngoDarpan'])->name('service.ngoDarpan');
Route::post('services/ngoDarpanPost', [WebController::class, 'ngoDarpanPost'])->name('service.ngoDarpanPost');

Route::get('services/gemPortal', [WebController::class, 'gemPortal'])->name('service.gemPortal');
Route::post('services/gemPortalPost', [WebController::class, 'gemPortalPost'])->name('service.gemPortalPost');

Route::get('services/startUpIndia', [WebController::class, 'startUpIndia'])->name('service.startUpIndia');
Route::post('services/startUpIndiaPost', [WebController::class, 'startUpIndiaPost'])->name('service.startUpIndiaPost');

Route::get('services/epf', [WebController::class, 'epf'])->name('service.epf');
Route::post('services/epfPost', [WebController::class, 'epfPost'])->name('service.epfPost');

Route::get('services/esi', [WebController::class, 'esi'])->name('service.esi');
Route::post('services/esiPost', [WebController::class, 'esiPost'])->name('service.esiPost');

Route::get('services/labourLicense', [WebController::class, 'labourLicense'])->name('service.labourLicense');
Route::post('services/labourLicensePost', [WebController::class, 'labourLicensePost'])->name('service.labourLicensePost');

Route::get('services/pasaraLicense', [WebController::class, 'pasaraLicense'])->name('service.pasaraLicense');
Route::post('services/pasaraLicensePost', [WebController::class, 'pasaraLicensePost'])->name('service.pasaraLicensePost');

Route::get('services/pollutionControl', [WebController::class, 'pollutionControl'])->name('service.pollutionControl');
Route::post('services/pollutionControlPost', [WebController::class, 'pollutionControlPost'])->name('service.pollutionControlPost');

Route::get('services/importLicense', [WebController::class, 'importLicense'])->name('service.importLicense');
Route::post('services/importLicensePost', [WebController::class, 'importLicensePost'])->name('service.importLicensePost');

Route::get('services/eighty', [WebController::class, 'eighty'])->name('service.eighty');
Route::post('services/eightyPost', [WebController::class, 'eightyPost'])->name('service.eightyPost');

Route::get('services/fcra', [WebController::class, 'frca'])->name('service.frca');
Route::post('services/fcraPost', [WebController::class, 'frcaPost'])->name('service.frcaPost');

Route::get('services/peso', [WebController::class, 'peso'])->name('service.peso');
Route::post('services/pesoPost', [WebController::class, 'pesoPost'])->name('service.pesoPost');

Route::get('services/homeLoanSalaried', [WebController::class, 'homeLoanSalaried'])->name('service.homeLoanSalaried');
Route::post('services/homeLoanSalariedPost', [WebController::class, 'homeLoanSalariedPost'])->name('service.homeLoanSalariedPost');

Route::get('services/homeLoanBusiness', [WebController::class, 'homeLoanBusiness'])->name('service.homeLoanBusiness');
Route::post('services/homeLoanBusinessPost', [WebController::class, 'homeLoanBusinessPost'])->name('service.homeLoanBusinessPost');

Route::get('services/homeLoanBtSalaried', [WebController::class, 'homeLoanBtSalaried'])->name('service.homeLoanBtSalaried');
Route::post('services/homeLoanBtSalariedPost', [WebController::class, 'homeLoanBtSalariedPost'])->name('service.homeLoanBtSalariedPost');

Route::get('services/homeLoanBtBusiness', [WebController::class, 'homeLoanBtBusiness'])->name('service.homeLoanBtBusiness');
Route::post('services/homeLoanBtBusinessPost', [WebController::class, 'homeLoanBtBusinessPost'])->name('service.homeLoanBtBusinessPost');

Route::get('services/lapSalaried', [WebController::class, 'lapSalaried'])->name('service.lapSalaried');
Route::post('services/lapSalariedPost', [WebController::class, 'lapSalariedPost'])->name('service.lapSalariedPost');

Route::get('services/lapBusiness', [WebController::class, 'lapBusiness'])->name('service.lapBusiness');
Route::post('services/lapBusinessPost', [WebController::class, 'lapBusinessPost'])->name('service.lapBusinessPost');

Route::get('services/ccSalaried', [WebController::class, 'ccSalaried'])->name('service.ccSalaried');
Route::post('services/ccSalariedPost', [WebController::class, 'ccSalariedPost'])->name('service.ccSalariedPost');

Route::get('services/ccBusiness', [WebController::class, 'ccBusiness'])->name('service.ccBusiness');
Route::post('services/ccBusinessPost', [WebController::class, 'ccBusinessPost'])->name('service.ccBusinessPost');

Route::get('services/personalLoan', [WebController::class, 'personalLoan'])->name('service.personalLoan');
Route::post('services/personalLoanPost', [WebController::class, 'personalLoanPost'])->name('service.personalLoanPost');

Route::get('services/businessLoan', [WebController::class, 'businessLoan'])->name('service.businessLoan');
Route::post('services/businessLoanPost', [WebController::class, 'businessLoanPost'])->name('service.businessLoanPost');

Route::get('services/startupLoan', [WebController::class, 'startupLoan'])->name('service.startupLoan');
Route::post('services/startupLoanPost', [WebController::class, 'startupLoanPost'])->name('service.startupLoanPost');



