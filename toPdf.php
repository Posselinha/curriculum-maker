<?php

    include_once __DIR__ . "/vendor/autoload.php";

    use Dompdf\Dompdf;

    $dompdf = new Dompdf();
    $dompdf->loadHtml($_POST['curriculumHTML']);
    $dompdf->render();
    $dompdf->stream("curriculum.pdf", ["Attachment" => false]);

?>