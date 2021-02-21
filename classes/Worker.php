<?php
namespace classes;

class Worker
{
    private $name;
	private $age;
	private $salary;

	/**
	 * @return mixed
	 */
	public function getAge()
	{
		return $this->age;
	}

	/**
	 * @return mixed
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @return mixed
	 */
	public function getSalary()
	{
		return $this->salary;
	}

	/**
	 * @param mixed $age
	 */
	public function setAge($age)
	{
		$this->age = $age;
	}

	/**
	 * @param mixed $name
	 */
	public function setName($name)
	{
		$this->name = $name;
	}

	/**
	 * @param mixed $salary
	 */
	public function setSalary($salary)
	{
		$this->salary = $salary;
	}
}
