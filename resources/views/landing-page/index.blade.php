<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>InLivre - Peminjaman Buku</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <style>
        html {
            scroll-behavior: smooth;
        }

        * {
            font-family: 'Sora', sans-serif;
        }

        .fontpurple {
            color: #9C51FF;
        }

        .fontregular {
            font-weight: 400;
        }

        .fontbold {
            font-weight: bold;
        }

        .container-fluid {
            height: 700px;
            background-color: #FFF9EA;

        }

        .hero {}

        .herobold h1 {
            font-weight: bold;
            font-size: 64px;
        }

        .herobold h2 {
            font-weight: bold;
            font-size: 48px;
        }

        .herobold h2 span {
            font-weight: bold;
            font-size: 48px;
        }

        .herobold span {
            color: #9C51FF;
        }

        .herobold .orangefont {
            color: #F0AE4C;
        }

        .btn-hero {
            width: 193px;
            height: 61px;
            border-radius: 30px;
            border-color: #263238;
            background-color: #F0AE4C;
            font-size: 24px;
            font-weight: bold;
        }

        .btn-hero:hover {
            border-color: white;
            background-color: #263238;
            color: white;
        }

        .imagehero {
            margin-top: 70px !important;

        }

        .homehero {
            border-radius: 30px;
        }

        .con2 {
            height: 700px;
            background-color: #263238;
        }

        .con3 {
            height: 700px;
            background-color: white;
        }

        .con2 .herobold {
            margin-top: 140px !important;
        }

        .btn-navbar:hover {
            background-color: #263238;
            color: white;
        }

        .latestbook {
            margin-top: 120px !important;
        }

        .con3 .card {
            width: 311px;
            height: 360px;
            border-radius: 16px;
            background-color: #D9D9D9;
        }

        .btn-card {
            width: 142px;
            height: 50px;
            border-radius: 36px;
            background-color: white;
            font-size: 20px;
            font-weight: bold;
        }

        .btn-card:hover {
            background-color: #263238;
            color: white;
        }

        .title-book {
            font-size: 24px;
        }

        .card-body-font {
            text-shadow: 5px 0px 5px #263238;
        }

        .card-image {
            position: relative;
            overflow: hidden;

            width: 100%;
            height: 100%;
        }

        .card-image img {
            height: 100%;
        }

        .has-bg-img {
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
        }

        .cardbook1 {
            margin-right: -150px;
            opacity: 44%;
        }



        .cardbook3 {
            margin-left: -150px;
            opacity: 44%;
        }

        .con4 {
            height: 700px;
            background-color: white
        }

        .contact-hero {
            margin-top: 200px !important;
        }

        .contact-hero h1 {
            font-size: 96px;
        }

        .btn-contact:hover {
            background-color: #263238;
            border-color: white;
            color: white
        }

        .fontsizecontact {
            font-size: 20px
        }

        .logoincontact {
            /*  */
        }

        .morebutton {
            font-size: 13px;
        }

        .morebutton:hover {
            background-color: #263238;
            color: white;
        }

        footer {
            height: 199px;
            background-color: #263238;
        }

        .footertext {
            font-size: 24px;
        }

        .navbar {
            background-color: #FFF9EA;
        }

        .animate-charcter {
            text-transform: uppercase;
            background-image: linear-gradient(-225deg,
                    #263238 0%,
                    #9C51FF 29%,
                    #F0AE4C 67%,
                    #fff800 100%);
            background-size: auto auto;
            background-clip: border-box;
            background-size: 200% auto;
            color: #fff;
            background-clip: text;
            text-fill-color: transparent;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: textclip 4s linear infinite;
            display: inline-block;
        }

        @keyframes textclip {
            to {
                background-position: 200% center;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        @include('landing-page.partials.navbar')

        @include('landing-page.partials.hero')
    </div>
    @include('landing-page.partials.contents')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>
@include('landing-page.partials.footer')

</html>
