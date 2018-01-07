	@extends('common.base')
	@section('content')
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?=$project['name'] ?>
                    <small><?=$project['sub_title'] ?></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="http://zijing.us/lab/index.php">Home</a>
                    </li>
			<li><a href="http://zijing.us/lab/labs">labs</a>
                    </li>
                    <li><a href="http://zijing.us/lab/labs/<?=$project['project_group'] ?>"><?=$project['project_group'] ?></a></li>
		<li class="active"><?=$project['name'] ?></li>

                </ol>
            </div>
        </div>
        <!-- /.row -->

	<div class="jumbotron">
				<h2>
					Deploying result:
				</h2>
				
				<?php foreach($exec as $key=>$value):?>
				<p><?=$value ?></p>
				<?php endforeach; ?>					
	
				<p>
					 <a class="btn btn-primary btn-large" href="">Redeploy</a>
				</p>
			</div>

        <!-- Portfolio Item Row -->
        <div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-9">
		<?=$project['detail'] ?>
		</div>
		<div class="col-md-2">
		</div>
        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Related Projects</h3>
            </div>

		<?php foreach($rp as $key => $value):?>
            <div class="col-sm-3 col-xs-6">
                <a href="http://zijing.us/lab/labs/project/<?=$value['id'] ?>">
                    <img class="img-responsive img-hover img-related" src="<?=$value['image'] ?>" alt="">
                </a>
            </div>
		<?php endforeach;?>


        </div>
        <!-- /.row -->

        <hr>

	@include('common.footer')
    </div>
    <!-- /.container -->
@endsection
