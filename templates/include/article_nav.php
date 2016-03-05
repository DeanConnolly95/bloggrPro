<nav class="navbar navbar-success">
    <div class="container-fluid">
        
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php?action=archive">
                &lt; Back
            </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#">
                        <?php echo date('j F Y', $results['article']->publicationDate)?> - <b><?php echo htmlspecialchars( $results['article']->title )?></b>
                    </a>
                </li>
            </ul>
        </div>
        
    </div>
</nav>