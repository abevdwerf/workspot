<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workspot | Find your spot</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <img class="header__logo" src="./img/workspot-logo-white.svg" alt="Workspot Logo">

            <div class="header__input">
                <input type="text" class="form__input" value="R10, Eindhoven">
            </div>

            <img class="header__illustration" src="./img/working-person-illustration.svg" alt="Illustration of a working person">
        </div>
    </header>

    <main>
        <div class="container">
            <section class="finder">
                <form class="form__group" action="./" method="post">
                    <div class="form__input-wrapper">
                        <label class="form__label flex" for="location-input">
                            <svg xmlns="http://www.w3.org/2000/svg" width="11.667" height="16.667" viewBox="0 0 11.667 16.667"><path d="M10.833,2A5.829,5.829,0,0,0,5,7.833c0,4.375,5.833,10.833,5.833,10.833s5.833-6.458,5.833-10.833A5.829,5.829,0,0,0,10.833,2Zm0,7.917a2.083,2.083,0,1,1,2.083-2.083A2.084,2.084,0,0,1,10.833,9.917Z" transform="translate(-5 -2)" fill="#b1b1b1"/></svg>
                            Location
                        </label>
                        <input class="form__input" id="location-input" type="text" value="R10, Eindhoven">
                    </div>

                    <div class="form__input-wrapper">
                        <label class="form__label flex" for="location-input">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14.183" height="17" viewBox="0 0 14.183 17"><g transform="translate(0 0)"><path d="M91.126,8.189a3.962,3.962,0,0,0,2.9-1.2,3.962,3.962,0,0,0,1.2-2.9,3.962,3.962,0,0,0-1.2-2.9,4.094,4.094,0,0,0-5.79,0,3.962,3.962,0,0,0-1.2,2.895,3.962,3.962,0,0,0,1.2,2.9A3.963,3.963,0,0,0,91.126,8.189Zm0,0" transform="translate(-84.142)" fill="#b1b1b1"/><path d="M14.149,252.177a10.114,10.114,0,0,0-.138-1.074,8.464,8.464,0,0,0-.264-1.08,5.335,5.335,0,0,0-.444-1.007,3.8,3.8,0,0,0-.67-.872,2.952,2.952,0,0,0-.962-.6,3.324,3.324,0,0,0-1.228-.222,1.246,1.246,0,0,0-.665.282c-.2.13-.433.281-.693.447a3.971,3.971,0,0,1-.9.4,3.483,3.483,0,0,1-2.194,0,3.962,3.962,0,0,1-.9-.4c-.258-.165-.491-.315-.694-.447a1.245,1.245,0,0,0-.665-.282,3.319,3.319,0,0,0-1.228.222,2.949,2.949,0,0,0-.962.6,3.8,3.8,0,0,0-.669.872,5.345,5.345,0,0,0-.444,1.007,8.484,8.484,0,0,0-.264,1.08,10.078,10.078,0,0,0-.138,1.075c-.023.325-.034.663-.034,1a2.823,2.823,0,0,0,.838,2.136A3.018,3.018,0,0,0,3,256.1h8.186a3.017,3.017,0,0,0,2.16-.788,2.821,2.821,0,0,0,.839-2.136c0-.343-.012-.68-.034-1Zm0,0" transform="translate(0 -239.104)" fill="#b1b1b1"/></g></svg>
                            Number of people
                        </label>
                        
                        <div class="form__selection-wrapper">
                            <div class="form__selection-option"><span class="form__selection-text">1</span></div>
                            <div class="form__selection-option"><span class="form__selection-text">2</span></div>
                            <div class="form__selection-option form__selection-option--active">
                                <span class="form__selection-text">3</span>
                            </div>
                            <div class="form__selection-option"><span class="form__selection-text">4</span></div>
                            <div class="form__selection-option"><span class="form__selection-text">5</span></div>
                            <div class="form__selection-option"><span class="form__selection-text">6</span></div>
                            <div class="form__selection-option"><span class="form__selection-text">7</span></div>
                            <div class="form__selection-option"><span class="form__selection-text">8</span></div>
                        </div>
                    </div>

                    <div class="form__input-wrapper">
                        <label class="form__label flex" for="location-input">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16.254" viewBox="0 0 17 16.254"><g transform="translate(6 -15.121)"><g transform="translate(-6 15.121)"><path d="M17.329,15.6,19.1,20.537l5.422.322c.752.054.913.752.376,1.127l-4.134,3.275,1.4,5.207c.215.752-.429,1.127-.966.752l-4.348-2.953L12.283,31.22c-.644.429-1.181-.107-.966-.7l1.449-5.046L8.525,22.04A.637.637,0,0,1,8.9,20.859l5.261-.161,1.933-5.046A.631.631,0,0,1,17.329,15.6Z" transform="translate(-8.214 -15.121)" fill="#b1b1b1" fill-rule="evenodd"/></g></g></svg>
                            Room type
                        </label>

                        <div class="form__options-wrapper flex">
                            <a class="form__options-item flex" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18.903" height="15.3" viewBox="0 0 18.903 15.3">
                                    <g id="noun_Silence_469351" transform="translate(-23.356 -28.857)">
                                        <path id="Path_5" data-name="Path 5" d="M64.6,45.549l1.87-1.87a.357.357,0,1,0-.505-.505l-1.87,1.87-1.87-1.87a.357.357,0,0,0-.505.505l1.87,1.87-1.87,1.87a.357.357,0,1,0,.505.505l1.87-1.87,1.87,1.87a.357.357,0,0,0,.505-.505Z" transform="translate(-24.492 -9.038)" stroke="#151515" stroke-width="0.3"/>
                                        <g id="Group_15" data-name="Group 15" transform="translate(23.506 29.007)">
                                        <path id="Path_6" data-name="Path 6" d="M33.307,44.007a3.116,3.116,0,0,1-1.56-.475l-.124-.072a13.361,13.361,0,0,0-5.333-1.753c-1.535,0-2.784-1.763-2.784-3.93V35.22c0-2.167,1.246-3.93,2.777-3.93a13.455,13.455,0,0,0,5.332-1.742l.126-.073a3.124,3.124,0,0,1,1.555-.469c1.259,0,2.073,1.005,2.073,2.561v9.885C35.369,43,34.56,44.007,33.307,44.007ZM33.3,29.721a2.464,2.464,0,0,0-1.2.373l-.126.073A14.041,14.041,0,0,1,26.283,32c-1.119,0-2.063,1.473-2.063,3.215v2.557c0,1.743.948,3.215,2.07,3.215a13.945,13.945,0,0,1,5.692,1.851l.124.072a2.456,2.456,0,0,0,1.2.378c.844,0,1.348-.688,1.348-1.84V31.568C34.655,30.411,34.147,29.721,33.3,29.721Z" transform="translate(-23.506 -29.007)" stroke="#000" stroke-width="0.3"/>
                                        </g>
                                    </g>
                                </svg>
                                Silent Room
                            </a>
                            <a class="form__options-item flex" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="9.256" height="15" viewBox="0 0 9.256 15" >
                                    <g id="Group" transform="translate(-21.8 -4.3)">
                                        <path id="Compound_Path" data-name="Compound Path" d="M22.867,4.3v6.236H21.8v3.151h4.136v1.74l-2.609,3.151.755.624,1.854-2.232V19.3h.985V16.97L28.775,19.2l.755-.624L26.92,15.427v-1.74h4.136V10.536H29.989V4.3Zm.985.985H29v5.252H23.851Zm6.22,7.418H22.785V11.521h7.287Z" fill="#151515"/>
                                    </g>
                                </svg>

                                Desks
                            </a>
                            <!-- <a class="form__options-item flex" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19">
                                    <path id="Icon_metro-power-cord" data-name="Icon metro-power-cord" d="M23.536,7.526,21.742,5.733,18.2,9.275,16.189,7.264l3.542-3.542L17.937,1.928,14.4,5.47,12.121,3.2,10.4,4.913,20.551,15.059l1.717-1.717-2.274-2.274Zm-4.557,7.754-8.8-8.8c-1.9,2.277-4.053,5.8-2.564,8.823L5,17.929a1.59,1.59,0,0,0,0,2.242l.294.294a1.59,1.59,0,0,0,2.242,0l2.621-2.621c3.027,1.489,6.546-.665,8.823-2.564Z" transform="translate(-4.536 -1.928)"/>
                                </svg>

                                Power
                            </a>
                            <a class="form__options-item flex" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="15.2" viewBox="0 0 19 15.2">
                                    <path id="Icon_awesome-chalkboard" data-name="Icon awesome-chalkboard" d="M2.85,1.9h13.3V12.35h1.9V1.188A1.189,1.189,0,0,0,16.862,0H2.138A1.189,1.189,0,0,0,.95,1.188V12.35h1.9ZM18.525,13.3H14.25V11.4H8.55v1.9H.475A.475.475,0,0,0,0,13.775v.95a.475.475,0,0,0,.475.475h18.05A.475.475,0,0,0,19,14.725v-.95A.475.475,0,0,0,18.525,13.3Z"/>
                                </svg>

                                Whiteboard
                            </a> -->
                            <a class="form__options-item flex" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13.315" height="15.8" viewBox="0 0 13.315 15.8">
                                    <g id="user" transform="translate(0.4 0.4)">
                                        <path id="Path_1" data-name="Path 1" d="M90.645,7.226A3.5,3.5,0,0,0,93.2,6.167a3.5,3.5,0,0,0,1.058-2.554A3.5,3.5,0,0,0,93.2,1.058a3.612,3.612,0,0,0-5.109,0,3.5,3.5,0,0,0-1.058,2.554A3.5,3.5,0,0,0,88.09,6.167,3.5,3.5,0,0,0,90.645,7.226Zm0,0" transform="translate(-84.482 0)" fill="none" stroke="#151515" stroke-width="1"/>
                                        <path id="Path_2" data-name="Path 2" d="M12.484,251.6a8.924,8.924,0,0,0-.122-.948,7.469,7.469,0,0,0-.233-.953,4.707,4.707,0,0,0-.392-.889,3.354,3.354,0,0,0-.591-.77,2.6,2.6,0,0,0-.849-.533,2.933,2.933,0,0,0-1.083-.2,1.1,1.1,0,0,0-.587.249c-.176.115-.382.248-.612.394a3.5,3.5,0,0,1-.791.349,3.073,3.073,0,0,1-1.936,0,3.5,3.5,0,0,1-.791-.349c-.228-.145-.434-.278-.612-.395a1.1,1.1,0,0,0-.587-.249,2.929,2.929,0,0,0-1.083.2,2.6,2.6,0,0,0-.849.533,3.354,3.354,0,0,0-.591.77,4.716,4.716,0,0,0-.392.889,7.486,7.486,0,0,0-.233.953,8.893,8.893,0,0,0-.122.948c-.02.287-.03.585-.03.886a2.491,2.491,0,0,0,.74,1.884,2.663,2.663,0,0,0,1.906.7H9.868a2.662,2.662,0,0,0,1.906-.7,2.49,2.49,0,0,0,.74-1.884c0-.3-.01-.6-.03-.886Zm0,0" transform="translate(0 -240.071)" fill="none" stroke="#151515" stroke-width="1"/>
                                    </g>
                                </svg>
                                Meeting Room
                            </a>
                        </div>
                    </div>

                    <input class="form__submit btn" type="submit" value="Find workspace"></input>
                </form>
            </section>
        </div>
    
        <section class="intro">
            <div class="container flex">
                <div class="intro__image">
                    <img src="./img/detective.svg" alt="Detective looking for a workspace">
                </div>

                <div class="intro__content">
                    <h1 class="h1">Find your perfect workspace</h1>

                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                        dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                        sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                        invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
                    </p>

                    <a class="btn" href="#">Use WorkSpot</a>
                </div>
            </div>
        </section>
    </main>
    <script type="text/javascript" src="js/app.js" ></script>
</body>
</html>
