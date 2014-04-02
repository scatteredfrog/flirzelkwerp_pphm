<html><!-- #BeginTemplate "/Templates/template0.dwt" -->
<head>    
<!-- #BeginEditable "doctitle" --> 
<title>Portage Park Handyman - What Have I Learned Today?</title>
<!-- #EndEditable --> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="keywords" content="Handyman Chicago Portage Park Repair Remodeling Home Repair Improvement Richard Escallier">
<link rel="stylesheet" type="text/css" href="rich.css">
    <?php
    include "tip.php";
    $todayTip = new tip();
    $tips=$todayTip->getNewTip();
?>

</head>

<body bgcolor="#CCCCCC">
 
<p>&nbsp;</p>
<table width="800" border="0" cellspacing="2" cellpadding="2" align="center" bgcolor="#FFFFFF">
<!--BEGINNING OF BODY-->
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
<!-- PUT THE BODY STUFF HERE -->
          <tr><td>
                  <h3>What Have I Learned Today?</h3>

                  <dl>
                      
                      <?php
                            foreach($tips as $value)
                            {
                                $month=substr($value[0],5,2);
                                $day=substr($value[0],8,2);
                                $year=substr($value[0],0,4);
                                if (substr($day,0,1)==="0")
                                $day=substr($day,1,1);
                                echo "<dt>";
                                switch ($month)
                                {
                                    case "01":
                                        echo "January ";  break;
                                    case "02":
                                        echo "February "; break;
                                    case "03":
                                        echo "March ";    break;
                                    case "04":
                                        echo "April ";    break;
                                    case "05":
                                        echo "May ";      break;
                                    case "06":
                                        echo "June ";     break;
                                    case "07":
                                        echo "July ";     break;
                                    case "08":
                                        echo "August ";   break;
                                    case "09":
                                        echo "September ";break;
                                    case "10":
                                        echo "October ";  break;
                                    case "11":
                                        echo "November "; break;
                                    case "12":
                                        echo "December "; break;
                                      }                                
                                echo $day.", ".$year."</dt>";
                                echo $value[1]."<br>&nbsp;<br>";
                            }
                            ?>
              </dl>
              </td></tr>
<!-- END OF BODY STUFF -->
</table>
    </tr>
</table>

</table>
</body>
</html>

<!--END OF BODY-->