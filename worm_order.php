<?php     session_start(); ?>

<html><!-- #BeginTemplate "/Templates/template0.dwt" -->
<head>
<!-- #BeginEditable "doctitle" --> 
<title>Portage Park Handyman - Order Worm Bins</title>
<!-- #EndEditable --> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="keywords" content="Handyman Chicago Portage Park Repair Remodeling Home Repair Improvement Richard Escallier">
<style type="text/css">
<!--
.form {  font-family: "Franklin Gothic Medium", "Trebuchet MS"; font-size: 13pt}
-->
</style>
    <link rel="stylesheet" type="text/css" href="rich.css">
    <link rel="stylesheet" type="text/css" href="css/worm_order.css">
    <script src="js/jquery-1.8.0.min.js"></script>
    <script src="js/jquery.maskedinput-1.2.2.js"></script>
    <script src="js/worm_order.js"></script> 
</head>

<body bgcolor="#CCCCCC">
<?php
    $link=mysql_connect("db401201757.db.1and1.com", "dbo401201757", "pphmdb42");
    if(!$link) {
      die('Count not connect: '.mysql_error());
    }
    mysql_select_db("db401201757") or die(mysql_error());

    $item = mysql_query("SELECT product_name,price,product_id FROM worm_bins");
?>
<p>&nbsp;</p>
<table width="800" border="0" cellspacing="2" cellpadding="2" align="center" bgcolor="#FFFFFF">
<table align="center" bgcolor="#FFFFFF">
    <tr>
        <td valign="top"><table width="192"> <!-- BEGIN LINK TABLE W/LOGO -->
        <td><img src="images/logo_trans_r1_c1.gif" /><br />
        <?php include "links.html"; ?>
        </td></table><!-- END LINK TABLE W/LOGO -->
            <td valign="top"><table width="608" height="118"> <!-- BEGIN TABLE ON RIGHT-->
        <td valign="middle">
            <p align="center"><span class="italic">Rich Escallier offers prompt, 
              professional, <br />efficient, and reasonably-priced solutions <br />to home 
              repairs and remodeling.</p>
        </td>
        <td valign="top"><img src="images/cartoon.gif" width="140" height="166"></td></tr>
                <!-- END TABLE ON RIGHT--><!-- BEGIN FORM -- BEGIN FORM -- BEGIN FORM -- BEGIN FORM -- BEGIN FORM -- BEGIN FORM -->
<form name="wormBin" id="worm_bin" method="post" action="fabFormHandler.php" >
    <table cellpadding="6">
        <tr>
            <td colspan="2" id="form_width"><h3>Worm Factory 360 Order Form</h3></td>
        </tr>
        <tr>
            <td class="form">Your name:</td>
            <td>
                <input type="text" name="first_name" id="first_name" placeholder="First Name" class="name req"/> 
                <input type="text" name="last_name" id="last_name" placeholder="Last Name" class="name req"/>
            </td>
        </tr>
        <tr>
            <td class="form">Your address:</td>
            <td>
                <input type="text" class="req" name="street" id="street" size="31" placeholder="Street address"><br />
                <input type="text" class="req" name="town" id="town" placeholder="City" />, 
                <input type="text" class="req" name="state" id="state" maxlength="2" /> <input type="text" name="zip" id="zip" placeholder="ZIP" />
            </td>
        </tr>
        <tr>
            <td class="form">Your phone number:<br /><span class="footer"></span></td>
            <td><input type="text" id="phone" name="phone" class="req"></td>
        </tr>
        <tr>
            <td class="form">Your e-mail address:</td>
            <td><input type="text" id="email" name="email" size="31" class="req"></td>
        </tr>
            <td class="form">How did you hear of us?</td>
            <td><input type="text" id="how_heard" name="how_heard" size="31"></td>
        </tr>
        <tr>
            <td class="form">Are you associated with a neighborhood garden club? (If so, which one?)</td>
            <td><input type="text" id="garden_club" name="garden_club" size="31"></td>
        </tr>
        <tr>
            <td class="form" colspan="2">What would you like to order?</td>
        </tr>
        <tr>
            <td colspan="2">
                <div id="worm_form">
                    <div class="wormRow">
                        <div class="wormProduct wormBold">
                            Product
                        </div>
                        <div class="wormPrice wormBold">
                            Price
                        </div>
                        <div class="wormNumber wormBold">
                            Quantity
                        </div>
                        <div class="wormSubtotal wormBold">
                            Subtotal
                        </div>
                    </div>
                    
<?php
    $rowCount = 0;
    
    while ($row=mysql_fetch_array($item)) {
        $_SESSION['roll_plymouth_rock'][] = $row;
        $worm_class = $rowCount > 0 ? 'wormStripe' : '';
        echo "<div class='wormRow product ".$worm_class."' id='".$row['product_id']."'><div class='wormProduct'>".$row['product_name']."</div>";
        echo "<div class='wormPrice' id='pr_".$row['product_id']."'>$".money_format('%i', $row['price'])."</div>";
        echo "<div class='wormNumber'>";
        echo "<input type='number' name='nb_".$row['product_id']."' min='0' value='0' step='1' id='nb_".$row['product_id']."' /></div>";
        echo "<div class='wormSubtotal wormSubtotalAmount' id='st_".$row['product_id']."'></div></div>";
        $rowCount++;
        $rowCount = $rowCount > 1 ? 0 : $rowCount;
    }
    
    mysql_close();

?>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="button" value="Reset Form" onclick="clearForm();"/> <input type="button" value="Submit" onclick="submitOrder();" /> 
                <span id="total_span">Your total: <span id="your_total"></span></span></td>
        </tr>
        <tr>
            <td colspan="2"><hr /></td>
        </tr>
    </table>
        <input type="hidden" id="isValid" name="isValid" value="no" />
</form>
<!-- END FORM -- END FORM -- END FORM -- END FORM -- END FORM -- END FORM -- END FORM -->
<!-- #BeginEditable "Paragraph" --> 
      <table border="0" cellspacing="0" cellpadding="2" align="center">
        <tr> 
          <td><table><tr>
          <td><p>Richard Escallier<br>
            4854 W. Cullom Ave.<br>
            Chicago, IL 60641</p></td></tr>
              </table></td><td width="30"></td>
              <td><table>
                      <tr><td><p>phone: (773) 282-5857<br />
                          fax: (773) 202-8020<br />
                          cell: (773) 458-3212<br /></td></tr>
                  </table>
              </td>
        </tr>
        <tr><td colspan="2"><p>e-mail: <a href="mailto:handyman4chicago@aol.com">handyman4chicago@aol.com</a></p></td></tr>
      </table>
      <!-- #EndEditable -->
<p align="center">&nbsp;</p>
    </td>
  </tr>
  <tr> 
    <td colspan="2"> 
      <hr>
      <p align="center"><span class="footer">Disclaimer: Portage Park Handyman 
        is not liable for any accidents or losses caused by information on this 
        website.</span></p>
      <p align="center"><span class="footer"><a href="mailto:handyman4chicago@aol.com">Contact</a> 
        Webmaster</span></p>
      <p align="center"><span class="footer">Design: M. Pollock and <a href="http://www.fab4it.com" target="_blank">Fab 4 I.T.</a><br />
        Copyright: Richard Escallier 2006</span></p>
<!--      <p align="center">&nbsp;</p> -->
    </td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
<!-- #EndTemplate --></html>
