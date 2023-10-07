<div class="container">
    <div class="content">
        <div class="properties form">
            <?= $this->Form->create($property) ?>
            <fieldset>
                <legend>
                    <?= __('物件の削除') ?>
                </legend>
                <?= $this->Form->control('number', ['label' =>["class" => "simple", "text" => "物件番号"]]) ?>
            </fieldset>
            <?= $this->Form->button(__('送信')); ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>