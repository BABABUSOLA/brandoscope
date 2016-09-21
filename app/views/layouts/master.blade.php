<!DOCTYPE html>
<html lang="en">
	@include('layouts.head')

	<body>
		@include('layouts.header')
		
		@include('layouts.sidebar')

		@yield('body')

		@include('layouts.footer')
		@yield('layouts.quicknav')

	</body>
</html>