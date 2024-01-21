<?php

    include_once("koneksi.php");

    $kategori = "AC";
    $status = "on";

    $pdoStatement = $koneksiPDO->prepare("INSERT INTO kategori  (kategori, status) values (:kategori, :status)");
    $array_execute[":kategori"] = $kategori;
    $array_execute[":status"] = $status;

    $pdoStatement->execute($array_execute);