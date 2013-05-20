Catapult
========

A simple Facade for Illuminate Database capsule. To use first pass a config into the static make method.

`Catapult\DB::make(array(
  'fetch' => PDO::FETCH_CLASS,
	'default' => 'mysql',
	'connections' => array(
		'mysql' => array(
			'driver'    => 'mysql',
			'host'      => 'localhost',
			'database'  => 'database',
			'username'  => 'root',
			'password'  => '',
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
		),
	),
));`

Once a configured you can use any query builder as normal

`Catapult\DB::table('foo')->select('*')->get();`

### Eloquent Models

You can extend the `Illuminate\Database\Eloquent\Model` class and use the Models as you normally would.

### Schema Builder

Catapult provides a `Catapult\Schema` class, which acts exactly like the `Schema` Facade in Laraval.
