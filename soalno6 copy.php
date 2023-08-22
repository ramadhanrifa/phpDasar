<?php
for($i = 1; $i <=10; $i++ ){
?>
<form action="" method="post">
    <label for="">Masukan Nilai</label>
    <input type="number" name="nilai">
    <input type="submit">
</form>

<?php  
if($i==1){
    $tertinggi = $nilai;
    $siswa = 1;
}if($nilai > $tertinggi ){
    $nilai = $tertinggi;
    $siswa++;
}



}?>