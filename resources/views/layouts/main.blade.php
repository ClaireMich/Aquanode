<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Bootstrap -->
        {!!Html::style('css/app.css')!!}

        
    </head>
    <body>
        <nav class="navbar navbar-default" id='navbar'>
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Brand</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#">Nav Element <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Nav Element</a></li>
                <li><a href="#">Nav Element</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        <div id="wrap">
            <div class="container">
                @yield('content')
            </div>
            <div id="push"></div>
        </div>

        <div id="footer">
          <div class="container">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#">Nav Element <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Nav Element</a></li>
                <li><a href="#">Nav Element</a></li>
            </ul>
          </div>
        </div>
            <!-- jQuery -->
    {!!Html::script('js/jquery.min.js')!!}
    <!-- Bootstrap -->
    {!!Html::script('js/app.js')!!}
    <!-- Core Init -->
    {!!Html::script('js/app/core.js')!!}

    <!-- Noty -->
    {!!Html::script('js/noty/packaged/jquery.noty.packaged.min.js')!!}
    <script type="text/javascript">
      var baseUrl   = "{{ url('') }}";
      var apiUrl    = "{{ url('api') }}";
      var csrfToken = "{{ csrf_token() }}";

      $.ajaxSetup({
        headers: {'X-CSRF-TOKEN': csrfToken}
      });
      $(document).ready(function(){
          Core.init(true);  
          //Dropzone.options.mydropform = false;
          

      });
 

    </script>
    </body>
</html>
