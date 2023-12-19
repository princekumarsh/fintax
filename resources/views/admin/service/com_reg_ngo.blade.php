@extends('admin.layout.app')
@section('content')
    <div class="conatiner-fluid content-inner mt-n5 py-0">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card-header d-flex justify-content-between">
                   <div class="header-title">
                      <h4 class="card-title">NGO/SOCIETY/TRUST/ SECTON 8</h4>
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
                                    <th>PAN CARD OF NGO/SOCIETY</th>
                                    <th>CERTIFICATE</th>
                                    <th>MOA & AOA</th>
                                    <th>Pan Card</th>
                                    <th>Aadhar Card</th>
                                    <th>Photo</th>
                                    <th>AUTHORIZATION LETTER</th>
                                    <th>BUSINESS ADDRESS PROFF</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($regiteration as $p)
                                    <tr>
                                        <td>{{$p->name}}</td>
                                        <td>{{$p->mobile}}</td>
                                        <td>{{$p->email}}</td>
                                        <td><img src="{{asset('storage/app/public/CompanyRegistration/reg_ngo/'.$p->pan_card_ngo)}}" alt="PAN CARD OF NGO" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/CompanyRegistration/reg_ngo/'.$p->certificate)}}" alt="CERTIFICATE" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/CompanyRegistration/reg_ngo/'.$p->moa)}}" alt="MOA & AOA" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/CompanyRegistration/reg_ngo/'.$p->kyc_pan_card)}}" alt="Pan Card" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/gstAndIncomeTax/reg_ngo/'.$p->kyc_aadhar_card)}}" alt="Aadhar Card" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/CompanyRegistration/reg_ngo/'.$p->photo)}}" alt="Photo" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/CompanyRegistration/reg_ngo/'.$p->autho_letter)}}" alt="AUTHORIZATION LETTER" class="service-image"></td>
                                        

                                        <td><img src="{{asset('storage/app/public/CompanyRegistration/reg_ngo/'.$p->bap)}}" alt="BUSINESS ADDRESS PROFF" class="service-image"></td>

                                        <td>
                                            <a href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <i class="fa-solid fa-grip-lines-vertical"></i>
                                            <a href="{{route('admin.com_reg_ngo_delete',[$p->id])}}" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash text-danger"></i></a>
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
