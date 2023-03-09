<?php


 function autoload_c857e780d540f8f02b0b37f5054e4435($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uProduce\v_12_0_1\UndocumentedServices\XMPieInternalAPI_SSP\XMPieInternalAPI_SSP' => __DIR__ .'/XMPieInternalAPI_SSP.php',
        'XMPieWsdlClient\XMPie\uProduce\v_12_0_1\UndocumentedServices\XMPieInternalAPI_SSP\GetIDByGUID' => __DIR__ .'/GetIDByGUID.php',
        'XMPieWsdlClient\XMPie\uProduce\v_12_0_1\UndocumentedServices\XMPieInternalAPI_SSP\GetIDByGUIDResponse' => __DIR__ .'/GetIDByGUIDResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_c857e780d540f8f02b0b37f5054e4435');

// Do nothing. The rest is just leftovers from the code generation.
{
}
