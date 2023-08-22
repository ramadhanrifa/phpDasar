<form action="" method="post">
    <label for="">Masukan No 1</label>
    <input type="number" name="bil1" >
    <br>
    <label for="">Masukan No 2</label>
    <input type="number" name="bil2" >
    <br>
    <label for="">Masukan No 3</label>
    <input type="number" name="bil3" >
    <input type="submit" name="hasil">

</form>

<?php

if($_POST){
    $bil1 =$_POST['bil1'];
    $bil2 =$_POST['bil2'];
    $bil3 =$_POST['bil3'];
        if($bil1 > $bil2 && $bil1 >$bil3){
            echo "bilangan terbesar adalah bilangan 1 yaitu = " . $bil1;
        }
        elseif($bil2 > $bil1 && $bil2 >$bil3){
            echo "bilangan terbesar adalah bilangan 2 yaitu =  " . $bil2;
        }else{
            echo "bilangan terbesar adalah bilangan 3 yaitu = " .$bil3;
        }

}

?>