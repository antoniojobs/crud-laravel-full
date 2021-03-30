<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <script type="text/javascript" src="/js/jquery-3.6.0.min.js"></script> --}}

    @yield('scriptmascara')

    <link rel="stylesheet" href="/css/styles.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
    integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <title>@yield('title')</title>
</head>
<header>
    <nav class="nav">
        <a class="nav-link active" href="/">home</a>
        <a class="nav-link" href="/criar">Cadastrar</a>
    </nav>
</header>

<body class="antialiased">
    <main>
        <div class="contaner-fluid">
            <div class="row">
                @if (session('msg'))
                    <p class=" p-5 msg"> {{ session('msg') }} </p>
                @endif
            </div>
        </div>
        @yield('content')
    </main>

    <footer style="margin-top: 75vh" class="container col-md-12 p-0">
        <div style="background-color: #cacaca">
            <p class="float-right"><a href="#">Back to top</a></p>
            <p>© 2017-2018 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
        </div>
    </footer>
</body>

</html>

