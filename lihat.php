<?php 
    echo "<head><Isi</title></head>";
    $fileku = fopen("data.txt", "r");
    echo "<h1><center>Isi Data</center></h1>";
    echo "<center><a href='form.html'> <b>::Isi Form::</b></a></center>";
    echo "<hr>";
    echo "<table border='1' align='center' width='70%'>";
    echo "<tr><td>NIM</td><td>Nama</td><td>Kota</td></tr>";

    while($isi = fgets($fileku)){
        $pisah = explode(';', $isi);
        echo "<tr><td>$pisah[0]</td><td>$pisah[1]</td><td>$pisah[2]</td></tr>";
    }
    echo "</table>";
?>