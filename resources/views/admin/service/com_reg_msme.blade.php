@extends('admin.layout.app')
@section('content')
    <div class="conatiner-fluid content-inner mt-n5 py-0">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card-header d-flex justify-content-between">
                   <div class="header-title">
                      <h4 class="card-title">MSME(UDYOG ADHAR)</h4>
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
                                    <th>PAN CARD</th>
                                    <th>Aadhar Card</th>
                                    <th>Bank Details</th>
                                    <th>Photo</th>
                                    <th>Business Adress Proof</th>
                                    <th>Any Business Registration If Any</th>
                                    <th>COMPANY PAN CARD</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($msme as $p)
                                    <tr>
                                        <td>{{$p->name}}</td>
                                        <td>{{$p->mobile}}</td>
                                        <td>{{$p->email}}</td>
                                        <td><img src="{{asset('storage/app/public/CompanyRegistration/msme/'.$p->pan_card)}}" alt="PAN CARD" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/CompanyRegistration/msme/'.$p->aadhar_card)}}" alt="Aadhar Card" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/CompanyRegistration/msme/'.$p->bank_detail)}}" alt="Bank Details" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/CompanyRegistration/msme/'.$p->photo)}}" alt="Photo" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/gstAndIncomeTax/msme/'.$p->bap)}}" alt="Business Adress Proof" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/CompanyRegistration/msme/'.$p->businessRegistration)}}" alt="Any Business Registration If Any" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/CompanyRegistration/msme/'.$p->com_pan_card)}}" alt="ACOMPANY PAN CARD" class="service-image"></td>

                                        <td>
                                            <a href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <i class="fa-solid fa-grip-lines-vertical"></i>
                                            <a href="{{route('admin.com_reg_msmeDelete',[$p->id])}}" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash text-danger"></i></a>
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
