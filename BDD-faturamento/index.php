<?php
try {
    $conexao = new PDO('mysql:host=localhost;dbname=faturamento2','root','');
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $consulta = $conexao -> query("SELECT*fROM product;");
    echo "<table border='1'>";
    while ($linha = $consulta -> fetch(PDO::FETCH_ASSOC)) {
    echo "<tr><td><b>Codigo:</b> {$linha['P_CODE']}</td><td><b>Descrição:</b> {$linha['P_DESCRIPT']}</td> <td><b>Data:</b>{$linha['P_INDATE']}</td> </tr></td>";
    } echo "</table>";
} catch (\Throwable $th) {
    //throw $th;
}
?>