<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
use Cake\Datasource\ConnectionManager;

$this->disableAutoLayout();

$checkConnection = function (string $name) {
    $error = null;
    $connected = false;
    try {
        $connection = ConnectionManager::get($name);
        $connected = $connection->connect();
    } catch (Exception $connectionError) {
        $error = $connectionError->getMessage();
        if (method_exists($connectionError, 'getAttributes')) {
            $attributes = $connectionError->getAttributes();
            if (isset($attributes['message'])) {
                $error .= '<br />' . $attributes['message'];
            }
        }
    }

    return compact('connected', 'error');
};

// if (!Configure::read('debug')) :
//     throw new NotFoundException(
//         'Please replace templates/Pages/home.php with your own version or re-enable debug mode.'
//     );
// endif;

$title = "cakePMS";
?>
<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $title ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'home']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body>
    <header>
        <div class="container text-center">
            <h1>
                Welcome to CakePMS
            </h1>
            <p>Property Manage System</p>
        </div>
    </header>
    <main class="main">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="column">
                        <div class="message default text-center">
                            <small>このシステムはスキルテストのために作られました。</small>
                        </div>
                        <h4>物件管理システム</h4>
                        <p>
                            物件管理システムは、不動産物件の効率的な管理を支援するための完全なソリューションです。このシステムを通じて、物件の登録、編集、削除、および検索を簡単に行えます。不動産物件の情報を一元管理し、効率的な運用を実現します。
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="column">
                        <h4>物件情報</h4>
                        <p>
                            各物件の情報には、物件番号、住所、価格、および少なくとも1枚以上の物件画像が含まれます。これにより、物件の詳細な情報が一元管理されます。
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="column">
                        <h4>一覧</h4>
                        <p>一覧機能は、すべての登録された物件の要約情報を一覧で表示します。物件の基本情報を瞬時に確認し、必要なアクションを簡単に実行できます。</p>
                    </div>
                    <div class="column">
                        <h4>検索</h4>
                        <p>物件検索機能は、物件データベース内で迅速な検索を実行できる強力なツールです。条件に合致する物件を検索し、必要な情報を素早く見つけます。</p>
                    </div>
                </div>
                <hr style="visibility: hidden;">
                <div class="row">
                    <div class="column">
                        <h4>追加</h4>
                        <p>追加機能を使用して、新しい不動産物件を登録できます。物件の詳細情報、住所、価格、および画像を追加し、データベースに新しい物件情報を保存します。</p>
                    </div>
                    <div class="column">
                        <h4>編集</h4>
                        <p>物件編集機能を利用すると、既存の物件情報を更新できます。変更が必要な情報を簡単に編集し、最新のデータを保持します。</p>
                    </div>
                    <div class="column">
                        <h4>削除</h4>
                        <p>物件削除機能を使用して、不要な物件情報をシステムから削除できます。誤って登録された物件や非表示にする必要のある物件をスムーズに削除します。</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="column links">
                        <h3>Getting Started</h3>
                        <a rel="noopener" href="<?= $this->Url->build('/pages/home') ?>">home</a>
                        <a rel="noopener" href="<?= $this->Url->build('/users/login') ?>">login</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>