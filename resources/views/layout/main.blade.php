<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    @include('layout.head')


</head>

<body class="stretched">

    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="clearfix">
        @include('layout.header')
        @yield('content')
        @include('layout.footer')

    </div>
    <!-- #wrapper end -->
    <div id="gotoTop" class="icon-angle-up"></div>
    @include('layout.script')
</body>

</html>
