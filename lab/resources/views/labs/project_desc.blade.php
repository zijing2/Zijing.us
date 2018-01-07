@extends('common.base')
@section('content')
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?=$g['name'] ?>
                    <small><?=$g['full_name'] ?></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="../index.php">Home</a>
                    </li>
                    <li><a href="../labs">labs</a></li>
		    <li class="active"><?=$g['name'] ?></li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

	<?php foreach($project as $key=>$value):?>
        <!-- Project -->
        <div class="row">
            <div class="col-md-7">
                <a href="project/<?=$value['id'] ?>">
                    <img class="img-responsive img-hover" src="<?=$value['image'] ?>" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3><?=$value['name'] ?></h3>
                <h4><?=$value['sub_title'] ?></h4>
                <p><?=$value['descri'] ?></p>
		<a class="btn btn-primary" href="project/<?=$value['id'] ?>">View Project</i></a>
            </div>
        </div>
        <!-- /.row -->
	<hr>
	<?php endforeach;?>



       <!-- <hr>-->

        <!-- Pagination -->
        <!--<div class="row text-center">
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
        </div>-->
        <!-- /.row -->

	@include('common.footer')
    </div>
    <!-- /.container -->
@endsection
