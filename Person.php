<?php

include ('./Job.php');

class Person
{
  public function __construct() {
    $this->job = new Job();
    $this->job->setSalary(1000);
  }

  public function getSalary() {
    return $this->job->getSalary();
  }
}

$person = new Person();
$salary = $person->getSalary();
print($salary);