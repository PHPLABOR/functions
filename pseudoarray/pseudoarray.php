<?php
/* Copyright 2024 Thomas Trautner - PHPLABOR (www.phplabor.de) under MIT License */
/**
 * Collects several values in one variable
 * @param $array string Collective variable (pseudoarray)
 * @param $add string Value to be added
 * @param $separator string Separator
 * @return string new pseudoarray
 */
function pseudoarray($array , $add , $separator = "|") {
    if ($array != "") $array .= $separator;
    $array .= $add;
    return $array;
}