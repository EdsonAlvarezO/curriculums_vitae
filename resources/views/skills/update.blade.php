@extends('home')

  @section('forms')
<link href="{{ asset('css/skills.css') }}" rel="stylesheet"> 
<body>
@if (session('status'))
            <div class="alert alert-success animated bounceInDown">
            <h3 class="text-center">{{ session('status') }}</h3>
            </div>
@endif
	<div class="container h-100">
	<div class="d-flex justify-content-center">
		<div class="card  animated bounceInDown myFormP">
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
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    setTimeout(function() {
        $(".alert").fadeOut(1500);
    },3000);
});
</script>