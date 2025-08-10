<?php

    class AcademicBackground {
        public string $course;
        public string $institution;
        public DateTime $startDate;
        public ?DateTime $endDate = null; 

        public function __construct(string $course, string $institution, DateTime $startDate, ?DateTime $endDate)
        {
            $this->course = $course;
            $this->institution = $institution;
            $this->startDate = $startDate;
            $this->endDate = $endDate;
        }
    }

?>