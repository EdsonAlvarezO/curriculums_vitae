@extends('home')
@section('forms')
<link href="{{ asset('css/personal.css') }}" rel="stylesheet">
<body>
<div>
  @if (session('status'))
            <div class="alert alert-success animated bounceInDown">
              <h3 class="text-center">{{ session('status') }}</h3>
            </div>
        @endif
        @if (session('danger'))
            <div class="alert alert-danger animated bounceInDown">
                <h3 class="text-center">{{ session('danger') }}</h3>
            </div>
        @endif
  </div>
	<div class="container h-100">
	<div class="d-flex justify-content-center ">
		<div class="card  animated bounceInDown myFormP">
			<div class="card-header text-center">
				<h4>Personal information</h4>
			</div>
			<div class="card-body">
			<div class="container">
        		<div class="row">
				<div class="col-sm">
				<form action="{{route('personal.updating', $information->id)}}" method="POST">
						@method('PUT')
						@csrf
							<div id="dynamic_container">
								<div class="input-group">
									<input type="text" name="name_user" value="{{ $information->name_user}}" class="form-control text-center" required/>
								</div>
								<div class="input-group mt-3">
									<input type="text" name="middle_name" value="{{ $information->middle_name}}" class="form-control text-center" required/>
								</div>
								<div class="input-group mt-3">
									<input type="text" name="last_name" value="{{ $information->last_name}}" class="form-control text-center" required/>
								</div>
								<div class="input-group mt-3">
									<input type="text" name="birth" value="{{ $information->birth}}" class="form-control text-center" required/>
								</div>
								<div class="input-group mt-3">
									<textarea type="text" name="about_you"  class="form-control text-center" required>{{ $information->about_you}}</textarea>
								</div>
								<div class="input-group mt-3">
									<textarea type="text" name="position_user" class="form-control text-center" required>{{ $information->position_user}}</textarea>
								</div>
								<div class="input-group mt-3 ">
									<textarea type="text" name="location_user" class="form-control text-center" required>{{ $information->location_user}}</textarea>
								</div>
								<div class="card-footer">
									<a href="{{ route('personal')}}" class="btn btn-danger circle-table float-right remove_more" ><i class="fas fa-window-close"></i></a>
									<button class="btn btn-success btn-sm float-right submit_btn" type="submit"><i class="fas fa-arrow-alt-circle-right"></i>Update</button>
								</div>
							</div>
						</form>
				</div>
				<div class="col-sm">
				<div id="imagen">
	<form files = "true" name="upload" action="{{route('upload')}} " method="post" enctype="multipart/form-data">
							@csrf
							<div class="row">
								<div class="col-md-6 col-md-offset-3 center">
									<div class="btn-container">
									@if(sizeof($images) != 0)
										@foreach($images as $img)
											<img id= "imageProfile" src="/images_user/{{$img->url}}" alt="">
										@endforeach
									@endif
										<h1 class="imgupload"></h1>
										<h1 class="imgupload ok"></h1>
										<h1 class="imgupload stop"></h1>
										<input type="file" name="file">
									</div>
								</div>
		</div>
		<div class="row">			
			<div class="col-md-12">
					<button type="submit" class="btn btn-success"  id="fakebtn">Submit!</button>
			</div>
		</div>
	</form>
</div>
				</div>
						
					</div>	
				</div>
			</div>
		</div>
	</div>
	</div>
</body>
</html>
@endsection
