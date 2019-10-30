<?php
use libs\system\Controller;
use src\service\pdf\SamanePdf;

class PdfGeneratorController extends Controller{
    public function __construct(){
        parent::__construct();
        /** 
         * Appel du model grace au systeme autoloading
        */
    }
    public function generate()
    {
        $pdf = new SamanePdf();

        $htmlDataFormat = '<center>
                    <h1>Samane Framework</h1>
                </center>';
        $htmlDataFormat = $htmlDataFormat . '<br><p>My first PDF with Samane PDF</p>';
        
        // (Optional) Setup the paper size and orientation
        $paperFormat = array();
        $paperFormat['A4'] = 'portrait';
        
        $fileName  = 'public/folder/pdf/document.pdf';
        $pdf->generate($htmlDataFormat, $paperFormat, $fileName);
        
    }
}