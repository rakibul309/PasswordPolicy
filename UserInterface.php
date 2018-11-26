<?php

interface UserInterface
{
    public function getPassword();

    public function getLastPasswords($limit);

}
