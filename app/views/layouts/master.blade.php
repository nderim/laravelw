<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>{{$title}}</title>
</head>
 {{ HTML::style('css/style.css')}}
<body>
{{HTML::link('/','home')}}
{{HTML::link('document','document')}}
@yield('content')
</body>
</html>