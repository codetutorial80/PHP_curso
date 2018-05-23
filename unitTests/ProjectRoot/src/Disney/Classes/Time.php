<?php

namespace Disney\Classes;

class Time {
	private $day;
	private $month;
	private $year;

	public function __construct($day, $month, $year) {
		$this->day   = $day;
		$this->month = $month;
		$this->year  = $year;
	}


	public function getDay() {
	      return $this->day;
	}

	public function getMonth() {
              return $this->month;
	}

	public function getYear() {
	      return $this->year;
	}
}
