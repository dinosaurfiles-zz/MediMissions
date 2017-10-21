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
                <div class="container">
                    <div class="mission-container">
                        <h1 class="title">Edit Mission #{{ $mission->id }}</h1>

                        <div class="field">
                          <div class="control">
                            <h1>Name:</h1>
                            <input class="input is-success" type="text" value="{{ $mission->name }}">
                          </div>
                        </div>
                        <div class="field">
                          <div class="control">
                            <h1>From date:</h1>
                            <input class="input is-success" type="date" value="{{ $mission->req_from_date }}">
                            <h1>To Date:</h1>
                            <input class="input is-success" type="date" value="{{ $mission->req_to_date }}">
                          </div>
                        </div>
                        <div class="field">
                          <div class="control">
                            <h1>Details:</h1>
                            <textarea class="textarea is-success" type="text" placeholder="Success textarea">{{ $mission->details }}</textarea>
                          </div>
                        </div>

                        <a class="button is-success is-outlined is-inverted">Save</a>
                    </div>
                </div>
            </div>
        </section>
@endsection('content')
