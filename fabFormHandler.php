<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php
        $error_exists   = false;
        $masterEmail    = "handyman4chicago@aol.com";
         include "fabForm.php";
        $name           = $_POST['cName'];
        $neighborhood   = $_POST['cNeighborhood'];
        $areaCode       = $_POST['cAreaCode'];
        $phone          = $_POST['cNumber'];
        $email          = $_POST['cEmail'];
        $from           = $name.' <'.$email.'>';
        $topic          = "(WEB) ".$_POST['cTopic'];
        $additional     = $_POST['cAdditional'];
        $isValid        = $_POST['isValid'];
        $headers        = "MIME-Version: 1.0" . "\r\n";
        $headers       .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
        $subject        = strtoupper($neighborhood)." -- ".$topic;
        $body           = "Name: ".$name."\n\n";
        $body           = $body."Neighborhood: ".$neighborhood."\n\n";
        $body           = $body."Phone number: (".$areaCode.") ".$phone."\n\n";
        $body           = $body."E-mail address: ".$email."\n\n";
        $body           = $body."Needs help with: ".$topic."\n\n";
        
        if(!empty($additional))
            $body       = $body.$additional;
        
        $body          .= "\n\nIP address: ".$_SERVER['REMOTE_ADDR']."\n";
        $body          .= "Browser: ".$_SERVER['HTTP_USER_AGENT']."\n\n";
        
        if (empty($name)) {
            $errors = "Please provide your name.<br />";
            $error_exists = true;
        }
        
        if (!ctype_digit($areaCode) || strlen($areaCode) != 3 || strlen($phone) < 7) {
            $errors .= "Please provide your phone number, including area code.<br />";
            $error_exists = true;
        }
        
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors .= "Please enter a valid e-mail address.<br />";
            $error_exists = true;
        }
        
        if (empty($neighborhood)) {
            $errors .= "Please provide your neighborhood or nearest major intersection.<br/>";
            $error_exists = true;
        }
        
        if (empty($topic)) {
            $errors .= "Please tell us what you need help with.<br/>";
            $error_exists = true;
        }
        
        ?>
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

        <title>Request for Information</title>
    </head>
    <body bgcolor="#cccccc">
        <?php
        $f=new fabForm();
        $f->setSubject($subject);
        $f->setBody($body);
        $f->setEmail($email);
        $f->setFrom($from);
        ?>
        <p>&nbsp;</p>
<table width="800" border="0" cellspacing="2" cellpadding="2" align="center" bgcolor="#FFFFFF">
<table align="center" bgcolor="#FFFFFF">
    <tr>
        <td valign="top"><table width="192"> <!-- BEGIN LINK TABLE W/LOGO -->
        <td><img src="images/logo_trans_r1_c1.gif"></img><br />
        <? include "links.html"; ?>
        </td></table><!-- END LINK TABLE W/LOGO -->
            <td valign="top"><table width="608" height="118"> <!-- BEGIN TABLE ON RIGHT-->
        <td valign="middle">
            <p align="center"><span class="italic">Rich Escallier offers prompt, 
              professional, <br />efficient, and reasonably-priced solutions <br />to home 
              repairs and remodeling.</p>
        </td>
        <td valign="top"><img src="images/cartoon.gif" width="140" height="166"></td></tr>
                <!-- END TABLE ON RIGHT-->
                <tr><td>
        <?php
        if ($error_exists) {
            echo $errors;
            echo "&nbsp;<br />";
            echo "<a href='contact.php'>Click here to try again.</a>";
        } else {
            echo $f->sendMail($masterEmail);
        }
        ?>
            </td></tr>

          
    
<!-- END OF BODY STUFF -->
</table>
    </tr>
</table>

                    </body>
</html>
