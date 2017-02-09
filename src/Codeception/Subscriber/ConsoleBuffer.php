<?php
namespace Codeception\Subscriber;

use Codeception\Lib\Console\MessageBuffer;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\Console\Helper\FormatterHelper;

class ConsoleBuffer extends Console
{
	public function __construct($options)
	{
		parent::__construct($options);

		$this->output = new BufferedOutput($options);
		$this->output->formatHelper = new FormatterHelper();
	}

	public function fetch()
	{
		return $this->output->fetch();
	}

	protected function message($text = '')
	{
		return new MessageBuffer($text, $this->output);
	}
}