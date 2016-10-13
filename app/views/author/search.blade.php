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
                                                
                                                <div class="caption">Articles</div>
                                               

                                                </div>
                                                <div class="portlet-body">
                                             <div class=""></div>
                <div class="portlet-body">
                                                          
                                
                <h4 class="uppercase">Search results for {{ $keyword }}</h4>
      
           
             
              @foreach($news as $new)
              
                <a href="#">{{ $new->slug }}</a>
                <div class="portlet title">
                @foreach($cats as $cat)
                @if($cat->id == $new->category_id )
                {{ $cat->name }}
                @endif
                 @endforeach
                </div>
               
               
                <div>
                @foreach($tags as $tag)
                @if($tag->id == $new->tag_id)
                {{ $tag->name }}
                @endif
                @endforeach
                </div>
                

                
                
              
            <a class="btn btn-success pull-right" href="{{url('viewArticle')}}/{{$new->id}}" type>Continue Reading</a>
              @endforeach
            <div style="margin:20px 0;">
            {{$news->links()}}
             </div>
                                                      
          </div>
    </div>
 
                                                           
                                                        </div>
                                                      
                                                </div>
                                           
                                        <!-- end page portlet light-->
                                       
                                        <!-- end col-md-6 -->
                                        <div class="col-md-3">

                                            <div class="portlet light">
                                                <div class="portlet-title">
                                                     <div class="caption">Top Latest Stories</div>
                                                </div>
                                                @foreach($newSearchs as $newSearch)
                                                
                                                <div class="portlet-body">
                                                     <a href="{{url('viewArticle/' . $new->id)}}"><div class="font-blue-ebonyclay caption "><strong>{{$newSearch->slug}}</strong></div></a>
                                                      {{$newSearch->text}}
                                                </div>
                                                <div class="portlet-title">
                                                    
                                                </div>
                                                @endforeach
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
