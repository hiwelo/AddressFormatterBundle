<?php

namespace Hiwelo\AddressFormatterBundle\Service;

use Hiwelo\AddressFormatterBundle\Entity\Address;
use Hiwelo\AddressFormatterBundle\Entity\Country;
use Hiwelo\AddressFormatterBundle\Entity\Locality;
use Hiwelo\AddressFormatterBundle\Entity\PostalCode;
use Hiwelo\AddressFormatterBundle\Entity\Region;
use Hiwelo\AddressFormatterBundle\Entity\Street;
use Hiwelo\AddressFormatterBundle\Entity\StreetNumber;

class AddressFormatter
{
    private $twig;

    public function __construct(\Twig_Environment $twig)
    {
        $this->twig = $twig;
    }

    public function load($args)
    {
        return (new Address())
            ->setCountry((new Country($args['countryName'], $args['countryCode'])))
            ->setRegion((new Region($args['regionName'], $args['regionCode'])))
            ->setLocality((new Locality($args['locality'])))
            ->setPostalCode((new PostalCode($args['postalcode'])))
            ->setStreet((new Street($args['street'])))
            ->setStreetNumber((new StreetNumber($args['streetNumber'])))
        ;
    }

    public function format(Address $address, $options = [])
    {
        $countryCode = $address->getCountry()->getCode();

        $address = $this->twig->render(
            'AddressFormatterBundle:Addresses:' . $countryCode . '.html.twig',
            [
                'address' => $address,
                'options' => $options,
            ]
        );

        $address = trim($address);

        if (!array_key_exists('inline', $options) || !$options['inline']) {
            $address = nl2br($address);
        } else {
            $address = str_replace("\n", ", ", $address);
        }

        return $address;
    }
}
