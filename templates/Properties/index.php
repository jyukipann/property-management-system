<h1> Properties </h1>
<h2>
    <?php
    echo "Hello " . $this->request->getSession()->read('Auth')->username;
    ?>
</h2>
<?php
foreach ($properties as $property) {

    echo <<<EOM
    <div>
        <h5>番号 {$property->number}</h5>
        <h5>住所 {$property->address}</h5>
        <h5>価格 ￥{$property->price}</h5>
        <img src="{$this->Url->build(["controller" => "Properties", "action" => "getImage", $property->id])}" />
    </div>
    EOM;
}
?>