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
                    
                    <h3 class="subtitle">Nightclubs <a class="button is-small add-button" data-venue-type="nightclub" data-city-id="{{ $city->id }}" data-city-name="{{ $city->name }}">+ Add</a></h3>
                    <ul>
                        @foreach($city->venues as $venue)
                            @if($venue->type == 'nightclub')
                                <li>
                                    <div class="columns">
                                        <div class="column is-one-fifth">
                                            <a href="{{ $venue->link }}" >{{ $venue->name }}</a>
                                        </div>
                                        <div class="column is-one-fifth">
                                            <progress class="progress is-primary venue-rating @color(10*$venue->score)" data-venue-name="{{ $venue->name }}" data-venue-id="{{ $venue->id }}" value="{{ $venue->score }}" max="10"></progress>
                                        </div>
                                    </div>
                                </li>
                            @endif
                        @endforeach
                    </ul>

                    <h3 class="subtitle">Bars  <button class="button is-small add-button" data-venue-type="bar" data-city-id="{{ $city->id }}" data-city-name="{{ $city->name }}">+ Add</button></h3>
                    <ul>
                        @foreach($city->venues as $venue)
                            @if($venue->type == 'bar')
                                <li>
                                    <div class="columns">
                                        <div class="column is-one-fifth">
                                            <a href="{{ $venue->link }}" >{{ $venue->name }}</a>
                                        </div>
                                        <div class="column is-one-fifth">
                                            <progress class="progress is-primary venue-rating @color(10*$venue->score)" data-venue-name="{{ $venue->name }}" data-venue-id="{{ $venue->id }}" value="{{ $venue->score }}" max="10"></progress>
                                        </div>
                                    </div>
                                </li>
                            @endif
                        @endforeach
                    </ul>

                    <h3 class="subtitle">City Spots <button class="button is-small add-button" data-venue-type="spot" data-city-id="{{ $city->id }}" data-city-name="{{ $city->name }}">+ Add</button></h3>
                    <ul>
                        @foreach($city->venues as $venue)
                            @if($venue->type == 'spot')
                                <li>
                                    <div class="columns">
                                        <div class="column is-one-fifth">
                                            <a href="{{ $venue->link }}" >{{ $venue->name }}</a>
                                        </div>
                                        <div class="column is-one-fifth">
                                            <progress class="progress venue-rating is-primary @color(10*$venue->score)" data-venue-name="{{ $venue->name }}" data-venue-id="{{ $venue->id }}" value="{{ $venue->score }}" max="10"></progress>
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

    <div class="modal" id="modal-rating">
        <div class="modal-background"></div>
        <div class="modal-content has-text-centered">
            <div class="box">
                <h3 class="title has-text-centered">Add rating for <strong class="modal-box-title"></strong></h3>
                <div class="field has-addons has-addons-centered">
                    <p class="control">
                        <input class="input" type="text" placeholder="Rating" min="0" max="10" required>
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

        <div class="modal" id="modal-add">
        <div class="modal-background"></div>
        <div class="modal-content">
            <div class="box">
                <h3 class="title has-text-centered">Add a new <strong class="modal-box-title"></strong></h3>
                <div class="field">
                    <div class="control">
                        <input id="venue-name" class="input" type="text" placeholder="Name" required>
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <input id="venue-website" class="input" type="url" placeholder="Website">
                    </div>
                </div>
                <div class="field has-addons has-addons-centere">
                    <p class="control">
                        <input id="venue-rating" class="input" type="number" min="0" max="10" placeholder="Rating" required>
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
                <p class="has-text-centered">Venues will be added after evaluation.</p>
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

        .modal-editable, .venue-rating {
            cursor: pointer;
        }

        input[type=number] {
            min-width: 90px;
        }
    </style>
    <script>
        var dataBag = {};

        // Open Add Modal
        $('.add-button').click(function(){
            dataBag.city_id = $(this).data('city-id');
            dataBag.venue_type = $(this).data('venue-type');
            dataBag.cityName = $(this).data('city-name');
            $('#venue-name').removeClass('is-danger');
            $('#modal-add').addClass('is-active');
            $('#modal-add .modal-box-title').text(dataBag.venue_type + ' in ' + dataBag.cityName);
//            $('#modal-add .modal input').val($(this).attr('value'));
        });

        // Open Rating Modal
        $('.modal-editable').click(function(){
            dataBag.city_id = $(this).data('city-id');
            dataBag.metadata = $(this).data('parameter');
            dataBag.cityName = $(this).data('city-name');
            $('#modal-rating').addClass('is-active');
            $('#modal-rating .modal-box-title').text(dataBag.metadata + ' in ' + dataBag.cityName);
            $('#modal-rating input').val($(this).attr('value'));
            $('#modal-rating').data('rating-type', 'rating');
        });

        // Open Venue Rating Modal
        $('.venue-rating').click(function(){
            dataBag.venue_id = $(this).data('venue-id');
            dataBag.venue_name = $(this).data('venue-name');
            $('#modal-rating').addClass('is-active');
            $('#modal-rating .modal-box-title').text(dataBag.venue_name);
            $('#modal-rating input').val($(this).attr('value'));
            $('#modal-rating').data('rating-type', 'venue');
        });

        // Close Modal
        $('.modal-background, .modal-cancel-button').click(function(){
            $('.modal').removeClass('is-active');
        });

        // Send add venue from enter
        $('#modal-add input').keypress(function (e) {
            if(e.which == 13){
                sendAddVenue();
            }
        });

        // Send add venue from btn click
        $('#modal-add .modal-change-button').click(function(){
            sendAddVenue();
        });

        // Send rating from enter
        $('#modal-rating input').keypress(function (e) {
            if(e.which == 13){
                sendRating($('#modal-rating').data('rating-type'));
            }
        });

        // Send rating from btn click
        $('#modal-rating .modal-change-button').click(function(){
            sendRating($('#modal-rating').data('rating-type'));
        });

        // Send add venue to server
        function sendAddVenue(){
            dataBag.venue_name = $('#modal-add #venue-name').val();
            dataBag.venue_website = $('#modal-add #venue-website').val();
            dataBag.venue_rating = $('#modal-add #venue-rating').val();
            if(dataBag.venue_name != ''){
                $('.modal-change-button').addClass('is-loading');
                axios.post('../venue', dataBag).then(function(){
                    $('.modal-change-button').removeClass('is-loading');
                    $('.modal').removeClass('is-active');
                }).catch(function (error) {
                    console.log(error);
                });
            } else {
                $('#venue-name').addClass('is-danger');
            }

        }

        // Send rating to server
        function sendRating(type){
            var url = '';
            if(type === 'rating'){
                url = '../rating'
            } else if(type === 'venue'){
                url = '../venue/rating'
            }

            dataBag.value = $('.modal input').val();
            if(dataBag.value != '' && dataBag.value >= 0 && dataBag.value <= 10){
                $('.modal-change-button').toggleClass('is-loading');
                axios.post(url, dataBag).then(function(){
                    $('.modal-change-button').toggleClass('is-loading');
                    $('.modal').removeClass('is-active');
                }).catch(function (error) {
                    console.log(error);
                });
            } else {
                $('.modal input').addClass('is-danger');
            }
        }

    </script>
@endsection
