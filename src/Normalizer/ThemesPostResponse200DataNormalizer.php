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
    class ThemesPostResponse200DataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Struqtur\\Zigned\\Model\\ThemesPostResponse200Data';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Struqtur\\Zigned\\Model\\ThemesPostResponse200Data';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Struqtur\Zigned\Model\ThemesPostResponse200Data();
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
            if (\array_key_exists('logo', $data)) {
                $object->setLogo($this->denormalizer->denormalize($data['logo'], 'Struqtur\\Zigned\\Model\\ThemesPostResponse200DataLogo', 'json', $context));
                unset($data['logo']);
            }
            if (\array_key_exists('icon', $data)) {
                $object->setIcon($this->denormalizer->denormalize($data['icon'], 'Struqtur\\Zigned\\Model\\ThemesPostResponse200DataIcon', 'json', $context));
                unset($data['icon']);
            }
            if (\array_key_exists('primary_color', $data)) {
                $object->setPrimaryColor($data['primary_color']);
                unset($data['primary_color']);
            }
            if (\array_key_exists('metadata', $data)) {
                $object->setMetadata($this->denormalizer->denormalize($data['metadata'], 'Struqtur\\Zigned\\Model\\ThemesPostResponse200DataMetadata', 'json', $context));
                unset($data['metadata']);
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
            $data['logo'] = $this->normalizer->normalize($object->getLogo(), 'json', $context);
            $data['icon'] = $this->normalizer->normalize($object->getIcon(), 'json', $context);
            if ($object->isInitialized('primaryColor') && null !== $object->getPrimaryColor()) {
                $data['primary_color'] = $object->getPrimaryColor();
            }
            if ($object->isInitialized('metadata') && null !== $object->getMetadata()) {
                $data['metadata'] = $this->normalizer->normalize($object->getMetadata(), 'json', $context);
            }
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
            return ['Struqtur\\Zigned\\Model\\ThemesPostResponse200Data' => false];
        }
    }
} else {
    class ThemesPostResponse200DataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Struqtur\\Zigned\\Model\\ThemesPostResponse200Data';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Struqtur\\Zigned\\Model\\ThemesPostResponse200Data';
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
            $object = new \Struqtur\Zigned\Model\ThemesPostResponse200Data();
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
            if (\array_key_exists('logo', $data)) {
                $object->setLogo($this->denormalizer->denormalize($data['logo'], 'Struqtur\\Zigned\\Model\\ThemesPostResponse200DataLogo', 'json', $context));
                unset($data['logo']);
            }
            if (\array_key_exists('icon', $data)) {
                $object->setIcon($this->denormalizer->denormalize($data['icon'], 'Struqtur\\Zigned\\Model\\ThemesPostResponse200DataIcon', 'json', $context));
                unset($data['icon']);
            }
            if (\array_key_exists('primary_color', $data)) {
                $object->setPrimaryColor($data['primary_color']);
                unset($data['primary_color']);
            }
            if (\array_key_exists('metadata', $data)) {
                $object->setMetadata($this->denormalizer->denormalize($data['metadata'], 'Struqtur\\Zigned\\Model\\ThemesPostResponse200DataMetadata', 'json', $context));
                unset($data['metadata']);
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
            $data['logo'] = $this->normalizer->normalize($object->getLogo(), 'json', $context);
            $data['icon'] = $this->normalizer->normalize($object->getIcon(), 'json', $context);
            if ($object->isInitialized('primaryColor') && null !== $object->getPrimaryColor()) {
                $data['primary_color'] = $object->getPrimaryColor();
            }
            if ($object->isInitialized('metadata') && null !== $object->getMetadata()) {
                $data['metadata'] = $this->normalizer->normalize($object->getMetadata(), 'json', $context);
            }
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
            return ['Struqtur\\Zigned\\Model\\ThemesPostResponse200Data' => false];
        }
    }
}