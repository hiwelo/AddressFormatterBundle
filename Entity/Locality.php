<?php

namespace CitizenKey\AddressFormatterBundle\Entity;

/**
 * Locality
 */
class Locality
{
    /**
     * @var integer
     */
    private $id;

    /**
     * Name of the Locality
     *
     * @var string
     */
    private $name;


    /**
     * Locality constructor
     *
     * @param string $name         Name of the locality
     *
     * @return void
     */
    public function __construct($name = null)
    {
        $this->setName($name);
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
     * Get name of the locality
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name of the locality
     *
     * @param string $name
     *
     * @return Locality
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Returns the name of the city when the user asks to display the complete object
     * with twig
     *
     * @return string City name
     */
    public function __toString()
    {
        return $this->getName();
    }
}
