<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\gst_reg_proprietorship;
use App\Models\gst_reg_multiple_com;
use App\Models\Gst_Reg_Ngo;
use App\Models\itr_Salaried_Persons;
use App\Models\Itr_Selfpersons_professional;
use App\Models\Balance_Sheet_3;
use App\Models\Balancesheet_Proprietorship;
use App\Models\Gst_Ret_Filling;
use App\Models\Gst_Reg_Trademark;
use App\Models\com_Reg_Ngo;
use App\Models\com_Reg_Trademark;
use App\Models\com_Reg_Multiple_Com;
use App\Models\Com_Reg_Msme;
use App\Models\Com_Reg_Fssai;
use App\Models\Com_Reg_Pvt_Nidhi_Com;
use App\Models\Com_Reg_Digital_Signature;
use App\Models\Home_Loan_Salaried;
use App\Models\Home_Loan_Salaried_Bt;
use App\Models\Home_Loan_Business_Man;
use App\Models\Home_Loan_Business_Man_bt;
use App\Models\Loan_Services_Multiple_Com;

class ServiceController extends Controller
{
    public function gst_reg_proprietorship(){
        $proprietorship = gst_reg_proprietorship::get();
        return view('admin.service.gst_reg_proprietorship',compact('proprietorship'));
    }
    public function gst_reg_proprietorship_delete($id){
        gst_reg_proprietorship::where('id',$id)->delete();
        return redirect()->back();
    }

    public function gst_reg_partnershipCompany(){
        $partnership = gst_reg_multiple_com::where('company_gst_reg','partnership_com')->get();
         return view('admin.service.gst_reg_partnershipCompany',compact('partnership'));
    }
    public function gst_reg_partnership_delete($id){
        gst_reg_multiple_com::where('id',$id)->delete();
        return redirect()->back();
    }

    public function gst_reg_pvtltdCompany(){
        $partnership = gst_reg_multiple_com::where('company_gst_reg','Pvt. Ltd. Company')->get();
         return view('admin.service.gst_reg_pvtLtdCompany',compact('partnership'));
    }
    public function gst_reg_pvtltdCompany_delete($id){
        gst_reg_multiple_com::where('id',$id)->delete();
        return redirect()->back();
    }

    public function gst_reg_ltdCompany(){
        $partnership = gst_reg_multiple_com::where('company_gst_reg','Ltd. Company')->get();
         return view('admin.service.gst_reg_ltdCompany',compact('partnership'));
    }
    public function gst_reg_ltdCompany_delete($id){
        gst_reg_multiple_com::where('id',$id)->delete();
        return redirect()->back();
    }

    public function gst_reg_nidhiCompany(){
        $partnership = gst_reg_multiple_com::where('company_gst_reg','Nidhi Company')->get();
         return view('admin.service.gst_reg_nidhiCompany',compact('partnership'));
    }
    public function gst_reg_nidhiCompany_delete($id){
        gst_reg_multiple_com::where('id',$id)->delete();
        return redirect()->back();
    }

    public function gst_reg_ngo(){
        $partnership = Gst_Reg_Ngo::get();
         return view('admin.service.gst_reg_ngo',compact('partnership'));
    }
    public function gst_reg_ngo_delete($id){
        Gst_Reg_Ngo::where('id',$id)->delete();
        return redirect()->back();
    }

    public function itr_salariedPersons(){
        $salariedPersons = itr_Salaried_Persons::get();
        return view('admin.service.itr_salariedPersons',compact('salariedPersons'));
    }
    public function itr_salariedPersons_delete($id){
        itr_salaried_Persons::where('id',$id)->delete();
        return redirect()->back();
    }

    public function itr_selfEmployed(){
        $selfEmployed = Itr_Selfpersons_professional::where('itr','self-employed')->get();
        return view('admin.service.itr_selfEmployed',compact('selfEmployed'));
    }
    public function itr_selfEmployed_delete($id){
        Itr_Selfpersons_professional::where('id',$id)->delete();
        return redirect()->back();
    }

    public function itr_professionals(){
        $professionals = Itr_Selfpersons_professional::where('itr','professionals')->get();
        return view('admin.service.itr_professionals',compact('professionals'));
    }
    public function itr_professional_delete($id){
        Itr_Selfpersons_professional::where('id',$id)->delete();
        return redirect()->back();
    }

    public function balancesheet_3(){
        $balancesheet = Balance_Sheet_3::get();
        return view('admin.service.3balancesheet',compact('balancesheet'));
    }
    public function balancesheet_3_delete($id){
        Balance_Sheet_3::where('id',$id)->delete();
        return redirect()->back();
    }

    public function balancesheet_proprietorship(){
        $balancesheet = Balancesheet_Proprietorship::get();
        return view('admin.service.balancesheet_proprietorship',compact('balancesheet'));
    }
    public function balancesheet_proprietorship_delete($id){
        Balancesheet_Proprietorship::where('id',$id)->delete();
        return redirect()->back();
    }

    public function gst_ret_proprietorship1(){
        $proprietorship = Gst_Ret_Filling::where('reg_type','propri(up to 1.5)')->get();
        return view('admin.service.gst_ret_proprietorship1',compact('proprietorship'));
    }
    public function gst_ret_proprietorship1Delete($id){
        Gst_Ret_Filling::where('id',$id)->delete();
        return redirect()->back();
    }

    public function gst_ret_proprietorship2(){
        $proprietorship = Gst_Ret_Filling::where('reg_type','propri(1.5to5)')->get();
        return view('admin.service.gst_ret_proprietorship2',compact('proprietorship'));
    }
    public function gst_ret_proprietorship2Delete($id){
        Gst_Ret_Filling::where('id',$id)->delete();
        return redirect()->back();
    }

    public function gst_ret_proprietorship3(){
        $proprietorship = Gst_Ret_Filling::where('reg_type','propri(5cr to above)')->get();
        return view('admin.service.gst_ret_proprietorship3',compact('proprietorship'));
    }
    public function gst_ret_proprietorship3Delete($id){
        Gst_Ret_Filling::where('id',$id)->delete();
        return redirect()->back();
    }

    public function gst_ret_pvtltd1(){
        $pvtltd = Gst_Ret_Filling::where('reg_type','pvt ltd(up to 1.5)')->get();
        return view('admin.service.gst_ret_pvtltd1',compact('pvtltd'));
    }
    public function gst_ret_pvtltd1Delete($id){
        Gst_Ret_Filling::where('id',$id)->delete();
        return redirect()->back();
    }

    public function gst_ret_pvtltd2(){
        $pvtltd = Gst_Ret_Filling::where('reg_type','pvt ltd(above 1.5)')->get();
        return view('admin.service.gst_ret_pvtltd2',compact('pvtltd'));
    }
    public function gst_ret_pvtltd2Delete($id){
        Gst_Ret_Filling::where('id',$id)->delete();
        return redirect()->back();
    }

    public function com_reg_ngo(){
        $regiteration = com_Reg_Ngo::get();
        return view('admin.service.com_reg_ngo',compact('regiteration'));
    }
     public function com_reg_ngo_delete($id){
        com_Reg_Ngo::where('id',$id)->delete();
        return redirect()->back();
    }

    public function com_reg_trademark(){
        $regiteration = com_Reg_Trademark::get();
        return view('admin.service.com_reg_trademark',compact('regiteration'));
    }
     public function com_reg_trademark_delete($id){
        com_Reg_Trademark::where('id',$id)->delete();
        return redirect()->back();
    }

    public function com_reg_isoCerti(){
        $regiteration = com_Reg_Multiple_Com::where('reg_type','iso_certi_reg')->get();
        return view('admin.service.com_reg_isoCerti',compact('regiteration'));
    }
    public function com_reg_isoCerti_delete($id){
        com_Reg_Multiple_Com::where('id',$id)->delete();
        return redirect()->back();
    }

    public function com_reg_msme(){
        $msme = Com_Reg_Msme::get();
        return view('admin.service.com_reg_msme',compact('msme'));
    }
    public function com_reg_msmeDelete($id){
        Com_Reg_Msme::where('id',$id)->delete();
        return redirect()->back();
    }

    public function com_reg_fssai(){
        $registration = Com_Reg_Fssai::get();
        return view('admin.service.com_reg_fssai',compact('registration'));
    }
     public function com_reg_fssaiDelete($id){
        Com_Reg_Fssai::where('id',$id)->delete();
        return redirect()->back();
    }

    public function com_reg_drugLicense(){
        $registration = com_Reg_Multiple_Com::where('reg_type','drug_licence')->get();
        return view('admin.service.com_reg_drugLicense',compact('registration'));
    }
    public function com_reg_drugLicenseDelete($id){
        com_Reg_Multiple_Com::where('id',$id)->delete();
        return redirect()->back();
    }

    public function com_reg_ngoDarpan(){
        $registration = com_Reg_Multiple_Com::where('reg_type','ngo_darpan')->get();
        return view('admin.service.com_reg_ngoDarpan',compact('registration'));
    }
    public function com_reg_ngoDarpanDelete($id){
        com_Reg_Multiple_Com::where('id',$id)->delete();
        return redirect()->back();
    }

    public function com_reg_gemPortal(){
        $registration = com_Reg_Multiple_Com::where('reg_type','gem_portal')->get();
        return view('admin.service.com_reg_gemPortal',compact('registration'));
    }
    public function com_reg_gemPortalDelete($id){
        com_Reg_Multiple_Com::where('id',$id)->delete();
        return redirect()->back();
    }

    public function com_reg_startUpIndia(){
        $registration = com_Reg_Multiple_Com::where('reg_type','startUpIndia')->get();
        return view('admin.service.com_reg_startUpIndia',compact('registration'));
    }
    public function com_reg_startUpIndiaDelete($id){
        com_Reg_Multiple_Com::where('id',$id)->delete();
        return redirect()->back();
    }

    public function com_reg_epf(){
        $registration = com_Reg_Multiple_Com::where('reg_type','epf_reg')->get();
        return view('admin.service.com_reg_epf',compact('registration'));
    }
    public function com_reg_epfDelete($id){
        com_Reg_Multiple_Com::where('id',$id)->delete();
        return redirect()->back();
    }

    public function com_reg_esi(){
        $registration = com_Reg_Multiple_Com::where('reg_type','esi_reg')->get();
        return view('admin.service.com_reg_esi',compact('registration'));
    }
    public function com_reg_esiDelete($id){
        com_Reg_Multiple_Com::where('id',$id)->delete();
        return redirect()->back();
    }

    public function com_reg_labourLicense(){
        $registration = com_Reg_Multiple_Com::where('reg_type','labour_license')->get();
        return view('admin.service.com_reg_labourLicense',compact('registration'));
    }
    public function com_reg_labourLicenseDelete($id){
        com_Reg_Multiple_Com::where('id',$id)->delete();
        return redirect()->back();
    }

    public function com_reg_pasaraLicense(){
        $registration = com_Reg_Multiple_Com::where('reg_type','pasara_license')->get();
        return view('admin.service.com_reg_pasaraLicense',compact('registration'));
    }
    public function com_reg_pasaraLicenseDelete($id){
        com_Reg_Multiple_Com::where('id',$id)->delete();
        return redirect()->back();
    }

    public function com_reg_polutionControl(){
        $registration = com_Reg_Multiple_Com::where('reg_type','pollution_control')->get();
        return view('admin.service.com_reg_polutionControl',compact('registration'));
    }
    public function com_reg_polutionControlDelete($id){
        com_Reg_Multiple_Com::where('id',$id)->delete();
        return redirect()->back();
    }

    public function com_reg_importLicense(){
        $registration = com_Reg_Multiple_Com::where('reg_type','import_license')->get();
        return view('admin.service.com_reg_importLicense',compact('registration'));
    }
    public function com_reg_importLicenseDelete($id){
        com_Reg_Multiple_Com::where('id',$id)->delete();
        return redirect()->back();
    }

    public function com_reg_importEighty(){
        $registration = com_Reg_Multiple_Com::where('reg_type','eighty_reg')->get();
        return view('admin.service.com_reg_importEighty',compact('registration'));
    }
    public function com_reg_importEightyDelete($id){
        com_Reg_Multiple_Com::where('id',$id)->delete();
        return redirect()->back();
    }

    public function com_reg_Fcra(){
        $registration = com_Reg_Multiple_Com::where('reg_type','fcra_reg')->get();
        return view('admin.service.com_reg_Fcra',compact('registration'));
    }
    public function com_reg_FcraDelete($id){
        com_Reg_Multiple_Com::where('id',$id)->delete();
        return redirect()->back();
    }

    public function com_reg_pesoCertificatre(){
        $registration = com_Reg_Multiple_Com::where('reg_type','peso_reg')->get();
        return view('admin.service.com_reg_pesoCertificatre',compact('registration'));
    }
    public function com_reg_pesoCertificatreDelete($id){
        com_Reg_Multiple_Com::where('id',$id)->delete();
        return redirect()->back();
    }

    public function com_reg_pvtltdCom(){
        $registration = Com_Reg_Pvt_Nidhi_Com::where('com_type','pvt_ltd_com')->get();
        return view('admin.service.com_reg_pvtltdCom',compact('registration'));
    }
    public function com_reg_pvtltdComDelete($id){
        Com_Reg_Pvt_Nidhi_Com::where('id',$id)->delete();
        return redirect()->back();
    }

    public function com_reg_nidhiCom(){
        $registration = Com_Reg_Pvt_Nidhi_Com::where('com_type','nidhi_com')->get();
        return view('admin.service.com_reg_nidhiCom',compact('registration'));
    }
    public function com_reg_nidhiComDelete($id){
        Com_Reg_Pvt_Nidhi_Com::where('id',$id)->delete();
        return redirect()->back();
    }

    public function com_reg_digitalSignature(){
        $registration = Com_Reg_Digital_Signature::where('reg_type','digital_signature3')->get();
        return view('admin.service.com_reg_digitalSignature3',compact('registration'));
    }
    public function com_reg_digitalSignatureDelete($id){
        Com_Reg_Digital_Signature::where('id',$id)->delete();
        return redirect()->back();
    }

    public function com_reg_digitalSignatureEnc(){
        $registration = Com_Reg_Digital_Signature::where('reg_type','digital_signature3Enc')->get();
        return view('admin.service.com_reg_digitalSignature3Enc',compact('registration'));
        
    }
    public function com_reg_digitalSignatureEncDelete($id){
        Com_Reg_Digital_Signature::where('id',$id)->delete();
        return redirect()->back();
    }

    public function home_loan_salaried(){
        $homeLoan = Home_Loan_Salaried::get();
        return view('admin.service.home_loan_salaried',compact('homeLoan'));
    }
    public function home_loan_salariedDelete($id){
        Home_Loan_Salaried::where('id',$id)->delete();
        return redirect()->back();
    }

    public function home_loan_business_men(){
        $homeLoan = Home_Loan_Business_Man::get();
        return view('admin.service.home_loan_business_men',compact('homeLoan'));
    }
    public function home_loan_business_menDelete($id){
        Home_Loan_Business_Man::where('id',$id)->delete();
        return redirect()->back();
    }

    public function home_loan_salaried_bt(){
        $homeLoan = Home_Loan_Salaried_Bt::get();
        return view('admin.service.home_loan_salaried_bt',compact('homeLoan'));
    }
    public function home_loan_salaried_btDelete($id){
        Home_Loan_Salaried_Bt::where('id',$id)->delete();
        return redirect()->back();
    }

    public function home_loan_business_men_bt(){
        $homeLoan = Home_Loan_Business_Man_bt::get();
        return view('admin.service.home_loan_business_men_bt',compact('homeLoan'));
    }
    public function home_loan_business_men_btDelete($id){
        Home_Loan_Business_Man_bt::where('id',$id)->delete();
        return redirect()->back();
    }

    public function home_loan_businessLoan(){
        $homeLoan = Loan_Services_Multiple_Com::where('loan_type','bussiness_loan')->get();
        return view('admin.service.businessLoan',compact('homeLoan'));
    }
    public function home_loan_businessLoanDelete($id){
        Loan_Services_Multiple_Com::where('id',$id)->delete();
        return redirect()->back();
    }

    public function home_loan_PersonalLoan(){
        $homeLoan = Loan_Services_Multiple_Com::where('loan_type','personal_loan')->get();
        return view('admin.service.personalLoan',compact('homeLoan'));
    }
    public function home_loan_PersonalLoanDelete($id){
        Loan_Services_Multiple_Com::where('id',$id)->delete();
        return redirect()->back();
    }

    public function home_loan_startUpLoan(){
        $homeLoan = Loan_Services_Multiple_Com::where('loan_type','startup_loan')->get();
        return view('admin.service.startUpLoan',compact('homeLoan'));
    }
    public function home_loan_startUpLoanDelete($id){
        Loan_Services_Multiple_Com::where('id',$id)->delete();
        return redirect()->back();
    }
}
