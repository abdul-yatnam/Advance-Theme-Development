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
              * 
