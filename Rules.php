<?php

class Rules
{
    private $validateUpperCase = false;
    private $validateLowerCase = false;

    private $upperCaseCharacterLimit = 0;
    private $lowerCaseCharacterLimit = 0;

    /**
     * @return bool
     */
    public function isValidateUpperCase()
    {
        return $this->validateUpperCase;
    }

    /**
     * @param bool $validateUpperCase
     */
    public function setValidateUpperCase($validateUpperCase)
    {
        $this->validateUpperCase = $validateUpperCase;
    }

    /**
     * @return bool
     */
    public function isValidateLowerCase()
    {
        return $this->validateLowerCase;
    }

    /**
     * @param bool $validateLowerCase
     */
    public function setValidateLowerCase($validateLowerCase)
    {
        $this->validateLowerCase = $validateLowerCase;
    }

    /**
     * @return int
     */
    public function getUpperCaseCharacterLimit()
    {
        return $this->upperCaseCharacterLimit;
    }

    /**
     * @param int $upperCaseCharacterLimit
     */
    public function setUpperCaseCharacterLimit($upperCaseCharacterLimit)
    {
        $this->upperCaseCharacterLimit = $upperCaseCharacterLimit;
    }

    /**
     * @return int
     */
    public function getLowerCaseCharacterLimit()
    {
        return $this->lowerCaseCharacterLimit;
    }

    /**
     * @param int $lowerCaseCharacterLimit
     */
    public function setLowerCaseCharacterLimit($lowerCaseCharacterLimit)
    {
        $this->lowerCaseCharacterLimit = $lowerCaseCharacterLimit;
    }
}