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
                                            <a href="{{url('authorprofile')}}"> Home
                                                <span class="arrow"></span>
                                            </a>
                                         
                                        </li>
                                       {{--  <li class="menu-dropdown ">
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
                                         --}}
                                       
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
                                                            <div class="panel-body"><a href="{{url('viewArticleCategory/' . $category->id)}}">{{$category->name}}</a>
                                                                                    
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
                                                    @if(count($newCats) < 1)
                                                     <div class="panel panel-info ">
                            <div class=" panel-heading " style="text-align:center"> There is no news in the category selected</div>
                            <!-- to view the particular dashboard of the user -->
                            <div class="panel-body" style="text-align:center">
                                Please select another category or click on this <a href="{{url('authorprofile')}}">link</a> to go back to your homepage
                            </div>
                        </div>
                                                    @endif
                                                    @if(isset($newCats) )
                                                   
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
                                                                    <a href="{{url('viewArticle/' . $newCat->id)}}"><button class="btn btn-info pull-right" >Read More</button></a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                      
                                                    </div>
                                                    @endforeach
                                                    @endif
                                                </div>
                                                {{$newCats->links()}}

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
