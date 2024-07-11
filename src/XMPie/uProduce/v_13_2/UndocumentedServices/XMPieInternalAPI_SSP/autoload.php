<?php


 function autoload_811d27d9ae62dfa87d26d46491ebb532($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\XMPieInternalAPI_SSP\XMPieInternalAPI_SSP' => __DIR__ .'/XMPieInternalAPI_SSP.php',
        'XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\XMPieInternalAPI_SSP\GetIDByGUID' => __DIR__ .'/GetIDByGUID.php',
        'XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\XMPieInternalAPI_SSP\GetIDByGUIDResponse' => __DIR__ .'/GetIDByGUIDResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_811d27d9ae62dfa87d26d46491ebb532');

// Do nothing. The rest is just leftovers from the code generation.
{
}
