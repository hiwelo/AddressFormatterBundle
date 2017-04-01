<?php

namespace CitizenKey\AddressFormatterBundle\Entity;

/**
 * StreetNumber
 */
class StreetNumber
{
    /**
     * @var integer
     */
    private $id;

    /**
     * StreetNumber in the street
     *
     * @var string
     */
    private $streetNumber;


    /**
     * StreetNumber constructor
     *
     * @param string $streetNumber StreetNumber in the street
     *
     * @return void
     */
    public function __construct($streetNumber = null)
    {
        $this->setStreetNumber($streetNumber);
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the number in the street
     *
     * @return string
     */
    public function getStreetNumber()
    {
        return $this->streetNumber;
    }

    /**
     * Set the number in the street
     *
     * @param string $streetNumber
     *
     * @return StreetNumber
     */
    public function setStreetNumber($streetNumber)
    {
        $this->streetNumber = $streetNumber;

        return $this;
    }
}
