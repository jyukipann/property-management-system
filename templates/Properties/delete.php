<div class="properties form">
    <?= $this->Form->create($property) ?>
    <fieldset>
        <legend>
            <?= __('Add Property') ?>
        </legend>
        <?= $this->Form->control('number') ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')); ?>
    <?= $this->Form->end() ?>
</div>