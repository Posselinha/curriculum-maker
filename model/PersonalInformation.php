<?php

    class PersonalInformation {
        public string $fullName;
        public string $cellphoneNumber;
        public string $cityAndState;
        public ?string $portfolio = null;

        public function __construct(string $fullName, string $cellphoneNumber,  string $cityAndState, string $portfolio) 
        {
            $this->fullName = $fullName;
            $this->cellphoneNumber = $cellphoneNumber;
            $this->cityAndState = $cityAndState;
            $this->portfolio = $portfolio;
        }
    }

?>