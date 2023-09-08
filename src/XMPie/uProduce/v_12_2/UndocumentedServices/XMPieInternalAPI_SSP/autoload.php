<?php


 function autoload_425fc5727daf5658dc01a7d275b054dc($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\XMPieInternalAPI_SSP\XMPieInternalAPI_SSP' => __DIR__ .'/XMPieInternalAPI_SSP.php',
        'XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\XMPieInternalAPI_SSP\GetIDByGUID' => __DIR__ .'/GetIDByGUID.php',
        'XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\XMPieInternalAPI_SSP\GetIDByGUIDResponse' => __DIR__ .'/GetIDByGUIDResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_425fc5727daf5658dc01a7d275b054dc');

// Do nothing. The rest is just leftovers from the code generation.
{
}
