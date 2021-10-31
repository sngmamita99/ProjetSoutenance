<?php
function getPdo()
{
	return new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","",[ \PDO::ATTR_ERRMODE =>\PDO::ERRMODE_EXCEPTION,\PDO::ATTR_DEFAULT_FETCH_MODE =>\PDO::FETCH_ASSOC
		]);
}
?>