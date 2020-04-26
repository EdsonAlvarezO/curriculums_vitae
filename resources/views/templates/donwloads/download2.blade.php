<link href="{{ public_path('css/template_two.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/template_two.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div id="page-wrap">

         @if(sizeof($images) != 0)
            @foreach($images as $img)
                <img src="{{url('/images_user/$img->url')}}" alt="Image" id="pic"/>
            @endforeach
        @endif
        <div id="contact-info" class="vcard">
        
            <!-- Microformats! -->
            @if(sizeof($information) != 0)
                <h1 class="fn">{{$information[0]['name_user']." ".$information[0]['middle_name']." ". $information[0]['last_name'] }}</h1>
            
                <p>
                    Position: <span></span>{{$information[0]['position_user']}}</span><br>
                    Location: <span></span>{{$information[0]['location_user']}}</span><br>
                    Year of birth: <span></span>{{$information[0]['birth']}}</span><br>
                    @if(sizeof($contact) != 0)
                        Email: <span class="tel">{{$contact[0]['email']}}</span><br />
                        Cell: <span class="tel">{{$contact[0]['telephone']}}</span><br />
                        Address: <span class="tel">{{$contact[0]['city'] . "," . $contact[0]['street']}}</span><br />
                        Github: <span class="tel">{{$contact[0]['github']}}</span><br />
                        Website: <span class="tel">{{$contact[0]['website']}}</span>
					@endif
                </p>
            @endif
        </div>
                
        <div id="objective">
            <p>
                About me: {{$information[0]['about_you']}}
            </p>
        </div>
        
        <div class="clear"></div>
        
        <dl>
            <dd class="clear"></dd>
            
            <dt>Education</dt>
            <dd>
                @if(sizeof($degrees) != 0)
                    @foreach($degrees as $degree)	
                    <div id="asda">
						<h2>Degree: {{$degree->name}}</h2>
						<p>{{$degree->description}} &mdash; <strong>Start:{{$degree->time_final . "  Conclude:" .$degree->time_start}}</strong> </p>
                        <p>{{$degree->website}}</p>
                    </div>    
					@endforeach	
				@endif
            </dd>
            
            <dd class="clear"></dd>
            
            <dt>Skills</dt>
            <dd>
            @if( sizeof($skills)!= 0)
                @foreach($skills as $skill)
                <h2><strong>{{ $skill->name}}</strong></h2>
                    <p>Me level or experience in this skill is: {{$skill->level}}</p>
			    @endforeach
			@endif
            </dd>
            
            <dd class="clear"></dd>
            
            <dt>Experience</dt>
            <dd>
            @if( sizeof($projects)!= 0)
                @foreach($projects as $project)
                <h2>{{ $project->name }} <span><a>{{$project->url}}</a></span></h2>
                <ul>
                    <li>Plataform: {{$project->plataform }}</li>
                    <li>Description: {{$project->description}}</li>
                </ul>
				@endforeach
			@endif
            </dd>
            
            <dd class="clear"></dd>
            
            <dt>Hobbies</dt>
                <dd>
                    @if(sizeof($hobbies) != 0)
                        @foreach($hobbies as $hobbie)
                        <ul>
                           <li><h2>{{$hobbie->name }} <span><a>{{$hobbie->url}}</a></span></h2></li>
                        </ul>    
                        @endforeach	
                    @endif
                </dd>
            <dd class="clear"></dd>
            
            <dt>Contributions</dt>
            <dd>
                @if(sizeof($contributions) != 0)
                    @foreach($contributions as $contribution)	
                    <div id="asda">
						<h2>Contribution: {{$contribution->name}}</h2>
						<p>{{$contribution->description}} &mdash; <strong>{{$contribution->url}}</strong> </p>
                    </div>
					@endforeach	
				@endif    

            </dd>
            
            <dd class="clear"></dd>

            <dt>Companys</dt>
            <dd>
            @if( sizeof($companys)!= 0)
                @foreach($companys as $company)
                <div id="asda">
                    <h2>{{ $company->name }}</h2>
                    <h2> {{$company->position }}</h2>
                    <p>{{$company->description}} &mdash; <strong>{{$company->time_start. "/".$company->time_final}}</strong> </p>
                    <h2>{{$company->website}}</h2>
				@endforeach
			@endif   

            </dd>
            
            <dd class="clear"></dd>

        </dl>
        
        <div class="clear"></div>
    
    </div>

</body>