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
                                    <th>PAN CARD NGO</th>
                                    <th>CERTIFICATE:</th>
                                    <th>MOA/AOA</th>
                                    <th>AUTHORIZED Pan Card</th>
                                    <th>AUTHORIZED Aadhar Card</th>
                                    <th>AUTHORIZED Photo</th>
                                    <th>AUTHORIZED AUTHORIZATION LETTER</th>
                                    <th>AUTHORIZED BAF</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($partnership as $p)
                                    <tr>
                                        <td>{{$p->name}}</td>
                                        <td>{{$p->mobile}}</td>
                                        <td>{{$p->email}}</td>
                                        <td><img src="{{asset('storage/app/public/gstAndIncomeTax/gst_reg_ngo/'.$p->ngo_pan_card)}}" alt="pan card" class="service-image"></td>
                                        <td><img src="{{asset('storage/app/public/gstAndIncomeTax/gst_reg_ngo/'.$p->certificate)}}" alt="com_incorporationCompany" class="service-image"></td>
                                        <td><img src="{{asset('storage/app/public/gstAndIncomeTax/gst_reg_ngo/'.$p->moa)}}" alt="company_moa" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/gstAndIncomeTax/gst_reg_ngo/'.$p->autho_pan_card)}}" alt="autho_pan_card" class="service-image"></td>
                                        

                                        <td><img src="{{asset('storage/app/public/gstAndIncomeTax/gst_reg_ngo/'.$p->autho_aadhar_card)}}" alt="autho_aadhar_card" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/gstAndIncomeTax/gst_reg_ngo/'.$p->autho_photo)}}" alt="autho_photo" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/gstAndIncomeTax/gst_reg_ngo/'.$p->autho_letter)}}" alt="auto_letter" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/gstAndIncomeTax/gst_reg_ngo/'.$p->autho_bap)}}" alt="auto_bap" class="service-image"></td>
                                        <td>
                                            <a href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <i class="fa-solid fa-grip-lines-vertical"></i>
                                            <a href="{{route('admin.gst_reg_ngo.delete',[$p->id])}}" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash text-danger"></i></a>
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
