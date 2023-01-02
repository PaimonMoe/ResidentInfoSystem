<?php
    class MyDB extends SQLite3
    {
      function __construct()
      {
         $this->open('../bin/database.db');
      }
   }

    system("del \"../bin/database.db\"");


   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
    } else {
      echo 'Database Touched<br>';
    }

   $sql =<<<EOF
        CREATE TABLE regist
        (id INTEGER PRIMARY KEY autoincrement,
        name           TEXT,
        sex            TEXT,
        settletime      TEXT,
        appname         TEXT,
        building        INT,
        section         INT,
        room            INT,
        platenum        TEXT,
        tel             TEXT,
        idcnum           TEXT,
        apppw           TEXT);
    EOF;

    $ret = $db->exec($sql);
    if(!$ret){
    echo $db->lastErrorMsg();
    } else {
    echo "Table created successfully<br>";
    }




   //  $sql =<<<EOF
   //  INSERT INTO regist(name,sex,settletime,appname,building,section,room,platenum,tel,idcnum,apppw) values("李文智",'男','20210725','lwz123',1,1,101,'17884025bd8967db037ed205469197b41c305b9555a0d5087d398821d1d22de813622ddb3782e0d466d404ce92131f96926d16de5aab05bebf39b42e5f7e719431545f46768c008963eb0feda687372a87dbc4538bd824cc98bfc7faca7848887c7013713fe3','17884025bd8967db037ed205469197b41c305b9555a0d5087d398821d1d22de813622ddb3782e0d466d404ce92131f96926d16de5aab05bebf39b42e5f7e719431545f46768c008963eb0feda687372a87dbc4538bd824cc98bfc7faca7848887c7013713fe3','17884025bd8967db037ed205469197b41c305b9555a0d5087d398821d1d22de813622ddb3782e0d466d404ce92131f96926d16de5aab05bebf39b42e5f7e719431545f46768c008963eb0feda687372a87dbc4538bd824cc98bfc7faca7848887c7013713fe3','17884025bd8967db037ed205469197b41c305b9555a0d5087d398821d1d22de813622ddb3782e0d466d404ce92131f96926d16de5aab05bebf39b42e5f7e719431545f46768c008963eb0feda687372a87dbc4538bd824cc98bfc7faca7848887c7013713fe3');
   //  EOF;

   //  $ret = $db->exec($sql);
   //  if(!$ret){
   //  echo $db->lastErrorMsg();
   //  } else {
   //  echo "Init Value Inserted successfully<br>";
   //  }



   //  $sql =<<<EOF
   //  INSERT INTO regist(name,sex,settletime,appname,building,section,room,platenum,tel,idcnum,apppw) values("李文侄",'女','20210729','lwz321',1,1,102,'7d5dacce3e85656bb4e0f370cc5935944ca4f5e3142be3b1321a2d0b08df42caa8a4ff1602cc49fdf9bd49c227202c6b6dbdeb99d46d09c616b441bf31e117d5c7c2aa82d1521c0ddeb08ee1677edcbda30eac32af03ff887ed90fb3ca4434eb85824f201602','963c2fc8deed71e3321ec115ac892d8ecb68e09d44274b90ed47b4bf5065bc65fea952ac4cabf9844129459cadd57da08e8b4be72ffb45a18708e1a7a8a44716bf564c198d8e61f8562b47bc86901afd6abc2225f84e6f0b4c71b9a5645efb7cccd827602aca','57249e93705bab17c0a83dcc5e33987a7727cdee9813ec10f2dfac26a53e6912746cabc0db24f616283b4e1ed3233f46a971c45ebcbc9faf3aef4a456c8c2a00c94267b3070f2f40a3f395db1824f3071e00e55ce4be1337413841546932402919e408af01809a84d5','5171c706c7da4de407286fc441e8499e4eaa3a966a5fec002209da520f62f146badddb36edabc383cdc51fd7987ea2dad5687709d84181a90dc583c1f2a88935c80866e43d1c4f2170be02c9ba2a954b68c4478c140c3f6a77c2917c1d7190a57be920cbdc2b3431');
   //  EOF;

   //  $ret = $db->exec($sql);
   //  if(!$ret){
   //  echo $db->lastErrorMsg();
   //  } else {
   //  echo "Init Value Inserted successfully<br>";
   //  }


    $sql =<<<EOF
    select * from regist;
    EOF;

    $ret = $db->query($sql);
    while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
       foreach($row as $i => $val)
            echo $i.'='.$val.'<br>';
    }










    $db->close();


    

?>