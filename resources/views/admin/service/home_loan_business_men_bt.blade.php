@extends('admin.layout.app')
@section('content')
    <div class="conatiner-fluid content-inner mt-n5 py-0">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card-header d-flex justify-content-between">
                   <div class="header-title">
                      <h4 class="card-title">BALANCE TRANSFER + HOME LOAN FOR BUSINESS MAN</h4>
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
                                    <th>BRP</th> 
                                    <th>BANK STATEMENT</th>
                                    <th>ITR</th>
                                    <th>GST</th>
                                    <th>RAP</th>
                                    <th>CA-PAN CARD</th>
                                    <th>CA-AADHAR CARD</th>
                                    <th>CA-PHOTO</th>
                                    <th>PROPERTY PAPER</th>
                                    <th>ATS</th>
                                    <th>LOAN STATEMENT</th>
                                    <th>LOD</th>
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

                                        <td><img src="{{asset('storage/app/public/financeLoanService/homeloan/'.$h->brp)}}" alt="brp" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/financeLoanService/homeloan/'.$h->bank_statement)}}" alt="bank_statement" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/financeLoanService/homeloan/'.$h->itr)}}" alt="itr" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/financeLoanService/homeloan/'.$h->gst_reg)}}" alt="gst_reg" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/financeLoanService/homeloan/'.$h->rap)}}" alt="rap" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/financeLoanService/homeloan/'.$h->ca_pan_card)}}" alt="ca_pan_card" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/financeLoanService/homeloan/'.$h->ca_aadhar_card)}}" alt="ca_aadhar_card" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/financeLoanService/homeloan/'.$h->ca_photo)}}" alt="ca_photo" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/financeLoanService/homeloan/'.$h->property_paper)}}" alt="property_paper" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/financeLoanService/homeloan/'.$h->ats)}}" alt="ats" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/financeLoanService/homeloan/'.$h->loan_statement)}}" alt="loan_statement" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/financeLoanService/homeloan/'.$h->lod)}}" alt="lod" class="service-image"></td>
                                        
                                        <td>
                                            <a href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <i class="fa-solid fa-grip-lines-vertical"></i>
                                            <a href="{{route('admin.home_loan_business_men_btDelete',[$h->id])}}" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash text-danger"></i></a>
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
