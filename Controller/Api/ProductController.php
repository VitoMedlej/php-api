<?php 
class ProductController extends BaseController {

    public function actionList() {
try {

    $strErrorDesc = '';
    $requestMethod = strtoupper($_SERVER["REQUEST_METHOD"]);
        $arrQueryStringParams = $this->getQueryStringParams();
        
        if ($requestMethod === 'GET') {
            
            $Product = new ProductModel();
            print_r($Product);
            $a = $Product->getProducts(1);
            print("ffoo $a ");
        }
    }
    catch (Error $e) {
        echo $e;
    }
    }

}

?>