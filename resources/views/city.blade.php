@extends('layouts.app')

@section('content')
    <section class="hero  has-bg-img">
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title is-size-1 has-text-white">{{ $city->name }}</h1>
                <h2 class="subtitle is-size-2 has-text-white">{{ $city->country->name }}</h2>
            </div>
        </div>
    </section>

    <style>
        .has-bg-img {
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ $city->image_web}}')center center;
            background-size:cover;
        }

    </style>

    <section class="hero">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Ratings
                </h1>
                <h2 class="subtitle">
                    All the data gathered fot {{ $city->name }}.
                </h2>

                <div class="contaier">
                    <div class="columns is-marginless is-centered">
                        <div class="column">
                            <div class="columns">
                                <span class="column is-one-third"><strong>Cost</strong></span>
                    <span class="column is-one-third">
                        ${{ $city->cost }}/m
                    </span>
                            </div>

                            <div class="columns">
                                <span class="column is-one-third"><strong>Pick Up Score</strong></span>
                    <span class="column is-one-third">
                        <progress class="progress is-primary  @color(10*$city->metadata->score)" value="{{ $city->metadata->score }}" max="15"></progress>
                    </span>
                            </div>

                            <div class="columns">
                                <span class="column is-one-third"><strong>Obesity</strong></span>
                    <span class="column is-one-third">
                        <progress class="progress is-primary  @invertColor(10*$city->country->bmi)" value="{{ $city->country->bmi }}" max="10"></progress>
                    </span>
                            </div>

                            <div class="columns">
                                <span class="column is-one-third"><strong>Breast</strong></span>
                    <span class="column is-one-third">
                        <progress class="progress is-primary  @color(20*$city->country->breast)" value="{{ $city->country->breast }}" max="5"></progress>
                    </span>
                            </div>

                            <div class="columns">
                                <span class="column is-one-third"><strong>Girls</strong></span>
                    <span class="column is-one-third">
                        <progress data-city-name="{{ $city->name }}" data-city-id="{{ $city->id }}" data-parameter="girls" class="progress modal-editable  @color(10*$city->metadata->girls)" value="{{ $city->metadata->girls }}" max="10"></progress>
                    </span>
                            </div>

                            <div class="columns">
                                <span class="column is-one-third"><strong>Clubs</strong></span>
                    <span class="column is-one-third">
                        <progress data-city-name="{{ $city->name }}" data-city-id="{{ $city->id }}" data-parameter="clubs" class="progress modal-editable  @color(10*$city->metadata->clubs)" value="{{ $city->metadata->clubs }}" max="10"></progress>
                    </span>
                            </div>

                            <div class="columns">
                                <span class="column is-one-third"><strong>Bars</strong></span>
                    <span class="column is-one-third">
                        <progress data-city-name="{{ $city->name }}" data-city-id="{{ $city->id }}" data-parameter="bars" class="progress modal-editable  @color(10*$city->metadata->bars)" value="{{ $city->metadata->bars }}" max="10"></progress>
                    </span>
                            </div>

                            <div class="columns">
                                <span class="column is-one-third"><strong>Logistics</strong></span>
                    <span class="column is-one-third">
                        <progress data-city-name="{{ $city->name }}" data-city-id="{{ $city->id }}" data-parameter="logistics" class="progress modal-editable  @color(10*$city->metadata->logistics)" value="{{ $city->metadata->logistics }}" max="10"></progress>
                    </span>
                            </div>
                        </div>


                        <div class="column">
                            <div class="columns">
                                <span class="column is-one-third"><strong>Cost of living</strong></span>
                    <span class="column is-one-third">
                        <progress class="progress is-primary @invertColor(100-10*$city->cost_of_living)" value="{{ 10 - $city->cost_of_living }}" max="10"></progress>
                    </span>
                            </div>

                            <div class="columns">
                                <span class="column is-one-third"><strong>Housing</strong></span>
                    <span class="column is-one-third">
                        <progress class="progress is-primary @invertColor(100-10*$city->housing)" value="{{ 10 - $city->housing }}" max="10"></progress>
                    </span>
                            </div>

                            <div class="columns">
                                <span class="column is-one-third"><strong>Travel Connectivity</strong></span>
                    <span class="column is-one-third">
                        <progress class="progress is-primary @color(10*$city->travel_connectivity)" value="{{ $city->travel_connectivity }}" max="10"></progress>
                    </span>
                            </div>

                            <div class="columns">
                                <span class="column is-one-third"><strong>Safety</strong></span>
                    <span class="column is-one-third">
                        <progress class="progress is-primary @color(10*$city->safety)" value="{{ $city->safety }}" max="10"></progress>
                    </span>
                            </div>

                            <div class="columns">
                                <span class="column is-one-third"><strong>Healthcare</strong></span>
                    <span class="column is-one-third">
                        <progress class="progress is-primary @color(10*$city->healthcare)" value="{{ $city->healthcare }}" max="10"></progress>
                    </span>
                            </div>

                            <div class="columns">
                                <span class="column is-one-third"><strong>Internet</strong></span>
                    <span class="column is-one-third">
                        <progress class="progress is-primary @color(100 - 10*$city->internet_access)" value="{{ 10 - $city->internet_access}}" max="10"></progress>
                    </span>
                            </div>

                            <div class="columns">
                                <span class="column is-one-third"><strong>Environment Quality</strong></span>
                    <span class="column is-one-third">
                        <progress class="progress is-primary @color(10*$city->environment_quality)" value="{{ $city->environment_quality}}" max="10"></progress>
                    </span>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section class="hero">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Venues
                </h1>
                <h2 class="subtitle">
                    Best spots in {{ $city->name }} for pickup.
                </h2>
                <div class="content">
                    <h3 class="subtitle">Nightclubs</h3>
                    <ul>
                        @foreach($city->venues as $venue)
                            @if($venue->type == 'nightclub')
                                <li>
                                    <div class="columns">
                                        <div class="column is-one-fifth">
                                            <a href="{{ $venue->link }}" >{{ $venue->name }}</a>
                                        </div>
                                        <div class="column is-one-fifth">
                                            <progress class="progress is-primary @color(10*$venue->score)" value="{{ $venue->score }}" max="10"></progress>
                                        </div>
                                    </div>
                                </li>
                            @endif
                        @endforeach
                    </ul>

                    <h3 class="subtitle">Bars</h3>
                    <ul>
                        @foreach($city->venues as $venue)
                            @if($venue->type == 'bar')
                                <li>
                                    <div class="columns">
                                        <div class="column is-one-fifth">
                                            <a href="{{ $venue->link }}" >{{ $venue->name }}</a>
                                        </div>
                                        <div class="column is-one-fifth">
                                            <progress class="progress is-primary @color(10*$venue->score)" value="{{ $venue->score }}" max="10"></progress>
                                        </div>
                                    </div>
                                </li>
                            @endif
                        @endforeach
                    </ul>

                    <h3 class="subtitle">City Spots</h3>
                    <ul>
                        @foreach($city->venues as $venue)
                            @if($venue->type == 'spot')
                                <li>
                                    <div class="columns">
                                        <div class="column is-one-fifth">
                                            <a href="{{ $venue->link }}" >{{ $venue->name }}</a>
                                        </div>
                                        <div class="column is-one-fifth">
                                            <progress class="progress is-primary @color(10*$venue->score)" value="{{ $venue->score }}" max="10"></progress>
                                        </div>
                                    </div>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>




    <div class="modal">
        <div class="modal-background"></div>
        <div class="modal-content has-text-centered">
            <div class="box">
                <h3 class="title has-text-centered">Change value for <strong class="modal-box-title"></strong></h3>
                <div class="field has-addons has-addons-centered">
                    <p class="control">
                        <input class="input" type="text" value="1" min="0" max="10" required>
                    </p>
                    <p class="control">
                        <a class="button is-static is-danger"> / 10</a>
                    </p>
                </div>

                <div class="field is-grouped is-grouped-centered">
                    <p class="control">
                        <a class="button is-light modal-cancel-button">Cancel</a>
                    </p>
                    <p class="control">
                        <button class="button is-primary modal-change-button">Submit</button>
                    </p>
                </div>
                <p>Ratings will be updated after evaluation.</p>
            </div>

        </div>
    </div>

    <style>
        progress {
            text-align: center;
        }

        progress:after {
            content: attr(value);
            color: #4c4c4c;
            position: absolute;
            text-align: center;
            margin-top: -16px;
            margin-left: -5px;
            font-size: 13px;
        }

        .modal-editable {
            cursor: pointer;
        }
    </style>
    <script>
        var dataBag = {};

        // Open Modal
        $('.modal-editable').click(function(){
            dataBag.city_id = $(this).data('city-id');
            dataBag.metadata = $(this).data('parameter');
            dataBag.cityName = $(this).data('city-name');
            $('.modal').toggleClass('is-active');
            $('.modal-box-title').text(dataBag.metadata + ' in ' + dataBag.cityName);
            $('.modal input').val($(this).attr('value'));
        });

        // Close Modal
        $('.modal-background, .modal-cancel-button').click(function(){
            $('.modal').toggleClass('is-active');
        });

        // Send rating from enter
        $('.modal input').keypress(function (e) {
            if(e.which == 13){
                sendRating();
            }
        });

        // Send rating from btn click
        $('.modal-change-button').click(function(){
            sendRating();
        });

        // Send rating to server
        function sendRating(){
            dataBag.value = $('.modal input').val();
            if(dataBag.value != '' && dataBag.value >= 0 && dataBag.value <= 10){
                $('.modal-change-button').toggleClass('is-loading');
                axios.post('../rating', dataBag).then(function(){
                    $('.modal-change-button').toggleClass('is-loading');
                    $('.modal').toggleClass('is-active');
                }).catch(function (error) {
                    console.log(error);
                });
            } else {
                $('.modal input').addClass('is-danger');
            }
        }

    </script>
@endsection
