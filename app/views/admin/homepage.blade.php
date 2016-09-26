@extends('layouts.masterAdmin')

@section('body')

<div class="page-wrapper-row full-height">
    <div class="page-wrapper-middle">
                    <!-- BEGIN CONTAINER -->
            <div class="page-container">
                        <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                            <!-- BEGIN CONTENT BODY -->
                            <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <div class="container">
                                    <!-- BEGIN PAGE TITLE -->
                            <div class="page-title">
                                <h1>ADMIN NAME
                                    <small></small>
                                </h1>
                            </div>
                                    <!-- END PAGE TITLE -->
                                   
                        </div>
                    </div>
                            <!-- END PAGE HEAD-->
                            <!-- BEGIN PAGE CONTENT BODY -->
                    <div class="page-content">
                        <div class="container">
                                    <!-- BEGIN PAGE BREADCRUMBS -->
                            <ul class="page-breadcrumb breadcrumb">
                                <li>
                                    <a href="{{url('landing')}}">Home</a>
                                        <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <a href="#">Admin</a>
                                       
                                </li>
                               
                            </ul>
                                    <!-- END PAGE BREADCRUMBS -->
                                    <!-- BEGIN PAGE CONTENT INNER -->
                            <div class="page-content-inner">
                                <div class="row">
                                    <div class="col-md-12">
                                                <!-- BEGIN PROFILE SIDEBAR -->
                                        <div class="profile-sidebar">
                                                    <!-- PORTLET MAIN -->
                                            <div class="portlet light profile-sidebar-portlet ">
                                                        
                                                <div class="profile-usermenu">
                                                    <ul class="nav">
                                                        <li class="active">
                                                            <a href="page_user_profile_1.html">
                                                            <i class="icon-home"></i> Overview </a>
                                                        </li>
                                                        <li>
                                                            <a href="page_user_profile_1_account.html">
                                                            <i class="icon-settings"></i> Account Settings </a>
                                                        </li>
                                                        <li>
                                                            <a href="page_user_profile_1_help.html">
                                                            <i class="icon-info"></i> Help </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                        <!-- END MENU -->
                                            </div>
                                                    <!-- END PORTLET MAIN -->
                                                    <!-- PORTLET MAIN -->
                                            <div class="portlet light ">
                                                        <!-- STAT -->
                                                <div class="row list-separated profile-stat">
                                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                                        <div class="uppercase profile-stat-title"> 37 </div>
                                                        <div class="uppercase profile-stat-text"> Projects </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                                        <div class="uppercase profile-stat-title"> 51 </div>
                                                        <div class="uppercase profile-stat-text"> Tasks </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                                        <div class="uppercase profile-stat-title"> 61 </div>
                                                        <div class="uppercase profile-stat-text"> Uploads </div>
                                                    </div>
                                                </div>
                                                        <!-- END STAT -->
                                                <div>
                                                    <h4 class="profile-desc-title">About ADMIN</h4>
                                                        <span class="profile-desc-text"> TEXT IN DATABASE </span>
                                                            <div class="margin-top-20 profile-desc-link">
                                                                <i class="fa fa-globe"></i>
                                                                <a href="http://www.keenthemes.com">www.keenthemes.com</a>
                                                            </div>
                                                            <div class="margin-top-20 profile-desc-link">
                                                                <i class="fa fa-twitter"></i>
                                                                <a href="http://www.twitter.com/keenthemes/">@keenthemes</a>
                                                            </div>
                                                            <div class="margin-top-20 profile-desc-link">
                                                                <i class="fa fa-facebook"></i>
                                                                <a href="http://www.facebook.com/keenthemes/">keenthemes</a>
                                                         </div>
                                                </div>
                                            </div>
                                                    <!-- END PORTLET MAIN -->
                                        </div>
                                                <!-- END BEGIN PROFILE SIDEBAR -->
                                                <!-- BEGIN PROFILE CONTENT -->
                                        <div class="profile-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                            <!-- BEGIN PORTLET -->
                                                    <div class="portlet light ">
                                                        <!-- BEGIN PORTLET -->
                                                            <div class="portlet light ">
                                                                <div class="portlet-title">
                                                                    <div class="caption caption-md">
                                                                        <i class="icon-bar-chart theme-font hide"></i>
                                                                        <span class="caption-subject font-blue-madison bold uppercase">Member Support</span>
                                                                        <span class="caption-helper">45 pending</span>
                                                                    </div>
                                                                    <div class="inputs">
                                                                        <div class="portlet-input input-inline input-small ">
                                                                            <div class="input-icon right">
                                                                                <i class="icon-magnifier"></i>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="search..."> </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="portlet-body">
                                                                    <div class="slimScrollDiv" style="position:relative;overflow:hidden;width:auto;height:305px">
                                                                    <div class="scroller" style="position:relative;overflow:hidden;width:auto;height:305px" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2" data-initialized="1">
                                                                        <div class="general-item-list">
                                                                            <div class="item">
                                                                                <div class="item-head">
                                                                                    <div class="item-details">
                                                                                        <img class="item-pic" src="../assets/pages/media/users/avatar4.jpg">
                                                                                        <a href="" class="item-name primary-link">Nick Larson</a>
                                                                                        <span class="item-label">3 hrs ago</span>
                                                                                    </div>
                                                                                    <span class="item-status">
                                                                                        <span class="badge badge-empty badge-success"></span> Open</span>
                                                                                </div>
                                                                                <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                                                                                </div>
                                                                            </div>
                                                                            <div class="item">
                                                                                <div class="item-head">
                                                                                    <div class="item-details">
                                                                                        <img class="item-pic" src="../assets/pages/media/users/avatar3.jpg">
                                                                                        <a href="" class="item-name primary-link">Mark</a>
                                                                                        <span class="item-label">5 hrs ago</span>
                                                                                    </div>
                                                                                    <span class="item-status">
                                                                                        <span class="badge badge-empty badge-warning"></span> Pending</span>
                                                                                </div>
                                                                                <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat tincidunt ut laoreet. </div>
                                                                            </div>
                                                                            <div class="item">
                                                                                <div class="item-head">
                                                                                    <div class="item-details">
                                                                                        Nick Larson</a>
                                                                                        <span class="item-label">8 hrs ago</span>
                                                                                    </div>
                                                                                    <span class="item-status">
                                                                                        <span class="badge badge-empty badge-primary"></span> Closed</span>
                                                                                </div>
                                                                                <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh. </div>
                                                                            </div>
                                                                            <div class="item">
                                                                                <div class="item-head">
                                                                                    <div class="item-details">
                                                                                        Nick Larson</a>
                                                                                        <span class="item-label">12 hrs ago</span>
                                                                                    </div>
                                                                                    <span class="item-status">
                                                                                        <span class="badge badge-empty badge-danger"></span> Pending</span>
                                                                                </div>
                                                                                <div class="item-body"> Consectetuer adipiscing elit Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                                                    </div>
                                                                            </div>
                                                                            <div class="item">
                                                                                <div class="item-head">
                                                                                    <div class="item-details">
                                                                                        
                                                                                        <a href="" class="item-name primary-link">Richard Stone</a>
                                                                                        <span class="item-label">2 days ago</span>
                                                                                    </div>
                                                                                    <span class="item-status">
                                                                                        <span class="badge badge-empty badge-danger"></span> Open</span>
                                                                                </div>
                                                                                <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, ut laoreet dolore magna aliquam erat volutpat. </div>
                                                                            </div>
                                                                            <div class="item">
                                                                                <div class="item-head">
                                                                                    <div class="item-details">
                                                                                        
                                                                                        <a href="" class="item-name primary-link">Dan</a>
                                                                                        <span class="item-label">3 days ago</span>
                                                                                    </div>
                                                                                    <span class="item-status">
                                                                                        <span class="badge badge-empty badge-warning"></span> Pending</span>
                                                                                </div>
                                                                                <div class="item-body"> Lorem ipsum dolor sit amet, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                                                                            </div>
                                                                            <div class="item">
                                                                                <div class="item-head">
                                                                                    <div class="item-details">
                                                                                        
                                                                                        <a href="" class="item-name primary-link">Larry</a>
                                                                                        <span class="item-label">4 hrs ago</span>
                                                                                    </div>
                                                                                    <span class="item-status">
                                                                                        <span class="badge badge-empty badge-success"></span> Open</span>
                                                                                </div>
                                                                                <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <div class="slimScrollBar" style="background: rgb(2115, 220,226); width:7px; position:absolute; top 0px; opacity 0.4; display: block; border-radius:7px; z-index:99; right:1px; height:112.758px;">

                                                            </div>
                                                            <div class="slimScrollRail" style="width:7px; height:100%; postion:absolute;top:0px; display:none; border-radius:7px; background:rgb(234,234,234); opacity:0.2; z-index:90; right:">
                                                            </div>
                                                        </div>
                                                            <!-- END PORTLET -->
                                                        
                                                    </div> <!-- END PORTLET LIGHT -->
                                                </div>
                                                <div class="col-md-6">
                                                            <!-- BEGIN PORTLET -->
                                                    <div class="portlet light ">
                                                        <div class="portlet-title tabbable-line">
                                                            <div class="caption caption-md">
                                                                <i class="icon-globe theme-font hide"></i>
                                                                <span class="caption-subject font-blue-madison bold uppercase">Feeds</span>
                                                            </div>
                                                            <ul class="nav nav-tabs">
                                                               
                                                                <li class="active">
                                                                    <a href="#tab_1_2" data-toggle="tab"> Activities </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="portlet-body">
                                                                    <!--BEGIN TABS-->
                                                                    <div class="tab-content">
                                                                        <div class="tab-pane active" id="tab_1_1">
                                                                            <div class="scroller" style="height: 320px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                                                                                <ul class="feeds">
                                                                                    <li>
                                                                                        <div class="col1">
                                                                                            <div class="cont">
                                                                                                <div class="cont-col1">
                                                                                                    <div class="label label-sm label-success">
                                                                                                        <i class="fa fa-bell-o"></i>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="cont-col2">
                                                                                                    <div class="desc"> You have 4 pending tasks.
                                                                                                        <span class="label label-sm label-info"> Take action
                                                                                                            <i class="fa fa-share"></i>
                                                                                                        </span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col2">
                                                                                            <div class="date"> Just now </div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="javascript:;">
                                                                                            <div class="col1">
                                                                                                <div class="cont">
                                                                                                    <div class="cont-col1">
                                                                                                        <div class="label label-sm label-success">
                                                                                                            <i class="fa fa-bell-o"></i>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="cont-col2">
                                                                                                        <div class="desc"> New version v1.4 just lunched! </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col2">
                                                                                                <div class="date"> 20 mins </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="col1">
                                                                                            <div class="cont">
                                                                                                <div class="cont-col1">
                                                                                                    <div class="label label-sm label-danger">
                                                                                                        <i class="fa fa-bolt"></i>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="cont-col2">
                                                                                                    <div class="desc"> Database server #12 overloaded. Please fix the issue. </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col2">
                                                                                            <div class="date"> 24 mins </div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="col1">
                                                                                            <div class="cont">
                                                                                                <div class="cont-col1">
                                                                                                    <div class="label label-sm label-info">
                                                                                                        <i class="fa fa-bullhorn"></i>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="cont-col2">
                                                                                                    <div class="desc"> New order received and pending for process. </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col2">
                                                                                            <div class="date"> 30 mins </div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="col1">
                                                                                            <div class="cont">
                                                                                                <div class="cont-col1">
                                                                                                    <div class="label label-sm label-success">
                                                                                                        <i class="fa fa-bullhorn"></i>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="cont-col2">
                                                                                                    <div class="desc"> New payment refund and pending approval. </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col2">
                                                                                            <div class="date"> 40 mins </div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="col1">
                                                                                            <div class="cont">
                                                                                                <div class="cont-col1">
                                                                                                    <div class="label label-sm label-warning">
                                                                                                        <i class="fa fa-plus"></i>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="cont-col2">
                                                                                                    <div class="desc"> New member registered. Pending approval. </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col2">
                                                                                            <div class="date"> 1.5 hours </div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="col1">
                                                                                            <div class="cont">
                                                                                                <div class="cont-col1">
                                                                                                    <div class="label label-sm label-success">
                                                                                                        <i class="fa fa-bell-o"></i>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="cont-col2">
                                                                                                    <div class="desc"> Web server hardware needs to be upgraded.
                                                                                                        <span class="label label-sm label-default "> Overdue </span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col2">
                                                                                            <div class="date"> 2 hours </div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="col1">
                                                                                            <div class="cont">
                                                                                                <div class="cont-col1">
                                                                                                    <div class="label label-sm label-default">
                                                                                                        <i class="fa fa-bullhorn"></i>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="cont-col2">
                                                                                                    <div class="desc"> Prod01 database server is overloaded 90%. </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col2">
                                                                                            <div class="date"> 3 hours </div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="col1">
                                                                                            <div class="cont">
                                                                                                <div class="cont-col1">
                                                                                                    <div class="label label-sm label-warning">
                                                                                                        <i class="fa fa-bullhorn"></i>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="cont-col2">
                                                                                                    <div class="desc"> New group created. Pending manager review. </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col2">
                                                                                            <div class="date"> 5 hours </div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="col1">
                                                                                            <div class="cont">
                                                                                                <div class="cont-col1">
                                                                                                    <div class="label label-sm label-info">
                                                                                                        <i class="fa fa-bullhorn"></i>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="cont-col2">
                                                                                                    <div class="desc"> Order payment failed. </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col2">
                                                                                            <div class="date"> 18 hours </div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="col1">
                                                                                            <div class="cont">
                                                                                                <div class="cont-col1">
                                                                                                    <div class="label label-sm label-default">
                                                                                                        <i class="fa fa-bullhorn"></i>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="cont-col2">
                                                                                                    <div class="desc"> New application received. </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col2">
                                                                                            <div class="date"> 21 hours </div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="col1">
                                                                                            <div class="cont">
                                                                                                <div class="cont-col1">
                                                                                                    <div class="label label-sm label-info">
                                                                                                        <i class="fa fa-bullhorn"></i>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="cont-col2">
                                                                                                    <div class="desc"> Dev90 web server restarted. Pending overall system check. </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col2">
                                                                                            <div class="date"> 22 hours </div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="col1">
                                                                                            <div class="cont">
                                                                                                <div class="cont-col1">
                                                                                                    <div class="label label-sm label-default">
                                                                                                        <i class="fa fa-bullhorn"></i>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="cont-col2">
                                                                                                    <div class="desc"> New member registered. Pending approval </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col2">
                                                                                            <div class="date"> 21 hours </div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="col1">
                                                                                            <div class="cont">
                                                                                                <div class="cont-col1">
                                                                                                    <div class="label label-sm label-info">
                                                                                                        <i class="fa fa-bullhorn"></i>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="cont-col2">
                                                                                                    <div class="desc"> L45 Network failure. Schedule maintenance. </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col2">
                                                                                            <div class="date"> 22 hours </div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="col1">
                                                                                            <div class="cont">
                                                                                                <div class="cont-col1">
                                                                                                    <div class="label label-sm label-default">
                                                                                                        <i class="fa fa-bullhorn"></i>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="cont-col2">
                                                                                                    <div class="desc"> Order canceled with failed payment. </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col2">
                                                                                            <div class="date"> 21 hours </div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="col1">
                                                                                            <div class="cont">
                                                                                                <div class="cont-col1">
                                                                                                    <div class="label label-sm label-info">
                                                                                                        <i class="fa fa-bullhorn"></i>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="cont-col2">
                                                                                                    <div class="desc"> Web-A2 clound instance created. Schedule full scan. </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col2">
                                                                                            <div class="date"> 22 hours </div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="col1">
                                                                                            <div class="cont">
                                                                                                <div class="cont-col1">
                                                                                                    <div class="label label-sm label-default">
                                                                                                        <i class="fa fa-bullhorn"></i>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="cont-col2">
                                                                                                    <div class="desc"> Member canceled. Schedule account review. </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col2">
                                                                                            <div class="date"> 21 hours </div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="col1">
                                                                                            <div class="cont">
                                                                                                <div class="cont-col1">
                                                                                                    <div class="label label-sm label-info">
                                                                                                        <i class="fa fa-bullhorn"></i>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="cont-col2">
                                                                                                    <div class="desc"> New order received. Please take care of it. </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col2">
                                                                                            <div class="date"> 22 hours </div>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tab-pane" id="tab_1_2">
                                                                            <div class="scroller" style="height: 337px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                                                                                <ul class="feeds">
                                                                                    <li>
                                                                                        <a href="javascript:;">
                                                                                            <div class="col1">
                                                                                                <div class="cont">
                                                                                                    <div class="cont-col1">
                                                                                                        <div class="label label-sm label-success">
                                                                                                            <i class="fa fa-bell-o"></i>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="cont-col2">
                                                                                                        <div class="desc"> New user registered </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col2">
                                                                                                <div class="date"> Just now </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="javascript:;">
                                                                                            <div class="col1">
                                                                                                <div class="cont">
                                                                                                    <div class="cont-col1">
                                                                                                        <div class="label label-sm label-success">
                                                                                                            <i class="fa fa-bell-o"></i>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="cont-col2">
                                                                                                        <div class="desc"> New order received </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col2">
                                                                                                <div class="date"> 10 mins </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="col1">
                                                                                            <div class="cont">
                                                                                                <div class="cont-col1">
                                                                                                    <div class="label label-sm label-danger">
                                                                                                        <i class="fa fa-bolt"></i>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="cont-col2">
                                                                                                    <div class="desc"> Order #24DOP4 has been rejected.
                                                                                                        <span class="label label-sm label-danger "> Take action
                                                                                                            <i class="fa fa-share"></i>
                                                                                                        </span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col2">
                                                                                            <div class="date"> 24 mins </div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="javascript:;">
                                                                                            <div class="col1">
                                                                                                <div class="cont">
                                                                                                    <div class="cont-col1">
                                                                                                        <div class="label label-sm label-success">
                                                                                                            <i class="fa fa-bell-o"></i>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="cont-col2">
                                                                                                        <div class="desc"> New user registered </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col2">
                                                                                                <div class="date"> Just now </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="javascript:;">
                                                                                            <div class="col1">
                                                                                                <div class="cont">
                                                                                                    <div class="cont-col1">
                                                                                                        <div class="label label-sm label-success">
                                                                                                            <i class="fa fa-bell-o"></i>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="cont-col2">
                                                                                                        <div class="desc"> New user registered </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col2">
                                                                                                <div class="date"> Just now </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="javascript:;">
                                                                                            <div class="col1">
                                                                                                <div class="cont">
                                                                                                    <div class="cont-col1">
                                                                                                        <div class="label label-sm label-success">
                                                                                                            <i class="fa fa-bell-o"></i>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="cont-col2">
                                                                                                        <div class="desc"> New user registered </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col2">
                                                                                                <div class="date"> Just now </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="javascript:;">
                                                                                            <div class="col1">
                                                                                                <div class="cont">
                                                                                                    <div class="cont-col1">
                                                                                                        <div class="label label-sm label-success">
                                                                                                            <i class="fa fa-bell-o"></i>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="cont-col2">
                                                                                                        <div class="desc"> New user registered </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col2">
                                                                                                <div class="date"> Just now </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="javascript:;">
                                                                                            <div class="col1">
                                                                                                <div class="cont">
                                                                                                    <div class="cont-col1">
                                                                                                        <div class="label label-sm label-success">
                                                                                                            <i class="fa fa-bell-o"></i>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="cont-col2">
                                                                                                        <div class="desc"> New user registered </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col2">
                                                                                                <div class="date"> Just now </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="javascript:;">
                                                                                            <div class="col1">
                                                                                                <div class="cont">
                                                                                                    <div class="cont-col1">
                                                                                                        <div class="label label-sm label-success">
                                                                                                            <i class="fa fa-bell-o"></i>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="cont-col2">
                                                                                                        <div class="desc"> New user registered </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col2">
                                                                                                <div class="date"> Just now </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="javascript:;">
                                                                                            <div class="col1">
                                                                                                <div class="cont">
                                                                                                    <div class="cont-col1">
                                                                                                        <div class="label label-sm label-success">
                                                                                                            <i class="fa fa-bell-o"></i>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="cont-col2">
                                                                                                        <div class="desc"> New user registered </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col2">
                                                                                                <div class="date"> Just now </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--END TABS-->
                                                                </div>
                                                            </div>
                                                            <!-- END PORTLET -->
                                                        </div>
                                                    </div>
                                                        

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="portlet light portlet-fit ">


                                                                 <!-- BEGIN PAGE CONTENT BODY -->
                            <div class="page-content">
                                <div class="container">
                                   
                                    <!-- BEGIN PAGE CONTENT INNER -->
                                    <div class="page-content-inner">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="portlet light portlet-fit ">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="icon-microphone font-green"></i>
                                                            <span class="caption-subject bold font-green uppercase">TIMELINE</span>
                                                            <span class="caption-helper">Admin</span>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="btn-group btn-group-devided" data-toggle="buttons">
                                                                <label class="btn red btn-outline btn-circle btn-sm active">
                                                                    <input type="radio" name="options" class="toggle" id="option1">Settings</label>
                                                                <label class="btn  red btn-outline btn-circle btn-sm">
                                                                    <input type="radio" name="options" class="toggle" id="option2">Tools</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <div class="timeline">
                                                            <!-- TIMELINE ITEM -->
                                                            <div class="timeline-item">
                                                                <div class="timeline-badge">
                                                                    <img class="timeline-badge-userpic" src="../assets/pages/media/users/avatar80_1.jpg"> </div>
                                                                <div class="timeline-body">
                                                                    <div class="timeline-body-arrow"> </div>
                                                                    <div class="timeline-body-head">
                                                                        <div class="timeline-body-head-caption">
                                                                            <a href="javascript:;" class="timeline-body-title font-blue-madison">Andres Iniesta</a>
                                                                            <span class="timeline-body-time font-grey-cascade">Replied at 7:45 PM</span>
                                                                        </div>
                                                                        <div class="timeline-body-head-actions">
                                                                            <div class="btn-group">
                                                                                <button class="btn btn-circle green btn-sm dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Actions
                                                                                    <i class="fa fa-angle-down"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu pull-right" role="menu">
                                                                                    <li>
                                                                                        <a href="javascript:;">Action </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="javascript:;">Another action </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="javascript:;">Something else here </a>
                                                                                    </li>
                                                                                    <li class="divider"> </li>
                                                                                    <li>
                                                                                        <a href="javascript:;">Separated link </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="timeline-body-content">
                                                                        <span class="font-grey-cascade"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                                                                            nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- END TIMELINE ITEM -->
                                                            <!-- TIMELINE ITEM -->
                                                            <div class="timeline-item">
                                                                <div class="timeline-badge">
                                                                    <img class="timeline-badge-userpic" src="../assets/pages/media/users/avatar80_2.jpg"> </div>
                                                                <div class="timeline-body">
                                                                    <div class="timeline-body-arrow"> </div>
                                                                    <div class="timeline-body-head">
                                                                        <div class="timeline-body-head-caption">
                                                                            <a href="javascript:;" class="timeline-body-title font-blue-madison">Vanessa Bond</a>
                                                                            <span class="timeline-body-time font-grey-cascade">Posted new post at 5:10 PM</span>
                                                                        </div>
                                                                        <div class="timeline-body-head-actions"> </div>
                                                                    </div>
                                                                    <div class="timeline-body-content">
                                                                        <span class="font-grey-cascade">
                                                                            <p>
                                                                                <img class="timeline-body-img pull-right" src="../assets/pages/media/blog/4.jpg" alt=""> Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce. Celery coriander bitterleaf epazote radicchio shallot winter
                                                                                purslane collard greens spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea brussels sprout garlic kohlrabi. coriander bitterleaf epazote radicchio shallot
                                                                                winter purslane collard. </p>
                                                                            <p> Coriander bitterleaf epazote radicchio shallot winter purslane collard. Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette
                                                                                lettuce. Celery coriander bitterleaf epazote radicchio shallot winter purslane collard greens spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea brussels
                                                                                sprout garlic kohlrabi. </p>
                                                                            <p>
                                                                                <img class="timeline-body-img pull-left" src="../assets/pages/media/blog/6.jpg" alt=""> Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce. Celery coriander bitterleaf epazote radicchio shallot winter
                                                                                purslane collard greens spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea brussels sprout garlic kohlrabi radicchio shallot winter purslane collard greens
                                                                                spring onion squash lentil. </p>
                                                                            <p> Coriander bitterleaf epazote radicchio shallot winter purslane collard. Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette
                                                                                lettuce. Celery coriander bitterleaf epazote radicchio shallot winter purslane collard greens spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea brussels
                                                                                sprout garlic kohlrabi. </p>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- END TIMELINE ITEM -->
                                                            <!-- TIMELINE ITEM WITH GOOGLE MAP -->
                                                            <div class="timeline-item">
                                                                <div class="timeline-badge">
                                                                    <img class="timeline-badge-userpic" src="../assets/pages/media/users/avatar80_3.jpg"> </div>
                                                                <div class="timeline-body">
                                                                    <div class="timeline-body-arrow"> </div>
                                                                    <div class="timeline-body-head">
                                                                        <div class="timeline-body-head-caption">
                                                                            <a href="javascript:;" class="timeline-body-title font-blue-madison">Carles Puyol</a>
                                                                            <span class="timeline-body-time font-grey-cascade">Added office location at 2:50 PM</span>
                                                                        </div>
                                                                        <div class="timeline-body-head-actions">
                                                                            <div class="btn-group">
                                                                                <button class="btn btn-circle btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Actions
                                                                                    <i class="fa fa-angle-down"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu pull-right" role="menu">
                                                                                    <li>
                                                                                        <a href="javascript:;">Action </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="javascript:;">Another action </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="javascript:;">Something else here </a>
                                                                                    </li>
                                                                                    <li class="divider"> </li>
                                                                                    <li>
                                                                                        <a href="javascript:;">Separated link </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="timeline-body-content">
                                                                        <div id="gmap_polygons" class="gmaps"> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- END TIMELINE ITEM WITH GOOGLE MAP -->
                                                            <!-- TIMELINE ITEM -->
                                                            <div class="timeline-item">
                                                                <div class="timeline-badge">
                                                                    <div class="timeline-icon">
                                                                        <i class="icon-user-following font-green-haze"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="timeline-body">
                                                                    <div class="timeline-body-arrow"> </div>
                                                                    <div class="timeline-body-head">
                                                                        <div class="timeline-body-head-caption">
                                                                            <span class="timeline-body-alerttitle font-red-intense">You have new follower</span>
                                                                            <span class="timeline-body-time font-grey-cascade">at 11:00 PM</span>
                                                                        </div>
                                                                        <div class="timeline-body-head-actions">
                                                                            <div class="btn-group">
                                                                                <button class="btn btn-circle green btn-outline

                               btn-sm dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Actions
                                                                                    <i class="fa fa-angle-down"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu pull-right" role="menu">
                                                                                    <li>
                                                                                        <a href="javascript:;">Action </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="javascript:;">Another action </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="javascript:;">Something else here </a>
                                                                                    </li>
                                                                                    <li class="divider"> </li>
                                                                                    <li>
                                                                                        <a href="javascript:;">Separated link </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="timeline-body-content">
                                                                        <span class="font-grey-cascade"> You have new follower
                                                                            <a href="javascript:;">Ivan Rakitic</a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- END TIMELINE ITEM -->
                                                            <!-- TIMELINE ITEM -->
                                                            <div class="timeline-item">
                                                                <div class="timeline-badge">
                                                                    <img class="timeline-badge-userpic" src="../assets/pages/media/users/avatar80_1.jpg"> </div>
                                                                <div class="timeline-body">
                                                                    <div class="timeline-body-arrow"> </div>
                                                                    <div class="timeline-body-head">
                                                                        <div class="timeline-body-head-caption">
                                                                            <a href="javascript:;" class="timeline-body-title font-blue-madison">Andres Iniesta</a>
                                                                            <span class="timeline-body-time font-grey-cascade">Replied at 7:45 PM</span>
                                                                        </div>
                                                                        <div class="timeline-body-head-actions"> </div>
                                                                    </div>
                                                                    <div class="timeline-body-content">
                                                                        <span class="font-grey-cascade"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                                                                            nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- END TIMELINE ITEM -->
                                                            <!-- TIMELINE ITEM -->
                                                            <div class="timeline-item">
                                                                <div class="timeline-badge">
                                                                    <img class="timeline-badge-userpic img-circle" src="../assets/pages/media/users/avatar80_2.jpg"> </div>
                                                                <div class="timeline-body">
                                                                    <div class="timeline-body-arrow"> </div>
                                                                    <div class="timeline-body-head">
                                                                        <div class="timeline-body-head-caption">
                                                                            <a href="javascript:;" class="timeline-body-title font-blue-madison">Vanessa Bond</a>
                                                                            <span class="timeline-body-time font-grey-cascade">Posted new post at 5:10 PM</span>
                                                                        </div>
                                                                        <div class="timeline-body-head-actions"> </div>
                                                                    </div>
                                                                    <div class="timeline-body-content">
                                                                        <span class="font-grey-cascade">
                                                                            <p>
                                                                                <img class="timeline-body-img pull-right" src="../assets/pages/media/blog/4.jpg" alt=""> Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce. Celery coriander bitterleaf epazote radicchio shallot winter
                                                                                purslane collard greens spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea brussels sprout garlic kohlrabi. coriander bitterleaf epazote radicchio shallot
                                                                                winter purslane collard. </p>
                                                                            <p> Coriander bitterleaf epazote radicchio shallot winter purslane collard. Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette
                                                                                lettuce. Celery coriander bitterleaf epazote radicchio shallot winter purslane collard greens spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea brussels
                                                                                sprout garlic kohlrabi. </p>
                                                                            <p>
                                                                                <img class="timeline-body-img pull-left" src="../assets/pages/media/blog/6.jpg" alt=""> Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce. Celery coriander bitterleaf epazote radicchio shallot winter
                                                                                purslane collard greens spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea brussels sprout garlic kohlrabi radicchio shallot winter purslane collard greens
                                                                                spring onion squash lentil. </p>
                                                                            <p> Coriander bitterleaf epazote radicchio shallot winter purslane collard. Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette
                                                                                lettuce. Celery coriander bitterleaf epazote radicchio shallot winter purslane collard greens spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea brussels
                                                                                sprout garlic kohlrabi. </p>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- END TIMELINE ITEM -->
                                                            <!-- TIMELINE ITEM -->
                                                            <div class="timeline-item">
                                                                <div class="timeline-badge">
                                                                    <div class="timeline-icon">
                                                                        <i class="icon-docs font-red-intense"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="timeline-body">
                                                                    <div class="timeline-body-arrow"> </div>
                                                                    <div class="timeline-body-head">
                                                                        <div class="timeline-body-head-caption">
                                                                            <span class="timeline-body-alerttitle font-green-haze">Server Report</span>
                                                                            <span class="timeline-body-time font-grey-cascade">Yesterday at 11:00 PM</span>
                                                                        </div>
                                                                        <div class="timeline-body-head-actions">
                                                                            <div class="btn-group dropup">
                                                                                <button class="btn btn-circle red btn-sm dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Actions
                                                                                    <i class="fa fa-angle-down"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu pull-right" role="menu">
                                                                                    <li>
                                                                                        <a href="javascript:;">Action </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="javascript:;">Another action </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="javascript:;">Something else here </a>
                                                                                    </li>
                                                                                    <li class="divider"> </li>
                                                                                    <li>
                                                                                        <a href="javascript:;">Separated link </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="timeline-body-content">
                                                                        <span class="font-grey-cascade"> Lorem ipsum dolore sit amet
                                                                            <a href="javascript:;">Ispect</a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- END TIMELINE ITEM -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                             
                                                            
                                                        </div>

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
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END PROFILE CONTENT -->
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
                </div>
            </div>
        </div>
    </div>

@stop
