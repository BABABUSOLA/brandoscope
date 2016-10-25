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
                                            <a href="{{url('homepage')}}"> HOME
                                                <span class="arrow"></span>
                                            </a>
                                         
                                        </li>
                                        <li class="menu-dropdown ">
                                            <a href="#about"> ABOUT
                                                <span class="arrow"></span>
                                            </a>
                                            
                                        </li>
                                        <li class="menu-dropdown">
                                            <a href="{{url('contact')}}"> CONTACTS
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
                                           
                                        </li>
                                        
                                        
                                    </ul>
                                    <!-- END PAGE BREADCRUMBS -->
                                    <!-- BEGIN PAGE CONTENT INNER -->
                                    <div class="page-content-inner">
                                        <!-- BEGIN CONTENT HEADER -->
                                        <div class="row margin-bottom-40 about-header ">
                                            <div class="col-md-12">
                                                <h1>Information closer than you think</h1>
                                                <h2>Life is either a great adventure or nothing</h2>
                                               {{--  <button type="button" class="btn btn-danger">JOIN US TODAY</button> --}}
                                                {{link_to_route('register','JOIN US TODAY','',array('class'=>'btn btn-danger'))}}
                                            </div>
                                        </div>
                                        <!-- END CONTENT HEADER -->
                                        <!-- BEGIN CARDS -->
                                        <div class="row margin-bottom-20" id="about">
                                            <div class="col-lg-3 col-md-6">
                                                <div class="portlet light">
                                                    <div class="card-icon">
                                                        <i class="icon-user-follow font-red-sunglo theme-font"></i>
                                                    </div>
                                                    <div class="card-title">
                                                        <span> Best User Expierence </span>
                                                    </div>
                                                    <div class="card-desc">
                                                        <span> The best way to find yourself is
                                                            <br> to lose yourself in the service of others </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="portlet light">
                                                    <div class="card-icon">
                                                        <i class="icon-trophy font-green-haze theme-font"></i>
                                                    </div>
                                                    <div class="card-title">
                                                        <span> Awards Winner </span>
                                                    </div>
                                                    <div class="card-desc">
                                                        <span> The best way to find yourself is
                                                            <br> to lose yourself in the service of others </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="portlet light">
                                                    <div class="card-icon">
                                                        <i class="icon-basket font-purple-wisteria theme-font"></i>
                                                    </div>
                                                    <div class="card-title">
                                                        <span> Promote on social media </span>
                                                       
                                                    </div>
                                                    <div class="card-desc">
                                                        <span> Get brand awareness and engagement for your stories 
                                                            <br>using Facebook, Twitter and LinkedIn. </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="portlet light">
                                                    <div class="card-icon">
                                                        <i class="icon-layers font-blue theme-font"></i>
                                                    </div>
                                                    <div class="card-title">
                                                        <span> Create great stories</span>
                                                    </div>
                                                    <div class="card-desc">
                                                        <span> Write stories share them and get email subscribers. Be confident knowing we design stories
                                                            <br>  to look wonderful so you can focus on telling it.</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END CARDS -->
                                   
                                    
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
