<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_25_0\Fabricator;


use SoapFault;
use XMPieWsdlClient\XMPie\Utilities\Formatter;
use XMPieWsdlClient\XMPie\uProduce\v_25_0\ApplicationServices\Destination_SSP\Destination_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_25_0\ApplicationServices\User_SSP\User_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_25_0\BasicServices\Account_SSP\Account_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_25_0\BasicServices\Asset_SSP\Asset_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_25_0\BasicServices\AssetSource_SSP\AssetSource_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_25_0\BasicServices\AssetSourceUtils_SSP\AssetSourceUtils_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_25_0\BasicServices\Campaign_SSP\Campaign_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_25_0\BasicServices\Customer_SSP\Customer_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_25_0\BasicServices\DataSource_SSP\DataSource_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_25_0\BasicServices\DataSourcePlanUtils_SSP\DataSourcePlanUtils_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_25_0\BasicServices\Document_SSP\Document_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_25_0\BasicServices\Font_SSP\Font_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_25_0\BasicServices\Plan_SSP\Plan_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_25_0\BasicServices\PlanUtils_SSP\PlanUtils_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_25_0\BasicServices\RecipientTable_SSP\RecipientTable_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_25_0\BasicServices\TempStorage_SSP\TempStorage_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_25_0\OtherServices\DeliveryProvider_SSP\DeliveryProvider_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_25_0\OtherServices\EmailMarketing_SSP\EmailMarketing_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_25_0\OtherServices\GeneralUtils_SSP\GeneralUtils_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_25_0\OtherServices\InteractiveCampaign_SSP\InteractiveCampaign_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_25_0\OtherServices\Licensing_SSP\Licensing_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_25_0\OtherServices\Permissions_SSP\Permissions_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_25_0\OtherServices\TouchPoint_SSP\TouchPoint_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_25_0\OtherServices\Tracker_SSP\Tracker_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_25_0\ProductionServices\Job_SSP\Job_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_25_0\ProductionServices\Jobs_SSP\Jobs_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_25_0\ProductionServices\JobTicket_SSP\JobTicket_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_25_0\ProductionServices\Production_SSP\Production_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\AccountDataSource_SSP\AccountDataSource_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\ConfigFile_SSP\ConfigFile_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\CustomButton_SSP\CustomButton_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\EmailServices_SSP\EmailServices_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\JobMessage_SSP\JobMessage_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\MeasurementUnit_SSP\MeasurementUnit_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\MessagesUtils_SSP\MessagesUtils_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\PermissionsEx_SSP\PermissionsEx_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\PlanPartsProvider_SSP\PlanPartsProvider_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\Population_SSP\Population_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\ProductionQueue_SSP\ProductionQueue_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\SheetSize_SSP\SheetSize_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\SystemManager_SSP\SystemManager_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\UpdateDataSource_SSP\UpdateDataSource_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\XMPieInternalAPI_SSP\XMPieInternalAPI_SSP;


class ServiceFabricator
{
    private $uProduceUrl;
    private $options;

    /**
     * ServiceFabricator constructor.
     *
     * @param array $options
     * @param string $serverUrl
     */
    public function __construct(array $options = [], $serverUrl = 'http://localhost/')
    {
        $this->setUProduceUrl($serverUrl);
        $this->setOptions($options);
    }

    /**
     * @return string
     */
    public function getUProduceUrl()
    {
        return $this->uProduceUrl;
    }

    /**
     * @param string $uProduceUrl
     */
    public function setUProduceUrl($uProduceUrl)
    {
        $uProduceUrl = Formatter::fixServerUrl($uProduceUrl);
        $this->uProduceUrl = $uProduceUrl;
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param array $options
     */
    public function setOptions($options)
    {
        $this->options = $options;
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return Destination_SSP
    * @throws SoapFault
    */
    public function Destination_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/Destination_SSP.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }

        return new Destination_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return User_SSP
    * @throws SoapFault
    */
    public function User_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/User_SSP.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }

        return new User_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return Account_SSP
    * @throws SoapFault
    */
    public function Account_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/Account_SSP.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }

        return new Account_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return Asset_SSP
    * @throws SoapFault
    */
    public function Asset_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/Asset_SSP.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }

        return new Asset_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return AssetSource_SSP
    * @throws SoapFault
    */
    public function AssetSource_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/AssetSource_SSP.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }

        return new AssetSource_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return AssetSourceUtils_SSP
    * @throws SoapFault
    */
    public function AssetSourceUtils_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/AssetSourceUtils_SSP.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }

        return new AssetSourceUtils_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return Campaign_SSP
    * @throws SoapFault
    */
    public function Campaign_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/Campaign_SSP.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }

        return new Campaign_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return Customer_SSP
    * @throws SoapFault
    */
    public function Customer_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/Customer_SSP.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }

        return new Customer_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return DataSource_SSP
    * @throws SoapFault
    */
    public function DataSource_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/DataSource_SSP.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }

        return new DataSource_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return DataSourcePlanUtils_SSP
    * @throws SoapFault
    */
    public function DataSourcePlanUtils_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/DataSourcePlanUtils_SSP.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }

        return new DataSourcePlanUtils_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return Document_SSP
    * @throws SoapFault
    */
    public function Document_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/Document_SSP.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }

        return new Document_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return Font_SSP
    * @throws SoapFault
    */
    public function Font_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/Font_SSP.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }

        return new Font_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return Plan_SSP
    * @throws SoapFault
    */
    public function Plan_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/Plan_SSP.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }

        return new Plan_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return PlanUtils_SSP
    * @throws SoapFault
    */
    public function PlanUtils_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/PlanUtils_SSP.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }

        return new PlanUtils_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return RecipientTable_SSP
    * @throws SoapFault
    */
    public function RecipientTable_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/RecipientTable_SSP.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }

        return new RecipientTable_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return TempStorage_SSP
    * @throws SoapFault
    */
    public function TempStorage_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/TempStorage_SSP.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }

        return new TempStorage_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return DeliveryProvider_SSP
    * @throws SoapFault
    */
    public function DeliveryProvider_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/DeliveryProvider_SSP.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }

        return new DeliveryProvider_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return EmailMarketing_SSP
    * @throws SoapFault
    */
    public function EmailMarketing_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/EmailMarketing_SSP.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }

        return new EmailMarketing_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return GeneralUtils_SSP
    * @throws SoapFault
    */
    public function GeneralUtils_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/GeneralUtils_SSP.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }

        return new GeneralUtils_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return InteractiveCampaign_SSP
    * @throws SoapFault
    */
    public function InteractiveCampaign_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/InteractiveCampaign_SSP.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }

        return new InteractiveCampaign_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return Licensing_SSP
    * @throws SoapFault
    */
    public function Licensing_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/Licensing_SSP.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }

        return new Licensing_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return Permissions_SSP
    * @throws SoapFault
    */
    public function Permissions_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/Permissions_SSP.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }

        return new Permissions_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return TouchPoint_SSP
    * @throws SoapFault
    */
    public function TouchPoint_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/TouchPoint_SSP.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }

        return new TouchPoint_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return Tracker_SSP
    * @throws SoapFault
    */
    public function Tracker_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/Tracker_SSP.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }

        return new Tracker_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return Job_SSP
    * @throws SoapFault
    */
    public function Job_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/Job_SSP.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }

        return new Job_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return Jobs_SSP
    * @throws SoapFault
    */
    public function Jobs_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/Jobs_SSP.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }

        return new Jobs_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return JobTicket_SSP
    * @throws SoapFault
    */
    public function JobTicket_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/JobTicket_SSP.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }

        return new JobTicket_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return Production_SSP
    * @throws SoapFault
    */
    public function Production_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/Production_SSP.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }

        return new Production_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return AccountDataSource_SSP
    * @throws SoapFault
    */
    public function AccountDataSource_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/AccountDataSource_SSP.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }

        return new AccountDataSource_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return ConfigFile_SSP
    * @throws SoapFault
    */
    public function ConfigFile_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/ConfigFile_SSP.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }

        return new ConfigFile_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return CustomButton_SSP
    * @throws SoapFault
    */
    public function CustomButton_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/CustomButton_SSP.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }

        return new CustomButton_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return EmailServices_SSP
    * @throws SoapFault
    */
    public function EmailServices_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/EmailServices_SSP.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }

        return new EmailServices_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return JobMessage_SSP
    * @throws SoapFault
    */
    public function JobMessage_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/JobMessage_SSP.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }

        return new JobMessage_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return MeasurementUnit_SSP
    * @throws SoapFault
    */
    public function MeasurementUnit_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/MeasurementUnit_SSP.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }

        return new MeasurementUnit_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return MessagesUtils_SSP
    * @throws SoapFault
    */
    public function MessagesUtils_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/MessagesUtils_SSP.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }

        return new MessagesUtils_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return PermissionsEx_SSP
    * @throws SoapFault
    */
    public function PermissionsEx_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/PermissionsEx_SSP.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }

        return new PermissionsEx_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return PlanPartsProvider_SSP
    * @throws SoapFault
    */
    public function PlanPartsProvider_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/PlanPartsProvider_SSP.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }

        return new PlanPartsProvider_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return Population_SSP
    * @throws SoapFault
    */
    public function Population_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/Population_SSP.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }

        return new Population_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return ProductionQueue_SSP
    * @throws SoapFault
    */
    public function ProductionQueue_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/ProductionQueue_SSP.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }

        return new ProductionQueue_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return SheetSize_SSP
    * @throws SoapFault
    */
    public function SheetSize_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/SheetSize_SSP.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }

        return new SheetSize_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return SystemManager_SSP
    * @throws SoapFault
    */
    public function SystemManager_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/SystemManager_SSP.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }

        return new SystemManager_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return UpdateDataSource_SSP
    * @throws SoapFault
    */
    public function UpdateDataSource_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/UpdateDataSource_SSP.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }

        return new UpdateDataSource_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return XMPieInternalAPI_SSP
    * @throws SoapFault
    */
    public function XMPieInternalAPI_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/XMPieInternalAPI_SSP.asmx?wsdl";

        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }

        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }

        return new XMPieInternalAPI_SSP($options, $serverUrl);
    }



}

?>
