@extends('admin.layout.app')
@section('content')
    <div class="conatiner-fluid content-inner mt-n5 py-0">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card-header d-flex justify-content-between">
                   <div class="header-title">
                      <h4 class="card-title">ITR for Professionals</h4>
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
                                    <th>PROFESSIONALS REGISTRATION PROOF</th>
                                    <th>ASSESSMENT YEAR BANK STATEMENT</th>
                                    <th>ASSESSMENT YEAR GSTR-3B RETURN </th>
                                    <th>ASSESSMENT YEAR BUSINESS TURN OVER DETAILS</th>
                                    <th>INVESTMENT PROOF IF ANY</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($professionals as $p)
                                    <tr>
                                        <td>{{$p->name}}</td>
                                        <td>{{$p->mobile}}</td>
                                        <td>{{$p->email}}</td>
                                        <td><img src="{{asset('storage/app/public/gstAndIncomeTax/itr_professional/'.$p->pan_card)}}" alt="pan card" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/gstAndIncomeTax/itr_professional/'.$p->aadhar_card)}}" alt="aadhar card" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/gstAndIncomeTax/itr_professional/'.$p->brp)}}" alt="brp" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/gstAndIncomeTax/itr_professional/'.$p->aybs)}}" alt="aybs" class="service-image"></td>
                                        

                                        <td><img src="{{asset('storage/app/public/gstAndIncomeTax/itr_professional/'.$p->ayr)}}" alt="ayr" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/gstAndIncomeTax/itr_professional/'.$p->aybto)}}" alt="aybto" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/gstAndIncomeTax/itr_professional/'.$p->investment_proof)}}" alt="investment_proof" class="service-image"></td>

                                        <td>
                                            <a href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <i class="fa-solid fa-grip-lines-vertical"></i>
                                            <a href="{{route('admin.itr_professional.delete',[$p->id])}}" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash text-danger"></i></a>
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
