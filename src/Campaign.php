<?php

    class Campaign
    {
        private $name;
        private $desctiption;
        private $story_type;
        private $id;

        function __construct($name, $description, $story_type, $id = null)
        {
            $this->name = $name;
            $this->description = $description;
            $this->story_type = $story_type;
            $this->id = $id;
        }

        function getName()
        {
            return $this->name;
        }

        function setName($new_name)
        {
            $this->name = $new_name;
        }

        function getDescription()
        {
            return $this->description;
        }

        function setDescription($new_description)
        {
            $this->description = $new_description;
        }

        function getStoryType()
        {
            return $this->story_type;
        }

        function getId()
        {
            return $this->id;
        }
    }





?>
