<?php

namespace App\Test\XMPieWsdlClient;


use PHPUnit\Framework\TestCase;
use XMPieWsdlClient\uProduceFactory;

class uProduceFactoryTest extends TestCase
{
    private uProduceFactory $Factory;

    /**
     * uProduceFactoryTest constructor.
     * @param string|null $name
     * @param array $data
     * @param string $dataName
     */
    public function __construct(string $name = null, array $data = [], string $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $xmpOptions =
            [
                'url' => 'https://localhost/',
                'username' => 'admin',
                'password' => 'admin',
            ];

        $soapOptions = [
        ];

        $config = [
            'security' => false,
        ];

        $this->Factory = new uProduceFactory($xmpOptions, $soapOptions, $config);
    }

    public function testBasics()
    {
        $requestFabricator = $this->Factory->getUProduceRequestFabricator();
        $serviceFabricator = $this->Factory->getUProduceServiceFabricator();

        $request = $requestFabricator->Licensing_SSP()->GetAvailableClicks();
        $result = $serviceFabricator->Licensing_SSP()->GetAvailableClicks($request)->getGetAvailableClicksResult();
        $this->assertIsNumeric($result, "Clicks remaining = {$result}");

        $request = $requestFabricator->SystemManager_SSP()->GetProductInfo();
        $result = $serviceFabricator->SystemManager_SSP()->GetProductInfo($request)->getGetProductInfoResult();
        $this->assertTrue(property_exists($result, 'm_Name'));
        $this->assertTrue(property_exists($result, 'm_Type'));
        $this->assertTrue(property_exists($result, 'm_BuildNumber'));
        $this->assertTrue(property_exists($result, 'm_Version'));
        $this->assertTrue(property_exists($result, 'm_LicenseKey'));
        $this->assertTrue(property_exists($result, 'm_SystemID'));
        $this->assertTrue(property_exists($result, 'm_APIServer'));
    }

}
