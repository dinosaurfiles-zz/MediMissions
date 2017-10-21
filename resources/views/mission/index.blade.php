<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="{{ URL::asset('css/bulma.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/custompages.css') }}">
        <meta charset="utf-8">
        <title>MediMissions</title>
    </head>
    <body>
        <section class="hero is-success is-fullheight">
        <!-- Hero head: will stick at the top -->
        <!-- <div class="hero-head"> -->
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
                <a class="navbar-item is-active" href="/missions">
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
            <br>
        <!-- Hero content: will be in the middle -->
            <div class="hero-body">
                <div class="container">
                    @foreach ($missions as $mission)
                    <div class="mission-container">
                        <h1 class="title" style="margin-bottom: 4px"><a href="/mission/{{ $mission->id }}">{{ $mission->name }} </a>
                        @if ($mission->status == 1)
                            <button class="button is-danger is-inverted">Available</button></h1>
                        @else
                            <button class="button is-success is-inverted">Success</button></h1>
                        @endif
                        <h4>{{ $mission->unit }}</h4>
                        <h2 class="subtitle">{{ $mission->contact_person }} . {{ $mission->contact_no }}</h2>
                        <p>{{ $mission->details }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </body>
</html>
