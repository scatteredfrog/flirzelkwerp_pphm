<?php
    ini_set("max_input_time",600);
    ini_set("max_execution_time",600);
    ini_set("upload_max_filesize","2048M");
    ini_set("post_max_size","2048M");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php
        $masterEmail="webmaster@portageparkhandyman.com";
        include "fabForm.php";
        $name=$_POST['cName'];
        $neighborhood=$_POST['cNeighborhood'];
        $areaCode=$_POST['cAreaCode'];
        $phone=$_POST['cNumber'];
        $email=$_POST['cEmail'];
        $from=$name.' <'.$email.'>';
        $topic="(WEB) ".$_POST['cTopic'];
        $additional=$_POST['cAdditional'];
        $isValid=$_POST['isValid'];

        echo "Files:";
        echo print_r($_FILES,1);
        // FILE HANDLING
        $file1name=$_FILES['picture1']['name'];
        $file1type=$_FILES['picture1']['type'];
        $file1size=$_FILES['picture1']['size'];
        $file1temp=$_FILES['picture1']['tmp_name']; 
        $file2name=$_FILES["picture2"]["name"];
        $file2type=$_FILES["picture2"]["type"];
        $file2size=$_FILES["picture2"]["size"];
        $file2temp=$_FILES["picture2"]["tmp_name"]; 
        $file3name=$_FILES["picture3"]["name"];
        $file3type=$_FILES["picture3"]["type"];
        $file3size=$_FILES["picture3"]["size"];
        $file3temp=$_FILES["picture3"]["tmp_name"]; 
    
        $fp1=fopen($file1temp,"rb");
        $file1=fread($fp1,$file1size);
        $file1=chunk_split(base64_encode($file1));
        $num=md5(time());
        $now=time();
        
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: multipart/mixed; ";
        $headers .= "boundary=".$num."\r\n";
        $headers .= "--$num\r\n";
        $headers .= "Message-ID: <".$now." TheSystem@".$_SERVER['SERVER_NAME'].">\r\n";
        $headers .= "X-Mailer: PHP v".phpversion()."\r\n";   
        $headers .= "Content-Type: text/html; charset=iso-8859-1\r\n";
        $headers .= "Content-Transfer-Encoding: 8bit\r\n"; 

        $subject=strtoupper($neighborhood)." -- ".$topic;
        $body="<font size='5'>Name: ".$name."<br />&nbsp;<br />";
        $body=$body."Neighborhood: ".$neighborhood."<br />&nbsp;<br />";
        $body=$body."Phone number: (".$areaCode.") ".$phone."<br />&nbsp;<br />";
        $body=$body."E-mail address: ".$email."<br />&nbsp;<br />";
        $body=$body."Needs help with: ".$topic."<br />&nbsp;<br />";

        if(!empty($additional))
            $body=$body.$additional;
        
        $body=$body."</font>";
        $headers .= "".$body."\n";
        $headers .= "--".$num."\n";
        
        $headers  .= "Content-Type:".$file1type." ";
        $headers  .= "name=\"".$file1name."\"r\n";
        $headers  .= "Content-Transfer-Encoding: base64\r\n";
        $headers  .= "Content-Disposition: attachment; ";
        $headers  .= "filename=\"".$file1name."\"\r\n\n";
        $headers  .= "".$file1."\r\n";
        $headers  .= "--".$num."--"; 
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

<!--        <title>Request for Information</title> -->
    </head>
    <body bgcolor="#cccccc">
        <?php
        print_r($_FILES);
        if ($isValid=="yes")
        {
           $f=new fabForm();
            $f->setSubject($subject);
            $f->setBody($body);
            $f->setEmail($email);
            $f->setHeaders($headers);
            $f->setFrom($from);
        }
        fclose(fp1);
        ?>x
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
        echo $f->sendMail($masterEmail);
        ?>
            </td></tr>

          
    
<!-- END OF BODY STUFF -->
</table>
    </tr>
</table>

                    </body>
</html>
