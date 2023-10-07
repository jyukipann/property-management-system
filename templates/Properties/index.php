<?php
if( Cake\Core\Configure::read('debug') ){
    echo print_r($getQuery);
    echo debug($query);
}
?>
<script>
    function toggleDisplay(id = "search_form") {
        let current = document.getElementById(id).style.display;
        let setTo = "none";
        if (current == "none") {
            setTo = "block";
        } else if (current == "block") {
            setTo = "none";
        }
        document.getElementById(id).style.display = setTo;
    }
    function resetFilter() {
        window.location.href = "<?= $this->Url->build('/properties', ) ?>";
    }
</script>
<style>
.for_search {
    margin-right:10px;
    margin-left:10px;
}
</style>
<div class="container">
    <div class="content" id="search_form" style="display: none;">
        <div class="properties form">
            <?= $this->Form->create(null, ['type' => 'get', 'url' => ['action' => 'index', 'controller' => 'Properties']]); ?>
            <fieldset>
                <legend>
                    <?= __('物件の検索') ?>
                </legend>
                <?= $this->Form->control('area', ['options' => [''=>'', '北海道'=>'北海道', '東北'=>'東北', '関東'=>'関東', '中部'=>'中部', '近畿'=>'近畿', '中国'=>'中国', '四国'=>'四国', '九州'=>'九州'], 'label' => ["class" => "simple", "text" => "エリア"]]) ?>
                <?= $this->Form->control('budget', ['label' => ["class" => "simple", "text" => "予算"]]) ?>
            </fieldset>
            <?= $this->Form->button(__('検索')); ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
    <hr style="visibility: hidden; margin-top:10px; margin-bottom:10px">
    <div class="content">
        <h2> 物件一覧 </h2><button type="button" class="for_search" onclick="toggleDisplay();">検索機能</button><button type="button" class="for_search" onclick="resetFilter();">条件削除</button>
        <?php
        foreach ($properties as $property) {
            echo <<<EOM
        <hr style="margin-top:10px; margin-bottom:10px">
        <div class="row">
            <div class="column">
                <p>番号 : {$property->number}</p>
                <p>価格 : {$this->Number->currency($property->price, "JPY")}</p>
                <p>住所 : {$property->address}</p>
                <p>エリア : {$property->area}</p>
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