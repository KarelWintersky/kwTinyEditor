<?php
require_once('config/FileStorage.Config.php');

class FileStorage extends FileStorage_Config
{
    public static function getTable()
    {
        return parent::$config['table'];
    }

}
