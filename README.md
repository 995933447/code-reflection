````php
class Unity
{
 	public function success()
 	{
 		return 'ok';
 	}
}

echo \Bobby\SimpleReflectionCode\SimpleReflectionCode::handle(Unity::class);
echo \Bobby\SimpleReflectionCode\SimpleReflectionCode::handle(new Unity());
echo \Bobby\SimpleReflectionCode\SimpleReflectionCode::handle(new ReflectionMethod(Unity::class, "success"));
echo \Bobby\SimpleReflectionCode\SimpleReflectionCode::handle([Unity::class, "success"]);

echo \Bobby\SimpleReflectionCode\SimpleReflectionCode::handle([Unity::class, "success"], 1, 2);
// output
/**
class Unity
{
        public static function success()
        {
                return 'ok';
        }
}
class Unity
{
        public static function success()
        {
                return 'ok';
        }
}
        public static function success()
        {
                return 'ok';
        }
        public static function success()
        {
                return 'ok';
        }
<?php
require "../src/SimpleReflectionCode.php";

**/
````