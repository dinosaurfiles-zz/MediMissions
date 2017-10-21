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
                        <h1 class="title" style="margin-bottom: 4px"><a href="/missions/{{ $mission->id }}">{{ $mission->name }} </a>
                            @if ($mission->status == 1)
                                <button class="button is-danger is-inverted">
                                    <span class="icon">
                                        <i class="fa fa-spinner"></i>
                                    </span>
                                    &nbsp Available
                                </button>
                            </h1>
                            @else
                                <button class="button is-success is-inverted">
                                    <span class="icon">
                                        <i class="fa fa-check"></i>
                                    </span>
                                    &nbsp Success
                                </button>
                            </h1>
                            @endif
                        <h4>{{ $mission->unit }}</h4>
                        <h2 class="subtitle">{{ $mission->contact_person }} . {{ $mission->contact_no }}</h2>
                        <p class="content">{!! $mission->details !!}</p>
                        <br>
                        <h1 class="title">Donated Items:</h1>
                        <table class="table is-striped is-fullwidth">
                            <thead>
                                <tr>
                                    <th>Donation Name</th>
                                    <th>Current Count</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($equipments as $equipment)
                                    <tr>
                                        <td>{{ $equipment->name }}</td>
                                        <td>{{ $equipment->count }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <h2 class="subtitle">New Donation:</h2>

                        <form class="" action="/donate/{{ $mission->id }}" method="post">
                            <div class="columns">
                                <input type="hidden" name="missionid" value="{{ $mission->id }}">
                              <div class="column is-10"><input class="input is-success" type="text" placeholder="Donation name" name="name"></div>
                              <div class="column is-2"><input class="input is-success" type="number" placeholder="Count/Worth" name="count"></div>
                        </div>
                        <div class="columns">
                          <div class="column is-2 is-offset-10"><button class="button is-success is-inverted">Add Donation</button>
                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>
@endsection('content')
