<?php
require "../src/SimpleCodesReflection.php";

class Unity
{
 	public static function success()
 	{
 		return 'ok';
 	}

 	public static function fail()
    {
        return 'error';
    }
}

echo \Bobby\SimpleCodesReflection\SimpleCodesReflection::handle(Unity::class);
echo \Bobby\SimpleCodesReflection\SimpleCodesReflection::handle(new Unity());
echo \Bobby\SimpleCodesReflection\SimpleCodesReflection::handle(new ReflectionMethod(Unity::class, "success"));
echo \Bobby\SimpleCodesReflection\SimpleCodesReflection::handle([Unity::class, "success"]);

echo \Bobby\SimpleCodesReflection\SimpleCodesReflection::handle([Unity::class, "fail"], 1, 2);
