<?php include "templates/include/header.php" ?>

    <body>
        <?php include "inc/navbar.php"; ?>
            <div id="container" class="container">
                <div class="well">
                    <h1>All Posts</h1>
                    <?php if ( isset( $results['errorMessage'] ) ) { ?>
                        <div class="errorMessage">
                            <?php echo $results['errorMessage'] ?>
                        </div>
                        <?php } ?>

                            <?php if ( isset( $results['statusMessage'] ) ) { ?>
                                <div class="alert alert-dismissible alert-info">
                                    <button type="button" class="close" data-dismiss="alert">X</button>
                                    <?php echo $results['statusMessage'] ?>
                                </div>
                                <?php } ?>

                                    <table class="table table-striped table-hover ">
                                        <thead>
                                            <tr>
                                                <th>Publication Date</th>
                                                <th>Title</th>
                                                <th>Summary</th>
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
            </div>
            <?php include "templates/include/stickyfooter.php"; ?>
    </body>
    <?php include "templates/include/scripts.php"; ?>