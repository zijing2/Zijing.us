	@extends('common.base')
	@section('content')
	<!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('http://zijing.us/wordpress/wp-content/uploads/2017/07/algo.jpg');"></div>
                <div class="carousel-caption">
                    <h2>AlgoLab</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://zijing.us/wordpress/wp-content/uploads/2017/07/forex-web-website-design.jpg');"></div>
                <div class="carousel-caption">
                    <h2>WebLab</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://zijing.us/wordpress/wp-content/uploads/2017/07/database-graphic-hi-res.jpg');"></div>
                <div class="carousel-caption">
                    <h2>DBLab</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to My labs
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-sort-alpha-asc"></i> Algorithm Lab</h4>
                    </div>
                    <div class="panel-body">
			<p>This is one of the most amazing part in computer science. If you ask me what's inside a computer scientist's brain, it is absolutely algorithm.</p>
                        <a href="labs/cs570" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-weibo"></i> Web Lab</h4>
                    </div>
                    <div class="panel-body">
			<p>The coolest and broadest part in computer science. I consider the internet as the greatest invention of the mordern world. </p>
                        <a href="labs/cs546" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-database"></i> Database Lab</h4>
                    </div>
                    <div class="panel-body">
			<p>The most precious and core part of any system. Without data, even the most powerful system is nothing.</p>
                        <a href="labs/cs561" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

	@include('common.portfolio')

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Books recommended</h2>
            </div>
            <div class="col-md-6">
                <p>《 Algorithms 》</p>
                <ul>
                    <li>Fourth Edition</li>
                    <li>Robert Sedgewick and Kevin Wayne</li>
                    <li>Princeton University</li>
                </ul>
		<p>This book includes almost all the basic algorithms. It is implemented by JAVA and easy to understand.</p>
            </div>
            <div class="col-md-6">
                <a href="http://algs4.cs.princeton.edu/home/"><img class="img-responsive" src="http://zijing.us/wordpress/wp-content/uploads/2017/07/book1.jpg" alt="" style="width:300px"></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
		<p>Pratice is always the best way to learn. </p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="labs/cs546">Get Started</a>
                </div>
            </div>
        </div>

        <hr>

	@include('common.footer')
    </div>
    <!-- /.container -->
	@endsection
