<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel</title>
</head>
<body>
 {{-- echo everything with 'content' section and render in page = yield --}}



 <ul> {{-- this is being showed everywhere as it is part of the layout --}}
 <li><a href="{{ route('home')}}">Home</a></li>
<li><a href="{{ route('contact')}}">Contact</a></li>
 <li><a href="{{ route('blog-post', ['id' => 1 ]) }}">Blogpost 1</a></li>

</ul>
    @yield('content') {{-- show everything in section content () --}}


</body>
</html>
