<?php require_once 'includes/header.inc.php' ?>

<div class="container">
    <h1>Register</h1>
    <form action="register_user.php" method="POST">
        <label for="first_name">Nombre</label>
        <input type="text" name="first_name" />

        <label for="last_name">Apellidos</label>
        <input type="text" name="last_name" />

        <label for="first_name">Email</label>
        <input type="text" name="first_name" />

        <label for="password">Password</label>
        <input name="password" type="password" />

        <button class="btn" type="submit">Register</button>
    </form>
</div>

<?php require_once 'includes/footer.inc.php' ?>
