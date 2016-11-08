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
                            <form class="search-form" action="{{URL::route('userSearch')}}" method="GET">
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
                                        <a href="{{url('userdash')}}"> HOME
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
                                            <div class="col-md-3">
                                                <div class="panel panel-info">
                                                    <div class="panel-heading caption">
                                                        <h1 class="panel-title caption uppercase">
                                                        CATEGORIES
                                                        </h1>
                                                    </div>
                                                    
                                                     <div id="accordion1_1" class="panel">
                                                        @foreach($categories as $category)
                                                        <div class="panel-body"><a href="{{url('userviewArticleCategory/' . $category->id)}}">{{$category->name}}</a>
                                                        
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div style="margin:20px 0;">
                                                {{$categories->links() }}
                                            </div>
                                            <!-- end page portlet light-->
                                        </div>
                                        <div class="col-md-9">
                                            <div id="tab_1_1" class="tab-pane active">
                                               {{--  @foreach($news as $new) --}}
                                                <div class="panel-group">
                                                    
                                                    <div class="panel panel-info">
                                                        <div class="panel-heading caption">
                                                            <h3 class="panel-title caption uppercase">
                                                            {{ Str::limit($new->slug, 100) }}
                                                            </h3>
                                                        </div>
                                                        <div id="accordion1_1" class="panel">
                                                            <div class="panel-body"> {{$new->text}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                          {{--       @endforeach --}}
                                                {{--  @if(isset($newCats) )
                                                   
                                                    @foreach($newCats as $newCat)
                                                    <div class="panel-group">
                                                      
                                                        <div class="panel panel-info">
                                                            <div class="panel-heading caption">
                                                                <h3 class="panel-title caption uppercase">
                                                                   {{ Str::limit($newCat->slug, 100) }}

                                                                </h3>
                                                            </div>
                                                            <div id="accordion1_1" class="panel">
                                                                <div class="panel-body"> {{ Str::limit($newCat->text, 300) }}
                                                                    <br>
                                                                    <a href="{{url('userviewarticle/' . $newCat->id)}}"><button class="btn btn-info pull-right" >Read More</button></a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                      
                                                    </div>
                                                    @endforeach
                                                    @endif --}}
                                            </div>
                                          {{--   {{$news->links()}} --}}
                                          <hr>
                                        <h3 class="sbold blog-comments-title">Leave A Comment</h3>
                                        <!-- start -->
                                        <form method="post" action="{{URL::route('comment')}}">
                                                                                
                                                                                <label class="control-label visible-ie8 visible-ie9">Comment</label>
                                                                                <div class="input-icon">
                                                                                    <i class="fa fa-user"></i>
                                                                                    <textarea rows="8" name="message" placeholder="Write comment here ..." class="form-control c-square"></textarea>
                                                                                    <input type="hidden" name="news_id" value="{{ $art->id}}">
                                                                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
                                                                                    {{--                                                                             <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                                    --}}                                                                            <button class="btn btn-success pull-right" type="submit" >Send</button>
                                                                                    <br>
                                                                                </div>
                                                                                
                                                                            </form>
                                        <!-- end -->
                                       {{--  <form method="post" action="{{URL::route('comment')}}">
                                            <div class="form-group">
                                                {{-- <!-- start -->
                                                 <input type="hidden" name="news_id" value="{{ $art->id}}">
                                                                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
                                                <!-- end --> --}}
                                                 <input type="hidden" name="news_id" value="{{ $art->id}}">
                                                                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
                                                <input type="text" placeholder="Your Name" class="form-control c-square"  name="user_id" value="{{ Auth::user()->first_name}} {{ Auth::user()->last_name}}"> </div>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Your Email" class="form-control c-square"  name="user_id" value="{{ Auth::user()->email}}"> </div>
                                                   
                                                        <div class="form-group">
                                                            <textarea rows="8" name="message" placeholder="Write comment here ..." class="form-control c-square"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <button type="submit" class="btn blue uppercase btn-md sbold btn-block">Submit</button>
                                                        </div>
                                                    </form> --}}
                                        </div>
                                    </div>
                                    <!-- end page portlet light-->
                                    
                                    <!-- end col-md-6 -->
                                    
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