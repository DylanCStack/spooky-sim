<?php

    class Archetype
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

        function getAssets()
        {
            return $this->assets = $assets;
        }

        function getId()
        {
            return $this->id = $id;
        }

        function save()
        {
            $GLOBALS['DB']->exec("INSERT INTO archetype (name, brawn, brain, luck, empathy, assets) VALUES ('{$this->getName()}', {$this->getBrawn()}, {$this->getBrain()}, {$this->getLuck()}, {$this->getEmpathy()}, {$this->getAssets()});");
            $this->id = $GLOBALS['DB']->lastInsertId();
        }

        function delete()
        {
            $GLOBALS['DB']->exec("DELETE FROM archetype WHERE id= {$this->getId()};");
        }

        static function getAll()
        {
            $GLOBALS['DB']->query("SELECT * FROM archetype;");
        }

        static function deleteAll()
        {
            $GLOBALS['DB']->exec('DELETE FROM archetype');
        }
    }





?>
