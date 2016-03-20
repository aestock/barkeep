<!DOCTYPE html>
<html>
  <head>
    <title>barkeep</title>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/css/materialize.css"  media="screen,projection"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

    <link type="text/css" rel="stylesheet" href="css/swing/card-stack.css" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>
    <script type="text/javascript" src="/js/swing/card.js"></script>

    <nav>
      <div class="nav-wrapper">
        <!-- <ul id="nav-mobile" class="left">
          <li><i class="large material-icons">perm_identity</i></li>
        </ul> -->
        <a href="#" class="brand-logo"><img src="/img/logo_wordmark.png" alt="barkeep" height="20" /></a>
        <!-- <ul id="nav-mobile" class="right">
          <li><i class="large material-icons">search</i></li>
        </ul> -->
      </div>
    </nav>

    @yield('content')

</body>
