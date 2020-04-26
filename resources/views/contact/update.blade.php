@extends('home')

@section('forms')
<link href="{{ asset('css/contact.css') }}" rel="stylesheet">
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
				<h4>Contact Update</h4>
			</div>
			<div class="card-body">
				<form action="{{route('contact.updating', $contact->id)}}" method="POST">
                 @method('PUT')
                 @csrf
					<div id="dynamic_container">
						<div class="input-group">
							<input type="text" name="email" value="{{ $contact->email}}" class="form-control text-center"/>
						</div>
                        <div class="input-group mt-3">
							<input type="text" name="telephone" value="{{ $contact->telephone}}" class="form-control text-center"/>
						</div>
                        <div class="input-group mt-3">
							<textarea type="text" name="street" class="form-control text-center">{{ $contact->street}}</textarea>
						</div>
                        <div class="input-group mt-3">
							<input type="text" name="city" value="{{ $contact->city}}" class="form-control text-center"/>
						</div>
                        <div class="input-group mt-3">
							<input type="text" name="website" value="{{ $contact->website}}"  class="form-control text-center"/>
						</div>
                        <div class="input-group mt-3">
							<input type="text" name="github" value="{{ $contact->github}}"  class="form-control text-center"/>
						</div>
                        <div class="card-footer">
                            <a href="{{ route('contact')}}" class="btn btn-danger btn-sm float-right remove_more" ><i class="fas fa-window-close"></i>Cancel and back</a>
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