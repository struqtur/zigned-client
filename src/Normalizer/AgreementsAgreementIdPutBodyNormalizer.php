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
    class AgreementsAgreementIdPutBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Struqtur\\Zigned\\Model\\AgreementsAgreementIdPutBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Struqtur\\Zigned\\Model\\AgreementsAgreementIdPutBody';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Struqtur\Zigned\Model\AgreementsAgreementIdPutBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('issuer', $data)) {
                $object->setIssuer($this->denormalizer->denormalize($data['issuer'], 'Struqtur\\Zigned\\Model\\AgreementsAgreementIdPutBodyissuer', 'json', $context));
                unset($data['issuer']);
            }
            if (\array_key_exists('send_emails', $data)) {
                $object->setSendEmails($data['send_emails']);
                unset($data['send_emails']);
            }
            if (\array_key_exists('trust_level', $data)) {
                $object->setTrustLevel($data['trust_level']);
                unset($data['trust_level']);
            }
            if (\array_key_exists('signing_order', $data)) {
                $object->setSigningOrder($data['signing_order']);
                unset($data['signing_order']);
            }
            if (\array_key_exists('theme', $data)) {
                $object->setTheme($data['theme']);
                unset($data['theme']);
            }
            if (\array_key_exists('success_callback_url', $data)) {
                $object->setSuccessCallbackUrl($data['success_callback_url']);
                unset($data['success_callback_url']);
            }
            if (\array_key_exists('lookup_key', $data)) {
                $object->setLookupKey($data['lookup_key']);
                unset($data['lookup_key']);
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
            if ($object->isInitialized('issuer') && null !== $object->getIssuer()) {
                $data['issuer'] = $this->normalizer->normalize($object->getIssuer(), 'json', $context);
            }
            if ($object->isInitialized('sendEmails') && null !== $object->getSendEmails()) {
                $data['send_emails'] = $object->getSendEmails();
            }
            if ($object->isInitialized('trustLevel') && null !== $object->getTrustLevel()) {
                $data['trust_level'] = $object->getTrustLevel();
            }
            if ($object->isInitialized('signingOrder') && null !== $object->getSigningOrder()) {
                $data['signing_order'] = $object->getSigningOrder();
            }
            if ($object->isInitialized('theme') && null !== $object->getTheme()) {
                $data['theme'] = $object->getTheme();
            }
            if ($object->isInitialized('successCallbackUrl') && null !== $object->getSuccessCallbackUrl()) {
                $data['success_callback_url'] = $object->getSuccessCallbackUrl();
            }
            if ($object->isInitialized('lookupKey') && null !== $object->getLookupKey()) {
                $data['lookup_key'] = $object->getLookupKey();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Struqtur\\Zigned\\Model\\AgreementsAgreementIdPutBody' => false];
        }
    }
} else {
    class AgreementsAgreementIdPutBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Struqtur\\Zigned\\Model\\AgreementsAgreementIdPutBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Struqtur\\Zigned\\Model\\AgreementsAgreementIdPutBody';
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
            $object = new \Struqtur\Zigned\Model\AgreementsAgreementIdPutBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('issuer', $data)) {
                $object->setIssuer($this->denormalizer->denormalize($data['issuer'], 'Struqtur\\Zigned\\Model\\AgreementsAgreementIdPutBodyissuer', 'json', $context));
                unset($data['issuer']);
            }
            if (\array_key_exists('send_emails', $data)) {
                $object->setSendEmails($data['send_emails']);
                unset($data['send_emails']);
            }
            if (\array_key_exists('trust_level', $data)) {
                $object->setTrustLevel($data['trust_level']);
                unset($data['trust_level']);
            }
            if (\array_key_exists('signing_order', $data)) {
                $object->setSigningOrder($data['signing_order']);
                unset($data['signing_order']);
            }
            if (\array_key_exists('theme', $data)) {
                $object->setTheme($data['theme']);
                unset($data['theme']);
            }
            if (\array_key_exists('success_callback_url', $data)) {
                $object->setSuccessCallbackUrl($data['success_callback_url']);
                unset($data['success_callback_url']);
            }
            if (\array_key_exists('lookup_key', $data)) {
                $object->setLookupKey($data['lookup_key']);
                unset($data['lookup_key']);
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
            if ($object->isInitialized('issuer') && null !== $object->getIssuer()) {
                $data['issuer'] = $this->normalizer->normalize($object->getIssuer(), 'json', $context);
            }
            if ($object->isInitialized('sendEmails') && null !== $object->getSendEmails()) {
                $data['send_emails'] = $object->getSendEmails();
            }
            if ($object->isInitialized('trustLevel') && null !== $object->getTrustLevel()) {
                $data['trust_level'] = $object->getTrustLevel();
            }
            if ($object->isInitialized('signingOrder') && null !== $object->getSigningOrder()) {
                $data['signing_order'] = $object->getSigningOrder();
            }
            if ($object->isInitialized('theme') && null !== $object->getTheme()) {
                $data['theme'] = $object->getTheme();
            }
            if ($object->isInitialized('successCallbackUrl') && null !== $object->getSuccessCallbackUrl()) {
                $data['success_callback_url'] = $object->getSuccessCallbackUrl();
            }
            if ($object->isInitialized('lookupKey') && null !== $object->getLookupKey()) {
                $data['lookup_key'] = $object->getLookupKey();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Struqtur\\Zigned\\Model\\AgreementsAgreementIdPutBody' => false];
        }
    }
}