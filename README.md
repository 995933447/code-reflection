````php
class Unity
{
 	public function success()
 	{
 		return 'ok';
 	}
}

echo \Bobby\SimpleReflectionCode\SimpleReflectionCode::handle(Unity::class);

echo \Bobby\SimpleReflectionCode\SimpleReflectionCode::handle(new ReflectionMethod(Unity::class, "success"));
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