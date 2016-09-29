<!DOCTYPE html>

<html lang="en">
    
   <!-- BEGIN HEAD -->

   @include('layouts.head')

   @section('body')

    <body class=" login">
         <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <div class="navbar-header page-scroll">
               
                <a href="#" class="navbar-brand page-scroll">BRANDOSCOPE</a>
            </div>
            <div  class="collapse navbar-collapse">
            </div>
            <!-- end .navbar collapse -->
            <!-- en container fluid -->
        </div>
       </nav>
       <br>
       <br>
       <br>

        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            {{-- <form class="login-form" action="index.html" method="post"> --}}
                 {{Form::open(array('route'=>'authenticate','class'=>'login-form'))}}
                <fieldset>
                <h3 class="form-title">Login to your account</h3>
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> Enter your email and password. </span>
                </div>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">E-mail</label>
                    <div class="input-icon">
                        <i class="fa fa-user"></i>
                    
                         {{ Form::email('email','',array('class'=>'form-control','placeholder'=>'Email','required data validation-required-message'=>'Please enter your email'))}}
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <div class="input-icon">
                        <i class="fa fa-lock"></i>
                       
                         {{ Form::password('password',array('class'=>'form-control','placeholder'=>'Password','required data validation-required-message'=>'Please enter a valid password'))}}
                    </div>
                </div>
                <div class="form-actions">
                    <label class="rememberme mt-checkbox mt-checkbox-outline">
                        <input type="checkbox" name="remember" value="1" /> Remember me
                        <span></span>
                    </label>
                    <button type="submit" class="btn green pull-right"> Login </button>
                   {{--  {{link_to_route('authenticate','Login','',array('class'=>'btn btn-warning'))}} --}}
                </div>
                <div class="login-options">
                    <h4>Or login with</h4>
                    <ul class="social-icons">
                        <li>
                            <a class="facebook" data-original-title="facebook" href="#"> </a>
                        </li>
                        <li>
                            <a class="twitter" data-original-title="Twitter" href="#"> </a>
                        </li>
                        <li>
                            <a class="googleplus" data-original-title="Goole Plus" href="#"> </a>
                        </li>
                        <li>
                            <a class="linkedin" data-original-title="Linkedin" href="#"> </a>
                        </li>
                    </ul>
                </div>
                <div class="forget-password">
                    <h4>Forgot your password ?</h4>
                    <p> no worries, click
                        <a href="#" id="forget-password"> here </a> to reset your password. </p>
                </div>
                <div class="create-account">
                    <p> Don't have an account yet ?&nbsp;
                        <a href="#" id="register-btn"> Create an account </a>
                    </p>
                </div>
            {{-- </form> --}}
        </fieldset>
        {{Form::close()}}
            <!-- END LOGIN FORM -->
           
        <!-- END LOGIN -->
        <!-- BEGIN COPYRIGHT -->
        <div class="copyright"> 2016 &copy; ROBOTICS SYSTEM - BRANDOSOPE. </div>
        <!-- END COPYRIGHT -->
      <!--[if lt IE 9]>
{{ HTML::script("../assets/global/plugins/respond.min.js")}}
{{ HTML::script("../assets/global/plugins/excanvas.min.js")}}
{{ HTML::script("../assets/global/plugins/ie8.fix.min.js")}}
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        {{ HTML::script("../assets/global/plugins/jquery.min.js")}}
        {{ HTML::script("../assets/global/plugins/bootstrap/js/bootstrap.min.js")}}
        {{ HTML::script("../assets/global/plugins/js.cookie.min.js")}}
        {{ HTML::script("../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js")}}
        {{ HTML::script("../assets/global/plugins/jquery.blockui.min.js" )}}
        {{ HTML::script("../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js")}}

        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        {{ HTML::script("../assets/global/scripts/app.min.js")}}
        
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        {{ HTML::script("../assets/layouts/layout3/scripts/layout.min.js")}}
        {{ HTML::script("../assets/layouts/layout3/scripts/demo.min.js")}}
        {{ HTML::script("../assets/layouts/global/scripts/quick-sidebar.min.js")}}
        {{ HTML::script("../assets/layouts/global/scripts/quick-nav.min.js")}}
        
        <!-- END THEME LAYOUT SCRIPTS -->
          <!-- BEGIN PAGE LEVEL SCRIPTS -->
       {{ HTML::script("../assets/pages/scripts/login.min.js")}}
       {{ HTML::script("../assets/pages/scripts/jquery.min.js")}}
        <!-- END PAGE LEVEL SCRIPTS -->
    </body>

