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
                        <p>{{ $mission->details }}</p>
                        <br>

                        <h1 class="title">Needed Equipments/Tools:</h1>
                        <table class="table is-striped is-fullwidth">
                            <thead>
                                <tr>
                                    <th>Equipment</th>
                                    <th>Current Count</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($equipments as $equipment)

                                @if ($equipment->mission_id === $mission->id)
                                    <tr>
                                        <td>{{ $equipment->name }}</td>
                                        <td>{{ $equipment->count }}</td>
                                    </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>

                        <br>

                        <h1 class="title">Volunteers:</h1>
                        <table class="table is-striped is-fullwidth">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($volunteers as $volunteer)
                                @if ($equipment->mission_id === $mission->id)
                                <tr>
                                    <td>{{ $volunteer->name }}</td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
@endsection('content')
