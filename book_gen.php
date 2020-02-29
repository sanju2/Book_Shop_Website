<?php

            require_once __DIR__ . '/vendor/autoload.php';

            //get variable
            $name = $_POST['name'];
            $price = $_POST['price'];
            


            //new pdf make
            $mpdf = new \Mpdf\Mpdf();

            $data = '';

            $data .= '<h1>Online Book Shop Youer Payment</h1>';

            $data .= '<strong>Name = </strong>' . $name . '<br/>';
            $data .= '<strong>Price = </strong>' . $price . '<br/>';


           

            $mpdf->WriteHTML($data);

            $mpdf->Output('myfile.pdf', 'D');

            ?>