@extends('layout.frontend.app')
@section('content')

<!-- Main content Start -->
        <div class="main-content">	
        	<div>
      			<div class="row">
        			<div class="mx-auto col-10 col-md-8 col-lg-6">
                    	<!-- Form -->
                    	<form class="form-example" action="" method="post">
            				<h3>PROFESSIONALS (Rate RS 999/-)</h3>
            				<!-- Input fields -->
            				
                                        <div class="form-group">
                                                <label for="pan" style="color:black;">Pan Card:</label>
                                                <input type="file" class="form-control" name="pan"/>
                                        </div>
                                        <div class="form-group">
                                                <label for="aadhar" style="color:black;">Aadhar Card:</label>
                                                <input type="file" class="form-control" name="aadhar"/>
                                        </div>
                                        <div class="form-group">
                                                <label for="brp" style="color:black;">
                                               BUSINESS ADDRESS PROOF/PROFESSIONAL REGISTRATION PROOF:</label>
                                                <input type="file" class="form-control" name="brp"/>
                                        </div>
                                        <div class="form-group">
                                                <label for="aybs" style="color:black;">
                                               ASSESSMENT YEAR BANK STATEMENT:</label>
                                                <input type="file" class="form-control" name="aybs"/>
                                        </div>
                                        <div class="form-group">
                                                <label for="assementyearreturn" style="color:black;">
                                                ASSESSMENT YEAR GSTR-3B RETURN (IF YOU ARE A GSTIN PERSON):</label>
                                                <input type="file" class="form-control" name="assementyearreturn"/>
                                        </div>
                                        <div class="form-group">
                                                <label for="assementyearturnover" style="color:black;">
                                               ASSESSMENT YEAR BUSINESS TURN OVER DETAILS( IF YOU ARE NOT REGISTRED PERSON):</label>
                                                <input type="file" class="form-control" name="assementyearturnover"/>
                                        </div>
                                        <div class="form-group">
                                                <label for="investmentproof" style="color:black;">
                                               INVESTMENT PROOF IF ANY:</label>
                                                <input type="file" class="form-control" name="investmentproof"/>
                                        </div>

        
            				<button type="submit" class="btn btn-danger btn-customized mt-2 mb-2">
              				Upload
            				</button>
          				</form>
          				<!-- Form end -->
        			</div>
      			</div>
    		</div>
        </div>

@endsection