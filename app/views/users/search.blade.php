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
                                    
                                     <!-- BEGIN PAGE CONTENT INNER -->
                                      <!-- BEGIN PAGE CONTENT INNER -->
                                    <div class="page-content-inner">
                                        <div class="profile">
                                            <div class="tabbable-line tabbable-full-width">
                                                <ul class="nav nav-tabs">
                                                    <li >
                                                        <a href="{{url('userdash')}}"> Overview </a>
                                                    </li>
                                                    <li class="active">
                                                        <a href="{{url('usersearch')}}" > Search </a>
                                                    </li>
                                                   
                                                </ul>
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
                                                                                    <div class="panel-body"><a href="{{url('viewArticle/' . $category->id)}}">{{$category->name}}</a>
                                                                                    
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
                                                                                     Search results for {{ $keyword }}

                                                                                    </h3>
                                                                                </div>
                                                                                
                                                                            </div>
                                                                            <!-- end title top stories -->
                                                                           
                                                                            <div class="panel panel-info">
                                                                                 @foreach($news as $new)
                                                                                <div class="panel-heading caption">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12">
                                                                            <div class="col-md-10">
                                                                                                <h1 class="panel-title caption uppercase ">
                                                                                        @foreach($cats as $cat)
                                                                                        @if($cat->id == $new->category_id )
                                                                                             {{ $cat->name }}
                                                                                         @endif
                                                                                        @endforeach
                                                                                        <a href="#">{{ $new->slug }}</a>

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
                                                                                    {{$new->text}}
                                                                                  
                                                                                </div>

                                                                                </div>

                                                                                @endforeach

                                                                            </div>
                                                                             <br>
                                                                                <br>
                                                                          
                                                                         

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
    </div>

</div>
</div>

        
    </body>



@stop
