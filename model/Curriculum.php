<?php

    class Curriculum {
        private PersonalInformation $personalInformation;
        private ?string $professionalObjective = null;
        private ?string $professionalSummary = null;
        private array $academicBackground;
        private array $professionalExperience;
        private array $skills;
        private ?array $coursesAndCertificates = null;

        public function __construct(PersonalInformation $personalInformation, ?string $professionalObjective, ?string $professionalSummary, array $academicBackground, array $professionalExperience, array $skills, ?array $coursesAndCertificates) {
            $this->personalInformation = $personalInformation;
            $this->professionalObjective = $professionalObjective;
            $this->professionalSummary = $professionalSummary;
            $this->academicBackground = $academicBackground;
            $this->professionalExperience = $professionalExperience;
            $this->skills = $skills;
            $this->coursesAndCertificates = $coursesAndCertificates;
        }

        public function __toString(): string
        {
            return $this->personalInformation->fullName;
        }
    }

?>