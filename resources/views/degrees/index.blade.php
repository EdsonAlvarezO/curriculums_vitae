@extends('home')

@section('forms')
<link href="{{ asset('css/degrees.css') }}" rel="stylesheet">
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
				<h4>Degree Create</h4>
			</div>
			<div class="card-body">
				<form action="{{route('degrees.create')}}" method="POST">
                    @csrf
                    <div id="dynamic_container">
                        <div class="input-group">
                            <input type="text" name="name" placeholder="Name" class="form-control text-center"/>
                        </div>
                        <div class="input-group mt-3">
                            <input type="text" name="description" placeholder="Description"  class="form-control text-center"/>
                        </div>
                        <div class="input-group mt-3">
                            <input type="date" name="time_start" placeholder="Time start" class="form-control text-center"/>
                        </div>
                        <div class="input-group mt-3">
                            <input type="date" name="time_final" placeholder="Final" class="form-control text-center"/>
                        </div>
                        <div class="input-group mt-3">
                            <input type="text" name="website" placeholder="Website" class="form-control text-center"/>
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
  @if(sizeof($degrees) != 0 )

  <div class="table-wrapper-scroll-y my-custom-scrollbar">
  <h1 class="text-center">Degrees</h1>
  <table class="table table-striped mb-0 header-fixed">
    <thead id="headX" class="thead">
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Time period</th>
        <th scope="col">Website</th>
        <th ></th>
        <th ></th>
      </tr>
    </thead>
    <tbody>
    @foreach($degrees as $data)
           
      <tr>
        <td>{{$data->name}}</td>
        <td>{{$data->description}}</td>
        <td>{{$data->time_start."/".$data->time_final}}</td>
        <td>{{$data->website}}</td>
        <td><a href="{{ route('degrees.update', $data) }}" class="btn-warning circle-table"><i class="fas fa-pen"></i></a></td>
        <td><a href="{{ route('degrees.destroy', $data) }}" onclick="return confirm('Seugas')" class="btn-danger circle-table"><i class="fas fa-trash"></i></a></td>
      </tr>

      @endforeach
    </tbody>
  </table>
  {{ $degrees->links() }}
</div>
@endif
@endsection