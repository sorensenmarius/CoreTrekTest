Test of PHP and MySQL
==============================================================

Prerequisites: 
--------------------------------------------------------------
- A computer with an IDE / Editor installed.
- Access to a development environment with a web-server (i.e. Apache), database (i.e. MySQL) and PHP 7.0.
- A GitHub account where the finished code will be uploaded/pushed to (alternatively the files can be sent via e-mail).
- Classes-directory with complete database classes.

NOTE: Read the entire task and weighting/emphasizing before starting!

All code, variables, methods, comments etc. must be in English.

Task:									
--------------------------------------------------------------
You are asked to make a super simple publishing system for the web. 

All queries against the database must be done with the provided classes located in the classes folder.

There are a few files which you are required to create, as per the instructions below - however, you are not limited to creating *only* those files. Try to make the file structure as real-world as possible in the time you have available.

#### Sub task 1 - create database tables: 
- You must make two database tables, a user table and a table for storing article data.
- The user table should only contain id, username, password and full name, a total of 4 fields.
- The table of "articles" should only contain id, title, content and id of the user who created it, a total of 4 fields.
- Create-statements for the tables are to be stored in a text file, and submitted along with the code.

#### Sub task 2 - authentication / login: 
- Based on the user table you created in task 1, you should create a simple mechanism for logging in. Create a front page (`index.php`) with a form where you can fill in your username and password. The form shall submit to a new page (`login.php`), which validates the username and password against the user table.
- If the correct username/password is submitted, the user is forwarded to a login page (`loggedin.php`), if not one should be sent back to "index.php" with an error.
- On `loggedin.php` there should also be a check to validate that the user is actually logged in. Use session handling in PHP for this.
- It is not necessary to have the ability to create users. A test user can be added directly into the database.

#### Sub task 3 - publishing system
- On the logged in page `loggedin.php`, you'll create a simple list of the available articles. The list shall show the title and name of the user who created it.
- Clicking on the title, the user should be taken to `edit.php`, where it should be possible to change the title and content of the article, i.e. save this to the database.
- It is not necessary to have the ability to create and delete articles. Test data/articles can be added directly into the database.


What will be emphasized:
--------------------------------------------------------------
- Structured, quality and readability of the code           40%
- Use of object orientation                                 30%
- Code comments and explanation of what you have done       10%
- Error handling                                            10%
- Safe and effective coding                                  9%
- Appearance/styling of pages                                1%


Other:
--------------------------------------------------------------
- If you do not know how to solve a task, you can write "pseudo-code", i.e.: 

```
if (user is logged in) {
    make query against database(connection);
    do something with the result();
}
```
    
