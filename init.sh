echo -n 'Codeigniter Boilerplate - Project Name: '
read projectname
echo -n 'Codeigniter Boilerplate - Project Description: '
read projectdescription
echo -n 'Codeigniter Boilerplate - Project Author: '
read projectauthor

sed -i '' "s/\%%projectname%%/$projectname/" composer.json bower.json package.json
sed -i '' "s/\%%projectdescription%%/$projectdescription/" composer.json bower.json package.json
sed -i '' "s/\%%author%%/$projectauthor/" composer.json bower.json package.json

echo -n 'Codeigniter Boilerplate - Database - HOST: '
read dbhost
echo -n 'Codeigniter Boilerplate - Database - USER: '
read dbuser
echo -n 'Codeigniter Boilerplate - Database - PASS: '
read dbpw
echo -n 'Codeigniter Boilerplate - Database - NAME: '
read dbname

sed -i '' "s/\%%dbhost%%/$dbhost/" ./application/config/database.php
sed -i '' "s/\%%dbuser%%/$dbuser/" ./application/config/database.php
sed -i '' "s/\%%dbpw%%/$dbpw/" ./application/config/database.php
sed -i '' "s/\%%dbname%%/$dbname/" ./application/config/database.php

composer install

rm init.sh