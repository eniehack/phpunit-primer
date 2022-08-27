<?php

declare(strict_types=1);
namespace PhpunitPrimer\Era;
require 'vendor/autoload.php';

use \DateTime;

final class Era{

    private DateTime $date;
    public $reiwaStartTime;
    public $heiseiStartTime;
    public $shouwaStartTime;

    function __construct(int $year, int $month, int $day){
        $this->reiwaStartTime = new DateTime("2019-5-1");
        $this->heiseiStartTime = new DateTime("1989-1-7");
        $this->shouwaStartTime = new DateTime("1926-12-25");
        $this->date = new DateTime();
        $this->date->setDate($year, $month, $day);
        //$this->format("Y") = $year;
    }

    function getString(){
        return $this->toJapaneseCalendar($this->date);
    }

    private function toJapaneseCalendar(DateTime $date) : string{
        /*
        $showaOffset = $AD - 1925;
        if($showaOffset  >= 95) return '令和'.($showaOffset  - 93).'年';
        return '平成'.$showaOffset .'年';
        if ($showaOffset >= 95) {
            return '令和'.($showaOffset  - 93).'年';
        }elseif (($showaOffset < 95)&&($showaOffset >= 65)) {
            return '平成'.($showaOffset  - 63).'年';
        }else{
            return '昭和'.$showaOffset.'年';
        }*/

        if ($this->reiwaStartTime <= $date) {
            if ($this->reiwaStartTime->format("Y") === $date->format("Y")) {
                return '令和元年';
            } else {
                return '令和'.(intval($date->format("Y")) - intval($this->reiwaStartTime->format("Y")) + 1).'年';
            }
        } elseif ($this->heiseiStartTime <= $date) {
            if ($this->heiseiStartTime->format("Y") === $date->format("Y")) {
                return '平成元年';
            } else {
                return '平成'.(intval($date->format("Y")) - intval($this->heiseiStartTime->format("Y")) + 1).'年';
            }
        } else {
            if ($this->shouwaStartTime->format("Y") === $date->format("Y")) {
                return '昭和元年';
            } else {
                return '昭和'.(intval($date->format("Y")) - intval($this->shouwaStartTime->format("Y")) + 1).'年';
            }
        }
    }
}