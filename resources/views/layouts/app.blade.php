<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title-bllock')</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
@include('inc.header')

@if(Request::is('/'))
@include('inc.hero')
@endif

    <main class="container">
    @include('inc.messages')

        <div class="row mt-5">
            <div class="col-8">
            @yield('content')
            </div>
            <div class="col-4">
            @include('inc.aside')
            </div>
        </div>

@include('inc.footer')
</main>
</body>
</html>