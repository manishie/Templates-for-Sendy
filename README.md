Templates for Sendy
===========

**Version: 1.0.3**

> **Create and save HTML templates in Sendy to use in campaigns.**

Installation
=====

Once you have downloaded the project you will need to complete the following steps.

Note: ALWAYS back up your Sendy files and database before making any modifications.

### Add Templates to database

Included in this project is an 'install.sql' file, this is required to save templates - if you use phpMyAdmin, import it from your browser.

### Add Files through FTP

Upload the 'template' folder and 'templates.php' from this project.

### Integrate the new template files with Sendy.

Add the following code snippet just before the last closing DIV in 'sidebar.php' located in '/includes/'

    <?php include("template/sidebar.php");?>

And add the following line near the top of 'create.php', just above the first script line (&lt;script src=...):

    <?php include('template/mysql.php');?>

### Add rule to .htaccess

Add the following to the end of the '.htaccess' file located in the sendy folder.

    # template
    RewriteRule ^templates/(.*)$ templates.php?i=$1 [L]

### Complete! 

You can now create templates in Sendy!
