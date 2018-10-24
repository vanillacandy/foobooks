<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Practice</title>
    <meta chareset='utf-8'>
</head>
<body>

<h1>Practice</h1>

    @foreach($method as $method)
        <a href='{{ str_replace('practice', '/practice/', $method) }}'>{{$method}}</a><br>
    @endforeach

</body>
</html>
