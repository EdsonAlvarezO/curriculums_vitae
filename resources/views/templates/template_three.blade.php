@extends('layouts.app')
@section('content')
<head>
  <link href="{{ public_path('css/template_three.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/template_three.css') }}" rel="stylesheet">
  
</head>

<div class="backAndNext">
<a class="btn btn-success" href="{{ route('templates')}}" id="btnBack"><i class="fas fa-hand-point-left"></i> Back</a>
<a class="btn btn-success " href="{{ route('templates')}}" id="btnBack">Templates</a>
<a class="btn btn-success" href="{{ route('template_two')}}" id="btnBack"> Next <i class="fas fa-hand-point-right"></i></a>
</div>

<!DOCTYPE html>
<html lang="en">

<body data-spy="scroll" data-offset="64" data-target="#section-topbar">


  <div id="headerwrap">
    <div class="container">
      <div class="row centered">
        <div class="col-lg-12">
          <h1>William T. Kelvin</h1>
          <h3>Web Designer | contact@example.com</h3>
        </div>
        <!--/.col-lg-12 -->
      </div>
      <!--/.row -->
    </div>
    <!--/.container -->
  </div>
  <!--/.#headerwrap -->


  <section id="about" name="about">
    <div id="intro">
      <div class="container">
        <div class="row">

          <div class="col-lg-2 col-lg-offset-1">
            <h5>ABOUT</h5>
          </div>
          <div class="col-lg-6">
            <p>I'm web designer & front-end developer with 7 years of professional experience. I'm interested in all kinds of visual communication, but my major focus is on designing web, mobile & tablet interfaces. I also have skills in other fields like
              branding, icon design or web development.</p>
          </div>
          <div class="col-lg-3">
            <form action="{{ route('descargar', 3)}}">
              <button class="btn btn-success">Download<i class="icon-file"></i></button>
            </form>
          </div>

        </div>
        <!--/.row -->
      </div>
      <!--/.container -->
    </div>
    <!--/ #intro -->
  </section>


  <section id="resume" name="resume">
    <!--EDUCATION DESCRIPTION -->
    <div class="container desc">
      <div class="row">

        <div class="col-lg-2 col-lg-offset-1">
          <h5>EDUCATION</h5>
        </div>
        <div class="col-lg-6">
          <p>
            <t>Master of Web Design</t><br/> St. Patrick University <br/>
            <i>3 Years Course</i>
          </p>
        </div>
        <div class="col-lg-3">
          <p>
            <sm>GRADUATING IN MAY 2014</sm><br/>
            <imp>
              <sm>IN PROGRESS</sm>
            </imp>
          </p>
        </div>
        <div class="col-lg-2 col-lg-offset-1">
        </div>
        <div class="col-lg-6 col-lg-offset-3">
          <p>
            <t>Degree of Web Developer</t><br/> Hastings University <br/>
            <i>2 Years Course</i>
          </p>
        </div>
        <div class="col-lg-3">
          <p>
            <sm>JUNE 2012</sm>
          </p>
        </div>

      </div>
      <!--/.row -->
      <br>
      <hr>
    </div>
    <!--/.container -->
  </section>
  <div class="container desc">
    <div class="row">

      <div class="col-lg-2 col-lg-offset-1">
        <h5>WORK</h5>
      </div>
      <div class="col-lg-6">
        <p>
          <t>Front-end Developer</t><br/> Example Corp. <br/>
        </p>
        <p>
          <more>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</more>
        </p>
      </div>
      <div class="col-lg-3">
        <p>
          <sm>AUGUST 2012 - CURRENT</sm>
        </p>
      </div>
      <div class="col-lg-2 col-lg-offset-1">
      </div>
      <div class="col-lg-6">
        <p>
          <t>Web Designer - Intern</t><br/> Onassis Ltd. <br/>
        </p>
        <p>
          <more>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</more>
        </p>
      </div>
      <div class="col-lg-3">
        <p>
          <sm>JUNE 2010 - JULY 2012</sm>
        </p>
      </div>
    </div>
    <!--/.row -->
    <br>
    <hr>
  </div>
  <!--/.container -->


  <!--AWARDS DESCRIPTION -->
  <div class="container desc">
    <div class="row">
      <div class="col-lg-2 col-lg-offset-1">
        <h5>AWARDS</h5>
      </div>
      <div class="col-lg-6">
        <p>
          <t>Best Web Design</t><br/> Example Site <br/>
        </p>
      </div>
      <div class="col-lg-3">
        <p>
          <sm>NOVEMBER 2013</sm>
        </p>
      </div>
      <div class="col-lg-2 col-lg-offset-1">
      </div>
      <div class="col-lg-6 col-lg-offset-3">
        <p>
          <t>Designer of the Year</t><br/> Awwwards Site
        </p>
        <p>
          <more>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</more>
        </p>
      </div>
      <div class="col-lg-3">
        <p>
          <sm>2013</sm>
        </p>
      </div>

    </div>
    <!--/.row -->
    <br>
  </div>
  <!--/.container -->


  <!--SKILLS DESCRIPTION -->
  <div id="skillswrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-lg-offset-1">
          <h5>SKILLS</h5>
        </div>
        <div class="col-lg-3 centered">
          <canvas id="javascript" height="130" width="130"></canvas>
          <p>Javascript</p>
          <br>
        </div>
        <div class="col-lg-3 centered">
          <canvas id="bootstrap" height="130" width="130"></canvas>
          <p>Bootstrap</p>
          <br>
        </div>
        <div class="col-lg-3 centered">
          <canvas id="wordpress" height="130" width="130"></canvas>
          <p>Wordpress</p>
          <br>
        </div>

        <div class="col-lg-3 col-lg-offset-3 centered">
          <canvas id="html" height="130" width="130"></canvas>
          <p>HTML/CSS</p>
          <br>
        </div>
        <div class="col-lg-3 centered">
          <canvas id="photoshop" height="130" width="130"></canvas>
          <p>Photoshop</p>
          <br>
        </div>
        <div class="col-lg-3 centered">
          <canvas id="illustrator" height="130" width="130"></canvas>
          <p>Illustrator</p>
          <br>
        </div>

      </div>
      <!--/.row -->
      <br>
    </div>
    <!--/.container -->
  </div>
  <!--/ #skillswrap -->



  <section id="work" name="work">
    <!--PORTFOLIO DESCRIPTION -->
    <div class="container desc">
      <div class="row">
        <div class="col-lg-2 col-lg-offset-1">
          <h5>PORTFOLIO</h5>
        </div>
        <div class="col-lg-3">
          <p>CANALS OF ENGLAND</p>
          <p>
            <more>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br/><br/>
              <sm><i class="icon-tag"></i> design</sm>
            </more>
          </p>
        </div>
        <div class="col-lg-3">
          <p>SANKEY</p>
          <p>
            <more>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br/><br/>
              <sm><i class="icon-tag"></i> front-end</sm>
            </more>
          </p>
        </div>
        <div class="col-lg-3">
          <p>WE GROW</p>
          <p>
            <more>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br/><br/>
              <sm><i class="icon-tag"></i> web design</sm>
            </more>
          </p>
        </div>

      </div>
      <!--/.row -->
      <br>
      <br>
    </div>
    <!--/.container -->
  </section>

  <section id="contact" name="contact">
    <!--FOOTER DESCRIPTION -->
    <div id="footwrap">
      <div class="container">
        <div class="row">

          <div class="col-lg-2" id="contact">
            <h5>CONTACT</h5>
          </div>
          <div class="col-lg-4">
            <p>
              <t>Email</t><br/> contact@example.com <br/>
            </p>
            <p>
              <t>Adress</t><br/> Some Ave. 987 <br/> Postal 23892 <br/> London, England. <br/>
            </p>
            <p>
              <t>Phone</t><br/> +55 8933-2383 <br/>
            </p>
            <p>
              <t>Social Links</t><br/>
              <a href="#"><i class="fa fa-dribbble"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-linkedin"></i></a>
              <a href="#"><i class="fa fa-apple"></i></a>
            </p>
          </div>
        </div>
        <!--/.row -->
      </div>
      <!--/.container -->
    </div>
    <!--/ #footer -->
  </section>

 

</body>
</html>


@endsection