<?php

namespace CitizenKey\AddressFormatterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Address
 */
class Address
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * Country
     *
     * @var Country
     */
    protected $country;

    /**
     * Region
     *
     * @var Region
     */
    protected $region;

    /**
     * Locality
     *
     * @var Locality
     */
    protected $locality;

    /**
     * PostalCode
     *
     * @var PostalCode
     */
    protected $postalCode;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set country
     *
     * @param Country $country
     *
     * @return Address
     */
    public function setCountry(Country $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set region
     *
     * @param Region $region
     *
     * @return Address
     */
    public function setRegion(Region $region = null)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return Region
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set locality
     *
     * @param Locality $locality
     *
     * @return Address
     */
    public function setLocality(Locality $locality = null)
    {
        $this->locality = $locality;

        return $this;
    }

    /**
     * Get locality
     *
     * @return Locality
     */
    public function getLocality()
    {
        return $this->locality;
    }

    /**
     * Set the postal code
     *
     * @param PostalCode $postalCode
     *
     * @return Address
     */
    public function setPostalCode(PostalCode $postalCode = null)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get the postal code
     *
     * @return PostalCode
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }
}
