@extends('admin.layout.app')
@section('content')
    <div class="conatiner-fluid content-inner mt-n5 py-0">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card-header d-flex justify-content-between">
                   <div class="header-title">
                      <h4 class="card-title">TRADE MARK CERTIFICATION REGISTRATION</h4>
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
                                    <th>INDIVIDUALS - Pan Card</th>
                                    <th>INDIVIDUALS - Photo</th>
                                    <th>GST CERTIFICATE</th>
                                    <th>LOGO & TRADE MARK NAME</th>
                                    <th>AFFIDAVIT</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($regiteration as $p)
                                    <tr>
                                        <td>{{$p->name}}</td>
                                        <td>{{$p->mobile}}</td>
                                        <td>{{$p->email}}</td>
                                        <td><img src="{{asset('storage/app/public/CompanyRegistration/reg_trademark/'.$p->indi_pan_card)}}" alt="PAN CARD" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/CompanyRegistration/reg_trademark/'.$p->indi_photo)}}" alt="GST CERTIFICATE" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/CompanyRegistration/reg_trademark/'.$p->gst_certi)}}" alt="LOGO & TRADE MARK NAME" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/gstAndIncomeTax/reg_trademark/'.$p->trade_mark_Name)}}" alt="AFFIDAVIT" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/CompanyRegistration/reg_trademark/'.$p->affidavit)}}" alt="Photo" class="service-image"></td>

                                        <td>
                                            <a href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <i class="fa-solid fa-grip-lines-vertical"></i>
                                            <a href="{{route('admin.com_reg_trademark_delete',[$p->id])}}" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash text-danger"></i></a>
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
