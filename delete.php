<?php

    include_once("koneksi.php");

    $kategori_id = 5;

    $pdoStatement = $koneksiPDO->prepare("DELETE FROM kategori WHERE kategori_id=:kategori_id");
    $array_execute[":kategori_id"] = $kategori_id;

    $pdoStatement->execute($array_execute);