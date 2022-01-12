<?php
class StopWatch {
    public $startTime;
    public $endTime;

    public function __construct()
    {
        $this-> $startTime =microtime();
    }

    /**
     * @return mixed
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return $this->endTime;
    }
    public function start(){
        $this ->startTime =microtime();
    }
    public function stop(){
        $this ->endTime = microtime();
    }
    public function getElapsedTime(){
        return$this->getEndTime() - $this->getStartTime();
    }
}
