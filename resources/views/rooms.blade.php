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

                <!-- <div style="position: relative;">
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
                </div> -->
            </div>
        </div>

        <div class="container">
            <div class="room__rooms">
                @if (count($rooms) == 0)
                    <a class="room room--error">
                        <p>No available rooms found.</p>
                    </a>
                @else
                    @foreach($rooms as $room)
                        <a href="{{ $room->highlighted_map ? url('workspace/'.$room->id ) : '#' }}" class="room">
                            <div class="room__content flex">
                                <h3 class="h3">{{ $room->name }}</h3>
                                <span class="room__floor">{{ $room->getFloorName() }}</span>
                            </div>

                            <span class="room__spots flex">
                                <span class="room__highlight">{{ $room->seats_available }} / {{ $room->seats_total }}</span> Spots
                            </span>

                            <div class="room__labels flex">
                                @if ($room->type === "meeting room")
                                    <div class="room__label flex room__label--meeting">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14.183" height="17" viewBox="0 0 14.183 17"><g transform="translate(0 0)"><path d="M91.126,8.189a3.962,3.962,0,0,0,2.9-1.2,3.962,3.962,0,0,0,1.2-2.9,3.962,3.962,0,0,0-1.2-2.9,4.094,4.094,0,0,0-5.79,0,3.962,3.962,0,0,0-1.2,2.895,3.962,3.962,0,0,0,1.2,2.9A3.963,3.963,0,0,0,91.126,8.189Zm0,0" transform="translate(-84.142)" /><path d="M14.149,252.177a10.114,10.114,0,0,0-.138-1.074,8.464,8.464,0,0,0-.264-1.08,5.335,5.335,0,0,0-.444-1.007,3.8,3.8,0,0,0-.67-.872,2.952,2.952,0,0,0-.962-.6,3.324,3.324,0,0,0-1.228-.222,1.246,1.246,0,0,0-.665.282c-.2.13-.433.281-.693.447a3.971,3.971,0,0,1-.9.4,3.483,3.483,0,0,1-2.194,0,3.962,3.962,0,0,1-.9-.4c-.258-.165-.491-.315-.694-.447a1.245,1.245,0,0,0-.665-.282,3.319,3.319,0,0,0-1.228.222,2.949,2.949,0,0,0-.962.6,3.8,3.8,0,0,0-.669.872,5.345,5.345,0,0,0-.444,1.007,8.484,8.484,0,0,0-.264,1.08,10.078,10.078,0,0,0-.138,1.075c-.023.325-.034.663-.034,1a2.823,2.823,0,0,0,.838,2.136A3.018,3.018,0,0,0,3,256.1h8.186a3.017,3.017,0,0,0,2.16-.788,2.821,2.821,0,0,0,.839-2.136c0-.343-.012-.68-.034-1Zm0,0" transform="translate(0 -239.104)" /></g></svg>
                                        <span class="room__label-text">Meeting Room</span>
                                    </div>
                                @elseif ($room->type === "silent room")
                                    <div class="room__label flex room__label--silent">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5 17h-5v-10h5v10zm2-10v10l9 5v-20l-9 5zm15.324 4.993l1.646-1.659-1.324-1.324-1.651 1.67-1.665-1.648-1.316 1.318 1.67 1.657-1.65 1.669 1.318 1.317 1.658-1.672 1.666 1.653 1.324-1.325-1.676-1.656z"/></svg>
                                        <span class="room__label-text">Silent Room</span>
                                    </div>
                                @endif
                            </div>
                        </a>
                    @endforeach
                @endif
            </div>
        </div>
    </main>

    <!-- <script type="text/javascript">
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
    </script> -->
</body>
</html>