<div class="container">
    <div class="content">
        <div class="users form">
            <?= $this->Flash->render() ?>
            <h3>Login</h3>
            <?= $this->Form->create() ?>
            <fieldset>
                <legend>
                    <?= __('ユーザー名とパスワードを入力してください') ?>
                </legend>
                <?= $this->Form->control('username', ['required' => true, 'label' =>["class" => "simple", "text" => "ユーザーネーム"]]) ?>
                <?= $this->Form->control('password', ['required' => true, 'label' =>["class" => "simple", "text" => "パスワード"]]) ?>
            </fieldset>
            <?= $this->Form->submit(__('ログイン')); ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>