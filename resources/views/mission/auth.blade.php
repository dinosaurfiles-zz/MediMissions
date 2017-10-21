@extends('layouts.master')

@section('content')
        <section class="hero is-success is-fullheight">
        <!-- Hero head: will stick at the top -->
        <!-- <div class="hero-head"> -->
        <header class="navbar">
          <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item">
                  <span style="font-size: 30px">
                      Medi
                      <span class="icon" style="margin-left: -5px">
                          <i class="fa fa-plus"></i>
                      </span>Missions
                  </span>
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
                <div class="container has-text-centered">
                    <div class="mission-container">
                        <h1 class="title" style="margin-bottom: 4px"><a href="/missions/{{ $mission->id }}">{{ $mission->name }} </a>
                        </h1>
                            <br>
                            <h2 class="subtitle">Input authentication token to edit</h2>
                            <br>
                            <div class="field">
                              <div class="control">
                                  <form class="" action="/missions/{{ $mission->id }}/edit/" method="get">
                                      <input class="input is-success" type="text" placeholder="Authentication token">
                                  </form>
                              </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>
@endsection('content')
