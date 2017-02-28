<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once 'src/Archetype.php';

    $server = 'mysql:host=localhost:8889;dbname=spooky_sim_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class ClassName extends PHPUnit_Framework_TestCase
    {

        protected function tearDown()
        {
            Archetype::deleteAll();
        }

        function test_save()
        {
            $name = 'Final Girl';
            $brawn = 1;
            $brain = 7;
            $luck = 10;
            $empathy = 10;
            $assets = 1;
            $test_Archetype = new Archetype($name, $brawn, $brain, $luck, $empathy, $assets);

            $result = $test_Archetype->getName();

            $this->assetEquals('Final Girl', $result);
        }
    }









?>
