<?php

    class Character
    {
        private $name;
        private $brawn;
        private $brain;
        private $luck;
        private $empathy;
        private $assets;
        private $id;

        function __construct($name, $brawn, $brain, $luck, $empathy, $assets = 3, $id = null)
        {
            $this->name = $name;
            $this->brawn = $brawn;
            $this->brain = $brain;
            $this->luck = $luck;
            $this->empathy = $empathy;
            $this->assets = $assets;
            $this->id = $id;
        }

        function getName()
        {
            return $this->name = $name;
        }
        function setName($new_name)
        {
            $this->name = $new_name;
        }

        function getBrawn()
        {
            return $this->brawn = $brawn;
        }

        function setBrawn($new_brawn)
        {
            $this->brawn = $new_brawn;
        }

        function getBrain()
        {
            return $this->brain = $brain;
        }

        function setBrain($new_brain)
        {
            $this->brain = $new_brain;
        }

        function getLuck()
        {
            return $this->luck = $luck;
        }

        function setLuck($new_luck)
        {
            $this->luck = $new_luck;
        }

        function getEmpathy()
        {
            return $this->empathy = $empathy;
        }

        function getAssets()
        {
            return $this->assets();
        }

        function setAssets($new_assets)
        {
            $this->assets = $new_assets;
        }
        function getAssets()
        {
            return $this->assets();
        }

        function setAssets($new_assets)
        {
            $this->assets = $new_assets;
        }

        function getId()
        {
            return $this->id = $id;
        }

        function save()
        {

        }

        static function importArchetype($name, $archetype)
        {
            return new Character($name, $archetype->getBrawn(), $archetype->getBrain(), $archetype->getLuck(), $archetype->getEmpathy(), $archetype->getAssets());
        }

        static function getAll()
        {
            $GLOBALS['DB']->query("SELECT * FROM character;");
        }

        static function deleteAll()
        {
            $GLOBALS['DB']->exec("DELETE FROM character;");
        }
    }





?>
