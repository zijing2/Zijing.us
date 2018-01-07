<!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">My Portfolio</h2>
            </div>
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
