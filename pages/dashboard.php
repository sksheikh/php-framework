<?php pageInclude('include/header.php') ?>
    <div class="container">
        <h4>Dashboard</h4>
        <p>Name: <?php echo $_SESSION['user_name'] ?></p>
        <p>Email: <?php echo $_SESSION['user_email'] ?></p>

        <a href="/logout" class="btn btn-dark">Logout</a>
    </div>
<?php pageInclude('include/header.php') ?>

