<?php

namespace Struqtur\Zigned\Model;

class AgreementsAgreementIdDocumentsMainPostBody extends \ArrayObject
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
}