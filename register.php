<?php
    require('config/db.php');
    $sql = 'SELECT * FROM users';
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $users = $result->fetch_all(MYSQLI_ASSOC);
        $conn->close();
    }
?>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <title>ListApp</title>
</head>
<body>
<nav class="navbar container">
<a class="navbar-brand" href="#"><h1>ListApp</h1></a>
<ul class="nav">
    <li class="nav-item">
        <a class="nav-link active" href="#">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
    </li>
</ul>
</nav>
    <section class="container">
        <h2>User registration</h2>
        <div class="row">
            <div class="col-md-9">
                <form name="register_form" action="registerUser.php" method="post" onsubmit="return validateForm();">
                    <div class="form-group">    
                        <input class="form-control form-control-lg" type="text" name="email" placeholder="email">
                    </div>
                    <div class="form-group">    
                        <input class="form-control form-control-lg" type="text" name="first_name" placeholder="first name">
                    </div>
                    <div class="form-group">    
                        <input class="form-control form-control-lg" type="text" name="last_name" placeholder="last name">
                    </div>
                    <div class="form-group">    
                        <input class="form-control form-control-lg" type="password" name="password" placeholder="password">
                    </div>
                    <div class="form-group">    
                        <input class="form-control form-control-lg" type="password" name="password_again" placeholder="confirm password">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Send registration</button>
                </form>
            </div>
            <div class="col-md-3">
                <h2>Registered users</h2>
                <?php if(isset($users)): ?>
                    <ul class="list-unstyled">
                    <?php foreach($users as $user): ?>
                        <li>
                            <?php echo $user['first_name'] . " " . $user['last_name']; ?><br>
                            <small>Registered at <em><?php echo $user['register_date']; ?></em></small>
                            </li>
                    <?php endforeach; ?>
                    </ul>
                <?php else: ?>
                    <p>No registered users.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>
<script>   
function validateForm() {
    var x = document.forms["registerForm"];
    if (x["email"] == "") {
        alert("Name must be filled out");
        return false;
    }
}
</script>


</body>
