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
              

# Lecture 10 - Namespaces, Autoloaders, Traits, Singelton (Namespace in PHP); (Not important to the one who have good understanding with php)
              * NAMESPACES :
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
            

# Lecture 13 - Singelton (Not important to the one who have good understanding with php)
              * It's used to restrict  instantiation of a class to single object
              * Useful when only  on object is required across the system
              * Ensures a single  class instance and that is global its point of access.

              I have attached the screenshot of examples inside my-php folder
              * Check after http://advpress.example.com/wp-content/themes/aquila/my-php/index.php to understand what the changes and how its working

# Lecture 14 - Trait-Singelton (Not important to the one who have good understanding with php)
              * Here just creating a combination of trait and singelton
              
              * Check after http://advpress.example.com/wp-content/themes/aquila/my-php/index.php
