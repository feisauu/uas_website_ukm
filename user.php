<?php
include('koneksi.php');
include('navbar.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data User</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Password</th> 
                                    <th>Action</th> 
                                    </tr>
                                    </thead>
                                    <tbody>
            <?php
            $conn = connectToDatabase();
                $sql = "SELECT * FROM user ORDER BY id_user ASC";
                $result = $conn->query($sql);

                if (!$result) {
                    die("Query Error : ".mysqli_errno($conn)." - ".mysqli_error($conn));
                }
                $no = 1;

                while ($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>                
                <td><?php echo $row['id_user']; ?> </td>
                <td><?php echo $row['username']; ?> </td>
                <td><?php echo $row['email']; ?> </td>
                <td><?php echo $row['password']; ?> </td>
                <td><form action="koneksi.php" method="POST">
                <button type="submit" name="deleteUser" value="<?= $row['id_user'] ?>" class="btn btn-danger">Delete</button>
             </form></td>
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
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>