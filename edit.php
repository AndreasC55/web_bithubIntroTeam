



<?php include $_SERVER['DOCUMENT_ROOT'].'/functions.php';?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?php echo $siteName ?></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/style.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/index.php">Home</a>
                          

<?php echo $navigation ?>


                          
                         
                        <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page content-->
        <div class="container">
            <div class="text-center mt-5">
                <h1>A Bootstrap 5 Starter Template</h1>
                <p class="lead">Edit your information here</p>
                <p>made with Bootstrap v5.1.3</p>
            </div>
        </div>
<center>
<form method="post" action="editredirect.php">
    <label>First Name: <input type="text" name="firstName" value="<?php echo isset($data['firstName']) ? $data['firstName'] : ''; ?>"></label><br>
    <label>Last Name: <input type="text" name="lastName" value="<?php echo isset($data['lastName']) ? $data['lastName'] : ''; ?>"></label><br>
    <label>Email: <input type="email" name="email" value="<?php echo isset($data['email']) ? $data['email'] : ''; ?>"></label><br>
    <label>Phone Number: <input type="tel" name="phoneNumber" value="<?php echo isset($data['phoneNumber']) ? $data['phoneNumber'] : ''; ?>"></label><br>
    <label>Relationship Status: <input type="text" name="relationshipStatus" value="<?php echo isset($data['relationshipStatus']) ? $data['relationshipStatus'] : ''; ?>"></label><br>
    
    
    <input type="submit" value="Save">
</form>
</center>
<center> <p> Note: for the form to accept your edit, the first letter of your relationship status should be capitalized. (example: Family)</p> 
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>























