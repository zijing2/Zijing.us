<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Zijing's Lab</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li @if($cur=="index") class="active" @endif>
                        <a href="http://zijing.us/lab/index.php">Home</a>
                    </li>
                    <li @if($cur=="labs") class="active" @endif>
                        <a href="http://zijing.us/lab/labs">Labs</a>
                    </li>
                    <li>
                        <a href="http://blog.zijing.us">Blog</a>
                    </li>
                    <li @if($cur=="contact") class="active" @endif>
                        <a href="http://zijing.us/lab/contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
