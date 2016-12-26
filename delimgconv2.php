<?php 
namespace DelcampeDL;
include 'simple_html_dom_modified.php';

class Kolekcje{
## <editor-fold defaultstate="collapsed" desc="array do usuniecia">

private $array_do_usuniecia = array('//www.delcampe.fr',
'//www.delcampe.be',
'//www.delcampe.ca',
'//www.delcampe.ch',
'//www.delcampe.de',
'//www.delcampe.at',
'//www.delcampe.es',
'',
'#',
'/en_GB/collectables/',
'/en_GB/collectables/search/advanced?term=',
'/en_GB/my-account/login',
'/en_GB/my-account/reset-password',
'/en_GB/my-account/register',
'/en_GB/collectables/category',
'/en_GB/collectables/stamps/',
'/en_GB/collectables/postcards/',
'/en_GB/collectables/coins-banknotes/',
'/en_GB/collectables/art-antiquities/',
'/en_GB/collectables/jewels-clocks/',
'/en_GB/collectables/bar-food/',
'/en_GB/collectables/modern-collectible-cards/',
'/en_GB/collectables/films-video/',
'/en_GB/collectables/charms/',
'/en_GB/collectables/postcards/club-plus.html',
'https://www.delcampe.net/en_GB/club-plus.html',
'/en_GB/collectables/coins-banknotes/tokens-medals/',
'/en_GB/collectables/games-toys-figurines/',
'/en_GB/collectables/kinder-diddl/',
'/en_GB/collectables/books-magazines-comics/',
'/en_GB/collectables/army-war/',
'/en_GB/collectables/minerals-fossils/',
'/en_GB/collectables/scale-models-model-making/',
'/en_GB/collectables/music-instruments/',
'/en_GB/collectables/perfume-beauty/',
'https://www.instagram.com/delcampe_official/',
'/en_GB/collectables/redirect/old/?url=https%3A//www.delcampe.net/en_GB/collectables/search%3Fpage%3D1_%26seller_ids%255B0%255D%3D913749%26size%3D120',
'https://sites.google.com/a/delcampe.com/i-want-to-work-for-delcampe/',    
'/en_GB/collectables/photography/',
'/en_GB/collectables/badges/',
'/en_GB/collectables/advertising-1/',
'/en_GB/collectables/religion-esotericism/',
'/en_GB/collectables/sports/',
'/en_GB/collectables/phonecards/',
'/en_GB/collectables/old-paper/',
'/en_GB/collectables/other-collections/',
'/en_GB/collectables/item/sell',
'/en_GB/my-account/dashboard',
'/en_GB/collectables/buy/favorites/watching-list',
'/en_GB/collectables/buy/bids/ongoing',
'/en_GB/collectables/buy/purchases/purchased-items',
'/en_GB/collectables/buy/purchases/awaiting-payment',
'/en_GB/collectables/buy/purchases/awaiting-shipment',
'/en_GB/collectables/sell/item-for-sale/ongoing',
'/en_GB/collectables/sell/item-for-sale/ongoing-with-offers',
'/en_GB/collectables/sell/sold-items/list',
'/en_GB/collectables/sell/sold-items/to-invoice',
'/en_GB/collectables/sell/sold-items/to-send',
'/en_GB/messages',
'/en_GB/api.html',
'/en_GB/your-advert-on-delcampe.html',
'/en_GB/messages/sender',
'/en_GB/learn-how-to-use-the-new-delcampe.html',
'/en_GB/messages/recipient/members',
'/en_GB/messages/recipient/conflict-management',
'/en_GB/my-account/settings/contact-information',
'/en_GB/my-account/settings/change-email',
'/en_GB/my-account/settings/change-password',
'/en_GB/collectables/my-account/fees/history',
'/en_GB/my-account/settings/general-settings',
'/en_GB/collectables/buy/favorites/favorites-list',
'/en_GB/collectables/collector-deals',
'/en_GB/help-center',
'/en_GB/collectables/basket',
'/en_GB/collectables/user/profile/913749-klakier223',
'http://cennik.poczta-polska.pl/usluga,zagraniczny_przesylka_listowa_polecona.html',
'https://docs.google.com/viewer?url=http%3A%2F%2Fwww.delcampe.net%2Fpublic%2Fpdf%2Fcharters%2Fcharter_LU_E.pdf',
'/en_GB/collectables/search?seller_ids%5B0%5D=913749&amp;categories%5B0%5D=30005',
'/en_GB/collectables/search?seller_ids%5B0%5D=913749&amp;categories%5B0%5D=30004',
'/en_GB/collectables/search?seller_ids%5B0%5D=913749&amp;categories%5B0%5D=30003',
'/en_GB/collectables/search?seller_ids%5B0%5D=913749&amp;categories%5B0%5D=30008',
'/en_GB/collectables/search?seller_ids%5B0%5D=913749&amp;categories%5B0%5D=30002',
'/en_GB/collectables/search?seller_ids%5B0%5D=913749&amp;categories%5B0%5D=30001',
'//www.delcampe.it',
'//www.delcampe.co.uk',
'//www.delcampe.nl',
'//www.delcampe.com',
'//www.delcampe.com.au',
'?seller_ids%5B0%5D=913749&amp;page=1',
'?seller_ids%5B0%5D=913749&amp;page=2',
'/en_GB/how-to-buy.html',
'/en_GB/how-to-sell.html',
'/en_GB/rates.html',
'/en_GB/selling-methods.html',
'/en_GB/delcampe-lister.html',
'/en_GB/forum',
'/en_GB/prestige/catalogs/list-open',
'/en_GB/my-account/settings/check-address',
'/en_GB/collectables/search?seller_ids%5B0%5D=913749&amp;size=120&amp;categories%5B0%5D=30005',
'/en_GB/collectables/search?seller_ids%5B0%5D=913749&amp;size=120&amp;categories%5B0%5D=30004',
'/en_GB/collectables/search?seller_ids%5B0%5D=913749&amp;size=120&amp;categories%5B0%5D=30003',
'/en_GB/collectables/search?seller_ids%5B0%5D=913749&amp;size=120&amp;categories%5B0%5D=30002',
'/en_GB/collectables/search?seller_ids%5B0%5D=913749&amp;size=120&amp;categories%5B0%5D=30001',
'/en_GB/club-plus.html',
'/en_GB/who-are-we.html',
'/en_GB/news.html',
'/en_GB/contest.html',
'/en_GB/press-book.html',
'seller_ids%5B0%5D=913749&amp;size=120&amp;page=1',
'?seller_ids%5B0%5D=913749&amp;size=120&amp;page=2',
'/en_GB/why-buy.html',
'/en_GB/why-sell.html',
'/en_GB/collectables/redirect/old/?url=https%3A//www.delcampe.net/en_GB/collectables/search%3Fpage%3D1%26seller_ids%255B0%255D%3D913749%26size%3D120',
'/en_GB/a-secure-website.html',
'/sitemap',
'?seller_ids%5B0%5D=913749&amp;size=120&amp;page=1',
'/en_GB/jobs.html',
'/en_GB/website-update.html',
'http://status.delcampe.net/en_GB/',
'/en_GB/collectables/redirect/old/?url=https%3A//www.delcampe.net/en_GB/collectables/search%3Fseller_ids%255B0%255D%3D913749',
'/en_GB/collectables/exchange_rate',
'/en_GB/sitemap',
'/en_GB/contact',
'http://prestige.delcampe.net/page/main/action,home,language,E.html',
'http://premium.delcampe.net/?language=E',
'https://www.collectorcenter.com/en/',
'https://www.facebook.com/Delcampe-221155447945090/',
'https://www.youtube.com/user/DelcampeTeam',
'https://twitter.com/Delcampe',
'https://www.instagramfom/delcampe_official/',
'https://www.linkedin.com/company/2121591?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A2121591%2Cidx%3A1-1-1%2CtarId%3A1453207178409%2Ctas%3Adelcampe'
);
## </editor-fold>

public $wieleLinkow = array();

function __construct($PodajLink){
  $this -> PodajLink = $PodajLink;
}

public function sciagnijDane (){
$PodajLink2 = $this -> PodajLink; #.PHP_EOL;	
$PodajLink3 = file_get_html($PodajLink2);
foreach($PodajLink3->find('a') as $element)
{
$wieleLinkow[] = $element->href;
}
$final_array = array_diff($wieleLinkow,$this -> array_do_usuniecia);
$final_array2 = array_unique($final_array, SORT_REGULAR);
$final_array3 = array_unique($final_array2, SORT_STRING);
$klakier0 = implode("\n",$final_array3);
$str0 = implode(',',array_unique(explode(',', $klakier0)));
$plik0 = print_r($str0, true);
file_put_contents('plik.txt', $str0);
exec('cat plik.txt| egrep -o "[^/]*.html" |uniq > plik2.txt');
}

public function usunPlikiTmp(){
$do_usuniecia = array('plik.txt', 'plik2.txt', 'plik2b.txt', 'plik3.txt', 'plik4.txt');	
foreach ($do_usuniecia as $jeden1) {
unlink($jeden1);
clearstatcache();
}}

public function przetworz1(){
foreach(file('plik2.txt') as $line) {
$calosc = "http://delcampe.net/en_GB/collectables/postcards/$line";
$calosc2 = str_replace("\n", '', $calosc);
$html = file_get_html($calosc2);
foreach($html->find('img') as $element) {
ob_start();
echo $element->src."\n";
$output = ob_get_contents();
ob_end_clean();
$myfile = fopen("plik3.txt", "a") or die("Unable to open file!");
fwrite($myfile, $output);
fclose($myfile);
}
	
}
exec('cat plik3.txt |egrep -Ev "^$"|egrep "*large*"|sort |uniq|sort > plik4.txt');
}

function przetworz2(){
#exec('cat plik7.txt |egrep -o "[^/]*.html" |cut -d"." -f1 > plik8.txt');
$i = 1;
foreach(file('plik4.txt') as $line) {
#echo $line;
$bizon1 = "$i.jpg";
$bizon2 = str_replace("\n", '', $bizon1);
$content11 = file_get_contents($line);
file_put_contents("$bizon2", $content11);
$i++;
}
	
}


#usuwa ostatnie litery, zostawia jedynie sama nazwe plikow
function usunOstatnieLitery(){
exec('cat plik2.txt | sed s\'/...............$//\' > plik2b.txt');
}

} 


$bizon = new Kolekcje($argv[1]);
@$bizon -> usunPlikiTmp();
$bizon ->sciagnijDane();
$bizon ->przetworz1();
$bizon ->przetworz2();
$bizon ->usunOstatnieLitery();
@$bizon -> usunPlikiTmp();