<!doctype html>
<html lang="en">
  <head>
  	<title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{asset('sidebar')}}/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="{{asset('sidebar')}}/css/style.css" type="text/css">
  </head>
  <body>

		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
				<div class="p-4">
		  		<h1></h1>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="/home"><span class="fa fa-home mr-3"></span> Home</a>
	          </li>
	          <li>
	              <a href="/friends"><span class="fa fa-user mr-3"></span> Friends </a>
	          </li>
	          <li>
              <a href="/groups"><span class="fa fa-briefcase mr-3"></span> Groups </a>
	          </li>
	        </ul>


	          </form>


	      </div>
    	</nav>
        @yield('content')

        <!-- Page Content  -->


    <script src="{{asset('sidebar')}}/js/jquery.min.js"></script>
    <script src="{{asset('sidebar')}}/js/popper.js"></script>
    <script src="{{asset('sidebar')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('sidebar')}}/js/main.js"></script>
  </body>
</html>
