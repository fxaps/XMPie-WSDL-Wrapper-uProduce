<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\Population_SSP;

class PopulationInfo
{

    /**
     * @var string $m_Plan
     */
    protected $m_Plan = null;

    /**
     * @var PopulationRecipientInformation $m_RecipientInformation
     */
    protected $m_RecipientInformation = null;

    /**
     * @var ArrayOfPopulationRecipientInformation $m_AdditionalRecipientInformation
     */
    protected $m_AdditionalRecipientInformation = null;

    /**
     * @var ArrayOfAdditionalDataSourceInfo $m_AdditionalDataSources
     */
    protected $m_AdditionalDataSources = null;

    /**
     * @param PopulationRecipientInformation $m_RecipientInformation
     */
    public function __construct($m_RecipientInformation = null)
    {
      $this->m_RecipientInformation = $m_RecipientInformation;
    }

    /**
     * @return string
     */
    public function getM_Plan()
    {
      return $this->m_Plan;
    }

    /**
     * @param string $m_Plan
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\Population_SSP\PopulationInfo
     */
    public function setM_Plan($m_Plan)
    {
      $this->m_Plan = $m_Plan;
      return $this;
    }

    /**
     * @return PopulationRecipientInformation
     */
    public function getM_RecipientInformation()
    {
      return $this->m_RecipientInformation;
    }

    /**
     * @param PopulationRecipientInformation $m_RecipientInformation
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\Population_SSP\PopulationInfo
     */
    public function setM_RecipientInformation($m_RecipientInformation)
    {
      $this->m_RecipientInformation = $m_RecipientInformation;
      return $this;
    }

    /**
     * @return ArrayOfPopulationRecipientInformation
     */
    public function getM_AdditionalRecipientInformation()
    {
      return $this->m_AdditionalRecipientInformation;
    }

    /**
     * @param ArrayOfPopulationRecipientInformation $m_AdditionalRecipientInformation
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\Population_SSP\PopulationInfo
     */
    public function setM_AdditionalRecipientInformation($m_AdditionalRecipientInformation)
    {
      $this->m_AdditionalRecipientInformation = $m_AdditionalRecipientInformation;
      return $this;
    }

    /**
     * @return ArrayOfAdditionalDataSourceInfo
     */
    public function getM_AdditionalDataSources()
    {
      return $this->m_AdditionalDataSources;
    }

    /**
     * @param ArrayOfAdditionalDataSourceInfo $m_AdditionalDataSources
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\Population_SSP\PopulationInfo
     */
    public function setM_AdditionalDataSources($m_AdditionalDataSources)
    {
      $this->m_AdditionalDataSources = $m_AdditionalDataSources;
      return $this;
    }

}
