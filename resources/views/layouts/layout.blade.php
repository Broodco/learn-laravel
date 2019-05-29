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
            text-align: left;
        }
        body {
            padding: 10px;
            background-color: ghostwhite;
        }
        body > .grid {
            height: 100%;
        }
        .ui.grid {
            margin-top : 20px;
        }
        .column {
            max-width: 800px;
        }
        li{
            list-style: none;
        }
        a{
            cursor: pointer !important;
        }
        a:hover{
            color: black;
        }
        h2{
            text-align: center;
            padding-bottom: 20px;
        }
        .isCompleted {
            text-decoration: line-through;
        }
    </style>
</head>

<body>
    <div class="ui fixed inverted menu">
        <a class="item" href="/">Home</a>
        <a class="item" href="/about">About</a>
        <a class="item" href="/contact">Contact</a>
        <a class="item" href="/projects">Projects</a>
    </div>
    <div class="ui aligned center aligned grid">
        <div class="column">
            <div>
                @yield('header')
            </div>
            <div>
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
