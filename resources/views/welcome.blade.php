<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>All countries</h1>

    @foreach ($data as $country)
        {{ $country->alias }} <br>
        {{ $country->name }} <br>
        {{ $country->name_en }} <br><br>
    @endforeach
</body>
</html>
