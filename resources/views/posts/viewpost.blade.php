@extends('/layouts/main')
@section('title','|post')
@section('content')
<div class="viewpost container">
  <!-- //page-header begins here -->
  <div class="page-header text-center">
    <h1>{{ $post->title }}</h1>
    <div class="row">
      <div class="header-profile-img hidden-xs col-sm-1 col-md-1">
        <img src="{{asset('images/profile.jpg')}}" alt="profile-pic">
      </div>
      <div class="header-profile-name col-sm-1 col-md-1">
        <h4>{{ $post->user }}</h4>
      </div>
      <div class="header-tags m-t-10 col-xs-offset-4 col-sm-offset-5 col-md-offset-6 col-xs-6 col-sm-5 col-md-4">
        <span class="posted" style="position:relative;right:-40 px">Posted-on: {{date('M j,Y h:ia',strtotime($post->created_at))}}</span>
        <span class="fa fa-eye" style="float:right;">  4k</span>
      </div>
    </div>
  </div>
  <!-- //page-header ends -->


  <!-- //post body begins/ -->
  <div class="panel panel-default">
  <div class="panel-body">
    <h5>{!! $post->body !!}</h5>
  </div>
</div>
<!-- //post body ends -->
</div>
<!-- //post ends -->

<!-- //suggested posts here -->
<div class="viewcards container">
  <div class="card-deck">
    <h3 class="text-center">Suggesed posts</h3>
    <div class="row">
      <div class="col-sm-3 col-sm-offset-1">
        <div class="card text-center" >
          <div class="card-header">
            <small class="text-muted">created by:Ayush Varshney</small>
          </div>
          <img class="card-img-top" src="/images/r3.png" alt="">
          <div class="card-block">
            <h4 class="card-title">DIY create a blog</h4>
            <p>here we will teach you how to make your own blog</p>
            <a href="#" class="btn btn-primary">Read more...</a>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
        <div class="header-profile-name col-sm-1 col-md-1">
          <h4>{{ $post->user->name}}</h4>
        </div>
        <div class="header-tags m-t-10 col-xs-offset-4 col-sm-offset-5 col-md-offset-6 col-xs-6 col-sm-5 col-md-4">
          <span class="posted" style="position:relative;right:-40 px">Posted-on: {{date('M j,Y h:ia',strtotime($post->created_at))}}</span>
          <span class="fa fa-eye" style="float:right;">{{$post->views}}</span>
        </div>
      </div>
    </div>
    <!-- //page-header ends -->
    <label name="tags">tags:</label>
    <span class="label label-default">Tag</span>
    <!-- //post body begins/ -->
    <div class="panel panel-default">
      <div class="row">
        <div class="panel-body col-md-8"> <!--post body-->
          <img src="/images/a.jpg" width="50%" alt="">
          <h5>{!! $post->body !!}</h5>
        </div>  <!--post body ends here-->
        <div class="col-md-4">
          <h1>Sidewell</h1>
        </div>
      </div>
    </div>
    <!-- //post body ends -->
  </div>
  <!-- //post ends -->

  <!-- //comments section starts here -->
  <div class="comments container m-t-20">
    <h2 style="display:block">Comments<span class="fa fa-pencil" style="float:right;padding-top:8px">{{$comments->count()}}</span></h2>
    <form action="{{route('comments.store',$post->id)}}" method="post">
      {{ csrf_field() }}
      <textarea name="comment" rows="4" cols="100%" placeholder="your comment goes here....."></textarea>
      <br/>
      <input type="submit" class="btn btn-success m-t-10" name="Comment" value="Comment"></input>
    </form>
    @foreach ($comments as $comment)
      <div class="media">
        <div class="media-left">
          <a href="#">
            <img src="/images/profile.jpg" style="width:56px"alt="">
          </a>
        </div>
        <div class="media-body">
          <h4 class="media-heading">{{$comment->user->name}}</h4>
          <p>{{$comment->comment}}</p>
        </div>
      </div>
    @endforeach
  </div>
  <!-- //comments section ends here -->
@endsection