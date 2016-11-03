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
					<a href="{{ ('#') }}" class="menu-toggler"></a>
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
												<a href="{{ ('#') }}">
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
													
													<span class="subject">
														<span class="from">Richard Doe</span>
														<span class="time">16mins</span>
													</span>
													<span class="message"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
												</a>
											</li>
											<li>
												<a href="{{ ('#')}}">
													
													<span class="subject">
														<span class="from">Bob Nilson</span>
														<span class="time">2 hrs</span>
													</span>
													<span class="message"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
												</a>
											</li>
											<li>
												<a href="{{ ('#')}}">
													
													<span class="subject">
														<span class="from">Lisa Wong</span>
														<span class="time">40min</span>
													</span>
													<span class="message"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
												</a>
											</li>
											<li>
												<a href="{{ ('#')}}">
													
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
					<!-- end header search box -->
					<!-- begin mega menu -->
					<div class="hor-menu">
						<ul class="nav navbar-nav">
						
							<li class="menu-dropdown classic-menu-dropdown active">
								<a href="{{ ('javascript:;') }}">
									HOME
									<span class="arrow"></span>
								</a>
							</li>
								
							<li class="">
										<a href="{{('#')}}"  class="nav-link  ">
											SERVICES</a>
									</li>
									<li class=" ">
										<a href="{{('#')}}"  class="nav-link  ">
											
											CONTACT
											
										</a>
									</li>
								
							<li class="menu-dropdown mega-menu-dropdown">
								<a href="{{('javascript:; ')}}">
									SUPPORT
									<span class="arrow"></span>
								</a>
								
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


