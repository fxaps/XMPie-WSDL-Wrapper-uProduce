<?php


 function autoload_a2dbed29cda552c66f17e1d080528ab3($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\XMPieInternalAPI_SSP\XMPieInternalAPI_SSP' => __DIR__ .'/XMPieInternalAPI_SSP.php',
        'XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\XMPieInternalAPI_SSP\GetIDByGUID' => __DIR__ .'/GetIDByGUID.php',
        'XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\XMPieInternalAPI_SSP\GetIDByGUIDResponse' => __DIR__ .'/GetIDByGUIDResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_a2dbed29cda552c66f17e1d080528ab3');

// Do nothing. The rest is just leftovers from the code generation.
{
}
