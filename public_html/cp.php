<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Compressor</title>
</head>
<body>
    <h1>PDF Compressor</h1>
    <input type="file" id="pdfFile" accept=".pdf" required>
    <br>
    <button onclick="compressPDF()">Compress PDF</button>

    <script>
        async function compressPDF() {
            const fileInput = document.getElementById('pdfFile');
            
            const file = fileInput.files[0];
            if (!file) {
                alert("Please select a PDF file.");
                return;
            }

            const formData = new FormData();
            formData.append('pdfFile', file);

            try {
                const response = await fetch('/compress', {
                    method: 'POST',
                    body: formData
                });

                if (response.ok) {
                    const blob = await response.blob();
                    const link = document.createElement('a');
                    link.href = window.URL.createObjectURL(blob);
                    link.download = 'compressed_pdf.pdf';
                    link.click();
                } else {
                    const text = await response.text();
                    alert(`Error compressing PDF: ${text}`);
                }
            } catch (error) {
                console.error('An error occurred:', error);
                alert("An error occurred while compressing PDF.");
            }
        }
    </script>
</body>
</html>
