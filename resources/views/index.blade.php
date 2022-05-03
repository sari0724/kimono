<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
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

            ._content {
                text-align: center;
            }

            ._title {
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
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="_content">
                <div class="_title m-b-md">
                    キモノ織物
                </div>
                
                <a class='create'>[<a href='/useroutfits/create'>create</a>]</a>
                
                <h2>サイトについて</h2>
                <p>This is a sample.</p>
                
                <div class='useroutfits'>
                    @foreach ($useroutfits as $useroutfit)
                        <div class='useroutfit'>
                            <h2>
                                <a href="/useroutfits/{{ $useroutfit->id }}">{{ $useroutfit->title }}</a>
                            </h2>
                            <p>{{ $useroutfit->content }}</p>
                        </div>
                    @endforeach
                </div>
                <div class="paginate">
                    {{ $useroutfits->links() }}
                </div>
                
                <div class='serviceoutfits'>
                    @foreach ($serviceoutfits as $serviceoutfit)
                        <div class='serviceoutfit'>
                            <h2>
                                <a href="/serviceoutfits/{{ $serviceoutfit->id }}">{{ $serviceoutfit->title }}</a>
                            </h2>
                            <p>{{ $serviceoutfit->content }}</p>
                        </div>
                    @endforeach
                </div>
                <div class="paginate">
                    {{ $serviceoutfits->links() }}
                </div>
                
                <div class='stories'>
                     @foreach ($stories as $story)
                        <div class='story'>
                            <h2>
                                <a href="/stories/{{ $story->id }}">{{ $story->title }}</a>
                            </h2>
                            <p>{{ $story->content }}</p>
                        </div>
                    @endforeach
                </div>
                <div class="paginate">
                    {{ $stories->links() }}
                </div>
            </div>
        </div>
    </body>
</html>
