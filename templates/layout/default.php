<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$title = " : cakePMS";
?>
<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $this->fetch('title') ?>
        <?= $title ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body>
    <nav class="top-nav">
        <div class="top-nav-title">
            <a href="<?= $this->Url->build('/properties') ?>"><span>Cake</span>PMS</a>
        </div>
        <div class="top-nav-links">
            <a href="<?= $this->Url->build('/properties') ?>">一覧</a>
            <a href="<?= $this->Url->build('/properties/add') ?>">追加</a>
            <a href="<?= $this->Url->build('/properties/edit') ?>">編集</a>
            <a href="<?= $this->Url->build('/properties/delete') ?>">削除</a>
            <a href="<?= $this->Url->build('/users/add') ?>">ユーザー追加</a>
            <!-- <a href="<?= $this->Url->build('/users') ?>">User Home</a> -->
            <a href="<?= $this->Url->build('/users/logout') ?>">ログアウト</a>
            <a target="_blank" rel="noopener" href="https://jyukipann.com">jyukipann.com</a>
        </div>
    </nav>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
        <div class="container" style="text-align: center">
            <a onclick="window.scroll({top: 0, behavior: 'smooth',});">toTop</a>
        </div>
    </footer>
</body>

</html>