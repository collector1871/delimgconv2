### Delcampe images downloader and converter

* technology: PHP, Linux tools
* similar script (written in Python): 
https://github.com/collector1871/Delimgconv
* source code:
https://github.com/collector1871/delimgconv2   

This is small PHP script which can be used for downloading content from delcampe.net.

#### Dependencies:

- PHP
- Linux command line tools: grep, cat, uniq, sort, sed

#### Usage

		php delimgconv2.php <argument>

argument - delcampe user page with auctions.

Examples of arg:

https://www.delcampe.net/en_GB/collectables/search?seller_ids%5B0%5D=376894

https://www.delcampe.net/en_GB/collectables/search?seller_ids%5B0%5D=151627

https://www.delcampe.net/en_GB/collectables/search?seller_ids%5B0%5D=845408

#### Output

\*.jpg files downloaded from delcampe.net.  
Temporary **plik\*.txt** files with addtional information about content.

#### Screenshots - example:

![Start](https://raw.githubusercontent.com/collector1871/delimgconv2/master/screenshot_001.jpg)

![pobrane fotki](https://raw.githubusercontent.com/collector1871/delimgconv2/master/screenshot_002.jpg)
