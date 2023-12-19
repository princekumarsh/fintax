@extends('admin.layout.app')
@section('content')
    <div class="conatiner-fluid content-inner mt-n5 py-0">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card-header d-flex justify-content-between">
                   <div class="header-title">
                      <h4 class="card-title">ITR Salaried Person</h4>
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
                                    <th>Bank Statement</th>
                                    <th>Form 16</th>
                                    <th>Investment Proof</th>
                                    <th>Salaried Certificate</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($salariedPersons as $p)
                                    <tr>
                                        <td>{{$p->name}}</td>
                                        <td>{{$p->mobile}}</td>
                                        <td>{{$p->email}}</td>
                                        <td><img src="{{asset('storage/app/public/gstAndIncomeTax/itr_salariedParsons/'.$p->pan_card)}}" alt="pan card" class="service-image"></td>
                                        <td><img src="{{asset('storage/app/public/gstAndIncomeTax/itr_salariedParsons/'.$p->aadhar_card)}}" alt="aadhar card" class="service-image"></td>
                                        <td><img src="{{asset('storage/app/public/gstAndIncomeTax/itr_salariedParsons/'.$p->bank_statement)}}" alt="bank_statement" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/gstAndIncomeTax/itr_salariedParsons/'.$p->form16)}}" alt="form 16" class="service-image"></td>
                                        

                                        <td><img src="{{asset('storage/app/public/gstAndIncomeTax/itr_salariedParsons/'.$p->investmentProof)}}" alt="investment Proof" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/gstAndIncomeTax/itr_salariedParsons/'.$p->salaryCertificate)}}" alt="salary Certificate" class="service-image"></td>

                                        <td>
                                            <a href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <i class="fa-solid fa-grip-lines-vertical"></i>
                                            <a href="{{route('admin.itr_salariedPersons.delete',[$p->id])}}" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash text-danger"></i></a>
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
