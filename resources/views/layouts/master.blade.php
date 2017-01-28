<!DOCTYPE html>
<html lang="en">
<head>
	 @include('layouts.components.head')
</head>
<body>
	 @include('layouts.components.navigation')
	@yield('main-content')

	@yield('script')

</body>
</html>