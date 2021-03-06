@extends('admin/adminAddFaculty/nav')

@section('index')
	<title>Update Domain</title>
		<div class="container-login100" style="width:900px;margin-left: 100px">
			<div class="wrap-login101" class="text-center">
				<div class="login100-form-title" style="background-image: url(/images/unnamed.jpg);">
					<span class="login100-form-title-1">
						Update Domain
					</span>
				</div>

				<form method="POST" class="login101-form validate-form">
                    {{csrf_field()}}
                    <center>
                        <table align="center">
                            @foreach($errors->all() as $error)
                                
                                <tr>
                                    <td><b style="color: red;">{{$error}}</b></td>
                                </tr>
                                
                            @endforeach
                        </table>
                    </center>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Domain name is required">
						<input class="input100" type="text" name="name" placeholder="Enter Domain Name" value="{{$dom_name}}">
						<span class="focus-input100"></span>
			            
					</div>

                    <div class="wrap-input100 validate-input m-b-26" data-validate="Domain description is required">
                    <textarea class="input100" type="text" name="des" placeholder="Enter Domain Description" rows="10">{{$dom_desc}}</textarea>
                    <span class="focus-input100"></span>
                    </div>

					<div id="login100-form-Btn">
						<button type="submit" class="login101-form-btn">
							Update Domain
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
    </footer>
	
	
@endsection