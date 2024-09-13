<?php 

function getWelcomeHome() {
    $result = selectSQLUnico("SELECT welcome_text FROM welcome WHERE id=1");
    return $result["welcome_text"];
} 

?>