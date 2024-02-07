<?php

namespace Struqtur\Zigned\Api\Model;

class AgreementsAgreementIdDeleteResponse200DataCommunication extends \ArrayObject
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
     * @var bool
     */
    protected $sendEmails;
    /**
     * 
     *
     * @return bool
     */
    public function getSendEmails() : bool
    {
        return $this->sendEmails;
    }
    /**
     * 
     *
     * @param bool $sendEmails
     *
     * @return self
     */
    public function setSendEmails(bool $sendEmails) : self
    {
        $this->initialized['sendEmails'] = true;
        $this->sendEmails = $sendEmails;
        return $this;
    }
}