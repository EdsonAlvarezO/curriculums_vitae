@extends('layouts.app')
@section('content')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
<div  class="container-fluid">
            <div class="row">
                <div class="col-sm-3">
                    <div class="nav-side-menu">
                        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
                        <div class="menu-list">
                            <ul id="menu-content" class="menu-content collapse out">
                                <li class="text-center" id="titleMenu">
                                    <a href="{{ route('personal') }}"> 
                                      About me
                                    </a>
                                </li>
                                <li class="text-center">
                                    
                                    <a href="{{ route('contact') }}"> 
                                        Contact
                                    </a>
                                </li>
                                <li class="text-center">
                                
                                    <a href="{{ route('projects') }}">
                                         Projects
                                    </a>
                                </li>
                                <li class="text-center">
                                    <a href="{{ route('contributions') }}">
                                        Contributions
                                    </a>
                                </li>
                                <li class="text-center">
                                    <a href="{{ route('degrees') }}">
                                        Education
                                    </a>
                                </li>
                                <li class="text-center">
                                    <a href="{{ route('hobbies') }}">
                                         Hobbies
                                    </a>
                                </li>
                                <li class="text-center">
                                    <a href="{{ route('skills') }}">
                                         Skills
                                    </a>
                                </li>
                                <li class="text-center">
                                    <a href="{{ route('companys') }}">
                                         Experience
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9 col-sm-offset-1">
                    @yield('forms')
                </div>
            </div>
        </div>
@endsection
