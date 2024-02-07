<?php

namespace Struqtur\Zigned\Api\Model;

class AgreementsAgreementIdGetResponse200DataDocumentsOriginalDocuments extends \ArrayObject
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
     * The main document which will be signed.
     *
     * @var mixed
     */
    protected $main;
    /**
     * 
     *
     * @var mixed
     */
    protected $attachments;
    /**
     * The main document which will be signed.
     *
     * @return mixed
     */
    public function getMain()
    {
        return $this->main;
    }
    /**
     * The main document which will be signed.
     *
     * @param mixed $main
     *
     * @return self
     */
    public function setMain($main) : self
    {
        $this->initialized['main'] = true;
        $this->main = $main;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getAttachments()
    {
        return $this->attachments;
    }
    /**
     * 
     *
     * @param mixed $attachments
     *
     * @return self
     */
    public function setAttachments($attachments) : self
    {
        $this->initialized['attachments'] = true;
        $this->attachments = $attachments;
        return $this;
    }
}