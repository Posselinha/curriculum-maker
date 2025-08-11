<?php
    include_once __DIR__ . "/../src/Config/config.php";
    use App\Models\{PersonalInformation, AcademicBackground, ProfessionalExperience, CoursesAndCertificates, Curriculum};

    $personalInformation = new PersonalInformation(
        "João Lorem Ipsum da Silva",
        "19123456789",
        "Porto Ferreira, São Paulo",
        null
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div id="meu-curriculum">
        <?= $curriculum ?>
    </div>

    <button id="createPDF">Gerar PDF</button>

    <script src="../src/JS/getCurriculumHTML.js"></script>
</body>
</html>