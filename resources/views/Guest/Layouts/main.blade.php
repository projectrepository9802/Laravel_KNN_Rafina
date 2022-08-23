<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ URL::to('lib/bootstrap/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('bin/css/style.css') }}">

    <title>SP K-Nearest Neighbor | {{ $titlePage }}</title>
</head>

<body>
    <div class="card">
        <div class="card-header p-0">
            @include('Guest.Partials.navbar')
        </div>
        <div class="card-body p-0" style="height: 100%; background-color:#BF00FF;">
            <div class="container" style="height: 100%;">
                @yield('content-wrapper')
            </div>
        </div>
        <div class="card-footer bg-white bg-gradient text-primary">
            @include('Guest.Partials.footer')
        </div>
    </div>

    <script src="{{ URL::to('lib/bootstrap/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
