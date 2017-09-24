<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-4" style="margin:10px 0 10px 0">
			<img src="images/logo.png">
		</div>
		<div class="col-sm-4" style="margin:50px 0 0 0">
			Phone:+1 959 603 6035 (585-Support)
		</div>
		<div class="col-sm-4" style="margin:50px 0 0 0">
			Location:8901 Marmora RoadGlasgow, DO4 89GR.
		</div>
	</div>
</div>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="{{ (isset($home)?'active':'')}}"><a href="{{ route('main_page')}}">HOME <span class="sr-only">(current)</span></a></li>
        <li class="{{ (isset($about_us)?'active':'')}}"><a href="{{ route('about_us') }}">ABOUT US</a></li>
        <li class="{{ (isset($product)?'active':'')}}"><a href="{{ route('products') }}">PRODUCTS</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">RECIPE CORNER <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
        <li class="{{ (isset($news_event)?'active':'')}}"><a href="{{ route('news_event')}}">NEWS & EVENT</a></li>
      	<li class="{{ (isset($contact_us)?'active':'')}}"><a href="{{ route('contact_us')}}">CONTACT US</a></li>
      </ul>
  
<!--       <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form> -->
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>