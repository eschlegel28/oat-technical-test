<?php
/**
 * Created by PhpStorm.
 * User: eschlegel
 * Date: 06/08/2018
 * Time: 17:37
 */
namespace Entity;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;
    /**
     * @ORM\Column(type="string", length=100)
     */
    public $login;
    /**
     * @ORM\Column(type="string", length=100)
     */
    public $password;
    /**
     * @ORM\Column(type="usertitleenum")
     */
    public $title;
    /**
     * @ORM\Column(type="string", length=100)
     */
    public $lastname;
    /**
     * @ORM\Column(type="string", length=100)
     */
    public $firstname;

    /**
     * @ORM\Column(type="usergenderenum", length=100)
     */
    public $gender;

    /**
     * @ORM\Column(type="string", length=100)
     */
    public $email;

    /**
     * @ORM\Column(type="string", length=100)
     */
    public $address;

    /**
     * @ORM\Column(type="string", length=100)
     */
    public $picture;

    /**
     * User constructor.
     * @param $login
     * @param $password
     * @param $title
     * @param $lastname
     * @param $firstname
     * @param $gender
     * @param $email
     * @param $address
     * @param $picture
     */
    public function __construct($login, $password, $title, $lastname, $firstname, $gender, $email, $address, $picture)
    {
        $this->login = $login;
        $this->password = $password;
        $this->title = $title;
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->gender = $gender;
        $this->email = $email;
        $this->address = $address;
        $this->picture = $picture;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login): void
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname): void
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender): void
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * @param mixed $picture
     */
    public function setPicture($picture): void
    {
        $this->picture = $picture;
    }
}

