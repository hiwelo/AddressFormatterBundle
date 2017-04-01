<?php

namespace CitizenKey\AddressFormatterBundle\Entity;

/**
 * Street
 */
class Street
{
    /**
     * @var integer
     */
    private $id;

    /**
     * Name of the street
     *
     * @var string
     */
    private $name;


    /**
     * Street constructor
     *
     * @param string $name Name of the street
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
     * Get name of the street
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name of the street
     *
     * @param string $name
     *
     * @return Street
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
