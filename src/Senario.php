<?php

    class Senario
    {
        private $name;
        private $desctiption;
        private $catalyst_name;
        private $catalyst_type;
        private $scope;
        private $time_frame;
        private $threat_name;
        private $threat_type;
        private $story_type;
        private $id;


        function __construct($name, $description, $catalyst, $scope, $time_frame, $threat, $story_type, $id = null)
        {
            $this->name = $name;
            $this->description = $description;
            $this->catalyst = $catalyst;
            $this->scope = $scope;
            $this->time_frame = $time_frame;
            $this->threat = $story_type;
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

        function getCatalyst()
        {
            return $this->catalyst;
        }

        function setCatalyst($new_catalyst)
        {
            $this->catalyst = $new_catalyst;
        }

        function getScope()
        {
            return $this->scope;
        }

        function setScope($new_scope)
        {
            $this->scope = $new_scope;
        }

        function getTimeFrame()
        {
            return $this->time_frame;
        }

        function setTimeFrame($new_time_frame)
        {
            $this->time_frame = $new_time_frame;
        }

        function getThreat()
        {
            return $this->threat;
        }

        function setThreat($new_threat)
        {
            $this->threat = $new_threat;
        }

        function getStoryType()
        {
            return $this->story_type;
        }

        function setStoryType($new_story_type)
        {
            $this->story_type = $new_story_type;
        }

        function getId()
        {
            return $this->id;
        }

    }

?>
