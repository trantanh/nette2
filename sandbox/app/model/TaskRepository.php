<?php

namespace Todo;

use Nette;



class TaskRepository extends Repository
{
public function findIncomplete()
{
    return $this->findBy(array('done' => false))->order('created ASC');
}
}