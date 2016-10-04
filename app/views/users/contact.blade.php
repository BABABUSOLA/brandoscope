@extends('layouts.masterAdminHome')


@section('body')



    <body class="page-container-bg-solid">
        <div class="page-wrapper">
            <div class="page-wrapper-row">
                <div class="page-wrapper-top">
                    <!-- BEGIN HEADER -->
                    <div class="page-header">
                        <!-- BEGIN HEADER TOP -->
                        <div class="page-header-top">
                            <div class="container">
                                <div class="page-logo font-blue-steel" style="font-size:30px; padding-top:10px;">
                                        <strong>BRANDOSCOPE</strong>
                                    </div>
                               
                                <!-- BEGIN TOP NAVIGATION MENU -->
                                <div class="top-menu">
                                   
                                    {{link_to_route('register','SIGN UP','',array('class'=>'btn blue-steel'))}}
                                  
                                    {{link_to_route('login','LOGIN','',array('class'=>'btn blue-oleo'))}}
                                      
                                </div>
                                <!-- END TOP NAVIGATION MENU -->
                            </div>
                        </div>
                        <!-- END HEADER TOP -->
                        <!-- BEGIN HEADER MENU -->
                        <div class="page-header-menu">
                            <div class="container">
                               
                                <!-- END HEADER SEARCH BOX -->
                                
                                <div class="hor-menu  ">
                                    <ul class="nav navbar-nav">
                                        <li class="menu-dropdown ">
                                            <a href="#"> HOME
                                                <span class="arrow"></span>
                                            </a>
                                         
                                        </li>
                                        <li class="menu-dropdown ">
                                            <a href="#"> ABOUT
                                                <span class="arrow"></span>
                                            </a>
                                            
                                        </li>
                                        <li class="menu-dropdown">
                                            <a href="#"> CONTACTS
                                                <span class="arrow"></span>
                                            </a>
                                            
                                        </li>
                                        <li class="menu-dropdown ">
                                            <a href="#"> SERVICES
                                                <span class="arrow"></span>
                                            </a>
                                           
                                        </li>
                                       
                                </div>
                                <!-- END MEGA MENU -->
                            </div>
                        </div>
                        <!-- END HEADER MENU -->
                    </div>
                    <!-- END HEADER -->
                </div>
            </div>
            <div class="page-wrapper-row full-height">
                <div class="page-wrapper-middle">
                    <!-- BEGIN CONTAINER -->
                    <div class="page-container">
                        <!-- BEGIN CONTENT -->
                        <div class="page-content-wrapper">
                            <!-- BEGIN CONTENT BODY -->
                       
                            <div class="page-content">
                                <div class="container">
                                    <!-- BEGIN PAGE BREADCRUMBS -->
                                    <ul class="page-breadcrumb breadcrumb">
                                        <li>
                                            <a href="{{url('homepage')}}">Home</a>
                                            <i class="fa fa-circle"></i>
                                        </li>
                                         <li>
                                            <ahref="{{url('contact')}}">Contact Us</a>
                                            
                                        </li>
                                        
                                    </ul>
                                    <!-- END PAGE BREADCRUMBS -->
                                    <!-- BEGIN PAGE CONTENT INNER -->
                                    <div class="page-content-inner">
                                     
                                        <div class="c-content-feedback-1 c-option-1">
                                            <div class="row">
                                                <div class="col-md-6">
                                                   
                                                    <div class="c-container bg-grey-steel">
                                                        <div class="c-content-title-1">
                                                            <h3 class="uppercase">Have a question?</h3>
                                                            <div class="c-line-left bg-dark"></div>
                                                            <form action="#">
                                                                <div class="input-group input-group-lg c-square">
                                                                    <input type="text" class="form-control c-square" placeholder="Ask a question" />
                                                                    <span class="input-group-btn">
                                                                        <button class="btn uppercase" type="button">Go!</button>
                                                                    </span>
                                                                </div>
                                                            </form>
                                                            <p>Ask your questions away and let our dedicated customer service help you look through our FAQs to get your questions answered!</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="c-contact">
                                                        <div class="c-content-title-1">
                                                            <h3 class="uppercase">Keep in touch</h3>
                                                            <div class="c-line-left bg-dark"></div>
                                                            <p class="c-font-lowercase">Our helpline is always open to receive any inquiry or feedback. Please feel free to drop us an email from the form below and we will get back to you as soon as we can.</p>
                                                        </div>
                                                        <form action="#">
                                                            <div class="form-group">
                                                                <input type="text" placeholder="Your Name" class="form-control input-md"> </div>
                                                            <div class="form-group">
                                                                <input type="text" placeholder="Your Email" class="form-control input-md"> </div>
                                                            <div class="form-group">
                                                                <input type="text" placeholder="Contact Phone" class="form-control input-md"> </div>
                                                            <div class="form-group">
                                                                <textarea rows="8" name="message" placeholder="Write comment here ..." class="form-control input-md"></textarea>
                                                            </div>
                                                            <button type="submit" class="btn grey">Submit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END PAGE CONTENT INNER -->
                                </div>
                            </div>
                            <!-- END PAGE CONTENT BODY -->
                            <!-- END CONTENT BODY -->
                        </div>
                        <!-- END CONTENT -->
                    
                    </div>
                    <!-- END CONTAINER -->
                </div>
            </div>
           
        </div>
      
        
    </body>





@stop
