<?php 
namespace Bobby\SimpleReflectionCode;

class SimpleReflectionCode
{
	public static function handle($reflector, $from = null, $end = null) : string
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
		if (!$from) {
            $from = $reflector->getStartLine();
        }
		if (!$end) {
            $end = $reflector->getEndLine();
        }

		return implode(array_slice($lines, $from - 1, $end - $from + 1));
	}
}