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
    }

?>