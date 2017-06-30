<?php
namespace Codeception\Lib\Console;

class MessageBuffer extends Message
{
	public function __construct($message, BufferedOutput $output = null)
	{
		parent::__construct($message, $output);
		$this->message = $message;
		$this->output = $output;
	}
}