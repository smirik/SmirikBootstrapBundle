<?php

namespace Smirik\BootstrapBundle\Twig;

use Twig_Extension;
use Twig_Function_Method;

class BootstrapExtension extends Twig_Extension
{
	
	protected $container;
	
	public function __construct($container)
	{
		$this->container = $container;
	}
	
	public function getFunctions()
	{
		return array(
			'bootstrap_js'  => new Twig_Function_Method($this, 'bootstrap_js'),
			'bootstrap_css' => new Twig_Function_Method($this, 'bootstrap_css'),
		);
	}

	public function bootstrap_js()
	{
		echo $this->container->get('templating')->render('SmirikBootstrapBundle:Bootstrap:js.html.twig');
	}

	public function bootstrap_css()
	{
		echo $this->container->get('templating')->render('SmirikBootstrapBundle:Bootstrap:css.html.twig');
	}

	public function getName()
	{
		return 'bootstrap_extension';
	}
	
}