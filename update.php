<?php
include_once("koniksyun/konik.php");
$con = connection();
    
$sql1 = "SELECT * FROM twoInput ORDER BY id DESC";
$student1 = $con->query($sql1) or die ($con->error);
$row1 = $student1->fetch_assoc();

$id = $_GET['id'];
$sql2 = "SELECT * FROM twoInput where id = $id ";
$student2 = $con->query($sql2) or die ($con->error);
$row2 = $student2->fetch_assoc();
    


        if(isset($_POST['update'])){
           
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];

            $sum = $num1 + $num2;
            $product = $num1 * $num2;
            $difference = $num1 - $num2;
            $quotion = $num1 / $num2;

            
            echo $sql = "UPDATE twoInput SET  num1 = '$num1', num2 ='$num2', sum = '$sum', product = '$product', difference = '$difference', quotiont = '$quotion' WHERE ID = '$id'";
             $con->query($sql) or die ($con->error);

             echo header ("location: index.php");
        }




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>erwinkimmy</title>
   

 
</head>
<body >
    


        <form action="" method="post">
            <label for="num1">Enter Number 1: </label>
            <input type="number" name="num1" id="" value="<?php echo $row2['num1']; ?>">

            <label for="num2">Enter Number 2: </label>
            <input type="number" name="num2" id=""  value="<?php echo $row2['num2']; ?>">

            <button type="submit" name="update">update</button>
        </form>



        <table>
        <th>
            <tr>
                <td>id  </td>
                <td>number 1  </td>
                <td>number 2  </td>
                <td>Sum </td>
                <td>Product </td>
                <td>Difference </td>
                <td>Quotient </td>
            </tr>
        </th>

        <tbody>
            <?php do{ ?>
            <tr>
                <td> <?php echo $row1['id'] ?></td>
                <td><?php echo $row1['num1'] ?></td>
                <td><?php echo $row1['num2'] ?></td>
                <td> <?php echo $row1['sum'] ?></td>
                <td><?php echo $row1['product'] ?></td>
                <td><?php echo $row1['difference']?></td>
                <td><?php echo $row1['quotiont'] ?></td>
                <td><a href="index.php">CANCEL</a></td>
                <td><a href="delete.php?id=<?php echo $row1['id'] ?>">DELETE</a></td>
            </tr>
            <?php }while($row1 = $student1->fetch_assoc()) ?>
        </tbody>

    </table>
</body>
</html>