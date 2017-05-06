<?php
$client = new MongoClient("mongodb://iasi:1972oct19@cluster0-shard-00-00-dkjxq.mongodb.net:27017,cluster0-shard-00-01-dkjxq.mongodb.net:27017,cluster0-shard-00-02-dkjxq.mongodb.net:27017/Termostat?ssl=true&replicaSet=Cluster0-shard-0&authSource=admin");
$collection = $client->Termostat->Temperature;
$result = $collection->insertOne( [ 'DateTime' => '2017/04/28 16:22:50', 'Temperature' => '71.892' ] );
echo "Inserted with Object ID '{$result->getInsertedId()}'";
?>
