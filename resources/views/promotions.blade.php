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
                <div class="mission-container">
                    <h1 class="title">About Us!</h1>
                    <div class="columns">
                        <div class="column is-4">
                            <div class="card">
                              <div class="card-image">
                                <figure class="image is-4by3">
                                  <img src="{{ URL::asset('images/1.jpeg') }}" alt="Placeholder image">
                                </figure>
                              </div>
                              <div class="card-content">
                                <div class="media">
                                  <div class="media-content has-text-centered">
                                    <p class="title is-4" style="color: #4a4a4a">Successful Dental Missions provided by Company A!</p>
                                    <p class="subtitle is-6" style="color: #4a4a4a">Passi Rural Health Unit</p>
                                  </div>
                                </div>

                                <div class="content">
                                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                  Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                                  <a href="#">#css</a> <a href="#">#responsive</a>
                                  <br>
                                  <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="column is-4">
                            <div class="card">
                              <div class="card-content">
                                <p class="title" style="color: #4a4a4a">
                                  “Dengue cases lessens as of September - October 2017. Thanks to the weekly volunteer works”
                                </p>
                                <p class="subtitle" style="color: #4a4a4a">
                                  Tanay Residents
                                </p>
                              </div>
                              <footer class="card-footer">
                                <p class="card-footer-item">
                                  <span>
                                    View on <a href="https://twitter.com/codinghorror/status/506010907021828096">Twitter</a>
                                  </span>
                                </p>
                                <p class="card-footer-item">
                                  <span>
                                    Share on <a href="#">Facebook</a>
                                  </span>
                                </p>
                              </footer>
                            </div>
                        </div>
                        <div class="column is-4">
                            <div class="card">
                              <div class="card-image">
                                <figure class="image is-4by3">
                                  <img src="{{ URL::asset('images/2.jpeg') }}" alt="Placeholder image">
                                </figure>
                              </div>
                              <div class="card-content">
                                <div class="media">
                                  <div class="media-content has-text-centered">
                                    <p class="title is-4" style="color: #4a4a4a">Elderly Care 2017</p>
                                    <p class="subtitle is-6" style="color: #4a4a4a">Passi Rural Health Unit</p>
                                  </div>
                                </div>

                                <div class="content">
                                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                  Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                                  <a href="#">#css</a> <a href="#">#responsive</a>
                                  <br>
                                  <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column is-4">
                            <div class="card">
                              <div class="card-content">
                                <p class="title" style="color: #4a4a4a">
                                  “There are two hard things in computer science: cache invalidation, naming things, and off-by-one errors.”
                                </p>
                                <p class="subtitle" style="color: #4a4a4a">
                                  Jeff Atwood
                                </p>
                              </div>
                              <footer class="card-footer">
                                <p class="card-footer-item">
                                  <span>
                                    View on <a href="https://twitter.com/codinghorror/status/506010907021828096">Twitter</a>
                                  </span>
                                </p>
                                <p class="card-footer-item">
                                  <span>
                                    Share on <a href="#">Facebook</a>
                                  </span>
                                </p>
                              </footer>
                            </div>
                        </div>
                        <div class="column is-4">
                            <div class="card">
                              <div class="card-image">
                                <figure class="image is-4by3">
                                  <img src="{{ URL::asset('images/3.jpeg') }}" alt="Placeholder image">
                                </figure>
                              </div>
                              <div class="card-content">
                                <div class="media">
                                  <div class="media-content has-text-centered">
                                    <p class="title is-4" style="color: #4a4a4a">Theodore Paco</p>
                                    <p class="subtitle is-6" style="color: #4a4a4a">Badiangan Rural Health Unit</p>
                                  </div>
                                </div>

                                <div class="content">
                                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                  Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                                  <a href="#">#css</a> <a href="#">#responsive</a>
                                  <br>
                                  <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="column is-4">
                            <div class="card">
                              <div class="card-content">
                                <p class="title" style="color: #4a4a4a">
                                  “There are two hard things in computer science: cache invalidation, naming things, and off-by-one errors.”
                                </p>
                                <p class="subtitle" style="color: #4a4a4a">
                                  Jeff Atwood
                                </p>
                              </div>
                              <footer class="card-footer">
                                <p class="card-footer-item">
                                  <span>
                                    View on <a href="https://twitter.com/codinghorror/status/506010907021828096">Twitter</a>
                                  </span>
                                </p>
                                <p class="card-footer-item">
                                  <span>
                                    Share on <a href="#">Facebook</a>
                                  </span>
                                </p>
                              </footer>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </section>
    </body>
</html>
