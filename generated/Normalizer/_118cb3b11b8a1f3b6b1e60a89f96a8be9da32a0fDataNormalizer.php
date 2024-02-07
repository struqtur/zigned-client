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
    class _118cb3b11b8a1f3b6b1e60a89f96a8be9da32a0fDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Vendor\\Library\\Generated\\Model\\_118cb3b11b8a1f3b6b1e60a89f96a8be9da32a0fData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Vendor\\Library\\Generated\\Model\\_118cb3b11b8a1f3b6b1e60a89f96a8be9da32a0fData';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\_118cb3b11b8a1f3b6b1e60a89f96a8be9da32a0fData();
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
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
            }
            if (\array_key_exists('order', $data)) {
                $object->setOrder($data['order']);
                unset($data['order']);
            }
            if (\array_key_exists('participants', $data)) {
                $object->setParticipants($data['participants']);
                unset($data['participants']);
            }
            if (\array_key_exists('agreement', $data)) {
                $object->setAgreement($data['agreement']);
                unset($data['agreement']);
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
            $data['status'] = $object->getStatus();
            $data['order'] = $object->getOrder();
            $data['participants'] = $object->getParticipants();
            $data['agreement'] = $object->getAgreement();
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
            return ['Vendor\\Library\\Generated\\Model\\_118cb3b11b8a1f3b6b1e60a89f96a8be9da32a0fData' => false];
        }
    }
} else {
    class _118cb3b11b8a1f3b6b1e60a89f96a8be9da32a0fDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Vendor\\Library\\Generated\\Model\\_118cb3b11b8a1f3b6b1e60a89f96a8be9da32a0fData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Vendor\\Library\\Generated\\Model\\_118cb3b11b8a1f3b6b1e60a89f96a8be9da32a0fData';
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
            $object = new \Vendor\Library\Generated\Model\_118cb3b11b8a1f3b6b1e60a89f96a8be9da32a0fData();
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
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
            }
            if (\array_key_exists('order', $data)) {
                $object->setOrder($data['order']);
                unset($data['order']);
            }
            if (\array_key_exists('participants', $data)) {
                $object->setParticipants($data['participants']);
                unset($data['participants']);
            }
            if (\array_key_exists('agreement', $data)) {
                $object->setAgreement($data['agreement']);
                unset($data['agreement']);
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
            $data['status'] = $object->getStatus();
            $data['order'] = $object->getOrder();
            $data['participants'] = $object->getParticipants();
            $data['agreement'] = $object->getAgreement();
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
            return ['Vendor\\Library\\Generated\\Model\\_118cb3b11b8a1f3b6b1e60a89f96a8be9da32a0fData' => false];
        }
    }
}