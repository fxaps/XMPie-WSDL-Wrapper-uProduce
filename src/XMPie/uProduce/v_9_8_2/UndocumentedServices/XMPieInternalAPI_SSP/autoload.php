<?php


function autoload_f8a0478116a281e3683100c6a6557769($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\XMPieInternalAPI_SSP\XMPieInternalAPI_SSP' => __DIR__ . '/XMPieInternalAPI_SSP.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\XMPieInternalAPI_SSP\GetIDByGUID' => __DIR__ . '/GetIDByGUID.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\XMPieInternalAPI_SSP\GetIDByGUIDResponse' => __DIR__ . '/GetIDByGUIDResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    }
}

spl_autoload_register('autoload_f8a0478116a281e3683100c6a6557769');

// Do nothing. The rest is just leftovers from the code generation.
{
}
