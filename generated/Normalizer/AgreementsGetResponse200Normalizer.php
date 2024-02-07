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
    class AgreementsGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Vendor\\Library\\Generated\\Model\\AgreementsGetResponse200';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Vendor\\Library\\Generated\\Model\\AgreementsGetResponse200';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\AgreementsGetResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('version', $data)) {
                $object->setVersion($data['version']);
                unset($data['version']);
            }
            if (\array_key_exists('result_type', $data)) {
                $object->setResultType($data['result_type']);
                unset($data['result_type']);
            }
            if (\array_key_exists('resource_type', $data)) {
                $object->setResourceType($data['resource_type']);
                unset($data['resource_type']);
            }
            if (\array_key_exists('data', $data)) {
                $values = [];
                foreach ($data['data'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Vendor\\Library\\Generated\\Model\\AgreementsGetResponse200DataItem', 'json', $context);
                }
                $object->setData($values);
                unset($data['data']);
            }
            if (\array_key_exists('pagination', $data)) {
                $object->setPagination($this->denormalizer->denormalize($data['pagination'], 'Vendor\\Library\\Generated\\Model\\AgreementsGetResponse200Pagination', 'json', $context));
                unset($data['pagination']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['version'] = $object->getVersion();
            $data['result_type'] = $object->getResultType();
            $data['resource_type'] = $object->getResourceType();
            $values = [];
            foreach ($object->getData() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['data'] = $values;
            $data['pagination'] = $this->normalizer->normalize($object->getPagination(), 'json', $context);
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Vendor\\Library\\Generated\\Model\\AgreementsGetResponse200' => false];
        }
    }
} else {
    class AgreementsGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Vendor\\Library\\Generated\\Model\\AgreementsGetResponse200';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Vendor\\Library\\Generated\\Model\\AgreementsGetResponse200';
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
            $object = new \Vendor\Library\Generated\Model\AgreementsGetResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('version', $data)) {
                $object->setVersion($data['version']);
                unset($data['version']);
            }
            if (\array_key_exists('result_type', $data)) {
                $object->setResultType($data['result_type']);
                unset($data['result_type']);
            }
            if (\array_key_exists('resource_type', $data)) {
                $object->setResourceType($data['resource_type']);
                unset($data['resource_type']);
            }
            if (\array_key_exists('data', $data)) {
                $values = [];
                foreach ($data['data'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Vendor\\Library\\Generated\\Model\\AgreementsGetResponse200DataItem', 'json', $context);
                }
                $object->setData($values);
                unset($data['data']);
            }
            if (\array_key_exists('pagination', $data)) {
                $object->setPagination($this->denormalizer->denormalize($data['pagination'], 'Vendor\\Library\\Generated\\Model\\AgreementsGetResponse200Pagination', 'json', $context));
                unset($data['pagination']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
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
            $data['version'] = $object->getVersion();
            $data['result_type'] = $object->getResultType();
            $data['resource_type'] = $object->getResourceType();
            $values = [];
            foreach ($object->getData() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['data'] = $values;
            $data['pagination'] = $this->normalizer->normalize($object->getPagination(), 'json', $context);
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Vendor\\Library\\Generated\\Model\\AgreementsGetResponse200' => false];
        }
    }
}