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
                <h1>Family</h1>
                <p class="lead">This page will hold the contact information for your family members.</p>
                <p>Bootstrap v5.1.3</p>
            </div>
        </div>

      <?php
//json file get contents starts here
$data_json = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/data.json');
//json file get contents ends here
$decoded_json = json_decode($data_json, false);


// table starts here
?>
<table id='example' class='table table-striped' style='width:50%; margin:0 auto;'>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>email</th>
                <th>Phone number</th>
                <th>Relationship status</th>
              <th>contact ID</th>
                
            </tr>
        </thead>
        <tbody>
          <?php if($decoded_json->relationshipStatus == "Family"){ ?>
            <tr>
                <td><?php echo $decoded_json->firstName; ?></td>
                <td><?php echo $decoded_json->lastName; ?></td>
                <td><?php echo $decoded_json->email; ?></td>
                <td><?php echo $decoded_json->phoneNumber; ?></td>
                <td><?php echo $decoded_json->relationshipStatus; ?></td>
              <td><?php echo $decoded_json->UID; ?></td>
              <td><a href='edit.php';>Edit</a></td>
              
            </tr>
          <?php } ?>
        </tbody>
        <tfoot>
            
        </tfoot>
    </table> 




?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
