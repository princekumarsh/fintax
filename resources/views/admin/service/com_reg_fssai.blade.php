@extends('admin.layout.app')
@section('content')
    <div class="conatiner-fluid content-inner mt-n5 py-0">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card-header d-flex justify-content-between">
                   <div class="header-title">
                      <h4 class="card-title">FOOD LICENSE REGISTRATION</h4>
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
                                    <th>Photo</th>
                                    <th>Business Address Proff</th>
                                    <th>Bank Details</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($registration as $p)
                                    <tr>
                                        <td>{{$p->name}}</td>
                                        <td>{{$p->mobile}}</td>
                                        <td>{{$p->email}}</td>
                                        <td><img src="{{asset('storage/app/public/CompanyRegistration/fssai/'.$p->pan_card)}}" alt="PAN CARD" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/CompanyRegistration/fssai/'.$p->aadhar_card)}}" alt="Aadhar Card" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/CompanyRegistration/fssai/'.$p->photo)}}" alt="Photo" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/gstAndIncomeTax/fssai/'.$p->bap)}}" alt="Business Adress Proof" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/CompanyRegistration/fssai/'.$p->bank_detail)}}" alt="Bank Details" class="service-image"></td>

                                        <td>
                                            <a href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <i class="fa-solid fa-grip-lines-vertical"></i>
                                            <a href="{{route('admin.com_reg_fssaiDelete',[$p->id])}}" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash text-danger"></i></a>
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
