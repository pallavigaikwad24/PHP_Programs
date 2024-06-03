<?php

function isvalid ($val) { 
    return $val % 2 === 0 ? true : false;
}

function getVal ($value, $isValidFun) {
    return $isValidFun ($value);
}

echo getVal (4, "isvalid");

?>