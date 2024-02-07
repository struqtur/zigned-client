<?php

namespace Vendor\Library\Generated\Model;

class AgreementsAgreementIdDocumentsAttachmentsPostBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string
     */
    protected $fileId;
    /**
     * 
     *
     * @var int
     */
    protected $order;
    /**
     * 
     *
     * @return string
     */
    public function getFileId() : string
    {
        return $this->fileId;
    }
    /**
     * 
     *
     * @param string $fileId
     *
     * @return self
     */
    public function setFileId(string $fileId) : self
    {
        $this->initialized['fileId'] = true;
        $this->fileId = $fileId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOrder() : int
    {
        return $this->order;
    }
    /**
     * 
     *
     * @param int $order
     *
     * @return self
     */
    public function setOrder(int $order) : self
    {
        $this->initialized['order'] = true;
        $this->order = $order;
        return $this;
    }
}