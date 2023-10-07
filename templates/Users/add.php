<div class="container">
    <div class="content">
        <div class="users form">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend>
                    <?= __('ユーザー登録') ?>
                </legend>
                <?= $this->Form->control('username') ?>
                <?= $this->Form->control('password') ?>
                <?= $this->Form->control('role', [
                    'options' => ['admin' => 'Admin',]
                ]) ?>
            </fieldset>
            <?= $this->Form->button(__('送信')); ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>