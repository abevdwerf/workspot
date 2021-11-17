<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workspot | Find your spot</title>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/styles.css">

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
        </div>
    </header>

    <main class="main--backlight">
        <div class="container">
            <div class="breadcrumb flex">
                <a href="./" class="breadcrumb__back-btn flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="13.503" height="23.619" viewBox="0 0 13.503 23.619">
                        <path id="Icon_ionic-ios-arrow-back" data-name="Icon ionic-ios-arrow-back" d="M15.321,18l8.937-8.93a1.688,1.688,0,0,0-2.391-2.384L11.742,16.8a1.685,1.685,0,0,0-.049,2.327L21.86,29.32a1.688,1.688,0,0,0,2.391-2.384Z" transform="translate(-11.251 -6.194)"/>
                    </svg>

                    Go back
                </a>

                <div style="position: relative;">
                    <a href="#" class="breadcrumb__spots-btn flex" onclick="sortToggle()">
                        <span>Spots available</span>

                        <svg xmlns="http://www.w3.org/2000/svg" width="13.503" height="23.619" viewBox="0 0 13.503 23.619">
                            <path id="Icon_ionic-ios-arrow-back" data-name="Icon ionic-ios-arrow-back" d="M15.321,18l8.937-8.93a1.688,1.688,0,0,0-2.391-2.384L11.742,16.8a1.685,1.685,0,0,0-.049,2.327L21.86,29.32a1.688,1.688,0,0,0,2.391-2.384Z" transform="translate(-11.251 -6.194)"/>
                        </svg>
                    </a>

                    <div id="sort-dropdown" class="form__dropdown">
                        <a href="#" class="form__dropdown-option form__dropdown-option--selected">Spots available</a>
                        <a href="#" class="form__dropdown-option">1 spot</a>
                        <a href="#" class="form__dropdown-option">2 spots</a>
                        <a href="#" class="form__dropdown-option">3 spots</a>
                        <a href="#" class="form__dropdown-option">4 spots</a>
                        <a href="#" class="form__dropdown-option">5 spots</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="room__rooms">
                @foreach($rooms as $room)
                    <a href="{{ $room->highlighted_map ? url('workspace/'.$room->id ) : '#' }}" class="room">
                        <div class="room__content flex">
                            <h3 class="h3">{{$room->name}}</h3>
                            <span class="room__floor">{{$room->getFloorName()}}</span>
                        </div>

                        <span class="room__spots flex">
                            <span class="room__highlight">{{$room->seats_available}} / {{$room->seats_total}}</span> Spots
                        </span>
                    </a>
                @endforeach
            </div>
        </div>
    </main>

    <!-- <script src="{{asset('js/app.js')}}" type="text/javascript"></script> -->

    <script type="text/javascript">
        let dropdown = document.getElementById("sort-dropdown");

        dropdown.childNodes.forEach(dropdownOption => {
            dropdownOption.onclick = function () {
                sortToggle();
            };
        });

        function sortToggle () {
            if (dropdown.classList.contains("form__dropdown--active")) dropdown.classList.remove("form__dropdown--active");
            else dropdown.classList.add("form__dropdown--active");
        };
    </script>
</body>
</html>