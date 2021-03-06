<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>DC Comics</title>
</head>
<body>

    @include('partials.header')

    <!-- qui ci va codice diverso per ogni sezione -->
    @yield('content')
    <!-- @yield('bluebar') -->
    <!-- invece di fare uno yeld ho ftto un include, cos'è meglio? -->
    @include('partials.section')

    @include('partials.footer')
</body>
</html>