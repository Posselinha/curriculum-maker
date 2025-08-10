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

        public function __toString(): string
        {
            $academicBackgroundHTML = 
            "
                <div class='academicBackground'>
                    <h3> " . $this->startDate->format('Y') . " - " . (!is_null($this->endDate) ? $this->endDate->format('Y') : "Em Andamento") . " | $this->institution</h3>
                    <p>$this->course</p>
                </div>
            ";

            return $academicBackgroundHTML;
        }
    }

?>