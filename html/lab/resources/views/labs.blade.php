@extends('common.base')
@section('content')
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">My Labs
                    <!-- <small>Subheading</small> -->
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">labs</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->


        <!-- Projects Row -->
        <div class="row">
        <?php foreach($project_group as $key => $value):?>
            <div class="col-md-4 img-portfolio">
                <a href="labs/<?=$value['name'] ?>">
                    <img class="img-responsive img-hover" src="<?=$value['image'] ?>" alt="">
                </a>
                <h3>
                    <a href="labs/<?=$value['name'] ?>"><?=$value['full_name'] ?></a>
                </h3>
                <p><?=$value['descr'] ?></p>
            </div>
        <?php endforeach;?>
	</div>
        <!-- /.row -->


        <!-- Projects Row -->
 <!--       <div class="row">
            <div class="col-md-4 img-portfolio">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="portfolio-item.html">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-4 img-portfolio">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="portfolio-item.html">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-4 img-portfolio">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="portfolio-item.html">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
        </div>
-->
        <!-- /.row -->

<!--        <hr>  -->

        <!-- Pagination -->
<!--        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
-->
        <!-- /.row -->

        <hr>

	@include('common.footer')
    </div>
    <!-- /.container -->
@endsection
