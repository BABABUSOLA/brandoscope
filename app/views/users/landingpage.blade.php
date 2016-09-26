<!DOCTYPE html>
<html lang="en">
	
	<!-- BEGIN HEAD -->
	@include('layouts.head')
	@section ('body')
	<div class="page-wrapper-row active">
		<div class="page-wrapper-top">
			<!-- begin header menu -->
			<div class="page-header-top-fixed bg-grey-cararra">
				<div class="container ">
					<div class="hor-menu ">
						<div class="nav navbar-nav " >
							
							<!--begin companylogo -->
							<div class="page-logo custom-logo">
								<a href= "{{ ('#')}}">
									<img src="{{ url('assets/pages/img/logo-invert.png')}}" alt="logo" class="logo-default">
								</a>
							</div>
							
						</div>
						
						<!-- end logo -->
						
						<!-- begin mega menu -->
						<div class="font-grey-cararra">
							<ul class="nav navbar-nav pull-right " id="custom-top-nav"  style="display: block; color:white;">
								
								<li class="menu-dropdown classic-menu-dropdown active ">
									<a href="{{ ('javascript:;') }}">
										<strong>FEATURES</strong>
										
									</a>
									
								</li>
								<li class="menu-dropdown mega-menu-dropdown">
									<a href="{{('javascript:; ')}}">
										<strong>LIFESTYLE</strong>
										
									</a>
									
								</li>
								<li class="menu-dropdown classic-menu-dropdown">
									<a href="{{('javascript:;')}}"><strong>STYLE</strong>
									</a>
									
								</li>
								
								<li class="menu-dropdown classic-menu-dropdown">
									<a href="{{('javascript:;')}}"><strong>MORE</strong>
										<span class="arrow"></span>
									</a>
									
								</li>

								<li class="menu-dropdown classic-menu-dropdown" id="">
								<a href="{{('javascript:;')}}" onclick="myFunction()">&#9776;
									<span class="arrow"></span>
								</a>
								</li>
								
							</ul>
						</div>
						<!-- end mega menu -->
						
					</div>
				</div>
			</div>
			
			<div class="page-wrapper-row">
				<div class="container">
				</div>
			</div>
			</div><!-- end page wrapper top -->
			</div><!-- end page wrapper row -->
			<div class="header-bg-custom">
				<div class="header-content">
					<div class="row">
						<div class="hidden-xs hidden-sm">
							<h1 class="header-content-big">Write stories, share them and get email subscribers</h1>
							<h3 class="header-content-mid">We believe in personal and engaging stories that really matters to your readers, that is why we built Brandoscope</h3>
							<p>
								<a href="{{ ('') }} " class="mt-info uppercase btn btn-circle blue-madison header-content-small">Learn More</a>
							</p>
						</div>
					</div>

					<div class="row">
						<div class="hidden-md hidden-lg">
							<h1 class="header-content-mid">Write stories, share them and get email subscribers</h1>
							<h3 class="header-content-mid">We believe in personal and engaging stories that really matters to your readers, that is why we built Brandoscope</h3>
							<p>
								<a href="{{ ('') }} " class="mt-info uppercase btn btn-circle blue-madison header-content-small">Learn More</a>
							</p>
						</div>
					</div>
				</div>
			</div>