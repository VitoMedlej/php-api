<?php 
require_once PROJECT_ROOT_PATH . "/Model/Database.php";
class ProductModel extends Database {
    public function getProducts(int $limit)
    {
        try {

            if (isset($connection)) {
                
                $stmt = $connection->prepare("SELECT * FROM `products` ");
                $stmt->execute();
                $products = $stmt->fetchAll();
                echo 'wtf';
                print_r($products);
                return $products;
            }
        }
        catch (Error $e) {
            print($e);
        }
    }
}
?>