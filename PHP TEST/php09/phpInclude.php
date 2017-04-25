<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP include</title>
    <style>
        ul {
            font-size: 16px;
        }
    </style>
</head>
<body>
<h1>MONGODB 常用命令</h1>
<ul>
    <li>show dbs -- 查看数据库列表</li>
    <li>use admin --创建admin数据库，如果存在admin数据库则使用admin数据库</li>
    <li>db ---显示当前使用的数据库名称</li>
    <li>db.getName() ---显示当前使用的数据库名称</li>
    <li>db.dropDatabase() --删当前使用的数据库</li>
    <li>db.repairDatabase() --修复当前数据库</li>
    <li>db.version() --当前数据库版本</li>
    <li>db.getMongo() --查看当前数据库的链接机器地址</li>
    <li>db.stats() 显示当前数据库状态，包含数据库名称，集合个数，当前数据库大小 ...</li>
    <li>db.getCollectionNames() --查看数据库中有那些个集合（表）</li>
    <li>show collections --查看数据库中有那些个集合（表）</li>
    <li>db.person.drop() --删除当前集合（表）person</li>
</ul>
<?php include 'footer.php'; ?>
</body>
</html>