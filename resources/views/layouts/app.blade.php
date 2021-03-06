<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
@yield('facebook_meta')
<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="propeller" content="4daae8057b8882da2035b0ea968c8c29"/>
    <link rel="icon" href="/img/sassy.png">
    <title>{{ config('app.name', 'Sassy Apps') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('css/custom.css') }}" rel="stylesheet">
    <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110090186-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-110090186-1');
    </script>

</head>
<body>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=259800411212763';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<nav class="navbar navbar-default" style="background-color: #616161;">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" style="color: #fff;" href="/">Sassy Apps</a>
        </div>

    </div>
</nav>
<div id="app ">
    <div class="container" style="margin-bottom: 100px;">
        <div class="row">
            <div class="col-md-12">
                @yield('content')
            </div>
            <div class="col-md-12 ">
                <div class="row ">
                    @foreach ($latestApps as $app)
                        <div class="col-md-4 col-lg-3 col-lg-offset-1 col-sm-6 col-xs-12  horizontal-align">
                            <div class="horizontal-align text-center appblock-tile">
                                <img width="100%" height="200px" src="{{$app->icon_url}}">
                                <h2>{{$app->name}}</h2>
                                <h5>{{$app->description}}</h5>
                                <a class="btn btn-round btn-primary" style="margin-top: 20px"
                                   href="/splash?appid={{$app->id}}">
                                    START
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

<script type="text/javascript"> var infolinks_pid = 3053277;
    var infolinks_wsid = 0; </script>
<script type="text/javascript" src="//resources.infolinks.com/js/infolinks_main.js"></script>

<div id="chitika-ads-1"></div>
<script type="text/javascript">
    /* Calculate the width of available ad space */
    ad = document.getElementById('chitika-ads-1');
    if (ad.getBoundingClientRect().width) {
        adWidth = ad.getBoundingClientRect().width; // for modern browsers
    } else {
        adWidth = ad.offsetWidth; // for old IE
    }
    ( function () {
        if (window.CHITIKA === undefined) {
            window.CHITIKA = {'units': []};
        }
        if (adWidth >= 728)
            var unit = {
                "publisher": "miyurusagarage",
                "width": 728,
                "height": 90,
                "sid": "Chitika Default"
            }; /* Leaderboard 728x90 */
        else if (adWidth >= 200)
            var unit = {
                "publisher": "miyurusagarage",
                "width": 320,
                "height": 50,
                "sid": "Chitika Default"
            };
        var placement_id = window.CHITIKA.units.length;
        window.CHITIKA.units.push(unit);
        document.write('<div id="chitikaAdBlock-' + placement_id + '"></div>');
    }());
</script>
<script type="text/javascript" src="//cdn.chitika.net/getads.js" async></script>

<script type="text/javascript" src="//ylx-4.com/tun.php?section=General&pt=8&pub=273377&ga=g&fN=1&fT=1&fTT=0"></script>

</body>
</html>
