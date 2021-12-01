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
  <body style="background-image: url(launch_assets2/back.png)">
    <div style="overflow: hidden">
      <div style="position: absolute; top: 0; bottom: 0; right: 0; left: 0">
        <div class="container" style="overflow: hidden">

<!--          <img
            src="./launch_assets/logos.png"
            style="position: absolute; bottom: 0; right: 0; width: 40vw"
          />-->

          <div
            id="launch_btn"
            style="
              position: absolute;
              bottom: 200px;
              left: 100px;
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

<!--            <lottie-player
              id="loader"
              src="./launch_assets/loader.json"
              background="transparent"
              speed="1"
              style="width: 150px; position: absolute"
              loop
              autoplay
            ></lottie-player>-->

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
                TAP
              </h2>
              <h2
                style="
                  color: #fff;
                  font-family: 'Blinker', sans-serif;
                  font-size: 27px;
                "
              >
                HERE
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
    <script src="./launch_assets2/lottie.js"></script>
    <script src="./launch_assets2/script.js"></script>
  </body>
</html>
