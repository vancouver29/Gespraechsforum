</div>
</div>
</div>
<div class="col-md-4">
    <div class="sidebar">
        <div class="d-block">
            <h3>Login Form</h3>

            <?php if (isLoggedIn()): ?>
                <div class="userdata">Welcome <?php echo getUser()['username']; ?></div><br>
                <form role="form" method="post" action="logout.php">
                    <button type="submit" name="do_logout" class="btn btn-primary">Logout</button>
                </form>
            <?php else: ?>

                <form role="form" method="post" action="login.php">
                    <div class="form-group">
                        <label>Email address</label>
                        <input name="username" type="text" class="form-control" placeholder="Enter Username">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your ID with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input name="password" type="password" class="form-control" placeholder="Enter password">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button name="do_login" type="submit" class="btn btn-primary">Login</button>
                    <a class="btn btn-secondary" href="register.php">Create Account</a>
                </form>

            <?php endif; ?>
        </div>
        <div class="d-block">
            <h3>Categories</h3>
            <div class="list-group">
                <a href="topics.php" class="list-group-item" <?php echo is_active(null); ?>>All Topics<span
                            class="badge float-right">14</span></a>
                <?php foreach (getCategories() as $category): ?>
                    <a href="topics.php?category=<?php echo $category->id; ?>"
                       class="list-group-item " <?php echo is_active($category->id); ?>><?php echo $category->name; ?> </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
</div>

</main><!-- /.container -->

<footer id="sticky-footer" class="py-4 bg-dark text-white-50 ">
    <div class="container text-center">
        <small>Copyright &copy; 2020 TalkingRoom-Vancouver299</small>
    </div>
</footer>


</body>
</html>
