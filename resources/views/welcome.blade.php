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
                <a class="navbar-item" href="/promotions">
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
                @foreach ($missions as $mission)
                {
                    lat: {{ $mission->lat }},
                    lon: {{ $mission->lon }},
                    title: 'Mission #{{ $mission->id }} {{ $mission->name }}',
                    html: '<a href="/missions/{{ $mission->id }}" style="color: #23D160">{{ $mission->name }}</a>',
                    circle_options: {
                        radius: 2500
                    },
                    stroke_options: {
                        strokeColor: '#FF3860',
                        fillColor: '#eeee00'
                    },
                    draggable: false
                },
                @endforeach
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
