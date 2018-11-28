<?php

class PasswordPolicy
{
    private $rules = null;

    /**
     * PasswordPolicy constructor.
     * @param array $rules
     */
    public function __construct(Rules $rules)
    {
        $this->rules = $rules;
    }

    public function check(UserInterface $user, $password)
    {
        if ($this->rules->isValidateUpperCase()) {
            $caseValidator = new CaseValidator();
            if (!$caseValidator->containsUpperCase($password, 1)) {
                return false;
            }
        }

        if ($this->rules->isValidateLowerCase()) {
            $caseValidator = new CaseValidator();
            if (!$caseValidator->containsLowerCase($password, 2)) {
                return false;
            }
        }
    }
}
