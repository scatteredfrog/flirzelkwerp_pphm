<?php
    ini_set("max_input_time",600);
    ini_set("max_execution_time",600);
    ini_set("upload_max_filesize","2048M");
    ini_set("post_max_size","2048M");
?>
<html><!-- #BeginTemplate "/Templates/template0.dwt" -->
<head>
<script language="Javascript">
function addHyphen()
{
    var phLength=document.getElementById("cNumber").value.length;
    var addTo=document.getElementById("cNumber").value;
    if (phLength==3)
    {
        addTo=addTo+"-";
        document.getElementById("cNumber").value=addTo;
    }
    return document.getElementById("cNumber").value;
}

function fabFormValidate()
{
    // Did the user include a name?
    var userName=document.forms["contactRich"]["cName"].value;
    if (userName=="" || userName==null)
    {
            alert("Please provide your name.");
            return false;
    }
    // Did the user include a phone number and area code?
    var phoneNumber=document.forms["contactRich"]["cNumber"].value;
    var areaCode=document.forms["contactRich"]["cAreaCode"].value;
    if (phoneNumber=="" || phoneNumber==null || areaCode=="" || areaCode==null)
    {
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
    if (document.forms["contactRich"]["cTopic"].value=="null") {
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
.prominent {  font-size: 12pt}
.italic {  font-family: "Comic Sans MS"; font-size: 12pt; font-style: italic; font-weight: bold}
p {  font-family: "Franklin Gothic Medium", "Trebuchet MS"; font-size: 12pt}
.form {  font-family: "Franklin Gothic Medium", "Trebuchet MS"; font-size: 12pt}
.sidebar {  font-family: "Courier New", Courier, mono; font-size: 9pt; font-style: normal}
.footer {  font-family: "Franklin Gothic Medium", "Trebuchet MS"; font-size: x-small}
h3 {  font-family: "Franklin Gothic Medium", "Trebuchet MS"; font-size: 18pt; text-transform: uppercase; color: #333300; font-style: oblique; font-weight: bolder; text-align: left; vertical-align: baseline}
dt {  font-family: Arial, Helvetica, sans-serif; font-size: 10pt; font-style: normal; font-weight: bolder; color: #003333}
.pic_caption {  font-family: Arial, Helvetica, sans-serif; font-size: 10pt; font-style: italic}
dl {  font-family: "Franklin Gothic Medium", "Trebuchet MS"; font-size: 12pt}

-->
</style>
</head>

<body bgcolor="#CCCCCC">
 
<p>&nbsp;</p>
<table width="800" border="0" cellspacing="2" cellpadding="2" align="center" bgcolor="#FFFFFF">
<table align="center" bgcolor="#FFFFFF">
    <tr>
        <td valign="top"><table width="192"> <!-- BEGIN LINK TABLE W/LOGO -->
        <td><img src="images/logo_trans_r1_c1.gif"></img><br />
        </td></table><!-- END LINK TABLE W/LOGO -->
            <td valign="top"><table width="608" height="118"> <!-- BEGIN TABLE ON RIGHT-->
        <td valign="middle">
            <p align="center"><span class="italic">Rich Escallier offers prompt, 
              professional, <br />efficient, and reasonably-priced solutions <br />to home 
              repairs and remodeling.</p>
        </td>
        <td valign="top"><img src="images/cartoon.gif" width="140" height="166"></td></tr>
                <!-- END TABLE ON RIGHT--><!-- BEGIN FORM -- BEGIN FORM -- BEGIN FORM -- BEGIN FORM -- BEGIN FORM -- BEGIN FORM -->
<form enctype="multipart/form-data" name="contactRich" id="contactRich" method="post" action="fabFormHandlerTEST.php" onsubmit="return fabFormValidate()">
    <table cellpadding="6">
        <tr>
            <td colspan="2"><h3>Contact</h3></td>
        </tr>
        <tr>
            <td class="form">Your name:</td>
            <td><input type="text" id="cName" name="cName" size="31"></td>
        </tr>
        <tr>
            <td class="form">Neighborhood or closest major intersection:</td>
            <td><input type="text" name="cNeighborhood" size="31"></td>
        </tr>
        <tr>
            <td class="form">Your phone number:<br><span class="footer">(Include area code)</span></td>
            <td>(<input type="text" size="3" maxlength="3" name="cAreaCode"/>) <input type="text" id="cNumber" name="cNumber" size="23" maxlength="8" onkeyup="addHyphen()"></td>
        </tr>
        <tr>
            <td class="form">Your e-mail address:</td>
            <td><input type="text" name="cEmail" size="31"></td>
        </tr>
        <tr>
            <td class="form">What can we help you with?</td>
            <td><select name="cTopic">
                    <option value="null">(Please choose:)</option>
                    <option value="an estimate">Estimate</option>
                    <option value="bifold doors">Bifold doors</option>
                    <option value="broken window ropes">Broken window ropes</option>
                    <option value="door that won't stay shut">My door won't stay shut!</option>
                    <option value="noisy doors">My door is noisy!</option>
                    <option value="sticking doors">My door is sticking!</option>
                    <option value="drywall repairs">Drywall repairs</option>
                    <option value="garbage disposals">Garbage disposals</option>
                    <option value="grab bars">Grab bars</option>
                    <option value="your various services">(other)</option>
                </select></td>
        </tr>
        <tr>
            <td class="form">Any additional details?</td>
            <td><textarea name="cAdditional" cols="27" rows="4" wrap="soft"></textarea></td>
        </tr>
        <tr>
            <td class="form">Picture #1 (optional)</td>
            <td><input type="file" name="picture1" id="picture1" /></td>
        </tr>
        <tr>
            <td class="form">Picture #2 (optional)</td>
            <td><input type="file" name="picture1" id="picture1" /></td>
        </tr>
        <tr>
            <td class="form">Picture #3 (optional)</td>
            <td><input type="file" name="picture1" id="picture1" /></td>
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
                          cell: (773) 458-3212<br /></td></tr>
                  </table>
              </td>
        </tr>
        <tr><td colspan="2"><p>e-mail: <a href="mailto:handyman4chicago@gmail.com">handyman4chicago@aol.com</a></p></td></tr>
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
        Webmaster<br>
        Last updated: August 30, 2012</span></p>
      <p align="center"><span class="footer">Design: M. Pollock and <a href="http://www.fab4it.com" target="_blank">Fab 4 I.T.</a><br />
        Copyright: Richard Escallier 2006</span></p>
<!--      <p align="center">&nbsp;</p> -->
    </td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
<!-- #EndTemplate --></html>
