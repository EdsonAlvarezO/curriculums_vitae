@extends('home')

@section('forms')
<link href="{{ asset('css/skills.css') }}" rel="stylesheet">
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
	<div class="d-flex justify-content-center">
		<div id ="myF" class="card mt-5  animated pulse myForm">
			<div class="card-header text-center">
				<h4>Skills Create</h4>
			</div>
			<div class="card-body">
				<form action="{{route('skills.create')}}" method="POST">
                    @csrf
                    <div id="dynamic_container">
                        <div class="input-group">
                            <input type="text" name="name" placeholder="Name" class="form-control text-center"/>
                        </div>
                        <div class="input-group mt-3">
                            <input type="range" name="level" placeholder="Level"  class="form-control text-center"/>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success animated pulse btn-xl float-right submit_btn" type="submit">Create</button>
                        </div>
					</div>
				</form>
			</div>
		</div>
	</div>
	</div>
  @if(sizeof($skills) != 0 )

  <div class="table-wrapper-scroll-y my-custom-scrollbar">
  <h1 class="text-center">Skills</h1>
  <table class="table table-striped mb-0 header-fixed">
    <thead id="headX" class="thead">
      <tr>
        <th scope="col">Name</th>
        <th scope="col">level</th>
        <th >Edit</th>
        <th >Delete</th>
      </tr>
    </thead>
    <tbody>
    @foreach($skills as $data)
      <tr>
        <td>{{$data->name}}</td>
        <td>{{$data->level}}</td>
        <td><a href="{{ route('skills.update', $data) }}" class="btn-warning circle-table"><i class="fas fa-pen"></i></a></td>
        <td><a href="{{ route('skills.destroy', $data) }}" onclick="return confirm('Seugas')" class="btn-danger circle-table"><i class="fas fa-trash"></i></a></td>
      </tr>

      @endforeach 
    </tbody>
  </table>
  {{ $skills->links() }}
</div>
@endif

@endsection