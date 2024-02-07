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
    class AgreementsAgreementIdDocumentsAttachmentsAttachmentIdDeleteResponse400Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Struqtur\\Zigned\\Api\\Model\\AgreementsAgreementIdDocumentsAttachmentsAttachmentIdDeleteResponse400';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Struqtur\\Zigned\\Api\\Model\\AgreementsAgreementIdDocumentsAttachmentsAttachmentIdDeleteResponse400';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Struqtur\Zigned\Api\Model\AgreementsAgreementIdDocumentsAttachmentsAttachmentIdDeleteResponse400();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
            }
            if (\array_key_exists('error', $data)) {
                $object->setError($this->denormalizer->denormalize($data['error'], 'Struqtur\\Zigned\\Api\\Model\\AgreementsAgreementIdDocumentsAttachmentsAttachmentIdDeleteResponse400Error', 'json', $context));
                unset($data['error']);
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
            $data['status'] = $object->getStatus();
            $data['error'] = $this->normalizer->normalize($object->getError(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Struqtur\\Zigned\\Api\\Model\\AgreementsAgreementIdDocumentsAttachmentsAttachmentIdDeleteResponse400' => false];
        }
    }
} else {
    class AgreementsAgreementIdDocumentsAttachmentsAttachmentIdDeleteResponse400Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Struqtur\\Zigned\\Api\\Model\\AgreementsAgreementIdDocumentsAttachmentsAttachmentIdDeleteResponse400';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Struqtur\\Zigned\\Api\\Model\\AgreementsAgreementIdDocumentsAttachmentsAttachmentIdDeleteResponse400';
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
            $object = new \Struqtur\Zigned\Api\Model\AgreementsAgreementIdDocumentsAttachmentsAttachmentIdDeleteResponse400();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
            }
            if (\array_key_exists('error', $data)) {
                $object->setError($this->denormalizer->denormalize($data['error'], 'Struqtur\\Zigned\\Api\\Model\\AgreementsAgreementIdDocumentsAttachmentsAttachmentIdDeleteResponse400Error', 'json', $context));
                unset($data['error']);
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
            $data['status'] = $object->getStatus();
            $data['error'] = $this->normalizer->normalize($object->getError(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Struqtur\\Zigned\\Api\\Model\\AgreementsAgreementIdDocumentsAttachmentsAttachmentIdDeleteResponse400' => false];
        }
    }
}