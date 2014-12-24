<?php
session_start();
$_SESSION['current_order'] = $_POST['current_order'];
//echo "<pre>".print_r($_SESSION['roll_plymouth_rock'],1)."</pre>";
foreach($_POST['current_order'] as $order) {
    $parts = explode('~',$order);
    $this_order[] = $parts;
}
$total = 0;

foreach($this_order as $key => $val) {
    foreach($_SESSION['roll_plymouth_rock'] as $skey => $sval) {
        if ($sval['product_id'] === $val[0]) {
            $this_total = ($sval['price'] * $val[1]);
            echo $sval['product_name'].' - '.$val[1].' at $'.money_format('%n',$sval['price']).' each: $'.money_format('%n',$this_total)."\n";
            $total += $this_total;
            break;
        }
    }
}
 //echo "stuff";
//echo print_r($_SESSION['roll_plymouth_rock'],1);

echo "\nYou will receive a PayPal request via e-mail for the total amount of $".money_format('%n',$total);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

