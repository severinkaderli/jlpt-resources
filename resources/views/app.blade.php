<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Kanji Resources</title>
    <link rel="stylesheet" href="./bower_components/material-design-lite/material.min.css">
    <script src="./bower_components/material-design-lite/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <style>
        .page-content {

        }

        .kanji-card {
            height: auto;
            min-height: auto;
            width: 100%;
            font-weight: bold;
            cursor: pointer;
        }

        .kanji-card h2 {
            margin: 0 auto;
        }
    </style>
</head>
<body>
<!-- Simple header with scrollable tabs. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <!-- Title -->
            <span class="mdl-layout-title">JLPT Resources - @yield('jlpt-level')</span>
        </div>
        <!-- Tabs -->
        <div class="mdl-layout__tab-bar mdl-js-ripple-effect">
            <a href="#scroll-tab-1" class="mdl-layout__tab is-active">Kanji</a>
            <a href="#scroll-tab-2" class="mdl-layout__tab">Vocabulary</a>
            <a href="#scroll-tab-3" class="mdl-layout__tab">Grammar</a>
        </div>
    </header>
    <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">JLPT Resources - @yield('jlpt-level')</span>
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="{{url('n5')}}">JLPT N5</a>
            <a class="mdl-navigation__link" href="{{url('n4')}}">JLPT N4</a>
            <a class="mdl-navigation__link" href="{{url('n3')}}">JLPT N3</a>
            <a class="mdl-navigation__link" href="{{url('n2')}}">JLPT N2</a>
            <a class="mdl-navigation__link" href="{{url('n1')}}">JLPT N1</a>
        </nav>
    </div>
    <main class="mdl-layout__content">
        @yield('content')
    </main>
</div>
</body>
</html>