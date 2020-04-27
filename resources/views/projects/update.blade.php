@extends('home')

@section('forms')
<link href="{{ asset('css/projects.css') }}" rel="stylesheet">
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
				<h4>Project Update</h4>
			</div>
			<div class="card-body">
				<form action="{{route('projects.updating', $project->id)}}" method="POST">
                 @method('PUT')
                 @csrf
					<div id="dynamic_container">
						<div class="input-group">
							<input type="text" name="name" value="{{ $project->name}}" class="form-control text-center"/>
						</div>
                        <div class="input-group mt-3">
							<input type="text" name="description" value="{{ $project->description}}" class="form-control text-center"/>
						</div>
                        <div class="input-group mt-3">
							<input type="text" name="plataform" value="{{ $project->plataform}}" class="form-control text-center"/>
						</div>
                        <div class="input-group mt-3">
							<input type="text" name="url" value="{{ $project->url}}" class="form-control text-center"/>
						</div>
                        <div class="card-footer">
                            <a href="{{ route('projects')}}" class="btn btn-danger btn-sm float-right remove_more" ><i class="fas fa-window-close"></i>Cancel and back</a>
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