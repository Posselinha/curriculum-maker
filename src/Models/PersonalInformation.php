<?php
    namespace App\Models;

    class PersonalInformation {
        public string $fullName;
        public string $cellphoneNumber;
        public string $cityAndState;
        public ?string $portfolio = null;

        public function __construct(string $fullName, string $cellphoneNumber,  string $cityAndState, ?string $portfolio) 
        {
            $this->fullName = $fullName;
            $this->cellphoneNumber = $cellphoneNumber;
            $this->cityAndState = $cityAndState;
            $this->portfolio = $portfolio;
        }

        public function __toString(): string
        {
            $personalInformationHTML = "
                <div class='personalInformation'>
                    <h1>$this->fullName</h1>
                    <p>$this->cellphoneNumber</p>
                    <p>$this->cityAndState</p>
            ";

            if(!is_null($this->portfolio))
            {
                $personalInformationHTML .= "
                    <p>$this->portfolio</p>
                ";
            }

            $personalInformationHTML .= "</div>";

            return $personalInformationHTML;
        }
    }

?>