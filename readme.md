#PHP Challenge:
Create a CLI tool that will accept a url for a website product listing page (PLP), and output a csv like:
"Product Name",Price
"Air Jordan 1 Hi OG TS SP",$940.00
"Air Jordan 6",$255.00
"Air Jordan 1 Retro High OG",$325.00
Requirements:
- You can use any tools or libraries you want, but must be written in PHP
- There should be one executable file that accepts the url as the argument in argv
- The CSV file generated should be output to stdout
- Bundle your files together (zip, tar, etc) and provide instructions on how to run the cli tool

###Requirements
php version => 7.1
##How To Use:
At root directory of cli application cli tool can be executed with following command

`php scrap.php`

The above command with output info version and necessary argument format.

To get the required csv out provide the argument with appropriate url and format.

`php scrap.php --plpurl https://www.stadiumgoods.com/adidas`

You can save the output into any csv file with following command.

`php scrap.php --plpurl https://www.stadiumgoods.com/adidas > report.csv`
