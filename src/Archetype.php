<?php

    /**
     *
     */

    class Archetype
    {
        private $name;
        private $brawn;
        private $brain;
        private $luck;
        private $empathy;
        private $id;

        function __construct($name, $brawn, $brain, $luck, $empathy,  $id = null)
        {
            $this->name = $name;
            $this->brawn = $brawn;
            $this->brain = $brain;
            $this->luck = $luck;
            $this->empathy = $empathy;
            $this->id = $id;
        }

        function getName()
        {
            return $this->name = $name;
        }

        function getBrawn()
        {
            return $this->brawn = $brawn;
        }

        function getBrain()
        {
            return $this->brain = $brain;
        }

        function getLuck()
        {
            return $this->luck = $luck;
        }

        function getEmpathy()
        {
            return $this->empathy = $empathy;
        }

        function getId()
        {
            return $this->id = $id;
        }

        static function getAll()
        {
            $GLOBALS['DB']->query("SELECT * FROM archetypes;"); 
        }
    }





?>
