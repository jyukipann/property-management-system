# property-management-system
property-management-system


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
```

```/etc/php/7.4/cli/php.ini``` を編集して、```extension=intl```を有効化
