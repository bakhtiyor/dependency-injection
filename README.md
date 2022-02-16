## What is a Dependency Injection
Dependency Injection is where components are given their dependencies through their constructors, methods, or directly into fields.

**Constructor Injection**

```
class User
{
    function __construct($storage)
    {
        $this->storage = $storage;
    }
    
    // ...
}
```

**Setter Injection**
```
class User
{
    function setSessionStorage($storage)
    {
        $this->storage = $storage;
    }
    // ...
}
```

**Property Injection**

```
class User
{
    public $sessionStorage;
}
    
$user->sessionStorage = $storage;
```

As a rule of thumb, **constructor injection** is best for required dependencies, like in our example, and setter injection is best for optional dependencies, like a cache object for instance.

## Installation
- `git clone https://github.com/bakhtiyor/dependency-injection`
- `cd dependency-injection`
- `composer install`
- `php example/di-test.php`


## Credit
http://fabien.potencier.org/what-is-dependency-injection.html