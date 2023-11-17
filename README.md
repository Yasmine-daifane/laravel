# laravel auto formation chapitre :  validate data 

 - When the user interacts with a form, it is important to ensure that the data they enter corresponds to what is expected.
 
- Let's use a validator class in Laravel

- The make() method takes two parameters. The first parameter is an associative array containing the data, where each key represents the name of a property. The second parameter is also an associative array, where each key corresponds to the property name we want to validate, and it contains the validation rules for that property

- The fails() method returns a boolean value. It is true if the validation rule fails, indicating that the validation did not pass, and it is false if the validation rule succeeds
-  we provided the value for 'title' as 'yaaaaaasmiiiiiiinehhh' which has more than 8 characters. Therefore, the validation should pass, and fails() should return false . 
-  php artisan make:request BlogFilterRequest