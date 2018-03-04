@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="columns is- is-marginless is-centered">
            <div class="column is-12">
                <table class="table is-fullwidth">
                    <thead>
                        <tr>
                            <th>Score</th>
                            <th>City</th>
                            <th>Cost</th>
                            {{--<th>Weather</th>--}}
                            <th class="fixed-width">Girls</th>
                            <th class="fixed-width">Breast</th>
                            <th class="fixed-width">Butt</th>
                            <th class="fixed-width">Thin</th>
                            <th class="fixed-width">Clubs</th>
                            <th class="fixed-width">Bars</th>
                            <th class="fixed-width">Logistics</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cities as $city)
                            <tr>
                                <td><strong>{{ $city->metadata->score }}</strong></td>
                                <td>
                                    <a href="./{{ $city->country->name }}/{{ $city->name }}">
                                        <div class="media">
                                            <figure class="media-left">
                                                <p class="image  crop">
                                                    <img src="{{ $city->image_mobile }}" alt="{{ $city->name }}">
                                                </p>
                                            </figure>
                                            <div class="media-content">
                                                <div class="content">
                                                    <p>
                                                        <strong>{{ $city->name }}</strong>
                                                        <br>
                                                        <img class="flag" src="http://www.countryflags.io/{{ $city->country->code }}/flat/16.png">
                                                        {{ $city->country->name }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </td>
                                <td>${{ $city->cost }}/m</td>
                                {{--<td>Good</td>--}}
                                <td>
                                    <progress data-city-name="{{ $city->name }}" data-city-id="{{ $city->id }}" data-parameter="girls" class="progress modal-editable @color(10*$city->metadata->girls)" value="{{ $city->metadata->girls }}" max="10"></progress>
                                </td>
                                <td>
                                    <progress class="progress is-primary @color(20*$city->country->breast)" value="{{ 2*$city->country->breast }}" max="10"></progress>
                                </td>
                                <td>
                                    <progress class="progress is-primary @color(20*$city->country->butt)" value="{{ 2*$city->country->butt }}" max="10"></progress>
                                </td>
                                <td>
                                    <progress class="progress is-primary @color(10*$city->country->bmi)" value="{{ $city->country->bmi }}" max="10"></progress>
                                </td>
                                <td>
                                    <progress data-city-name="{{ $city->name }}" data-city-id="{{ $city->id }}" data-parameter="clubs" class="progress modal-editable @color(10*$city->metadata->clubs)" value="{{ $city->metadata->clubs }}" max="10"></progress>
                                </td>
                                <td>
                                    <progress data-city-name="{{ $city->name }}" data-city-id="{{ $city->id }}" data-parameter="bars" class="progress modal-editable @color(10*$city->metadata->bars)" value="{{ $city->metadata->bars }}" max="10"></progress>
                                </td>
                                <td>
                                    <progress data-city-name="{{ $city->name }}" data-city-id="{{ $city->id }}" data-parameter="logistics" class="progress modal-editable @color(10*$city->metadata->logistics)" value="{{ $city->metadata->logistics }}" max="10"></progress>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

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
        .flag {
            margin-bottom: -3px;
        }

        .crop {
            width: 70px;
            height: 54px;
            position: relative;
            overflow: hidden;
            border-radius: 10px;
        }

        .crop img {
            margin: -11px 0 0 0;
            width: 100%
        }

        .fixed-width {
            width: 6vw;
        }

        .modal-editable {
            cursor: pointer;
        }

        .table td, .table th {
            vertical-align: inherit;
        }

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
                axios.post('./rating', dataBag).then(function(){
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
