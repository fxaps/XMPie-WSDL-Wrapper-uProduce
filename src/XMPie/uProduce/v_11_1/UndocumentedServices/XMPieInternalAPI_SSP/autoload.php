<?php


 function autoload_4a0e2080adfbe62c15185005d02b6717($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uProduce\v_11_1\UndocumentedServices\XMPieInternalAPI_SSP\XMPieInternalAPI_SSP' => __DIR__ .'/XMPieInternalAPI_SSP.php',
        'XMPieWsdlClient\XMPie\uProduce\v_11_1\UndocumentedServices\XMPieInternalAPI_SSP\GetIDByGUID' => __DIR__ .'/GetIDByGUID.php',
        'XMPieWsdlClient\XMPie\uProduce\v_11_1\UndocumentedServices\XMPieInternalAPI_SSP\GetIDByGUIDResponse' => __DIR__ .'/GetIDByGUIDResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_4a0e2080adfbe62c15185005d02b6717');

// Do nothing. The rest is just leftovers from the code generation.
{
}
