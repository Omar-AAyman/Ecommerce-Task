<?php

namespace App\Http\Requests;

include "GetError.php";

class Validation
{
    private array $errors = [];
    private $valueName;
    private $value;
    public function required()
    {
        if (empty($this->value)) {
            $this->errors[$this->valueName][__FUNCTION__] = GetErrors::Message("{$this->valueName} is required with {$this->valueName}");
        }
        return $this;
    }

    public function confirmed($comparedValue)
    {
        if ($this->value !== $comparedValue) {
            $this->errors[$this->valueName. '_confirmation'][__FUNCTION__] = GetErrors::Message("{$this->valueName} is not confirmed");
        }
        return $this;
    }

    public function max($max)
    {
        if (strlen($this->value) > $max) {
            $this->errors[$this->valueName][__FUNCTION__] = GetErrors::Message("{$this->valueName} must be less than {$max} characters");
        }
        return $this;
    }

    public function regex($regularExpression, $message="Invalid"){
        if(!preg_match($regularExpression,$this->value)){
            $this->errors[$this->valueName][__FUNCTION__] = GetErrors::Message("{$this->valueName} {$message}");
        }
        return $this;

    }

    public function in($array){
        if(!in_array($this->value,$array)){
            $this->errors[$this->valueName][__FUNCTION__] = GetErrors::Message("{$this->valueName} must be ".implode(' or ',$array));
        }
    }

    public function unique(){

    }

    public function exists(){

    }
    /**
     * Get the value of errors
     *
     * @return array
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * Set the value of valueName
     *
     * @return  self
     */ 
    public function setValueName($valueName)
    {
        $this->valueName = $valueName;

        return $this;
    }

    /**
     * Set the value of value
     *
     * @return  self
     */ 
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }
}

// $val = new Validation;
// $val->setValueName("first_name")->setValue("")->required()->max('8');
// $val->setValueName("password")->setValue("")->required()->cofirmed('43494955_og')->max('12');
// $val->setValueName("email")->setValue("OMaraymn411@gmail.com")->required()->regex('');
// $val->setValueName("gender")->setValue("a")->in(['m','f']);
// print_r($val->getErrors());

