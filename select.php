<?php

    include_once("koneksi.php");

    $pdoStatement = $koneksiPDO->prepare("SELECT * FROM kategori where status=:status");
    $array_execute[":status"] = "off";
    $pdoStatement->execute($array_execute);

    $result = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);

    // echo "<pre>";
    // print_r($result);
    // echo "</pre>";

?>


<table border="1px" width="500px">
    <tr>
        <th>No</th>
        <th>Kategori</th>
        <th>Status</th>
    </tr>

    <?php
        $no=1;
        foreach ($result as $rows) {
            echo "<tr>
                <td>$no</td>
                <td>$rows[kategori]</td>
                <td>$rows[status]</td>
            </tr>";

            $no++;
        }
    ?>
</table>