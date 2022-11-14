<?php


 function autoload_ae74fd9980570831fbb9c4222e514321($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\XMPieInternalAPI_SSP\XMPieInternalAPI_SSP' => __DIR__ .'/XMPieInternalAPI_SSP.php',
        'XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\XMPieInternalAPI_SSP\GetIDByGUID' => __DIR__ .'/GetIDByGUID.php',
        'XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\XMPieInternalAPI_SSP\GetIDByGUIDResponse' => __DIR__ .'/GetIDByGUIDResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_ae74fd9980570831fbb9c4222e514321');

// Do nothing. The rest is just leftovers from the code generation.
{
}
