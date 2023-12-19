<?php

namespace App\Http\Controllers\web;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use App\Models\gst_reg_proprietorship;
use App\CPU\ImageManager;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\gst_reg_multiple_com;
use App\Models\Gst_Reg_Ngo;
use App\Models\Itr_Salaried_Persons;
use App\Models\Itr_SelfPersons_professional;
use App\Models\Balance_Sheet_3;
use App\Models\Balancesheet_Proprietorship;
use App\Models\Gst_Ret_Filling;
use App\Models\Com_Reg_Ngo;
use App\Models\Com_Reg_Trademark;
use App\Models\Com_Reg_Multiple_Com;
use App\Models\Com_Reg_Msme;
use App\Models\Com_Reg_Fssai;
use App\Models\Com_Reg_Pvt_Nidhi_Com;
use App\Models\Com_Reg_Digital_Signature;
use App\Models\Home_Loan_Salaried;
use App\Models\Home_Loan_Business_Man;
use App\Models\Home_Loan_Salaried_Bt;
use App\Models\Home_Loan_Business_Man_Bt;
use App\Models\Loan_Services_Multiple_Com;
use App\Models\Lap_Salary_Person;
use App\Models\Lap_Business_Man;
use App\Models\Cc_Salary_Person;
use App\Models\Cc_Business_Man;
use Illuminate\Support\Facades\DB;
use App\Models\Personal_Loan;
use App\Models\Business_Loan;
use App\Models\Startup_Loan;
use App\Models\Associated_Reg;
use Illuminate\Support\Facades\Hash;

class WebController extends Controller
{
    public function index(){
        return view('frontend.index');
    }
    public function about(){
        return view('frontend.about');
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function checkout(){
        return view('frontend.checkout');
    }
    public function confirm_order($reference_no,$table){
        //dd($table);
        // $str = str_replace("2", '', $table);
        //     dd($str);
        $data = DB::table($table)->where('reference_no',$reference_no)->first();
       // dd($data);
        return view('frontend.orderConfirm',compact('data'));
    }

    public function associatedRegister(){
        return view('frontend.associate.register');
    }
    public function associatedPost(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:associated__regs,email',
            'mobile' => 'required',
            'pan_card' => 'required',
            'aadhar_card' => 'required',
            'photo' => 'required',
            // 'userid' => 'required|unique:associated__regs,userid',
            'password' => 'min:6',
            'cpass' => 'required_with:password|same:password|min:6',
            'address' => 'required',
            'pay_screenshot' => 'required',
        ]);

        if($validator->fails()){
            // dd($validator);
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = Associated_Reg::all()->last()->id ?? 0;
        $associated = new Associated_Reg();
        $associated->name = $request->name;
        $associated->mobile = $request->mobile;
        $associated->email = $request->email;
        $associated->pan_card = ImageManager::upload('associated/', 'png', $request->file('pan_card'));
        $associated->aadhar_card = ImageManager::upload('associated/', 'png', $request->file('aadhar_card'));
        $associated->photo =  ImageManager::upload('associated/', 'png', $request->file('photo'));
        // $associated->userid = $request->userid;
        $associated->password = Hash::make($request->password);
        $associated->address = $request->address;
        $associated->associate_id = 'ABR11'.$id + 1;
        $associated->pay_screenshot = ImageManager::upload('associated/', 'png', $request->file('pay_screenshot'));
        $associated->save();
        return redirect()->back()->with('success','form submit successfully');
    }

    public function associateLogin(){
        return view('frontend.associate.login');
    }
    public function associateSubmit(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:8'
        ]);
       // dd(Auth('associated')->user());

        $user = Associated_Reg::where(['email' => $request->email])->orWhere(['mobile' => $request->email])->first();
       // dd($user);
        if (isset($user) == false) {
            // Toastr::error('Credentials do not match or account has been suspended.');
            return back()->with('error','Credentials do not match or account has been suspended.');
        }
        else{
            // dd($request->all(),$user->email);
        //   $data =  auth::guard('associated')->attempt($request->only(['email','password']), $request->get('remember'));
          $data =  auth('associated')->attempt(['email' => $user->email, 'password' =>  $request->password]);
            //dd(Auth('associated')->user());
            if($data){
                return redirect()->route('index')->with('success','Login successfully!');
            }
            return redirect()->back()->with('error','Credentials do not match or account has been suspended.');

        }
        // if (auth::guard('associated__regs')->attempt(['email' => $user->email, 'pass' =>  $request->password])) {

        //     return redirect()->route('admin.dashboards')->with('success','Login successfully!');
        // }
        // dd($user,auth('associated__regs')->user());
        // Toastr::error('Credentials do not match or account has been suspended.');
        return back()->with('error','Credentials do not match or account has been suspended.');
    }

    public function logout(Request $request)
    {
        auth()->guard('associated')->logout();
        // session()->forget('wish_list');
        //Toastr::info('Come back soon, ' . '!');
        return redirect()->route('index')->with('success','Come back soon, ' . '!');
    }

    // public function associateSubmit(Request $request){
    //     $validator = Validator::make($request->all(),[
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ]);

    //     if($validator->passes()){
    //         $email = $request->email;
    //         $password = $request->password;
    //         $credentials = array("email"=>$email,"password"=>$password);
    //         $authSuccess = Auth::attempt($credentials);

    //         if($authSuccess){
    //             // if(Auth::Associated_Reg()->pass==$password){
    //             //     dd($authSuccess);
    //                 return redirect()->route('admin.dashboard');
    //             // }else{
    //             //     return redirect()->back();
    //             // }
    //         }else{
    //             // Session::flash('flash_message',"Invalid Username or password");
    //             return redirect()->back();
    //         }
    //     }else{
    //         // Session::flash('flash_message',"Invalid Username or password");
    //         return redirect()->back();
    //     }
    // }

    public function cart(){
        return view('frontend.cart');
    }
    public function gst_reg_proprietorship(){
        // pro = gst_reg_proprietorship::where('reference_no','')->first();
        return view('frontend.service_form.gst_reg_proprietorship');
    }
    public function gst_reg_proprietorshipPost(Request $request){
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'pan_card' => 'required',
            'aadhar_card' => 'required',
            'photo' => 'required',
            'baf' => 'nullable',   //business address proff
            'bank_details' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = gst_reg_proprietorship::all()->last()->id ?? 1;
        if($id == null){
            $id = 1;
        }
        $proprietorship = new gst_reg_proprietorship();

        $proprietorship->associate_id = Auth('associated')->user()->id ?? 'admin';
        $proprietorship->name = $request->name;
        $proprietorship->mobile = $request->mobile;
        $proprietorship->email = $request->email;
        $proprietorship->pan_card = ImageManager::upload('gstAndIncomeTax/', 'png', $request->file('pan_card'));;
        $proprietorship->aadhar_card = ImageManager::upload('gstAndIncomeTax/', 'png', $request->file('aadhar_card'));
        $proprietorship->photo =  ImageManager::upload('gstAndIncomeTax/', 'png', $request->file('photo'));
        $proprietorship->baf = ImageManager::upload('gstAndIncomeTax/', 'png', $request->file('baf'));;
        $proprietorship->bank_details = ImageManager::upload('gstAndIncomeTax/', 'png', $request->file('bank_details'));
        $proprietorship->reference_no = 'ABR'.rand(1111,9999).$id;
        $proprietorship->payment_type = $request->payment_type;
        $proprietorship->pay_screenshot = ImageManager::upload('gstAndIncomeTax/', 'png', $request->file('pay_screenshot'));
        $proprietorship->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$proprietorship->reference_no,'gst_reg_proprietorship'])->with('success','form submit successfully');
    }


    public function partnershipCom(){
        return view('frontend.service_form.partnershipCompany');
    }
    public function gst_reg_partnershipComPost(Request $request){
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            // dd($validator);
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = gst_reg_multiple_com::all()->last()->id ?? 1;

        $partnership = new gst_reg_multiple_com();

        $partnership->associate_id = Auth('associated')->user()->id ?? 'admin';
        $partnership->company_gst_reg = $request->partnership_com;
        $partnership->name = $request->name;
        $partnership->mobile = $request->mobile;
        $partnership->email = $request->email;
        $partnership->com_pan_card = ImageManager::upload('gstAndIncomeTax/partnership_com/', 'png', $request->file('com_pan_card'));;
        $partnership->com_incorCompany = ImageManager::upload('gstAndIncomeTax/partnership_com/', 'png', $request->file('com_incorCompany'));
        $partnership->company_moa =  ImageManager::upload('gstAndIncomeTax/partnership_com/', 'png', $request->file('company_moa'));
        $partnership->director_pan_card = ImageManager::upload('gstAndIncomeTax/partnership_com/', 'png', $request->file('director_pan_card')); //business address proff
        $partnership->director_aadhar_card = ImageManager::upload('gstAndIncomeTax/partnership_com/', 'png', $request->file('director_aadhar_card'));
        $partnership->director_photo = ImageManager::upload('gstAndIncomeTax/partnership_com/', 'png', $request->file('director_photo'));
        $partnership->autho_pan_card = ImageManager::upload('gstAndIncomeTax/partnership_com/', 'png', $request->file('autho_pan_card'));
        $partnership->autho_aadhar_card = ImageManager::upload('gstAndIncomeTax/partnership_com/', 'png', $request->file('autho_aadhar_card'));
        $partnership->autho_photo = ImageManager::upload('gstAndIncomeTax/partnership_com/', 'png', $request->file('autho_photo'));
        $partnership->auto_bap = ImageManager::upload('gstAndIncomeTax/partnership_com/', 'png', $request->file('auto_bap')); //BUSINESS ADDRESS PROFF(BAP)
        $partnership->auto_letter = ImageManager::upload('gstAndIncomeTax/partnership_com/', 'png', $request->file('auto_letter'));

        $partnership->reference_no = 'ABR'.rand(1111,9999).$id;
        $partnership->payment_type = $request->payment_type;
        $partnership->pay_screenshot = ImageManager::upload('gstAndIncomeTax/partnership_com/', 'png', $request->file('pay_screenshot'));
        $partnership->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$partnership->reference_no,'gst_reg_multiple_coms'])->with('success','form submit successfully');
    }

    public function gst_reg_pvtltdCom(){
        return view('frontend.service_form.gst_reg_pvt_ltd_com');
    }
    public function gst_reg_pvtltdComPost(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            // dd($validator);
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = gst_reg_multiple_com::all()->last()->id ?? 1;
        $partnership = new gst_reg_multiple_com();

        $partnership->associate_id = Auth('associated')->user()->id ?? 'admin';
        $partnership->company_gst_reg = $request->pvt_ltd_com;
        $partnership->name = $request->name;
        $partnership->mobile = $request->mobile;
        $partnership->email = $request->email;
        $partnership->com_pan_card = ImageManager::upload('gstAndIncomeTax/gst_reg_pvt_ltd_com/', 'png', $request->file('com_pan_card'));;
        $partnership->com_incorCompany = ImageManager::upload('gstAndIncomeTax/gst_reg_pvt_ltd_com/', 'png', $request->file('com_incorCompany'));
        $partnership->company_moa =  ImageManager::upload('gstAndIncomeTax/gst_reg_pvt_ltd_com/', 'png', $request->file('company_moa'));
        $partnership->director_pan_card = ImageManager::upload('gstAndIncomeTax/gst_reg_pvt_ltd_com/', 'png', $request->file('director_pan_card')); //business address proff
        $partnership->director_aadhar_card = ImageManager::upload('gstAndIncomeTax/gst_reg_pvt_ltd_com/', 'png', $request->file('director_aadhar_card'));
        $partnership->director_photo = ImageManager::upload('gstAndIncomeTax/gst_reg_pvt_ltd_com/', 'png', $request->file('director_photo'));
        $partnership->autho_pan_card = ImageManager::upload('gstAndIncomeTax/gst_reg_pvt_ltd_com/', 'png', $request->file('autho_pan_card'));
        $partnership->autho_aadhar_card = ImageManager::upload('gstAndIncomeTax/gst_reg_pvt_ltd_com/', 'png', $request->file('autho_aadhar_card'));
        $partnership->autho_photo = ImageManager::upload('gstAndIncomeTax/gst_reg_pvt_ltd_com/', 'png', $request->file('autho_photo'));
        $partnership->auto_bap = ImageManager::upload('gstAndIncomeTax/gst_reg_pvt_ltd_com/', 'png', $request->file('auto_bap')); //BUSINESS ADDRESS PROFF(BAP)
        $partnership->auto_letter = ImageManager::upload('gstAndIncomeTax/gst_reg_pvt_ltd_com/', 'png', $request->file('auto_letter'));

        $partnership->reference_no = 'ABR'.rand(1111,9999).$id;
        $partnership->payment_type = $request->payment_type;
        $partnership->pay_screenshot = ImageManager::upload('gstAndIncomeTax/gst_reg_pvt_ltd_com/', 'png', $request->file('pay_screenshot'));

        $partnership->save();
        // Toastr()->success('form submit successfully!');

         return redirect()->route('confirm_order',[$partnership->reference_no,'gst_reg_multiple_coms'])->with('success','form submit successfully');
    }

    public function gst_reg_limitedCompany(){
        return view('frontend.service_form.gst_reg_limitedCompany');
    }
    public function gst_reg_limitedCompanyPost(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            // dd($validator);
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = gst_reg_multiple_com::all()->last()->id ?? 1;
        $ltdCom = new gst_reg_multiple_com();
        $ltdCom->associate_id = Auth('associated')->user()->id ?? 'admin';
        $ltdCom->company_gst_reg = $request->ltd_com;
        $ltdCom->name = $request->name;
        $ltdCom->mobile = $request->mobile;
        $ltdCom->email = $request->email;
        $ltdCom->com_pan_card = ImageManager::upload('gstAndIncomeTax/gst_reg_ltd_com/', 'png', $request->file('com_pan_card'));;
        $ltdCom->com_incorCompany = ImageManager::upload('gstAndIncomeTax/gst_reg_ltd_com/', 'png', $request->file('com_incorCompany'));
        $ltdCom->company_moa =  ImageManager::upload('gstAndIncomeTax/gst_reg_ltd_com/', 'png', $request->file('company_moa'));
        $ltdCom->director_pan_card = ImageManager::upload('gstAndIncomeTax/gst_reg_ltd_com/', 'png', $request->file('director_pan_card')); //business address proff
        $ltdCom->director_aadhar_card = ImageManager::upload('gstAndIncomeTax/gst_reg_ltd_com/', 'png', $request->file('director_aadhar_card'));
        $ltdCom->director_photo = ImageManager::upload('gstAndIncomeTax/gst_reg_ltd_com/', 'png', $request->file('director_photo'));
        $ltdCom->autho_pan_card = ImageManager::upload('gstAndIncomeTax/gst_reg_ltd_com/', 'png', $request->file('autho_pan_card'));
        $ltdCom->autho_aadhar_card = ImageManager::upload('gstAndIncomeTax/gst_reg_ltd_com/', 'png', $request->file('autho_aadhar_card'));
        $ltdCom->autho_photo = ImageManager::upload('gstAndIncomeTax/gst_reg_ltd_com/', 'png', $request->file('autho_photo'));
        $ltdCom->auto_bap = ImageManager::upload('gstAndIncomeTax/gst_reg_ltd_com/', 'png', $request->file('auto_bap')); //BUSINESS ADDRESS PROFF(BAP)
        $ltdCom->auto_letter = ImageManager::upload('gstAndIncomeTax/gst_reg_ltd_com/', 'png', $request->file('auto_letter'));

        $ltdCom->reference_no = 'ABR'.rand(1111,9999).$id;
        $ltdCom->payment_type = $request->payment_type;
        $ltdCom->pay_screenshot = ImageManager::upload('gstAndIncomeTax/gst_reg_ltd_com/', 'png', $request->file('pay_screenshot'));

        $ltdCom->save();
        // Toastr()->success('form submit successfully!');

         return redirect()->route('confirm_order',[$ltdCom->reference_no,'gst_reg_multiple_coms'])->with('success','form submit successfully');
    }

    public function gst_reg_nidhiCompany(){
        return view('frontend.service_form.gst_reg_nidhiCompany');
    }
    public function gst_reg_nidhiCompanyPost(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            // dd($validator);
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $id = gst_reg_multiple_com::all()->last()->id ?? 1;

        $nidhi = new gst_reg_multiple_com();
        $nidhi->associate_id = Auth('associated')->user()->id ?? 'admin';
        $nidhi->company_gst_reg = $request->nidhi_com;
        $nidhi->name = $request->name;
        $nidhi->mobile = $request->mobile;
        $nidhi->email = $request->email;
        $nidhi->com_pan_card = ImageManager::upload('gstAndIncomeTax/gst_reg_nidhi_com/', 'png', $request->file('com_pan_card'));;
        $nidhi->com_incorCompany = ImageManager::upload('gstAndIncomeTax/gst_reg_nidhi_com/', 'png', $request->file('com_incorCompany'));
        $nidhi->company_moa =  ImageManager::upload('gstAndIncomeTax/gst_reg_nidhi_com/', 'png', $request->file('company_moa'));
        $nidhi->director_pan_card = ImageManager::upload('gstAndIncomeTax/gst_reg_nidhi_com/', 'png', $request->file('director_pan_card')); //business address proff
        $nidhi->director_aadhar_card = ImageManager::upload('gstAndIncomeTax/gst_reg_nidhi_com/', 'png', $request->file('director_aadhar_card'));
        $nidhi->director_photo = ImageManager::upload('gstAndIncomeTax/gst_reg_nidhi_com/', 'png', $request->file('director_photo'));
        $nidhi->autho_pan_card = ImageManager::upload('gstAndIncomeTax/gst_reg_nidhi_com/', 'png', $request->file('autho_pan_card'));
        $nidhi->autho_aadhar_card = ImageManager::upload('gstAndIncomeTax/gst_reg_nidhi_com/', 'png', $request->file('autho_aadhar_card'));
        $nidhi->autho_photo = ImageManager::upload('gstAndIncomeTax/gst_reg_nidhi_com/', 'png', $request->file('autho_photo'));
        $nidhi->auto_bap = ImageManager::upload('gstAndIncomeTax/gst_reg_nidhi_com/', 'png', $request->file('auto_bap')); //BUSINESS ADDRESS PROFF(BAP)
        $nidhi->auto_letter = ImageManager::upload('gstAndIncomeTax/gst_reg_nidhi_com/', 'png', $request->file('auto_letter'));
        $nidhi->reference_no = 'ABR'.rand(1111,9999).$id;
        $nidhi->payment_type = $request->payment_type;
        $nidhi->pay_screenshot = ImageManager::upload('gstAndIncomeTax/gst_reg_nidhi_com/', 'png', $request->file('pay_screenshot'));

        $nidhi->save();
        // Toastr()->success('form submit successfully!');

         return redirect()->route('confirm_order',[$nidhi->reference_no,'gst_reg_multiple_coms'])->with('success','form submit successfully');
    }

    public function gst_reg_ngo(){
        return view('frontend.service_form.gst_reg_ngo');
    }
    public function gst_reg_ngoPost(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            // dd($validator);
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $id = gst_reg_multiple_com::all()->last()->id ?? 1;
        $ngo = new Gst_Reg_Ngo();

        $ngo->associate_id = Auth('associated')->user()->id ?? 'admin';
        $ngo->name = $request->name;
        $ngo->mobile = $request->mobile;
        $ngo->email = $request->email;
        $ngo->ngo_pan_card = ImageManager::upload('gstAndIncomeTax/gst_reg_ngo/', 'png', $request->file('ngo_pan_card'));;
        $ngo->certificate = ImageManager::upload('gstAndIncomeTax/gst_reg_ngo/', 'png', $request->file('certificate'));
        $ngo->moa =  ImageManager::upload('gstAndIncomeTax/gst_reg_ngo/', 'png', $request->file('moa'));
        $ngo->autho_pan_card = ImageManager::upload('gstAndIncomeTax/gst_reg_ngo/', 'png', $request->file('autho_pan_card'));
        $ngo->autho_aadhar_card = ImageManager::upload('gstAndIncomeTax/gst_reg_ngo/', 'png', $request->file('autho_aadhar_card'));
        $ngo->autho_photo = ImageManager::upload('gstAndIncomeTax/gst_reg_ngo/', 'png', $request->file('autho_photo'));
        $ngo->autho_letter = ImageManager::upload('gstAndIncomeTax/gst_reg_ngo/', 'png', $request->file('autho_letter'));
        $ngo->autho_bap = ImageManager::upload('gstAndIncomeTax/gst_reg_ngo/', 'png', $request->file('autho_bap')); //BUSINESS ADDRESS PROFF(BAP)
        $ngo->reference_no = 'ABR'.rand(1111,9999).$id;
        $ngo->payment_type = $request->payment_type;
        $ngo->pay_screenshot = ImageManager::upload('gstAndIncomeTax/gst_reg_ngo/', 'png', $request->file('pay_screenshot'));
        $ngo->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$ngo->reference_no,'gst__reg__ngos'])->with('success','form submit successfully');
    }


    public function itr_salariedPersons(){
        return view('frontend.service_form.itr_salariedParsons');
    }
    public function itr_salariedPersonsPost(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pan_card' => 'required',
            'aadhar_card' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = Itr_Salaried_Persons::all()->last()->id ?? 1;
        $salariedPerson = new Itr_Salaried_Persons();

        $salariedPerson->associate_id = Auth('associated')->user()->id ?? 'admin';
        $salariedPerson->name = $request->name;
        $salariedPerson->mobile = $request->mobile;
        $salariedPerson->email = $request->email;
        $salariedPerson->pan_card = ImageManager::upload('gstAndIncomeTax/itr_salariedParsons/', 'png', $request->file('pan_card'));
        $salariedPerson->aadhar_card = ImageManager::upload('gstAndIncomeTax/itr_salariedParsons/', 'png', $request->file('aadhar_card'));
        $salariedPerson->bank_statement =  ImageManager::upload('gstAndIncomeTax/itr_salariedParsons/', 'png', $request->file('bank_statement'));
        $salariedPerson->form16 = ImageManager::upload('gstAndIncomeTax/itr_salariedParsons/', 'png', $request->file('form16'));
        $salariedPerson->investmentProof = ImageManager::upload('gstAndIncomeTax/itr_salariedParsons/', 'png', $request->file('investmentProof'));
        $salariedPerson->salaryCertificate = ImageManager::upload('gstAndIncomeTax/itr_salariedParsons/', 'png', $request->file('salaryCertificate'));
        $salariedPerson->reference_no = 'ABR'.rand(1111,9999).$id;
        $salariedPerson->payment_type = $request->payment_type;
        $salariedPerson->pay_screenshot = ImageManager::upload('gstAndIncomeTax/itr_salariedParsons/', 'png', $request->file('pay_screenshot'));
        $salariedPerson->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$salariedPerson->reference_no,'itr__salaried__persons'])->with('success','form submit successfully');
    }

    public function itr_selfEmployed(){
        return view('frontend.service_form.self-employed-persons');
    }
    public function itr_selfEmployedPost(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pan_card' => 'required',
            'aadhar_card' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = Itr_SelfPersons_professional::all()->last()->id ?? 1;
        $selfEmployed = new Itr_SelfPersons_professional();

        $selfEmployed->associate_id = Auth('associated')->user()->id ?? 'admin';
        $selfEmployed->itr = $request->itr;
        $selfEmployed->name = $request->name;
        $selfEmployed->mobile = $request->mobile;
        $selfEmployed->email = $request->email;
        $selfEmployed->pan_card = ImageManager::upload('gstAndIncomeTax/itr_selfEmployed/', 'png', $request->file('pan_card'));
        $selfEmployed->aadhar_card = ImageManager::upload('gstAndIncomeTax/itr_selfEmployed/', 'png', $request->file('aadhar_card'));
        $selfEmployed->brp =  ImageManager::upload('gstAndIncomeTax/itr_selfEmployed/', 'png', $request->file('brp'));
        $selfEmployed->aybs = ImageManager::upload('gstAndIncomeTax/itr_selfEmployed/', 'png', $request->file('aybs'));
        $selfEmployed->ayr = ImageManager::upload('gstAndIncomeTax/itr_selfEmployed/', 'png', $request->file('ayr'));
        $selfEmployed->aybto = ImageManager::upload('gstAndIncomeTax/itr_selfEmployed/', 'png', $request->file('aybto'));
        $selfEmployed->investment_proof = ImageManager::upload('gstAndIncomeTax/itr_selfEmployed/', 'png', $request->file('investment_proof'));
        $selfEmployed->reference_no = 'ABR'.rand(1111,9999).$id;
        $selfEmployed->payment_type = $request->payment_type;
        $selfEmployed->pay_screenshot = ImageManager::upload('gstAndIncomeTax/itr_selfEmployed/', 'png', $request->file('pay_screenshot'));
        $selfEmployed->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$selfEmployed->reference_no,'itr__selfpersons_professionals'])->with('success','form submit successfully');
    }

    public function professionals(){
        return view('frontend.service_form.itr_professionals');
    }
    public function itr_professionalsPost(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pan_card' => 'required',
            'aadhar_card' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = Itr_SelfPersons_professional::all()->last()->id ?? 1;
        $professionals = new Itr_SelfPersons_professional();

        $professionals->associate_id = Auth('associated')->user()->id ?? 'admin';
        $professionals->itr = $request->itr;
        $professionals->name = $request->name;
        $professionals->mobile = $request->mobile;
        $professionals->email = $request->email;
        $professionals->pan_card = ImageManager::upload('gstAndIncomeTax/itr_professional/', 'png', $request->file('pan_card'));
        $professionals->aadhar_card = ImageManager::upload('gstAndIncomeTax/itr_professional/', 'png', $request->file('aadhar_card'));
        $professionals->brp =  ImageManager::upload('gstAndIncomeTax/itr_professional/', 'png', $request->file('prp'));
        $professionals->aybs = ImageManager::upload('gstAndIncomeTax/itr_professional/', 'png', $request->file('aybs'));
        $professionals->ayr = ImageManager::upload('gstAndIncomeTax/itr_professional/', 'png', $request->file('ayr'));
        $professionals->aybto = ImageManager::upload('gstAndIncomeTax/itr_professional/', 'png', $request->file('aybto'));
        $professionals->investment_proof = ImageManager::upload('gstAndIncomeTax/itr_professional/', 'png', $request->file('investment_proof'));
        $professionals->reference_no = 'ABR'.rand(1111,9999).$id;
        $professionals->payment_type = $request->payment_type;
        $professionals->pay_screenshot = ImageManager::upload('gstAndIncomeTax/itr_professional/', 'png', $request->file('pay_screenshot'));
        $professionals->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$professionals->reference_no,'itr__selfpersons_professionals'])->with('success','form submit successfully');
    }

    public function balancesheet(){
        return view('frontend.service_form.3balancesheet');
    }
    public function balancesheet_3Post(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pan_card' => 'required',
            'aadhar_card' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
         $id = Itr_SelfPersons_professional::all()->last()->id ?? 1;
        $balancesheet3 = new Balance_Sheet_3();

        $balancesheet3->associate_id = Auth('associated')->user()->id ?? 'admin';
        $balancesheet3->name = $request->name;
        $balancesheet3->mobile = $request->mobile;
        $balancesheet3->email = $request->email;
        $balancesheet3->pan_card = ImageManager::upload('gstAndIncomeTax/3balancesheet/', 'png', $request->file('pan_card'));
        $balancesheet3->aadhar_card = ImageManager::upload('gstAndIncomeTax/3balancesheet/', 'png', $request->file('aadhar_card'));
        $balancesheet3->brp =  ImageManager::upload('gstAndIncomeTax/3balancesheet/', 'png', $request->file('prp'));
        $balancesheet3->aybs = ImageManager::upload('gstAndIncomeTax/3balancesheet/', 'png', $request->file('aybs'));
        $balancesheet3->ayr = ImageManager::upload('gstAndIncomeTax/3balancesheet/', 'png', $request->file('ayr'));
        $balancesheet3->aybto = ImageManager::upload('gstAndIncomeTax/3balancesheet/', 'png', $request->file('aybto'));
        $balancesheet3->yearitr3 = ImageManager::upload('gstAndIncomeTax/3balancesheet/', 'png', $request->file('yearitr3'));
        $balancesheet3->reference_no = 'ABR'.rand(1111,9999).$id;
        $balancesheet3->payment_type = $request->payment_type;
        $balancesheet3->pay_screenshot = ImageManager::upload('gstAndIncomeTax/3balancesheet/', 'png', $request->file('pay_screenshot'));
        $balancesheet3->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$balancesheet3->reference_no,'balance__sheet_3s'])->with('success','form submit successfully');

    }

    public function balancesheet_proprietorship(){
        return view('frontend.service_form.balancesheet-proprietorship');
    }
    public function balancesheet_proprietorshipPost(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
         $id = Itr_SelfPersons_professional::all()->last()->id ?? 1;
        $balancesheet = new Balancesheet_Proprietorship();

        $balancesheet->associate_id = Auth('associated')->user()->id ?? 'admin';
        $balancesheet->name = $request->name;
        $balancesheet->mobile = $request->mobile;
        $balancesheet->email = $request->email;
        $balancesheet->qtr_return = ImageManager::upload('gstAndIncomeTax/balancesheetPropri/', 'png', $request->file('qtr_return'));
        $balancesheet->annual_return = ImageManager::upload('gstAndIncomeTax/balancesheetPropri/', 'png', $request->file('annual_return'));
        $balancesheet->reference_no = 'ABR'.rand(1111,9999).$id;
        $balancesheet->payment_type = $request->payment_type;
        $balancesheet->pay_screenshot = ImageManager::upload('gstAndIncomeTax/3balancesheet/', 'png', $request->file('pay_screenshot'));
        $balancesheet->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$balancesheet->reference_no,'balancesheet__proprietorships'])->with('success','form submit successfully');
    }
    public function gst_proprietorship1(){
        return view('frontend.service_form.gst_proprietorship1');
    }
    public function gst_proprietorship1Post(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = Gst_Ret_Filling::all()->last()->id ?? 1;
        $proprietorship = new Gst_Ret_Filling();

        $proprietorship->associate_id = Auth('associated')->user()->id ?? 'admin';
        $proprietorship->reg_type = $request->reg_type;
        $proprietorship->name = $request->name;
        $proprietorship->mobile = $request->mobile;
        $proprietorship->email = $request->email;
        $proprietorship->gstr_3b = ImageManager::upload('gstAndIncomeTax/propri_up1.5cr/', 'png', $request->file('gstr_3b'));
        $proprietorship->gstr_r1 = ImageManager::upload('gstAndIncomeTax/propri_up1.5cr/', 'png', $request->file('gstr_r1'));
        $proprietorship->gst9 = ImageManager::upload('gstAndIncomeTax/propri_up1.5cr/', 'png', $request->file('gst9'));
        $proprietorship->gst_reconciliation = ImageManager::upload('gstAndIncomeTax/propri_up1.5cr/', 'png', $request->file('gst_reconciliation'));
        $proprietorship->reference_no = 'ABR'.rand(1111,9999).$id;
        $proprietorship->payment_type = $request->payment_type;
        $proprietorship->pay_screenshot = ImageManager::upload('gstAndIncomeTax/3balancesheet/', 'png', $request->file('pay_screenshot'));
        $proprietorship->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$proprietorship->reference_no,'gst__ret__fillings'])->with('success','form submit successfully');
    }

    public function gst_proprietorship2(){
        return view('frontend.service_form.gst_proprietorship2');
    }
    public function gst_proprietorship2Post(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
         $id = Gst_Ret_Filling::all()->last()->id ?? 1;
        $proprietorship = new Gst_Ret_Filling();

        $proprietorship->associate_id = Auth('associated')->user()->id ?? 'admin';
        $proprietorship->reg_type = $request->reg_type;
        $proprietorship->name = $request->name;
        $proprietorship->mobile = $request->mobile;
        $proprietorship->email = $request->email;
        $proprietorship->gstr_3b = ImageManager::upload('gstAndIncomeTax/propri_1.5to5/', 'png', $request->file('gstr_3b'));
        $proprietorship->gstr_r1 = ImageManager::upload('gstAndIncomeTax/propri_1.5to5/', 'png', $request->file('gstr_r1'));
        $proprietorship->gst9 = ImageManager::upload('gstAndIncomeTax/propri_1.5to5/', 'png', $request->file('gst9'));
        $proprietorship->gst_reconciliation = ImageManager::upload('gstAndIncomeTax/propri_1.5to5/', 'png', $request->file('gst_reconciliation'));
        $proprietorship->reference_no = 'ABR'.rand(1111,9999).$id;
        $proprietorship->payment_type = $request->payment_type;
        $proprietorship->pay_screenshot = ImageManager::upload('gstAndIncomeTax/3balancesheet/', 'png', $request->file('pay_screenshot'));
        $proprietorship->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$proprietorship->reference_no,'gst__ret__fillings'])->with('success','form submit successfully');

    }

    public function gst_proprietorship3(){
        return view('frontend.service_form.gst_proprietorship3');
    }
    public function gst_proprietorship3Post(Request $request){
         $validator = Validator::make($request->all(),[
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
         $id = Gst_Ret_Filling::all()->last()->id ?? 1;
        $proprietorship = new Gst_Ret_Filling();

        $proprietorship->associate_id = Auth('associated')->user()->id ?? 'admin';
        $proprietorship->reg_type = $request->reg_type;
        $proprietorship->name = $request->name;
        $proprietorship->mobile = $request->mobile;
        $proprietorship->email = $request->email;
        $proprietorship->gstr_3b = ImageManager::upload('gstAndIncomeTax/propri_5toAbove/', 'png', $request->file('gstr_3b'));
        $proprietorship->gstr_r1 = ImageManager::upload('gstAndIncomeTax/propri_5toAbove/', 'png', $request->file('gstr_r1'));
        $proprietorship->gst9 = ImageManager::upload('gstAndIncomeTax/propri_5toAbove/', 'png', $request->file('gst9'));
        $proprietorship->gst_reconciliation = ImageManager::upload('gstAndIncomeTax/propri_5toAbove/', 'png', $request->file('gst_reconciliation'));
        $proprietorship->reference_no = 'ABR'.rand(1111,9999).$id;
        $proprietorship->payment_type = $request->payment_type;
        $proprietorship->pay_screenshot = ImageManager::upload('gstAndIncomeTax/3balancesheet/', 'png', $request->file('pay_screenshot'));
        $proprietorship->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$proprietorship->reference_no,'gst__ret__fillings'])->with('success','form submit successfully');
    }

    public function pvtLtdAndOtherCompany1(){
        return view('frontend.service_form.pvtLtdAndOtherCompany1');
    }
    public function pvtLtdAndOtherCompany1Post(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
         $id = Gst_Ret_Filling::all()->last()->id ?? 1;
        $proprietorship = new Gst_Ret_Filling();

        $proprietorship->associate_id = Auth('associated')->user()->id ?? 'admin';
        $proprietorship->reg_type = $request->reg_type;
        $proprietorship->name = $request->name;
        $proprietorship->mobile = $request->mobile;
        $proprietorship->email = $request->email;
        $proprietorship->gstr_3b = ImageManager::upload('gstAndIncomeTax/pvt_ltd_up1.5/', 'png', $request->file('gstr_3b'));
        $proprietorship->gstr_r1 = ImageManager::upload('gstAndIncomeTax/pvt_ltd_up1.5/', 'png', $request->file('gstr_r1'));
        $proprietorship->gst9 = ImageManager::upload('gstAndIncomeTax/pvt_ltd_up1.5/', 'png', $request->file('gst9'));
        $proprietorship->gst_reconciliation = ImageManager::upload('gstAndIncomeTax/pvt_ltd_up1.5/', 'png', $request->file('gst_reconciliation'));
        $proprietorship->reference_no = 'ABR'.rand(1111,9999).$id;
        $proprietorship->payment_type = $request->payment_type;
        $proprietorship->pay_screenshot = ImageManager::upload('gstAndIncomeTax/3balancesheet/', 'png', $request->file('pay_screenshot'));
        $proprietorship->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$proprietorship->reference_no,'gst__ret__fillings'])->with('success','form submit successfully');
    }

    public function pvtLtdAndOtherCompany2(){
        return view('frontend.service_form.pvtLtdAndOtherCompany2');
    }

    public function pvtLtdAndOtherCompany2Post(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = Gst_Ret_Filling::all()->last()->id ?? 1;
        $proprietorship = new Gst_Ret_Filling();

        $proprietorship->associate_id = Auth('associated')->user()->id ?? 'admin';
        $proprietorship->reg_type = $request->reg_type;
        $proprietorship->name = $request->name;
        $proprietorship->mobile = $request->mobile;
        $proprietorship->email = $request->email;
        $proprietorship->gstr_3b = ImageManager::upload('gstAndIncomeTax/pvt_ltd_above_1.5/', 'png', $request->file('gstr_3b'));
        $proprietorship->gstr_r1 = ImageManager::upload('gstAndIncomeTax/pvt_ltd_above_1.5/', 'png', $request->file('gstr_r1'));
        $proprietorship->gst9 = ImageManager::upload('gstAndIncomeTax/pvt_ltd_above_1.5/', 'png', $request->file('gst9'));
        $proprietorship->gst_reconciliation = ImageManager::upload('gstAndIncomeTax/pvt_ltd_above_1.5/', 'png', $request->file('gst_reconciliation'));
        // $proprietorship->accounting_work = ImageManager::upload('gstAndIncomeTax/pvt_ltd_above_1.5/', 'png', $request->file('accounting_work'));
        // $proprietorship->roc_return = ImageManager::upload('gstAndIncomeTax/pvt_ltd_above_1.5/', 'png', $request->file('roc_return'));
        // $proprietorship->audit_report = ImageManager::upload('gstAndIncomeTax/pvt_ltd_above_1.5/', 'png', $request->file('audit_report'));
        $proprietorship->reference_no = 'ABR'.rand(1111,9999).$id;
        $proprietorship->payment_type = $request->payment_type;
        $proprietorship->pay_screenshot = ImageManager::upload('gstAndIncomeTax/3balancesheet/', 'png', $request->file('pay_screenshot'));
        $proprietorship->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$proprietorship->reference_no,'gst__ret__fillings'])->with('success','form submit successfully');
    }

    public function ngo(){
        return view('frontend.service_form.ngo');
    }
    public function com_reg_ngoPost(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = Com_Reg_Ngo::all()->last()->id ?? 1;
        $ngo = new Com_Reg_Ngo();

        $ngo->associate_id = Auth('associated')->user()->id ?? 'admin';
        $ngo->name = $request->name;
        $ngo->mobile = $request->mobile;
        $ngo->email = $request->email;
        $ngo->pan_card_ngo = ImageManager::upload('CompanyRegistration/reg_ngo/', 'png', $request->file('pan_card_ngo'));
        $ngo->certificate = ImageManager::upload('CompanyRegistration/reg_ngo/', 'png', $request->file('certificate'));
        $ngo->moa = ImageManager::upload('CompanyRegistration/reg_ngo/', 'png', $request->file('moa'));
        $ngo->kyc_pan_card = ImageManager::upload('CompanyRegistration/reg_ngo/', 'png', $request->file('kyc_pan_card'));
        $ngo->kyc_aadhar_card = ImageManager::upload('CompanyRegistration/reg_ngo/', 'png', $request->file('kyc_aadhar_card'));
        $ngo->photo = ImageManager::upload('CompanyRegistration/reg_ngo/', 'png', $request->file('photo'));
        $ngo->autho_letter = ImageManager::upload('CompanyRegistration/reg_ngo/', 'png', $request->file('autho_letter'));
         $ngo->bap = ImageManager::upload('CompanyRegistration/reg_ngo/', 'png', $request->file('bap'));
        $ngo->reference_no = 'ABR'.rand(1111,9999).$id;
        $ngo->payment_type = $request->payment_type;
        $ngo->pay_screenshot = ImageManager::upload('gstAndIncomeTax/3balancesheet/', 'png', $request->file('pay_screenshot'));
        $ngo->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$ngo->reference_no,'com__reg__ngos'])->with('success','form submit successfully');
    }

    public function tradeMarkRegistration(){
        return view('frontend.service_form.tradeMarkRegistration');
    }
    public function tradeMarkRegistrationPost(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = Com_Reg_Trademark::all()->last()->id ?? 1;
        $trademark = new Com_Reg_Trademark();

        $trademark->associate_id = Auth('associated')->user()->id ?? 'admin';
        $trademark->name = $request->name;
        $trademark->mobile = $request->mobile;
        $trademark->email = $request->email;
        $trademark->indi_pan_card = ImageManager::upload('CompanyRegistration/reg_trademark/', 'png', $request->file('indi_pan_card'));
        $trademark->indi_aadhar_card = ImageManager::upload('CompanyRegistration/reg_trademark/', 'png', $request->file('indi_aadhar_card'));
        $trademark->indi_photo = ImageManager::upload('CompanyRegistration/reg_trademark/', 'png', $request->file('indi_photo'));
        $trademark->gst_certi = ImageManager::upload('CompanyRegistration/reg_trademark/', 'png', $request->file('gst_certi'));
        $trademark->trade_mark_Name = ImageManager::upload('CompanyRegistration/reg_trademark/', 'png', $request->file('trade_mark_Name'));
        $trademark->affidavit = ImageManager::upload('CompanyRegistration/reg_trademark/', 'png', $request->file('affidavit'));
        $trademark->reference_no = 'ABR'.rand(1111,9999).$id;
        $trademark->payment_type = $request->payment_type;
        $trademark->pay_screenshot = ImageManager::upload('gstAndIncomeTax/3balancesheet/', 'png', $request->file('pay_screenshot'));
        $trademark->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$trademark->reference_no,'com__reg__trademarks'])->with('success','form submit successfully');
    }

    public function isoRegistration(){
        return view('frontend.service_form.isoRegistration');
    }
    public function isoRegistrationPost(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = Com_Reg_Multiple_Com::all()->last()->id ?? 1;
        $trademark = new Com_Reg_Multiple_Com();

        $trademark->associate_id = Auth('associated')->user()->id ?? 'admin';
        $trademark->reg_type = $request->reg_type;
        $trademark->name = $request->name;
        $trademark->mobile = $request->mobile;
        $trademark->email = $request->email;
        $trademark->reference_no = 'ABR'.rand(1111,9999).$id;
        $trademark->payment_type = $request->payment_type;
        $trademark->pay_screenshot = ImageManager::upload('gstAndIncomeTax/3balancesheet/', 'png', $request->file('pay_screenshot'));
        $trademark->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$trademark->reference_no,'com__reg__multiple__coms'])->with('success','form submit successfully');
    }

    public function msmeRegistration(){
        return view('frontend.service_form.msmeRegistration');
    }
    public function msmeRegistrationPost(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = Com_Reg_Msme::all()->last()->id ?? 1;
        $trademark = new Com_Reg_Msme();

        $trademark->associate_id = Auth('associated')->user()->id ?? 'admin';
        $trademark->name = $request->name;
        $trademark->mobile = $request->mobile;
        $trademark->email = $request->email;
        $trademark->pan_card = ImageManager::upload('CompanyRegistration/msme/', 'png', $request->file('pan_card'));
        $trademark->aadhar_card = ImageManager::upload('CompanyRegistration/msme/', 'png', $request->file('aadhar_card'));
        $trademark->bank_detail = ImageManager::upload('CompanyRegistration/msme/', 'png', $request->file('bank_detail'));
        $trademark->photo = ImageManager::upload('CompanyRegistration/msme/', 'png', $request->file('photo'));
        $trademark->bap = ImageManager::upload('CompanyRegistration/msme/', 'png', $request->file('bap'));
        $trademark->businessRegistration = ImageManager::upload('CompanyRegistration/msme/', 'png', $request->file('businessRegistration'));
        $trademark->com_pan_card = ImageManager::upload('CompanyRegistration/msme/', 'png', $request->file('com_pan_card'));
        $trademark->reference_no = 'ABR'.rand(1111,9999).$id;
        $trademark->payment_type = $request->payment_type;
        $trademark->pay_screenshot = ImageManager::upload('gstAndIncomeTax/3balancesheet/', 'png', $request->file('pay_screenshot'));
        $trademark->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$trademark->reference_no,'com__reg__msmes'])->with('success','form submit successfully');
    }

    public function fssai(){
        return view('frontend.service_form.fssai');
    }
    public function fssaiPost(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = Com_Reg_Fssai::all()->last()->id ?? 1;
        $fssai = new Com_Reg_Fssai();

        $fssai->associate_id = Auth('associated')->user()->id ?? 'admin';
        $fssai->name = $request->name;
        $fssai->mobile = $request->mobile;
        $fssai->email = $request->email;
        $fssai->pan_card = ImageManager::upload('CompanyRegistration/fssai/', 'png', $request->file('pan_card'));
        $fssai->aadhar_card = ImageManager::upload('CompanyRegistration/fssai/', 'png', $request->file('aadhar_card'));
        $fssai->photo = ImageManager::upload('CompanyRegistration/fssai/', 'png', $request->file('photo'));

        $fssai->bap = ImageManager::upload('CompanyRegistration/fssai/', 'png', $request->file('bap'));

        $fssai->bank_detail = ImageManager::upload('CompanyRegistration/fssai/', 'png', $request->file('bank_detail'));

        $fssai->reference_no = 'ABR'.rand(1111,9999).$id;
        $fssai->payment_type = $request->payment_type;
        $fssai->pay_screenshot = ImageManager::upload('gstAndIncomeTax/3balancesheet/', 'png', $request->file('pay_screenshot'));
        $fssai->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$fssai->reference_no,'com__reg__fssais'])->with('success','form submit successfully');
    }

    public function drugLicense(){
        return view('frontend.service_form.drugLicense');
    }
    public function drugLicensePost(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = Com_Reg_Multiple_Com::all()->last()->id ?? 1;
        $comReg = new Com_Reg_Multiple_Com();

        $comReg->associate_id = Auth('associated')->user()->id ?? 'admin';
        $comReg->reg_type = $request->reg_type;
        $comReg->name = $request->name;
        $comReg->mobile = $request->mobile;
        $comReg->email = $request->email;
        $comReg->reference_no = 'ABR'.rand(1111,9999).$id;
        $comReg->payment_type = $request->payment_type;
        $comReg->pay_screenshot = ImageManager::upload('gstAndIncomeTax/3balancesheet/', 'png', $request->file('pay_screenshot'));
        $comReg->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$comReg->reference_no,'com__reg__multiple__coms'])->with('success','form submit successfully');
    }

    public function ngoDarpan(){
        return view('frontend.service_form.ngoDarpan');
    }
    public function ngoDarpanPost(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = Com_Reg_Multiple_Com::all()->last()->id ?? 1;
        $comReg = new Com_Reg_Multiple_Com();

        $comReg->associate_id = Auth('associated')->user()->id ?? 'admin';
        $comReg->reg_type = $request->reg_type;
        $comReg->name = $request->name;
        $comReg->mobile = $request->mobile;
        $comReg->email = $request->email;
        $comReg->reference_no = 'ABR'.rand(1111,9999).$id;
        $comReg->payment_type = $request->payment_type;
        $comReg->pay_screenshot = ImageManager::upload('gstAndIncomeTax/3balancesheet/', 'png', $request->file('pay_screenshot'));
        $comReg->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$comReg->reference_no,'com__reg__multiple__coms'])->with('success','form submit successfully');
    }

    public function gemPortal(){
        return view('frontend.service_form.gemPortal');
    }
    public function gemPortalPost(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = Com_Reg_Multiple_Com::all()->last()->id ?? 1;
        $comReg = new Com_Reg_Multiple_Com();

        $comReg->associate_id = Auth('associated')->user()->id ?? 'admin';
        $comReg->reg_type = $request->reg_type;
        $comReg->name = $request->name;
        $comReg->mobile = $request->mobile;
        $comReg->email = $request->email;
        $comReg->reference_no = 'ABR'.rand(1111,9999).$id;
        $comReg->payment_type = $request->payment_type;
        $comReg->pay_screenshot = ImageManager::upload('gstAndIncomeTax/3balancesheet/', 'png', $request->file('pay_screenshot'));
        $comReg->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$comReg->reference_no,'com__reg__multiple__coms'])->with('success','form submit successfully');
    }

    public function startUpIndia(){
        return view('frontend.service_form.startUpIndia');
    }
    public function startUpIndiaPost(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = Com_Reg_Multiple_Com::all()->last()->id ?? 1;
        $comReg = new Com_Reg_Multiple_Com();

        $comReg->associate_id = Auth('associated')->user()->id ?? 'admin';
        $comReg->reg_type = $request->reg_type;
        $comReg->name = $request->name;
        $comReg->mobile = $request->mobile;
        $comReg->email = $request->email;
        $comReg->reference_no = 'ABR'.rand(1111,9999).$id;
        $comReg->payment_type = $request->payment_type;
        $comReg->pay_screenshot = ImageManager::upload('gstAndIncomeTax/3balancesheet/', 'png', $request->file('pay_screenshot'));
        $comReg->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$comReg->reference_no,'com__reg__multiple__coms'])->with('success','form submit successfully');
    }

    public function epf(){
        return view('frontend.service_form.epf');
    }
    public function epfPost(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = Com_Reg_Multiple_Com::all()->last()->id ?? 1;
        $comReg = new Com_Reg_Multiple_Com();

        $comReg->associate_id = Auth('associated')->user()->id ?? 'admin';
        $comReg->reg_type = $request->reg_type;
        $comReg->name = $request->name;
        $comReg->mobile = $request->mobile;
        $comReg->email = $request->email;
        $comReg->reference_no = 'ABR'.rand(1111,9999).$id;
        $comReg->payment_type = $request->payment_type;
        $comReg->pay_screenshot = ImageManager::upload('gstAndIncomeTax/3balancesheet/', 'png', $request->file('pay_screenshot'));
        $comReg->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$comReg->reference_no,'com__reg__multiple__coms'])->with('success','form submit successfully');
    }

    public function esi(){
        return view('frontend.service_form.esi');
    }
    public function esiPost(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = Com_Reg_Multiple_Com::all()->last()->id ?? 1;
        $comReg = new Com_Reg_Multiple_Com();

        $comReg->associate_id = Auth('associated')->user()->id ?? 'admin';
        $comReg->reg_type = $request->reg_type;
        $comReg->name = $request->name;
        $comReg->mobile = $request->mobile;
        $comReg->email = $request->email;
        $comReg->reference_no = 'ABR'.rand(1111,9999).$id;
        $comReg->payment_type = $request->payment_type;
        $comReg->pay_screenshot = ImageManager::upload('gstAndIncomeTax/3balancesheet/', 'png', $request->file('pay_screenshot'));
        $comReg->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$comReg->reference_no,'com__reg__multiple__coms'])->with('success','form submit successfully');
    }

    public function labourLicense(){
        return view('frontend.service_form.labourLicense');
    }
    public function labourLicensePost(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = Com_Reg_Multiple_Com::all()->last()->id ?? 1;
        $comReg = new Com_Reg_Multiple_Com();

        $comReg->associate_id = Auth('associated')->user()->id ?? 'admin';
        $comReg->reg_type = $request->reg_type;
        $comReg->name = $request->name;
        $comReg->mobile = $request->mobile;
        $comReg->email = $request->email;
        $comReg->reference_no = 'ABR'.rand(1111,9999).$id;
        $comReg->payment_type = $request->payment_type;
        $comReg->pay_screenshot = ImageManager::upload('gstAndIncomeTax/3balancesheet/', 'png', $request->file('pay_screenshot'));
        $comReg->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$comReg->reference_no,'com__reg__multiple__coms'])->with('success','form submit successfully');
    }

    public function pasaraLicense(){
        return view('frontend.service_form.pasaraLicense');
    }
    public function pasaraLicensePost(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = Com_Reg_Multiple_Com::all()->last()->id ?? 1;
        $comReg = new Com_Reg_Multiple_Com();

        $comReg->associate_id = Auth('associated')->user()->id ?? 'admin';
        $comReg->reg_type = $request->reg_type;
        $comReg->name = $request->name;
        $comReg->mobile = $request->mobile;
        $comReg->email = $request->email;
        $comReg->reference_no = 'ABR'.rand(1111,9999).$id;
        $comReg->payment_type = $request->payment_type;
        $comReg->pay_screenshot = ImageManager::upload('gstAndIncomeTax/3balancesheet/', 'png', $request->file('pay_screenshot'));
        $comReg->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$comReg->reference_no,'com__reg__multiple__coms'])->with('success','form submit successfully');
    }

    public function pollutionControl(){
        return view('frontend.service_form.pollutionControl');
    }
    public function pollutionControlPost(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = Com_Reg_Multiple_Com::all()->last()->id ?? 1;
        $comReg = new Com_Reg_Multiple_Com();

        $comReg->associate_id = Auth('associated')->user()->id ?? 'admin';
        $comReg->reg_type = $request->reg_type;
        $comReg->name = $request->name;
        $comReg->mobile = $request->mobile;
        $comReg->email = $request->email;
        $comReg->reference_no = 'ABR'.rand(1111,9999).$id;
        $comReg->payment_type = $request->payment_type;
        $comReg->pay_screenshot = ImageManager::upload('gstAndIncomeTax/3balancesheet/', 'png', $request->file('pay_screenshot'));
        $comReg->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$comReg->reference_no,'com__reg__multiple__coms'])->with('success','form submit successfully');
    }

    public function importLicense(){
        return view('frontend.service_form.importLicense');
    }
    public function importLicensePost(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = Com_Reg_Multiple_Com::all()->last()->id ?? 1;
        $comReg = new Com_Reg_Multiple_Com();

        $comReg->associate_id = Auth('associated')->user()->id ?? 'admin';
        $comReg->reg_type = $request->reg_type;
        $comReg->name = $request->name;
        $comReg->mobile = $request->mobile;
        $comReg->email = $request->email;
        $comReg->reference_no = 'ABR'.rand(1111,9999).$id;
        $comReg->payment_type = $request->payment_type;
        $comReg->pay_screenshot = ImageManager::upload('gstAndIncomeTax/3balancesheet/', 'png', $request->file('pay_screenshot'));
        $comReg->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$comReg->reference_no,'com__reg__multiple__coms'])->with('success','form submit successfully');
    }

    public function eighty(){
        return view('frontend.service_form.eighty');
    }
    public function eightyPost(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = Com_Reg_Multiple_Com::all()->last()->id ?? 1;
        $comReg = new Com_Reg_Multiple_Com();

        $comReg->associate_id = Auth('associated')->user()->id ?? 'admin';
        $comReg->reg_type = $request->reg_type;
        $comReg->name = $request->name;
        $comReg->mobile = $request->mobile;
        $comReg->email = $request->email;
        $comReg->reference_no = 'ABR'.rand(1111,9999).$id;
        $comReg->payment_type = $request->payment_type;
        $comReg->pay_screenshot = ImageManager::upload('gstAndIncomeTax/3balancesheet/', 'png', $request->file('pay_screenshot'));
        $comReg->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$comReg->reference_no,'com__reg__multiple__coms'])->with('success','form submit successfully');
    }

    public function frca(){
        return view('frontend.service_form.frca');
    }
    public function frcaPost(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = Com_Reg_Multiple_Com::all()->last()->id ?? 1;
        $comReg = new Com_Reg_Multiple_Com();

        $comReg->associate_id = Auth('associated')->user()->id ?? 'admin';
        $comReg->reg_type = $request->reg_type;
        $comReg->name = $request->name;
        $comReg->mobile = $request->mobile;
        $comReg->email = $request->email;
        $comReg->reference_no = 'ABR'.rand(1111,9999).$id;
        $comReg->payment_type = $request->payment_type;
        $comReg->pay_screenshot = ImageManager::upload('gstAndIncomeTax/3balancesheet/', 'png', $request->file('pay_screenshot'));
        $comReg->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$comReg->reference_no,'com__reg__multiple__coms'])->with('success','form submit successfully');
    }

    public function peso(){
        return view('frontend.service_form.peso');
    }
    public function pesoPost(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = Com_Reg_Multiple_Com::all()->last()->id ?? 1;
        $comReg = new Com_Reg_Multiple_Com();

        $comReg->associate_id = Auth('associated')->user()->id ?? 'admin';
        $comReg->reg_type = $request->reg_type;
        $comReg->name = $request->name;
        $comReg->mobile = $request->mobile;
        $comReg->email = $request->email;
        $comReg->reference_no = 'ABR'.rand(1111,9999).$id;
        $comReg->payment_type = $request->payment_type;
        $comReg->pay_screenshot = ImageManager::upload('gstAndIncomeTax/3balancesheet/', 'png', $request->file('pay_screenshot'));
        $comReg->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$comReg->reference_no,'com__reg__multiple__coms'])->with('success','form submit successfully');
    }


    public function companyRegisterationPvtLtd(){
        return view('frontend.service_form.companyRegisterationPvtLtd');
    }
    public function companyRegisterationPvtLtdPost(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = Com_Reg_Pvt_Nidhi_Com::all()->last()->id ?? 1;
        $comReg = new Com_Reg_Pvt_Nidhi_Com();

        $comReg->associate_id = Auth('associated')->user()->id ?? 'admin';
        $comReg->com_type = $request->com_type;
        $comReg->name = $request->name;
        $comReg->mobile = $request->mobile;
        $comReg->email = $request->email;
        $comReg->kyc_pan_card = ImageManager::upload('CompanyRegistration/pvtltd/', 'png', $request->file('kyc_pan_card'));
        $comReg->kyc_aadhar_card = ImageManager::upload('CompanyRegistration/pvtltd/', 'png', $request->file('kyc_aadhar_card'));
        $comReg->kyc_photo = ImageManager::upload('CompanyRegistration/pvtltd/', 'png', $request->file('kyc_photo'));

        $comReg->kyc_bank_statement = ImageManager::upload('CompanyRegistration/pvtltd/', 'png', $request->file('kyc_bank_statement'));

        $comReg->bap = ImageManager::upload('CompanyRegistration/pvtltd/', 'png', $request->file('bap'));

        $comReg->signature = ImageManager::upload('CompanyRegistration/pvtltd/', 'png', $request->file('signature'));

        $comReg->bank_details = ImageManager::upload('CompanyRegistration/pvtltd/', 'png', $request->file('bank_details'));

        $comReg->reference_no = 'ABR'.rand(1111,9999).$id;
        $comReg->payment_type = $request->payment_type;
        $comReg->pay_screenshot = ImageManager::upload('CompanyRegistration/pvtltd/', 'png', $request->file('pay_screenshot'));
        $comReg->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$comReg->reference_no,'com__reg__pvt__nidhi__coms'])->with('success','form submit successfully');
    }


    public function companyRegisterationNidhi(){
        return view('frontend.service_form.companyRegisterationNidhi');
    }
    public function companyRegisterationNidhiPost(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = Com_Reg_Pvt_Nidhi_Com::all()->last()->id ?? 1;
        $comReg = new Com_Reg_Pvt_Nidhi_Com();

        $comReg->associate_id = Auth('associated')->user()->id ?? 'admin';
        $comReg->com_type = $request->com_type;
        $comReg->name = $request->name;
        $comReg->mobile = $request->mobile;
        $comReg->email = $request->email;
        $comReg->kyc_pan_card = ImageManager::upload('CompanyRegistration/nidhiCom/', 'png', $request->file('kyc_pan_card'));
        $comReg->kyc_aadhar_card = ImageManager::upload('CompanyRegistration/nidhiCom/', 'png', $request->file('kyc_aadhar_card'));
        $comReg->kyc_photo = ImageManager::upload('CompanyRegistration/nidhiCom/', 'png', $request->file('kyc_photo'));

        $comReg->kyc_bank_statement = ImageManager::upload('CompanyRegistration/nidhiCom/', 'png', $request->file('kyc_bank_statement'));

        $comReg->bap = ImageManager::upload('CompanyRegistration/nidhiCom/', 'png', $request->file('bap'));

        $comReg->signature = ImageManager::upload('CompanyRegistration/nidhiCom/', 'png', $request->file('signature'));

        $comReg->bank_details = ImageManager::upload('CompanyRegistration/nidhiCom/', 'png', $request->file('bank_details'));

        $comReg->memeber7_pan_card = ImageManager::upload('CompanyRegistration/nidhiCom/', 'png', $request->file('memeber7_pan_card'));

        $comReg->memeber7_aadhar_card = ImageManager::upload('CompanyRegistration/nidhiCom/', 'png', $request->file('memeber7_aadhar_card'));

        $comReg->memeber7_photo = ImageManager::upload('CompanyRegistration/nidhiCom/', 'png', $request->file('memeber7_photo'));

        $comReg->reference_no = 'ABR'.rand(1111,9999).$id;
        $comReg->payment_type = $request->payment_type;
        $comReg->pay_screenshot = ImageManager::upload('CompanyRegistration/nidhiCom/', 'png', $request->file('pay_screenshot'));
        $comReg->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$comReg->reference_no,'com__reg__pvt__nidhi__coms'])->with('success','form submit successfully');
    }
    public function digitalSignClass3(){
        return view('frontend.service_form.digitalSignClass3');
    }
    public function digitalSignClass3Post(Request $request){
         $validator = Validator::make($request->all(),[
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = Com_Reg_Digital_Signature::all()->last()->id ?? 1;
        $comReg = new Com_Reg_Digital_Signature();

        $comReg->associate_id = Auth('associated')->user()->id ?? 'admin';
        $comReg->reg_type = $request->reg_type;
        $comReg->name = $request->name;
        $comReg->mobile = $request->mobile;
        $comReg->email = $request->email;
        $comReg->pan_card = ImageManager::upload('CompanyRegistration/digitalSignClass3/', 'png', $request->file('pan_card'));
        $comReg->aadhar_card = ImageManager::upload('CompanyRegistration/digitalSignClass3/', 'png', $request->file('aadhar_card'));
        $comReg->photo = ImageManager::upload('CompanyRegistration/digitalSignClass3/', 'png', $request->file('photo'));

        $comReg->reference_no = 'ABR'.rand(1111,9999).$id;
        $comReg->payment_type = $request->payment_type;
        $comReg->pay_screenshot = ImageManager::upload('CompanyRegistration/digitalSignClass3/', 'png', $request->file('pay_screenshot'));
        $comReg->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$comReg->reference_no,'com__reg__digital__signatures'])->with('success','form submit successfully');
    }

    public function digitalSignClass3Enc(){
        return view('frontend.service_form.digitalSignClass3Enc');
    }
    public function digitalSignClass3EncPost(Request $request){
         $validator = Validator::make($request->all(),[
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = Com_Reg_Digital_Signature::all()->last()->id ?? 1;
        $comReg = new Com_Reg_Digital_Signature();

        $comReg->associate_id = Auth('associated')->user()->id ?? 'admin';
        $comReg->reg_type = $request->reg_type;
        $comReg->name = $request->name;
        $comReg->mobile = $request->mobile;
        $comReg->email = $request->email;
        $comReg->pan_card = ImageManager::upload('CompanyRegistration/digitalSignClass3/', 'png', $request->file('pan_card'));
        $comReg->aadhar_card = ImageManager::upload('CompanyRegistration/digitalSignClass3/', 'png', $request->file('aadhar_card'));
        $comReg->photo = ImageManager::upload('CompanyRegistration/digitalSignClass3/', 'png', $request->file('photo'));

        $comReg->gst = ImageManager::upload('CompanyRegistration/digitalSignClass3/', 'png', $request->file('gst'));

        $comReg->reference_no = 'ABR'.rand(1111,9999).$id;
        $comReg->payment_type = $request->payment_type;
        $comReg->pay_screenshot = ImageManager::upload('CompanyRegistration/digitalSignClass3/', 'png', $request->file('pay_screenshot'));
        $comReg->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$comReg->reference_no,'com__reg__digital__signatures'])->with('success','form submit successfully');
    }

// new


    public function homeLoanSalaried(){
        return view('frontend.service_form.homeLoanSalaried');
    }
    public function homeLoanSalariedPost(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = Home_Loan_Salaried::all()->last()->id ?? 1;
        $homeLoan = new Home_Loan_Salaried();

        $homeLoan->associate_id = Auth('associated')->user()->id ?? 'admin';
        $homeLoan->name = $request->name;
        $homeLoan->mobile = $request->mobile;
        $homeLoan->email = $request->email;
        $homeLoan->kyc_pan_card = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('kyc_pan_card'));
        $homeLoan->kyc_aadhar_card = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('kyc_aadhar_card'));
        $homeLoan->kyc_photo = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('kyc_photo'));

        $homeLoan->sal_slip = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('sal_slip'));
        $homeLoan->bank_statement = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('bank_statement'));
        $homeLoan->form16 = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('form16'));
        $homeLoan->rad = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('rad'));
        $homeLoan->sal_proof = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('sal_proof'));
        $homeLoan->ca_pan_card = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('ca_pan_card'));
        $homeLoan->ca_aadhar_card = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('ca_aadhar_card'));
        $homeLoan->ca_photo = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('ca_photo'));
        $homeLoan->property_paper = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('property_paper'));
        $homeLoan->ats = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('ats'));

         $homeLoan->reference_no = 'ABR'.rand(1111,9999).$id;
        $homeLoan->payment_type = $request->payment_type;
        $homeLoan->pay_screenshot = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('pay_screenshot'));
        $homeLoan->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$homeLoan->reference_no,'home__loan__salarieds'])->with('success','form submit successfully');
    }


    public function homeLoanBusiness(){
        return view('frontend.service_form.homeLoanBusiness');
    }
    public function homeLoanBusinessPost(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = Home_Loan_Business_Man::all()->last()->id ?? 1;
        $homeLoan = new Home_Loan_Business_Man();

        $homeLoan->associate_id = Auth('associated')->user()->id ?? 'admin';
        $homeLoan->name = $request->name;
        $homeLoan->mobile = $request->mobile;
        $homeLoan->email = $request->email;
        $homeLoan->kyc_pan_card = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('kyc_pan_card'));
        $homeLoan->kyc_aadhar_card = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('kyc_aadhar_card'));
        $homeLoan->kyc_photo = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('kyc_photo'));

        $homeLoan->brp = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('brp'));
        $homeLoan->bank_statement = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('bank_statement'));
        $homeLoan->itr = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('itr'));
        $homeLoan->gst_reg = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('gst_reg'));
        $homeLoan->rap = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('rap'));
        $homeLoan->ca_pan_card = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('ca_pan_card'));
        $homeLoan->ca_aadhar_card = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('ca_aadhar_card'));
        $homeLoan->ca_photo = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('ca_photo'));
        $homeLoan->property_paper = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('property_paper'));
        $homeLoan->ats = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('ats')); //agremment to sale

         $homeLoan->reference_no = 'ABR'.rand(1111,9999).$id;
        $homeLoan->payment_type = $request->payment_type;
        $homeLoan->pay_screenshot = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('pay_screenshot'));
        $homeLoan->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$homeLoan->reference_no,'home__loan__business__men'])->with('success','form submit successfully');
    }
    public function homeLoanBtSalaried(){
        return view('frontend.service_form.homeLoanBtSalaried');
    }
    public function homeLoanBtSalariedPost(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = Home_Loan_Salaried_Bt::all()->last()->id ?? 1;
        $homeLoan = new Home_Loan_Salaried_Bt();

        $homeLoan->associate_id = Auth('associated')->user()->id ?? 'admin';
        $homeLoan->name = $request->name;
        $homeLoan->mobile = $request->mobile;
        $homeLoan->email = $request->email;
        $homeLoan->kyc_pan_card = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('kyc_pan_card'));
        $homeLoan->kyc_aadhar_card = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('kyc_aadhar_card'));
        $homeLoan->kyc_photo = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('kyc_photo'));

        $homeLoan->sal_slip = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('sal_slip'));
        $homeLoan->bank_statement = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('bank_statement'));
        $homeLoan->form16 = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('form16'));
        $homeLoan->rad = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('rad'));
        $homeLoan->sal_proof = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('sal_proof'));
        $homeLoan->ca_pan_card = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('ca_pan_card'));
        $homeLoan->ca_aadhar_card = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('ca_aadhar_card'));
        $homeLoan->ca_photo = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('ca_photo'));
        $homeLoan->property_paper = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('property_paper'));
        $homeLoan->ats = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('ats'));
        $homeLoan->loan_statement = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('loan_statement'));
        $homeLoan->lod = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('lod'));

         $homeLoan->reference_no = 'ABR'.rand(1111,9999).$id;
        $homeLoan->payment_type = $request->payment_type;
        $homeLoan->pay_screenshot = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('pay_screenshot'));
        $homeLoan->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$homeLoan->reference_no,'home__loan__salaried__bts'])->with('success','form submit successfully');
    }

    public function homeLoanBtBusiness(){
        return view('frontend.service_form.homeLoanBtBusiness');
    }
    public function homeLoanBtBusinessPost(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = Home_Loan_Business_Man_Bt::all()->last()->id ?? 1;
        $homeLoan = new Home_Loan_Business_Man_Bt();

        $homeLoan->associate_id = Auth('associated')->user()->id ?? 'admin';
        $homeLoan->name = $request->name;
        $homeLoan->mobile = $request->mobile;
        $homeLoan->email = $request->email;
        $homeLoan->kyc_pan_card = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('kyc_pan_card'));
        $homeLoan->kyc_aadhar_card = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('kyc_aadhar_card'));
        $homeLoan->kyc_photo = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('kyc_photo'));

        $homeLoan->brp = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('brp'));
        $homeLoan->bank_statement = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('bank_statement'));
        $homeLoan->itr = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('itr'));
        $homeLoan->gst_reg = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('gst_reg'));
        $homeLoan->rap = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('rap'));
        $homeLoan->ca_pan_card = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('ca_pan_card'));
        $homeLoan->ca_aadhar_card = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('ca_aadhar_card'));
        $homeLoan->ca_photo = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('ca_photo'));
        $homeLoan->property_paper = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('property_paper'));
        $homeLoan->ats = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('ats')); //agremment to sale
        $homeLoan->loan_statement = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('loan_statement'));
        $homeLoan->lod = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('lod'));

         $homeLoan->reference_no = 'ABR'.rand(1111,9999).$id;
        $homeLoan->payment_type = $request->payment_type;
        $homeLoan->pay_screenshot = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('pay_screenshot'));
        $homeLoan->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$homeLoan->reference_no,'home__loan__business__man_bts'])->with('success','form submit successfully');
    }

    public function lapSalaried(){
        return view('frontend.service_form.lapSalaried');
    }
    public function lapSalariedPost(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = Lap_Salary_Person::all()->last()->id ?? 1;
        $homeLoan = new Lap_Salary_Person();

        $homeLoan->associate_id = Auth('associated')->user()->id ?? 'admin';
        $homeLoan->name = $request->name;
        $homeLoan->mobile = $request->mobile;
        $homeLoan->email = $request->email;
        $homeLoan->kyc_pan_card = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('kyc_pan_card'));
        $homeLoan->kyc_aadhar_card = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('kyc_aadhar_card'));
        $homeLoan->kyc_photo = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('kyc_photo'));

        $homeLoan->sal_slip = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('sal_slip'));
        $homeLoan->bank_statement = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('bank_statement'));
        $homeLoan->form16 = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('form16'));
        $homeLoan->rad = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('rad'));
        $homeLoan->sal_proof = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('sal_proof'));
        $homeLoan->ca_pan_card = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('ca_pan_card'));
        $homeLoan->ca_aadhar_card = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('ca_aadhar_card'));
        $homeLoan->ca_photo = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('ca_photo'));
        $homeLoan->property_paper = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('property_paper'));
        $homeLoan->ats = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('ats')); //agremment to sale

        $homeLoan->reference_no = 'ABR'.rand(1111,9999).$id;
        $homeLoan->payment_type = $request->payment_type;
        $homeLoan->pay_screenshot = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('pay_screenshot'));
        $homeLoan->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$homeLoan->reference_no,'lap__salary__people'])->with('success','form submit successfully');
    }

    public function lapBusiness(){
        return view('frontend.service_form.lapBusiness');
    }
    public function lapBusinessPost(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
         $id = Lap_Business_Man::all()->last()->id ?? 1;
        $homeLoan = new Lap_Business_Man();

        $homeLoan->associate_id = Auth('associated')->user()->id ?? 'admin';
        $homeLoan->name = $request->name;
        $homeLoan->mobile = $request->mobile;
        $homeLoan->email = $request->email;
        $homeLoan->kyc_pan_card = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('kyc_pan_card'));
        $homeLoan->kyc_aadhar_card = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('kyc_aadhar_card'));
        $homeLoan->kyc_photo = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('kyc_photo'));

        $homeLoan->brp = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('brp'));
        $homeLoan->bank_statement = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('bank_statement'));
        $homeLoan->itr = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('itr'));
        $homeLoan->gst_reg = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('gst_reg'));
        $homeLoan->rap = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('rap'));
        $homeLoan->ca_pan_card = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('ca_pan_card'));
        $homeLoan->ca_aadhar_card = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('ca_aadhar_card'));
        $homeLoan->ca_photo = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('ca_photo'));
        $homeLoan->property_paper = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('property_paper'));
        $homeLoan->ats = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('ats')); //agremment to sale

        $homeLoan->reference_no = 'ABR'.rand(1111,9999).$id;
        $homeLoan->payment_type = $request->payment_type;
        $homeLoan->pay_screenshot = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('pay_screenshot'));
        $homeLoan->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$homeLoan->reference_no,'lap__business__men'])->with('success','form submit successfully');
    }

    public function ccSalaried(){
        return view('frontend.service_form.ccSalaried');
    }
    public function ccSalariedPost(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pan_card' => 'required',
            'aadhar_card' => 'required',
            'photo' => 'required',
            'sal_slip' => 'required',
            'form16' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = Cc_Salary_Person::all()->last()->id ?? 1;
        $homeLoan = new Cc_Salary_Person();

        $homeLoan->associate_id = Auth('associated')->user()->id ?? 'admin';
        $homeLoan->name = $request->name;
        $homeLoan->mobile = $request->mobile;
        $homeLoan->email = $request->email;
        $homeLoan->pan_card = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('pan_card'));
        $homeLoan->aadhar_card = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('aadhar_card'));
        $homeLoan->photo = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('photo'));

        $homeLoan->sal_slip = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('sal_slip'));
        $homeLoan->form16 = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('form16'));

        $homeLoan->reference_no = 'ABR'.rand(1111,9999).$id;
        $homeLoan->payment_type = $request->payment_type;
        $homeLoan->pay_screenshot = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('pay_screenshot'));
        $homeLoan->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$homeLoan->reference_no,'cc__salary__people'])->with('success','form submit successfully');
    }
    public function ccBusiness(){
        return view('frontend.service_form.ccBusiness');
    }
    public function ccBusinessPost(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pan_card' => 'required',
            'aadhar_card' => 'required',
            'photo' => 'required',
            'brp' => 'required',
            'itr' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = Cc_Business_Man::all()->last()->id ?? 1;
        $homeLoan = new Cc_Business_Man();

        $homeLoan->associate_id = Auth('associated')->user()->id ?? 'admin';
        $homeLoan->name = $request->name;
        $homeLoan->mobile = $request->mobile;
        $homeLoan->email = $request->email;
        $homeLoan->pan_card = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('pan_card'));
        $homeLoan->aadhar_card = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('aadhar_card'));
        $homeLoan->photo = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('photo'));

        $homeLoan->brp = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('brp'));
        $homeLoan->itr = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('itr'));

        $homeLoan->reference_no = 'ABR'.rand(1111,9999).$id;
        $homeLoan->payment_type = $request->payment_type;
        $homeLoan->pay_screenshot = ImageManager::upload('financeLoanService/homeloan/', 'png', $request->file('pay_screenshot'));
        $homeLoan->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$homeLoan->reference_no,'cc__business__men'])->with('success','form submit successfully');
    }

    public function personalLoan(){
        return view('frontend.service_form.personalLoan');
    }
    public function personalLoanPost(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pan_card' => 'required',
            'aadhar_card' => 'required',
            'photo' => 'required',
            'gst' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = Personal_Loan::all()->last()->id ?? 1;
        $homeLoan = new Personal_Loan();

        $homeLoan->associate_id = Auth('associated')->user()->id ?? 'admin';
        $homeLoan->name = $request->name;
        $homeLoan->mobile = $request->mobile;
        $homeLoan->email = $request->email;
        $homeLoan->pan_card = ImageManager::upload('loanService/', 'png', $request->file('pan_card'));
        $homeLoan->aadhar_card = ImageManager::upload('loanService/', 'png', $request->file('aadhar_card'));
        $homeLoan->photo = ImageManager::upload('loanService/', 'png', $request->file('photo'));

        $homeLoan->sal_slip = ImageManager::upload('loanService/', 'png', $request->file('sal_slip'));
        $homeLoan->form16 = ImageManager::upload('loanService/', 'png', $request->file('form16'));
        $homeLoan->sal_proof = ImageManager::upload('loanService/', 'png', $request->file('sal_proof'));
        $homeLoan->bank_statement = ImageManager::upload('loanService/', 'png', $request->file('bank_statement'));

        $homeLoan->reference_no = 'ABR'.rand(1111,9999).$id;
        $homeLoan->payment_type = $request->payment_type;
        $homeLoan->pay_screenshot = ImageManager::upload('loanService/', 'png', $request->file('pay_screenshot'));
        $homeLoan->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$homeLoan->reference_no,'personal__loans'])->with('success','form submit successfully');
    }

    public function businessLoan(){
        return view('frontend.service_form.businessLoan');
    }
    public function businessLoanPost(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pan_card' => 'required',
            'aadhar_card' => 'required',
            'photo' => 'required',
            'brp' => 'required',
            'bank_statement' => 'required',
            'itr' => 'required',
            'gst_reg' => 'required',
            'rap' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = Business_Loan::all()->last()->id ?? 1;
        $homeLoan = new Business_Loan();

        $homeLoan->associate_id = Auth('associated')->user()->id ?? 'admin';
        $homeLoan->name = $request->name;
        $homeLoan->mobile = $request->mobile;
        $homeLoan->email = $request->email;
        $homeLoan->pan_card = ImageManager::upload('loanService/', 'png', $request->file('pan_card'));
        $homeLoan->aadhar_card = ImageManager::upload('loanService/', 'png', $request->file('aadhar_card'));
        $homeLoan->photo = ImageManager::upload('loanService/', 'png', $request->file('photo'));

        $homeLoan->brp = ImageManager::upload('loanService/', 'png', $request->file('brp'));

        $homeLoan->bank_statement = ImageManager::upload('loanService/', 'png', $request->file('bank_statement'));

        $homeLoan->itr = ImageManager::upload('loanService/', 'png', $request->file('itr'));

        $homeLoan->gst_reg = ImageManager::upload('loanService/', 'png', $request->file('gst_reg'));

        $homeLoan->rap = ImageManager::upload('loanService/', 'png', $request->file('rap'));

        $homeLoan->reference_no = 'ABR'.rand(1111,9999).$id;
        $homeLoan->payment_type = $request->payment_type;
        $homeLoan->pay_screenshot = ImageManager::upload('loanService/', 'png', $request->file('pay_screenshot'));
        $homeLoan->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$homeLoan->reference_no,'business__loans'])->with('success','form submit successfully');
    }

    public function startupLoan(){
        return view('frontend.service_form.startupLoan');
    }
    public function startupLoanPost(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'pan_card' => 'required',
            'aadhar_card' => 'required',
            'photo' => 'required',
            'brp' => 'required',
            'bank_statement' => 'required',
            'itr' => 'required',
            'gst_reg' => 'required',
            'rap' => 'required',
            'pay_screenshot' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = Startup_Loan::all()->last()->id ?? 1;
        $homeLoan = new Startup_Loan();

        $homeLoan->associate_id = Auth('associated')->user()->id ?? 'admin';
        $homeLoan->name = $request->name;
        $homeLoan->mobile = $request->mobile;
        $homeLoan->email = $request->email;
        $homeLoan->pan_card = ImageManager::upload('loanService/', 'png', $request->file('pan_card'));
        $homeLoan->aadhar_card = ImageManager::upload('loanService/', 'png', $request->file('aadhar_card'));
        $homeLoan->photo = ImageManager::upload('loanService/', 'png', $request->file('photo'));

        $homeLoan->brp = ImageManager::upload('loanService/', 'png', $request->file('brp'));

        $homeLoan->bank_statement = ImageManager::upload('loanService/', 'png', $request->file('bank_statement'));

        $homeLoan->itr = ImageManager::upload('loanService/', 'png', $request->file('itr'));

        $homeLoan->gst_reg = ImageManager::upload('loanService/', 'png', $request->file('gst_reg'));

        $homeLoan->rap = ImageManager::upload('loanService/', 'png', $request->file('rap'));

        $homeLoan->ca_pan_card = ImageManager::upload('loanService/', 'png', $request->file('ca_pan_card'));

        $homeLoan->ca_aadhar_card = ImageManager::upload('loanService/', 'png', $request->file('ca_aadhar_card'));

        $homeLoan->ca_photo = ImageManager::upload('loanService/', 'png', $request->file('ca_photo'));
        $homeLoan->property_paper = ImageManager::upload('loanService/', 'png', $request->file('property_paper'));
        $homeLoan->project_report = ImageManager::upload('loanService/', 'png', $request->file('project_report'));

        $homeLoan->reference_no = 'ABR'.rand(1111,9999).$id;
        $homeLoan->payment_type = $request->payment_type;
        $homeLoan->pay_screenshot = ImageManager::upload('loanService/', 'png', $request->file('pay_screenshot'));
        $homeLoan->save();
        // Toastr()->success('form submit successfully!');

        return redirect()->route('confirm_order',[$homeLoan->reference_no,'startup__loans'])->with('success','form submit successfully');
    }

}
