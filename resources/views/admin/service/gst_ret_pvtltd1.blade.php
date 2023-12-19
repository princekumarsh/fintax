@extends('admin.layout.app')
@section('content')
    <div class="conatiner-fluid content-inner mt-n5 py-0">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card-header d-flex justify-content-between">
                   <div class="header-title">
                      <h4 class="card-title">PVT. LTD. & OTHER COMPANY( UP TO 1.5 CR)</h4>
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
                                    <th>GSTR-3B</th>
                                    <th>GSTR-R1</th>
                                    <th>GST-9</th>
                                    <th>GST RECONCILIATION</th>
                                    <th>ACCOUNTING WORK</th>
                                    <th>COMPANY ROC RETURN</th>
                                    <th>AUDIT REPORT WITH BALANCE SHEET & PROFIT LOSS</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pvtltd as $p)
                                    <tr>
                                        <td>{{$p->name}}</td>
                                        <td>{{$p->mobile}}</td>
                                        <td>{{$p->email}}</td>
                                        <td><img src="{{asset('storage/app/public/gstAndIncomeTax/pvt_ltd_up1.5/'.$p->gstr_3b)}}" alt="GSTR-3B" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/gstAndIncomeTax/pvt_ltd_up1.5/'.$p->gstr_r1)}}" alt="STR-R1" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/gstAndIncomeTax/pvt_ltd_up1.5/'.$p->gst9)}}" alt="GST-9" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/gstAndIncomeTax/pvt_ltd_up1.5/'.$p->gst_reconciliation)}}" alt="GST RECONCILIATION" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/gstAndIncomeTax/pvt_ltd_up1.5/'.$p->accounting_work)}}" alt="accounting_work" class="service-image"></td>

                                        <td><img src="{{asset('storage/app/public/gstAndIncomeTax/pvt_ltd_up1.5/'.$p->roc_return)}}" alt="roc_return" class="service-image"></td>
                                        
                                        <td><img src="{{asset('storage/app/public/gstAndIncomeTax/pvt_ltd_up1.5/'.$p->audit_report)}}" alt="audit_report" class="service-image"></td>

                                        <td>
                                            <a href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <i class="fa-solid fa-grip-lines-vertical"></i>
                                            <a href="{{route('admin.gst_ret_pvtltd1Delete',[$p->id])}}" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash text-danger"></i></a>
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
