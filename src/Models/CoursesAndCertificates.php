<?php
    namespace App\Models;

    class CoursesAndCertificates {
        public string $course;
        public string $institution;
        public int $year;

        public function __construct(string $course, string $institution, int $year)
        {
            $this->course = $course;
            $this->institution = $institution;
            $this->year = $year;
        }
    }

?>