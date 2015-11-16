<html><!-- #BeginTemplate "/Templates/template0.dwt" -->
<head>
<!-- #BeginEditable "doctitle" --> 
<title>Portage Park Handyman - Contact Rich</title>
<!-- #EndEditable --> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="keywords" content="Handyman Chicago Portage Park Repair Remodeling Home Repair Improvement Richard Escallier">
<style type="text/css">
<!--
.form {  font-family: "Franklin Gothic Medium", "Trebuchet MS"; font-size: 12pt};
-->
</style>
<link rel="stylesheet" type="text/css" href="rich.css">
<link rel="stylesheet" type="text/css" href="css/lf_tool_form.css">
<script src="js/jquery-1.8.0.min.js"></script>
<script src="js/jquery.blockUI.js"></script>
<script src="js/lf_tool_form.js"></script>
</head>

<body bgcolor="#CCCCCC">
<p>&nbsp;</p>
<table width="800" border="0" cellspacing="2" cellpadding="2" align="center" bgcolor="#FFFFFF">
<table align="center" bgcolor="#FFFFFF">
    <tr>
        <td valign="top"><table width="192"> <!-- BEGIN LINK TABLE W/LOGO -->
        <td><img src="images/logo_trans_r1_c1.gif"></img><br />
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
<form name="contactRich" id="contactRich" method="post" action="fabFormHandler.php" enctype="multipart/form-data" onsubmit="return fabFormValidate()">
    <table cellpadding="6">
        <tr>
            <td colspan="2"><h3>Used Tool Form <input type="button" id="add_file" value="I need another picture."/></h3></td>
        </tr>
        <tr class="publicForm">
            <td class="form">Picture #1</td>
            <td><input type="file" name="picture1" id="picture1" />
        </tr>
        <tr class="publicForm">
            <td class="form">Thumbnail for Picture #1</td>
            <td><input type="file" name="thumbnail1" id="thumbnail1" />
        </tr>
        <tr class="publicForm">
            <td class="form">Name:</td>
            <td><input type="text" name="name" id="name" size="31" maxlength="255"></td>
        </tr>
        <tr class="publicForm">
            <td class="form">Category:</td>
            <td class="form">
                <input type="checkbox" id="cb_homeowner_house" name="cb_homeowner_house" /> Homeowner - House <br />
                <input type="checkbox" id="cb_homeowner_condo" name="cb_homeowner_condo" /> Homeowner - Condo <br />
                <input type="checkbox" id="cb_collector" name="cb_homeowner_house" /> Collector <br />
                <input type="checkbox" id="cb_carpenter" name="cb_homeowner_house" /> Carpenter <br />
                <input type="button" id="add_category" name="add_category" value="Add New Category" />
            </td>
        </tr>
        <tr class="publicForm">
            <td class="form">Purchase price:<br /></td>
            <td><input type="text" id="purchase_price" name="purchase_price" size="31" /></td>
        </tr>
        <tr class="publicForm">
            <td class="form">Notes:</td>
            <td><textarea name="public_notes" id="public_notes" rows="3" cols="27"></textarea></td>
        </tr>
        <tr class="publicForm">
            <td class="form">Miscellaneous:</td>
            <td><textarea name="public_misc" id="public_misc" rows="3" cols="27"></textarea></td>
        </tr>
        <tr class="privateForm">
            <td class="form">Active?</td>
            <td><input type="checkbox" name="active" id="active"></td>
        </tr>
        <tr class="privateForm">
            <td class="form">Purchased from:</td>
            <td><input type="text" name="purchased_from" id="purchased_from" size="31" maxlength="255"></td>
        </tr>
        <tr class="privateForm">
            <td class="form">Purchase date:</td>
            <td><input type="date" id="private_purchase_date" name="private_purchase_date" size="31" /></td>
        </tr>
        <tr class="privateForm">
            <td class="form">Purchase price:</td>
            <td><input type="text" id="private_purchase_price" name="private_purchase_price" size="31" value="0" maxlength="255"  /></td>
        </tr>
        <tr class="privateForm">
            <td class="form">Purchase location:</td>
            <td><input type="text" id="purchase_location" name="private_purchase_location" size="31" maxlength="255" /></td>
        </tr>
        <tr class="privateForm">
            <td class="form">Sold via:</td>
            <td><select name="sold_by" id="sold_by">
                    <option>Craigslist</option>
                    <option>eBay</option>
                    <option>tool show</option>
                    <option>yard sale</option>
            </select></td>
        </tr>
        <tr class="privateForm">
            <td class="form">Date sold:</td>
            <td><input type="date" id="date_sold" name="date_sold" size="31" /></td>
        </tr>
        <tr class="privateForm">
            <td class="form">Sale price:<br /></td>
            <td><input type="text" id="sale_price" name="sale_price" size="31" value="0" /></td>
        </tr>
        <tr class="privateForm">
            <td class="form">Sold to:<br /></td>
            <td><input type="text" id="sold_to_name" name="sold_to_name" size="31" placeholder="Name" /><br />
                <input type="text" id="sold_to_phone" name="sold_to_phone" size="31" placeholder="Phone" /><br />
                <input type="text" id="sold_to_email" name="sold_to_email" size="31" placeholder="E-mail" /></td>
        </tr>
        <tr class="privateForm">
            <td class="form">Profit / loss:</td>
            <td class="form" id="profit_loss"></td>
        </tr>
        <tr class="privateForm">
            <td class="form">Notes:</td>
            <td><textarea name="private_notes" id="private_notes" rows="3" cols="27"></textarea></td>
        </tr>
        <tr class="privateForm">
            <td class="form">Miscellaneous:</td>
            <td><textarea name="private_misc" id="private_misc" rows="3" cols="27"></textarea></td>
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
<script>
    $(document).ready(function() {
        $('#private_purchase_price,#sale_price').on('change', function() {
            $('#private_purchase_price,#sale_price').each(function () {
                $(this).val($.trim($(this).val()));
                if ($(this).val() === '') {
                    $(this).val('0');
                }
            });
            var purchase_price = $('#private_purchase_price').val().indexOf('$') === 0 ? parseFloat($('#private_purchase_price').val().substr(1)) : parseFloat($('#private_purchase_price').val());
            if (isNaN(purchase_price)) {
                alert("Please enter a valid number for purchase price.");
            }
            var sale_price = $('#sale_price').val().indexOf('$') === 0 ? parseFloat($('#sale_price').val().substr(1)) : parseFloat($('#sale_price').val());
            if (isNaN(sale_price)) {
                alert("Please enter a valid number for sale price." + sale_price);
            }
            $('#profit_loss').html('$' + (sale_price - purchase_price));
        });
        $('#add_category').on('click',function() {
            addCategory();
        });
//        $('#add_cat_cancel').on('click', function() {
//            $.unblockUI();
//        });
    });
</script>
    <div id="add_category_form">
        <form id="add_cat_form">
            <span class="form">Category to add: </span>
            <input type="text" id="category_to_add" /><br />
            &nbsp;<br />
            <input type="button" id="add_cat_cancel" value="cancel" onclick="$.unblockUI();" />
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="submit" value="Add this category" onclick="return submitCategory();" />
        </form>
    </div>

</body>
<!-- #EndTemplate --></html>
