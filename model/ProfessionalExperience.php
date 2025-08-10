<?php

    class ProfessionalExperience {
        public string $companyName;
        public string $role;
        public DateTime $startDate;
        public ?DateTime $endDate = null;

        public function __construct($companyName, $role, $startDate, $endDate)
        {
            $this->companyName = $companyName;
            $this->role = $role;
            $this->startDate = $startDate;
            $this->endDate = $endDate;
        }

        public function __toString(): string
        {
            $professionalExperienceHTML = 
            "
                <div class='academicBackground'>
                    <h3> " . $this->startDate->format('Y') . " - " . (!is_null($this->endDate) ? $this->endDate->format('Y') : "Em Andamento") . " | $this->companyName</h3>
                    <p>$this->role</p>
                </div>
            ";

            return $professionalExperienceHTML;
        }
    }

?>