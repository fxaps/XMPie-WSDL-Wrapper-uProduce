<?php


 function autoload_c887929bd43354785b086fd8c08aafa5($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\EmailServices_SSP\EmailServices_SSP' => __DIR__ .'/EmailServices_SSP.php',
        'XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\EmailServices_SSP\SendMail' => __DIR__ .'/SendMail.php',
        'XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\EmailServices_SSP\SendMailResponse' => __DIR__ .'/SendMailResponse.php',
        'XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\EmailServices_SSP\SetEmailSubscriptionStatus' => __DIR__ .'/SetEmailSubscriptionStatus.php',
        'XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\EmailServices_SSP\SetEmailSubscriptionStatusResponse' => __DIR__ .'/SetEmailSubscriptionStatusResponse.php',
        'XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\EmailServices_SSP\GetEmailSubscriptionStatus' => __DIR__ .'/GetEmailSubscriptionStatus.php',
        'XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\EmailServices_SSP\GetEmailSubscriptionStatusResponse' => __DIR__ .'/GetEmailSubscriptionStatusResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_c887929bd43354785b086fd8c08aafa5');

// Do nothing. The rest is just leftovers from the code generation.
{
}
