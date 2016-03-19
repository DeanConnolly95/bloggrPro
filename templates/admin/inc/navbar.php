<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                <?php include "strings/str.blog.name.php"; ?>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="admin.php?action=newArticle"><i class="fa fa-plus"></i> New Post</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Hi there, <?php echo htmlspecialchars( $_SESSION['username']) ?>.</a></li>
                <li><a href="admin.php?action=logout"><i class="fa fa-power-off"></i> Log out</a></li>
            </ul>
        </div>
    </div>
</nav>