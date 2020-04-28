@extends('layouts.app')
@section('content')
<link href="{{ asset('css/templates.css') }}" rel="stylesheet">
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="card">
            <img class="card-img-top img-fluid" id="img2" src="templatesIMG/template_one.png" alt="Card image cap">
                <div class="card-block">
                    <h4 class="card-title text-center" id="templateNumber">Light (Without image)</h4>
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
                    <h4 class="card-title text-center" id="templateNumber">Simple</h4>
                    <div class="btnView">
                        <a href="{{ route('template_two')}}" id="btn" class="btn btn-success text-center"><i class="fas fa-eye"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
            <img class="card-img-top img-fluid" id="img2" src="templatesIMG/t3.png" alt="Card image cap">
                <div class="card-block">
                    <h4 class="card-title text-center" id="templateNumber">Black and white</h4>
                    <div class="btnView">
                        <a href="{{ route('template_three')}}" id="btn" class="btn btn-success text-center"><i class="fas fa-eye"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
            <img class="card-img-top img-fluid" id="img2" src="templatesIMG/t4.png" alt="Card image cap">
                <div class="card-block">
                    <h4 class="card-title text-center" id="templateNumber">Dark violet</h4>
                    <div class="btnView">
                        <a href="{{ route('template_four')}}" id="btn" class="btn btn-success text-center"><i class="fas fa-eye"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
            <img class="card-img-top img-fluid" id="img2" src="templatesIMG/t5.png" alt="Card image cap">
                <div class="card-block">
                    <h4 class="card-title text-center" id="templateNumber">Green (Without image)</h4>
                    <div class="btnView">
                        <a href="{{ route('template_five')}}" id="btn" class="btn btn-success text-center"><i class="fas fa-eye"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
            <img class="card-img-top img-fluid" id="img2" src="templatesIMG/t3.png" alt="Card image cap">
                <div class="card-block">
                    <h4 class="card-title text-center" id="templateNumber">Table</h4>
                    <div class="btnView">
                        <a href="{{ route('template_six')}}" id="btn" class="btn btn-success text-center"><i class="fas fa-eye"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
            <img class="card-img-top img-fluid" id="img2" src="templatesIMG/t3.png" alt="Card image cap">
                <div class="card-block">
                    <h4 class="card-title text-center" id="templateNumber">Table</h4>
                    <div class="btnView">
                        <a href="{{ route('template_three')}}" id="btn" class="btn btn-success text-center"><i class="fas fa-eye"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
            <img class="card-img-top img-fluid" id="img2" src="templatesIMG/t3.png" alt="Card image cap">
                <div class="card-block">
                    <h4 class="card-title text-center" id="templateNumber">Table</h4>
                    <div class="btnView">
                        <a href="{{ route('template_three')}}" id="btn" class="btn btn-success text-center"><i class="fas fa-eye"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection