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
                                
                                {{link_to_route('adminregister','Register User','',array('class'=>'btn blue-steel'))}}
                                
                                {{link_to_route('logout','Logout','',array('class'=>'btn blue-oleo'))}}
                                
                            </div>
                            <!-- END TOP NAVIGATION MENU -->
                        </div>
                    </div>
                    <!-- END HEADER TOP -->
                    <!-- BEGIN HEADER MENU -->
                    <div class="page-header-menu">
                        <div class="container">
                            <!-- BEGIN HEADER SEARCH BOX -->
                            <form class="search-form" action="{{URL::route('getSearchAdmin')}}" method="GET">
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
                                        <a href="{{url('adminihome')}}"> HOME
                                            <span class="arrow"></span>
                                        </a>
                                        
                                    </li>
                                    <li class="menu-dropdown active">
                                        <a href="{{url('getsearchadmin')}}">Search</a>
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
                                
                                <!-- BEGIN PAGE CONTENT INNER -->
                                <div class="page-content-inner">
                                    <div class="portlet light ">
                                        <div class="panel panel-success">
                                            <div class="panel-heading caption">
                                                <h3 class="panel-title caption uppercase">
                                                Search results for {{ $keyword }}
                                                </h3>
                                            </div>
                                            
                                        </div>
                                        <div class="panel-body">
                                            
                                            <div class="panel panel-info">
                                                @if(count($news) < 1)
                                                     <div class="panel panel-info ">
                            <div class=" panel-heading " style="text-align:center"> There is no result for <strong>{{$keyword}}</strong></div>
                            <!-- to view the particular dashboard of the user -->
                            <div class="panel-body" style="text-align:center">
                                Please search again or click on this <a href="{{url('adminihome')}}">link</a> to go back to your homepage
                            </div>
                        </div>
                                @endif         
                                                @if(isset($news))
                                                @foreach($news as $new)
                                                <div class="panel-heading caption">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-8">
                                                                <h1 class="panel-title caption uppercase ">
                                                                
                                                                <a href="#">{{ $new->slug }}</a>
                                                                </h1>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <h1 class="panel-title caption uppercase pull-right">
                                                                @foreach($cats as $cat)
                                                                @if($cat->id == $new->category_id )
                                                                {{ $cat->name }}
                                                                @endif
                                                                @endforeach
                                                                
                                                                </h1>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <h3 class="panel-title  caption pull-right ">
                                                                @foreach($tags as $tag)
                                                                @if($tag->id == $new->tag_id)
                                                                {{ $tag->name }}
                                                                @endif
                                                                @endforeach
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                </div>
                                                
                                                <div id="accordion1_1" class="panel">
                                                    <div class="panel-body">
                                                        {{ Str::limit($new->text, 300) }}
                                                        <br>
                                                        <a href="{{url('viewArticle/' . $new->id)}}"><button class="btn btn-info pull-right" >Read More</button></a>
                                                        <hr>
                                                        Posted at {{$new->created_at->toDateString()}} by {{$new->user->first_name}}
                                                        
                                                    </div>
                                                </div>
                                                @endforeach
                                               
                                                @endif
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