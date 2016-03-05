<?php include "templates/include/header.php" ?>

    <body>
        <?php include "inc/navbar.php"; ?>
            <div id="container" class="container">
                <div class="col-md-6">
                    <h1>All Posts</h1>
                    <?php if ( isset( $results['errorMessage'] ) ) { ?>
                        <div class="errorMessage">
                            <?php echo $results['errorMessage'] ?>
                        </div>
                        <?php } ?>

                            <?php if ( isset( $results['statusMessage'] ) ) { ?>
                                <div class="statusMessage">
                                    <?php echo $results['statusMessage'] ?>
                                </div>
                                <?php } ?>

                                    <table class="table table-striped table-hover ">
                                        <thead>
                                            <tr>
                                                <th>Publication Date</th>
                                                <th>Post Title</th>
                                                <th>Tags</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php foreach ( $results['articles'] as $article ) { ?>
                                                <tr onclick="location='admin.php?action=editArticle&amp;articleId=<?php echo $article->id?>'">
                                                    <td>
                                                        <?php echo date('j M Y', $article->publicationDate)?>
                                                    </td>

                                                    <td>
                                                        <?php echo $article->title?>
                                                    </td>

                                                    <td>
                                                        <?php echo htmlspecialchars( $article->summary )?>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                        </tbody>
                                    </table>
                </div>

                <div class="col-md-6">
                    <h1><?php echo $results['totalRows']?> article<?php echo ( $results['totalRows'] != 1 ) ? 's' : '' ?> in total.</h1>
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <p class="text-muted">
                        Place sticky footer content here.
                    </p>
                </div>
            </footer>
    </body>
    <?php include "templates/include/footer.php" ?>