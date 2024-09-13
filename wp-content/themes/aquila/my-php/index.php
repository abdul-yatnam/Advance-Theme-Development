<?php
echo "Hello, this is a custom PHP task for lecturing purposes only(Autoloaders).";


// include_once 'includes/Person.php';
// include_once 'includes/Student.php';

spl_autoload_register(function ($class) {
    include 'includes/' . $class . '.php';

});

new Student();
new Person();