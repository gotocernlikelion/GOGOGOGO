<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>같이가나 Members</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

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

            <div class="content">
                <div class="title m-b-md">
                    Together Ghana Members
                </div>
                <div class="photos">
                  <img src="https://scontent-icn1-1.xx.fbcdn.net/v/t1.0-1/p240x240/48419404_2177398659194390_5593889741318651904_n.jpg?_nc_cat=110&_nc_ht=scontent-icn1-1.xx&oh=d90af7f1161c976dc0d5ea9ae418e36a&oe=5D8DEAA1" alt="">
                  <img src="https://scontent-icn1-1.xx.fbcdn.net/v/t1.0-1/p240x240/44118597_2135028063491051_4340645583157985280_n.jpg?_nc_cat=105&_nc_ht=scontent-icn1-1.xx&oh=fe082739d9cdd88ce7fe493d0eecf76f&oe=5D935B4E" alt="">
                  <img src="https://scontent-icn1-1.xx.fbcdn.net/v/t1.0-1/c0.0.240.240a/p240x240/58580494_2354179034865732_576940500150386688_n.jpg?_nc_cat=111&_nc_ht=scontent-icn1-1.xx&oh=8d9ca25d3e88e73b5d8edc8b8dbdd10d&oe=5D7B2479" alt="">
                  <img src="https://scontent-icn1-1.xx.fbcdn.net/v/t1.0-1/p240x240/53539911_2581867332040021_1907621887865782272_n.jpg?_nc_cat=110&_nc_ht=scontent-icn1-1.xx&oh=479f0e6bad8c5647c79e6894278ddfd4&oe=5D809765" alt="">
                </div>

                <div class="links">
                    <a target="_blank" href="https://www.facebook.com/profile.php?id=100007728313513">이지환에 대해서 알아보자</a>
                    <a target="_blank" href="https://www.facebook.com/eetzzo">윤유경에 대해서 알아보자</a>
                    <a target="_blank" href="https://www.facebook.com/profile.php?id=100008209746268">정현수에 대해서 알아보자</a>
                    <a target="_blank" href="https://www.facebook.com/gotocernjunho">김준호에 대해서 알아보자</a>
                </div>
            </div>
        </div>
    </body>
</html>
