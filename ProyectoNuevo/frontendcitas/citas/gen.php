
<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';
// Create an instance of the class:
try {
    $mpdf = new Mpdf\Mpdf([
        'tempDir' => '/tmp', // uses tmp to store PDF
    ]);

    $mpdf->WriteHTML('Hello World');


    $mpdf->Output();



  } catch (\Mpdf\MpdfException $e) {
        // Return 500 if mPDF fails to create instance 
        $response->setMessage("Creating an mPDF object failed with" . $e->getMessage());
        $response->setStatusCode(500);
        return $response;
}

?>
?>