<?php

function exceptions_error_handler($severity, $message, $filename, $lineno) {
    throw new ErrorException($message, 0, $severity, $filename, $lineno);
}

set_error_handler('exceptions_error_handler');

function inverse($x) {
    if (!$x) {
        throw new Exception('Division by zero.');
        echo 55555;
    }
    return 1/$x;
}

try {
    echo inverse(5) . "\n";
    echo 111111111111;
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
} finally {
    echo "First finally.\n";
}

try {
    echo inverse(0) . "\n";
    echo 2222222222;
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
} finally {
    echo "Second finally.\n";
}


try {
    throw new Exception("caught for demonstration");                    // 1
    // code below an exception inside a try block is never executed
    echo "you won't read this." . PHP_EOL;
} catch (Exception $e) {
    // you may want to react on the Exception here
    echo "exception caught: " . $e->getMessage() . PHP_EOL;             // 2
}    
// execution flow continues here, because Exception above has been caught
echo "yay, lets continue!" . PHP_EOL;                                   // 3
strpos();
throw new Exception("uncaught for demonstration");                      // 4, end

// execution flow never reaches this point because of the Exception thrown above
// results in "Fatal Error: uncaught Exception ..."
echo "you won't see me, too" . PHP_EOL;
    echo inverse(0) . "\n";