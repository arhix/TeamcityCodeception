<?php
namespace Codeception\Lib\Console;

use Symfony\Component\Console\Output;

class BufferedOutput extends Output\BufferedOutput
{
	public function isInteractive()
	{
		return false;
	}
}