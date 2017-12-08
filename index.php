<?php
require('config/db.php');
$sql = 'SELECT * FROM lists';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $lists = $result->fetch_all(MYSQLI_ASSOC);
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
        <h2>Lists</h2>
        <div class="row">  
            <div class="col-sm-9">

<?php if (isset($lists)): ?>
    <?php foreach ($lists as $list):?>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $list['list_name']?></h2>
                            <p class="card-text">Created at <?php echo $list['create_date']; ?></p>
                            <a href="list.php?id=<?php echo $list['id']; ?>" class="btn btn-primary">Show list</a>
                        </div>
                    </div>   
    <?php endforeach; ?>
<?php else: ?>                
                <h3>No lists available</h3>
<?php endif; ?>                
            </div>
            <div class="col-sm-3">
                <h2>Add new list</h2>
                <form action="addList.php" method="post">
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="list_name" placeholder="List name">
                    </div>
                    <button type="submit" class="btn btn-primary">Create new list</button>
                </form>
            </div>
            
        </div>
    </section>
    

</body>
