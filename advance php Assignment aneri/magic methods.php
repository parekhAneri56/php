<?php
// What are the magic methods in php ?
//Magic methods are special methods which override PHP's default's action when certain actions are performed on an object. 
// PHP magic methods are special methods that are called automatically when certain conditions are met. 


// Every magic method follows certain rules :-

// (1)Every magic method starts with a double underscore (  __ ).
// (2)They are predefined and neither can be created nor removed.
// (3)Magic methods have reserved names Therefore, it is not recommended to use such method names unless overriding PHP's behavior. 
//    and their name should not be used for other purposes.
// (4)Magic methods are automatically called when certain criteria are met.

//Warning

//  (1) All magic methods, with the exception of __construct(), __destruct(), and __clone(), must be declared as public, 
//     otherwise an E_WARNING is emitted. Prior to PHP 8.0.0, no diagnostic was emitted for the magic methods __sleep(), __wakeup(),
//     __serialize(), __unserialize(), and __set_state().

//  (2) If type declarations are used in the definition of a magic method, they must be identical to the signature described in this document.
//     Otherwise, a fatal error is emitted. Prior to PHP 8.0.0, no diagnostic was emitted. However, __construct() and __destruct() 
//     must not declare a return type; otherwise a fatal error is emitted. 

// The following method names are considered magical:

// 1. __construct()
// 2. __destruct()
// 3. __call()
// 4. __callStatic()
// 5. __get()
// 6. __set()
// 7. __isset()
// 8. __unset()
// 9. __sleep()
// 10. __wakeup()
// 11. __serialize()
// 12. __unserialize()
// 13. __toString()
// 14. __invoke()
// 15. __set_state()
// 16. __clone()
// 17. __debugInfo()

class c
{
    public static function nm()
    {
        $name = "Hello tops technologies students";
        echo $name;
    }
}
c::nm();

?>