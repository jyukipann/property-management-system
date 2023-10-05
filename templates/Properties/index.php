<h1> Properties </h1>
<style>
    div.properties {
        border: 2px solid #262626;
        padding: 0.5vh;
        margin-top: 0.5vh;
        margin-top: 0.5vh;
        border-radius: 0.5vh;
    }
</style>
<?php
foreach ($properties as $property) {
    echo <<<EOM
    <div class="properties" >
        <h5>番号 {$property->number}</h5>
        <h5>住所 {$property->address}</h5>
        <h5>価格 ￥{$property->price}</h5>
        <img width="30%" src="{$this->Url->build(["controller" => "Properties", "action" => "getImage", $property->id])}" />
    </div>
    EOM;
}
?>