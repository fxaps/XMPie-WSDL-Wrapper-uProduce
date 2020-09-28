<?php


 function autoload_1c7430048cd14c6088629f83740c74a0($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\XMPieInternalAPI_SSP\XMPieInternalAPI_SSP' => __DIR__ .'/XMPieInternalAPI_SSP.php',
        'XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\XMPieInternalAPI_SSP\GetIDByGUID' => __DIR__ .'/GetIDByGUID.php',
        'XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\XMPieInternalAPI_SSP\GetIDByGUIDResponse' => __DIR__ .'/GetIDByGUIDResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_1c7430048cd14c6088629f83740c74a0');

// Do nothing. The rest is just leftovers from the code generation.
{
}
