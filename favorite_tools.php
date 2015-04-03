<?php
    error_log("Server info:".print_r($_SERVER,1));
    if (substr($_SERVER['HTTP_HOST'],0,5) === 'local') {
        $db_address = '127.0.0.1';
        $db_user_name = 'root';
        $db_user_password = 'sqflirzel';
    } else {
        $db_address = 'db401201757.db.1and1.com';
        $db_user_name = 'dbo401201757';
        $db_user_password = 'pphmdb42';
    }
?>
<html><!-- #BeginTemplate "/Templates/template0.dwt" -->
<head>    
<!-- #BeginEditable "doctitle" --> 
<title>Portage Park Handyman - Handyman's Toolbox</title>
<!-- #EndEditable --> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="keywords" content="Handyman Chicago Portage Park Repair Remodeling Home Repair Improvement Richard Escallier">
<link rel="stylesheet" type="text/css" href="rich.css">
<link rel="stylesheet" type="text/css" href="css/toolsmats.css">
<link rel="stylesheet" type="text/css" href="css/fotorama.css">
<script src='js/jquery-1.8.0.min.js'></script>
<script src='js/fotorama.js'></script>
<script src="js/angular.min.js"></script>
<script src="js/angular/ToolsMatsCtrl.js"></script>
<script src="js/toolsmats.js"></script>
<script src="js/jquery.blockUI.js"></script>
<script src="js/favorite_tools.js"></script>
</head>

<body bgcolor="#CCCCCC" ng-app="ToolsMats">
<?php
    $link=mysql_connect($db_address, $db_user_name, $db_user_password);
    if(!$link) {
      die('Count not connect: '.mysql_error());
    }
    mysql_select_db("db401201757") or die(mysql_error());

    $item = mysql_query("SELECT id,heading,mnemonic,description,sort_order,amazon FROM rec_tools");
?>

<p>&nbsp;</p>
<table width="800" border="0" cellspacing="2" cellpadding="2" align="center" bgcolor="#FFFFFF">
<!--BEGINNING OF BODY-->
<table align="center" bgcolor="#FFFFFF" ng-controller="ToolsMatsCtrl">
    <tr>
        <td valign="top"><table width="192"> <!-- BEGIN LINK TABLE W/LOGO -->
        <td><img src="images/logo_trans_r1_c1.gif"></img><br />
        <?php include "links.html"; ?>
        </td></table><!-- END LINK TABLE W/LOGO -->
            <td valign="top"><table width="608" height="118"> <!-- BEGIN TABLE ON RIGHT-->
        <td valign="middle">
            <p align="center"><span class="italic">Rich and Judy offer prompt, 
              professional, <br />efficient, and reasonably-priced solutions <br />to home 
              repairs and remodeling.</p>
        </td>
        <td valign="top"><img src="images/cartoon.gif" width="140" height="166"></td></tr>
                <!-- END TABLE ON RIGHT-->
<!-- PUT THE BODY STUFF HERE -->
          <tr><td>
                <h3>Handyman's Favorite Tools</h3>                
                <div class='prehead'>
                    These are the tools that I own and use every day on home repairs
                    all around the city. (Click on the images to enlarge.)</div>
                <br />&nbsp;<br />                
                    <?php
                        while ($row=mysql_fetch_array($item)) { ?>
                <div id="worm-fact" class="sale saleTitle">
                        <?= $row['heading']; ?>
                </div>
                <div class="saleOtherStuff ftSale">
                    <div class="ftTn" onclick="showFullImage('<?= $row['mnemonic']; ?>')">
                        <img src="/images/rec_tools/<?= $row['mnemonic']; ?>_tn.jpg" />
                    </div>
                    <div class="ftDiv sale saleDescription">
                        <?= $row['description']; ?>
                    </div>
                </div>
                <div class="ftLink">
                    <?= $row['amazon']; ?>
                </div>
                        <?php }
                ?>


                    &nbsp;<br />
              </td></tr>

          
    
<!-- END OF BODY STUFF -->
</table>
    </tr>
</table>

</table>
<div class="ftFullSize">
</div>

</body>
</html>

<!--END OF BODY-->