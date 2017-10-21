@extends('layouts.master')

@section('content')
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
                    <div class="mission-container">
                        <h1 class="title">New Mission</h1>

                        <form class="" action="/missions/add" method="post">
                        <div class="field">
                          <div class="control">
                            <h1>Name:</h1>
                            <input class="input is-success" type="text" name="name">
                          </div>
                        </div>
                        <div class="field">
                          <div class="control columns">
                            <div class="column is-6">
                                <h1>From date:</h1>
                                <input class="input is-success" type="date" name="from_date">
                            </div>
                            <div class="column is-6">
                                <h1>To Date:</h1>
                                <input class="input is-success" type="date" name="to_date">
                            </div>
                          </div>
                        </div>
                        <div class="field">
                          <div class="control columns">
                            <div class="column is-6">
                                <h1>Latitude:</h1>
                                <input class="input is-success" type="number" name="lat">
                            </div>
                            <div class="column is-6">
                                <h1>Longitude:</h1>
                                <input class="input is-success" type="number" name="lon">
                            </div>
                          </div>
                        </div>
                        <div class="field">
                          <div class="control">
                            <h1>Details:</h1>
                            <textarea class="textarea is-success" type="text" placeholder="Success textarea"  name="details"></textarea>
                          </div>
                        </div>

                        <button class="button is-success is-outlined is-inverted">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection('content')
