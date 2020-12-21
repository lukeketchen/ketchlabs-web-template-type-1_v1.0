# Website Template
### Type 1 v1.0

Website template files and folders to start website projects.

Using sass, php.


I am building this file system to help me make small websites. These websites I make outside work hours are usually for tradesmen just wanting a nice corner of the web so show off some cool stuff they do.

I am writing this using sass as I really enjoy it and you can get any look you like for the site.

I am also writing this using php so I can have the file structure that I want. All clean like.

In the includes folder will be the data files with the variables for each text object on the site. If you want to change the text on the about page. Change the variable in the website-data file.

As its using php variables to fill the content of each section it can be overridden. Re set the variable in the section with the value of another variable. For example you might have image/text section 2 or 3 times on the about page. You could set up a variable for $about_section_one = "the first section text"; $about_section_two = "Second section text"; Inside section 2 you would set $image_text_text = $about_section_one;
