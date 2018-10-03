<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Urna Eletrônica</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>

<body class="bg-light">
    <div class="container">
        <div class="row urn mt-5">
            <div class="col ml-4 mt-5 mr-0 mb-5">
                <div class="w-100 monitor pt-3">
                    <h1 class="ml-5 president">Presidente</h1>
                    <div class="row base">
                        <div class="col">
                            <div class="numbers ml-5 mt-5 mr-2">
                                <p class="n1 string-numbers"></p>
                            </div>
                            <div class="numbers mt-5">
                                <p class="n2 string-numbers"></p>
                            </div>
                            <h1 class="ml-5 blank-v mt-5" style="font-size: 70px!important;"></h1>
                        </div>
                        <div class="col remove"><img class="mt-5 image"></div>
                    </div>
                    <p class="name ml-5 mt-2"></p>
                    <p class="broken ml-5"></p>
                </div>
            </div>
            <div class="col-xl-4 ml-1 mt-5 mr-4 mb-5">

                <div class="w-100 urn-form h-100" style="overflow-x: hidden;"><img src="{{ asset('assets/img/top.jpg') }}" class="w-100 bg-dark">
                    @yield('content')
                </div>

            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>