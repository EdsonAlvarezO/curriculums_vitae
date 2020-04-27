@extends('home')
@section('forms')
<link href="{{ asset('css/personal.css') }}" rel="stylesheet">
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
  @if(sizeof($informations) != 0 )
  @foreach($informations as $data)
  
  <div class="card" id="myInfoP">
    <div class="card-body body">
      @if(sizeof($images) != 0)
        @foreach($images as $img)
          <img class="card-img-top img-fluid" id= "imgS" src="images_user/{{$img->url}}" alt="">
        @endforeach
      @endif
      <h5 class="card-title text-center">Personal Information</h5>
        <h3 class="text-center">{{$data->name_user." ". $data->middle_name ." " . $data->last_name.": ". $data->position_user}}</h3>
        <h3 class="text-center">Birth year:  {{$data->birth}}</h3>
        <h3 class="text-center">About me: {{$data->about_you}}</h3>
        <h3 class="text-center">Location: {{$data->location_user}}</h3>
        <div id="nm">
          <a href="{{ route('personal.update', $data) }}" class=" btn btn-warning circle-table card-link" ><i class="fas fa-pen"></i></a>
          <a href="{{ route('personal.destroy', $data) }}" class="btn btn-danger card-link circle-table" onclick="return confirm('Seugas')"><i class="fas fa-trash"></i></a>
        </div>
    </div>
  </div>
  @endforeach
  @else
  <div class="container h-100">
	<div class="d-flex justify-content-center">
		<div id ="myF" class="card mt-5  animated bounceInDown myForm">
			<div class="card-header text-center">
				<h4>Personal information</h4>
			</div>
			<div class="card-body">
        <div class="container">
        <div class="row">
          <div class="col-sm-4">
          <form action="{{route('personal.create')}}" method="POST">
              @csrf
              <div id="dynamic_container">
                <div class="input-group">
                  <input type="text" name="name_user" placeholder="Name" class="form-control text-center" required/>
                </div>
                <div class="input-group mt-3">
                  <input type="text" name="middle_name" placeholder="Middle name"  class="form-control text-center" required/>
                </div>
                <div class="input-group mt-3">
                  <input type="text" name="last_name" placeholder="Last name" class="form-control text-center" required/>
                </div>
                <div class="input-group mt-3">
                  <input type="text" name="birth" placeholder="Year of birth" class="form-control text-center" required/>
                </div>
                <div class="input-group mt-3">
                  <textarea type="text" name="about_you" placeholder="About me"   class="form-control text-center" required></textarea>
                </div>
                <div class="input-group mt-3">
                  <textarea type="text" name="position_user" placeholder="Position"  class="form-control text-center" required></textarea>
                </div>
                <div class="input-group mt-3 ">
                  <textarea type="text" name="location_user" placeholder="Location"  class="form-control text-center" required></textarea>
                </div>
                
                    <div class="card-footer">
                        <button class="btn btn-success btn-xl float-right submit_btn" type="submit">Create</button>
                    </div>
              </div>
            </form>
          </div>
          <div class="col-sm-4">
          <form files = "true" name="upload" action="{{route('upload')}} " method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                          <div class="col-md-6 col-md-offset-3 center">
                            <div class="btn-container">
                            @if(sizeof($images) != 0)
                              @foreach($images as $img)
                                <img id= "imageProfile" src="images_user/{{$img->url}}" alt="">
                              @endforeach
                            @endif
                              <h1 class="imgupload"></h1>
                              <h1 class="imgupload ok"></h1>
                              <h1 class="imgupload stop"></h1>
                              <p id="namefile">Only pics allowed!</p>
                              <input type="file" name="file">
                              <button type="submit" class="btn btn-success"  id="fakebtn">Submit!</button>
                            </div>
                          </div>
                        </div>
                      </form>
          </div>
        </div>   
        </div>
			</div>
		</div>
	</div>
	</dvi>
  @endif
  @endsection
