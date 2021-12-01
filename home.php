<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Luncher</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Blinker&family=Genos:ital,wght@1,700&family=Orbitron:wght@500&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./launch_assets/style.css" />
  </head>
  <body>
    <div style="overflow: hidden">
      <div style="position: absolute; top: 0; bottom: 0; right: 0; left: 0">
        <div class="container" style="overflow: hidden">
          <lottie-player
            src="./launch_assets/data.json"
            background="transparent"
            speed="0.4"
            style="
              position: absolute;
              bottom: 70px;
              width: 85vw;
              right: -280px;
              z-index: 10;
            "
            loop
            autoplay
          ></lottie-player>

          <div
            style="
              position: absolute;
              z-index: 10;
              top: 9vh;
              left: 5vw;
              display: flex;
              flex-direction: column;
            "
          >
            <h1
              style="
                font-size: 50px;
                font-family: 'Genos', sans-serif;
                color: #fb315b;
                font-weight: bold;
                margin-left: 10px;
                letter-spacing: 4px;
              "
            >
              National Youth Service Council
            </h1>
            <h1
              style="
                font-size: 125px;
                font-family: 'Genos', sans-serif;
                color: #000;
                font-weight: bold;
                margin-top: -50px;
              "
            >
              NEW WEBSITE &
            </h1>
            <h1
              style="
                font-size: 125px;
                font-family: 'Genos', sans-serif;
                color: #000;
                font-weight: bold;
                margin-top: -70px;
              "
            >
              MOBILE APP
            </h1>
            <h1
              style="
                font-size: 85px;
                font-family: 'Orbitron', sans-serif;
                margin-top: -20px;
                color: #fb315b;
              "
            >
              RELEASE
            </h1>
            <div
              style="
                padding: 10px 20px;
                background-color: #fb315b;
                color: #fff;
                width: 200px;
              "
            >
              <h4
                style="
                  font-size: 30px;
                  font-family: 'Blinker', sans-serif;
                  letter-spacing: 4px;
                "
              >
                www.nysc.lk
              </h4>
            </div>
          </div>

          <img
            src="./launch_assets/logos.png"
            style="position: absolute; bottom: 0; right: 0; width: 40vw"
          />

          <div
            id="launch_btn"
            style="
              position: absolute;
              bottom: 50px;
              left: 50px;
              z-index: 10;
              display: flex;
              align-items: center;
              justify-content: center;
              cursor: pointer;
            "
          >
            <lottie-player
              src="./launch_assets/button.json"
              background="transparent"
              speed="1"
              style="width: 350px; height: 350px"
              loop
              autoplay
            ></lottie-player>

            <lottie-player
              id="loader"
              src="./launch_assets/loader.json"
              background="transparent"
              speed="1"
              style="width: 150px; position: absolute"
              loop
              autoplay
            ></lottie-player>

            <div
              id="launch_text"
              style="
                position: absolute;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
              "
            >
              <h2
                style="
                  color: #fff;
                  font-family: 'Blinker', sans-serif;
                  font-size: 27px;
                "
              >
                LAUNCH
              </h2>
              <h2
                style="
                  color: #fff;
                  font-family: 'Blinker', sans-serif;
                  font-size: 27px;
                "
              >
                NOW
              </h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
      integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <!-- <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script> -->
    <script src="./launch_assets//lottie.js"></script>
    <script src="./launch_assets/script.js"></script>
  </body>
</html>
