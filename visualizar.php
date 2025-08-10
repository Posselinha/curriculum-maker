<?php

    
    $personalInformation = new PersonalInformation(
        "João Lorem Ipsum da Silva",
        "19123456789",
        "Porto Ferreira, São Paulo",
        ""
    );

    $academicBackground =
        [
            new AcademicBackground(
                "Ensino Técnico Integrado ao Ensino Médio, Informática para Internet",
                "ETEC Professor Jadyr Salles",
                new DateTime("2020-02-01"),
                new DateTime("2022-12-01")
            ),
            new AcademicBackground(
                "Técnologo em Desenvolvimento de Software Multiplataforma",
                "FATEC Porto Ferreira",
                new DateTime("2025-08-01"),
                null
            )
        ];

    $professionalExperience =
        [
            new ProfessionalExperience(
                "Empresa Divertida",
                "Mestre em Diversões",
                new DateTime("2023-05-01"),
                null
            )
        ];

    $skills = ["Desenvolvimento de Websites com HTML, CSS, JavaScript e PHP"];

    $coursesAndCertificates = [
        new CoursesAndCertificates(
            "Responsive Web Design",
            "freeCodeCamp",
            2025
        )
    ];

    $curriculum = new Curriculum($personalInformation, null, null, $academicBackground, $professionalExperience, $skills, $coursesAndCertificates);
?>