<?php
// Imagem codificada na Base64 
$imageData = file_get_contents("img.jpg");
$imagemBase64 = base64_encode($imageData);

// PDF codificado na Base64 
$pdfData = file_get_contents("Lorem Ipsum.pdf");
$pdfBase64 = base64_encode($pdfData);

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Display Image</title>
  </head>
  <body>
    <div>
      <?php echo "base64 encode Imagem: ".$imagemBase64; ?><br><br>
      <img style='display:block; height:400px;' id='base64image' src='data:image/jpeg;base64, <?php echo $imagemBase64; ?>' /><br><br>
      <?php echo  "base64 encode PDF: ".$pdfBase64; ?><br><br>
      <object style='width: 400px; height:400px;' data="data:application/pdf;base64, <?php echo $pdfBase64; ?>" type="application/pdf"></object>
    </div>
  </body>
</html>