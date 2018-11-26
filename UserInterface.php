<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11/26/18
 * Time: 7:36 AM
 */

interface UserInterface
{
    public function getPassword();

    public function getLastPasswords($limit);

}