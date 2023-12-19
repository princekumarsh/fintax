@extends('admin.layout.app')
@section('content')
    <div class="conatiner-fluid content-inner mt-n5 py-0">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card-header d-flex justify-content-between">
                   <div class="header-title">
                      <h4 class="card-title">PRIVATE LIMITED COMPANY WITH 2 DIRECTOR</h4>
                   </div>
                </div>
                <div class="card-body card">
                    <div class="table-responsive">
                        <table id="datatable" class="table" data-toggle="data-table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>KYC PAN CARD</th>
                                    <th>KYC AADHAR CARD:</th>
                                    <th>KYC PHOTO</th>
                                    <th>KYC 6 Month Bank Statement</th>
                                    <th>BAP</th>
                                    <th>DIGITAL SIGNATURE</th>
                                    <th>BANK DETAILS</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($registration as $p)
                                    <tr>
                                        <td>{{$p->name}}</td>
                                        <td>{{$p->mobile}}</td>
                                        <td>{{$p->email}}</td>
                                        <td><img src="{{asset('storage/app/public/CompanyRegistration/pvtltd/'.$p->kyc_pan_card)}}" alt="pan card" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/CompanyRegistration/pvtltd/'.$p->kyc_aadhar_card)}}" alt="kyc_aadhar_card" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/CompanyRegistration/pvtltd/'.$p->kyc_photo)}}" alt="kyc_photo" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/CompanyRegistration/pvtltd/'.$p->kyc_bank_statement)}}" alt="kyc_bank_statement" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/CompanyRegistration/pvtltd/'.$p->bap)}}" alt="bap" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/CompanyRegistration/pvtltd/'.$p->signature)}}" alt="signature" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/CompanyRegistration/pvtltd/'.$p->bank_details)}}" alt="bank_details" class="service-image"></td>
                                        
                                        <td>
                                            <a href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <i class="fa-solid fa-grip-lines-vertical"></i>
                                            <a href="{{route('admin.com_reg_pvtltdComDelete',[$p->id])}}" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash text-danger"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
