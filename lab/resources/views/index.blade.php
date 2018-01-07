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
                <h3><i>Algorithms</i></h3>
                <ul>
                    <li>FOURTH Edition</li>
                    <li>Robert Sedgewick| Kevin Wayne</li>
                    <li>Princeton University</li>
                </ul>
				<p>This book is intended to survey the most important computer algorithms in use today, and to teach fundamental techniques to the growing number of people in need of knowing them. It is intended for use as a textbook for a second course in computer science, after students have acquired basic programming skills and familiarity with computer systems. The book also may be useful for self-study or as a reference for people engaged in the development of computer systems or applications programs, since it contains implemen- tations of useful algorithms and detailed information on performance characteristics and clients. The broad perspective taken makes the book an appropriate introduction to the field.</p>
            </div>
            <div class="col-md-6">
                <a href="http://algs4.cs.princeton.edu/home/"><img class="img-responsive" src="http://zijing.us/wordpress/wp-content/uploads/2018/01/book_algorithm.jpg" alt="" style="width:200px; margin:50px"></a>
            </div>
            <div class="col-md-6">
                <h3><i>DATABASE SYSTEM CONCEPTS</i></h3>
                <ul>
                    <li>FIFTH Edition</li>
                    <li>Abraham Silberschatz| Henry F.Korth| S.Sudarhan</li>
                    <li>Published by McGraw-Hill</li>
                </ul>
				<p>Database management has evolved from a specialized computer application to a central component of a modern computing environment, and, as a result, knowl- edge about database systems has become an essential part of an education in com- puter science. In this text, we present the fundamental concepts of database manage- ment. These concepts include aspects of database design, database languages, and database-system implementation.</p>
            </div>
            <div class="col-md-6">
                <a href="https://www.amazon.com/Database-System-Concepts-Abraham-Silberschatz/dp/0072958863/ref=sr_1_3?ie=UTF8&qid=1515354821&sr=8-3&keywords=database+concepts+5th+edition"><img class="img-responsive" src="http://zijing.us/wordpress/wp-content/uploads/2018/01/book_dbms.jpg" alt="" style="width:200px; margin:50px; "></a>
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
