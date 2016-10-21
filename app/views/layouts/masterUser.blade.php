<!DOCTYPE html>
<html lang="en">
	@include('layouts.head')

	<body>
		
		
		@include('layouts.sidebar')

		@yield('body')

		
		@yield('layouts.quicknav')

	</body>
</html>