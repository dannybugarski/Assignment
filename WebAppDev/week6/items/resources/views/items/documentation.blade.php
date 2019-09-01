@extends('layouts.master')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ STYLES ---------->


<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous">
        
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

  <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- NAVBAR-->
    <link href="navbar-top.css" rel="stylesheet">
  <script async="" src="https://negbar.ad-blocker.org/chrome/adblocker-chromeglobalinjectjs.js"></script></head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
  <a class="navbar-brand" href="#">Fakebook</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" <a href="{{url("/")}}"">Home</a> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href={{url("recent_post")}}>Recent Posts</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href={{url("recent_item")}}>Unique Users</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href={{url("documentation")}}>Documentation</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href={{url("Er_diagram")}}>Diagram</a>
      </li>
    </ul>
    <form class="form-inline mt-2 mt-md-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


@section('title')
  item list
@endsection
  
@section('content')
<h5>Documentation</h5>
<h4>Tasks Completed</h5>
<ul>
    <li>List of Posts</li>
    <li>Post details (i.e. summary, details, comments)</li>
    <li>Navbar/Ui</li>
    <li>Create post</li>
    <li>Update Post</li>
    <li>Delete Post</li>
    <li>Code commenting</li>
    <li>Indenting</li>
    <li>Code naming</li>
    <li>Unique user list</li>

</ul>

<h4>Tasks Incomplete/Unsatisfactory</h5>
<ul>
    <li>Comments (Not unique, can't add, delete or edit)</li>
    <li>ER Diagram</li>
    <li>Add Post and Delete post have simple UI</li>
    <li>Possibly some template inheritance and security issues</li>
    <li>Recent Posts/users is slightly unsatisfactory</li>

</ul>

<h4>Approches used</h5>
<ul>
<li>Generally, I just followed lecture notes/videos and recycled and built on work from previous weeks; I also sourced some help online where I could.</li>
<li>With some things, such as comments in general; I found it to be too difficult to implement, so instead I worked around what I could to produce comments on each post, though they are non-unique, cannot be created, deleted or edited.</li>
<li>I also was quite stuck on  the ER diagram, I gave it a shot but was unhappy with what I produced so I did not include it. I feel as though if I had more time in general to work on the assignment I would have been able to implement more, though I have been busy and didn't manage my time very well. Overall I'm satisfied with what I have produced, even though I know I could do a lot better.</li>
</ul>
@endsection