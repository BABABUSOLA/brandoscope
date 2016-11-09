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
                                            <i class="fa fa-dot"></i>
                                            <a href="{{url('adminihome')}}">Home</a>
                                            
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
                                          
                                            <div class="portlet-body">
                                                <div class="tiles">
                                                    
                                                    <div class="tile  bg-blue-hoki">
                                                        <div class="tile-body">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                        <div class="tile-object">
                                                            <div class="name"> Notifications</div>
                                                            <div class="number"> {{$notifications->count()}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="tile double selected bg-green-turquoise">
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
                                                    </div>
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
                                                      @if(isset($latest_posts))
                                                        <div class="tile-body">
                                                            
                                                            <h4>{{Str::limit($latest_posts->slug,10)}}</h4>
                                                            <p>{{ Str::limit($latest_posts->text, 50) }} </p>
                                                        </div>
                                                        <div class="tile-object">
                                                            <div class=" name uppercase"> {{$latest_posts->user->first_name}} {{$latest_posts->user->last_name}} </div>
                                                            <div class="number"> {{$latest_posts->created_at}} </div>
                                                        </div>
                                                       @endif
                                                    </div>
                                                    
                                             
                                                    
                                                    <div class="tile bg-blue-steel">
                                                        <div class="tile-body">
                                                            <i class="fa fa-briefcase"></i>
                                                        </div>
                                                        <div class="tile-object">
                                                            <div class="name">News </div>
                                                            <div class="number"> {{$arts->count()}}</div>
                                                        </div>
                                                    </div>
                                                    
                                                   
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
                                                         <!-- start pinned article -->
                                                         
                                                        <div class="panel panel-success">
                                                            <div class="panel-heading caption">
                                                                <h3 class="panel-title caption uppercase">
                                                               Pinned News

                                                                </h3>
                                                            </div>
                                                            
                                                        </div>

                                                        @if(isset($pin_arts) && isset($arts))
                                                        @foreach(($pin_arts as $pin_art) && ($arts as $art))
                                                        
                                                        <div class="panel panel-info">
                                                            <div class="panel-heading caption">
                                                                <a href="{{url('viewarticleadmin/' . $art->id)}}">{{Str::limit($pin_art->slug, 100)}}</a>
                                                            </div>
                                                           
                                                        </div>
                                                        
                                                        @endforeach
                                                        
                                                       
                                                        @endif
                                                       
                                                        <!-- end pinned article -->

                                                        <!-- title top stories-->
                                                        <div class="panel panel-success">
                                                            <div class="panel-heading caption">
                                                                <h3 class="panel-title caption uppercase">
                                                                Top stories
                                                                </h3>
                                                            </div>
                                                            
                                                        </div>
                                                        <!-- end title top stories -->
                                                        @if(isset($arts))
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
                                                                    <a href="{{url('viewarticleadmin/' . $art->id)}}"><button class="btn btn-info pull-right" >Read More</button></a>
                                                                    <br>
                                                                
                                                                    <hr>
                                                                    Posted at {{$art->created_at->toDateString()}} by {{$art->user->first_name}}
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                        </div>
                                                        
                                                        @endforeach
                                                        @endif
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
                                                        @if(isset($arts)&&isset($entertainments))
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
                                                                    <a href="{{url('viewarticleadmin/' . $art->id)}}"><button class="btn btn-info pull-right" >Read More</button></a>
                                                                    <br>
                                                                  
                                                                    <hr>
                                                                    Posted at {{$art->created_at}} by {{$art->user->first_name}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        @endforeach
                                                        @endif
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
                                                         @if(isset($arts)&&isset($sports))
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
                                                                    <a href="{{url('viewArticleAdmin/' . $art->id)}}"><button class="btn btn-info pull-right" >Read More</button></a>
                                                                    <br>
                                                                  
                                                                    <hr>
                                                                    Posted at {{$art->created_at}} by {{$art->user->first_name}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        @endforeach
                                                        @endif
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
                                                         @if(isset($arts)&&isset($politics))
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
                                                                    <a href="{{url('viewarticleadmin/' . $art->id)}}"><button class="btn btn-info pull-right" >Read More</button></a>
                                                                    <br>
                                                                    
                                                                    <hr>
                                                                    Posted at {{$art->created_at}} by {{$art->user->first_name}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        @endforeach
                                                        @endif
                                                        {{$news->links() }}
                                                        <!-- end entertainment -->
                                                        <!-- end profile -->
                                                         <!-- All news-->
                                                        <div class="panel panel-success">
                                                            <div class="panel-heading caption">
                                                                <h3 class="panel-title caption uppercase">
                                                                News
                                                                </h3>
                                                            </div>
                                                            
                                                        </div>
                                                        @if(isset($arts)&&isset($newSearchs))
                                                        @foreach($newSearchs as $newSearch)
                                                        
                                                        <div class="panel panel-info">
                                                            <div class="panel-heading caption">
                                                                <h3 class="panel-title caption uppercase">
                                                                {{$newSearch->slug}}
                                                                </h3>
                                                            </div>
                                                            <div id="accordion1_1" class="panel">
                                                                <div class="panel-body">{{ Str::limit($newSearch->text, 300) }}
                                                                    <br>
                                                                    <br>
                                                                    <a href="{{url('viewarticleadmin/' . $art->id)}}"><button class="btn btn-info pull-right" >Read More</button></a>
                                                                     @if(isset($newSearch->pinned_art) && ($newSearch->pinned_art == 0))
                                                                    <a href="{{url('pinnednews/' . $art->id)}}"><button class="btn btn-danger pull-left" >Pin</button></a>
                                                                    @elseif(isset($newSearch->pinned_art) && ($newSearch->pinned_art == 1))
                                                                    <a href="{{url('unpinnednews/' . $art->id)}}"><button class="btn btn-info pull-left" >unPin</button></a>
                                                                    @endif
                                                                    <br>
                                                                    <hr>
                                                                    
                                                                    Posted at {{$art->created_at}} by {{$art->user->first_name}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        @endforeach
                                                        
                                                      @endif
                                                        <!-- end all news -->
                                                       
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
                                                     @if(isset($notifications))
                                                    @foreach($notifications as $notification)
                                                    <div class="panel panel-bg-green">
                                                        <div class="panel-heading">
                                                            
                                                         
                                                             {{ $notification->userauth->first_name}} {{ $notification->acttype->name}} at {{$notification->created_at}}                                                      
                                                        </div>
                                                       
                                                    </div>
                                                    @endforeach
                                                    @else
                                                    <div class="tile-body">
                                                            <br>
                                                            

                                                            <h3>No User Yet</h3>

                                                            
                                                        </div>
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