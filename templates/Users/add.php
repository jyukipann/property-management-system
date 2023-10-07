<div class="container">
    <div class="content">
        <div class="users form">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend>
                    <?= __('ユーザー登録') ?>
                </legend>
                <?= $this->Form->control('username', ['label' => ["class" => "simple", "text" => "ユーザーネーム"]]) ?>
                <?= $this->Form->control('password', ['label' => ["class" => "simple", "text" => "パスワード"]]) ?>
                <?= $this->Form->control('role', [
                    'options' => ['admin' => 'Admin',],
                    'label' => ["class" => "simple", "text" => "権限設定"]
                ]) ?>
            </fieldset>
            <?= $this->Form->button(__('送信')); ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>