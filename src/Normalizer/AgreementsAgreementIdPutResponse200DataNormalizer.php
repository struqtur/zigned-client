<?php

namespace Struqtur\Zigned\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Struqtur\Zigned\Runtime\Normalizer\CheckArray;
use Struqtur\Zigned\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class AgreementsAgreementIdPutResponse200DataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Struqtur\\Zigned\\Model\\AgreementsAgreementIdPutResponse200Data';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Struqtur\\Zigned\\Model\\AgreementsAgreementIdPutResponse200Data';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Struqtur\Zigned\Model\AgreementsAgreementIdPutResponse200Data();
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
            if (\array_key_exists('test_mode', $data)) {
                $object->setTestMode($data['test_mode']);
                unset($data['test_mode']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
            }
            if (\array_key_exists('cancellation_reason', $data) && $data['cancellation_reason'] !== null) {
                $object->setCancellationReason($data['cancellation_reason']);
                unset($data['cancellation_reason']);
            }
            elseif (\array_key_exists('cancellation_reason', $data) && $data['cancellation_reason'] === null) {
                $object->setCancellationReason(null);
            }
            if (\array_key_exists('theme', $data)) {
                $object->setTheme($data['theme']);
                unset($data['theme']);
            }
            if (\array_key_exists('issuer', $data)) {
                $object->setIssuer($this->denormalizer->denormalize($data['issuer'], 'Struqtur\\Zigned\\Model\\AgreementsAgreementIdPutResponse200DataIssuer', 'json', $context));
                unset($data['issuer']);
            }
            if (\array_key_exists('participants', $data)) {
                $object->setParticipants($data['participants']);
                unset($data['participants']);
            }
            if (\array_key_exists('signing_groups', $data)) {
                $object->setSigningGroups($data['signing_groups']);
                unset($data['signing_groups']);
            }
            if (\array_key_exists('documents', $data)) {
                $object->setDocuments($this->denormalizer->denormalize($data['documents'], 'Struqtur\\Zigned\\Model\\AgreementsAgreementIdPutResponse200DataDocuments', 'json', $context));
                unset($data['documents']);
            }
            if (\array_key_exists('signing_order', $data)) {
                $object->setSigningOrder($this->denormalizer->denormalize($data['signing_order'], 'Struqtur\\Zigned\\Model\\AgreementsAgreementIdPutResponse200DataSigningOrder', 'json', $context));
                unset($data['signing_order']);
            }
            if (\array_key_exists('communication', $data)) {
                $object->setCommunication($this->denormalizer->denormalize($data['communication'], 'Struqtur\\Zigned\\Model\\AgreementsAgreementIdPutResponse200DataCommunication', 'json', $context));
                unset($data['communication']);
            }
            if (\array_key_exists('metadata', $data)) {
                $object->setMetadata($this->denormalizer->denormalize($data['metadata'], 'Struqtur\\Zigned\\Model\\AgreementsAgreementIdPutResponse200DataMetadata', 'json', $context));
                unset($data['metadata']);
            }
            if (\array_key_exists('updated_at', $data)) {
                $object->setUpdatedAt($data['updated_at']);
                unset($data['updated_at']);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt($data['created_at']);
                unset($data['created_at']);
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
            $data['test_mode'] = $object->getTestMode();
            $data['status'] = $object->getStatus();
            $data['cancellation_reason'] = $object->getCancellationReason();
            $data['theme'] = $object->getTheme();
            $data['issuer'] = $this->normalizer->normalize($object->getIssuer(), 'json', $context);
            $data['participants'] = $object->getParticipants();
            if ($object->isInitialized('signingGroups') && null !== $object->getSigningGroups()) {
                $data['signing_groups'] = $object->getSigningGroups();
            }
            if ($object->isInitialized('documents') && null !== $object->getDocuments()) {
                $data['documents'] = $this->normalizer->normalize($object->getDocuments(), 'json', $context);
            }
            $data['signing_order'] = $this->normalizer->normalize($object->getSigningOrder(), 'json', $context);
            $data['communication'] = $this->normalizer->normalize($object->getCommunication(), 'json', $context);
            if ($object->isInitialized('metadata') && null !== $object->getMetadata()) {
                $data['metadata'] = $this->normalizer->normalize($object->getMetadata(), 'json', $context);
            }
            $data['updated_at'] = $object->getUpdatedAt();
            $data['created_at'] = $object->getCreatedAt();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Struqtur\\Zigned\\Model\\AgreementsAgreementIdPutResponse200Data' => false];
        }
    }
} else {
    class AgreementsAgreementIdPutResponse200DataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Struqtur\\Zigned\\Model\\AgreementsAgreementIdPutResponse200Data';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Struqtur\\Zigned\\Model\\AgreementsAgreementIdPutResponse200Data';
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
            $object = new \Struqtur\Zigned\Model\AgreementsAgreementIdPutResponse200Data();
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
            if (\array_key_exists('test_mode', $data)) {
                $object->setTestMode($data['test_mode']);
                unset($data['test_mode']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
            }
            if (\array_key_exists('cancellation_reason', $data) && $data['cancellation_reason'] !== null) {
                $object->setCancellationReason($data['cancellation_reason']);
                unset($data['cancellation_reason']);
            }
            elseif (\array_key_exists('cancellation_reason', $data) && $data['cancellation_reason'] === null) {
                $object->setCancellationReason(null);
            }
            if (\array_key_exists('theme', $data)) {
                $object->setTheme($data['theme']);
                unset($data['theme']);
            }
            if (\array_key_exists('issuer', $data)) {
                $object->setIssuer($this->denormalizer->denormalize($data['issuer'], 'Struqtur\\Zigned\\Model\\AgreementsAgreementIdPutResponse200DataIssuer', 'json', $context));
                unset($data['issuer']);
            }
            if (\array_key_exists('participants', $data)) {
                $object->setParticipants($data['participants']);
                unset($data['participants']);
            }
            if (\array_key_exists('signing_groups', $data)) {
                $object->setSigningGroups($data['signing_groups']);
                unset($data['signing_groups']);
            }
            if (\array_key_exists('documents', $data)) {
                $object->setDocuments($this->denormalizer->denormalize($data['documents'], 'Struqtur\\Zigned\\Model\\AgreementsAgreementIdPutResponse200DataDocuments', 'json', $context));
                unset($data['documents']);
            }
            if (\array_key_exists('signing_order', $data)) {
                $object->setSigningOrder($this->denormalizer->denormalize($data['signing_order'], 'Struqtur\\Zigned\\Model\\AgreementsAgreementIdPutResponse200DataSigningOrder', 'json', $context));
                unset($data['signing_order']);
            }
            if (\array_key_exists('communication', $data)) {
                $object->setCommunication($this->denormalizer->denormalize($data['communication'], 'Struqtur\\Zigned\\Model\\AgreementsAgreementIdPutResponse200DataCommunication', 'json', $context));
                unset($data['communication']);
            }
            if (\array_key_exists('metadata', $data)) {
                $object->setMetadata($this->denormalizer->denormalize($data['metadata'], 'Struqtur\\Zigned\\Model\\AgreementsAgreementIdPutResponse200DataMetadata', 'json', $context));
                unset($data['metadata']);
            }
            if (\array_key_exists('updated_at', $data)) {
                $object->setUpdatedAt($data['updated_at']);
                unset($data['updated_at']);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt($data['created_at']);
                unset($data['created_at']);
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
            $data['test_mode'] = $object->getTestMode();
            $data['status'] = $object->getStatus();
            $data['cancellation_reason'] = $object->getCancellationReason();
            $data['theme'] = $object->getTheme();
            $data['issuer'] = $this->normalizer->normalize($object->getIssuer(), 'json', $context);
            $data['participants'] = $object->getParticipants();
            if ($object->isInitialized('signingGroups') && null !== $object->getSigningGroups()) {
                $data['signing_groups'] = $object->getSigningGroups();
            }
            if ($object->isInitialized('documents') && null !== $object->getDocuments()) {
                $data['documents'] = $this->normalizer->normalize($object->getDocuments(), 'json', $context);
            }
            $data['signing_order'] = $this->normalizer->normalize($object->getSigningOrder(), 'json', $context);
            $data['communication'] = $this->normalizer->normalize($object->getCommunication(), 'json', $context);
            if ($object->isInitialized('metadata') && null !== $object->getMetadata()) {
                $data['metadata'] = $this->normalizer->normalize($object->getMetadata(), 'json', $context);
            }
            $data['updated_at'] = $object->getUpdatedAt();
            $data['created_at'] = $object->getCreatedAt();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Struqtur\\Zigned\\Model\\AgreementsAgreementIdPutResponse200Data' => false];
        }
    }
}