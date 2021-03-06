<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
  </head>

  <body>
    @if($flash = session('message'))
      <div id="flash-message" class="alert alert-success alert-dismissible fade show" role="alert">
        {{$flash}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif

    <div class="container">
      @include('layout.header')
      @include('layout.nav')
      @include('layout.jumbotron')
    </div>
    <main role="main" class="container">
      <div class="row">
        @yield('content')

        @include('layout.sidebar')

      </div><!-- /.row -->

    </main><!-- /.container -->

   @include('layout.footer')

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('js/app.js')}}"></script>
  
  </body>
</html>
