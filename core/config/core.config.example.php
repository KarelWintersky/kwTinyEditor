<?php
$CFG = array(
    'hostname' => array(
        'local' => 'localhost',
        'remote' => 'localhost',
    ),
    'username' => array(
        'local' => 'root',
        'remote' => '',
    ),
    'password' => array(
        'local' => '',
        'remote'   =>  ''
    ),
    'database' => array(
        'local' => '',
        'remote'   =>  ''
    ),
    'basepath' => array(
        'local' => '/testedit',
        'remote'   =>  '/testedit'
    ),
    'tableprefix' => array(
        'local' => 'testedit_',
        'remote'   =>  ''
    )
);
$remote_hosting_keyname = 'remote';

$CONFIG['hostname'] = ($_SERVER['REMOTE_ADDR']==="127.0.0.1") ? $CFG['hostname']['local']     : $CFG['hostname'][$remote_hosting_keyname];
$CONFIG['username'] = ($_SERVER['REMOTE_ADDR']==="127.0.0.1") ? $CFG['username']['local']     : $CFG['username'][$remote_hosting_keyname];
$CONFIG['password'] = ($_SERVER['REMOTE_ADDR']==="127.0.0.1") ? $CFG['password']['local']     : $CFG['password'][$remote_hosting_keyname];
$CONFIG['database'] = ($_SERVER['REMOTE_ADDR']==="127.0.0.1") ? $CFG['database']['local']     : $CFG['database'][$remote_hosting_keyname];
$CONFIG['tableprefix'] = ($_SERVER['REMOTE_ADDR']==="127.0.0.1") ? $CFG['tableprefix']['local']     : $CFG['tableprefix'][$remote_hosting_keyname];

$CONFIG['application_title'] = '';
$CONFIG['main_data_table']   = 'saved_content'; //
$CONFIG['basepath'] = ($_SERVER['REMOTE_ADDR']==="127.0.0.1") ? $CFG['basepath']['local']     : $CFG['basepath'][$remote_hosting_keyname];

global $CONFIG;