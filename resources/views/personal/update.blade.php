@extends('home')
@section('forms')
<link href="{{ asset('css/personal.css') }}" rel="stylesheet">
<body>
	<div class="container h-100">
	<div class="d-flex justify-content-center">
		<div class="card mt-5 col-md-4 animated bounceInDown myForm">
			<div class="card-header text-center">
				<h4>Personal information</h4>
			</div>
			<div class="card-body">
				<form action="{{route('personal.updating', $information->id)}}" method="POST">
                 @method('PUT')
                 @csrf
					<div id="dynamic_container">
						<div class="input-group">
							<input type="text" name="name_user" value="{{ $information->name_user}}" class="form-control text-center"/>
						</div>
                        <div class="input-group mt-3">
							<input type="text" name="middle_name" value="{{ $information->middle_name}}" class="form-control text-center"/>
						</div>
                        <div class="input-group mt-3">
							<input type="text" name="last_name" value="{{ $information->last_name}}" class="form-control text-center"/>
						</div>
                        <div class="input-group mt-3">
							<input type="text" name="birth" value="{{ $information->birth}}" class="form-control text-center"/>
						</div>
                        <div class="input-group mt-3">
							<textarea type="text" name="about_you"  class="form-control text-center">{{ $information->about_you}}</textarea>
						</div>
                        <div class="input-group mt-3">
							<textarea type="text" name="position_user" class="form-control text-center">{{ $information->position_user}}</textarea>
						</div>
                        <div class="input-group mt-3 ">
							<textarea type="text" name="location_user" class="form-control text-center">{{ $information->location_user}}</textarea>
						</div>
                        <div class="card-footer">
                            <a href="{{ route('personal')}}" class="btn btn-danger btn-sm float-right remove_more" ><i class="fas fa-window-close"></i>Cancel and back</a>
				            <button class="btn btn-success btn-sm float-right submit_btn" type="submit"><i class="fas fa-arrow-alt-circle-right"></i>Update</button>
                        </div>
					</div>
				</form>
			</div>
		</div>
	</div>
	</dvi>
</body>
</html>
@endsection