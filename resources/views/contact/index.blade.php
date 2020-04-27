@extends('home')

@section('forms')
<link href="{{ asset('css/contact.css') }}" rel="stylesheet">
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
@if(sizeof($contact) != 0 )
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Email</th>
        <th scope="col">Telephone</th>
        <th scope="col">Street</th>
        <th scope="col">City</th>
        <th scope="col">Website</th>
        <th scope="col">Github</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
    @foreach($contact as $data)
        <tr id="tds">
            <td>{{$data->email}}</td>
            <td>{{$data->telephone}}</td>
            <td>{{$data->street}}</td>
            <td>{{$data->city}}</td>
            <td>{{$data->website}}</td>
            <td>{{$data->github}}</td>
            <td><a href="{{ route('contact.update', $data) }}" class="btn btn-secondary btn-sm"><i class="fas fa-edit"></i>Update</a></td>
            <td><a href="{{ route('contact.destroy', $data) }}" onclick="return confirm('Are you sure you want to delete this information?')" class="btn btn-danger btn-sm">
            <i class="fas fa-trash"></i>Delete
            </a></td>
        </tr>
      @endforeach
    </tbody>
  </table>
  @else
  <div>
    @yield('formUpdate')
  </div>
  <div class="container h-100">
	<div class="d-flex justify-content-center">
		<div id ="myF" class="card mt-5  animated bounceInDown myForm">
			<div class="card-header text-center">
				<h4>CONTACT CREATE</h4>
			</div>
			<div class="card-body">
                <form action="{{route('contact.create')}}" method="POST">
                    @csrf
                    <div id="dynamic_container">
                        <div class="input-group">
                            <input type="text" name="email" placeholder="Email" class="form-control"/>
                        </div>
                        <div class="input-group mt-3">
                            <input type="number" name="telephone" placeholder="Telephone Number"  class="form-control"/>
                        </div>
                        <div class="input-group mt-3">
                            <input type="text" name="street" placeholder="Street" class="form-control"/>
                        </div>
                        <div class="input-group mt-3">
                            <input type="text" name="city" placeholder="City" class="form-control "/>
                        </div>
                        <div class="input-group mt-3">
                            <textarea type="text" name="website" placeholder="Website"   class="form-control"></textarea>
                        </div>
                        <div class="input-group mt-3">
                            <textarea type="text" name="github" placeholder="Github username"  class="form-control"></textarea>
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
  @endif
  @endsection
