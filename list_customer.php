<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List customer</title>
</head>

<body>
<a href="add_customer.php">Add customert </a>
    <table border="1">
        <thead>
            <tr>
                
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Age</th>
                <th>Actions</th>

            </tr>
        </thead>
        <tbody>
            <?php
            //connection
            try {
                $pdo = new pdo("mysql:host=localhost;dbname=task8", "root", "");
                //query
                $data =  $pdo->query("select * from customer");
                $customer = $data->fetchAll(PDO::FETCH_ASSOC);
            } catch (pdoexception $e) {
                echo $e;
            }
            foreach ($customer as $customers) {
            ?>
                <tr>
                    
                    <td><?php echo  $customers['fname'] ?></td>
                    <td><?php echo  $customers['lname'] ?></td>
                    <td><?php echo  $customers['email'] ?></td>
                    <td><?php echo  $customers['address'] ?></td>
                    <td><?php echo  $customers['age'] ?></td>
                    <td><a href="show.php?id=<?php echo  $customers['id']  ?>">Show customers</a>
                    <a href="delete.php?id=<?php echo  $customers['id']?>">Delete </a>
                        <a href="edit.php?id=<?php echo  $customers['id']  ?>">Edit </a>
                </td>
                    
                </tr>
            <?php
            }
            //close
            $pdo = null;

            ?>

        </tbody>
    </table>

</body>

</html>