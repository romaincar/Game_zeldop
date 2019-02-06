<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 06/02/2019
 * Time: 09:56
 */

class personnage
{
    public function __construct()
    {
        $this->vie = 100;
        $this->attaque = 50;
        $this->defense = 30;
        $this->level = 1;
        $this->experience = 0;
        $this->avatar = "";
    }
}