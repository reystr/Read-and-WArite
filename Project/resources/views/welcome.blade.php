<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ReadAndWArite</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #cafcf8;
                /*background-image: url("Assets/bg.jpg");*/
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .mt-2{
                margin-top: 0.5rem !important;
            }

            .btn {
                display: inline-block;
                font-weight: 400;
                color: #212529;
                text-align: center;
                vertical-align: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                background-color: transparent;
                border: 1px solid transparent;
                padding: 0.375rem 0.75rem;
                font-size: 0.9rem;
                line-height: 1.6;
                border-radius: 0.25rem;
                transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            }

            .btn-primary {
                color: #fff;
                background-color: #3490dc;
                border-color: #3490dc;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/stationery') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    ReadAndWArite
                </div>
                <div class="searchBtn">
                    <input class="form-style" type="text" placeholder="Search for Stationery" id="search">
                </div>
                <a href="{{url('search')}}">
                    <button type="submit" class="btn btn-primary mt-2">Search</button>
                </a>
            </div>







{{--                <div class="scale-op">--}}
{{--                    <div class="op-name" id="op-name">--}}
{{--                        <div class="op-box">--}}
{{--                            <div class="op-content">--}}
{{--                                <img src="Assets/book_PNG2115.png" alt="">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="scale-op2">--}}
{{--                    <div class="op-name2" id="op-name2">--}}
{{--                        <div class="op-box2">--}}
{{--                            <div class="op-content2">--}}
{{--                                <img src="Assets/book_PNG51090.png" alt="">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="scale-op3">--}}
{{--                    <div class="op-name3" id="op-name3">--}}
{{--                        <div class="op-box3">--}}
{{--                            <div class="op-content3">--}}
{{--                                <img src="Assets/d4xwzej-402c6d14-12ac-49ab-9e5f-085e6f43c2be.png" alt="">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="scale-op4">--}}
{{--                    <div class="op-name4" id="op-name4">--}}
{{--                        <div class="op-box4">--}}
{{--                            <div class="op-content4">--}}
{{--                                <img src="Assets/ruler_PNG49.png" alt="">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
        </div>
    </body>
</html>
