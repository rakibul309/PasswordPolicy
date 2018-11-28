<?php

class CaseValidator
{
    public function containsUpperCase($string, $numberOfChar = 1)
    {
        if (ctype_lower($string)) {
            return false;
        }

        return $this->containsCase($string, 'upper', $numberOfChar);
    }

    public function containsLowerCase($string, $numberOfChar = 1)
    {
        if (ctype_lower($string)) {
            return false;
        }

        return $this->containsCase($string, 'lower', $numberOfChar);
    }

    private function containsCase($string, $case = 'lower', $numberOfChar = 1)
    {
        $count = 0;
        $chars = str_split($string);

        foreach ($chars as $char) {

            if (strtolower($case) == 'upper') {
                $matched = ctype_upper($char);
            } else {
                $matched = ctype_lower($char);
            }

            if ($matched) {
                $count++;
                if ($count >= $numberOfChar) {
                    return true;
                }
            }
        }

        return false;
    }
}