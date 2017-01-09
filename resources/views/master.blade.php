<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('dist/css/dashboard.css')}}" rel="stylesheet">
  </head>

  <body style="background-color:white">

    <!-- top navigation bar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Director System Dasboard</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">

        <!-- sidebar -->
        <div class="col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="{{ action('sidebar@home') }}">Home <span class="sr-only">(current)</span></a></li>
            <li><a href="{{ action('sidebar@companyAudit') }}">Company Audit</a></li>
            <li><a href="{{ action('sidebar@balanceSheet') }}">Balance Sheet</a></li>
            <li><a href="#"></a></li>
          </ul>

          <ul class="nav nav-sidebar">
            <li><a href="{{ action('sidebar@logOut') }}">Log Out</a></li>
          </ul>
        </div>

      </div>
    </div>

    <!-- content of dashboard placed here ! -->
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          @yield('content')
        </div>
      </div>
    </div>

  </body>
</html>
