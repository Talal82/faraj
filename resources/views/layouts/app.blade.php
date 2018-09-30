<!doctype html>
<html>
<head>

<title>Faraj: @yield('title')</title>

<!-- head data  included -->
@include("includes/web-head")
<!-- head data  included -->

<!-- stylesheets yield-->
@yield('stylesheets')
    
</head>

<body>

    <!-- header included -->
    @if(Route::currentRouteName() == 'index')
    	@include("includes/web-header")
    @else
    	@include("includes/web-header2")
    @endif
    <!-- header included -->

    <!-- body content -->
    @yield('content')
    <!-- body content -->


    <!-- footer included -->
	@if(Route::currentRouteName() == 'contact')
		@include('includes/web-footer-2')
	@else
		@include('includes/web-footer')
	@endif
	<!-- footer included -->
			
	</div>
	<!--center area section -->	

	<!-- external plugins included -->
	@include("includes/web-plugins")
	<!-- external plugins included -->

	<!-- scripts yield -->
	@yield('scripts')
	
</body>

</html>