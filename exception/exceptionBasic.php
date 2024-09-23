<?php

function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        throw new Exception("Division(%) By Zero(0)");
    }
    return $dividend / $divisor;
}

try {
    echo divide(2, 3);
} catch (Exception $e) {
    $code = $e->getCode();
    $message = $e->getMessage();
    $file = $e->getFile();
    $line = $e->getLine();
    echo 'Exception thrown in ' . $file . ' on line ' . $line .
        ': [' . $code . '] ' . $message . '<br>';
    echo 'Unable to divide<br>';
} finally {
    echo '<br>Finish Process!<br>';
}
