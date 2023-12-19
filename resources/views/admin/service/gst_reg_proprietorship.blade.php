@extends('admin.layout.app')
@section('content')
    <div class="conatiner-fluid content-inner mt-n5 py-0">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card-header d-flex justify-content-between">
                   <div class="header-title">
                      <h4 class="card-title">Proprietorship</h4>
                   </div>
                </div>
                <div class="card-body card">
                    <div class="table-responsive">
                        <table id="datatable" class="table" data-toggle="data-table">
                            <thead>
                                <tr>
                                    <th>Associate Id</th>
                                    <th>Form id</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Payment Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($proprietorship as $p)
                                    <tr>
                                        <td>{{$p->associate_id}}</td>
                                        <td>{{$p->reference_no}}</td>
                                        <td>{{$p->name}}</td>
                                        <td>{{$p->mobile}}</td>
                                        <td>{{$p->email}}</td>
                                        <td>{{$p->payment_type}}</td>
                                        <!-- <td><img src="{{asset('storage/app/public/gstAndIncomeTax/'.$p->pan_card)}}" alt="pan card" class="service-image"></td>
                                        <td><img src="{{asset('storage/app/public/gstAndIncomeTax/'.$p->aadhar_card)}}" alt="aadhar card" class="service-image"></td>
                                        <td><img src="{{asset('storage/app/public/gstAndIncomeTax/'.$p->photo)}}" alt="photo" class="service-image"></td>
                                        <td><img src="{{asset('storage/app/public/gstAndIncomeTax/'.$p->baf)}}" alt="BAF" class="service-image"></td>
                                        <td><img src="{{asset('storage/app/public/gstAndIncomeTax/'.$p->bank_details)}}" alt="bank Details" class="service-image"></td> -->
                                        <td>
                                            <a href="#"><i class="fa-regular fa-eye"></i></a>
                                            <i class="fa-solid fa-grip-lines-vertical"></i>
                                            <a href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <i class="fa-solid fa-grip-lines-vertical"></i>
                                            <a href="{{route('admin.gst_reg_proprietorship.delete',[$p->id])}}" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash text-danger"></i></a>
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
