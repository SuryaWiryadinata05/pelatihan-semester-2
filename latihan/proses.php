<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php

if(isset($_POST["kirim"])){
       $aa = $_POST["ulang"];
       $ua = $_POST["nomor"];
       if($aa == 1){
           echo "Perulangan while bilangan ganjil<br>";
        
        $x = 1; 
        while($x <= $ua) {
            echo "Bilangan ke - $x <br>";
            $x+=2;
        } 
       }
       elseif ($aa == 2){
           echo "Perulangan While genap<br>";
       $a= 2;
       while($a <= $ua){
           echo "Bilangan Ke - $a";
           $a+=2;
       }
    }
       elseif($aa == 3){
           echo "Perulangan while berurutan";

           $x = 1;
           while($x <= $ua){
               echo"Bilangan ke - $x";
               $x++;
           }
       }
       elseif($aa == 4){
           echo "Perulangan Dowhile berurutan<br>";
           $i = 1;
       do{
           echo $i . "<br> ";
           $i++;
       } 
       while($i <= $ua);
    }
    
       elseif ($aa == 5){
           echo "Perulangan Dowhile ganjil <br>";
           $i = 1;
           do{
               echo $i . "<br> ";
               $i+=2;;
           } 
           while($i <= $ua);
       }
       elseif ($aa == 6){
           echo "Perulangan Dowhile genap <br>";
           $i = 2;
           do{
               echo $i . "<br> ";
               $i+=2;
           } 
           while($i <= $ua);
    }
       elseif($aa == 7){
            echo "Perulangan inputan segitiga siku-siku <br>";
            for ($i = 1; $i <= $ua; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    echo "&nbsp";
                    echo "$j";
                }
                echo "<br>";
            }
            
            echo "</center>";
            
       }
       elseif ($aa == 8) {
        echo "<center>";
        echo "<h3>Segitiga Sama Kaki Terbalik</h3> <br>";
        for ($x = $ua; $x >= 1; $x--){
            for ($v = $ua; $v > $x; $v--){
                echo " ";
            }for ($c = 1; $c <= $x; $c++){
                echo "$c ";
            }
            echo "<br>";
        }
        echo "</center>";
    }
    elseif($aa == 9){
        echo "Perulangan inputan kebalikan dari nomor 1<br>";
        for ($i = $ua; $i >= 1; --$i) {
            for ($j = $ua; $j >= $i; --$j) {
                echo "$j &nbsp";
            }
            echo '<br>';
        }
    }
           
}
