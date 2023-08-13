# dbeasy
Easy connection and work with the database
## Project setup
``````
composer require seleda/dbeasy
``````
## Usage

Define global constants before calling:
<ul>
<li>_DB_SERVER_</li>
<li>_DB_USER_</li>
<li>_DB_PASSWD_</li>
<li>_DB_NAME_</li>
<li>_DB_PREFIX_(optional)</li>
</ul>

or

``````
Seleda\Dbeasy\Db::$_servers = [
    [
        'server' => '',
        'user' => '',
        'password' => '',
        'database' => ''
    ]
];
``````
## Methods
``````
Db::getInstance()->insert('table_without prefix', [
    'column' => $value
]);
``````
``````
Db::getInstance()->update('table_without prefix', [
    'column' => $value
], 'condition');
``````
``````
Db::getInstance()->delete('table_without prefix', 'condition');
``````
Executes a query.
``````
Db::getInstance()->execute($qyery);
``````
Executes return the result of $sql as array.
``````
Db::getInstance()->executeS($sql);
``````
Returns an associative array containing the first row of the query
This function automatically adds "LIMIT 1" to the query.
``````
Db::getInstance()->getRow($sql);
``````
Returns a value from the first row, first column of a SELECT query.
``````
Db::getInstance()->getValue($sql);
``````