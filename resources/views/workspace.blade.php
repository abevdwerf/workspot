<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workspot | Find your spot</title>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('favicon/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('favicon/safari-pinned-tab.svg')}}" color="#a200ff">
    <meta name="msapplication-TileColor" content="#a200ff">
    <meta name="theme-color" content="#a200ff">
</head>
<body>
    <header class="header">
        <div class="container">
            <a class="header__logo" href="./">
                <img src="{{asset('./img/workspot-logo-white.svg')}}" alt="Workspot Logo">
            </a>

            <img class="header__illustration" src="{{asset('./img/working-person-illustration.svg')}}" alt="Illustration of a working person">
        </div>
    </header>

    <main class="main--backlight">
        <div class="container">
            <div class="breadcrumb flex">
                <a href="{{url('rooms')}}" class="breadcrumb__back-btn flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="13.503" height="23.619" viewBox="0 0 13.503 23.619">
                        <path id="Icon_ionic-ios-arrow-back" data-name="Icon ionic-ios-arrow-back" d="M15.321,18l8.937-8.93a1.688,1.688,0,0,0-2.391-2.384L11.742,16.8a1.685,1.685,0,0,0-.049,2.327L21.86,29.32a1.688,1.688,0,0,0,2.391-2.384Z" transform="translate(-11.251 -6.194)"/>
                    </svg>

                    Go back
                </a>
            </div>
        </div>

        <div class="container">
            <a href="" class="room" style="margin-bottom: 3rem;">
                <div class="room__content flex">
                    <h3 class="h3">{{$room->name}}</h3>
                    <span class="room__floor">{{$room->getFloorName()}}</span>
                </div>

                <span class="room__spots flex">
                    <span class="room__highlight">{{$room->seats_available}} / {{$room->seats_total}}</span> Spots
                </span>
            </a>
        </div>

        <div class="container">
            <div class="workspace">
                <img class="workspace__image" src="{{asset('/img/workspace.png')}}" alt="Floor plan of workspace">
            </div>
        </div>
    </main>
</body>
</html>
