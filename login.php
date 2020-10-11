<?php require_once 'includes/header.inc.php' ?>

<div class="container">
    <h1>Login</h1>
    <form action="login_user.php" method="POST">
        <label for="email">Email</label>
        <input type="email" name="email" />

        <label for="password">Password</label>
        <input name="password" type="password" />

        <button class="btn" type="submit">Login</button>
    </form>
</div>

<?php require_once 'includes/footer.inc.php' ?>
