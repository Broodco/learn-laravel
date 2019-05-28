<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
    <title>@yield('title')</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }
        body {
            padding: 10px;
        }
        .links{
            display:flex;
            flex-direction: row;
            justify-content: space-around;
        }
        li{
            list-style: none;
        }
        .header {
            display:flex;
            flex-direction: row;
            justify-content: space-around;
            text-align: center;
        }
        a{
            cursor: pointer !important;
        }
        a:hover{
            color: black;
        }
        h1 {
            padding : 10px;
            padding-bottom: 20px;
        }
    </style>
</head>

<body>
    <ul class="links">
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/projects">Projects</a></li>
    </ul>
    <div class="header">
        @yield('header')
    </div>
    <div class="content">
        @yield('content')
    </div>
</body>

</html>
