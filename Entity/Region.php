<?php

namespace CitizenKey\AddressFormatterBundle\Entity;

/**
 * Region
 */
class Region
{
    /**
     * @var integer
     */
    private $id;

    /**
     * Name of the Region
     *
     * @var string
     */
    private $name;


    /**
     * Region constructor
     *
     * @param string $name         Name of the region
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
     * Get name of the region
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name of the region
     *
     * @param string $name
     *
     * @return Region
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}