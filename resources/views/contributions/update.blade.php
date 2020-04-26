@extends('home')

  @section('forms')
<link href="{{ asset('css/contribution.css') }}" rel="stylesheet"> 
<body>
@if (session('status'))
            <div class="alert alert-success">
            <h3 class="text-center">{{ session('status') }}</h3>
            </div>
@endif
	<div class="container h-100">
	<div class="d-flex justify-content-center">
		<div class="card mt-5 col-md-4 animated bounceInDown myForm">
			<div class="card-header text-center">
				<h4>Contribution Update</h4>
			</div>
			<div class="card-body">
				<form action="{{route('contributions.updating', $contribution->id)}}" method="POST">
                 @method('PUT')
                 @csrf
					<div id="dynamic_container">
						<div class="input-group">
							<input type="text" name="name" value="{{ $contribution->name}}" class="form-control text-center"/>
						</div>
                        <div class="input-group mt-3">
							<input type="text" name="description" value="{{ $contribution->description}}" class="form-control text-center"/>
						</div>
                        <div class="input-group mt-3">
							<input type="text" name="url" value="{{ $contribution->url}}" class="form-control text-center"/>
						</div>
                        <div class="card-footer">
                            <a href="{{ route('contributions')}}" class="btn btn-danger btn-sm float-right remove_more" ><i class="fas fa-window-close"></i>Cancel</a>
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