<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class EmailBodyOptions
{

    /**
     * @var boolean $m_EmbedResources
     */
    protected $m_EmbedResources = null;

    /**
     * @var string $m_Charset
     */
    protected $m_Charset = null;

    /**
     * @param boolean $m_EmbedResources
     */
    public function __construct($m_EmbedResources = null)
    {
        $this->m_EmbedResources = $m_EmbedResources;
    }

    /**
     * @return boolean
     */
    public function getM_EmbedResources()
    {
        return $this->m_EmbedResources;
    }

    /**
     * @param boolean $m_EmbedResources
     * @return EmailBodyOptions
     */
    public function setM_EmbedResources($m_EmbedResources)
    {
        $this->m_EmbedResources = $m_EmbedResources;
        return $this;
    }

    /**
     * @return string
     */
    public function getM_Charset()
    {
        return $this->m_Charset;
    }

    /**
     * @param string $m_Charset
     * @return EmailBodyOptions
     */
    public function setM_Charset($m_Charset)
    {
        $this->m_Charset = $m_Charset;
        return $this;
    }

}
