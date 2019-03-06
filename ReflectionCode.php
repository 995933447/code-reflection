<?php 
namespace Bobby\Component\ReflectionCode;

class ReflectionCode
{
	public static function handle(\Reflector $reflector) : string
	{
		$path = $reflector->getFileName();
		$lines = file($path);
		$from = $reflector->getStartLine();
		$end = $reflector->getEndLine();
		return implode(array_slice($lines, $from - 1, $end - $from + 1));
	}
}

//示例：
// class Unity
// {
// 	public function success()
// 	{
// 		return 'ok';
// 	}
// }

// $reflection = new \ReflectionClass(new Unity);
// $reflection = new \ReflectionMethod(new Unity, 'success');
// echo ReflectionCode::handle($reflection);
