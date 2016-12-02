<?php
namespace Codeception\Lib\Console;

use Symfony\Component\Console\Output\BufferedOutput;

class MessageBuffer extends Message
{
	public function __construct($message, BufferedOutput $output = null)
	{
		$this->message = $message;
		$this->output = $output;
	}
}