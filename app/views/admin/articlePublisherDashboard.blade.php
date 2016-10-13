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
                                        <!-- if the person registers under admin then it should be the name of the company -->
                                    </div>
                               <!-- BEGIN TOP NAVIGATION MENU -->
                                <div class="top-menu">
                                   
                                  
                                  
                                    {{link_to_route('logout','LOGOUT','',array('class'=>'btn blue-oleo'))}}
                                      
                                </div>
                                <!-- END TOP NAVIGATION MENU -->
                            </div>
                        </div>
                        <!-- END HEADER TOP -->
                        <!-- BEGIN HEADER MENU -->
                        <div class="page-header-menu">
                            <div class="container">
                                 <!-- BEGIN HEADER SEARCH BOX -->
                                <!-- BEGIN HEADER SEARCH BOX -->
                                <form class="search-form" action="{{URL::route('getSearch')}}" method="GET">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search" name="keyword">
                                        <span class="input-group-btn">
                                          
                                                <i class="icon-magnifier"></i>
                                          
                                             <button value="Search" class="btn btn-success pull-right search" type="submit">Search</button>
                                        </span>
                                       
                                    </div>

                                </form>
                                 
                                <!-- END HEADER SEARCH BOX -->
                               
                                <!-- END HEADER SEARCH BOX -->
                                
                                <div class="hor-menu  ">
                                    <ul class="nav navbar-nav">
                                        <li class="menu-dropdown ">
                                            <a href="{{url('articleDashboard')}}"> HOME
                                                <span class="arrow"></span>
                                            </a>
                                         
                                        </li>
                                        <li class="menu-dropdown ">
                                            <a href="{{('#')}}"> ARTICLE
                                                <span class="arrow"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="{{('newArticle')}}" class="nav-link"> New Article</a>
                                                </li>
                                                <li>
                                                    <a href="{{('editArticle')}}">Edit Article</a>
                                                </li>
                                            </ul>
                                            
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
                                    
                                     <!-- BEGIN PAGE CONTENT INNER -->
                                    <div class="page-content-inner">
                                       <div class="row">
                                            <div class="col-md-3">
                                                <div class="portlet light ">
                                                    <div class="portlet-title">
                                                        <div class="caption">Categories</div>
                                                    </div>
                                                    <div class="portlet-body">
                                                       
                                                            @foreach($categories as $category)
                                                            <p><a href="{{$category->name}}">{{$category->name}}</a></p>
                                                            @endforeach
                                                            <div style="margin:20px 0;">
                                                                {{$categories->links() }}
                                                            </div>
                                                      
                                                
                                                    </div>
                                                </div>
                                        <!-- end page portlet light-->
                                            </div>
                                            <div class="col-md-6">
                                                <div class="portlet">
                                                <div class="portlet-title">
                                                
                                                <div class="actions">
                                                    <div class="btn-group">
                                                        <a class="btn green-haze btn-outline btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Upload Schedule
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li>
                                                                <a href="#"> Daily</a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="#">Weekly</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Montly</a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="caption pull-left">Articles</div>

                                                </div>
                                                <div class="portlet-body">
                                             
                                                        @foreach($arts as $art)
                                                        <div class="portlet-body">
                                                            <h3> {{$art->slug}}</h3>
                                                            <p>{{$art->text}}</p>
                                                            <div style="margin:20px 0;">
                                                               
                                                            </div>
                                                        </div>
                                                           
                                                        @endforeach
                                                         {{$news->links() }} 
                                                </div>
                                            
                                                </div>
                                            </div>
                                        <!-- end page portlet light-->
                                       
                                        <!-- end col-md-6 -->
                                        <div class="col-md-3">
                                                <div class="portlet light ">
                                                    <div class="portlet-title">
                                                      Top Stories
                                                    </div>
                                                    <div class="portlet-body">
                                                        @foreach($newSearchs as $newSearch)
                                                            <p><a href="{{$newSearch->slug}}">{{$newSearch->slug}}</a></p>
                                                            @endforeach
                                                            <div style="margin:20px 0;">
                                                                {{$news->links() }}
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
