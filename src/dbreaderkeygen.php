<?php
    class MyDB extends SQLite3  //继承SQLite3的类
    {
      function __construct()   //构造函数
      {
         $this->open('../bin/database.db');   //打开数据库文件
      }
   }
   $db = new MyDB();   //用来连接数据库   实例化
   $sql = "select * from regist";
   $res = $db->query($sql);   //查询上面那个select


   echo "<pre><br><br><br>";
   while($row = $res->fetchArray(SQLITE3_ASSOC))   //row是res里面每一行单独的变量
       foreach($row as $i=>$v)     //row是数组，下表是字符型   $row['name']
           echo $i.'=>'.$v.'<br>';    //$i是下标 代表列名，$v是列对应的数值
    $db->close();   //关闭连接

    // system("..\\bin\\SM2.exe keygen");
?>