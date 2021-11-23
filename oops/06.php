<?php
class Jewellery {
    function Necklace(){  
        echo " it is Necklace";  
  }     
}


class Necklace extends Jewellery {  

    function Jewellery (){  
        echo "it is Jewellery";  
  }  

}
class Bracelet extends Jewellery {  

    function Bracelet(){  
        echo "it is Bracelet";  
  }  

}

$n = new Necklace("gold");
$n-> Jewellery();
$b = new Bracelet(); 
?>
