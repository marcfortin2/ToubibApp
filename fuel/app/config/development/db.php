<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return array(
	'default' => array(
		'connection'  => array(
			'dsn'        => 'mysql:host=localhost;dbname=toubibwebtest',
			'username'   => 'root',
			'password'   => '',
		),
	),
);
/*return array(
        'development' => array(
		'connection'  => array(
                        'dsn'        => 'firebird:dbname=127.0.0.1:d:\php\tbweb\tbweb.ib',
			'username'   => 'SYSDBA',
			'password'   => 'masterkey',
		),
                'profiling'    => true,
		'enable_cache'   => false,
	),
	'default' => array(
		'connection'  => array(
                        'dsn'        => 'firebird:dbname=127.0.0.1:d:\php\tbweb\tbweb.ib',
			'username'   => 'SYSDBA',
			'password'   => 'masterkey',
		),
                'profiling'    => true,
		'enable_cache'   => false,
	),
        'test' => array(
		'connection'  => array(
                        'dsn'        => 'firebird:dbname=127.0.0.1:d:\php\tbweb\tbweb.ib',
			'username'   => 'SYSDBA',
			'password'   => 'masterkey',
		),
                'profiling'    => true,
		'enable_cache'   => false,
	),
);*/
