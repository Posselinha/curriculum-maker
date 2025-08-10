<?php

    class Curriculum {
        public PersonalInformation $personalInformation;
        public ?string $professionalObjective = null;
        public ?string $professionalSummary = null;
        public array $academicBackgroundList;
        public array $professionalExperienceList;
        public ?array $skillsList = null;
        public ?array $coursesAndCertificatesList = null;

        public function __construct(PersonalInformation $personalInformation, ?string $professionalObjective, ?string $professionalSummary, array $academicBackgroundList, array $professionalExperienceList, array $skillsList, ?array $coursesAndCertificatesList) {
            $this->personalInformation = $personalInformation;
            $this->professionalObjective = $professionalObjective;
            $this->professionalSummary = $professionalSummary;
            $this->academicBackgroundList = $academicBackgroundList;
            $this->professionalExperienceList = $professionalExperienceList;
            $this->skillsList = $skillsList;
            $this->coursesAndCertificatesList = $coursesAndCertificatesList;
        }

        public function __toString(): string
        {
            $curriculumString = "$this->personalInformation";

            if(!is_null($this->professionalObjective)) {
                $curriculumString .= 
                "
                    <div class='professionalObjective'>
                        <h2>Objetivo Profissional</h2>
                        <p>$this->professionalObjective</p>
                    </div>
                ";
            }

            if(!is_null($this->professionalSummary)) {
                $curriculumString .= 
                "
                    <div class='professionalSummary'>
                        <h2>Resumo Profissional</h2>
                        <p>$this->professionalSummary</p>
                    </div>
                ";
            }

            $curriculumString .= $this->arrayFormatter("academicBackgroundList", "Formação");
            $curriculumString .= $this->arrayFormatter("professionalExperienceList", "Experiências");
            return $curriculumString;
        }

        private function arrayFormatter($propertyName, $heading): string
        {
            $arrayHTML = "<div class='$propertyName'><h2>$heading</h2>";

            foreach($this->$propertyName as $arrayItem) {
                $arrayHTML .= $arrayItem;
            }

            $arrayHTML .= "</div>";

            return $arrayHTML;
        }
    }

?>