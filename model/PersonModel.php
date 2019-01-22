<?php
/**
 * Created by PhpStorm.
 * User: antoine
 * Date: 23/01/19
 * Time: 00:09
 */

namespace model;


class PersonModel
{
private $id;
private $first;
private $last;
private $gender;
private $avatar;
private $usename;
private $password;

    /**
     * PersonModel constructor.
     * @param $id
     * @param $first
     * @param $last
     * @param $gender
     * @param $avatar
     * @param $usename
     * @param $password
     */
    public function __construct($first, $last, $gender, $avatar, $usename, $password,$id=null)
    {
        $this->id = $id;
        $this->first = $first;
        $this->last = $last;
        $this->gender = $gender;
        $this->avatar = $avatar;
        $this->usename = $usename;
        $this->password = $password;
    }

    /**
     * @return null
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * @return mixed
     */
    public function getFirst()
    {
        return $this->first;
    }

    /**
     * @param mixed $first
     */
    public function setFirst($first)
    {
        $this->first = $first;
    }

    /**
     * @return mixed
     */
    public function getLast()
    {
        return $this->last;
    }

    /**
     * @param mixed $last
     */
    public function setLast($last)
    {
        $this->last = $last;
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
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @param mixed $avatar
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }

    /**
     * @return mixed
     */
    public function getUsename()
    {
        return $this->usename;
    }

    /**
     * @param mixed $usename
     */
    public function setUsename($usename)
    {
        $this->usename = $usename;
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
    public function setPassword($password)
    {
        $this->password = $password;
    }

}