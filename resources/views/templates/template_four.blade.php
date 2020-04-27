@extends('layouts.app')
@section('content')
    <head>
        <link href="{{ public_path('css/template_four.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/template_four.css') }}" rel="stylesheet">
    </head>
    <body>
    
        <div class="backAndNext">
            <a class="btn btn-success" href="{{ route('template_three')}}" id="btnBack"><i class="fas fa-hand-point-left"></i></a>
            <a class="btn btn-success " href="{{ route('templates')}}" id="btnAllTemplates">Templates</a>
            <a class="btn btn-success" href="{{ route('template_five')}}" id="btnBack"><i class="fas fa-hand-point-right"></i></a>
        </div>

        <div id="all">
        <div class="sendAndDowload">
            <form action="" method="post">
                    <label for="" id="email">Email:</label>
                    <input type="email" id="inputEmail" required ="true">
                    <button class="btn btn-success animated pulse" id="sendAndDownload">Send by email <i class="fas fa-paper-plane"></i></button>
            </form>
            <form action="{{ route('descargar' , 4)}}">
                <button class="btn btn-success animated pulse" href="" id="sendAndDownload">Download PDF <i class="fas fa-file-pdf"></i></button>
            </form>
        </div>
        <div class=" myContainerF">
                    <div id="info">
                        @if(sizeof($images) != 0)
                            @foreach($images as $img)
                                <img src="/images_user/{{$img->url}}" alt="Image" id="pic"/>
                            @endforeach
                        @endif
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
                <div class="infoVariada">
                    <div id="education">
                        <h2 id="up">Education</h2>
                            <div id="inEducation">
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
                    <div id="skills">
                        <h2 id="up">Skills</h2>
                            <div id="inSkills">
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
                    <div id="skills">
                        <h2 id="up">Experience</h2>
                            <div id="inSkills">
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
                    <div id="skills">
                        <h2 id="up">Hobbies</h2>
                            <div id="inSkills">
                                @if(sizeof($hobbies) != 0)
                                    @foreach($hobbies as $hobbie)
                                        <div id="asda">
                                            <h2>{{$hobbie->name }}</h2>
                                            <h2>{{$hobbie->url}}</h2>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                    </div>
                    <div id="skills">
                        <h2 id="up">Companys</h2>
                            <div id="inSkills">
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
                    <div id="skills">
                        <h2 id="up">Contributions</h2>
                            <div id="inSkills">
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
                </div>
                <div id="fin">
                    
                </div>
        </div>
    </div>
    </body>
@endsection