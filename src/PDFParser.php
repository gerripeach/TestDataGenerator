<?php

namespace RandomData;

class PDFParser
{
	private const TEMPLATE_DIR = '../pdf/templates';
	private const FONT_DIR = '../pdf/fonts';

	private $mpdf = null;
	private $parameter = [];
	private $template = '';

	public function __construct(string $template, array $parameter)	{
		$this->parameter = $parameter;
		$this->template = $template;
	}
	
    public function process() {
		$dirs = array();
		$dirs[] = self::TEMPLATE_DIR;

		$loader = new \Twig\Loader\FilesystemLoader($dirs);
		$twig = new \Twig\Environment($loader);

		$html = $twig->render($this->template . '.twig', [
				'data' => $this->parameter
		]);
    
    	$this->mpdf = new \Mpdf\Mpdf();
		#die($html);
		$this->mpdf->WriteHTML($html);
		
		return $this->mpdf;
	}

}