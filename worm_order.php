<html><!-- #BeginTemplate "/Templates/template0.dwt" -->
<head>
<script language="Javascript">
function addHyphen() {
    var phLength=document.getElementById("cNumber").value.length;
    var addTo=document.getElementById("cNumber").value;
    if (phLength==3) {
        addTo += "-";
        document.getElementById("cNumber").value=addTo;
    }
    return document.getElementById("cNumber").value;
}

function fabFormValidate() {
    // Did the user include a name?
    var userName=document.forms["contactRich"]["cName"].value;
    if (userName=="" || userName==null) {
            alert("Please provide your name.");
            return false;
    }
    // Did the user include a phone number and area code?
    var phoneNumber=document.forms["contactRich"]["cNumber"].value;
    var areaCode=document.forms["contactRich"]["cAreaCode"].value;
    if (phoneNumber=="" || phoneNumber==null || areaCode=="" || areaCode==null) {
           alert("Please include your phone number with the area code.");
           return false;
    }
    
    // Did the user provide a valid e-mail address?
    var emailAddress=document.forms["contactRich"]["cEmail"].value;
    var atCount=emailAddress.split("@").length-1;
    var lastAt=emailAddress.lastIndexOf("@");
    var isDot=emailAddress.lastIndexOf(".");
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!filter.test(emailAddress) || emailAddress=="" || emailAddress==null || emailAddress.length<5 || lastAt <0 || isDot<0 || isDot<lastAt || atCount!=1)
    {
        alert("Please provide a valid e-mail address.");
        return false;
    }
    
    // Did the user provide a neighborhood?
    var hood=document.forms["contactRich"]["cNeighborhood"].value;
    if (hood=="" || hood==null)
        {
            alert("Please provide your neighborhood or nearest major intersection.");
            return false;
        }
        
    // Did the user select a service?
    if (document.forms["contactRich"]["cTopic"].value=="null")
        {
            alert("Please tell us what you need help with.");
            return false;
        }
    
    document.getElementById("isValid").value="yes";
    return true;
}
</script> 
<!-- #BeginEditable "doctitle" --> 
<title>Portage Park Handyman - Contact Rich</title>
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
</head>

<body bgcolor="#CCCCCC">
 
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
<form name="wormBin" id="worm_bin" method="post" action="fabFormHandler.php" onsubmit="return fabFormValidate()">
    <table cellpadding="6">
        <tr>
            <td colspan="2"><h3>Worm Factory 360 Order Form</h3></td>
        </tr>
        <tr>
            <td class="form">Your name:</td>
            <td>
                <input type="text" name="first_name" id="first_name" placeholder="First Name" class="name"/> 
                <input type="text" name="last_name" id="last_name" placeholder="Last Name" class="name"/>
            </td>
        </tr>
        <tr>
            <td class="form">Your address:</td>
            <td>
                <input type="text" name="street" id="street" size="31" placeholder="Street address"><br />
                <input type="text" name="town" id="town" placeholder="City" />, 
                <input type="text" name="state" id="state" /> <input type="number" name="zip" id="zip" placeholder="ZIP" />
            </td>
        </tr>
        <tr>
            <td class="form">Your phone number:<br /><span class="footer">(Include area code)</span></td>
            <td>(<input type="text" size="3" maxlength="3" name="cAreaCode"/>) <input type="text" id="cNumber" name="cNumber" size="23" onkeyup="addHyphen()"></td>
        </tr>
        <tr>
            <td class="form">Your e-mail address:</td>
            <td><input type="text" name="cEmail" size="31"></td>
        </tr>
        <tr>
            <td class="form" colspan="2">What would you like to order?</td>
        </tr>
        <tr>
            <td colspan="2">
                <div>
                    <div class="wormRow">
                        <div class="wormProduct">
                            Worm Factory 360 - Black
                        </div>
                        <div class="wormNumber">
                            <input type="number" name="wormbin_1" min="0" value="0" id="wormbin_1" />
                        </div>
                    </div>
                    <div class="wormRow">
                        <div class="wormProduct">
                            Worm Factory 360 - Terracotta
                        </div>
                        <div class="wormNumber">
                            <input type="number" name="wormbin_2" min="0" value="0" id="wormbin_2" />
                        </div>
                    </div>
                    <div class="wormRow">
                        <div class="wormProduct">
                            Worm Factory 360 - Green
                        </div>
                        <div class="wormNumber">
                            <input type="number" name="wormbin_3" min="0" value="0" id="wormbin_3" />
                        </div>
                    </div>
                    <div class="wormRow">
                        <div class="wormProduct">
                            Blue Worm Thingy
                        </div>
                        <div class="wormNumber">
                            <input type="number" name="wormbin_4" min="0" value="0" id="wormbin_4" />
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Submit" /></td>
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
