<?php

namespace App\Business\DatabaseData\DataStructures;

/**
 * A routine of the database.
 *
 * @package App\Business\DatabaseData\DataStructures
 */
class StructureRoutine
{
	/**
	 * The routine name.
	 */
    public $name;

    /**
     * Gets the view name.
     *
     * @return string
     */
    public function getName()
    {
    	return $this->name;
    }

    /**
     * Defines the value of the view name.
     *
     * @param string $name
     */
    public function setName($name)
    {
    	$this->name = $name;
    }
}