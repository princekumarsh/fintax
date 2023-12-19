@extends('layout.frontend.app')
@section('content')
<style>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</style>

<div class="container">
	<div style="background-color: #f7f8fa94;margin: 10%;height: auto;box-shadow: rgba(0, 0, 0, 0.1) -4px 9px 25px -6px;">
		<h5 class="ml-4 mt-4">Form id: {{$data->reference_no}}</h5>
		 <h3 style="font-family:Snell Roundhand,cursive;padding-left:70px;padding-top:70px;">Your form has been successfully Submitted	!</h5>
		 <h1 class="text-center"><i class="fa fa-check-circle" style="font-size:70px;color: green;"></i></h1>
		 <h3 style="margin-left:70px">Hello, {{$data->name}}</h3>
		 <h4 style="font-weight:200;padding:0px 70px">You form has been submitted and you will be contacted within 24 hours!</h3>
	</div>
</div>

@endsection