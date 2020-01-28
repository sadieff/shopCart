<?

/*
/*      Обработка данных,
/*      полученных от компонента Cart
*/

class Cart {

    public $request = [];

    function __construct() {

        $this->request = $_REQUEST;

    }

    /* изменение количества */
    function updateQuantity(){

        $value = $this->request["value"];
        $productId = $this->request["productId"];

        /* API запрос на изменение количества */
        $this->sendMessage( array("success" => "Продукт: ".$productId.", Количество: ".$value));

    }

    /* Удаление товара */
    function productDelete(){

        $productId = $this->request["productId"];

        /* API запрос на удаление */
        $this->sendMessage(array("success" => "Продукт: ".$productId." удален."));

    }

    function orderCheckout(){

        $orderParams = $this->request;

        /* API на оформление покупки */
        $this->sendMessage(array("success" => "Заявка оформлена"));

    }

    function sendMessage($array){
        echo json_encode($array);
    }
}

header("Content-type: application/json; charset=utf-8");

$cert = new Cart();

if($cert->request["type"] == "quantity") {
    $cert->updateQuantity();
}
elseif ($cert->request["type"] == "delete"){
    $cert->productDelete();
}
elseif ($cert->request["type"] == "сheckout"){
    $cert->orderCheckout();
}
else {
    $cert->sendMessage(array("error" => "Неверный запрос"));
}