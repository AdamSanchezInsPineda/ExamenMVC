<p>Consulta multes del vehicle amb matrícula: <?php echo $_SESSION["matricula"] ?></p>

<table border="1">
    <tr>
        <th>Data</th>
        <th>Tipus de multa</th>
        <th>Estat</th>
    </tr>

<?php
    foreach ($multas as $row){
        echo "<tr>";
        foreach ($row as $key => $value) {

            if ($key == "id_multa"){
                $id = $value;
            } 
            else if ($key == "tipo_multa"){
                switch ($value) {
                    case 1:
                        echo "<td>Lleu</td>";
                        break;
                    case 2:
                        echo "<td>Greu</td>";
                        break;
                    case 3:
                        echo "<td>Molt greu</td>";
                        break;
                }
            } else if ($key == "pagada"){
                if ($value == 0){
                    echo "<td><a href='/pagar/$id'>Fer el pagament</a></td>";
                } else {
                    echo "<td><p style='color: blue;'>Pagada</p></td>";
                }
            } else {
                echo "<td>$value</td>";
            }
        }
        echo "</tr>";
    }
?>

</table>

<a href="/logout">Sortir de la sessió</a>