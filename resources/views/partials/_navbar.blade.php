
<div class="navigation-bar">
  <div class="head-cover">
    <img class="logo" src="/images/t_hub_logo.png">
    <div class="logo-text">The<br>Learning<br>Hub</div>
  </div>
  <div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Brand</a>
        <ul class="nav  navbar-nav">
          <li><a class="active" href="/"><span class="fa fa-home"></span> Home</a></li>
        </ul>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav  navbar-nav navbar-left">
          <li><a href="/forum"><span class="fa fa-pencil-square-o"></span> Forum</a></li>
          <li><a href="/resources"><span class="fa fa-download"></span> Resources</a></li>
          <li><a href="/store"><span class="fa fa-shopping-cart"></span> Shop</a></li>
          <li><a href="{{route('question.create')}}"><span class="fa fa-quora"></span> Q/A</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a>
            <span class="fa fa-search"></span></a>
          </li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="/#"><span class="fa fa-bell  m-t-10 "  style="padding-bottom:7px"></span></a>
            <ul class="dropdown-menu notifications" role="menu">
              <div class="notification-heading p-l-5"><h4 class="menu-title">Notifications</h4><h4 class="menu-title pull-right">View all<i class="glyphicon glyphicon-circle-arrow-right"></i></h4>
              </div>
              <li class="divider"></li>
              <div class="notifications-wrapper">
                <a class="content p-l-5" href="#">
                  <div class="notification-item">
                    <h4 class="item-title">Evaluation Deadline 1 · day ago</h4>
                    <p class="item-info">Marketing 101, Video Assignment</p>
                  </div>
                </a>
                <li class="divider"></li>
                <a class="content p-l-5" href="#">
                  <div class="notification-item">
                    <h4 class="item-title">Evaluation Deadline 1 · day ago</h4>
                    <p class="item-info">Marketing 101, Video Assignment</p>
                  </div>
                </a>
              </div>
            </ul>
          </li>
          @if (!Auth::check())
          <li><a href="{{route('login')}}"><span class="fa fa-user-circle"></span></a></li>
          @endif
          @if (Auth::check())
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="/#"><img class="nav-profile" src="{{asset('images/vk.jpg')}}"><span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/profile"><span class="fa fa-user-o p-t-5 p-r-10"></span>Profile</a></li>
              <li><a href="{{route('posts.index')}}"><span class="fa fa-file-text-o p-t-5 p-r-10"></span>My posts</a></li>
              <li><a href="/profile"><span class="fa fa-gear p-t-5 p-r-10"></span>Settings</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span class="fa fa-sign-out p-t-5 p-r-10"></span>Logout</a></li>
              <form id="logout-form" action="{{route('logout')}}" method="post" style="display:none;">
                {{csrf_field() }}
              </form>
            </ul>
          </li>
          @endif
        </ul>
      </div>
    </div>
  </div>
</div>
