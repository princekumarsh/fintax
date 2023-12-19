@extends('admin.layout.app')
@section('content')
    <div class="conatiner-fluid content-inner mt-n5 py-0">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card-header d-flex justify-content-between">
                   <div class="header-title">
                      <h4 class="card-title">HOME LOAN FOR SALARIED PERSON</h4>
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
                                    <th>KYC Pan Card</th>
                                    <th>KYC Aadhar Card</th>
                                    <th>KYC Photo</th>
                                    <th>SALARY SLIP</th>
                                    <th>BANK STATEMENT</th>
                                    <th>FORM 16</th>
                                    <th>RAP</th>
                                    <th>SALARY PROOF</th>
                                    <th>CA-PAN CARD</th>
                                    <th>CA-AADHAR CARD</th>
                                    <th>CA-PHOTO</th>
                                    <th>PROPERTY PAPER</th>
                                    <th>ATS</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($homeLoan as $h)
                                    <tr>
                                        <td>{{$h->name}}</td>
                                        <td>{{$h->mobile}}</td>
                                        <td>{{$h->email}}</td>
                                        <td><img src="{{asset('storage/app/public/financeLoanService/homeloan/'.$h->kyc_pan_card)}}" alt="pan card" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/financeLoanService/homeloan/'.$h->kyc_aadhar_card)}}" alt="kyc_aadhar_card" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/financeLoanService/homeloan/'.$h->kyc_photo)}}" alt="kyc_photo" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/financeLoanService/homeloan/'.$h->sal_slip)}}" alt="sal_slip" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/financeLoanService/homeloan/'.$h->bank_statement)}}" alt="bank_statement" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/financeLoanService/homeloan/'.$h->form16)}}" alt="form16" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/financeLoanService/homeloan/'.$h->rad)}}" alt="rad" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/financeLoanService/homeloan/'.$h->sal_proof)}}" alt="sal_proof" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/financeLoanService/homeloan/'.$h->ca_pan_card)}}" alt="ca_pan_card" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/financeLoanService/homeloan/'.$h->ca_aadhar_card)}}" alt="ca_aadhar_card" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/financeLoanService/homeloan/'.$h->ca_photo)}}" alt="ca_photo" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/financeLoanService/homeloan/'.$h->property_paper)}}" alt="property_paper" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/financeLoanService/homeloan/'.$h->ats)}}" alt="ats" class="service-image"></td>

                                        <td>
                                            <a href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <i class="fa-solid fa-grip-lines-vertical"></i>
                                            <a href="{{route('admin.home_loan_salariedDelete',[$h->id])}}" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash text-danger"></i></a>
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
