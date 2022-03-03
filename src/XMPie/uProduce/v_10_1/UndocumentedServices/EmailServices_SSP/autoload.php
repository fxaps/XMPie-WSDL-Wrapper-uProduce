<?php


 function autoload_7614f38e200b7965273dd07980ec2df2($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\EmailServices_SSP\EmailServices_SSP' => __DIR__ .'/EmailServices_SSP.php',
        'XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\EmailServices_SSP\SendMail' => __DIR__ .'/SendMail.php',
        'XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\EmailServices_SSP\SendMailResponse' => __DIR__ .'/SendMailResponse.php',
        'XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\EmailServices_SSP\SetEmailSubscriptionStatus' => __DIR__ .'/SetEmailSubscriptionStatus.php',
        'XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\EmailServices_SSP\SetEmailSubscriptionStatusResponse' => __DIR__ .'/SetEmailSubscriptionStatusResponse.php',
        'XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\EmailServices_SSP\GetEmailSubscriptionStatus' => __DIR__ .'/GetEmailSubscriptionStatus.php',
        'XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\EmailServices_SSP\GetEmailSubscriptionStatusResponse' => __DIR__ .'/GetEmailSubscriptionStatusResponse.php',
        'XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\EmailServices_SSP\ExportAccountEmailSubscribers' => __DIR__ .'/ExportAccountEmailSubscribers.php',
        'XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\EmailServices_SSP\ArrayOfProperty' => __DIR__ .'/ArrayOfProperty.php',
        'XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\EmailServices_SSP\Property' => __DIR__ .'/Property.php',
        'XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\EmailServices_SSP\ExportAccountEmailSubscribersResponse' => __DIR__ .'/ExportAccountEmailSubscribersResponse.php',
        'XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\EmailServices_SSP\ExportCampaignEmailSubscribers' => __DIR__ .'/ExportCampaignEmailSubscribers.php',
        'XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\EmailServices_SSP\ExportCampaignEmailSubscribersResponse' => __DIR__ .'/ExportCampaignEmailSubscribersResponse.php',
        'XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\EmailServices_SSP\ImportAccountEmailSubscribers' => __DIR__ .'/ImportAccountEmailSubscribers.php',
        'XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\EmailServices_SSP\ImportAccountEmailSubscribersResponse' => __DIR__ .'/ImportAccountEmailSubscribersResponse.php',
        'XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\EmailServices_SSP\SetAccountEmailSubscriberStatus' => __DIR__ .'/SetAccountEmailSubscriberStatus.php',
        'XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\EmailServices_SSP\SetAccountEmailSubscriberStatusResponse' => __DIR__ .'/SetAccountEmailSubscriberStatusResponse.php',
        'XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\EmailServices_SSP\GetAccountEmailSubscriberStatus' => __DIR__ .'/GetAccountEmailSubscriberStatus.php',
        'XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\EmailServices_SSP\GetAccountEmailSubscriberStatusResponse' => __DIR__ .'/GetAccountEmailSubscriberStatusResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_7614f38e200b7965273dd07980ec2df2');

// Do nothing. The rest is just leftovers from the code generation.
{
}
