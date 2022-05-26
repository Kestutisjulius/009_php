<?php
echo '<pre>';
require __DIR__ . '/data_create.php';

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';



$bankAccountNr = ["bank"=>"Swed","accountNr"=>"LT2236547","balance"=>0.00,"lastTransactionTime"=>"date(H:i)","lastTransactionSum"=>0.00];

foreach ($bankAccountNr as $key => &$value){
    if($bankAccountNr[$key] == "date(H:i)" ){
        $value = date("H:i:s");
    }
}
var_dump($bankAccountNr);

?>

