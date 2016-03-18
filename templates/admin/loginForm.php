<?php include "templates/include/header.php" ?>

    <body>
        <?php include "templates/include/navbar.php"; ?>
            <!-- REQUIRED: TWO BR TAGS FOR PRESENTATION ON DESKTOPS !-->
            <br />
            <br />
            <div id="container" class="container">
                <div class="col-md-3">
                </div>

                <div class="col-md-6">
                    <div class="well">
                        <h1><?php include "strings/str.blog.name.php"; ?> Admin</h1>
                        <form action="admin.php?action=login" method="post">
                            <input type="hidden" name="login" value="true" />
                            <?php if ( isset( $results['errorMessage'] ) ) { ?>
                                <div class="errorMessage">
                                    <?php echo $results['errorMessage'] ?>
                                </div>
                                <?php } ?>

                                    <div class="form-group">
                                        <!-- USERNAME !-->
                                        <label class="control-label" for="username">Username</label>
                                        <input type="text" name="username" id="username" placeholder="Administrator Username" class="form-control" required autofocus maxlength="20">
                                        <br />

                                        <!-- PASSWORD !-->
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password" placeholder="Administrator Password" class="form-control" required maxlength="20" />
                                    </div>

                                    <div class="form-group">
                                        <input type="submit" name="login" value="Login" class="btn btn-primary btn-block" />
                                    </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-3"></div>
            </div>

            <?php include "templates/include/stickyfooter.php"; ?>
    </body>
    <?php include "templates/include/scripts.php"; ?>