<?php
include 'connect.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud_Display</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <button type="submit" class="btn btn-primary"><a href="user.php" class="text-light"
                style="text-decoration:none">Add user</a></button>
        <table class="table table-info my-3">
            <thead>
                <tr>
                    <th scope="col">Sl_No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operation</th>

                </tr>
            </thead>
            <tbody>
                <?php

                $sql = "select * from crud";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        $password = $row['password'];
                        echo '<tr>
                    <th scope="row">' . $id . '</th>
                    <td>' . $name . '</td>
                    <td>' . $email . '</td>
                    <td>' . $mobile . '</td>
                    <td>' . $password . '</td>
                    <td>
                    <button type="button" class="btn btn-success">  <a href="update.php ? updateid=' . $id . '" style="text-decoration:none" class="text-light">Update</a></button>
                    <button type="button" class="btn btn-danger"><a href="delete.php? deletedid=' . $id . '" style="text-decoration:none" class="text-light">Delete</a> </button>
                </td>
                    
                </tr>';
                    }

                }
                ?>

            </tbody>
        </table>
    </div>
</body>

</html>