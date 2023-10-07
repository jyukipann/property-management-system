<?= print_r($getQuery) ?>
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
</script>
<div class="container">
    <div class="content" id="search_form" style="display: none;">
        <div class="properties form">
            <?= $this->Form->create(null, ['type' => 'get', 'url' => ['action' => 'index', 'controller' => 'Properties']]); ?>
            <fieldset>
                <legend>
                    <?= __('物件の検索') ?>
                </legend>
                <?= $this->Form->control('area', ['label' => ["class" => "simple", "text" => "エリア"]]) ?>
                <?= $this->Form->control('budget', ['label' => ["class" => "simple", "text" => "予算"]]) ?>
            </fieldset>
            <?= $this->Form->button(__('検索')); ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
    <hr style="visibility: hidden;">
    <div class="content">
        <h2> 物件一覧 </h2><button type="button" onclick="toggleDisplay();">検索機能</button>
        <?php
        foreach ($properties as $property) {
            echo <<<EOM
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