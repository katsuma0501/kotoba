<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title') | {{ env('APP_NAME') }}</title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <style type="text/css">
  body { padding-top: 80px; }
  .bd-footer{
    padding: 4rem 0;
    margin-top: 4rem;
    font-size: 85%;
    text-align: center;
    background-color: #f7f7f7;
  }
  .bd-footer a {
    font-weight: 500;
    color: #464a4c;
  }
  .bd-footer-links li {
    display: inline-block;
    list-style-type: none;
  }
  @media ( min-width: 768px ) {
    #banner {
      min-height: 300px;
      border-bottom: none;
    }
    .bs-docs-section {
      margin-top: 8em;
    }
    .bs-component {
      position: relative;
    }
    .bs-component .modal {
      position: relative;
      top: auto;
      right: auto;
      left: auto;
      bottom: auto;
      z-index: 1;
      display: block;
    }
    .bs-component .modal-dialog {
      width: 90%;
    }
    .bs-component .popover {
      position: relative;
      display: inline-block;
      width: 220px;
      margin: 20px;
    }
    .nav-tabs {
      margin-bottom: 15px;
    }
    .progress {
      margin-bottom: 10px;
    }
    .bd-footer {
      text-align: left;
    }
  }
  </style>

  <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body>

<header>
<nav class="navbar navbar-light bg-faded navbar-fixed-top">
  <div class="container">
    <a href="/" class="navbar-brand">{{ env('APP_NAME') }}</a>
    <button class="navbar-toggler hidden-sm-up float-xs-right" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header" aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="clearfix hidden-sm-up"></div> <!-- fix navbar responsive bug -->
    <div class="collapse navbar-toggleable-xs" id="navbar-header">
      <ul class="nav navbar-nav">
        <li class="nav-item">
          <a href="/" class="nav-link">Top</a>
        </li>
        <li class="nav-item active">
          <a href="./bootstrap.html" class="nav-link">Demo</a>
        </li>
        <li class="nav-item"><a href="//github.com/windyakin/Honoka/releases" class="nav-link">Download</a></li>
<li class="nav-item"><a href="//github.com/windyakin/Honoka/wiki" class="nav-link">Wiki</a></li>
      </ul>
    </div>
  </div>
</nav>
</header>

<div class="container">
    
    @yield('content')

</div>

<footer class="bd-footer text-muted">
  <div class="container">
    <ul class="bd-footer-links pl-0">
      <li class="mr-1"><a href="https://github.com/twbs/bootstrap">GitHub</a></li>
      <li class="mr-1"><a href="https://twitter.com/getbootstrap">Twitter</a></li>
      <li class="mr-1"><a href="/examples/">Examples</a></li>
      <li class="mr-1"><a href="/about/history/">About</a></li>
    </ul>
    <p>Designed and built with all the love in the world by <a href="https://twitter.com/mdo" target="_blank">@mdo</a> and <a href="https://twitter.com/fat" target="_blank">@fat</a>. Maintained by the <a href="https://github.com/orgs/twbs/people">core team</a> with the help of <a href="https://github.com/twbs/bootstrap/graphs/contributors">our contributors</a>.</p>
    <p>Currently v4.0.0-alpha.6. Code licensed <a rel="license" href="https://github.com/twbs/bootstrap/blob/master/LICENSE" target="_blank">MIT</a>, docs <a rel="license" href="https://creativecommons.org/licenses/by/3.0/" target="_blank">CC BY 3.0</a>.</p>
  </div>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">
  $('.bs-component [data-toggle="popover"]').popover();
  $('.bs-component [data-toggle="tooltip"]').tooltip();

  $('#anti-yu-gothic-button').on('click', function() {
    if ( $('body').hasClass('no-thank-yu') ) {
      $('body').removeClass('no-thank-yu');
      $(this).text('游ゴシックを無効にする').removeClass('btn-primary').addClass('btn-danger');
      $("#anti-yu-gothic-message").html('現在デモページは游ゴシックの指定が<span class="text-primary">有効</span>になっています。');
    }
    else {
      $('body').addClass('no-thank-yu');
      $(this).text('游ゴシックを有効にする').removeClass('btn-danger').addClass('btn-primary');
      $("#anti-yu-gothic-message").html('現在デモページは游ゴシックの指定が<span class="text-danger">無効</span>になっています。');
    }
  });
</script>

</body>
</html>