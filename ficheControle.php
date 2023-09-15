<?php
    require 'fpdf/fpdf.php'

    class PDF extends FPDF{
        function Header()
        {
            // Select Arial bold 15
            $this->SetFont('Arial', 'B', 15);
            // Move to the right
            $this->Cell(80);
            // Framed title
            $this->Cell(30, 10, 'REPOBLIKAN \' I MADAGASIKARA', 1, 0, 'C');
            // Line break
            $this->Ln(20);
        }
    }

    $pdf = new PDF;
    

?>