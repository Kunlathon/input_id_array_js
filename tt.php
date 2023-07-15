<meta charset="utf-8">

<?php
    $int_tt=count($_POST["txt_tt"]);
    $count=0;
    while($count<$int_tt){
        
        $txt_tt=$_POST["txt_tt"][$count]; 

        echo $txt_tt."<br>";
 
        $count=$count+1;

       
    }


    //echo $txt_tt=$_POST["txt_tt"][0]; 

   /* echo $txt_tt=$_POST["txt_tt"][0];    
    echo $txt_tt=$_POST["txt_tt"][1];    */

?>