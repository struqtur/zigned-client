<?php

namespace Vendor\Library\Generated;

class Client extends \Vendor\Library\Generated\Runtime\Client\Client
{
    /**
     * Retrieves a paginated list of all agreements created by the authenticated client
     *
     * @param array $queryParameters {
     *     @var string $limit The number of agreements to return. Max 100
     *     @var string $page The page of agreements to return. Default 1
     *     @var string $order_by The agreements are ordered by date in descending order by default.
     *     @var string $status The status of the agreements to return.
     *     @var string $start_date The earliest creation date of the agreements to return.
     *     @var string $end_date The latest creation date of the agreements to return.
     *     @var string $lookup_key The lookup key of the agreements to return
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vendor\Library\Generated\Exception\GetAgreementsBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\AgreementsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getAgreements(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\GetAgreements($queryParameters), $fetch);
    }
    /**
     * Creates a new agreement in draft status. Use the agreement ID in subsequent requests.
     *
     * @param null|\Vendor\Library\Generated\Model\AgreementsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vendor\Library\Generated\Exception\PostAgreementsBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\AgreementsPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function postAgreements(?\Vendor\Library\Generated\Model\AgreementsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\PostAgreements($requestBody), $fetch);
    }
    /**
     * Deletes a single agreement. The agreement must be in draft to be deleted.
     *
     * @param string $agreementId DELETE /agreements/:agreement_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vendor\Library\Generated\Exception\DeleteAgreementsAgreementIdBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\AgreementsAgreementIdDeleteResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAgreementsAgreementId(string $agreementId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\DeleteAgreementsAgreementId($agreementId), $fetch);
    }
    /**
     * Retrieves a single agreement created by the authenticated client.
     *
     * @param string $agreementId The ID of the agreement to retrieve
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vendor\Library\Generated\Exception\GetAgreementsAgreementIdBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\AgreementsAgreementIdGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getAgreementsAgreementId(string $agreementId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\GetAgreementsAgreementId($agreementId), $fetch);
    }
    /**
     * Updates an agreement. The agreement must be in draft or open status.
     *
     * @param string $agreementId PUT /agreements/:agreement_id parameter
     * @param null|\Vendor\Library\Generated\Model\AgreementsAgreementIdPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vendor\Library\Generated\Exception\PutAgreementsAgreementIdBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\AgreementsAgreementIdPutResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function putAgreementsAgreementId(string $agreementId, ?\Vendor\Library\Generated\Model\AgreementsAgreementIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\PutAgreementsAgreementId($agreementId, $requestBody), $fetch);
    }
    /**
     * Lists all participants for the agreement. The participants are returned in the order they were created or, if signing order is enabled, the order that is defined.
     *
     * @param string $agreementId GET /agreements/:agreement_id/participants parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vendor\Library\Generated\Exception\GetAgreementsAgreementIdParticipantsBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\AgreementsAgreementIdParticipantsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getAgreementsAgreementIdParticipants(string $agreementId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\GetAgreementsAgreementIdParticipants($agreementId), $fetch);
    }
    /**
     * Creates a new participant in draft status. Use the participant ID in subsequent requests.
     *
     * @param string $agreementId POST /agreements/:agreement_id/participants parameter
     * @param null|\Vendor\Library\Generated\Model\AgreementsAgreementIdParticipantsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vendor\Library\Generated\Exception\PostAgreementsAgreementIdParticipantsBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\AgreementsAgreementIdParticipantsPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function postAgreementsAgreementIdParticipants(string $agreementId, ?\Vendor\Library\Generated\Model\AgreementsAgreementIdParticipantsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\PostAgreementsAgreementIdParticipants($agreementId, $requestBody), $fetch);
    }
    /**
     * Deletes an existing participant. The participant must be in `draft` status
     *
     * @param string $agreementId DELETE /agreements/:agreement_id/participants/:participant_id parameter
     * @param string $participantId DELETE /agreements/:agreement_id/participants/:participant_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vendor\Library\Generated\Exception\DeleteAgreementsAgreementIdParticipantsParticipantIdBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\AgreementsAgreementIdParticipantsParticipantIdDeleteResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAgreementsAgreementIdParticipantsParticipantId(string $agreementId, string $participantId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\DeleteAgreementsAgreementIdParticipantsParticipantId($agreementId, $participantId), $fetch);
    }
    /**
     * Retrieves a participant of the Agreement.
     *
     * @param string $agreementId GET /agreements/:agreement_id/participants/:participant_id parameter
     * @param string $participantId GET /agreements/:agreement_id/participants/:participant_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vendor\Library\Generated\Exception\GetAgreementsAgreementIdParticipantsParticipantIdBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\AgreementsAgreementIdParticipantsParticipantIdGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getAgreementsAgreementIdParticipantsParticipantId(string $agreementId, string $participantId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\GetAgreementsAgreementIdParticipantsParticipantId($agreementId, $participantId), $fetch);
    }
    /**
     * Updates an existing participant. The agreement must be in draft status in order to update a participant. If the agreement is in open status, the exisiting participants are immutable. In the case of an open agreement, you can still add and delete participants.
     *
     * @param string $agreementId PUT /agreements/:agreement_id/participants/:participant_id parameter
     * @param string $participantId PUT /agreements/:agreement_id/participants/:participant_id parameter
     * @param null|\Vendor\Library\Generated\Model\AgreementsAgreementIdParticipantsParticipantIdPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vendor\Library\Generated\Exception\PutAgreementsAgreementIdParticipantsParticipantIdBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\AgreementsAgreementIdParticipantsParticipantIdPutResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function putAgreementsAgreementIdParticipantsParticipantId(string $agreementId, string $participantId, ?\Vendor\Library\Generated\Model\AgreementsAgreementIdParticipantsParticipantIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\PutAgreementsAgreementIdParticipantsParticipantId($agreementId, $participantId, $requestBody), $fetch);
    }
    /**
     * Lists all sign events for the participant. The events are returned in ascending order by creation date. Events are read only.
     *
     * @param string $agreementId GET /agreements/:agreement_id/participants/:participant_id/sign_events parameter
     * @param string $participantId GET /agreements/:agreement_id/participants/:participant_id/sign_events parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vendor\Library\Generated\Exception\GetAgreementsAgreementIdParticipantsParticipantIdSignEventsBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\AgreementsAgreementIdParticipantsParticipantIdSignEventsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getAgreementsAgreementIdParticipantsParticipantIdSignEvents(string $agreementId, string $participantId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\GetAgreementsAgreementIdParticipantsParticipantIdSignEvents($agreementId, $participantId), $fetch);
    }
    /**
     * List all Signing Groups of the agreement
     *
     * @param string $agreementId GET /agreements/:agreement_id/signing_groups parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vendor\Library\Generated\Exception\GetAgreementsAgreementIdSigningGroupsBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\AgreementsAgreementIdSigningGroupsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getAgreementsAgreementIdSigningGroups(string $agreementId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\GetAgreementsAgreementIdSigningGroups($agreementId), $fetch);
    }
    /**
     * Signing groups are used to group participants when signing order is enabled. Signing order will be enabled automatically when you create your first signing group. All existing participants will be placed in the first group when the first signing group is created.
     *
     * @param string $agreementId POST /agreements/:agreement_id/signing_groups parameter
     * @param null|\Vendor\Library\Generated\Model\AgreementsAgreementIdSigningGroupsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vendor\Library\Generated\Exception\PostAgreementsAgreementIdSigningGroupsBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\AgreementsAgreementIdSigningGroupsPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function postAgreementsAgreementIdSigningGroups(string $agreementId, ?\Vendor\Library\Generated\Model\AgreementsAgreementIdSigningGroupsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\PostAgreementsAgreementIdSigningGroups($agreementId, $requestBody), $fetch);
    }
    /**
     * Deletes a signing group from the agreement. The agreement must be in draft or open state.
     *
     * @param string $agreementId DELETE /agreements/:agreement_id/signing_groups/:signing_group_id parameter
     * @param string $signingGroupId DELETE /agreements/:agreement_id/signing_groups/:signing_group_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vendor\Library\Generated\Exception\DeleteAgreementsAgreementIdSigningGroupsSigningGroupIdBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\AgreementsAgreementIdSigningGroupsSigningGroupIdDeleteResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAgreementsAgreementIdSigningGroupsSigningGroupId(string $agreementId, string $signingGroupId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\DeleteAgreementsAgreementIdSigningGroupsSigningGroupId($agreementId, $signingGroupId), $fetch);
    }
    /**
     * Retrieves a single signing group with participants included
     *
     * @param string $agreementId GET /agreements/:agreement_id/signing_groups/:signing_group_id parameter
     * @param string $signingGroupId GET /agreements/:agreement_id/signing_groups/:signing_group_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vendor\Library\Generated\Exception\GetAgreementsAgreementIdSigningGroupsSigningGroupIdBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\AgreementsAgreementIdSigningGroupsSigningGroupIdGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getAgreementsAgreementIdSigningGroupsSigningGroupId(string $agreementId, string $signingGroupId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\GetAgreementsAgreementIdSigningGroupsSigningGroupId($agreementId, $signingGroupId), $fetch);
    }
    /**
     * Update an existin signing group. The agreement must be in draft or open state.
     *
     * @param string $agreementId PUT /agreements/:agreement_id/signing_groups/:signing_group_id parameter
     * @param string $signingGroupId PUT /agreements/:agreement_id/signing_groups/:signing_group_id parameter
     * @param null|\Vendor\Library\Generated\Model\AgreementsAgreementIdSigningGroupsSigningGroupIdPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vendor\Library\Generated\Exception\PutAgreementsAgreementIdSigningGroupsSigningGroupIdBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\AgreementsAgreementIdSigningGroupsSigningGroupIdPutResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function putAgreementsAgreementIdSigningGroupsSigningGroupId(string $agreementId, string $signingGroupId, ?\Vendor\Library\Generated\Model\AgreementsAgreementIdSigningGroupsSigningGroupIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\PutAgreementsAgreementIdSigningGroupsSigningGroupId($agreementId, $signingGroupId, $requestBody), $fetch);
    }
    /**
     * Deletes and detaches the main document from the agreement. The document will not be deleted from your files archive.
     *
     * @param string $agreementId DELETE /agreements/:agreement_id/documents/main parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vendor\Library\Generated\Exception\DeleteAgreementsAgreementIdDocumentsMainBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\AgreementsAgreementIdDocumentsMainDeleteResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAgreementsAgreementIdDocumentsMain(string $agreementId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\DeleteAgreementsAgreementIdDocumentsMain($agreementId), $fetch);
    }
    /**
     * Attaches the main document to be signed. The document must be uploaded first to your files archive. When attaching a document to be signed, it will be cloned and become immutable.
     *
     * @param string $agreementId POST /agreements/:agreement_id/documents/main parameter
     * @param null|\Vendor\Library\Generated\Model\AgreementsAgreementIdDocumentsMainPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vendor\Library\Generated\Exception\PostAgreementsAgreementIdDocumentsMainBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\AgreementsAgreementIdDocumentsMainPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function postAgreementsAgreementIdDocumentsMain(string $agreementId, ?\Vendor\Library\Generated\Model\AgreementsAgreementIdDocumentsMainPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\PostAgreementsAgreementIdDocumentsMain($agreementId, $requestBody), $fetch);
    }
    /**
     * List all attachments for the agreement
     *
     * @param string $agreementId GET /agreements/:agreement_id/documents/attachments parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vendor\Library\Generated\Exception\GetAgreementsAgreementIdDocumentsAttachmentsBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\AgreementsAgreementIdDocumentsAttachmentsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getAgreementsAgreementIdDocumentsAttachments(string $agreementId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\GetAgreementsAgreementIdDocumentsAttachments($agreementId), $fetch);
    }
    /**
     * Add an attachment for the agreement. Attachments are supplemental documents for the agreement. You can specify the order in which they are presented. If not specified they will be added at the end.
     *
     * @param string $agreementId POST /agreements/:agreement_id/documents/attachments parameter
     * @param null|\Vendor\Library\Generated\Model\AgreementsAgreementIdDocumentsAttachmentsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vendor\Library\Generated\Exception\PostAgreementsAgreementIdDocumentsAttachmentsBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\AgreementsAgreementIdDocumentsAttachmentsPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function postAgreementsAgreementIdDocumentsAttachments(string $agreementId, ?\Vendor\Library\Generated\Model\AgreementsAgreementIdDocumentsAttachmentsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\PostAgreementsAgreementIdDocumentsAttachments($agreementId, $requestBody), $fetch);
    }
    /**
     * Detaches and deletes an attachment from the agreement. The attachment order will be updated accordingly.
     *
     * @param string $agreementId DELETE /agreements/:agreement_id/documents/attachments/:attachment_id parameter
     * @param string $attachmentId DELETE /agreements/:agreement_id/documents/attachments/:attachment_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vendor\Library\Generated\Exception\DeleteAgreementsAgreementIdDocumentsAttachmentsAttachmentIdBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\AgreementsAgreementIdDocumentsAttachmentsAttachmentIdDeleteResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAgreementsAgreementIdDocumentsAttachmentsAttachmentId(string $agreementId, string $attachmentId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\DeleteAgreementsAgreementIdDocumentsAttachmentsAttachmentId($agreementId, $attachmentId), $fetch);
    }
    /**
     * Retrieve a single attachment for the agreement
     *
     * @param string $agreementId GET /agreements/:agreement_id/documents/attachments/:attachment_id parameter
     * @param string $attachmentId GET /agreements/:agreement_id/documents/attachments/:attachment_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vendor\Library\Generated\Exception\GetAgreementsAgreementIdDocumentsAttachmentsAttachmentIdBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\AgreementsAgreementIdDocumentsAttachmentsAttachmentIdGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getAgreementsAgreementIdDocumentsAttachmentsAttachmentId(string $agreementId, string $attachmentId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\GetAgreementsAgreementIdDocumentsAttachmentsAttachmentId($agreementId, $attachmentId), $fetch);
    }
    /**
     * Update an attachment for the agreement
     *
     * @param string $agreementId PUT /agreements/:agreement_id/documents/attachments/:attachment_id parameter
     * @param string $attachmentId PUT /agreements/:agreement_id/documents/attachments/:attachment_id parameter
     * @param null|\Vendor\Library\Generated\Model\AgreementsAgreementIdDocumentsAttachmentsAttachmentIdPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vendor\Library\Generated\Exception\PutAgreementsAgreementIdDocumentsAttachmentsAttachmentIdBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\AgreementsAgreementIdDocumentsAttachmentsAttachmentIdPutResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function putAgreementsAgreementIdDocumentsAttachmentsAttachmentId(string $agreementId, string $attachmentId, ?\Vendor\Library\Generated\Model\AgreementsAgreementIdDocumentsAttachmentsAttachmentIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\PutAgreementsAgreementIdDocumentsAttachmentsAttachmentId($agreementId, $attachmentId, $requestBody), $fetch);
    }
    /**
     * Update the lifecycle status of an agreement: `pending`, `open` or `cancelled`.
     **Pending**: When an agreement is switched to Pending, it is finalized for signing by validating all inputs and, if communication is enabled, sends out all or the first batch of invitations. A Pending agreement can be either cancelled or opened.
     **Open**: If the agreement is opened, the signing process is paused and reset to allow making any changes you would like to do.
     **Cancelled**: If you cancel the agreement, it is moved into an end state where no more changes are allowed. If communication is enabled and the agreement is cancelled, notifications will be sent to all participants.
     *
     * @param string $agreementId POST /agreements/:agreement_id/lifecycle parameter
     * @param null|\Vendor\Library\Generated\Model\AgreementsAgreementIdLifecyclePostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vendor\Library\Generated\Exception\PostAgreementsAgreementIdLifecycleBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\AgreementsAgreementIdLifecyclePostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function postAgreementsAgreementIdLifecycle(string $agreementId, ?\Vendor\Library\Generated\Model\AgreementsAgreementIdLifecyclePostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\PostAgreementsAgreementIdLifecycle($agreementId, $requestBody), $fetch);
    }
    /**
     * Retrieves a paginated list of all files uploaded by the client or user
     *
     * @param array $queryParameters {
     *     @var string $limit GET /files parameter
     *     @var string $page The page of agreements to return. Default 1
     *     @var string $order_by The files are ordered by date in descending order by default.
     *     @var string $start_date The earliest creation date of the files to return.
     *     @var string $end_date The latest creation date of the files to return.
     *     @var string $mime_type Filters the file list for the specific mimetype.
     *     @var string $lookup_key The lookup key of the files to return
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vendor\Library\Generated\Exception\GetFilesBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\FilesGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getFiles(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\GetFiles($queryParameters), $fetch);
    }
    /**
     * Upload a file to your archive. Use the file ID in subsequent requests.
     *
     * @param null|\Vendor\Library\Generated\Model\FilesPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vendor\Library\Generated\Exception\PostFilesBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\FilesPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function postFiles(?\Vendor\Library\Generated\Model\FilesPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\PostFiles($requestBody), $fetch);
    }
    /**
     * Delete a file uploaded by the authenticated client or user.
     *
     * @param string $fileId DELETE /files/:file_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vendor\Library\Generated\Exception\DeleteFilesFileIdBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\FilesFileIdDeleteResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function deleteFilesFileId(string $fileId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\DeleteFilesFileId($fileId), $fetch);
    }
    /**
     * Retrieve a file uploaded by the authenticated client or user
     *
     * @param string $fileId GET /files/:file_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vendor\Library\Generated\Exception\GetFilesFileIdBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\FilesFileIdGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getFilesFileId(string $fileId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\GetFilesFileId($fileId), $fetch);
    }
    /**
     * Retrieves a paginated list of all themes created for the account
     *
     * @param array $queryParameters {
     *     @var string $limit GET /themes parameter
     *     @var string $page GET /themes parameter
     *     @var string $order_by GET /themes parameter
     *     @var string $start_date YYYY-MM-DDTHH:mm:ss.sssZ
     *     @var string $end_date YYYY-MM-DDTHH:mm:ss.sssZ
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vendor\Library\Generated\Exception\GetThemesBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\ThemesGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getThemes(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\GetThemes($queryParameters), $fetch);
    }
    /**
     * Create a new theme. Use the theme ID in subsequent requests.
     *
     * @param null|\Vendor\Library\Generated\Model\ThemesPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vendor\Library\Generated\Exception\PostThemesBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\ThemesPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function postThemes(?\Vendor\Library\Generated\Model\ThemesPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\PostThemes($requestBody), $fetch);
    }
    /**
     * Deletes a theme created for the account associated with the authenticated client.
     *
     * @param string $themeId The ID of the theme to delete
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vendor\Library\Generated\Exception\DeleteThemesThemeIdBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\ThemesThemeIdDeleteResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function deleteThemesThemeId(string $themeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\DeleteThemesThemeId($themeId), $fetch);
    }
    /**
     * Retrieves a theme created with the authenticated client
     *
     * @param string $themeId The ID of the theme to retrieve
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vendor\Library\Generated\Exception\GetThemesThemeIdBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\ThemesThemeIdGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getThemesThemeId(string $themeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\GetThemesThemeId($themeId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vendor\Library\Generated\Exception\GetWebhooksBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\WebhooksGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getWebhooks(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\GetWebhooks(), $fetch);
    }
    /**
     * Create a new webhook. Use the webhook ID in subsequent requests.
     *
     * @param null|\Vendor\Library\Generated\Model\WebhooksPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vendor\Library\Generated\Exception\PostWebhooksBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\WebhooksPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function postWebhooks(?\Vendor\Library\Generated\Model\WebhooksPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\PostWebhooks($requestBody), $fetch);
    }
    /**
     * Deletes a webhook created for the account associated with the authenticated client.
     *
     * @param string $webhookId DELETE /webhooks/:webhook_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vendor\Library\Generated\Exception\DeleteWebhooksWebhookIdBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\WebhooksWebhookIdDeleteResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function deleteWebhooksWebhookId(string $webhookId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\DeleteWebhooksWebhookId($webhookId), $fetch);
    }
    /**
     * Retrieves a webhook created by the account associated with the authenticated client.
     *
     * @param string $webhookId GET /webhooks/:webhook_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vendor\Library\Generated\Exception\GetWebhooksWebhookIdBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\WebhooksWebhookIdGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getWebhooksWebhookId(string $webhookId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\GetWebhooksWebhookId($webhookId), $fetch);
    }
    /**
     * Updates a webhook created by the account associated with the authenticated client.
     *
     * @param string $webhookId PUT /webhooks/:webhook_id parameter
     * @param null|\Vendor\Library\Generated\Model\WebhooksWebhookIdPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vendor\Library\Generated\Exception\PutWebhooksWebhookIdBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\WebhooksWebhookIdPutResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function putWebhooksWebhookId(string $webhookId, ?\Vendor\Library\Generated\Model\WebhooksWebhookIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\PutWebhooksWebhookId($webhookId, $requestBody), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri('https://api.zigned.se/rest/v3');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Vendor\Library\Generated\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}