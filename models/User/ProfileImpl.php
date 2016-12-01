<?php
/**
 * Created by PhpStorm.
 * User: long
 * Date: 11/23/16
 * Time: 1:46 PM
 */

namespace Models\User;


use Contracts\User\Profile;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fft_user_profile")
 */
class ProfileImpl implements Profile
{
    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     */
    protected $uid;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $country = '';

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    protected $preference = 0;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $status = '';

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $profilePicture = '';

    /**
     * @return int
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @param int $uid
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return int
     */
    public function getPreference()
    {
        return $this->preference;
    }

    /**
     * @param int $preference
     */
    public function setPreference($preference)
    {
        $this->preference = $preference;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getProfilePicture()
    {
        return $this->profilePicture;
    }

    /**
     * @param string $profilePicture
     */
    public function setProfilePicture($profilePicture)
    {
        $this->profilePicture = $profilePicture;
    }
}