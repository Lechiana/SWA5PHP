<?php

class Job
{
    private $salary;
    private $id;
    private $role;

    function getRole()
    {
        return $this->role;
    }

    function setRole($role)
    {
        $this->role = $role;
    }

    function getSalary() {
        return $this->salary;
    }

    function setSalary($salary)
    {
        $this->salary = $salary;
    }

    function getId()
    {
        return $this->id;
    }

    function setId($id)
    {
        $this->id = $id;
    }

}