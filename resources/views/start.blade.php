@extends('layouts.app')
@section('content')
<link href="{{ asset('css/start.css') }}" rel="stylesheet">
<body>
<div class="main section2" id="sections">
    <div id="secTwo" >
      <h2 class="animated bounceInLeft" id="titleTwo">Register</h2>
      <h2 class="animated bounceInLeft" id="titleTwo">You can register free and easy</h2>
      <div id="registerA">
          <a class="animated pulse" href="{{ route('register')}}" id="registerEn">Click here to go to registration</a>
      </div>
    </div> 
</div>
<div class="main section3" id="section3">
  <div id="secTwo" >
    <h2 class="animated bounceInLeft" id="titleThree">Curriculum vitae</h2>
    <h2 class="animated bounceInLeft" id="titleThree">Build you Curriculum vitae</h2>
    <div id="registerA">
      <a href="#section1" class="animated pulse" id="registerEn">Click here for make you currilum vitae</a>
    </div>
  </div>
</div>
<div class="main section3" id="sections">
    <div id="secTwo" >
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <img src="background/pdf.png" alt="">
            </div>
            <div class="col-sm-8">
              <h2 class="animated bounceInLeft" id="titleFour">Pdf CV Templates</h2>
              <h2 class="animated bounceInLeft" id="titleFour">Build To Stand Out
                Within our online CV builder, candidates can choose among different designs to create their PDF CV version
              </h2>
              <div id="registerA">
                  <a href="{{route('personal')}}" class="animated pulse" id="registerCV">Build your CV now</a>
              </div>
            </div>
        </div>
      </div>
    </div>
</div>
<div class="main section3" id="section4">
    <div id="secTwo" >
        <div class="container">
          <div class="row">
            <div class="col-sm-4" id="msg">
              <h2 class="animated bounceInLeft" id="titleFive">Send your resume by email</h2>
              <h2 class="animated bounceInLeft" id="titleFive">
                Complete your curriculum vitae, choose the design you want and send it by email to any of your friends, companies, schools ...
              </h2>
              <div id="registerA">
                  <a href="{{route('personal')}}" class="animated pulse" id="registerEn">Build your CV now</a>
              </div>
            </div>
            <div class="col-sm-8">
              <img src="background/email.png" id="myimage" alt="">
            </div>
        </div>
      </div>
    </div>
</div>
</body>
<h1 id="derechos">© Copyrights © 2020 Todos los derechos reservados por Edson Alvarez</h1>
@endsection
