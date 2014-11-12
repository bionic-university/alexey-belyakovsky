<?php
namespace Bionic\ProjectBundle\EventListener;

class ProjectListener
{

    private $projectId = 0;

    public function onProjectCreate()
    {
        die("Create project event: ". $this->projectId);
    }

    public function setProjectId()
    {
        $this->projectId = 100;
    }

} 