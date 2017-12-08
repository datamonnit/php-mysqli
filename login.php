<?php
    require('config/db.php');
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
        <h2>Login</h2>
            <div class="row">
                <div class="col-md-12">
                    <form name="register_form" action="loginUser.php" method="post" onsubmit="return validateForm();">
                        <div class="form-group">    
                            <input class="form-control form-control-lg" type="text" name="email" placeholder="email">
                        </div>
                        <div class="form-group">    
                            <input class="form-control form-control-lg" type="password" name="password" placeholder="password">
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
<script>   
function validateForm() {
    var x = document.forms["register_form"];
    if (x["email"].value == "") {
        alert("Name must be filled out");
        return false;
    }
    event.preventDefault();
}
</script>


</body>
