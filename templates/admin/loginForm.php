<?php include "templates/include/header.php" ?>
<body>
        <h1>Admin Login</h1>
        <div id="container" class="container">
         <div class="col-md-6">
             <h3>Administrator's Area</h3>
             <p>
                 Hi There! This area is for website administrators to log in. If you're an administrator, simply type in your username and password to the                      right. If you're not an administrator, it's probably best to <a href="index.php">click here</a> so we can take you back to the homepage. :)
             </p>
        </div>

        <div class="col-md-6">
            <form action="admin.php?action=login" method="post" style="width: 50%;">
                <input type="hidden" name="login" value="true" />
                <?php if ( isset( $results['errorMessage'] ) ) { ?>
                <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
                <?php } ?>
            
                <div class="form-group">
                    <!-- USERNAME !-->
                    <label class="control-label" for="username">Username</label>
                    <input type="text" name="username" id="username" placeholder="Administrator Username" class="form-control" required autofocus                                 maxlength="20">
                    <br />
                
                    <!-- PASSWORD !-->
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Administrator Password" class="form-control" required maxlength="20" />
                </div>
            
                <div class="form-group">
                    <input type="submit" name="login" value="Login" class="btn btn-primary"/>
                    Secured by NSTechnologies
                </div>
            </form>
        </div>
    </div>
    
    <footer class="footer">
        <div class="container">
            <p class="text-muted">Place sticky footer content here.</p>
        </div>
    </footer>
</body>
