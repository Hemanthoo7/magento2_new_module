chmod a+x magento*
tar -xvzf magento*
chmod 777 -R ../242mag
chown root:root -R ../242mag

bin/magento setup:install --base-url=http://localhost/242mag--db-host=localhost --db-name=242mag --db-user=i95dev --db-password=i95dev --admin-firstname=Azhar --admin-lastname=Shaik --admin-email=azharuddin.shaik@jivainfotech.com  --admin-user=admin --admin-password=i95devteam --search-engine=elasticsearch7 --elasticsearch-host="localhost" --elasticsearch-port=9200

bin/magento module:disable Magento_TwoFactorAuth


php bin/magento setup:store-config:set --base-url="http://242mag.com"

vim   /etc/apache2/sites-available/242mag.conf 


sudo a2ensite 242mag.conf
sudo a2enmod rewrite
service apache2 restart

vim /etc/hosts


chmod 777 -R ../242mag
chown root:root -R ../242mag
