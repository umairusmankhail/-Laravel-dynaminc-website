<!DOCTYPE html>
<html lang="en">
@include('website.include.head')
@include('website.include.head_file')
</head>
<body>
@include('website.include.header')


@yield('content')

@include('website.include.footer')
@include('website.include.footer_file')
</body>
</html>