# Wordpress theme - Aquila



# Lecture 3 - Creating header and Footer, 
              * making functions.php
              * general-template.php(F12- definition)-- here just study what or how the header and footer.php are calling
              * we call separate header file get_header('xyx') for particular page, specialized name as parameter in get_header() 


# Lecture 4 - making the Website Dynamic,
              * Always go through the definition of the functions It is a good pratice that to know what is the purpose and how the function is working
              * 

# Lecture 5 - Body Part and wp_body_open hook
              * body_class - displays the class on body element and can add addition class as parameter
              

# Lecture 6 -  How to add styelsheet and scripts
              * Used for time stamp (newest version of theme can Identified using the time stamp);
              * We can see the timestamp changing when ever the we done any updation on styles.
              
# Lecture 7 - How to handle scripts
              * Here there is small difference in hook name and function name, hook name "wp_enqueue_scripts" and function name is "wp_enqueue_script"
              * Here we use register method that can help to enqueue style on some conditions
              * Try to check view source code that can help to understand where the style and script has been added
              * add "screenshot.png" in the theme folder that help to give the theme image in themes in wordpress dashboard, (1200 x 900) is the perfect size.


# Lecture 8 - Adding Bootstrap 
              * Adding Bootstrap
              * Downloading Bootstrap Compiled CSS And JS from https://getbootstrap.com/docs/5.0/getting-started/download/,
              * and Adding css and main to assets>src>library>(adding css and js )
              * There is default (javascript and css in wordpress ) jquery just check in google 
              * Just check that whether the css and js is included in it but looking view page source code (ctrl + U)


# Lecture 9 - Using Bootstrap in wordpress
              * Here is making the code smaller templates so it is easy to read, bug-fixing,
              * <?php get_template_part(); ?> this is the function that used to call the template parts, for this we can create a template-part folder in that a subfolder header or any thing that help to identify each files and orders
              <?php get_template_parts('template-parts/header/nav') ?> #here in nav.php .php is not necessary
              * If create files called content-page.php and content-post.php in template-parts folder,  Here both are similar, which means we can call by using
              <?php get_template_parts('template-parts/content','post.php') ?>
              <?php get_template_parts('template-parts/content','page.php') ?>
              * Just check general-template.php( function definition, just click "ctrl + mouse Left Button" over the function you want ro study ) , you will get an idea how the function is working with particular slug
              

# Lecture 10 - Namespaces, Autoloaders, Traits, Singleton (Namespace in PHP); (Not important to the one who have good understanding with php)
              * NAMESPACES :
                    ** Its a way of defining a directory, not a normal directory a virtual directory 
                    ** A way of encapsulating items
                    ** Like a virtual folder or directory defined with namespace keyword at the top of the class file followed by the name you like.
                    ** Allow you to have two or more classes with same name in different namespaced directories.
              * Standard Way :
                  class Product{}                              #define

                  $product = new Product();                    #use
              * Using Namespaces :
                  namespace App;
                  class Product{}

                  $product = new App\Product(); 



                  (OR)

                  use App;
                  $product = new Product();   


                  
              1. Namespaces
                 1.1 Encapsulate code to prevent naming conflicts.
                    1.1.1 Useful for organizing classes across different directories.
                 1.2 Allow multiple classes with the same name in different directories.
                 1.3 Simplify class instantiation with the use keyword.
                    1.3.1 Eliminates need for long prefixes, improving readability.

              2. Autoloaders
                 2.1 Automatically load classes in PHP.
                 2.2 Remove the need for manual includes.
                 2.3 Enhance efficiency in WordPress applications.

              3. Traits
                 3.1 Enable code reuse in classes.
                    3.1.1 Allow methods from multiple sources in a single class.
                 3.2 Promote cleaner, more maintainable code in themes. 

              4. Singletons
                 4.1 Ensure only one instance of a class.
                 4.2 Useful for managing resources in larger applications.

            Summary
            Namespaces: Avoid naming conflicts, improve class organization.
            Autoloaders: Streamline class loading.
            Traits: Promote code reuse.
            Singletons: Manage single class instances for resource control.



# Lecture 11 - Autoloaders (Not important to the one who have good understanding with php)
              * AUTOLOADERS :
                   ** Loading classes or Interfaces automatically
                   ** SPL_AUTOLOAD_REGISTER()
                      *** Register any no. of autoloaders
                      *** Enable classes and interface to be  automatically  loaded if they currently not defined 

              * Here I create  folder and and subfolder to test php autoloader
              * the structure I will give you         /srv/www/advance_wordpress/wordpress/wp-content/themes/aquila/my-php,
                                                      /srv/www/advance_wordpress/wordpress/wp-content/themes/aquila/my-php/includes/Person.php
                                                      /srv/www/advance_wordpress/wordpress/wp-content/themes/aquila/my-php/includes/Student.php
                                                      /srv/www/advance_wordpress/wordpress/wp-content/themes/aquila/my-php/index.php


                                                      (These are the file structure I given for my testing you can create in separate) for testing php out of wordpress,


                                                      http://advpress.example.com/wp-content/themes/aquila/my-php/index.php    this is the link i given to check the test (because my wordpress website link I give is http://advpress.example.com you can give what evr you want according to your need)


              * Here the auto loader will automatically load the class. 
         
              Autoloaders in Programming Projects

              1. Overview of Autoloaders
                 1.1 Streamline class and interface loading.
Example:                   
```php

class User {
    public function __construct() {
        echo "User class loaded!";
    }
}
```
When instantiated, the User class file will be automatically loaded by the autoloader, avoiding the need to manually include it.
                 1.2 Reduce manual inclusion, especially in large projects.
                 1.3 Improve efficiency in projects with multiple classes.
Example:
```php
$user = new User();  // No need for include/require statements     
```

               2. SPL Autoload Register Function

                 2.1 Automatically load undefined classes.
                 2.2 Use spl_autoload_register for auto-loading functionality.
                    2.2.1 Registers custom autoload function to load classes as needed.
Example:
```php

spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

$student = new Student();  // Automatically loads 'classes/Student.php'
```
                 2.3 Simplifies inclusion of classes without manually calling include or require.

              3. Benefits of Autoloaders

                 3.1 Eliminate manual class file inclusion.
Example: Without autoloaders, you'd need:
```php
include 'User.php';
include 'Student.php';
```
With autoloaders, this becomes unnecessary.

                 3.2 Enhance code organization and minimize errors.
                 3.3 Simplify class instantiation by automatically including required files.
                    3.3.1 Class files like student and person are auto-included during instantiation.
Example:
```php

$person = new Person();  // Automatically loads 'Person.php'
```
              4. Structured File Organization
              
                 4.1 Using directories (e.g., includes) to manage class files.
Example: Organize class files in an includes directory:

includes/
├── User.php
├── Student.php
                 4.2 Aids in maintaining project clarity and structure.
Example:
```php

spl_autoload_register(function ($class_name) {
    include 'includes/' . $class_name . '.php';
});
```

              5. Traditional vs. Autoloading
          
                5.1 Traditional method: Manual inclusion, prone to errors.
Example (without autoloader):
```php

require 'User.php';
require 'Student.php';

``` 

                 5.2 Autoloading: Automates file inclusion, improving efficiency and reducing repetitive code.
Example (with autoloader):
```php

$user = new User();  // Autoloader will include 'User.php' automatically
```
              1. How Autoloading Works
          
                 6.1 Auto-load register checks and retrieves class files.
Example:
```php
spl_autoload_register(function ($class) {
    include 'src/' . $class . '.php';
});
$teacher = new Teacher();  // Automatically loads 'src/Teacher.php'
```

                 6.2 Ensures all necessary classes are loaded at runtime.
                 6.3 Echoing class names confirms successful auto-loading.
Example:
```php
echo $teacher::class;  // Outputs: "Teacher"
```
                Summary
                
                Autoloaders: Automate class loading, reducing manual effort, and improving project structure.
                SPL Autoload Register: A built-in PHP function that simplifies the process of including class files automatically, enhancing modularity and efficiency.



                SPL - Standard PHP Library.
                
# Lecture 12 - Traits (Not important to the one who have good understanding with php)
              * Earlier we could only inherit properties and functions from one lass to another by extending them.
              * If we want the properties/method of inherited class into another, we need to extend it again - creates chain of inheritance
              * PHP (5.4+) intorduced a mechanism for code resusability called traits


              TRAITS :
               ** Traits allow us to reuse sets of methods freely in several independent classes living in different class hierarchies.
               ** Share Functionalities from multiple classes
               ** A trait is similar to a class, but only inteded to group functionality in fine-grained and consistent way
               ** It's not possible to instantiate a trait on its own

               ** Here It give some examples (Here I'm attaching two screenshot that will help to understand the trait). Check in my-php folder you can see the screenshots
            

# Lecture 13 - Singleton (Not important to the one who have good understanding with php)
              * It's used to restrict  instantiation of a class to single object
              * Useful when only  on object is required across the system
              * Ensures a single  class instance and that is global its point of access.

              I have attached the screenshot of examples inside my-php folder
              * Check after http://advpress.example.com/wp-content/themes/aquila/my-php/index.php to understand what the changes and how its working

# Lecture 14 - Trait-Singleton (Not important to the one who have good understanding with php)
              * Here just creating a combination of trait and singleton
              
              * Check after http://advpress.example.com/wp-content/themes/aquila/my-php/index.php


# Lecture 15 - Singleton design in wordpress
              * Create /srv/www/advance_wordpress/wordpress/wp-content/themes/aquila/inc/headers
              * In that add autoloader.php
              * you can just look github repo to find the auto loader

              * Create /srv/www/advance_wordpress/wordpress/wp-content/themes/aquila/inc/traits/trait-singleton.php
              * Here we use Auto loader that help to include all class automatically, we don't need to worry of that
              * use 
                ** echo '<pre>';
                   print_r(AQUILA_DIR_PATH);
                   ap_die;

                ** which help to find, upto which dir its loading       
             * /srv/www/advance_wordpress/wordpress/wp-content/themes/aquila/lectures/lecture-15.png

# Lecture 16 - OOP Class
              * Create /srv/www/advance_wordpress/wordpress/wp-content/themes/aquila/inc/classes/class-aquila-theme.php
              * Since here we are using singleton function we doest want to instantiate the function it will automatically instantiate( if you have ny doubt or for further understand go to previous topics).
              * The path has been included. /srv/www/advance_wordpress/wordpress/wp-content/themes/aquila/lectures/lecture-16.png
              * Mainly oops concept is used wordpress to make the functions.php make clean. which help to create large projects and make easy to edit , and help to find where to edit.

# Lecture 17 - Enqueue with OOP.
              * Here declaring constant
              if (!defined('AQUILA_DIR_PATH')){
                  define('AQUILA_DIR_PATH', untrailingslashit(get_template_directory()));
               }
               if (!defined('AQUILA_DIR_URI')){
                  define('AQUILA_DIR_URI', untrailingslashit(get_template_directory_uri()));
               }

               is used that we can change AQUIL_DIR_URI or PATH instead of get_template_uri() or get_template_dir()
               for eg: 
                 ** wp_register_style('style-css', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
                 this can be change to 
                 ** wp_register_style('style-css', get_stylesheet_uri(), [], filemtime(AQUILA_DIR_PATH . '/style.css'), 'all');
                    wp_register_style('bootstrap-css', AQUILA_DIR_URI . '/assets/src/library/css/bootstrap.min.css', [], false, 'all');

             * Create a file /srv/www/advance_wordpress/wordpress/wp-content/themes/aquila/inc/classes/class-assets.php
             just for separate the enqueue script to Assets- so the functions.php will clean
             * As we know that autoload will automatically call the classes that are present

# Lecture 18 - Add_theme_support
             * In class we normally use add_action('wp_enqueue_scripts', [$this, 'register_styles']); for doing action .
             * Here $this variable is included in class, after that in call the function that need to do hook.
             * Here Just added add_theme_support for adding title_tag
             * Which is used to make the titlt dynamic. 
 

# Lecture 19 - Add_theme_support(Custom Logo)
             * Just go through the link https://developer.wordpress.org/themes/functionality/custom-logo/
             * Adding custom logo and it feature , so you can see a option for adding custom logo in apprearance>customize>site identity>custom logo
             * Adding the custom logo to front-end. 
             * Sometimes the height and width that given in features maynot be loaded, at that time you can set the height and width using style.css still css not working make sure to add "!important".
              

# Lecture 20 - Add_theme_support(Custom background)
             * Just go through https://developer.wordpress.org/themes/functionality/custom-backgrounds/
             * Added a option for custom background check class-aquila-theme.php
             * you can check through apprearance>customize>site identity>custom background.
             * Now adding to front-end, but here it invoke by defaut ( by the help of wp_head )
             * just check the function definition.
             * just check class-wp-rest-themes-controller.php here we will get wall all properties are there for it.
             

# Lecture                   