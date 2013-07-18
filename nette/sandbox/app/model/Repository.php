<?php

namespace Todo;

use Nette;



/**
* Prov�d� operace nad datab�zovou tabulkou.
*/
abstract class Repository extends Nette\Object
{
/** @var Nette\Database\Connection */
protected $connection;



public function __construct(Nette\Database\Connection $db)
{
$this->connection = $db;
}



/**
* Vrac� objekt reprezentuj�c� datab�zovou tabulku.
* @return Nette\Database\Table\Selection
*/
protected function getTable()
{
// n�zev tabulky odvod�me z n�zvu t��dy
preg_match('#(\w+)Repository$#', get_class($this), $m);
return $this->connection->table(lcfirst($m[1]));
}



/**
* Vrac� v�echny ��dky z tabulky.
* @return Nette\Database\Table\Selection
*/
public function findAll()
{
return $this->getTable();
}



/**
* Vrac� ��dky podle filtru, nap�. array('name' => 'John').
* @return Nette\Database\Table\Selection
*/
public function findBy(array $by)
{
return $this->getTable()->where($by);
}

}