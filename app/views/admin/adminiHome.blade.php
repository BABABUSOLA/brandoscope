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
                                        <li>
                                            @if (Session::has('message'))
                                            <div class="panel panel-info">
                                                <div class="panel-heading"> {{Session::get('message')}}</div>
                                            </div>
                                            @endif
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
                                                    
                                                    <div class="tile  bg-blue-hoki">
                                                        <div class="tile-body">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                        <div class="tile-object">
                                                            <div class="name"> Notifications</div>
                                                            <div class="number"> 12 </div>
                                                        </div>
                                                    </div>
                                                   {{--  <div class="tile double selected bg-green-turquoise">
                                                        <div class="corner"> </div>
                                                        <div class="check"> </div>
                                                        <div class="tile-body">
                                                            <h4>support@brandoscope.com</h4>
                                                            <p> Re: Metronic v1.2 - Project Update! </p>
                                                            <p> 24 March 2013 12.30PM confirmed for the project plan update meeting... </p>
                                                        </div>
                                                        <div class="tile-object">
                                                            <div class="name">
                                                                <i class="fa fa-envelope"></i>
                                                            </div>
                                                            <div class="number"> 14 </div>
                                                        </div>
                                                    </div> --}}
                                                    <div class="tile selected bg-yellow-saffron">
                                                        <div class="corner"> </div>
                                                        <div class="tile-body">
                                                            <i class="fa fa-user"></i>
                                                        </div>
                                                       
                                                        <div class="tile-object">
                                                             @if(isset($userscount))
                                                        
                                                            <div class="name"> Members </div>
                                                            <div class="number"> {{$userscount->count()}} </div>
                                                            
                                                        @endif
                                                        </div>
                                                       
                                                    </div>
                                                    <div class="tile double bg-blue-madison">
                                                      
                                                        <div class="tile-body">
                                                            
                                                            <h4>{{$latest_posts->slug}}</h4>
                                                            <p>{{ Str::limit($latest_posts->text, 50) }} </p>
                                                        </div>
                                                        <div class="tile-object">
                                                            <div class=" name uppercase"> {{$latest_posts->user->first_name}} {{$latest_posts->user->last_name}} </div>
                                                            <div class="number"> {{$latest_posts->created_at}} </div>
                                                        </div>
                                                       
                                                    </div>
                                                    
                                                    {{-- <div class="tile image selected">
                                                        <div class="tile-body">
                                                        <img src="../assets/pages/media/gallery/image2.jpg" alt=""> </div>
                                                        <div class="tile-object">
                                                            <div class="name"> Media </div>
                                                        </div>
                                                    </div> --}}
                                                    {{-- <div class="tile bg-green">
                                                        <div class="tile-body">
                                                            <i class="fa fa-bar-chart-o"></i>
                                                        </div>
                                                        <div class="tile-object">
                                                            <div class="name"> Reports </div>
                                                            <div class="number"> </div>
                                                        </div>
                                                    </div> --}}
                                                    <div class="tile double bg-grey-cascade">
                                                        <div class="tile-body">
                                                            
                                                            <h3>@lisa_wong</h3>
                                                            <p> I really love this theme. I look forward to check the next release! </p>
                                                        </div>
                                                        <div class="tile-object">
                                                            <div class="name">
                                                                <i class="fa fa-pencil"></i>
                                                                Comments
                                                            </div>
                                                            <div class="number"> 10:45PM, 23 Jan </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="tile bg-blue-steel">
                                                        <div class="tile-body">
                                                            <i class="fa fa-briefcase"></i>
                                                        </div>
                                                        <div class="tile-object">
                                                            <div class="name">News </div>
                                                            <div class="number"> 124 </div>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                   {{--  <div class="tile bg-red-sunglo">
                                                        <div class="tile-body">
                                                            <i class="fa fa-plane"></i>
                                                        </div>
                                                        <div class="tile-object">
                                                            <div class="name"> Projects </div>
                                                            <div class="number"> 34 </div>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end page portlet light-->
                                        <div class="portlet light" id="notification">
                                            
                                            <div class="portlet-title uppercase">
                                                <div class="panel bg-grey">
                                                    <div class="panel-heading caption">
                                                        <h1 >
                                                        Latest Members
                                                        </h1>
                                                        <h3 class="panel-title caption uppercase">Featuring some of our Latest Members.</h3>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                
                                                <div class="tiles">
                                                    @if (isset($users) && $user->count()>0)
                                                    @foreach($users as $user)
                                                    <div class="tile double bg-green">
                                                        <div class="tile-body">
                                                            <br>
                                                            

                                                            <h3 class="uppercase"> {{ $user->first_name}} {{ $user->last_name}}</h3>
                                                            <p>{{$user->email}}</p>
                                                            <p>{{$user->role->name}}</p>

                                                            
                                                        </div>
                                                        <div class="tile-object">
                                                            <div class="name">
                                                                <i class="fa fa-pencil"></i>
                                                                <a href="">View Profile</a>
                                                            </div>
                                                            <div class="number">{{$user->created_at}}</div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                    @else
                                                    <p>{{"No User Found"}}</p>
                                                    @endif
                                                    
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <!-- end members -->
                                        <div class="portlet light" id="notification">
                                            
                                            <div class="portlet-title uppercase">
                                                <div class="panel ">
                                                    <div class="panel-heading caption">
                                                        <h1 >
                                                        News
                                                        </h1>
                                                      
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                
                                                <div class="tiles">
                                                  
                                                     <div class="panel-group">
                                                        <!-- title top stories-->
                                                        <div class="panel panel-success">
                                                            <div class="panel-heading caption">
                                                                <h3 class="panel-title caption uppercase">
                                                                Top stories
                                                                </h3>
                                                            </div>
                                                            
                                                        </div>
                                                        <!-- end title top stories -->
                                                        @foreach($arts as $art)
                                                        
                                                        <div class="panel panel-info ">
                                                            <div class="panel-heading caption">
                                                                <h1 class="panel-title caption uppercase">
                                                                {{$art->slug}}
                                                                </h1>
                                                            </div>
                                                            <div id="accordion1_1" class="panel">
                                                                <div class="panel-body">{{ Str::limit($art->text, 300) }}
                                                                    <br>
                                                                    <br>
                                                                    <a href="{{url('viewArticle/' . $art->id)}}"><button class="btn btn-info pull-right" >Read More</button></a>
                                                                    <button class="btn btn-success pull-left " id="comment" >Comment</button>
                                                                    <br>
                                                                    <hr>
                                                                    <div class = "hideclass" >
                                                                        <div class="form-group" >
                                                                            <form method="post" action="{{URL::route('comment')}}">
                                                                                
                                                                                <label class="control-label visible-ie8 visible-ie9">Comment</label>
                                                                                <div class="input-icon">
                                                                                    <i class="fa fa-user"></i>
                                                                                    <textarea value="text" name="text" class="form-control" placeholder="Type your comments here" column=""></textarea>
                                                                                    <input type="hidden" name="news_id" value="{{ $art->id}}">
                                                                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
                                                                                    {{--                                                                             <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                                    --}}                                                                            <button class="btn btn-success pull-right" type="submit" >Send</button>
                                                                                    <br>
                                                                                </div>
                                                                                
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                    @foreach($art->comments as $comment)
                                                                    <div class="panel panel-info">
                                                                        <div class="panel-heading caption">
                                                                            {{$comment->user->first_name}}
                                                                        </div>
                                                                        <div class="panel-body">
                                                                            {{$comment->text}}
                                                                        </div>
                                                                    </div>
                                                                    @endforeach
                                                                    <hr>
                                                                    Posted at {{$art->created_at->toDateString()}} by {{$art->user->first_name}}
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                        </div>
                                                        
                                                        @endforeach
                                                        {{$news->links() }}
                                                        <!-- start entertainment -->
                                                        
                                                        <div class="panel panel-success">
                                                            <div class="panel-heading caption">
                                                                <h3 class="panel-title caption uppercase">
                                                                Entertainment
                                                                </h3>
                                                            </div>
                                                            
                                                        </div>
                                                        <!-- entertainment -->
                                                        @foreach($entertainments->news as $entertainment)
                                                        
                                                        <div class="panel panel-info">
                                                            <div class="panel-heading caption">
                                                                <h3 class="panel-title caption uppercase">
                                                                {{$entertainment->slug}}
                                                                </h3>
                                                            </div>
                                                            <div id="accordion1_1" class="panel">
                                                                <div class="panel-body">{{ Str::limit($entertainment->text, 300) }}
                                                                    <br>
                                                                    <br>
                                                                    <a href="{{url('viewArticle/' . $art->id)}}"><button class="btn btn-info pull-right" >Read More</button></a>
                                                                    <a href="{{url('userviewArt/' . $art->id)}}"><button class="btn btn-success pull-left" >Comment</button></a>
                                                                    <br>
                                                                    <hr>
                                                                    
                                                                    <form method="post" action="{{URL::route('comment')}}">
                                                                        <div class="form-group ">
                                                                            <label class="control-label visible-ie8 visible-ie9">Comment</label>
                                                                            <div class="input-icon">
                                                                                <i class="fa fa-user"></i>
                                                                                <textarea value="text" name="text" class="form-control" placeholder="Type your comments here" column=""></textarea>
                                                                                <input type="hidden" name="news_id" value="{{ $entertainment->id}}">
                                                                                <input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
                                                                                {{--                                                                             <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                                --}}                                                                            <button class="btn btn-success pull-right" type="submit">Send</button>
                                                                                <br>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                    @foreach($entertainment->comments as $comment)
                                                                    <div class="panel panel-info">
                                                                        <div class="panel-heading caption">
                                                                            {{$comment->user->first_name}}
                                                                        </div>
                                                                        <div class="panel-body">
                                                                            {{$comment->text}}
                                                                        </div>
                                                                    </div>
                                                                    @endforeach
                                                                    Posted at {{$art->created_at}} by {{$art->user->first_name}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        @endforeach
                                                        {{$news->links() }}
                                                        <!-- end entertainment -->
                                                        <!-- start entertainment -->
                                                        
                                                        <div class="panel panel-success">
                                                            <div class="panel-heading caption">
                                                                <h3 class="panel-title caption uppercase">
                                                                Sport
                                                                </h3>
                                                            </div>
                                                            
                                                        </div>
                                                        <!-- entertainment -->
                                                        @foreach($sports->news as $sport)
                                                        
                                                        <div class="panel panel-info">
                                                            <div class="panel-heading caption">
                                                                <h3 class="panel-title caption uppercase">
                                                                {{$sport->slug}}
                                                                </h3>
                                                            </div>
                                                            <div id="accordion1_1" class="panel">
                                                                <div class="panel-body">{{ Str::limit($sport->text, 300) }}
                                                                    <br>
                                                                    <br>
                                                                    <a href="{{url('viewArticle/' . $art->id)}}"><button class="btn btn-info pull-right" >Read More</button></a>
                                                                    <a href="{{url('userviewArt/' . $art->id)}}"><button class="btn btn-success pull-left" >Comment</button></a>
                                                                    <br>
                                                                    <hr>
                                                                    
                                                                    <form method="post" action="{{URL::route('comment')}}">
                                                                        <div class="form-group ">
                                                                            <label class="control-label visible-ie8 visible-ie9">Comment</label>
                                                                            <div class="input-icon">
                                                                                <i class="fa fa-user"></i>
                                                                                <textarea value="text" name="text" class="form-control" placeholder="Type your comments here" column=""></textarea>
                                                                                <input type="hidden" name="news_id" value="{{ $sports->id}}">
                                                                                <input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
                                                                                {{--                                                                             <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                                --}}                                                                            <button class="btn btn-success pull-right" type="submit">Send</button>
                                                                                <br>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                    @foreach($sport->comments as $comment)
                                                                    <div class="panel panel-info">
                                                                        <div class="panel-heading caption">
                                                                            {{$comment->user->first_name}}
                                                                        </div>
                                                                        <div class="panel-body">
                                                                            {{$comment->text}}
                                                                        </div>
                                                                    </div>
                                                                    @endforeach
                                                                    <hr>
                                                                    Posted at {{$art->created_at}} by {{$art->user->first_name}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        @endforeach
                                                        {{$news->links() }}
                                                        <!-- end entertainment -->
                                                        <!-- start entertainment -->
                                                        
                                                        <div class="panel panel-success">
                                                            <div class="panel-heading caption">
                                                                <h3 class="panel-title caption uppercase">
                                                                Politics
                                                                </h3>
                                                            </div>
                                                            
                                                        </div>
                                                        <!-- entertainment -->
                                                        @foreach($politics->news as $politics)
                                                        
                                                        <div class="panel panel-info">
                                                            <div class="panel-heading caption">
                                                                <h3 class="panel-title caption uppercase">
                                                                {{$politics->slug}}
                                                                </h3>
                                                            </div>
                                                            <div id="accordion1_1" class="panel">
                                                                <div class="panel-body">{{ Str::limit($politics->text, 300) }}
                                                                    <br>
                                                                    <br>
                                                                    <a href="{{url('viewArticle/' . $art->id)}}"><button class="btn btn-info pull-right" >Read More</button></a>
                                                                    <a href="{{url('userviewArt/' . $art->id)}}"><button class="btn btn-success pull-left" onclick="comment()" >Comment</button></a>
                                                                    <br>
                                                                    <hr>
                                                                    
                                                                    <form method="post" action="{{URL::route('comment')}}">
                                                                        <div class="form-group ">
                                                                            <label class="control-label visible-ie8 visible-ie9">Comment</label>
                                                                            <div class="input-icon">
                                                                                <i class="fa fa-user"></i>
                                                                                <textarea value="text" name="text" class="form-control" placeholder="Type your comments here" column=""></textarea>
                                                                                <input type="hidden" name="news_id" value="{{ $politics->id}}">
                                                                                <input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
                                                                                {{--                                                                             <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                                --}}                                                                            <button class="btn btn-success pull-right" type="submit" >Send</button>
                                                                                <br>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                    @foreach($entertainment->comments as $comment)
                                                                    <div class="panel panel-info">
                                                                        <div class="panel-heading caption">
                                                                            {{$comment->user->first_name}}
                                                                        </div>
                                                                        <div class="panel-body">
                                                                            {{$comment->text}}
                                                                        </div>
                                                                    </div>
                                                                    @endforeach
                                                                    <hr>
                                                                    Posted at {{$art->created_at}} by {{$art->user->first_name}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        @endforeach
                                                        {{$news->links() }}
                                                        <!-- end entertainment -->
                                                        <!-- end profile -->

                                                    </div>
                                                </div>
                                                
                                            </div>

                                        </div>
                                        <!-- end notification -->
                                         <div class="portlet light" id="notification">
                                            
                                            <div class="portlet-title uppercase">
                                                <div class="panel bg-grey">
                                                    <div class="panel-heading caption">
                                                        <h1 >
                                                       Notifications
                                                        </h1>
                                                        
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                
                                                <div class="tiles">
                                                    @if (isset($users))
                                                    @foreach($users as $user)
                                                    <div class="tile double bg-green">
                                                        <div class="tile-body">
                                                            <br>
                                                            

                                                            <h3>@ {{ $user->first_name}}</h3>
                                                            <p>{{$user->email}}</p>
                                                            <p>{{$user->role->name}}</p>

                                                            
                                                        </div>
                                                        <div class="tile-object">
                                                            <div class="name">
                                                                <i class="fa fa-pencil"></i>
                                                                <a href="">View Profile</a>
                                                            </div>
                                                            <div class="number">{{$user->created_at}}</div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                    @endif
                                                    
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <!--end notifier -->
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