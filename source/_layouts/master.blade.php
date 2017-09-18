<!DOCTYPE HTML>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CSUN Web Services by META+LAB</title>
    <link rel="icon" href="//www.csun.edu/sites/default/themes/csun/favicon.ico" type="image/x-icon">
    <meta name="description" content="Web Services that delivers public information about CSUN Campus">
    <script src="//use.typekit.net/gfb2mjm.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic">
    <link rel="stylesheet" href="//cdn.metalab.csun.edu/metaphor/css/metaphor.css">
  </head>
  <body>
    @include('_partials.site-header')
    <div class="main main--metalab">
        @yield('body')
    </div>
    @include('_partials.csun-footer')
    @include('_partials.metalab-footer')
    <script src="//cdn.metalab.csun.edu/metaphor/js/metaphor.js"></script>
  </body>
</html>