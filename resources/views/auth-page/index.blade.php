<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }} | InLivre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@200;300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #263238;
            font-family: 'Sora', sans-serif;
        }

        .card {
            background-color: #263238;
            height: 537px;
        }

        .inputgroup input {
            background-color: #263238;
            border-color: #FFF9EA;
            border-width: 10%;
            height: 60px;
            color: #FFF9EA;
            font-weight: 200;

        }

        .inputgroup input:focus {
            background-color: #263238;
            border-color: #FFF9EA;
            border-width: 10%;
            height: 60px;
            color: #FFF9EA;
            font-weight: 200;
        }

        .inputgroup input::placeholder {
            color: #FFF9EA;
        }

        .buttonlogin {
            width: 130px;
            height: 41px;
            background-color: #D9D9D9;
            color: #263238;
            font-weight: bold;
        }

        .buttonlogin:hover {
            background-color: #263238;
            color: #D9D9D9;
            border-color: #D9D9D9;
        }

        .fontregular {
            font-weight: 400;
        }

        .fontlight {
            font-weight: 300;
        }

        .fontbold {
            font-weight: bold;
        }

        .fontwhite {
            color: #FFF9EA;
        }

        .input-group {
            width: 80% !important;
        }

        .inputgroup-reg .inputreg {
            background-color: #263238;
            border-color: #FFF9EA;
            border-width: 10%;
            height: 40px;
            width: 270px;
            color: #FFF9EA;
            font-weight: 200;

        }

        .inputgroup-reg .inputreg:focus {
            background-color: #263238;
            border-color: #FFF9EA;
            border-width: 10%;
            height: 60px;
            color: #FFF9EA;
            font-weight: 200;
        }

        .inputgroup-reg .inputreg::placeholder {
            color: #FFF9EA;
        }

        .inputgroup-reg textarea {
            height: 220px !important;
        }

        .login-func {
            width: 80% !important;
        }

        .registertext {
            margin-left: 60px !important;
        }
    </style>
</head>

<body>
    @yield('authcontents')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
