
<head>
<link href="{{ public_path('css/template_one.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/template_one.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<div id="doc2" class="yui-t7">

		<div id="inner">
			<div id="hd">
				<div class="yui-gc">
					<div class="yui-u first">
						@if(sizeof($information) != 0)
							<h1 id="nameUser">{{$information[0]['name_user']." ".$information[0]['middle_name']." ". $information[0]['last_name'] }}</h1>
							<h2 id="positionUser">{{$information[0]['position_user']}}</h2>
							<h2 id="titleI">About</h2>
							<h3 id="variables">Location: {{$information[0]['location_user']}}</h3>
							<h3 id="variables">About me: {{$information[0]['about_you']}}</h3>
							<h3 id="variables">Birth year: {{$information[0]['birth']}}</h3>
						@endif
					</div>

					<div class="yui-u">
						<div class="contact-info">
						<h2>Contact</h2>
						@if(sizeof($contact) != 0)
							<h3 id="variables">Email: {{$contact[0]['email']}}</h3>
							<h3 id="variables" >Telephone number: {{$contact[0]['telephone']}}</h3>
							<h3 id="variables">Address: {{$contact[0]['city'] . "," . $contact[0]['street']}}</h3>
							<h3 id="variables">GIT: {{$contact[0]['github']}}</h3>
							<h3 id="variables">Website: {{$contact[0]['website']}}</h3>
						@endif
						</div><!--// .contact-info -->
					</div>
				</div><!--// .yui-gc -->
			</div><!--// hd -->

			<div id="bd">
				<div id="yui-main">
					<div class="yui-b">
						<div class="yui-gf">
							<h2 id="titleI">Skills</h2>
							<div class="yui-u">
								@if( sizeof($skills)!= 0)
								@foreach($skills as $skill)
										<div class="job">
											<h2>{{ $skill->name}}</h2>
											<h4> {{$skill->level}}</h4>
										</div>
									@endforeach
								@endif
							</div>
						</div><!--// .yui-gf -->

						<div class="yui-gf">
								<h2 id="titleI">Experience</h2>
							<div class="yui-u">
								@if( sizeof($projects)!= 0)
									@foreach($projects as $project)
										<div class="job">
											<h2>{{ $project->name }}</h2>
											<h3> {{$project->plataform }}</h3>
											<h4>{{$project->url}}</h4>
											<p>{{$project->description}}</p>
										</div>
									@endforeach
								@endif

							</div><!--// .yui-u -->
						</div><!--// .yui-gf -->
						<div class="yui-gf">
								<h2 id="titleI">Companys</h2>
							<div class="yui-u">
								@if( sizeof($companys)!= 0)
									@foreach($companys as $company)
										<div class="job">
											<h2>{{ $company->name }}</h2>
											<h3> {{$company->position }}</h3>
											<h4>{{$company->time_start. "/".$company->time_final}}</h4>
											<h3>{{$company->description}}</h3>
											<h3>{{$company->website}}</h3>
										</div>
									@endforeach
								@endif

							</div><!--// .yui-u -->
						</div><!--// .yui-gf -->

						<div class="yui-gf last">
								<h2 id="titleI">Education</h2>
							<div class="yui-u">
								@if(sizeof($degrees) != 0)
									@foreach($degrees as $degree)	
										<h2>Degree: {{$degree->name}}</h2>
										<h3>{{$degree->description}} &mdash; <strong>Start:{{$degree->time_final . "  Conclude:" .$degree->time_start}}</strong> </h3>
										<h3>{{$degree->website}}</h3>
									@endforeach	
								@endif
							</div>
						</div><!--// .yui-gf -->
						<div class="yui-gf last">
							<h2 id="titleI">Contributions</h2>
							<div class="yui-u" id="contributions">
								@if(sizeof($contributions) != 0)
									@foreach($contributions as $contribution)	
									<div id="contri">
										<h2>Contribution: {{$contribution->name}}</h2>
										<h3>{{$contribution->description}}</h3>
										<h3>{{$contribution->url}}</h3>
									</div>	
									@endforeach	
								@endif
							</div>
						</div><!--// .yui-gf -->
						<div class="yui-gf last">
								<h2 id="titleI">Hobbies</h2>
							<div class="yui-u" id="contributions">
								@if(sizeof($hobbies) != 0)
									@foreach($hobbies as $hobbie)	
									<div id="contri">
										<h2>Hobbie: {{$hobbie->name}}</h2>
										<h3>URL: {{$hobbie->url}}</h3>
									</div>	
									@endforeach	
								@endif
							</div>
						</div><!--// .yui-gf -->

					</div><!--// .yui-b -->
				</div><!--// yui-main -->
			</div><!--// bd -->

			<div id="ft">
			</div><!--// footer -->

		</div><!-- // inner -->


	</div><!--// doc -->

</body>


