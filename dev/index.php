<?php

require_once __DIR__.'/bootstrap.php';
// $data_product = file_get_contents("product.json");

$mysqli = new mysqli("db", "habib", "rahasia", "niaga_web");

$sql = 'SELECT * FROM product';

$product = [];

if ($result = $mysqli->query($sql)) {
    while ($data = $result->fetch_object()) {
        $product[] = $data;
    }
}

// print_r($product);

// exit;
// Create a product list
// 
$content['products'] = $product;

$data['title'] = "Web Hosting Indonesia Unlimited & Terbaik - Niagahoster";
$data['phone'] = "0274-2885822";
$data['navbar_menu'] = ['Hosting','Domain','Server','Website','Afiliasi', 'Promo', 'Pembayaran', 'Review', 'Kontak', 'Blog'];
$data['time'] = "Senin - Minggu 24 Jam Nonstop";
$data['address'] = "Jl. Palagan Tentara Pelajar No. 81 Jongkang, Sariharjo, Ngaglik, Sleman Daerah Istimewa Yogyakarta 55581";
$data['service'] = ['Domain','Shared Hosting','Cloud VPS Hosting','Managed VPS Hosting','Web Builder','Keamanan SSL/HTTPS','Jasa Pembuatan Website','Program Afiliasi'];
$data['service_hosting'] = ['Hosting Murah','Hosting Indonesia','Hosting Singapura SG','Hosting PHP','Hosting Wordpress','Hosting Laravel'];
$data['tutorial'] = ['Knowledgebase','Blog','Cara Pembayaran'];
$data['about_us'] = ['Tim Niagahoster','Karir','Events','Penawaran & Promo Spesial','Kontak Kami'];
$data['why_us'] = ['Support Terbaik','Garansi Harga Termurah','Domain Gratis Selamanya','Datacenter Hosting Terbaik','Review Pelanggan'];

$content['modul_one'] = ['IcePHP', 'apc', 'apcu','apm','ares','bcmath','bcompiler','big_int','bitset','bloomy','bz2_filter','clamav','coin_acceptor','crack','dba'];
$content['modul_two'] = ['http', 'huffman', 'idn','igbinary','imagick','imap','inclued','inotify','interbase','intl','ioncube_loader','ioncube_loader_4','jsmin','json','idap'];
$content['modul_three'] = ['nd_pdo_mysql', 'oauth', 'oci8','odbc','opcache','pdf','pdo','pdo_dblib','pdo_firebid','pdo_mysql','pdo_odbc','pdo_pgsql','pdo_sqlite','pgsql','phalcon'];
$content['modul_four'] = ['stats', 'stem', 'stomp','suhosin','sybase_ct','sysvmsg','sysvsem','sysvshm','tidy','timezonedb','trader','translit','uploadprogress','uri_template','uuid'];

// Render our view
echo $twig->render('index.html.twig', ['content' => $content, 'setting' => $data] );
