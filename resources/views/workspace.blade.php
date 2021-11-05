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
            <img class="header__logo" src="{{asset('./img/workspot-logo-white.svg')}}" alt="Workspot Logo">

            <div class="header__input">
                <input type="text" class="form__input" value="R10, Eindhoven">
            </div>

            <img class="header__illustration" src="{{asset('./img/working-person-illustration.svg')}}" alt="Illustration of a working person">
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
            </div>
        </div>

        <div class="container">
            <a href="" class="room">
                <div class="room__content flex">
                    <h3 class="h3">OIL 0.10</h3>
                    <span class="room__floor">1st floor</span>
                </div>
    
                <span class="room__spots flex">
                    <span class="room__highlight">5 / 100</span> Spots
                </span>
            </a>
        </div>

        <div class="workspace">
            <div class="container">
                <img class="workspace__image" src="./img/workspace.png" alt="Floor plan of workspace">
            </div>
        </div>
    </main>
</body>
</html>