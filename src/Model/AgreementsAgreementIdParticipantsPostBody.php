<?php

namespace Struqtur\Zigned\Model;

class AgreementsAgreementIdParticipantsPostBody extends \ArrayObject
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
     * The email of the participant. Will be used in all communication, if email communication is enabled for the agreement.
     *
     * @var string
     */
    protected $email;
    /**
     * The name of the participant. If omitted, the email adress will be used as name.
     *
     * @var string
     */
    protected $name;
    /**
     * The role of the participant within the signing process.
     *
     * @var string
     */
    protected $role = 'signer';
    /**
     * The personal number of the participant. If provided, the signer will have to use Swedish BankID to sign the agreement and only be allowed to sign if the personal number matches what is provided. Only available for signers.
     *
     * @var string
     */
    protected $personalNumber;
    /**
     * The email of the participant. Will be used in all communication, if email communication is enabled for the agreement.
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * The email of the participant. Will be used in all communication, if email communication is enabled for the agreement.
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email) : self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * The name of the participant. If omitted, the email adress will be used as name.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the participant. If omitted, the email adress will be used as name.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * The role of the participant within the signing process.
     *
     * @return string
     */
    public function getRole() : string
    {
        return $this->role;
    }
    /**
     * The role of the participant within the signing process.
     *
     * @param string $role
     *
     * @return self
     */
    public function setRole(string $role) : self
    {
        $this->initialized['role'] = true;
        $this->role = $role;
        return $this;
    }
    /**
     * The personal number of the participant. If provided, the signer will have to use Swedish BankID to sign the agreement and only be allowed to sign if the personal number matches what is provided. Only available for signers.
     *
     * @return string
     */
    public function getPersonalNumber() : string
    {
        return $this->personalNumber;
    }
    /**
     * The personal number of the participant. If provided, the signer will have to use Swedish BankID to sign the agreement and only be allowed to sign if the personal number matches what is provided. Only available for signers.
     *
     * @param string $personalNumber
     *
     * @return self
     */
    public function setPersonalNumber(string $personalNumber) : self
    {
        $this->initialized['personalNumber'] = true;
        $this->personalNumber = $personalNumber;
        return $this;
    }
}