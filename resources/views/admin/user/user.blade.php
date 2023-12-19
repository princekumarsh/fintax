@extends('admin.layout.app')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">User List Datatables</h4>
               </div>
                </div>
                <div class="card-body">
                    {{-- <p>Images in Bootstrap are made responsive with <code>.img-fluid</code>. <code>max-width: 100%;</code> and <code>height: auto;</code> are applied to the image so that it scales with the parent element.</p> --}}
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped" data-toggle="data-table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>phone</th>
                                    <th>email</th>
                                    <th>Date of birth</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                {{-- @foreach ($users as $user)
                                    <tr>
                                        <td>{{$user->l_name ?? 'User#$56r'}}</td>
                                        <td>{{$user->phone}}</td>
                                        <td>{{$user->email ?? 'NA'}}</td>
                                        <td>{{$user->dob ?? null}}</td>
                                        <td>{{$user->status ?? null}}</td>
                                        <td>X</td>
                                    </tr>
                                @endforeach --}}
                            </tbody>
                            {{-- <tfoot>
                        <tr>
                           <th>Name</th>
                           <th>Position</th>
                           <th>Office</th>
                           <th>Age</th>
                           <th>Start date</th>
                           <th>Salary</th>
                        </tr>
                     </tfoot> --}}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
