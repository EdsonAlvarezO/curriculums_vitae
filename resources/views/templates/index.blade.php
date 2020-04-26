@extends('layouts.app')
@section('content')
<link href="{{ asset('css/templates.css') }}" rel="stylesheet">
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="card">
            <img class="card-img-top img-fluid" id="img2" src="templatesIMG/template_one.png" alt="Card image cap">
                <div class="card-block">
                    <h4 class="card-title text-center" id="templateNumber">Template One</h4>
                    <div class="btnView">
                        <a href="{{ route('template_one')}}" id="btn" class="btn btn-success text-center"><i class="fas fa-eye"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
            <img class="card-img-top img-fluid" id="img2" src="templatesIMG/t2.png" alt="Card image cap">
                <div class="card-block">
                    <h4 class="card-title text-center" id="templateNumber">Template two</h4>
                    <div class="btnView">
                        <a href="{{ route('template_two')}}" id="btn" class="btn btn-success text-center"><i class="fas fa-eye"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
            <img class="card-img-top img-fluid" id ="t4" src="templatesIMG/t3.png" alt="Card image cap">
                <div class="card-block">
                    <h4 class="card-title text-center" id="templateNumber">Template three</h4>
                    <div class="btnView">
                        <a href="{{ route('template_three')}}" id="btn" class="btn btn-success text-center"><i class="fas fa-eye"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
            <img class="card-img-top img-fluid" src="templatesIMG/template_one.png" alt="Card image cap">
                <div class="card-block">
                    <h4 class="card-title text-center" id="templateNumber">Template Four</h4>
                    <div class="btnView">
                        <a href="{{ route('template_one')}}" id="btn" class="btn btn-success text-center">VIEW THIS TEMPLATE</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
            <img class="card-img-top img-fluid" src="templatesIMG/template_one.png" alt="Card image cap">
                <div class="card-block">
                    <h4 class="card-title text-center" id="templateNumber">Template One</h4>
                    <div class="btnView">
                        <a href="" id="btn" class="btn btn-success text-center">VIEW THIS TEMPLATE</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
            <img class="card-img-top img-fluid" src="templatesIMG/template_one.png" alt="Card image cap">
                <div class="card-block">
                    <h4 class="card-title text-center" id="templateNumber">Template One</h4>
                    <div class="btnView">
                        <a href="" id="btn" class="btn btn-success text-center">VIEW THIS TEMPLATE</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
            <img class="card-img-top img-fluid" src="templatesIMG/template_one.png" alt="Card image cap">
                <div class="card-block">
                    <h4 class="card-title text-center" id="templateNumber">Template One</h4>
                    <div class="btnView">
                        <a href="" id="btn" class="btn btn-success text-center">VIEW THIS TEMPLATE</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
            <img class="card-img-top img-fluid" src="templatesIMG/template_one.png" alt="Card image cap">
                <div class="card-block">
                    <h4 class="card-title text-center" id="templateNumber">Template One</h4>
                    <div class="btnView">
                        <a href="" id="btn" class="btn btn-success text-center">VIEW THIS TEMPLATE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection