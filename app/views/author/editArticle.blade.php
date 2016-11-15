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

                                    {{Form::open(array('route'=> array('updateArticle',$article->id)))}}
                                    <fieldset>
                                        <div class="form-body">
                                            <div class="form-group">
                                                {{ Form::text('slug',$article->slug,array('class'=>'form-control'))}}
                                                
                                            </div>
                                            <div class="form-group">
                                                {{ Form::textarea('text',$article->text,array('class'=>'form-control'))}}
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                     
                                                           {{--  @if(isset($cats2)) --}}
                                                            {{ Form::select('category_id',$cats2,array('class'=>'form-control col-md-9','placeholder'=>'Section'))}}
                                                           {{--  @endif --}}
                                                        
                                                    </div>
                                                </div>
                                                 <div class="col-md-3">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                           {{-- <input class="hidden" value="{{$user->id}}" name="user_id"> 
                                                        </div> --}}
                                                        {{Form::hidden('user_id',$user->id)}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        {{--  @if(isset($tags2)) --}}
                                                            {{ Form::select('tag_id',$tags2,array('class'=>'form-control '))}}
                                                      {{--       @endif --}}
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <div class="btn-group btn-group-solid">
                                               
                                                 {{link_to_route('editArticle','Edit','',array('class'=>'btn btn-warning pull-left'))}}
                                            </div>
                                            --}}
                                            <div class=" pull-right">
                                                
                                               {{--  <button class="btn btn-success " type="submit">Upload
                                                </button> --}}
                                               {{Form::submit('Upload',array('class'=>'btn btn-success'))}}
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
