<?php

namespace Struqtur\Zigned\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Struqtur\Zigned\Api\Runtime\Normalizer\CheckArray;
use Struqtur\Zigned\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class AgreementsAgreementIdParticipantsParticipantIdDeleteResponse200DataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Struqtur\\Zigned\\Api\\Model\\AgreementsAgreementIdParticipantsParticipantIdDeleteResponse200Data';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Struqtur\\Zigned\\Api\\Model\\AgreementsAgreementIdParticipantsParticipantIdDeleteResponse200Data';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Struqtur\Zigned\Api\Model\AgreementsAgreementIdParticipantsParticipantIdDeleteResponse200Data();
            if (\array_key_exists('order', $data) && \is_int($data['order'])) {
                $data['order'] = (double) $data['order'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('resource_type', $data)) {
                $object->setResourceType($data['resource_type']);
                unset($data['resource_type']);
            }
            if (\array_key_exists('name', $data) && $data['name'] !== null) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            elseif (\array_key_exists('name', $data) && $data['name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('email', $data) && $data['email'] !== null) {
                $object->setEmail($data['email']);
                unset($data['email']);
            }
            elseif (\array_key_exists('email', $data) && $data['email'] === null) {
                $object->setEmail(null);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
            }
            if (\array_key_exists('order', $data) && $data['order'] !== null) {
                $object->setOrder($data['order']);
                unset($data['order']);
            }
            elseif (\array_key_exists('order', $data) && $data['order'] === null) {
                $object->setOrder(null);
            }
            if (\array_key_exists('signing_group', $data)) {
                $object->setSigningGroup($data['signing_group']);
                unset($data['signing_group']);
            }
            if (\array_key_exists('agreement', $data)) {
                $object->setAgreement($data['agreement']);
                unset($data['agreement']);
            }
            if (\array_key_exists('signing_room_url', $data) && $data['signing_room_url'] !== null) {
                $object->setSigningRoomUrl($data['signing_room_url']);
                unset($data['signing_room_url']);
            }
            elseif (\array_key_exists('signing_room_url', $data) && $data['signing_room_url'] === null) {
                $object->setSigningRoomUrl(null);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt($data['created_at']);
                unset($data['created_at']);
            }
            if (\array_key_exists('updated_at', $data)) {
                $object->setUpdatedAt($data['updated_at']);
                unset($data['updated_at']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['id'] = $object->getId();
            $data['resource_type'] = $object->getResourceType();
            $data['name'] = $object->getName();
            $data['email'] = $object->getEmail();
            $data['status'] = $object->getStatus();
            $data['order'] = $object->getOrder();
            $data['signing_group'] = $object->getSigningGroup();
            $data['agreement'] = $object->getAgreement();
            $data['signing_room_url'] = $object->getSigningRoomUrl();
            $data['created_at'] = $object->getCreatedAt();
            $data['updated_at'] = $object->getUpdatedAt();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Struqtur\\Zigned\\Api\\Model\\AgreementsAgreementIdParticipantsParticipantIdDeleteResponse200Data' => false];
        }
    }
} else {
    class AgreementsAgreementIdParticipantsParticipantIdDeleteResponse200DataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Struqtur\\Zigned\\Api\\Model\\AgreementsAgreementIdParticipantsParticipantIdDeleteResponse200Data';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Struqtur\\Zigned\\Api\\Model\\AgreementsAgreementIdParticipantsParticipantIdDeleteResponse200Data';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Struqtur\Zigned\Api\Model\AgreementsAgreementIdParticipantsParticipantIdDeleteResponse200Data();
            if (\array_key_exists('order', $data) && \is_int($data['order'])) {
                $data['order'] = (double) $data['order'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('resource_type', $data)) {
                $object->setResourceType($data['resource_type']);
                unset($data['resource_type']);
            }
            if (\array_key_exists('name', $data) && $data['name'] !== null) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            elseif (\array_key_exists('name', $data) && $data['name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('email', $data) && $data['email'] !== null) {
                $object->setEmail($data['email']);
                unset($data['email']);
            }
            elseif (\array_key_exists('email', $data) && $data['email'] === null) {
                $object->setEmail(null);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
            }
            if (\array_key_exists('order', $data) && $data['order'] !== null) {
                $object->setOrder($data['order']);
                unset($data['order']);
            }
            elseif (\array_key_exists('order', $data) && $data['order'] === null) {
                $object->setOrder(null);
            }
            if (\array_key_exists('signing_group', $data)) {
                $object->setSigningGroup($data['signing_group']);
                unset($data['signing_group']);
            }
            if (\array_key_exists('agreement', $data)) {
                $object->setAgreement($data['agreement']);
                unset($data['agreement']);
            }
            if (\array_key_exists('signing_room_url', $data) && $data['signing_room_url'] !== null) {
                $object->setSigningRoomUrl($data['signing_room_url']);
                unset($data['signing_room_url']);
            }
            elseif (\array_key_exists('signing_room_url', $data) && $data['signing_room_url'] === null) {
                $object->setSigningRoomUrl(null);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt($data['created_at']);
                unset($data['created_at']);
            }
            if (\array_key_exists('updated_at', $data)) {
                $object->setUpdatedAt($data['updated_at']);
                unset($data['updated_at']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['id'] = $object->getId();
            $data['resource_type'] = $object->getResourceType();
            $data['name'] = $object->getName();
            $data['email'] = $object->getEmail();
            $data['status'] = $object->getStatus();
            $data['order'] = $object->getOrder();
            $data['signing_group'] = $object->getSigningGroup();
            $data['agreement'] = $object->getAgreement();
            $data['signing_room_url'] = $object->getSigningRoomUrl();
            $data['created_at'] = $object->getCreatedAt();
            $data['updated_at'] = $object->getUpdatedAt();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Struqtur\\Zigned\\Api\\Model\\AgreementsAgreementIdParticipantsParticipantIdDeleteResponse200Data' => false];
        }
    }
}