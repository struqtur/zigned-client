<?php

namespace Struqtur\Zigned\Api\Model;

class AgreementsAgreementIdDeleteResponse200DataIssuer extends \ArrayObject
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
     * The name of the issuer. Required if no email is provided.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The email of the issuer. Required if agreemnt is configured to send emails.
     *
     * @var string|null
     */
    protected $email;
    /**
     * The role of the issuer in the agreement process.
     *
     * @var string
     */
    protected $role;
    /**
     * If the issuer is a signer or approver this is the ID of the related participant.
     *
     * @var string
     */
    protected $participantId;
    /**
     * The URL to the signing room for the issuer. Only available after the agreement has been finalized for signing.
     *
     * @var string|null
     */
    protected $signingRoomUrl;
    /**
     * The name of the issuer. Required if no email is provided.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The name of the issuer. Required if no email is provided.
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * The email of the issuer. Required if agreemnt is configured to send emails.
     *
     * @return string|null
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }
    /**
     * The email of the issuer. Required if agreemnt is configured to send emails.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email) : self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * The role of the issuer in the agreement process.
     *
     * @return string
     */
    public function getRole() : string
    {
        return $this->role;
    }
    /**
     * The role of the issuer in the agreement process.
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
     * If the issuer is a signer or approver this is the ID of the related participant.
     *
     * @return string
     */
    public function getParticipantId() : string
    {
        return $this->participantId;
    }
    /**
     * If the issuer is a signer or approver this is the ID of the related participant.
     *
     * @param string $participantId
     *
     * @return self
     */
    public function setParticipantId(string $participantId) : self
    {
        $this->initialized['participantId'] = true;
        $this->participantId = $participantId;
        return $this;
    }
    /**
     * The URL to the signing room for the issuer. Only available after the agreement has been finalized for signing.
     *
     * @return string|null
     */
    public function getSigningRoomUrl() : ?string
    {
        return $this->signingRoomUrl;
    }
    /**
     * The URL to the signing room for the issuer. Only available after the agreement has been finalized for signing.
     *
     * @param string|null $signingRoomUrl
     *
     * @return self
     */
    public function setSigningRoomUrl(?string $signingRoomUrl) : self
    {
        $this->initialized['signingRoomUrl'] = true;
        $this->signingRoomUrl = $signingRoomUrl;
        return $this;
    }
}