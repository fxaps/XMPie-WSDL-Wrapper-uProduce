<?php


namespace XMPieWsdlClient;


use XMPieWsdlClient\XMPie\uProduce\v_x_y_z\Fabricator\RequestFabricator;
use XMPieWsdlClient\XMPie\uProduce\v_x_y_z\Fabricator\ServiceFabricator;

/**
 * Class uProduceFactory
 * @package XMPieWsdlClient
 *
 *
 * @property RequestFabricator $uProduceRequestFabricator
 * @property ServiceFabricator $uProduceServiceFabricator
 * @property array $xmpOptions;
 * @property array $soapOptions;
 * @property bool $config;
 */
class uProduceFactory
{
    private array $xmpOptions;
    private array $soapOptions;
    private array $config;

    public RequestFabricator $uProduceRequestFabricator;
    public ServiceFabricator $uProduceServiceFabricator;

    /**
     * uProduceFactory constructor.
     *
     * @param array $xmpOptions
     * @param array $soapOptions
     * @param array $config
     */
    public function __construct(array $xmpOptions = [], array $soapOptions = [], array $config = [])
    {
        $defaultConfig = [
            'security' => true,
        ];

        $config = array_merge($defaultConfig, $config);

        $this->xmpOptions = $xmpOptions;
        $this->soapOptions = $soapOptions;
        $this->config = $config;

        $this->loadFabricators();
    }

    /**
     * @return RequestFabricator
     */
    public function getUProduceRequestFabricator(): RequestFabricator
    {
        return $this->uProduceRequestFabricator;
    }

    /**
     * @return ServiceFabricator
     */
    public function getUProduceServiceFabricator(): ServiceFabricator
    {
        return $this->uProduceServiceFabricator;
    }

    private function loadFabricators()
    {
        //merge the default options
        $defaultXmpOptions =
            [
                'url' => '',
                'username' => '',
                'password' => '',
            ];
        $xmpOptions = array_merge($defaultXmpOptions, $this->xmpOptions);

        //merge the default SOAP options
        if ($this->config['security'] === false) {
            $context = stream_context_create([
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                ]
            ]);
            $defaultSoapOptions = [
                'stream_context' => $context,
            ];
        } else {
            $defaultSoapOptions = [];
        }
        $soapOptions = array_merge($defaultSoapOptions, $this->soapOptions);

        //auto-set credentials
        $autoSetCredentials_uProduce = [
            'inUsername' => $xmpOptions['username'],
            'inPassword' => $xmpOptions['password'],
        ];
        $this->uProduceRequestFabricator = new RequestFabricator($autoSetCredentials_uProduce);
        $this->uProduceServiceFabricator = new ServiceFabricator($soapOptions, $xmpOptions['url']);
    }


}


