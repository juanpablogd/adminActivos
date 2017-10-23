<br />
<b>Fatal error</b>:  Uncaught exception 'Exception' with message 'FPDF error: Undefined font:  B' in C:\ms4w\Apache\htdocs\adminActivos\libs\fpdf\fpdf.php:271
Stack trace:
#0 C:\ms4w\Apache\htdocs\adminActivos\libs\fpdf\fpdf.php(510): FPDF-&gt;Error('Undefined font:...')
#1 C:\ms4w\Apache\htdocs\adminActivos\pdfProcesogestion.php(33): FPDF-&gt;SetFont(NULL, 'B', 10)
#2 C:\ms4w\Apache\htdocs\adminActivos\pdfProcesogestion.php(49): PDF-&gt;subEncabezado()
#3 {main}
  thrown in <b>C:\ms4w\Apache\htdocs\adminActivos\libs\fpdf\fpdf.php</b> on line <b>271</b><br />
