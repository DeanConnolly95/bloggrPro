<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">
                <?php include "strings/str.blog.name.php"; ?>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-bars"></i>  Menu <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="index.php?action=archive">All Posts</a></li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <?php include "strings/str.blog.name.php"; ?> Github</a>
                        </li>
                        <li>
                            <a href="#">
                                <?php include "strings/str.blog.name.php"; ?> BitBucket</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-comments"></i> Social <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="#">Facebook</a>
                        </li>
                        <li>
                            <a href="#">Twitter</a>
                        </li>
                        <li>
                            <a href="#">Instagram</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">YouTube</a>
                        </li>
                        <li>
                            <a href="#">Spotify</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>