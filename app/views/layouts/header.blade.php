<div class="page-wrapper-row">
	<div class="page-wrapper-top">
		
		<!--begin header-->
		<div class="page-header">
			
			<!-- begin haader top -->
			<div class="page-header-top">
				<div class="container">
				
					<!--begin companylogo -->
					<div class="page-logo">
						<a href= "{{ ('#')}}">
							<img src="{{ url('assets/pages/img/logo-invert.png')}}" alt="logo" class="logo-default">
						</a>
					</div>
					<!-- end logo -->
					<!--begin responsive menu toogler -->
					<a href="{{ ('javascript:;') }}" class="menu-toggler"></a>
					<!-- end responsive menu toogler -->
					<!-- begin top navigation menu toogler -->
					<div class="top-menu">
						<ul class="nav navbar-nav pull-right">
							
							<!-- begin notificaiton dropdown -->
							<li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar" >
								<a href="{{ ('javascript:;') }}" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="true">
									<i class="icon-bell"></i>
									<span class="badge badge-default">7</span>
								</a>
								<ul class="dropdown-menu">
								
									<li class="external">
										<h3>
											"You have <strong>12 pending</strong> tasks"
										</h3>
										<a href="{{ ('app.todo.html') }}">view all</a>
									</li>
									<li></li>
								
								</ul>
							</li>
							<!-- end notification dropdown -->
							<!-- begin todo dropdown -->
							<li class="dropdown dropdown-extended dropdown-tasks dropdown-dark" id="header_task_bar">
								<a href="{{ ('javascript:;') }}" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
									<i class="icon-calendar">
									
									</i>
									<span class="badge badge-default">3</span>
								</a>
								<ul class="dropdown-menu extended tasks">
									<li class="external">
										<h3>
											"You have <strong>12 pending</strong>tasks
											"
										</h3>
										<a href="{{ ('#') }}"> view all</a>
									</li>
									<li>
										<ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
											<li>
												<a href="{{ ('javascript:;') }}">
													<span class="task">
														<span class="desc">New release v1.2></span>
														<span class="percent">30%</span>
													</span>
													<span class="progress">
														<span tyle="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></span>
														<span class="sr-only">40% completed</span>
													</span>
												</a>
											</li>

										</ul>
									</li>
								</ul>
							</li>
							<!-- end todo dropdown -->
							<li class="dropdown dropdown-sepator ">
								<span class="separator"></span>
							</li>
							<!-- begin inbox dropdown -->
							<li class="dropdown dropdown-extended dropdown-inbox dropdown-dark" id="header_inbox_bar">
								<a href="{{ ('javascript:;') }}" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
									<span class="circle">3</span>
									<span class="corner"></span>
								</a>
								<ul class="dropdown-menu">
									<li class="external">
										<h3>You have
											<strong>7 New</strong>
											Message
										</h3>
										<a href="{{ ('#')}}">view all</a>
									</li>
									<li>
										<ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
											<li>
											</li>
											<li>
												<a href="{{ ('#')}}">
													<span class="photo">
														<img src="../assets/layouts/layout3/img/avatar3.jpg" class="img-circle" alt=""/>
													</span>
													<span class="subject">
														<span class="from">Richard Doe</span>
														<span class="time">16mins</span>
													</span>
													<span class="message"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
												</a>
											</li>
											<li>
												<a href="{{ ('#')}}">
													<span class="photo">
														<img src="../assets/layouts/layout3/img/avatar1.jpg" class="img-circle" alt=""/>
													</span>
													<span class="subject">
														<span class="from">Bob Nilson</span>
														<span class="time">2 hrs</span>
													</span>
													<span class="message"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
												</a>
											</li>
											<li>
												<a href="{{ ('#')}}">
													<span class="photo">
														<img src="../assets/layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""/>
													</span>
													<span class="subject">
														<span class="from">Lisa Wong</span>
														<span class="time">40min</span>
													</span>
													<span class="message"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
												</a>
											</li>
											<li>
												<a href="{{ ('#')}}">
													<span class="photo">
														<img src="../assets/layouts/layout3/img/avatar3.jpg" class="img-circle" alt=""/>
													</span>
													<span class="subject">
														<span class="from">Richard Doe</span>
														<span class="time">46 mins</span>
													</span>
													<span class="message"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</li>
									
							<!-- end inbox dropdown -->
							<!-- begin user login dropdowm -->
							<li class="dropdown dropdown-user dropdown-dark">
								<a href="{{ ('javascript:;') }}" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="false">
									<img  alt class="img-circle" src="{{('assets/pages/img/avatars/team1.jpg')}}">
									<span class="username username-hide-mobile">Nick</span>
								</a>
								<ul class="dropdown-menu dropdown-menu-default">
									<li>
										<a href="{{ ('#') }}"><i class="icon-user"></i>My Profile</a>
									</li>
									<li>
										<a href="{{ ('#') }}"><i class="icon-calendar"></i> My Calendar</a>
									</li>
									<li>
										<a href="{{ ('#') }}"> <i class="icon-envelope-open"></i>My Inbox<span class="badge badge-danger"> 3 </span></a>
									</li>
									<li>
										<a href="{{ ('#') }}"><i class="icon-rocket"></i> My Tasks <span class="badge badge-success"> 7 </span></a>
									</li>
									<li class="divider"></li>
									<li>
										<a href="{{ ('#') }}"><i class="icon-lock"></i> Lock Screen</a>
									</li>
									<li>
										<a href="{{ ('#') }}"><i class="icon-key"></i> Log Out</a>
									</li>

								</ul>
							</li>
							<!-- end user login dropdown -->
							<!-- begin quick sidebar toggler -->
							<li class="dropdown dropdown-extended quick-sidebar-toggler">
								<span class="sr-only">Toggle Quick Sidebar</span>
								<i class="icon-logout">
								
								</i>
							</li>
							<!-- end quick sidebar toggler -->
					
						</ul>
					</div>
					<!-- end top navigation menu -->
			
				</div>
			</div>
			<!-- end header top -->
			<!-- begin header menu -->
			<div class="page-header-menu" style="display: block;">
				<div class="container">
				
					<!-- begin header search box -->
					<form class="search-form" action="page_general_search.html" method="GET">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search" name="query">
							<span class="input-group-btn">
								<a href="{{ ('javascript:;') }}" class="btn submit">
									<i class="icon-magnifier">
									
									</i>
								</a>
							</span>
						</div>
					</form>
					<!-- end header search box -->
					<!-- begin mega menu -->
					<div class="hor-menu">
						<ul class="nav navbar-nav">
						
							<li class="menu-dropdown classic-menu-dropdown active">
								<a href="{{ ('javascript:;') }}">
									FEATURES
									<span class="arrow"></span>
								</a>
								<ul class="dropdown-menu pull-left">
									<li class="active">
										<a  href="{{('#')}}" class="nav-link  active">
											<i class="icon-bar-chart"></i>
											USER
											<span class="badge badge-success">1</span>
										</a>
									</li>
									<li class="">
										<a href="{{('#')}}"  class="nav-link  ">
											<i class="icon-bulb"></i>AUTHOR</a>
									</li>
									<li class=" ">
										<a href="{{('#')}}"  class="nav-link  ">
											<i class="icon-graph"></i>
											ADMIN
											<span class="badge badge-danger">3</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="menu-dropdown mega-menu-dropdown">
								<a href="{{('javascript:; ')}}">
									LIFESTYLE
									<span class="arrow"></span>
								</a>
								<ul class="dropdown-menu" style="min-width: 500px">
									<li>
										<div class="mega-menu-content">
											<div class="row">
												<div class="col-md-4">
													<ul class="mega-menu-submenu">
														<li>
															<a href="{{('#')}}">Entertainment</a>
														</li>
														<li>
															<a href="{{('#')}}"> Office Productivity </a>
														</li>
														<li>
															<a href="{{('#')}}"> Gaming</a>
														</li>
														<li>
															<a href="{{('#')}}"> Browser</a>
														</li>	
													</ul>
												</div>
												<div class="col-md-4">
													<ul class="mega-menu-submenu">
														<li>
															<a href="{{('#')}}"> Social Media</a>
														</li>
														<li>
															<a href="{{('#')}}">Finance</a>
														</li>
														<li>
															<a href="{{('#')}}">Self Improvement</a>
														</li>
														<li>
															<a href="{{('#')}}">Horizontal Timeline</a>
														</li>
													</ul>
												</div>
												<div class="col-md-4">
													<ul class="mega-menu-submenu">
														<li>
															<a href="{{('#')}}">Metronic Alert API</a>
														</li>
														<li>
															<a href="{{('#')}}">Session Out</a>
														</li>
														<li>
															<a href="{{('#')}}">User Idle Timeout</a>
														</li>
														<li>
															<a href="{{('#')}}">Modals</a>
														</li>
													</ul>
												</div>
											</div> 
										</div>
									</li>
								</ul>
							</li>
							<li class="menu-dropdown classic-menu-dropdown">
								<a href="{{('javascript:;')}}">Layouts<span class="arrow"></span></a>
								<ul class="dropdown-menu pull-left">
									<li class=" ">
										<a href="{{('#')}}" class="nav-link  ">Light Mega Menu</a>
									</li>
									<li class=" ">
										<a href="{{('#')}}" class="nav-link  "> Light Top Bar Dropdowns</a>
									</li>
									<li class="">
										<a href="{{('#')}}" class="nav-link  "> Fluid Page</a>
									</li>
									<li class="">
										<a href="{{('#')}}" class="nav-link  "> Fixed Top Bar</a>
									</li>
								</ul>
							</li>
							
							<li class="menu-dropdown classic-menu-dropdown">
								<a href="{{('javascript:;')}}">More
									<span class="arrow"></span>
								</a>
								<ul class="dropdown-menu pull-left">
									<li class="dropdown-submenu ">
										<a href="{{('javascript:;')}}" class="nav-link nav-toggle ">
											<i  class="icon-settings"></i>Form Stuff
											<span class="arrow"></span>
										</a>
										<ul class="dropdown-menu">
											<li class="">
												<a href="{{('#')}}" class="nav-link "> Bootstrap Form <br>Controls</a>
											</li>
											<li class="">
												<a  href="{{('#')}}" class="nav-link ">Material Design</a>
											</li>
											<li class="">
												<a href="{{('#')}}">Form Validation</a>
											</li>
										</ul>
									</li>
									<li class="dropdown-submenu ">
										<a href="{{('javascript:;')}}" class="nav-link nav-toggle ">
											<i class="icon-briefcase"></i>Tables
											<span class="arrow"></span>
										</a>
										<ul class="dropdown-menu">
											<li class=" ">
												<a href="{{('#')}}" class="nav-link ">Basic Table</a>
											</li>
											<li class="">
												<a href="{{('#')}}"class="nav-link ">Responsive Tables</a>
											</li>
											<li class="dropdown-submenu">
												<a href="{{('#')}}" class="nav-link nav-toggle">Datatables
													<span class="arrow"></span>
												</a>
												<ul class="dropdown-menu">
													<li class="">
														<a href="{{('#')}}"class="nav-link "> Managed Datatables</a>
													</li>
													<li class="">
														<a href="{{('#')}}" class="nav-link ">Buttons Extension</a>
													</li>
													<li class="">
														<a href="{{('#')}}" class="nav-link ">Ajax Datatables</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="dropdown-submenu ">
										<a href="?p=" class="nav-link nav-toggle ">
											<i class="icon-wallet"></i>Portlets
											<span class="arrow"></span>
										</a>
										<ul class="dropdown-menu">
											<li class="">
												<a href="portlet_boxed.html" class="nav-link "> Boxed Portlets
													<span class="arrow"></span>
												</a>
											</li>
											<li class="">
												<a href="portlet_light.html" class="nav-link ">Light Portlets</a>
											</li>
											
										</ul>
									</li>
									<li class="dropdown-submenu ">
										<a  href="{{('#')}}" class="nav-link nav-toggle ">
											<i class="icon-settings"></i> Elements
											<span class="arrow"></span>
										</a>
										<ul class="dropdown-menu">
											<li class="">
												<a href="{{('#')}}" class="nav-link ">Steps</a>
											</li>
											<li class="">
												<a href="{{('#')}}" class="nav-link ">Lists</a>
											</li>
										</ul>
									</li>
									<li class="dropdown-submenu ">
										<a href="{{('javascript:;')}}" class="nav-link nav-toggle ">
											<i class="icon-bar-chart"></i>
											Charts
											<span class="arrow"></span>
										</a>
										<ul class="dropdown-menu">
											<li class="">
												<a href="{{('#')}}" class="nav-link ">amChart</a>
											</li>
											<li class="">
												<a href="{{('#')}}" class="nav-link ">Flot Charts</a>
											</li>
											<li class="dropdown-submenu ">
												<a href="{{('javascript:;')}}" class="nav-link nav-toggle">HighCharts
													<span class="arrow"></span>
												</a>
												<ul class="dropdown-menu">
													<li class="">
														<a  href="{{('#')}}" class="nav-link " target="_blank">HighCharts</a>
													</li>

												</ul>
											</li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="menu-dropdown classic-menu-dropdown">
								<a href="{{('javascript:;')}}">
									<i class="icon-briefcase"></i>Pages
									<span class="arrow"></span>
								</a>
								<ul class="dropdown-menu pull-left">
									<li class="dropdown-submenu ">
										<a href="{{('javascript:;')}}" class="nav-link nav-toggle ">
											<i class="icon-basket"></i> eCommence
											<span class="arrow"></span>
										</a>
										<ul class="dropdown-menu">
											<li class="">
												<a href="{{('#')}}" class="nav-link ">
													<i class="icon-basket"></i>Orders
												</a>
											</li>
											<li class="">
												<a href="{{('#')}}" class="nav-link ">
													<i class="icon-tag"></i>
													Orders
												</a>
											</li>
											<li class="">
												<a href="{{('#')}}" class="nav-link ">
													<i class="icon-tag"></i>
													Order View
												</a>
											</li>
										</ul>
									</li>
									<li class="dropdown-submenu ">
										<a href="{{('javascript:;')}}" class="nav-link nav-toggle ">
											<i class="icon-docs"></i>Apps
											<span class="arrow"></span>
										</a>
										<ul class="dropdown-menu">
											<li class="">
												<a href="{{('#')}}" class="nav-link ">
													<i class="icon-clock"></i>
													Todo 1
												</a>
											</li>
											<li class="">
												<a href="{{('#')}}" class="nav-link ">
													<i class="icon-check">Todo 2</i>
												</a>
											</li>
										</ul>
									</li>
									<li class="dropdown-submenu ">
										<a href="{{('javascript:;')}}" class="nav-link nav-toggle ">
											<i class="icon-user"></i> User
											<span class="arrow"></span>
										</a>
										<ul class="dropdown-menu">
											<li class="">
												<a  href="{{('#')}}" class="nav-link ">
													<i class="icon-user"> Profile 1</i>
												</a>
											</li>
											<li class="">
												<a href="{{('#')}}" class="nav-link ">
													<i class="icon-user-female"></i>
													Profile 1 Account
												</a>
											</li>
											<li class="">
												<a href="{{('#')}}" class="nav-link ">
													<i class="icon-user-following"></i>Profile 1 Help
												</a>
											</li>
											<li class="dropdown-submenu ">
												<a href="{{('javascript:;')}}" class="nav-link nav-toggle">
													<i class="icon-notebook"></i>
													Login
													<span class="arrow"></span>
												</a>
												<ul class="dropdown-menu">
													<li class="">
														<a href="{{('#')}}" class="nav-link " target="_blank">Login Page</a>
													</li>
													<li class="">
														<a href="{{('#')}}" class="nav-link " target="_blank">Login Page</a>
													</li>
												</ul>
											</li>
											<li class="">
												<a href="{{('#')}}" class="nav-link " target="_blank">
													<i class="icon-lock"></i>Lock Screen 1
												</a>
											</li>
											<li class="">
												<a href="{{('#')}}" class="nav-link " target="_blank">
													<i class="icon-lock-open"></i>
													Lock Screen 2
												</a>
											</li>
										</ul>
									</li>
									<li class="dropdown-submenu ">
										<a href="{{('javascript:;')}}" class="nav-link nav-toggle ">
											<i class="icon-social-dribbble"></i>
											General
											<span class="arrow"></span>
										</a>
										<ul class="dropdown-menu">
											<li class="">
												<a href="{{('#')}}" class="nav-link ">
													<i class="icon-info"></i>
													About
												</a>
											</li>
											<li class="">
												<a href="{{('#')}}" class="nav-link ">
													<i class="icon-call-end"></i>
													Contact
												</a>
											</li>
											<li class="dropdown-submenu ">
												<a href="{{('javascript:;')}}" class="nav-link nav-toggle">
													<i class="icon-notebook"></i>
													Portfolio
													<span class="arrow"></span>
												</a>
												<ul class="dropdown-menu">
													<li class="">
														<a href="{{('#')}}" class="nav-link "> Portfolio 1</a>
													</li>
													<li>
														<a href="{{('#')}}" class="nav-link "> Portfolio 2</a>
													</li>
												</ul>
											</li>
											<li class="dropdown-submenu ">
												<a href="{{('javascript:;')}}" class="nav-link nav-toggle">
													<i class="icon-magnifier"></i>
													Search
													<span class="arrow"></span>
												</a>
												<ul class="dropdown-menu">
													<li class="">
														<a href="{{('#')}}" class="nav-link "> Search 1</a>
													</li>
													<li class="">
														<a href="{{('#')}}" class="nav-link "> Search 2</a>
													</li>
												</ul>
											</li>
											<li class="">
												<a href="{{('#')}}" class="nav-link ">
													<i class="icon-tag"></i>
													Pricing
												</a>
											</li>
											<li class="">
												<a href="{{('#')}}" class="nav-link ">
													<i class="icon-wrench"></i>FAQ
												</a>
											</li>
										</ul>
									</li>

								</ul>
							</li>
						
						</ul>
					</div>
					<!-- end mega menu -->
				
				</div>
			</div>
			<!-- end header menu -->
	
		</div>
		<!-- end header -->
	</div>
</div>
<!-- begin page head -->
<div class="page-head">
	<div class="container">
<!-- begin page title -->
		<div class="page-title">
			<h1>
		Dashboard <small> dashboard & statistics</small>
			</h1>
		</div>
	</div>
</div>

