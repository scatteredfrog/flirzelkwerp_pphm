<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php
        $submitted=$_POST['tipsubmit']; // Did we get to this page via clicking the "Submit" button?
        $tip=$_POST['tip'];
        include "tip.php";
        ?>
        <title></title>
    </head>
    <body>
        <?php
        $myTip=new tip();

        if ($submitted!="Submit My Tip")
        {
        ?> 
        <form name="tip" method="post" action="entertip.php">
            Enter today's tip - please do NOT use ampersands ("&amp;")!:<br>
            <textarea name="tip" rows="4" cols="45"></textarea>
            <br>
            <input type="submit" value="Submit My Tip" name="tipsubmit">
        </form>
        <?php
        }
        else
        {
            $myTip->setTip($tip);
            echo 'Tip submitted! ';           
        }
        ?>
    </body>
</html>
