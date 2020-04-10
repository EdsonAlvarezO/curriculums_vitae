@extends('home')

  @section('forms')
<link href="{{ asset('css/degrees.css') }}" rel="stylesheet"> 
<body>
	<div class="container h-100">
	<div class="d-flex justify-content-center">
		<div class="card mt-5 col-md-4 animated bounceInDown myForm">
			<div class="card-header text-center">
				<h4>Degrees Update</h4>
			</div>
			<div class="card-body">
				<form action="{{route('degrees.updating', $degrees->id)}}" method="POST">
                 @method('PUT')
                 @csrf
					<div id="dynamic_container">
						<div class="input-group">
							<input type="text" name="name" value="{{ $degrees->name}}" class="form-control text-center"/>
						</div>
                        <div class="input-group mt-3">
							<input type="text" name="description" value="{{ $degrees->description}}" class="form-control text-center"/>
						</div>
                        <div class="input-group mt-3">
							<input type="date" name="time_start" value="{{ $degrees->time_start}}" class="form-control text-center"/>
                        </div>
                        <div class="input-group mt-3">
							<input type="date" name="time_final" value="{{ $degrees->time_final}}" class="form-control text-center"/>
                        </div>
                        <div class="input-group mt-3">
							<input type="text" name="website" value="{{ $degrees->website}}" class="form-control text-center"/>
						</div>
                        <div class="card-footer">
                            <a href="{{ route('degrees')}}" class="btn btn-danger btn-sm float-right remove_more" ><i class="fas fa-window-close"></i>Cancel</a>
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