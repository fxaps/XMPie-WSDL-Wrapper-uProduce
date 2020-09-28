<?php


 function autoload_4ac02ceb1cd8f89fffcf17bd72fb78dd($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\MessagesUtils_SSP\MessagesUtils_SSP' => __DIR__ .'/MessagesUtils_SSP.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\MessagesUtils_SSP\DecodeMessage' => __DIR__ .'/DecodeMessage.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\MessagesUtils_SSP\DecodeMessageResponse' => __DIR__ .'/DecodeMessageResponse.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\MessagesUtils_SSP\DecodeContext' => __DIR__ .'/DecodeContext.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\MessagesUtils_SSP\DecodeContextResponse' => __DIR__ .'/DecodeContextResponse.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\MessagesUtils_SSP\DecodeSeverity' => __DIR__ .'/DecodeSeverity.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\MessagesUtils_SSP\DecodeSeverityResponse' => __DIR__ .'/DecodeSeverityResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_4ac02ceb1cd8f89fffcf17bd72fb78dd');

// Do nothing. The rest is just leftovers from the code generation.
{
}