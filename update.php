<?php

    include_once("koneksi.php");

    $kategori_id = 5;
    $kategori = "Kipas";
    $status = "on";

    $pdoStatement = $koneksiPDO->prepare("UPDATE kategori SET kategori=:kategori, status=:status WHERE kategori_id=:kategori_id");
    $array_execute[":kategori_id"] = $kategori_id;
    $array_execute[":kategori"] = $kategori;
    $array_execute[":status"] = $status;

    $pdoStatement->execute($array_execute);