<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      @if(Auth::user())
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      @endif
      <a class="navbar-brand">Survey Kepuasan Pengguna Pusintek 2016</a>
    </div>

    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        @if(Auth::check())
          @if(Auth::user()->isAdmin)
          <li class="dropdown">
            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dashboard<span class="caret"></span></a>
            <ul class="dropdown-menu">
                  <li><a href="{{route('layanan')}}">Layanan</a></li>
                  <li><a href="{{route('users')}}">User</a></li>
                  <li><a href="{{route('daerah')}}">Daerah</a></li>
                </ul>
            <!--<li><a href="{{route('layanan')}}">Dashboard</a></li>-->
          </li>
          @endif
        @endif
        @if(Auth::user())
          @if(Auth::user()->isDone == 0)
            <li><a class="white" href="{{ route('surveys') }}">Surveys</a></li>
          @endif
          <li><a class="white" href="{{ route('logout') }}">Logout</a></li>
        @endif
      </ul>
    </div>
  </div><!-- /.container-fluid -->
</nav>