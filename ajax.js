$(document).ready(function() {
    $('.generate-pdf').click(function() {
        console.log("solicitadno generate-pdf");
        var patientId = $(this).data('id'); // Obtiene el ID del paciente
        $.ajax({
            url: 'generar_pdf.php',
            method: 'POST',
            data: { id: patientId },
            xhrFields: {
                responseType: 'blob' // Especifica que el tipo de respuesta es un archivo
            },
            success: function(response) {
                // Crea un enlace temporal para descargar el archivo
                var blob = new Blob([response], { type: 'application/pdf' });
                var link = document.createElement('a');
                link.href = window.URL.createObjectURL(blob);
                link.download = 'ficha_paciente_' + patientId + '.pdf';
                link.click();
            },
            error: function(xhr, status, error) {
                alert('Error al generar el PDF: ' + error);
            }
        });
    });
});