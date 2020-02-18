<?php 
namespace Bobby\SimpleCodesReflection;

class SimpleCodesReflection
{
	public static function handle($reflector, int $startLine = null, int $endLine = null) : string
	{
		if (!$reflector instanceof \Reflector) {
	        	if (is_array($reflector)) {
	            		$reflector = new \ReflectionMethod($reflector[0], $reflector[1]);
            		} else {
                		$reflector = new \ReflectionClass($reflector);
            		}
        	}

		$path = $reflector->getFileName();
		$lines = file($path);

        	$from = $reflector->getStartLine();

		if ($endLine) {
            		$end = $from + $endLine - 1;
        	} else {
            		$end = $reflector->getEndLine();
        	}

        	if ($startLine) {
            		$from = $from - 1 + ($startLine - 1);
        	}

		return implode(array_slice($lines, $from - 1, $end - $from + 1));
	}
}
