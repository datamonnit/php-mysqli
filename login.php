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
<a class="navbar-brand" href="index.php"><h1>ListApp</h1></a>
<ul class="nav">
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
                    <form id="needs-validation" name="register_form" action="loginUser.php" method="post" onsubmit="return validateForm(event);">
                        <div class="form-group">    
                            <input class="form-control form-control-lg" type="text" name="email" placeholder="email">
                            <small class="error-message" id="email-error"></small>
                        </div>
                        <div class="form-group">    
                            <input class="form-control form-control-lg" type="password" name="password" placeholder="password">
                            <small class="error-message" id="password-error"></small>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-lg">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
<script>

function validateForm(event) {
    
    var errors = [];
    var x = document.forms["register_form"];
    
    if (x["email"].value == "") {
        errors["email"] = "Valid email required";
    }
    if (x["password"].value.length < 4) {
        errors["password"] = "Min. 4 characters password required";
    }

    document.querySelector('.error-message').innerHTML = "";
    for (var key in errors){
        document.querySelector('#'+key+'-error').innerHTML = errors[key];
    }

    if (errors.length > 0) {
        event.preventDefault();
        return false;
    }

    return true;

}
</script>


</body>
