<?php
namespace Codeception\Subscriber;

use Codeception\Lib\Console\MessageBuffer;
use Codeception\Util\Debug;
use Symfony\Component\Console\Output\BufferedOutput;

class ConsoleBuffer extends Console
{
	public function __construct($options)
	{
		parent::__construct($options);

		$this->output = new BufferedOutput($options);
		if ($this->debug) {
			Debug::setOutput($this->output);
		}
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