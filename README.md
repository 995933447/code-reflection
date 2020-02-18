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
        public function success()
        {
                return 'ok';
        }
}
        public function success()
        {
                return 'ok';
        }
**/
````