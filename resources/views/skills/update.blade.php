@extends('home')

  @section('forms')
<link href="{{ asset('css/skills.css') }}" rel="stylesheet"> 
<body>
	<div class="container h-100">
	<div class="d-flex justify-content-center">
		<div class="card mt-5 col-md-4 animated bounceInDown myForm">
			<div class="card-header text-center">
				<h4>Skill Update</h4>
			</div>
			<div class="card-body">
				<form action="{{route('skills.updating', $skill->id)}}" method="POST">
                 @method('PUT')
                 @csrf
					<div id="dynamic_container">
						<div class="input-group">
							<input type="text" name="name" value="{{ $skill->name}}" class="form-control text-center"/>
						</div>
                        <div class="input-group mt-3">
							<input type="range" name="level" value="{{ $skill->level}}" class="form-control text-center"/>
						</div>
                        <div class="card-footer">
                            <a href="{{ route('skills')}}" class="btn btn-danger btn-sm float-right remove_more" ><i class="fas fa-window-close"></i>Cancel</a>
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