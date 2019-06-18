<?php

function conn() {
    $cnx = mysqli_connect("localhost", "id10000585_heyimchara", "modaslm123", "id10000585_basemodaslm");
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}