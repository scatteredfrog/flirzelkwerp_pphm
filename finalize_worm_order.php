<?php
session_start();

$order_string = "";

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$from = $first_name." ".$last_name." <".$email.">";
$street = $_POST['street'];
$town = $_POST['town'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$garden_club = $_POST['garden_club'];
$how_heard = $_POST['how_heard'];
$this_order_string = '';
$n = "<br />";
//$n = "\n";
foreach($_SESSION['current_order'] as $key => $value) {
    $this_order_string .= $value;
    $value_parts = explode ('~',$value);
    $order_string[]['id'] = $value_parts[0];
    $order_string[]['quantity'] = $value_parts[1];
    foreach($_SESSION['roll_plymouth_rock'] as $skey => $sval) {
        if ($sval['product_id'] === $value_parts[0]) {
            $this_order_string .= '~'.$sval['price'].'_';
            break;
        }
    }
}

$mail_to = 'handyman4chicago@aol.com';
$mail_cc = 'seancourtney@fab4it.com';
$mail_subject = 'WORM BIN ORDER';
$mail_body_prefix  = "CUSTOMER INFORMATION:<br />&nbsp;".$n;
$mail_body_prefix .= "NAME: ".$first_name." ".$last_name.$n;
$mail_body_prefix .= "E-MAIL: ".$email.$n;
$mail_body_prefix .= "PHONE: ".$phone.$n;
$mail_body_prefix .= "ADDRESS: ".$street.$n;
$mail_body_prefix .= "ADDRESS: ".$town.", ".$state." ".$zip.$n;
$mail_body_prefix .= "GARDEN CLUB: ".$garden_club.$n;
$mail_body_prefix .= "HOW CUSTOMER HEARD OF PPHM: ".$how_heard.$n;
$mail_body_prefix .= "<hr />".$n;
$mail_body = "";

foreach($order_string as $key => $value) {
    foreach ($value as $new_value) {
        $mail_order[] = $new_value;
    }
}

$item = "";
$price = (float)0;
$total = (float)0;

foreach($mail_order as $key => $value) {
    
    if ($key % 2 === 0) {
        foreach($_SESSION['roll_plymouth_rock'] as $skey => $sval) {
            if ($sval['product_id'] === $value) {
                $item = $sval['product_name'];
                $price = $sval['price'];
            }
        }
//        echo "Item: ".print_r($value,1)." (";
    } else {
        $subtotal = $price * $value;
        $total += $subtotal;
        $mail_body .= $item.': '.$value.' at $'.money_format('%n',$price).' each -- $'.money_format('%n',$subtotal).$n;
    }
}
$mail_body .= $n."Order total: $".money_format('%n',$total);

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//$headers .= 'To: ' .$mail_to. "\r\n";
$headers .= 'From: ' .$from. "\r\n";
$headers .= 'Bcc: ' .$mail_cc. "\r\n";

// send mail to Rich
mail($mail_to, $mail_subject, $mail_body_prefix.$mail_body, $headers);

// send confirmation mail to user
$mail_user_body = "Thank you for your order, ".$_POST['first_name'].'.'.$n.$n;
$mail_user_body .= "You will receive a PayPal request for the total amount in your e-mail soon.".$n;
$mail_user_body .= $n."Here is your order:".$n."<hr />".$n;

$mail_conf_subject = "Thank you for your order from Portage Park Handyman!";
$conf_headers  = 'MIME-Version: 1.0' . "\r\n";
$conf_headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$conf_headers .= 'From: Portage Park Handyman <handyman4chicago@aol.com> \r\n';
$conf_headers .= 'Bcc: ' .$mail_cc. "\r\n";

mail($email, $mail_conf_subject, $mail_user_body.$mail_body, $conf_headers);

$conn =new mysqli("db401201757.db.1and1.com", "dbo401201757", "pphmdb42","db401201757");

if($conn->connect_error) {
  die('Count not connect: '.$conn->connect_error);
}
$sql = "INSERT INTO wbOrderHistory (customer_last_name,customer_first_name,customer_phone,customer_email,customer_street,customer_town,customer_state,customer_zip,order_string,order_total,order_date) "
        . "VALUES ('$last_name','$first_name','$phone','$email','$street','$town','$state','$zip','$this_order_string','$total',UTC_TIMESTAMP())";

if ($conn->query($sql) !== TRUE) {
    echo "Error: ".$conn->error;
}
$conn->close();
echo "Thank you for your order, ".$_POST['first_name'].".";