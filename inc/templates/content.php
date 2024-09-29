<div>
    <p>This was created to demonstrate creating a router in the simplest way possible. It is the best way that I have
        found to create a routing system for a website. This is my own adaption to a couple of router codes that I tried
        but they did not achieve the results that I wanted. And that is why I created my own. Mainly, I just want the
        router and not a whole MVC patterned website structure. I had found a written article tutorial where someone
        created a simple router. The problem with their method of routing is that it did not work when using url to GET
        a global constant _which means that when I add something like '?id=1234' it returns a 404 error even if the page
        does exist. So, I wrote my own script that is both simple and actually works.
    </p>


    <p>
    <h1>File Structure</h1>
    <?= img('file_structure') ?> <br>

    <h1>Public Directory</h1>
    All content that is not private/requires direct/public access goes in the pubic folder. This includes images,
    stylesheets, and anything related to the Ui and not the programming aspect of the website.

    <h1>Templates</h1>
    All page templates go inside the templates folder. This is a boiler package, so all templates included in this
    website boiler contain the same content except they have different background colors. Here are the templates
    included in this website structure (for demo purposes):<br>
    <?= img('templates') ?> <br>

    <h1>Include (inc) Directory</h1>
    All programming logic for this router is in a private directory named 'inc' here. On a live website, these files
    would go in the directory above the public directory so that the files in this folder cannot be viewed directly.
    Following are all the files included in this directory and an explanation for the code that they contain.
    <h2>config.php</h2>
    The config file is where I would put all my defined constants. Here, the only constant that I have defined is the
    value for ' ROOT '.
    <code>
        <pre>
&lt;?php
//  shorthand if else conditional ROOT define value
$_SERVER['SERVER_NAME'] == 'localhost' ? 
define('ROOT', 'http://localhost/router_no_mvc/public/') : 
define('ROOT', 'https://yourdomain.com');
        </pre>
    </code>

    <h2>functions.php</h2>
    For THIS project, I put the common code (used by all files) into a function and stored these functions in the
    function folder. Therer are only 2 functions in this project _one for outputting html header code and the other for
    outputting html footer code. The header takes 2 arguments _one for page title and one for page's background color.
    <br> <?= img('ws_header_arguments') ?> <br>
    IMPORTANT: All paths to files are set to absolute path, using the global constant 'ROOT' which is defined in the
    config file. <br>
    <?= img('absolute_path_to_files') ?> <br>

    <h2>Router.php</h2>
    This is a class that contains the logic to route pages. The reason that this is written as a class is because for a
    real (live) website you will likely have more than one method. In this project, since there is just one method, I
    could have written this as a function or written the method as the __construct function. But since it will probably
    expand (the class contents), I am leaving it as-is.<br>
    <?= img('router_code') ?> <br>

    <h2>init.php</h2>
    The purpose of the init file is to have all the include (a.k.a. require) files included in one file. Everything in
    this folder is private and therefore cannot be accessed from the public (main) website directory.<br>
    <?= img('init_file') ?> <br>

    <h1>index.php</h1>
    All request to the domain are routed to the index file which then routes to the template/page that is requested in
    URL. So the only code on the index page is the code that routes all request. The index also defines a global
    constant named 'ROOTPATH' so that the pages used in routing can only be accessed via the index. Each page has a
    condition stating if the ROOTPATHh is not defined, do not continue running the script.<br>
    <?= img('index_with_router') ?> <br>


    <h1>.htaccess</h1>
    To have all request to domain routed to index, you need to add code to your .htaccess file. My .htaccess file also
    includes code to rewrite .php to end of url request that do not have extension at the end, so you don't get a 404
    error if you visit a php page without typing '.php' at the end.<br>
    <?= img('htaccess_file') ?> <br>

    </p>
</div>