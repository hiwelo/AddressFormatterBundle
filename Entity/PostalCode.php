<?php

namespace Hiwelo\AddressFormatterBundle\Entity;

/**
 * Postal code
 */
class PostalCode
{
    /**
     * @var integer
     */
    private $id;

    /**
     * Postal code
     *
     * @var string
     */
    private $code;


    /**
     * PostalCode constructor
     *
     * @param string $name         Name of the postal code
     *
     * @return void
     */
    public function __construct($code = null)
    {
        $this->setCode($code);
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
     * Get the postal code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the postal code
     *
     * @param string $code
     *
     * @return PostalCode
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Returns the postal code when the user asks to display the complete object
     * with twig
     *
     * @return string Postal code
     */
    public function __toString()
    {
        return $this->getCode();
    }
}
