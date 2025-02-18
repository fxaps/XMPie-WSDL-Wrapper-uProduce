<?php


 function autoload_6ea235bf7b351c670a4395d2185d51c6($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\XMPieInternalAPI_SSP\XMPieInternalAPI_SSP' => __DIR__ .'/XMPieInternalAPI_SSP.php',
        'XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\XMPieInternalAPI_SSP\GetIDByGUID' => __DIR__ .'/GetIDByGUID.php',
        'XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\XMPieInternalAPI_SSP\GetIDByGUIDResponse' => __DIR__ .'/GetIDByGUIDResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_6ea235bf7b351c670a4395d2185d51c6');

// Do nothing. The rest is just leftovers from the code generation.
{
}
