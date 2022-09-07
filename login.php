<?php include 'header.php'; ?>
<link rel="stylesheet" type="text/css" href="css/login.css">

<body>
    <form class="box" action="process-admin.php" method="post">
        <h2 class="center">Login</h2>
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Log In">
    </form>
</body>
