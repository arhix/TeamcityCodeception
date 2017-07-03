<?php
namespace Codeception\Lib\Console;

use Symfony\Component\Console\Output as SymfonyConsoleOutput;

class BufferedOutput extends SymfonyConsoleOutput\BufferedOutput
{
	public function isInteractive()
	{
		return false;
	}
}