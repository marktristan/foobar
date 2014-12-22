<div class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a data-pjax="#main" class="navbar-brand" href="{{{ url('/') }}}">Project Name</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Active Link</a></li>
        <li><a href="#">Another Link</a></li>
      </ul>
      <form class="navbar-form navbar-right" role="form" method="post" action="{{{ url('/') }}}">
        <div class="form-group">
          <input type="text" placeholder="Username" class="form-control" name="username">
        </div>
        <div class="form-group">
          <input type="password" placeholder="Password" class="form-control" name="password">
        </div>
        <button type="button" class="btn btn-primary">Sign in</button> <!-- Replace button to submit if it will use as login -->
        <a data-pjax="#main" class="btn btn-default" href="{{{ url('account/create') }}}">Register</a>
      </form>
    </div><!--/.navbar-collapse -->
  </div>
</div>