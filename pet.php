<?php

/**
 * Pet Class
 * Represents a pet object with name and color
 * @author Jean-Kenneth Antonio
 * @copyright 2021
 * @version 1.0
 */
class Pet
{
    private $_name;
    private $_color;

    /**
     * Pet constructor
     * @param string $name the pet's name, default "unknown"
     * @param string $color the pet's color, default "unknown"
     * @return void
     */
    function __construct($name="unknown", $color="unknown")
    {
        $this->_name = $name;
        $this->_color = $color;
    }

    /**
     * getName() function
     * @return string the pet's name
     */
    function getName()
    {
        return $this->_name;
    }

    /**
     * setName() function
     * @param $name pet's new name
     * @return void
     */
    function setName($name)
    {
        $this->_name = $name;
    }

    /**
     * getColor() function
     * @return string the color of the pet
     */
    function getColor()
    {
        return $this->_color;
    }

    /**
     * setColor() function
     * @param $color pet's new color
     */
    function setColor($color)
    {
        $this->_color = $color;
    }

    function eat() {
        echo "{$this->_name} is eating<br>";
    }

    function talk() {
        echo "{$this->_name} is talking<br>";
    }

    function sleep() {
        echo "{$this->_name} is sleeping<br>";
    }


}
