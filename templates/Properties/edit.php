<div class="container">
    <div class="content">
        <div class="properties form">
            <?= $this->Form->create($property, ['type' => 'file']) ?>
            <fieldset>
                <legend>
                    <?= __('物件の編集') ?>
                </legend>
                <?= $this->Form->control('number', ['label' =>["class" => "simple", "text" => "物件番号"]]) ?>
                <?= $this->Form->control('address', ['label' =>["class" => "simple", "text" => "住所"]]) ?>
                <?= $this->Form->control('price', ['label' =>["class" => "simple", "text" => "価格"]]) ?>
                <?= $this->Form->control('image_1', ['label' =>["class" => "simple", "text" => "画像"]]) ?>
            </fieldset>
            <?= $this->Form->button(__('送信')); ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>