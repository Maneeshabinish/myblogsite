<?php

class connection{
public static function make($config)
{
    try
    {
        return new PDO(
            $config['connection'] .'; dbname='. $config['name'],
            $config['username'],
            $config['password'],
            $config['options'],);
        }
            catch(PDOEXCEPTION $e)
            {
                die('Could not connect');
            }

    }
}