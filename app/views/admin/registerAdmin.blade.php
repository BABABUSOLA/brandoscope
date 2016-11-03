<!DOCTYPE html>
<html lang="en">
    
    <!-- BEGIN HEAD -->
    @include('layouts.head')
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
        
            
            
            {{Form::open(array('route'=>'adminRegCont','class'=>'login-form'))}}
          
            <fieldset>
                
                <h4><strong> CONTINUE COMPANY REGISTRATION TO BRANDOSCOPE</strong></h4>
                <p> Enter your personal details below: </p>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">First Name</label>
                    <div class="input-icon">
                        <i class="fa fa-font"></i>
                        
                        {{ Form::text('name','',array('class'=>'form-control','placeholder'=>'Company name','required data validation-required-message'=>'Please enter your  company name'))}}
                    </div>
                </div>
               
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Email</label>
                    <div class="input-icon">
                        <i class="fa fa-envelope"></i>
                       
                        {{ Form::text('address','',array('class'=>'form-control','placeholder'=>'Company Address','required data validation-required-message'=>'Please enter your Company Address'))}}
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Phone Number</label>
                    <div class="input-icon">
                        <i class="fa fa-phone-square"></i>
                       
                        {{ Form::text('website','',array('class'=>'form-control','placeholder'=>'Company website','required data validation-required-message'=>'Please enter your  company website.'))}}
                    </div>
                </div>
                    @if(isset($userid))
                    {{Form::hidden('user_id',$userid)}}
                    @endif
               
                <div class="form-group">
                    
                    <div class="form-actions">
                        {{-- <button id="register-back-btn" type="button" class="btn red btn-outline"> Back </button> --}}
                        {{link_to_route('freepage','Back','',array('class'=>'btn red pull-left'))}}
                        {{-- <button type="submit" id="register-submit-btn" class="btn green pull-right"> Sign Up </button> --}}
                        {{Form::submit('Sign Up',array('class'=>'btn green pull-right'))}}
                    </div>
                    
               </div>
            </fieldset>
            {{Form::close()}}
            <!-- END REGISTRATION FORM -->
        </div>
        
        <!-- END LOGIN FORM -->
        
        <!-- BEGIN REGISTRATION FORM -->
        
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