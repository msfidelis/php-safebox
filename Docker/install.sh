
echo "BUILD PHP5" 
docker build -t apachephp5 PHP5/.

echo "BUILD PHP7" 
docker build -t apachephp7 PHP7/.

echo "BUILD MYSQL"
docker build -t mysql MySQL/.