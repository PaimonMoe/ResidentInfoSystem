<?php
    class MyDB extends SQLite3
    {
        function __construct()
        {
            $this->open('../../bin/database.db');
        }
    }
    $db = new MyDB();
    foreach($_POST as $i => $v){
        $$i = $v;
    }
    $settletime = date("Ymd");

    $myfile = fopen("PublicKey.txt", "r");
    $key = fread($myfile,filesize("PublicKey.txt"));
    fclose($myfile);

    $platenum = $str=exec("..\\..\\bin\\SM2.exe encrypt ".$platenum." ".$key);
    $tel = $str=exec("..\\..\\bin\\SM2.exe encrypt ".$tel." ".$key);
    $idcnum = $str=exec("..\\..\\bin\\SM2.exe encrypt ".$idcnum." ".$key);
    $apppw = $str=exec("..\\..\\bin\\SM2.exe encrypt ".$apppw." ".$key);
    $sql = "INSERT INTO regist(name,sex,settletime,appname,building,section,room,platenum,tel,idcnum,apppw) values('$name','$sex','$settletime','$appname','$building','$section','$room','$platenum','$tel','$idcnum','$apppw');";
    $ret = $db->exec($sql);
    if(!$ret){
    echo $db->lastErrorMsg();
    } else {
    echo "1";
    }
?>