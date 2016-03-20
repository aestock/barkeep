<!DOCTYPE html>
<html>
  <head>
    <title>barkeep</title>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="/css/materialize.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="/css/tinder.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
    <script src="/js/tinder.js" /></script>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>
    <nav>
      <div class="nav-wrapper">
        <a href="#" class="brand-logo"><img src="/img/logo_wordmark.png" alt="barkeep" height="20" /></a>
      </div>
    </nav>

    <div class="content-wrap">
      @yield('content')
    </div>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-75331176-1', 'auto');
      ga('send', 'pageview');

    </script>

</body>
