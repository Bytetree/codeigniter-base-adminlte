echo -n 'Codeigniter Boilerplate - Project Name: '
read projectname
echo -n 'Codeigniter Boilerplate - Project Description: '
read projectdescription
echo -n 'Codeigniter Boilerplate - Project Author: '
read projectauthor

sed -i '' "s/\%%projectname%%/$projectname/" composer.json bower.json package.json
sed -i '' "s/\%%projectdescription%%/$projectdescription/" composer.json bower.json package.json
sed -i '' "s/\%%author%%/$projectauthor/" composer.json bower.json package.json
composer update
rm init.sh