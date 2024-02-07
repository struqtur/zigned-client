<?php

namespace Struqtur\Zigned\Model;

class AgreementsAgreementIdPutBodyissuer extends \ArrayObject
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
     * The name of the issuer
     *
     * @var string
     */
    protected $name;
    /**
     * The email of the issuer. Will be used for communication if email communication is enabled for the agreement.
     *
     * @var string
     */
    protected $email;
    /**
     * The role of the issuer within the signing process.
     *
     * @var string
     */
    protected $role;
    /**
     * The name of the issuer
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the issuer
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
     * The email of the issuer. Will be used for communication if email communication is enabled for the agreement.
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * The email of the issuer. Will be used for communication if email communication is enabled for the agreement.
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
     * The role of the issuer within the signing process.
     *
     * @return string
     */
    public function getRole() : string
    {
        return $this->role;
    }
    /**
     * The role of the issuer within the signing process.
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
}