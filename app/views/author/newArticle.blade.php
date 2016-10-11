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
        <div class="page-content">
            <div class="container">
                <div class="page-content-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet box">
                                
                                <div class="portlet-body form">
                                    {{Form::open(array('route'=>'store','class'=>'login-form'))}}
                                    <fieldset>
                                        <div class="form-body">
                                            <div class="form-group">
                                                {{ Form::text('title','',array('class'=>'form-control','placeholder'=>'Title','required data validation-required-message'=>'Please the title'))}}
                                                
                                            </div>
                                            <div class="form-group">
                                                {{ Form::textarea('body','',array('class'=>'form-control','placeholder'=>'Body','required data validation-required-message'=>'Please enter your text'))}}
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        
                                                        <div class="controls">
                                                            <select class="form-control" required="required">
                                                                <option>Section</option>
                                                                @foreach($cats as $cat)
                                                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                                                                @endforeach
                                                            </select>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <select class="form-control" required="required">
                                                                <option>Content Type</option>
                                                                @foreach($tags as $tag)
                                                                <option value="{{$tag->id}}">{{$tag->name}}</option>
                                                                @endforeach
                                                            </select>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn-group btn-group-solid">
                                                <button class="btn btn-warning pull-left" >Previous</button>
                                            </div>
                                           
                                                <button class="btn btn-primary" type="button">Next</button>
                                                 <div class=" pull-right">
                                                <div class="btn-group ">
                                                                <button id="btnGroupVerticalDrop5" type="button" class="btn yellow dropdown-toggle" data-toggle="dropdown"> Page(s)
                                                                <i class="fa fa-angle-down"></i>
                                                                </button>
                                                                <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop5">
                                                                    <li>
                                                                        <a href="{{url('homepage')}}"> Page1 </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"> Page 2 </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                <button class="btn btn-success  " type="button">Upload
                                                </button>
                                            {{-- </div> --}}
                                        </div>
                                    </fieldset>
                                    {{Form::close()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
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