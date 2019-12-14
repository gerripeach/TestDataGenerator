<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/', function (Request $request, Response $response, array $args) use ($container) {
        return $container->get('view')->render($response, 'index.twig', $args);
    });

    $app->get('/create/[{amount}]', function (Request $request, Response $response, array $args) use ($container) {
        if (isset($args['amount']))
            $amount = $args['amount'];
        else
            $amount = 1;

        for ($i = 0; $i < $amount; ++$i) {
            $company = \RandomData\RandomCompany::getRandomCompany();
            $company['customerId'] = 1000 + $i;
            
            $invoice = \RandomData\RandomInvoice::getInvoice();
            $invoice['id'] = 60000 + $i;
             
            $general = array(
                'barcodeContent' => '#AN' . $invoice['id']
            );
            
            $pdfParser = new \RandomData\PDFParser('squote', array(
                'company' => $company,
                'invoice' => $invoice,
                'general' => $general
            ));
            $mpdf = $pdfParser->process();            
            $pdf = $mpdf->Output('../output/' . $invoice['id'] . '.pdf', \Mpdf\Output\Destination::FILE);

            
            
            $companyDB = array(
                $company['name'],
                $company['adress']['street'],
                $company['adress']['buildingNumber'],
                $company['adress']['zipCode'],
                $company['adress']['city'],
                $company['ustId']
            );
            var_dump($companyDB);

            $db = $this->get('database');
            $db->insertCompany($companyDB);
            echo "<br>";
        }
        //return $container->get('view')->render($response, 'index.twig', $args);
    });

    $app->get('/pdf', function (Request $request, Response $response, array $args) use ($container) {
        
        $company = \RandomData\RandomCompany::getRandomCompany();
        $company['customerId'] = random_int(1000, 15000);

        $invoice = \RandomData\RandomInvoice::getInvoice();

        $general = array(
            'barcodeContent' => '#AN' . $invoice['id']
        );

        $pdfParser = new \RandomData\PDFParser('squote', array(
            'company' => $company,
            'invoice' => $invoice,
			'general' => $general
		));
		$mpdf = $pdfParser->process();

        $newResponse = $response->withHeader('Content-type', 'application/pdf');
        $pdf = $mpdf->Output('output.pdf', \Mpdf\Output\Destination::STRING_RETURN);
        return $newResponse->write($pdf);
    });


    $app->get('/clear', function (Request $request, Response $response, array $args) use ($container) {
        $db = $this->get('database');
        $db->clear();
        return $container->get('view')->render($response, 'index.twig', $args);
    });
};
