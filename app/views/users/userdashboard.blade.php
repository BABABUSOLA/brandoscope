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
                            <a href="{{url('homepage')}}"> HOME
                                <span class="arrow"></span>
                            </a>
                            
                        </li>
                        {{-- <li class="menu-dropdown ">
                            <a href="{{('#about')}}"> ARTICLE
                                <span class="arrow"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{url('newArticle')}}" class="nav-link"> New Article</a>
                                </li>
                                <li>
                                    <a href="#">Edit Article</a>
                                </li>
                            </ul>
                            
                        </li> --}}
                        
                        
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
            <!-- BEGIN PAGE CONTENT INNER -->
            <div class="page-content-inner">
                <div class="profile">
                    <div class="tabbable-line tabbable-full-width">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="{{url('userdash')}}" data-toggle="tab"> Overview </a>
                            </li>
                            <li>
                                <a href="{{url('useraccount')}}" > Account </a>
                            </li>
                            
                        </ul>
                        @if (Session::has('success'))
                        <div class="panel panel-info">
                            <div class="panel-heading"> {{Session::get('success')}}</div>
                        </div>
                        @elseif(Session::has('fail'))
                        <div class="panel panel-danger">
                            <div class="panel-heading"> {{Session::get('fail')}}</div>
                        </div>
                        @endif
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_1_1">
                                <div class="row">
                                    
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="panel panel-info">
                                                    <div class="panel-heading">
                                                        <h1 class="font-green sbold uppercase">{{Auth::User()->first_name}} {{Auth::User()->last_name}} </h1>
                                                        
                                                        <p>
                                                            <a href="#"> {{Auth::User()->email}}</a>
                                                        </p>
                                                        <ul class="list-inline">
                                                            <li>
                                                            <i class="fa fa-map-marker"></i> Nigeria</li>
                                                            <li>
                                                            <i class="fa fa-calendar"></i> {{Auth::user()->created_at->toDateString()}}</li>
                                                            <li>
                                                            <i class="fa fa-briefcase"></i> {{Auth::User()->role->name}} </li>
                                                            
                                                            <li>
                                                            <i class="fa fa-heart"></i> Reading</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- start categories -->
                                                
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
                                            <!--end col-md-8-->
                                        </div>
                                        
                                        <!-- end categories -->
                                        <!-- end col-md-3 -->
                                        <!--end row-->
                                        
                                        <div class="col-md-9">
                                            
                                            <div class="tab-content">
                                                <div id="tab_1_1" class="tab-pane active">
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
                                                                    <a href="{{url('userviewarticle/' . $art->id)}}"><button class="btn btn-info pull-right" >Read More</button></a>
                                                                   
                                                                    <br>
                                                                  
                                                                    <hr>
                                                                    Posted at {{$art->created_at}} by {{$art->user->first_name}}
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
                                                                    <a href="{{url('userviewarticle/' . $entertainment->id)}}"><button class="btn btn-info pull-right" >Read More</button></a>
                                                                  
                                                                    <br>
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
                                                                    <a href="{{url('userviewarticle/' . $sport->id)}}"><button class="btn btn-info pull-right" >Read More</button></a>
                                                                 
                                                                    <br>
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
                                                                    <a href="{{url('userviewarticle/' . $politics->id)}}"><button class="btn btn-info pull-right" >Read More</button></a>
                                                                    
                                                                    <br>
                                                                    <hr>
                                                                    
                                                                    
                                                                    Posted at {{$art->created_at}} by {{$art->user->first_name}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        @endforeach
                                                        {{$news->links() }}
                                                        <!-- end entertainment -->
                                                        <!-- start news -->
                                                      {{--   
                                                        <div class="panel panel-success">
                                                            <div class="panel-heading caption">
                                                                <h3 class="panel-title caption uppercase">
                                                             News
                                                                </h3>
                                                            </div>
                                                            
                                                        </div>
                                                         @if(isset($news_arts))
                                                        @foreach($news_arts as $news_art)
                                                        
                                                        <div class="panel panel-info">
                                                            <div class="panel-heading caption">
                                                                <h3 class="panel-title caption uppercase">
                                                                {{$news_art->slug}}
                                                                </h3>
                                                            </div>
                                                            <div id="accordion1_1" class="panel">
                                                                <div class="panel-body">{{ Str::limit($news_art->text, 300) }}
                                                                    <br>
                                                                    <br>
                                                                    <a href="{{url('viewArticle/' . $news_art->id)}}"><button class="btn btn-info pull-right" >Read More</button></a>
                                                                     @if(isset($news_art->pinned_art) && ($news_art->pinned_art == 0))
                                                                    <a href="{{url('pinnednews/' . $news_art->id)}}"><button class="btn btn-danger pull-left" >Pin</button></a>
                                                                    @elseif(isset($news_art->pinned_art) && ($news_art->pinned_art == 1))
                                                                    <a href="{{url('unpinnednews/' . $news_art->id)}}"><button class="btn btn-info pull-left" >unPin</button></a>
                                                                    @endif
                                                                    <br>
                                                                    <hr>
                                                                    
                                                                    Posted at {{$news_art->created_at}} by {{$news_art->user->first_name}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        @endforeach
                                                        
                                                        <div style="margin:20px 0;">
                                                            {{$news_arts->links() }}
                                                        </div>
                                                        @endif
                                                        <!-- end news --> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        {{--     </div> --}}
                                    </div>
                                    <!-- end  col-md-9 -->
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        <!--tab_1_2-->
                        
                        <!--end tab-pane-->
                        
                        <!--end tab-pane-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE CONTENT INNER -->
</div>
</div>
</div>
<script>
// $('#comment').click(function(){
//          $('#hide').toggleClass('hidden');
//     });
</script>
</body>
@stop