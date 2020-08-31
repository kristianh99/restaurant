<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <?php include '../login/header.php'?>

</head>
<body>
<!--############################################################################ -->




<div class="modal fade" id="useraddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add User Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="insertcode.php" method="post">
                    <div class="form-group">
                        <label >Korisničko Ime</label>
                        <input type="text" name="username" class="form-control" placeholder="Unesite Korisničko Ime">

                    </div>
                    <div class="form-group">
                        <label >Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Unesite Email" >
                    </div>
                    <div class="form-group">
                        <label >Lozinka</label>
                        <input type="password" name="password" class="form-control" placeholder="Unesite Lozinku" >
                    </div>
                    <button type="submit" class="btn btn-primary">Dodaj</button>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Izađi</button>
                <button type="submit" class="btn btn-primary" name="insertdata">Zadrži promene</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!--############################################################################ -->
<div class="container">
    <div class="jumbotron">
        <div class="card">
            <h2>Admin</h2>
        </div>
        <div class="card">
            <div class="card-body">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#useraddModal">
                    ADD DATA
                </button>
            </div>
            <div class="card">
                <div class="card-body">
                    <?php
                    $connection = mysqli_connect('localhost','root', '', 'restaurant', '3307');
                    $query = "SELECT * FROM users";
                    $query_run = mysqli_query($connection,$query);

                    ?>
                    <table class="table table-bordered table-dark">
                        <thead>
                        <tr>
                            <th scope="col">ID_user</th>
                            <th scope="col">username</th>
                            <th scope="col">email</th>
                            <th scope="col">password</th>
                            <th scope="col">DELETE</th>
                        </tr>
                        </thead>
                        <?php
                        if($query_run){
                            foreach($query_run as $row){


                        ?>
                        <tbody>
                        <tr>
                            <td><?php echo $row['ID_user'];?></td>
                            <td><?php echo $row['username'];?></td>
                            <td><?php echo $row['email'];?></td>
                            <td><?php echo $row['password'];?></td>
                            <td><button type="button" class="btn btn-danger">DELETE</button></td>
                        </tr>
                        </tbody>
                        <?php
                            }
                        }
                        else{
                            echo "No Record Found";
                        }?>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
</body>
</html>