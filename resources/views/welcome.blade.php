<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Foobooks</title>
    <meta chareset='utf-8'>
</head>
<body>

<h1>Foobooks</h1>

@foreach($method as $method)
    <a href='{{ str_replace('practice', '/practice/', $method) }}'>{{$method}}</a><br>
@endforeach

</body>
</html>
