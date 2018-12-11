<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <title>Tuyển dụng Le Bonjour | Nhà Hàng - Khách sạn Đà Nẵng - Hội An</title>
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="/assets/images/icons/logo_32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="/assets/images/icons/logo_32x32.png"
    />
    <link rel="shortcut icon" href="/assets/images/icons/logo_32x32.png" />
    <link rel="stylesheet" href="/assets/css/pure.css" />
    <link rel="stylesheet" href="/assets/css/bootstrap.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
      integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Lobster"
      rel="stylesheet"
    />
    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.min.js"></script>
    <script src="/assets/js/app.js"></script>
    <script src="/assets/js/push_data.js"></script>

    <style>
      /*Contact*/
      #contactForm {
        background-image: url(/assets/images/backgrounds/contact_background.jpg);
        background-position: bottom right;
        background-size: cover;
        padding: 4vh 0 3vh 2vw;
        width: 100%;
        height: auto;
        margin-top: 1vw;
      }
      #contactForm input {
        height: 7vh;
        width: 40%;
        margin: 10px 0;
        outline: none;
        letter-spacing: 1px;
        color: black;
      }
      #message {
        height: 12vh;
        width: 40%;
        color: black;
      }
      #contactForm button {
        width: 100px;
        height: 30px;
        cursor: pointer;
        background-image: -webkit-gradient(
          linear,
          left top,
          right top,
          from(rgba(230, 0, 115, 1)),
          to(rgba(116, 83, 224, 1))
        );
        background-image: linear-gradient(
          90deg,
          rgba(230, 0, 115, 1) 0%,
          rgba(116, 83, 224, 1) 100%
        );
        border: none;
        font-weight: bold;
      }

      #contactForm p,
      #contactForm input {
        color: black;
      }

      /*Responsive*/

      @media only screen and (max-device-width: 780px) {
        #contactForm {
          width: 100%;
          margin: 0 auto;
        }
        #contactForm input,
        #message {
          width: 70%;
          margin: 5px auto;
        }
        #contactForm button {
          width: 70%;
          height: 5vh;
          font-size: 1.8rem;
        }
      }
    </style>
  </head>

  <body>
    <!--
      ------------------------------ Navbar--------------------------------------
    -->

    <div w3-include-html="/templates/cpmponents/navigation.php"></div>
    <h2 class="title pt-5 pl-4">Contact Us:</h2>

    <form action="" class="pl-5" id="contactForm">
      <p>Contact name (*)</p>
      <input type="text" />
      <p>Company</p>
      <input type="text" placeholder="(not required)" />
      <p>Email address (*)</p>
      <input type="text" />
      <p>Message (*)</p>
      <textarea rows="4" cols="50" id="message"></textarea><br /><br />
      <button>Send it</button>
    </form>

    <?php require_once('/templates/components/footer.php')?>
  </body>
</html>
