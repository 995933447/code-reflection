````php
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

echo \Bobby\SimpleReflectionCode\SimpleReflectionCode::handle(Unity::class);
echo \Bobby\SimpleReflectionCode\SimpleReflectionCode::handle(new Unity());
echo \Bobby\SimpleReflectionCode\SimpleReflectionCode::handle(new ReflectionMethod(Unity::class, "success"));
echo \Bobby\SimpleReflectionCode\SimpleReflectionCode::handle([Unity::class, "success"]);

echo \Bobby\SimpleReflectionCode\SimpleReflectionCode::handle([Unity::class, "fail"], 1, 2);

// output
/**
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
        public static function success()
        {
                return 'ok';
        }
        public static function success()
        {
                return 'ok';
        }

        public static function fail()
    {
**/
````