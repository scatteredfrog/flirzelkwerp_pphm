<?php
class tip
{
    public function __construct()
    {
            $link=mysql_connect("db401201757.db.1and1.com", "dbo401201757", "pphmdb42");
//            if(!$link)
//            {
//              die('Count not connect: '.mysql_error());
//            }
//            mysql_select_db("db401201757") or die(mysql_error());
     }
     
     
     
     
     
     
     

    public function getNewTip()
    {
//        $tip=mysql_query("SELECT date,tip FROM whatilearned ORDER BY date DESC");
//        $x=0;
//        while ($row=mysql_fetch_array($tip))
//        {
//            $rows[$x]=$row;
//            $x++;
//        }
//        return $rows;
    }
    
    public function setTip($formTip)
    {
//        $formTip=$_POST['tip'];
//        mysql_query("UPDATE whatilearned SET isNew='0' WHERE isNew='1'");
//        mysql_query("INSERT INTO whatilearned (isNew,tip,date) VALUES ('1','$formTip',CURDATE())");
    }
    
    public function __destruct()
//    {
//    mysql_close();
//    }
}
?>
