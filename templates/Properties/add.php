<div class="container">
    <div class="content">
        <div class="properties form">
            <?= $this->Form->create($property, ['type' => 'file']) ?>
            <fieldset>
                <legend>
                    <?= __('物件の追加') ?>
                </legend>
                <?= $this->Form->control('number') ?>
                <?= $this->Form->control('address') ?>
                <?= $this->Form->control('price') ?>
                <?= $this->Form->control('image_1') ?>
            </fieldset>
            <?= $this->Form->button(__('送信')); ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>