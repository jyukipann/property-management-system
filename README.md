# property-management-system
property-management-system
[jyukipann.com:8765/](http://jyukipann.com:8765/)

# installation
Required environment :
- LAMP
- phpmyadmin
```bash
sudo apt-get update
sudo apt-get install -y tasksel
sudo tasksel install lamp-server
sudo apt install phpmyadmin
sudo apt install composer php-curl
curl -s https://getcomposer.org/installer | php
sudo apt-get install php-intl
sudo ufw allow 8000
sudo ufw allow 8765
php path/to/composer.phar create-project --prefer-dist cakephp/app:4.* property-management-system
sudo nano /etc/apache2/conf-available/phpmyadmin.conf
sudo a2enconf phpmyadmin.conf
composer require "cakephp/authentication:^2.0"
php ../../../composer.phar require --dev cakephp/debug_kit "~4.0"
bin/cake plugin load DebugKit
```

```/etc/php/7.4/cli/php.ini``` を編集して、```extension=intl```を有効化

サーバー起動
```bash
bin/cake server -H 0.0.0.0
```

```
bin/cake bake model Users
bin/cake bake model Properties
```


mysql と phpmyadmin設定
```mysql
CREATE USER 'newuser'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON * . * TO 'newuser'@'localhost';
FLUSH PRIVILEGES;
```
```mysql
CREATE TABLE users (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(255),
    role VARCHAR(20),
    created DATETIME DEFAULT NULL,
    modified DATETIME DEFAULT NULL
);
```


config/app_local.php内にデータベース接続情報を記述
