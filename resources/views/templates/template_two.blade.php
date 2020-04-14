@extends('layouts.app')
@section('content')
<link href="{{ asset('css/template_two.css') }}" rel="stylesheet">
<body>
<div class="backAndNext">
<a class="btn btn-success animated pulse" href="{{ route('template_one')}}" id="btnBack"><i class="fas fa-hand-point-left"></i> Back</a>
<a class="btn btn-success " href="{{ route('templates')}}" id="btnBack">Templates</a>
<a class="btn btn-success animated pulse" href="{{ route('template_one')}}" id="btnBack"> Next <i class="far fa-hand-point-right"></i></a>
</div>
<div class="sendAndDowload">
    <form action="" method="post">
            <label for="" id="email">Email:</label>
            <input type="email" id="inputEmail" required ="true">
            <button class="btn btn-success animated pulse" id="sendAndDownload">Send by email <i class="fas fa-paper-plane"></i></button>
    </form>
    <form action="">
        <button class="btn btn-success animated pulse" href="" id="sendAndDownload">Download PDF <i class="fas fa-file-pdf"></i></button>
    </form>
</div>
    <div id="page-wrap">
    
        <img src="../background/email.jpg" id="pic" />
    
        <div id="contact-info" class="vcard">
        
            <!-- Microformats! -->
        
            <h1 class="fn">C'thulhu</h1>
        
            <p>
                Cell: <span class="tel">555-666-7777</span><br />
                Email: <a class="email" href="mailto:greatoldone@lovecraft.com">greatoldone@lovecraft.com</a>
            </p>
        </div>
                
        <div id="objective">
            <p>
                I am an outgoing and energetic (ask anybody) young professional, seeking a 
                career that fits my professional skills, personality, and murderous tendencies. 
                My squid-like head is a masterful problem solver and inspires fear in who gaze upon it. 
                I can bring world domination to your organization. 
            </p>
        </div>
        
        <div class="clear"></div>
        
        <dl>
            <dd class="clear"></dd>
            
            <dt>Education</dt>
            <dd>
                <h2>Withering Madness University - Planet Vhoorl</h2>
                <p><strong>Major:</strong> Public Relations<br />
                   <strong>Minor:</strong> Scale Tending</p>
            </dd>
            
            <dd class="clear"></dd>
            
            <dt>Skills</dt>
            <dd>
                <h2>Office skills</h2>
                <p>Office and records management, database administration, event organization, customer support, travel coordination</p>
                
                <h2>Computer skills</h2>
                <p>Microsoft productivity software (Word, Excel, etc), Adobe Creative Suite, Windows</p>
            </dd>
            
            <dd class="clear"></dd>
            
            <dt>Experience</dt>
            <dd>
                <h2>Doomsday Cult <span>Leader/Overlord - Baton Rogue, LA - 1926-2010</span></h2>
                <ul>
                    <li>Inspired and won highest peasant death competition among servants</li>
                    <li>Helped coordinate managers to grow cult following</li>
                    <li>Provided untimely deaths to all who opposed</li>
                </ul>
                
                <h2>The Watering Hole <span>Bartender/Server - Milwaukee, WI - 2009</span></h2>
                <ul>
                    <li>Worked on grass-roots promotional campaigns</li>
                    <li>Reduced theft and property damage percentages</li>
                    <li>Janitorial work, Laundry</li>
                </ul> 
            </dd>
            
            <dd class="clear"></dd>
            
            <dt>Hobbies</dt>
            <dd>World Domination, Deep Sea Diving, Murder Most Foul</dd>
            
            <dd class="clear"></dd>
            
            <dt>References</dt>
            <dd>Available on request</dd>
            
            <dd class="clear"></dd>
        </dl>
        
        <div class="clear"></div>
    
    </div>

</body>

</html>

@endsection