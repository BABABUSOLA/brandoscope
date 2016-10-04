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
                                 <!-- BEGIN HEADER SEARCH BOX -->
                                <form class="search-form" action="page_general_search.html" method="GET">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search" name="query">
                                        <span class="input-group-btn">
                                            <a href="javascript:;" class="btn submit">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </span>
                                    </div>
                                </form>
                                <!-- END HEADER SEARCH BOX -->
                               
                                <!-- END HEADER SEARCH BOX -->
                                
                                <div class="hor-menu  ">
                                    <ul class="nav navbar-nav">
                                        <li class="menu-dropdown ">
                                            <a href="{{url('homepage')}}"> HOME
                                                <span class="arrow"></span>
                                            </a>
                                         
                                        </li>
                                        <li class="menu-dropdown ">
                                            <a href="{{('#about')}}"> ABOUT
                                                <span class="arrow"></span>
                                            </a>
                                            
                                        </li>
                                        <li class="menu-dropdown">
                                            <a href="{{url('contact')}}"> CONTACTS
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
                                            <a href="{{url('adminiHome')}}">Home</a>
                                           
                                        </li>
                                        
                                        
                                    </ul>
                                    <!-- END PAGE BREADCRUMBS -->
                                     <!-- BEGIN PAGE CONTENT INNER -->
                                    <div class="page-content-inner">
                                        <div class="portlet light ">
                                            <div class="portlet-title">
                                                
                                                <div class="actions">
                                                    <div class="btn-group">
                                                        <a class="btn green-haze btn-outline btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li>
                                                                <a href="#"> Option 1</a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="#">Option 2</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Option 3</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Option 4</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="tiles">
                                                    <div class="tile double-down bg-blue-hoki">
                                                        <div class="tile-body">
                                                            <i class="fa fa-bell-o"></i>
                                                        </div>
                                                        <div class="tile-object">
                                                            <div class="name"> Notifications </div>
                                                            <div class="number"> 6 </div>
                                                        </div>
                                                    </div>
                                                    <div class="tile bg-red-sunglo">
                                                        <div class="tile-body">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                        <div class="tile-object">
                                                            <div class="name"> Schedule</div>
                                                            <div class="number"> 12 </div>
                                                        </div>
                                                    </div>
                                                    <div class="tile double selected bg-green-turquoise">
                                                        <div class="corner"> </div>
                                                        <div class="check"> </div>
                                                        <div class="tile-body">
                                                            <h4>support@metronic.com</h4>
                                                            <p> Re: Metronic v1.2 - Project Update! </p>
                                                            <p> 24 March 2013 12.30PM confirmed for the project plan update meeting... </p>
                                                        </div>
                                                        <div class="tile-object">
                                                            <div class="name">
                                                                <i class="fa fa-envelope"></i>
                                                            </div>
                                                            <div class="number"> 14 </div>
                                                        </div>
                                                    </div>
                                                    <div class="tile selected bg-yellow-saffron">
                                                        <div class="corner"> </div>
                                                        <div class="tile-body">
                                                            <i class="fa fa-user"></i>
                                                        </div>
                                                        <div class="tile-object">
                                                            <div class="name"> Members </div>
                                                            <div class="number"> 452 </div>
                                                        </div>
                                                    </div>
                                                    <div class="tile double bg-blue-madison">
                                                        <div class="tile-body">
                                                            <img src="../assets/pages/media/profile/photo1.jpg" alt="">
                                                            <h4>Announcements</h4>
                                                            <p> Easily style icon color, size, shadow, and anything that's possible with CSS. </p>
                                                        </div>
                                                        <div class="tile-object">
                                                            <div class="name"> Bob Nilson </div>
                                                            <div class="number"> 24 Jan 2013 </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="tile image selected">
                                                        <div class="tile-body">
                                                            <img src="../assets/pages/media/gallery/image2.jpg" alt=""> </div>
                                                        <div class="tile-object">
                                                            <div class="name"> Media </div>
                                                        </div>
                                                    </div>
                                                   <div class="tile bg-green">
                                                        <div class="tile-body">
                                                            <i class="fa fa-bar-chart-o"></i>
                                                        </div>
                                                        <div class="tile-object">
                                                            <div class="name"> Reports </div>
                                                            <div class="number"> </div>
                                                        </div>
                                                    </div>
                                                    <div class="tile double bg-grey-cascade">
                                                        <div class="tile-body">
                                                            <img src="../assets/pages/media/profile/photo2.jpg" alt="" class="pull-right">
                                                            <h3>@lisa_wong</h3>
                                                            <p> I really love this theme. I look forward to check the next release! </p>
                                                        </div>
                                                        <div class="tile-object">
                                                            <div class="name">
                                                                <i class="fa fa-twitter"></i>
                                                            </div>
                                                            <div class="number"> 10:45PM, 23 Jan </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="tile bg-blue-steel">
                                                        <div class="tile-body">
                                                            <i class="fa fa-briefcase"></i>
                                                        </div>
                                                        <div class="tile-object">
                                                            <div class="name"> Documents </div>
                                                            <div class="number"> 124 </div>
                                                        </div>
                                                    </div>
                                                   
                                                    
                                                    <div class="tile bg-red-sunglo">
                                                        <div class="tile-body">
                                                            <i class="fa fa-plane"></i>
                                                        </div>
                                                        <div class="tile-object">
                                                            <div class="name"> Projects </div>
                                                            <div class="number"> 34 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end page portlet light-->
                                        
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
