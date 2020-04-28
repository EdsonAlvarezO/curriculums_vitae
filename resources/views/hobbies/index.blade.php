@extends('home')

@section('forms')
<link href="{{ asset('css/hobbies.css') }}" rel="stylesheet">
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
				<h4>Hobbie Create</h4>
			</div>
			<div class="card-body">
				<form action="{{route('hobbies.create')}}" method="POST">
                    @csrf
                    <div id="dynamic_container">
                        <div class="input-group">
                            <input type="text"  name="name" placeholder="Name" class="form-control text-center" required/>
                        </div>
                        <div class="input-group mt-3">
                            <input type="text" require name="url" placeholder="URL"  class="form-control text-center" required/>
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
  @if(sizeof($hobbies ?? '') != 0 )

  <div class="table-wrapper-scroll-y my-custom-scrollbar">
  <h1 class="text-center">Hobbies</h1>
  <table class="table table-striped mb-0 header-fixed">
    <thead id="headX" class="thead">
      <tr>
        <th scope="col">Name</th>
        <th scope="col">URL</th>
        <th> Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
    @foreach($hobbies as $data)     
      <tr>
        <td>{{$data->name}}</td>
        <td>{{$data->url}}</td>
        <td><a href="{{ route('hobbies.update', $data) }}" class="btn-warning circle-table"><i class="fas fa-pen"></i></a></td>
        <td><a href="{{ route('hobbies.destroy', $data) }}" onclick="return confirm('Seugas')" class="btn-danger circle-table"><i class="fas fa-trash"></i></a></td>
      </tr>

      @endforeach
    </tbody>
  </table>
  {{ $hobbies ?? ''->links() }}
</div>
@endif
@endsection
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    setTimeout(function() {
        $(".alert").fadeOut(1500);
    },3000);
});
</script>