<?php

namespace CitizenKey\AddressFormatterBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Country
 */
class Country
{
    /**
     * @var integer
     */
    private $id;

    /**
     * Short name used by the country
     *
     * @var string
     */
    private $localName;

    /**
     * Name of the country
     *
     * @var string
     */
    private $name;

    /**
     * Alpha-2 code country
     *
     * @var string
     *
     * @link https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2#SS
     */
    private $code;

    /**
     * Regions of the country
     *
     * @var ArrayCollection
     */
    protected $regions;


    /**
     * Country constructor
     *
     * @param string $name         Name of the country
     * @param string $alpha_2_code Code of the country
     *
     * @return void
     */
    public function __construct($name = null, $alpha_2_code = null)
    {
        $this->setName($name);
        $this->setCode($alpha_2_code);
        $this->regions = new ArrayCollection();
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
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Country
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the local name of the country
     *
     * @return string
     */
    public function getLocalName()
    {
        return $this->localName;
    }

    /**
     * Set the local name of the country
     *
     * @param string $localName
     *
     * @return Country
     */
    public function setLocalName($localName)
    {
        $this->localName = $localName;

        return $this;
    }

    /**
     * Get the country code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the country code
     *
     * @param string $code
     *
     * @return Country
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Add a region to the country
     *
     * @param Region $region Region to add to the country
     *
     * @return Country
     */
    public function addRegion(Region $region)
    {
        $this->regions[] = $region;

        return $this;
    }

    /**
     * Remove a region from the country
     *
     * @param Region $region
     *
     * @return void
     */
    public function removeRegion(Region $region)
    {
        $this->regions->removeElement($region);
    }

    /**
     * Get all regions from the country
     *
     * @return ArrayCollection
     */
    public function getRegions()
    {
        return $this->regions;
    }

    /**
     * Returns the country name when the user asks to display the complete object
     * with twig
     *
     * @return string Country name
     */
    public function __toString()
    {
        return $this->getName();
    }
}
