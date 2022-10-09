<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php header('Access-Control-Allow-Origin: *');
  
?>
<?php 
   header("Access-Control-Allow-Methods: GET, POST, OPTIONS, DELETE");
?>
<?php include 'index.php';

$sql_query = "SELECT * FROM `dvd_disc` ";

$connect_to_db = new Database();
$res = $connect_to_db->connect();





if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    // The request is using the POST method
    echo 'bitch is DELETE';
    $req = $res->prepare(" TRUNCATE dvd_disc");
    $req->execute();
    echo 'table cleared';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // The request is using the POST method
echo 'post method <br><br><br>';

    if (isset($_POST['Name'])) {
    echo 'is set';
    $Name = $_POST['Name'];
    $SKU = $_POST['SKU'];
    $Price = $_POST['price'];
    $Size = $_POST['Size'];
    $req = $res->prepare("INSERT INTO `dvd_disc`(`id`, `Name`, `sku`, `price`, `Size`) VALUES ('','$Name','$SKU','$Price','$Size')");
    $req->execute();
    echo "posted $Name  with price of $Price";

}
}
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo 'GET';
    $req = $res->prepare($sql_query);
    $req->execute();
    $results = $req->fetchAll(); 
    print_r($results);
    echo '<br>';
    print("\n");

}


?>
    <form action="http://localhost/PHPapp/home.php" method="POST" class="submit">
            <input type="name" name="Name" id="">
            <input type="sku" name="SKU" id="">
            <button name='submit' type="submit">submit</button>
            
           
    </form>
                   
           <button name='submit' type="submit">
           <a href="http://localhost/PHPapp/home.php"></a> 
           CLEAR ALL</button>
                
</body>
</html>