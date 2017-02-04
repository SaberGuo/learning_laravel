<!DOCTYPE html>
<html>
    <head>
      <title>sample app</title>
      <link rel='stylesheet' href="/css/app.css">
    </head>
    <body>
        <header class="navbar navbar-fixed-top navbar-inverse">
            <div class="container">
                <div class="col-md-offset-1 col-md-10">
                   <a href="/" id="logo"> sample app</a>
                   <nav>
                       <ul class="nav navbar-nav navbar-right">
                           <li><a href="/help">help</a></li>
                           <li><a href="/about">about</a></li>
                       </ul>
                   </nav>
                </div>
            </div>
        </header>
        <div class="container">
          @include('shared.messages')
        @yield('content')
        </div>
    </body>
</html>
