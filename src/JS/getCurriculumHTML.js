const pdfButton = document.getElementById("createPDF");
pdfButton.addEventListener("click", function() {
    let curriculumHTML = document.getElementById("meu-curriculum").innerHTML;

    fetch("toPdf.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "curriculumHTML=" + encodeURIComponent(curriculumHTML)
    })
    .then(res => res.blob())
    .then(blob => {
        const url = URL.createObjectURL(blob);
        window.open(url);
    });
});