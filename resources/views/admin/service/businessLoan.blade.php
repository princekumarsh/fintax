@extends('admin.layout.app')
@section('content')
    <div class="conatiner-fluid content-inner mt-n5 py-0">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card-header d-flex justify-content-between">
                   <div class="header-title">
                      <h4 class="card-title">BUSINESS LOAN</h4>
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
                                    <th>Pan Card</th>
                                    <th>Aadhar Card</th>
                                    <th>Photo</th>
                                    <th>GST</th> 
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($homeLoan as $h)
                                    <tr>
                                        <td>{{$h->name}}</td>
                                        <td>{{$h->mobile}}</td>
                                        <td>{{$h->email}}</td>
                                        <td><img src="{{asset('storage/app/public/loanService/'.$h->pan_card)}}" alt="pan card" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/loanService/'.$h->aadhar_card)}}" alt="kyc_aadhar_card" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/loanService/'.$h->photo)}}" alt="kyc_photo" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/loanService/'.$h->gst)}}" alt="gst" class="service-image"></td>
                                        
                                        <td>
                                            <a href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <i class="fa-solid fa-grip-lines-vertical"></i>
                                            <a href="{{route('admin.home_loan_businessLoanDelete',[$h->id])}}" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash text-danger"></i></a>
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
