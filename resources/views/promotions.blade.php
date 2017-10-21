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
                <h1 class="title">Our Top Donors and Volunteers!</h1>
            </div>
        </div>
        </section>
    </body>
</html>
