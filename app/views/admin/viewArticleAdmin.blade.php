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
                                        <a href="{{url('adminihome')}}"> HOME
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
                                        <div class="row">
                                            {{-- <div class="col-md-3">
                                                <div class="panel panel-info">
                                                    <div class="panel-heading caption">
                                                        <h1 class="panel-title caption uppercase">
                                                        CATEGORIES
                                                        </h1>
                                                    </div>
                                                    
                                                    <div id="accordion1_1" class="panel">
                                                        @foreach($categories as $category)
                                                        <div class="panel-body"><a href="{{url('viewArticleCategory/' . $category->id)}}">{{$category->name}}</a>
                                                        
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            
                                            <div style="margin:20px 0;">
                                                {{$categories->links() }}
                                            </div>
                                            <!-- end page portlet light-->
                                        </div> --}}
                                        <div class="col-md-12">
                                            <div id="tab_1_1" class="tab-pane active">
                                                
                                                @if(isset($new_Admin))
                                                <div class="panel-group">
                                                    
                                                    <div class="panel panel-info">
                                                        <div class="panel-heading caption">
                                                            <h3 class="panel-title caption uppercase">
                                                            {{ Str::limit($new_Admin->slug, 100) }}
                                                            </h3>
                                                        </div>
                                                        <div id="accordion1_1" class="panel">
                                                            <div class="panel-body"> {{$new_Admin->text}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                
                                                
                                                <div style="margin-left:20px;">
                                                    <h3 class="sbold blog-comments-title">Comments ({{$new_Admin->comments->count()}})</h3>
                                                    @foreach($new_Admin->comments as $comment)
                                                    <div class="panel panel-info">
                                                        <div class="panel-body">
                                                            {{$comment->text}}
                                                        </div>
                                                        <div class="panel-heading caption pull-right">Posted by
                                                            <strong class="uppercase">{{$comment->user->first_name}} </strong> on {{$comment->created_at}}
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <br>
                                                    @endforeach
                                                    <hr>
                                                </div>
                                                @endif
                                                
                                            </div>
                                        {{--       {{$news->links()}} --}}
                                            <hr>
                                            <h3 class="sbold blog-comments-title">Leave A Comment</h3>
                                            <form method="post" action="{{URL::route('comment')}}">
                                                <div class="form-group ">
                                                    <label class="control-label visible-ie8 visible-ie9">Comment</label>
                                                    <div class="input-icon">
                                                        <i class="fa fa-user"></i>
                                                        <textarea value="text" name="text" rows="8" class="form-control" placeholder="Type your comments here" column=""></textarea>
                                                        <input type="text" name="news_id" value="{{ $new_Admin->id}}">
                                                        <input type="text" name="user_id" value="{{ Auth::user()->id}}">
                                                        <button class="btn btn-success pull-right" type="submit">Send</button>
                                                        <br>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- end page portlet light-->
                                    
                                    <!-- end col-md-6 -->
                                    
                                </div>
                                <!-- END PAGE CONTENT INNER -->
                                <!--- new -->
                                
                                <!-- end new -->
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