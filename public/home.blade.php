<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>O T M S | Online Temperature Monitoring System</title>
<link rel="stylesheet" href="css/foundation.css" />
<script src="js/vendor/modernizr.js"></script>
</head>
<body>
<nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area">
        <li class="name"><h1><a href="{{URL::route('home')}}">O T M S</a></h1></li>
        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
    </ul>

    <section class="top-bar-section">
        <ul class="right">
            <li><a href="{{URL::route('testdash')}}">Dash Board</a></li>

            <li ><a href="">Reports</a></li>
            <li class="has-dropdown"><a href="#">Add Device</a>
                <ul class="dropdown">
                    <li><a href="{{URL::route('adddevice')}}">Control Unit</a></li>
                    <li><a href="{{URL::route('add')}}">Sensor Unit</a></li>
                </ul>
            </li>

            <li class="has-dropdown"><a href="#">Settings</a>
                <ul class="dropdown">
                    <li><a href="{{URL::route('timeset')}}">Add Settings</a></li>
                     <li class="divider"></li>
                     <li><label>Change Settings</label></li>
                        <li><a href="{{URL::route('timevw')}}">Time Settings</a></li>
                        <li><a href="{{URL::route('devset1')}}">Device Settings</a></li>
                        {{-- <li><a href="{{URL::route('editrange1')}}">Temperature Settings</a></li> --}}
                        <li><a href="{{URL::route('sample1')}}">Temperature Settings</a></li>

                    </li>
                </ul>
            </li>
            <li><a href="{{URL::route('logout')}}">Logout</a></li>
        </ul>
    </section>
</nav>

{{--             <div class="main-content">
             <center>
                <h2>Welcome to OTMS</h2>
                <p><h6>Online Temperature Monitoring System</h6></p>
                </center>

        </div> --}}
  @yield('content')
   <!--  <div class="footer-section">
           <div class="row">
               <div class="small-12 medium-12 large-12">
                   <p>Powered by <a href="http://www.technowellservices.com">Technowell Services Pvt. Ltd.</a> &copy; Copyright 2014</p>
               </div>
           </div>
       </div> -->

<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script>
$(document).foundation();
</script>
</body>
</html>

