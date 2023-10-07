<div class="container">
    <div class="content">
        <div class="properties form">
            <?= $this->Form->create($property, ['type' => 'file']) ?>
            <fieldset>
                <legend>
                    <?= __('物件の編集') ?>
                </legend>
                <?= $this->Form->control('number', ['label' => ["class" => "simple", "text" => "物件番号"]]) ?>
                <?= $this->Form->control('address', ['label' => ["class" => "simple", "text" => "住所"]]) ?>
                <?= $this->Form->control('price', ['label' => ["class" => "simple", "text" => "価格"]]) ?>
                <?= $this->Form->control('image_1', ['label' => ["class" => "simple", "text" => "画像"]]) ?>
                <?= $this->Form->control(
                    'area',
                    [
                        'options' => ['北海道'=>'北海道', '東北'=>'東北', '関東'=>'関東', '中部'=>'中部', '近畿'=>'近畿', '中国'=>'中国', '四国'=>'四国', '九州'=>'九州'],
                        'label' => ["class" => "simple", "text" => "エリア"]
                    ]
                ) ?>
            </fieldset>
            <?= $this->Form->button(__('送信')); ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>