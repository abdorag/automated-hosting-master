<?php

$Module = array( "name" => "Instance configuration");

$ViewList = array();

$ViewList['list'] = array(
    'params' => array(),
    'functions' => array( 'manageinstance' )
);

$ViewList['edit'] = array(
    'params' => array('instance_id'),
    'functions' => array( 'manageinstance' )
);

$ViewList['new'] = array(
		'params' => array(),
		'functions' => array( 'manageinstance' )
);

$ViewList['isfree'] = array(
		'params' => array('address'),
		'functions' => array(  )
);

/**
 * Standard reseller instance API functions
 * */
$ViewList['registerinstance'] = array(
		'params' => array('address','email','request','period','hash'),
		'uparams' => array('dateformat','hourformat','datehourformat','timezone','frontsiteaccess','operatorlocale'),
		'functions' => array( )
);

$ViewList['suspendinstance'] = array(
		'params' => array('address','status','hash'),
		'functions' => array( )
);

$ViewList['terminateinstance'] = array(
		'params' => array('address','hash'),
		'functions' => array( )
);

/**
 * Reseller instance API functions
 * */
$ViewList['rslsuspendinstance'] = array(
		'params' => array('id','address','status','hash'),
		'functions' => array( )
);

$ViewList['rslterminateinstance'] = array(
		'params' => array('id','address','hash'),
		'functions' => array( )
);

$ViewList['rslregisterinstance'] = array(
		'params' => array('id','address','email','request','period','hash'),
		'uparams' => array('dateformat','hourformat','datehourformat','timezone','frontsiteaccess','operatorlocale'),
		'functions' => array( )
);


$FunctionList['manageinstance'] = array('explain' => 'Access to instance management');

?>