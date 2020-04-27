@extends('layouts.app')
@section('content')
<head>
    <link href="{{ public_path('css/template_five.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/template_five.css') }}" rel="stylesheet">
</head>
<body>
    <div id="all">
        <div class="backAndNext">
            <a class="btn btn-success" href="{{ route('template_four')}}" id="btnBack"><i class="fas fa-hand-point-left"></i></a>
            <a class="btn btn-success " href="{{ route('templates')}}" id="btnAllTemplates">Templates</a>
            <a class="btn btn-success" href="{{ route('template_five')}}" id="btnBack"><i class="fas fa-hand-point-right"></i></a>
        </div>
        <div class="sendAndDowload">
            <form action="" method="post">
                    <label for="" id="email">Email:</label>
                    <input type="email" id="inputEmail" required ="true">
                    <button class="btn btn-success animated pulse" id="sendAndDownload">Send by email <i class="fas fa-paper-plane"></i></button>
            </form>
            <form action="{{ route('descargar' , 5)}}">
                <button class="btn btn-success animated pulse" href="" id="sendAndDownload">Download PDF <i class="fas fa-file-pdf"></i></button>
            </form>
        </div>
        <div class=" myContainerF">
            <div id="info">
                <div id="infoContact">
                    <div class="inContac">
                        @if(sizeof($information) != 0)
                                <h1 class="fn">{{$information[0]['name_user']." ".$information[0]['middle_name']." ". $information[0]['last_name'] }}</h1>
                                <h1 id="position">{{$information[0]['position_user']}}</h1><br>
                                <p class="tel">
                                    Location: <span></span>{{$information[0]['location_user']}}</span><br>
                                    Year of birth: <span></span>{{$information[0]['birth']}}</span><br>
                                    @if(sizeof($contact) != 0)
                                        Email: <span class="tel">{{$contact[0]['email']}}</span><br />
                                        Cell: <span class="tel">{{$contact[0]['telephone']}}</span><br />
                                        Address: <span class="tel">{{$contact[0]['city'] . "," . $contact[0]['street']}}</span><br />
                                        Github: <span class="tel">{{$contact[0]['github']}}</span><br />
                                        Website: <span class="tel">{{$contact[0]['website']}}</span><br>
                                        About me: <span class="tel">{{$information[0]['about_you']}}</span>
                                    @endif
                                    
                                </p>
                         @endif
                    </div>
                </div>
                <div id="education">
                    <h2 id="education">Education</h2>
                    <div class="inEducation">
                             @if(sizeof($degrees) != 0)
                                @foreach($degrees as $degree)	
                                <div id="asda">
                                    <h2>Degree: {{$degree->name}}</h2>
                                    <p>{{$degree->description}} &mdash; <strong>Start:{{$degree->time_final . "  Conclude:" .$degree->time_start}}</strong> </p>
                                    <p>{{$degree->website}}</p>
                                </div>    
                                @endforeach	
                            @endif
                    </div>
                </div>
                <div id="education">
                    <h2 id="education">Hobbies</h2>
                    <div class="inEducation">
                                 @if(sizeof($hobbies) != 0)
                                    @foreach($hobbies as $hobbie)
                                        <div id="asda">
                                            <h2 id="hobbieName">{{$hobbie->name }}</h2>
                                            <h2 id="hobbieURL">{{$hobbie->url}}</h2>
                                        </div>
                                    @endforeach
                                @endif
                    </div>
                </div>
                <div id="education">
                    <h2 id="education">Companys</h2>
                    <div class="inEducation">
                                @if( sizeof($companys)!= 0)
									@foreach($companys as $company)
                                        <div id="asda">
                                        <h2>{{ $company->name }}</h2>
											<h3> {{$company->position }}</h3>
											<h4>{{$company->time_start. "/".$company->time_final}}</h4>
											<h3>{{$company->description}}</h3>
											<h3>{{$company->website}}</h3>
                                        </div>
                                    @endforeach
                                @endif
                    </div>
                </div>
                <div id="education">
                    <h2 id="education">Contributions</h2>
                    <div class="inEducation">
                                @if(sizeof($contributions) != 0)
									@foreach($contributions as $contribution)
                                        <div id="asda">
                                            <h2>Contribution: {{$contribution->name}}</h2>
                                            <h3>{{$contribution->description}}</h3>
                                            <h3>{{$contribution->url}}</h3>
                                        </div>
                                    @endforeach
                                @endif
                    </div>
                </div>
                <div id="education">
                    <h2 id="education">Projects</h2>
                    <div class="inEducation">
                                @if(sizeof($projects)!= 0)
                                    @foreach($projects as $project)
                                        <div id="asda">
                                            <h2>Project: {{ $project->name }}</h2>
                                            <ul>
                                                <h5>Website: {{$project->url}}</h5>
                                                <h5>Plataform: {{$project->plataform }}</h5>
                                                <h5>Description: {{$project->description}}</h5>
                                            </ul>
                                        </div>
                                    @endforeach
                                @endif
                    </div>
                </div>
                <div id="education">
                    <h2 id="education">Skills</h2>
                    <div class="inEducation">
                                @if( sizeof($skills)!= 0)
                                    @foreach($skills as $skill)
                                    <div id="asda">
                                        <h2><strong>{{ $skill->name}}</strong></h2>
                                        <p>Me level or experience in this skill is: {{$skill->level}}</p>
                                    </div>
                                    @endforeach
                                @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection