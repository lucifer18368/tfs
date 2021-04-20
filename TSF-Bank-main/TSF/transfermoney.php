<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="bootstrap4.css">
    <!-- <link rel="stylesheet" type="text/css" href="bootstrap.css"> -->
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style type="text/css">
        button {
            transition: 1.5s;
        }

        button:hover {
            background-color: #F9F80A;
            color: white;
        }
    </style>
</head>

<body>
    <?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    ?>

    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        
            
  <a class="navbar-brand" href="index.php" style="color: black; padding-left: 30px;">Home <i class="fas fa-hotel"></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" style="color: white;">
    <span class="navbar-toggler-icon" style="color: white;"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
     
      <li class="nav-item">
        <a class="nav-link" href="createuser.php" style="color: black; padding-left: 30px;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Create User <i class="fas fa-user-plus"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="transfermoney.php" style="color: black; padding-left: 30px;">Transfer Money <i class="fas fa-envelope-open-dollar"></i></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="transactionhistory.php" style="color: black; padding-left: 30px;">Transaction History <i class="far fa-landmark"></i></a>
      </li>
       
      
   </ul></div></nav>
    




<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CREATE USER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
    

<div class="container">
    <div class="row">
        <div class="col-lg-12 mb-6 sb-4">
            <div class="jumbotron" style="padding: 30px 5px 50px; background-color: #7FCDCD;">
<form method="post" action="transfermoney.php" class="abc">
     <input type="text" name="name" id="b" placeholder="NAME" style="border: none;border-bottom:1px solid black;background-color: #7FCDCD;" required="Please Fill Empty Not Accepted">  <br><br><br>
    <input type="text" name="email" id="a" placeholder="EMAIL" style="border: none;border-bottom:1px solid black;background-color: #7FCDCD;"><br><br><br>
    <input type="text" name="balance" id="c" placeholder="BALANCE" style="border: none;border-bottom:1px solid black;background-color: #7FCDCD;"> <br><br><br>
     
     <input type="submit" name="Submit">
        
     

  
</form>
</div>
</div>
</div>
</div>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
    <div class="container">
        <h2 class="text-center pt-4" style="color : black;">Transfer Money</h2>
        <br>
        <div class="row">
            <div class="col">
                <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border-color:black;">
                        <thead style="color : black;">
                            <tr>
                                <th scope="col" class="text-center py-2">Id</th>
                                <th scope="col" class="text-center py-2">Name</th>
                                <th scope="col" class="text-center py-2">E-Mail</th>
                                <th scope="col" class="text-center py-2">Balance</th>
                                <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($rows = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr style="color : black;">
                                    <td class="py-2"><?php echo $rows['id'] ?></td>
                                    <td class="py-2"><?php echo $rows['name'] ?></td>
                                    <td class="py-2"><?php echo $rows['email'] ?></td>
                                    <td class="py-2"><?php echo $rows['balance'] ?></td>
                                    <td><a href="selecteduserdetail.php?id= <?php echo $rows['id']; ?>"> <button type="button" class="btn" style="background-color : #A569BD;">Transfer</button></a></td>
                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>Faisal Budhwani</b><br>GRIP TheSparksFoundation.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>

</html>