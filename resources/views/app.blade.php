<!DOCTYPE html>
<html lang="en">
@include('include.head')
@include('include.head_file')
</head>
<body id="page-top">
    @include('include.sidebar')
@include('include.header_nav')


@yield('content')

@include('include.footer')
@include('include.footer_file')
</body>
</html>