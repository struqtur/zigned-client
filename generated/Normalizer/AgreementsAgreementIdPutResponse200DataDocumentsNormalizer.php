<?php

namespace Vendor\Library\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Vendor\Library\Generated\Runtime\Normalizer\CheckArray;
use Vendor\Library\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class AgreementsAgreementIdPutResponse200DataDocumentsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Vendor\\Library\\Generated\\Model\\AgreementsAgreementIdPutResponse200DataDocuments';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Vendor\\Library\\Generated\\Model\\AgreementsAgreementIdPutResponse200DataDocuments';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\AgreementsAgreementIdPutResponse200DataDocuments();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('original_documents', $data)) {
                $object->setOriginalDocuments($this->denormalizer->denormalize($data['original_documents'], 'Vendor\\Library\\Generated\\Model\\AgreementsAgreementIdPutResponse200DataDocumentsOriginalDocuments', 'json', $context));
                unset($data['original_documents']);
            }
            if (\array_key_exists('signed_document', $data)) {
                $object->setSignedDocument($data['signed_document']);
                unset($data['signed_document']);
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
            $data['original_documents'] = $this->normalizer->normalize($object->getOriginalDocuments(), 'json', $context);
            $data['signed_document'] = $object->getSignedDocument();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Vendor\\Library\\Generated\\Model\\AgreementsAgreementIdPutResponse200DataDocuments' => false];
        }
    }
} else {
    class AgreementsAgreementIdPutResponse200DataDocumentsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Vendor\\Library\\Generated\\Model\\AgreementsAgreementIdPutResponse200DataDocuments';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Vendor\\Library\\Generated\\Model\\AgreementsAgreementIdPutResponse200DataDocuments';
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
            $object = new \Vendor\Library\Generated\Model\AgreementsAgreementIdPutResponse200DataDocuments();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('original_documents', $data)) {
                $object->setOriginalDocuments($this->denormalizer->denormalize($data['original_documents'], 'Vendor\\Library\\Generated\\Model\\AgreementsAgreementIdPutResponse200DataDocumentsOriginalDocuments', 'json', $context));
                unset($data['original_documents']);
            }
            if (\array_key_exists('signed_document', $data)) {
                $object->setSignedDocument($data['signed_document']);
                unset($data['signed_document']);
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
            $data['original_documents'] = $this->normalizer->normalize($object->getOriginalDocuments(), 'json', $context);
            $data['signed_document'] = $object->getSignedDocument();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Vendor\\Library\\Generated\\Model\\AgreementsAgreementIdPutResponse200DataDocuments' => false];
        }
    }
}