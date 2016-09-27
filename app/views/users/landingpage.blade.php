<!DOCTYPE html>
<html lang="en">
	
	<!-- BEGIN HEAD -->
	@include('layouts.head')
	@include('layouts.quicknav')

	@section ('body')
	<body class="page-container-bg-solid bg-default">
		<div class="page-wrapper">

			<div class="page-wrapper-row">
				<div class="page-wrapper-top">
					<!-- begin header -->
					
						
						<!-- begin nav -->
						<div class=" navbar navbar-default navbar-fixed-top" role="navigation" style="display:block;">
							<div class="container">
								
								<div class=" navbar-header ">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
										<span class="sr-only">Toggle Navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<a href="#" class="navbar-brand"><strong>BRANDOSCOPE</strong></a>
								</div>
								<div class="navbar-collapse collapse">
								
									<ul class="nav navbar-nav navbar-right" style="display:block;">
										<li class="active"><a href="#">HOME</a></li>
										<li class=""><a href="#about">ABOUT</a></li>
										
										<li class=""><a href="#">CONTACT</a></li>
										<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">LOGIN<b class="caret"></b></a>
											<ul class="dropdown-menu">
												
												<li class=""><a href="">ADMIN</a></li>
												<li class=""><a href="">AUTHOR</a></li>
												<li class=""><a href="">READER</a></li>
											</ul>
										</li>

									</ul>
								</div>
							</div>
						</div>
					
					<!-- END PAGE-HEADER -->

				</div>
			</div>
			<!-- end page wrapper-row -->
			
		
				<div class="header-bg-custom">
					<div id="imageText"><h1><strong>Information closer than you think</strong></h1>
						<br>
						 <button style="color:red; margin-left:30vh;"class="btn btn-circle default btn-lg" >signup</button>
					</div>
				</div>
				<div class="pagecontent " id="about">
					<div class="container ">
						<div class="page-content-inner ">
							<div class="row" style="text-align:center;">
								<div class="col-md-12">
									<div class="portlet solid ">
										<div class="portlet-title"></div>
										<div class="portlet-body" >
											<h1 ><strong>We make it easier to create stories that matters to reader</strong></h1>
										</div>
									 </div>
								</div> 
								<div class="col-md-6">
									<div class="portlet">
										<div class="portlet-title"><h3><strong>Create great stories</strong></h3></div>
										<div class="portlet-body" >
											Write stories share them and get email subscribers. Be confident knowing we design stories to look wonderful so you can focus on telling it.
										</div>
										<br>
										<br>
										<br>
										<div class="portlet-title"><h3><strong>Promote on social media</strong></h3></div>
										<div class="portlet-body" style="text-align:center;">
											Get brand awareness and engagement for your stories using Facebook, Twitter and LinkedIn.
										</div>
									</div>
								</div>
									<div class="col-md-6">
									<div class="portlet">
										<div class="portlet-title"><h3><strong>Stories via email</strong></h3></div>
										<div class="portlet-body">
											Send stories easily to all readers who subscribe to your brand stories with their email inbox.
										</div>
										<br>
										<br>
										<br>
										<div class="portlet-title"><h3><strong>Statistics, Simplified</strong></h3></div>
										<div class="portlet-body" style="text-align:center;">
											Understand how your story is being seen and acted on by tracking social and email performance.
										</div>
									</div>
								</div>
							</div>
						
					</div>
					</div>
				</div>
		
		</div>
		@include('layouts.footer')
	</body>

