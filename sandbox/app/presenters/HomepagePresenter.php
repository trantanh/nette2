<?php

/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter
{

private $taskRepository;

protected function startup()
{
    parent::startup();
    $this->taskRepository = $this->context->taskRepository;
}

public function renderDefault()
{
    $this->template->tasks = $this->taskRepository->findIncomplete();
}

}
