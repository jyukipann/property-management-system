<div class="container">
    <div class="content">
    <h2> 物件一覧 </h2>
    <?php
    foreach ($properties as $property) {
        echo <<< EOM
        <hr>
        <div class="row">
            <div class="column">
                <p>番号 : {$property->number}</p>
                <p>価格 : ￥{$property->price}</p>
                <p>住所 : {$property->address}</p>
            </div>
            <div class="column">
                <img width="50%" src="{$this->Url->build(["controller" => "Properties", "action" => "getImage", $property->id])}" />
            </div>
        </div>
        EOM;
    }
    ?>
    </div>
</div>