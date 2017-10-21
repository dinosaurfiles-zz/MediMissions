<!DOCTYPE html>
<html>
    <head>
        <script src="https://maps.google.com/maps/api/js?libraries=geometry&v=3.28&key=AIzaSyD89Utz6N8AlWEwgaKtkpTKUE4dtsgG2xA"></script>
        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="{{ secure_asset('js/maplace.min.js') }}"></script>
        <link rel="stylesheet" href="{{ secure_asset('css/bulma.css') }}">
        <link rel="stylesheet" href="{{ secure_asset('css/font-awesome.min.css') }}">
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
                <a class="navbar-item">
                  Home
                </a>
                <a class="navbar-item">
                  About
                </a>
                <a class="navbar-item">
                  LGUs
                </a>
                <a class="navbar-item">
                  Volunteers
                </a>
              </div>
            </div>
          </div>
        </header>
        </div>

        <!-- Hero content: will be in the middle -->
        <div class="hero-body">
        <div class="container has-text-centered">
            <div id="gmap" style="with:300px;height:500px;"></div>
        </div>
        </div>
        </section>
        <script type="text/javascript">
            new Maplace({
                show_markers: false,
                locations: [{
                    lat: 11.2,
                    lon: 122.5621,
                    zoom: 10
                }]
                }).Load();
        </script>
    </body>
</html>
