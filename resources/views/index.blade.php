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
<body class="front-page">
    <header class="header header--front-page">
        <div class="container">
            <a class="header__logo" href="./">
                <img src="{{asset('img/workspot-logo-white.svg')}}" alt="Workspot Logo">
            </a>

            <img class="header__illustration" src="{{asset('img/working-person-illustration.svg')}}" alt="Illustration of a working person">
        </div>
    </header>

    <span style="display: none;" class="base">{{ url("") }}</span>

    <main>
        <div class="main__wrap">
            <section class="finder">
                <form class="form__group" autocomplete="off" action="{{ url("rooms") }}" method="POST">
                    @csrf
                    @method('get')
                    <div class="form__input-wrapper" style="position: relative;">
                        <label class="form__label flex" for="location-input">
                            <svg style="fill: #b1b1b1;" xmlns="http://www.w3.org/2000/svg" width="11.667" height="16.667" viewBox="0 0 11.667 16.667"><path d="M10.833,2A5.829,5.829,0,0,0,5,7.833c0,4.375,5.833,10.833,5.833,10.833s5.833-6.458,5.833-10.833A5.829,5.829,0,0,0,10.833,2Zm0,7.917a2.083,2.083,0,1,1,2.083-2.083A2.084,2.084,0,0,1,10.833,9.917Z" transform="translate(-5 -2)" /></svg>
                            Location
                        </label>
                        <div class="form__dropdown" id="locations-dropdown">
                            @foreach($locations as $location)
                                <a class="form__dropdown-option" data-id="{{$location->id}}">{{$location->name}}</a>
                            @endforeach
                        </div>
                        <input type="hidden" id="location-id-input">
                        <input class="form__input" id="location-input" type="text" placeholder="Selecteer een locatie">
                    </div>

                    <div class="form__input-wrapper">
                        <label class="form__label flex">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14.183" height="17" viewBox="0 0 14.183 17"><g transform="translate(0 0)"><path d="M91.126,8.189a3.962,3.962,0,0,0,2.9-1.2,3.962,3.962,0,0,0,1.2-2.9,3.962,3.962,0,0,0-1.2-2.9,4.094,4.094,0,0,0-5.79,0,3.962,3.962,0,0,0-1.2,2.895,3.962,3.962,0,0,0,1.2,2.9A3.963,3.963,0,0,0,91.126,8.189Zm0,0" transform="translate(-84.142)" fill="#b1b1b1"/><path d="M14.149,252.177a10.114,10.114,0,0,0-.138-1.074,8.464,8.464,0,0,0-.264-1.08,5.335,5.335,0,0,0-.444-1.007,3.8,3.8,0,0,0-.67-.872,2.952,2.952,0,0,0-.962-.6,3.324,3.324,0,0,0-1.228-.222,1.246,1.246,0,0,0-.665.282c-.2.13-.433.281-.693.447a3.971,3.971,0,0,1-.9.4,3.483,3.483,0,0,1-2.194,0,3.962,3.962,0,0,1-.9-.4c-.258-.165-.491-.315-.694-.447a1.245,1.245,0,0,0-.665-.282,3.319,3.319,0,0,0-1.228.222,2.949,2.949,0,0,0-.962.6,3.8,3.8,0,0,0-.669.872,5.345,5.345,0,0,0-.444,1.007,8.484,8.484,0,0,0-.264,1.08,10.078,10.078,0,0,0-.138,1.075c-.023.325-.034.663-.034,1a2.823,2.823,0,0,0,.838,2.136A3.018,3.018,0,0,0,3,256.1h8.186a3.017,3.017,0,0,0,2.16-.788,2.821,2.821,0,0,0,.839-2.136c0-.343-.012-.68-.034-1Zm0,0" transform="translate(0 -239.104)" fill="#b1b1b1"/></g></svg>
                            Number of people
                        </label>

                        <div class="form__selection-wrapper">
                            <div class="form__selection-option"><span class="form__selection-text">1</span></div>
                            <div class="form__selection-option"><span class="form__selection-text">2</span></div>
                            <div class="form__selection-option form__selection-option--active"><span class="form__selection-text">3</span></div>
                            <div class="form__selection-option"><span class="form__selection-text">4</span></div>
                            <div class="form__selection-option"><span class="form__selection-text">5</span></div>
                            <div class="form__selection-option"><span class="form__selection-text">6</span></div>
                            <div class="form__selection-option"><span class="form__selection-text">7</span></div>
                            <div class="form__selection-option"><span class="form__selection-text">8</span></div>
                        </div>

                        <input style="display: none;" type="number" id="location-number-of-people" value="3">
                    </div>

                    <div class="form__input-wrapper">
                        <label class="form__label flex">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16.254" viewBox="0 0 17 16.254"><g transform="translate(6 -15.121)"><g transform="translate(-6 15.121)"><path d="M17.329,15.6,19.1,20.537l5.422.322c.752.054.913.752.376,1.127l-4.134,3.275,1.4,5.207c.215.752-.429,1.127-.966.752l-4.348-2.953L12.283,31.22c-.644.429-1.181-.107-.966-.7l1.449-5.046L8.525,22.04A.637.637,0,0,1,8.9,20.859l5.261-.161,1.933-5.046A.631.631,0,0,1,17.329,15.6Z" transform="translate(-8.214 -15.121)" fill="#b1b1b1" fill-rule="evenodd"/></g></g></svg>
                            Room type
                        </label>

                        <div class="form__options-wrapper flex">
                            <a class="form__options-item flex" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5 17h-5v-10h5v10zm2-10v10l9 5v-20l-9 5zm15.324 4.993l1.646-1.659-1.324-1.324-1.651 1.67-1.665-1.648-1.316 1.318 1.67 1.657-1.65 1.669 1.318 1.317 1.658-1.672 1.666 1.653 1.324-1.325-1.676-1.656z"/></svg>
                                Silent Room
                                <input class="form__options-checkbox" type="checkbox">
                            </a>
                            <a class="form__options-item flex" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M22 2h-20v13h20v-13zm-2 11h-16v-9h16v9zm2 3h-20l-2 6h24l-2-6zm-12.228 5l.466-1h3.524l.466 1h-4.456z"/></svg>
                                Desks
                                <input class="form__options-checkbox" type="checkbox">
                            </a>
                            <a class="form__options-item flex" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.183" height="17" viewBox="0 0 14.183 17"><g transform="translate(0 0)"><path d="M91.126,8.189a3.962,3.962,0,0,0,2.9-1.2,3.962,3.962,0,0,0,1.2-2.9,3.962,3.962,0,0,0-1.2-2.9,4.094,4.094,0,0,0-5.79,0,3.962,3.962,0,0,0-1.2,2.895,3.962,3.962,0,0,0,1.2,2.9A3.963,3.963,0,0,0,91.126,8.189Zm0,0" transform="translate(-84.142)" /><path d="M14.149,252.177a10.114,10.114,0,0,0-.138-1.074,8.464,8.464,0,0,0-.264-1.08,5.335,5.335,0,0,0-.444-1.007,3.8,3.8,0,0,0-.67-.872,2.952,2.952,0,0,0-.962-.6,3.324,3.324,0,0,0-1.228-.222,1.246,1.246,0,0,0-.665.282c-.2.13-.433.281-.693.447a3.971,3.971,0,0,1-.9.4,3.483,3.483,0,0,1-2.194,0,3.962,3.962,0,0,1-.9-.4c-.258-.165-.491-.315-.694-.447a1.245,1.245,0,0,0-.665-.282,3.319,3.319,0,0,0-1.228.222,2.949,2.949,0,0,0-.962.6,3.8,3.8,0,0,0-.669.872,5.345,5.345,0,0,0-.444,1.007,8.484,8.484,0,0,0-.264,1.08,10.078,10.078,0,0,0-.138,1.075c-.023.325-.034.663-.034,1a2.823,2.823,0,0,0,.838,2.136A3.018,3.018,0,0,0,3,256.1h8.186a3.017,3.017,0,0,0,2.16-.788,2.821,2.821,0,0,0,.839-2.136c0-.343-.012-.68-.034-1Zm0,0" transform="translate(0 -239.104)" /></g></svg>
                                Meeting Room
                                <input class="form__options-checkbox" type="checkbox">
                            </a>
                            <!-- <a class="form__options-item flex" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19"> <path id="Icon_metro-power-cord" data-name="Icon metro-power-cord" d="M23.536,7.526,21.742,5.733,18.2,9.275,16.189,7.264l3.542-3.542L17.937,1.928,14.4,5.47,12.121,3.2,10.4,4.913,20.551,15.059l1.717-1.717-2.274-2.274Zm-4.557,7.754-8.8-8.8c-1.9,2.277-4.053,5.8-2.564,8.823L5,17.929a1.59,1.59,0,0,0,0,2.242l.294.294a1.59,1.59,0,0,0,2.242,0l2.621-2.621c3.027,1.489,6.546-.665,8.823-2.564Z" transform="translate(-4.536 -1.928)"/> </svg>
                                Power
                            </a>
                            <a class="form__options-item flex" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="15.2" viewBox="0 0 19 15.2"> <path id="Icon_awesome-chalkboard" data-name="Icon awesome-chalkboard" d="M2.85,1.9h13.3V12.35h1.9V1.188A1.189,1.189,0,0,0,16.862,0H2.138A1.189,1.189,0,0,0,.95,1.188V12.35h1.9ZM18.525,13.3H14.25V11.4H8.55v1.9H.475A.475.475,0,0,0,0,13.775v.95a.475.475,0,0,0,.475.475h18.05A.475.475,0,0,0,19,14.725v-.95A.475.475,0,0,0,18.525,13.3Z"/> </svg>
                                Whiteboard
                            </a> -->
                        </div>
                    </div>

                    <input id="search-spot-form"  class="form__submit btn" type="submit" value="Find workspace"></input>
                </form>
            </section>

            <section class="intro animation__slide-in flex">
                <div class="flex" style="flex-direction: column; margin: auto 0;">
                    <img class="intro__image"src="./img/detective.svg" alt="Detective looking for a workspace">

                    <div class="intro__content">
                        <h1 class="h1">Find your perfect workspace</h1>

                        <p>
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                            ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                            dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                            sit amet.
                        </p>

                        <!-- <a class="btn" href="#">Use WorkSpot</a> -->
                    </div>
                </div>
            </section>

            <div class="room__rooms animation__slide-in" style="display: none;" >
                <div class="container">
                    <h2>Available workspaces:</h2>
                    <a href="#" style="display: none;" id="room-template">
                        <div class="room__content flex">
                            <h3 class="h3"></h3>
                            <span class="room__floor"></span>
                        </div>

                        <span class="room__spots flex">
                            <span class="room__highlight"></span>
                            <span class="room__spots-inner"></span>
                        </span>

                        <div style="display: none;" class="room__labels flex">
                            <div class="room__label flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.183" height="17" viewBox="0 0 14.183 17"><g transform="translate(0 0)"><path d="M91.126,8.189a3.962,3.962,0,0,0,2.9-1.2,3.962,3.962,0,0,0,1.2-2.9,3.962,3.962,0,0,0-1.2-2.9,4.094,4.094,0,0,0-5.79,0,3.962,3.962,0,0,0-1.2,2.895,3.962,3.962,0,0,0,1.2,2.9A3.963,3.963,0,0,0,91.126,8.189Zm0,0" transform="translate(-84.142)" /><path d="M14.149,252.177a10.114,10.114,0,0,0-.138-1.074,8.464,8.464,0,0,0-.264-1.08,5.335,5.335,0,0,0-.444-1.007,3.8,3.8,0,0,0-.67-.872,2.952,2.952,0,0,0-.962-.6,3.324,3.324,0,0,0-1.228-.222,1.246,1.246,0,0,0-.665.282c-.2.13-.433.281-.693.447a3.971,3.971,0,0,1-.9.4,3.483,3.483,0,0,1-2.194,0,3.962,3.962,0,0,1-.9-.4c-.258-.165-.491-.315-.694-.447a1.245,1.245,0,0,0-.665-.282,3.319,3.319,0,0,0-1.228.222,2.949,2.949,0,0,0-.962.6,3.8,3.8,0,0,0-.669.872,5.345,5.345,0,0,0-.444,1.007,8.484,8.484,0,0,0-.264,1.08,10.078,10.078,0,0,0-.138,1.075c-.023.325-.034.663-.034,1a2.823,2.823,0,0,0,.838,2.136A3.018,3.018,0,0,0,3,256.1h8.186a3.017,3.017,0,0,0,2.16-.788,2.821,2.821,0,0,0,.839-2.136c0-.343-.012-.68-.034-1Zm0,0" transform="translate(0 -239.104)" /></g></svg>
                                <span class="room__label-text">Meeting Room</span>
                            </div>

                            <div class="room__label flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5 17h-5v-10h5v10zm2-10v10l9 5v-20l-9 5zm15.324 4.993l1.646-1.659-1.324-1.324-1.651 1.67-1.665-1.648-1.316 1.318 1.67 1.657-1.65 1.669 1.318 1.317 1.658-1.672 1.666 1.653 1.324-1.325-1.676-1.656z"/></svg>
                                <span class="room__label-text">Silent Room</span>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="room room--error">
                        <p>No available rooms found.</p>
                    </a>
                </div>
            </div>

            <div class="workspace animation__slide-in flex" style="display: none;" >
                <img class="workspace__image" src="./img/workspace.png" alt="Floor plan of workspace">
            </div>
        </div>
    </main>

    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>
