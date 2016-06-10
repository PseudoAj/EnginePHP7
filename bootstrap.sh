 #!/bin/bash

# Pre set-up variables

GITDIR="/tmp/git"
ENGINEAPIHOME="/home/engineAPI"

SERVERURL="/home/engineAPIPHP5"
DOCUMENTROOT="public_html"
SITEROOT="/home/engineAPIPHP5/public_html/src"

#Add the RPM for PHP7 to CentOS7
rpm -Uvh http://repo.mysql.com/mysql-community-release-el7-5.noarch.rpm
rpm -Uvh https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm
rpm -Uvh https://mirror.webtatic.com/yum/el7/webtatic-release.rpm
yum -y update
echo -e "----Added the RPM for CentOS7----\n\n"

yum -y install httpd httpd-devel httpd-manual httpd-tools
echo -e "----Installed Apache----\n\n"

yum -y install mysql-connector-java mysql-connector-odbc mysql-devel mysql-lib mysql-server
echo -e "----Installed MySQL----\n\n"

yum -y install mod_auth_kerb mod_auth_mysql mod_authz_ldap mod_evasive mod_perl mod_security mod_ssl mod_wsgi
echo -e "----Installed Auth Plugins for MySQL----\n\n"

yum -y install php70w php70w-bcmath php70w-cli php70w-common php70w-gd php70w-ldap php70w-mbstring php70w-mcrypt php70w-mysql php70w-odbc php70w-pdo php70w-pear php70w-pear-Benchmark php70w-pecl-apc php70w-pecl-imagick php70w-pecl-memcache php70w-soap php70w-xml php70w-xmlrpc
echo -e "----Installed PHP 7----\n\n"

wget https://phar.phpunit.de/phpunit.phar
chmod +x phpunit.phar
mv phpunit.phar /usr/local/bin/phpunit
phpunit --version
echo -e "----Installed PHPUNIT----\n\n"

rm -f /etc/php.ini
ln -s /vagrant/serverConfiguration/php.ini /etc/php.ini
echo -e "----Replaced PHP configurations----\n\n"

yum -y install emacs emacs-common emacs-nox
echo -e "----Installed emacs----\n\n"

yum -y install git
echo -e "----Installed git package----\n\n"

mv /etc/httpd/conf.d/mod_security.conf /etc/httpd/conf.d/mod_security.conf.bak
systemctl start httpd.service
chkconfig httpd on
echo -e "----Apache configuration files----\n\n"

#rm -f /etc/httpd/conf/httpd.conf
#ln -s /vagrant/serverConfiguration/httpd.conf /etc/httpd/conf/httpd.conf
#echo -e "----httpd configuaration files----\n\n"

mkdir -p $GITDIR
cd $GITDIR

git clone https://github.com/wvulibraries/engineAPITemplates.git
git clone https://github.com/wvulibraries/engineAPI-Modules.git

mkdir -p $SERVERURL/phpincludes/
mkdir -p $GITDIR/engineAPI/engine/engineAPI/latest/modules/
ln -s $GITDIR/engineAPI-Modules/src/modules/* $GITDIR/engineAPI/engine/engineAPI/latest/modules/
ln -s /vagrant/engine/ $SERVERURL/phpincludes/
echo -e "----Cloned engineAPI----\n\n"


#mkdir -p $SERVERURL/$DOCUMENTROOT
#ln -s /vagrant/src $SITEROOT
#ln -s $SERVERURL/phpincludes/engine/engineAPI/latest $SERVERURL/phpincludes/engine/engineAPI/4.0
#echo -e "----public folder has been set----\n\n"

#rm -f $GITDIR/engineAPI/engine/engineAPI/latest/config/defaultPrivate.php
#ln -s /vagrant/serverConfiguration/defaultPrivate.php $GITDIR/engineAPI/engine/engineAPI/latest/config/defaultPrivate.php

#mkdir -p $SERVERURL/phpincludes/databaseConnectors/
#ln -s /vagrant/serverConfiguration/database.lib.wvu.edu.remote.php $SERVERURL/phpincludes/databaseConnectors/database.lib.wvu.edu.remote.php
#echo -e "----Local configurations have been set----\n\n"

#ln -s $SERVERURL $ENGINEAPIHOME
#ln -s $GITDIR/engineAPI/public_html/engineIncludes/ $SERVERURL/$DOCUMENTROOT/engineIncludes
#echo -e "----EngineAPI is linked to the app----\n\n"

#chmod a+rx /etc/httpd/logs -R
#sudo ln -s /etc/httpd/logs/error_log /vagrant/serverConfiguration/serverlogs/error_log
#sudo ln -s /etc/httpd/logs/access_log /vagrant/serverConfiguration/serverlogs/access_log
#echo -e "----Permissions have been set to sync logs----\n\n"

systemctl start mysqld
chkconfig mysqld on
mysql -u root < /vagrant/sql/vagrantSetup.sql
mysql -u root EngineAPI < /vagrant/sql/EngineAPI.sql
echo -e "----MySQL have been set----\n\n"

#mysql -u root < /tmp/git/engineAPI/sql/vagrantSetup.sql
#mysql -u root EngineAPI < /tmp/git/engineAPI/sql/EngineAPI.sql

#mysql -u root < /vagrant/SQLFiles/setup.sql
#mysql -u root timeTracker < /vagrant/SQLFiles/timeTracker.sql
#echo -e "----Databases have been set----\n\n"

#systemctl restart httpd.service
#echo -e "----APACHE restarted----\n\n"
