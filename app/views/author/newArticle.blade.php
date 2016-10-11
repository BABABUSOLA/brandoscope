@extends('layouts.masterAdminHome')


@section('body')


<body>
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
                                <form class="search-form" action="page_general_search.html" method="GET">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search" name="query">
                                        <span class="input-group-btn">
                                            <a href="#" class="btn submit">
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
                                                    <a href="{{url('newArticle')}}" class="nav-link"> New Article</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('editArticle')}}">Edit Article</a>
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
    <div class="page-content">
            <div class="container">
                <div class="page-content-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet box">
                                
                                <div class="portlet-body form">
                                    {{Form::open(array('route'=>'storeArticle','class'=>'login-form'))}}
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
                                                     
                                                            @if(isset($cats2))
                                                            {{ Form::select('category_id',$cats2,array('class'=>'form-control col-md-9','placeholder'=>'Section','required data validation-required-message'=>'please select the category'))}}
                                                            @endif
                                                        
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
                                                         @if(isset($tags2))
                                                         
                                                            {{ Form::select('tag_id',$tags2,array('class'=>'form-control ','placeholder'=>'Tags','required data validation-required-message'=>'please select the tag'))}}
                                                            @endif
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn-group btn-group-solid">
                                               
                                                 {{link_to_route('editArticle','Edit','',array('class'=>'btn btn-warning pull-left'))}}
                                            </div>
                                           
                                            <div class=" pull-right">
                                                
                                                <button class="btn btn-success " type="submit">Upload
                                                </button>
                                               
                                            </div>
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
        </body>




@stop
