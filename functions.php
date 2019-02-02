<?php
function sanitize($value)
{
    $value = trim($value);
    return htmlspecialchars($value, ENT_QUOTES);
}