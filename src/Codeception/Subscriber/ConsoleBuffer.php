<?php
namespace Codeception\Subscriber;

use Codeception\Lib\Console\MessageBuffer;
use Codeception\Lib\Console\BufferedOutput;
use Symfony\Component\Console\Helper\FormatterHelper;
use Symfony\Component\Console\Output\OutputInterface;

class ConsoleBuffer extends Console
{
	public function __construct($options)
	{
		parent::__construct($options);

		$verbosity = isset($options['verbosity']) ? (int) $options['verbosity'] : OutputInterface::VERBOSITY_NORMAL;
		$this->output = new BufferedOutput($verbosity);
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