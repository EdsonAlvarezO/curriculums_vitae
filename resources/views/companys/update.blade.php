@extends('home')

  @section('forms')
<link href="{{ asset('css/companys.css') }}" rel="stylesheet"> 
<body>
@if (session('status'))
            <div class="alert alert-success animated bounceInDown">
            <h3 class="text-center">{{ session('status') }}</h3>
            </div>
@endif
	<div class="container h-100">
	<div class="d-flex justify-content-center">
		<div class="card animated bounceInDown myFormP">
			<div class="card-header text-center">
				<h4>Company Update</h4>
			</div>
			<div class="card-body">
				<form action="{{route('companys.updating', $company->id)}}" method="POST">
                 @method('PUT')
                 @csrf
					<div id="dynamic_container">
						<div class="input-group">
							<input type="text" name="name" value="{{ $company->name}}" class="form-control text-center" require/>
						</div>
                        <div class="input-group mt-3">
							<input type="text" name="position" value="{{ $company->position}}" class="form-control text-center" require/>
						</div>
                        <div class="input-group mt-3">
							<input type="text" name="time_start" value="{{ $company->time_start}}" class="form-control text-center" require/>
                        </div>
                        <div class="input-group mt-3">
							<input type="text" name="time_final" value="{{ $company->time_final}}" class="form-control text-center" require/>
                        </div>
                        <div class="input-group mt-3">
							<input type="text" name="description" value="{{ $company->description}}" class="form-control text-center" require/>
                        </div>
                        <div class="input-group mt-3">
							<input type="text" name="website" value="{{ $company->website}}" class="form-control text-center" require/>
						</div>
                        <div class="card-footer">
                            <a href="{{ route('companys')}}" class="btn btn-danger btn-sm float-right remove_more" ><i class="fas fa-window-close"></i>Back</a>
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