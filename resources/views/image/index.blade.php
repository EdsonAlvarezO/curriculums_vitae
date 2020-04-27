@extends('home')
@section('forms')
<link href="{{ asset('css/image.css') }}" rel="stylesheet">
<body>
 <div>
 </div>
<div class="containerX center">
	<div class="row">
		<div class="col-md-12">
		
			<h1 class="white">Image Profile Upload</h1>
		</div>
	</div>
	@if (session('status'))
            <div class="alert alert-danger animated bounceInDown">
              <h3 class="text-center">{{ session('status') }}</h3>
            </div>
    @endif
	<form files = "true" name="upload" action="{{route('upload')}} " method="post" enctype="multipart/form-data">
		@csrf
		<div class="row">
			<div class="col-md-6 col-md-offset-3 center">
				<div class="btn-container">
				@if(sizeof($images) != 0)
					@foreach($images as $img)
						<img id= "imageProfile" src="./images_user/{{$img->url}}" alt="">
					@endforeach
				@endif
					<h1 class="imgupload"></h1>
					<h1 class="imgupload ok"></h1>
					<h1 class="imgupload stop"></h1>
					<p id="namefile">Only pics allowed! (jpg,jpeg,bmp,png)</p>
					<input type="file" name="file">
				</div>
			</div>
		</div>
		<div class="row">			
			<div class="col-md-12">
				<button type="submit" class="btn btn-success"  id="fakebtn">Submit!</button>
			</div>
		</div>
	</form>
</div>
</body> 

@endsection
