<!DOCTYPE html>
<html lang="en">

	@include('layouts.head')
	

	<body>
		
		
		@include('layouts.sidebar')

		@yield('body')

		@include('layouts.footer')
		@yield('layouts.quicknav')
		{{ HTML::script('/assets/global/scripts/toggle.js'); }}

	</body>
</html>