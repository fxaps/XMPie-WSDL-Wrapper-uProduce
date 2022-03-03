<?php


 function autoload_a4e3282fe064dec32122dfb6208fcb8d($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\XMPieInternalAPI_SSP\XMPieInternalAPI_SSP' => __DIR__ .'/XMPieInternalAPI_SSP.php',
        'XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\XMPieInternalAPI_SSP\GetIDByGUID' => __DIR__ .'/GetIDByGUID.php',
        'XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\XMPieInternalAPI_SSP\GetIDByGUIDResponse' => __DIR__ .'/GetIDByGUIDResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_a4e3282fe064dec32122dfb6208fcb8d');

// Do nothing. The rest is just leftovers from the code generation.
{
}
