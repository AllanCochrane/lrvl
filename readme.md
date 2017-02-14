sudo apt-get install software-properties-common python-software-properties
sudo LC_ALL=C.UTF-8 add-apt-repository ppa:ondrej/php
sudo apt-get update
sudo apt-get install php5.6 php5.6-xml php5.6-mbstring
sudo apt-get install sqlite3
sudo apt-get autoremove
#sudo ln -s /usr/bin/php /usr/local/bin/php