<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">


	<link rel='stylesheet' href='{{ asset('css/styles.css') }}'>

	<title>
		Dev's BFF | @yield('title','')
	</title>
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">

      <a class="navbar-brand" href="/">Developer's Best Friend</a>

      <ul class="nav navbar-nav">
        <li><a href="/loremipsum">Dummy Text Generator</a></li>
        <li><a href="/makeusers">Test User Generator</a></li>
      </ul>


  </div><!--end container-fluid -->
</nav>

<div class="container-fluid">

    <div class="row">

        <div class="col-md-12">

            <h1>@yield('title','A Page')</h1>

            @yield('content')

	   </div><!-- end col -->

	</div> <!-- end row -->

<footer>
    @yield('footer','')
    <p>Developer's Best Friend &copy; 2014 Tamara Will, for <a href="http://dwa15.com" target="_blank">Dynamic Web Applications</a> at <a href="http://extension.harvard.edu" target="_blank">Harvard Extension School</a></p>
</footer>

</div> <!-- end container-fluid -->

<!-- JQuery Javascript -->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>
</html>