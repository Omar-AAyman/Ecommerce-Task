<?php

namespace App\Database\Models;
use App\Database\Config\Connection;
use App\Database\Contracts\Crud;


class User extends Connection implements Crud
{
    private $id, $first_name, $last_name, $phone, $email,
        $password, $gender, $image, $activation_code,
        $email_verified_at, $created_at , $updated_at;

 

        function create(){}
        function read(){}
        function update(){}
        function delete(){}

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of first_name
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set the value of first_name
     */
    public function setFirstName($first_name): self
    {
        $this->first_name = $first_name;

        return $this;
    }

    /**
     * Get the value of last_name
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Set the value of last_name
     */
    public function setLastName($last_name): self
    {
        $this->last_name = $last_name;

        return $this;
    }

    /**
     * Get the value of phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     */
    public function setPhone($phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }

        /**
         * Get the value of password
         */
        public function getPassword()
        {
                return $this->password;
        }

        /**
         * Set the value of password
         */
        public function setPassword($password): self
        {
                $this->password = $password;

                return $this;
        }

        /**
         * Get the value of gender
         */
        public function getGender()
        {
                return $this->gender;
        }

        /**
         * Set the value of gender
         */
        public function setGender($gender): self
        {
                $this->gender = $gender;

                return $this;
        }

        /**
         * Get the value of image
         */
        public function getImage()
        {
                return $this->image;
        }

        /**
         * Set the value of image
         */
        public function setImage($image): self
        {
                $this->image = $image;

                return $this;
        }

        /**
         * Get the value of activation_code
         */
        public function getActivationCode()
        {
                return $this->activation_code;
        }

        /**
         * Set the value of activation_code
         */
        public function setActivationCode($activation_code): self
        {
                $this->activation_code = $activation_code;

                return $this;
        }

        /**
         * Get the value of email_verified_at
         */
        public function getEmailVerifiedAt()
        {
                return $this->email_verified_at;
        }

        /**
         * Set the value of email_verified_at
         */
        public function setEmailVerifiedAt($email_verified_at): self
        {
                $this->email_verified_at = $email_verified_at;

                return $this;
        }

        /**
         * Get the value of created_at
         */
        public function getCreatedAt()
        {
                return $this->created_at;
        }

        /**
         * Set the value of created_at
         */
        public function setCreatedAt($created_at): self
        {
                $this->created_at = $created_at;

                return $this;
        }

        /**
         * Get the value of updated_at
         */
        public function getUpdatedAt()
        {
                return $this->updated_at;
        }

        /**
         * Set the value of updated_at
         */
        public function setUpdatedAt($updated_at): self
        {
                $this->updated_at = $updated_at;

                return $this;
        }
}
