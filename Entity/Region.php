<?php

namespace Hiwelo\AddressFormatterBundle\Entity;

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
     * Code of the Region
     *
     * @var string
     */
    private $code;


    /**
     * Region constructor
     *
     * @param string $name Name of the region
     *
     * @return void
     */
    public function __construct($name = null, $code = null)
    {
        $this->setName($name);
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

    /**
     * Get code of the region
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set code of the region
     *
     * @param string $code
     *
     * @return Region
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Returns the region name when the user asks to display the complete object
     * with twig
     *
     * @return string Region name
     */
    public function __toString()
    {
        return $this->getName();
    }
}
