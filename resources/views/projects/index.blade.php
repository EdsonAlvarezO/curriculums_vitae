@extends('home')
@section('forms')
<link href="{{ asset('css/projects.css') }}" rel="stylesheet">
<div>
  @if (session('status'))
            <div class="alert alert-success">
            <h3 class="text-center">{{ session('status') }}</h3>
            </div>
        @endif
        @if (session('danger'))
            <div class="alert alert-danger">
                <h3 class="text-center">{{ session('danger') }}</h3>
            </div>
        @endif
  </div>
  <div class="container h-100">
	<div class="d-flex justify-content-center">
		<div id ="myF" class="card mt-5  animated pulse myForm">
			<div class="card-header text-center">
				<h4>Projects</h4>
			</div>
			<div class="card-body">
				<form action="{{route('projects.create')}}" method="POST">
                    @csrf
                    <div id="dynamic_container">
                        <div class="input-group">
                                        <input type="text" name="name" placeholder="Name" class="form-control text-center"/>
                                    </div>
                        <div class="input-group mt-3">
                                        <input type="text" name="description" placeholder="Description"  class="form-control text-center"/>
                                    </div>
                        <div class="input-group mt-3">
                                        <input type="text" name="plataform" placeholder="Plataform" class="form-control text-center"/>
                                    </div>
                        <div class="input-group mt-3">
                                        <input type="text" name="url" placeholder="URL" class="form-control text-center"/>
                        </div>
                        <div class="card-footer">
                                <button class="btn btn-success btn-xl float-right submit_btn" type="submit">Create</button>
                        </div>
					</div>
				</form>
			</div>
		</div>
	</div>
	</dvi>
  @if(sizeof($projects) != 0 )
  <div class="table-wrapper-scroll-y my-custom-scrollbar">
  <h1 class="text-center">Projects</h1>
  <table class="table table-striped mb-0 header-fixed">
    <thead id="headX" class="thead">
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Plataform</th>
        <th scope="col">URL</th>
      </tr>
    </thead>
    <tbody>
    @foreach($projects as $data)
      <tr>
        <td>{{$data->name}}</td>
        <td>{{$data->plataform}}</td>
        <td>{{$data->description}}</td>
        <td>{{$data->url}}</td>
        <td><a href="{{ route('projects.update', $data) }}"  class="btn-warning circle-table"><i class="fas fa-pen"></i></a></td>
        <td><a href="{{ route('projects.destroy', $data) }}" onclick="return confirm('Seugas')" class="btn-danger circle-table"><i class="fas fa-trash"></i></a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
    {{ $projects->links() }}
</div>
@endif
@endsection