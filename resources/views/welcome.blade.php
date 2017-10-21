<!DOCTYPE html>
<html>
    <head>
        <script src="https://maps.google.com/maps/api/js?libraries=geometry&v=3.28&key=AIzaSyD89Utz6N8AlWEwgaKtkpTKUE4dtsgG2xA"></script>
        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="{{ URL::asset('js/maplace.min.js') }}"></script>
        <link rel="stylesheet" href="{{ URL::asset('css/bulma.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
        <meta charset="utf-8">
        <title>MediMissions</title>
    </head>
    <body>
        <section class="hero is-success is-fullheight">
        <!-- Hero head: will stick at the top -->
        <div class="hero-head">
        <header class="navbar">
          <div class="container">
            <div class="navbar-brand">
              <a class="navbar-item">
                <span style="font-size: 30px">MediMissions</span>
              </a>
              <span class="navbar-burger burger" data-target="navbarMenuHeroC">
                <span></span>
                <span></span>
                <span></span>
              </span>
            </div>
            <div id="navbarMenuHeroC" class="navbar-menu">
              <div class="navbar-end">
                <a class="navbar-item" href="/">
                  Home
                </a>
                <a class="navbar-item" href="/missions">
                  Missions
                </a>
                <a class="navbar-item" href="/lgus">
                  LGUs
                </a>
                <a class="navbar-item" href="/volunteers">
                  Volunteers
                </a>
                <a class="navbar-item">
                    About
                </a>
              </div>
            </div>
          </div>
        </header>
        </div>

        <!-- Hero content: will be in the middle -->
        <div class="hero-body">
        <div class="container has-text-centered">
            <div id="controls"></div>
            <div id="gmap" style="with:300px;height:500px;"></div>
        </div>
        </div>
        </section>
        <script type="text/javascript">
            var Circles = [
                {
                    lat: 11.1452294,
                    lon: 122.5059695,
                    title: 'Dental Mission',
                    html: 'Change my size',
                    circle_options: {
                        radius: 2500
                    },
                    stroke_options: {
                        strokeColor: '#aaaa00',
                        fillColor: '#eeee00'
                    },
                    draggable: false
                },
                {
                    lat: 11.1583421,
                    lon: 122.6151434,
                    title: 'Dental Mission',
                    html: 'Change my size',
                    circle_options: {
                        radius: 2500
                    },
                    stroke_options: {
                        strokeColor: '#aa0000',
                        fillColor: '#ee0000'
                    },
                    draggable: false
                },
            ];

            new Maplace({
                show_markers: false,
                locations: Circles,
                view_all_text: 'Medical Missions Available',
                type: 'circle',
                map_options: {
                    zoom: 10
                }
            }).Load();
        </script>
    </body>
</html>
