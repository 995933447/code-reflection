<?php 
namespace Bobby\SimpleReflectionCode;

class SimpleReflectionCode
{
	public static function handle($reflector, $startLine = null, $endLine = null) : string
	{
	    if (!$reflector instanceof \Reflector) {
            $reflector = new \ReflectionClass($reflector);
        }
		$path = $reflector->getFileName();
		$lines = file($path);
		$from = $reflector->getStartLine();
		$end = $reflector->getEndLine();
		return implode(array_slice($lines, $startLine?: $from - 1, $endLine?: $end - $from + 1));
	}
}