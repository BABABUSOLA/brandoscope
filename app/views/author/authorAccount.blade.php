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
                                                        <a href="{{url('authorprofile')}}" > Overview </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{url('authornews')}}">News</a>
                                                    </li>
                                                    <li class="active">
                                                        <a href="{{url('authorAccount')}}"> Account </a>
                                                    </li>
                                                    
                                                </ul>
                                                
                                                <div class="row">
                                                    
                                                    <div class="col-md-12">
                                                        <br>
                                                        
                                                        <div class="tab-pane" id="tab_1_3">
                                                            
                                                            <div class="row profile-account">
                                                                <div class="col-md-3">
                                                                    <ul class="ver-inline-menu tabbable margin-bottom-10">
                                                                        <li class="active">
                                                                            <a data-toggle="tab" href="#tab_1-1">
                                                                            <i class="fa fa-cog"></i> Personal info </a>
                                                                            <span class="after"> </span>
                                                                        </li>
                                                                         <li id="pencil">
                                                                            <a data-toggle="tab" href="#tab_1-2">
                                                                            <i class="fa fa-pencil"></i> Edit info </a>
                                                                            <span class="after"> </span>
                                                                        </li>
                                                                       
                                                                        
                                                                    </ul>
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <div class="tab-content">
                                                                        <div id="tab_1-1" class="tab-pane active">
                                                                            {{Form::open(array('route'=>'storeprofile','class'=>'login-form'))}}
                                                                            <fieldset>
                                                                                
                                                                                
                                                                                
                                                                                <div class="form-group">
                                                                                    <label class="control-label visible-ie8 visible-ie9">first name</label>
                                                                                    <div class="input-icon">
                                                                                        <i class="fa fa-font"></i>
                                                                                        
                                                                                        {{ Form::text('first_name',$user2->first_name,array('class'=>'form-control','placeholder'=>'First name','required data validation-required-message'=>'Please enter your  first name','disabled'))}}
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="control-label visible-ie8 visible-ie9">Last Name</label>
                                                                                    <div class="input-icon">
                                                                                        <i class="fa fa-font"></i>
                                                                                        
                                                                                        {{ Form::text('last_name',$user2->last_name,array('class'=>'form-control','placeholder'=>'Last name','required data validation-required-message'=>'Please enter your  Last name','disabled'))}}
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    
                                                                                    <label class="control-label visible-ie8 visible-ie9">Email</label>
                                                                                    <div class="input-icon">
                                                                                        <i class="fa fa-envelope"></i>
                                                                                        
                                                                                        {{ Form::email('email',$user2->email,array('class'=>'form-control','placeholder'=>'Email','required data validation-required-message'=>'Please enter your  Email','disabled'))}}
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="control-label visible-ie8 visible-ie9">Phone Number</label>
                                                                                    <div class="input-icon">
                                                                                        <i class="fa fa-phone-square"></i>
                                                                                        
                                                                                        {{ Form::input('tel','mobile_phone',$user2->mobile_phone,array('class'=>'form-control','placeholder'=>'Mobile Phone number','required data validation-required-message'=>'Please enter your  mobile phone number.','disabled'))}}
                                                                                    </div>
                                                                                </div>
                                                                                
                                                                                
                                                                                
                                                                                <div class="form-actions">
                                                                                    
                                                                                    {{link_to_route('authorProfile','Back','',array('class'=>'btn red pull-left'))}}
                                                                                    
                                                                                    
                                                                                </div>
                                                                                
                                                                            </fieldset>
                                                                            {{Form::close()}}
                                                                           
                                                                            <!-- END REGISTRATION FORM -->
                                                                            
                                                                        </div>
                                                                        <!-- end tab_1 -->
                                                                         <div id="tab_1-2" class="tab-pane ">
                                                                            {{Form::open(array('route'=>'storeprofile','class'=>'login-form'))}}
                                                                            <fieldset>
                                                                                
                                                                                
                                                                                
                                                                                <div class="form-group">
                                                                                    <label class="control-label visible-ie8 visible-ie9">first name</label>
                                                                                    <div class="input-icon">
                                                                                        <i class="fa fa-font"></i>
                                                                                        
                                                                                        {{ Form::text('first_name',$user2->first_name,array('class'=>'form-control','placeholder'=>'First name','required data validation-required-message'=>'Please enter your  first name'))}}
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="control-label visible-ie8 visible-ie9">Last Name</label>
                                                                                    <div class="input-icon">
                                                                                        <i class="fa fa-font"></i>
                                                                                        
                                                                                        {{ Form::text('last_name',$user2->last_name,array('class'=>'form-control','placeholder'=>'Last name','required data validation-required-message'=>'Please enter your  Last name'))}}
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    
                                                                                    <label class="control-label visible-ie8 visible-ie9">Email</label>
                                                                                    <div class="input-icon">
                                                                                        <i class="fa fa-envelope"></i>
                                                                                        
                                                                                        {{ Form::email('email',$user2->email,array('class'=>'form-control','placeholder'=>'Email','required data validation-required-message'=>'Please enter your  Email'))}}
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="control-label visible-ie8 visible-ie9">Phone Number</label>
                                                                                    <div class="input-icon">
                                                                                        <i class="fa fa-phone-square"></i>
                                                                                        
                                                                                        {{ Form::input('tel','mobile_phone',$user2->mobile_phone,array('class'=>'form-control','placeholder'=>'Mobile Phone number','required data validation-required-message'=>'Please enter your  mobile phone number.'))}}
                                                                                    </div>
                                                                                </div>
                                                                                
                                                                                
                                                                                
                                                                                <div class="form-actions">
                                                                                    
                                                                                    {{link_to_route('authorProfile','Back','',array('class'=>'btn red pull-left'))}}
                                                                                    
                                                                                    {{Form::submit('Save',array('class'=>'btn green pull-right'))}}
                                                                                    
                                                                                </div>
                                                                                
                                                                            </fieldset>
                                                                            {{Form::close()}}
                                                                            <!-- END REGISTRATION FORM -->
                                                                            
                                                                        </div>
                                                                       
                                                                        
                                                                    </div>
                                                                </div>
                                                                <!--end col-md-9-->
                                                            </div>
                                                        </div>
                                                        <!--end tab-pane-->
                                                        
                                                    </div>
                                                </div>
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
</body>
@stop