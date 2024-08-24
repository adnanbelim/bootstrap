<div class="d-flex justify-content-center">
    <div class="p-2">
        <?php if (isset($_SESSION['user_data'])) { ?>
                <a href="#" class="btn btn-outline-success">
                    <?php echo $_SESSION['user_data']['name']; ?>
                </a>
        <?php } else { ?>
                <a href="#" class="btn btn-outline-success">
                    demo
                </a>
        <?php } ?>
    </div>
    <?php if (isset($_SESSION['user_data'])) { ?>
            <div class="p-2"><a href="../logout.php" class="btn btn-outline-primary">Logout</a></div>
    <?php } else { ?>
            <div class="p-2"><a href="../login.php" class="btn btn-outline-primary">Login</a></div>
    <?php } ?>
</div>