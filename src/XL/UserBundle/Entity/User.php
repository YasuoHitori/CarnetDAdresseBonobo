<?php

namespace XL\UserBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="bonobo_users")
 */

class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */

    protected $id;
    protected $name;
    protected $age;
    protected $family;
    protected $friend;
    protected $race;
    protected $food;

    public function __construct()
    {
        parent::__construct();
        $this->friend = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setFamily($family)
    {
        $this->family = $family;
        return $this;
    }

    public function getFamily()
    {
        return $this->family;
    }

    public function setRace($race)
    {
        $this->race = $race;
        return $this;
    }

    public function getRace()
    {
        return $this->race;
    }

    public function setFood($food)
    {
        $this->food = $food;
        return $this;
    }

    public function getFood()
    {
        return $this->food;
    }

    public function addFriend($friend)
    {
        $this->friend[] = $friend;
    }

    public function removeFriend($toRemove)
    {
        $this->friend->removeElement($toRemove);
    }

    public function getFriend()
    {
        return $this->friend;
    }
}