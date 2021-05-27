CREATE TABLE product (
    id int,
    name VARCHAR(255),
    description TEXT,
    price DOUBLE PRECISION,
    promo_price DOUBLE PRECISION,
    customer_total INT,
    is_popular BOOLEAN
    
);

INSERT INTO product(id, name, description,price,promo_price,customer_total,is_popular) VALUES
(1,'Bayi','<b>0.5X RESOURCE POWER</b><br><br><b>500 MB</b> Disk Space<br><br><b>Umlimited</b> Bandwidth<br><br><b>Umlimited</b> Database<br><br><b>1</b> Domain<br><br><b>Instant</b> Backup<br><br><b>Umlimited SSL</b> Gratis Selamanya',19900,14900,938,false),
(2,'Pelajar','<b>1X RESOURCE POWER</b><br><br><b>Unlimited</b> Disk Space<br><br><b>Umlimited</b> Bandwidth<br><br><b>Umlimited</b> POP3 Email<br><br><b>Umlimited</b> Database<br><br><b>10</b> Addon Domains<br><br><b>Instant</b> Backup<br><br><b>Domain Gratis</b> Selamanya<br><br><b>Umlimited SSL</b> Gratis Selamanya',46900,23450,4168,false),
(3,'Personal','<b>2X RESOURCE POWER</b><br><br><b>Unlimited</b> Disk Space<br><br><b>Umlimited</b> Bandwidth<br><br><b>Umlimited</b> POP3 Email<br><br><b>Umlimited</b> Database<br><br><b>Unlimited</b> Addon Domains<br><br><b>Instant</b> Backup<br><br><b>Domain Gratis</b> Selamanya<br><br><b>Umlimited SSL</b> Gratis Selamanya<br><br><b>Private</b> Name Server<br><br><b>SpamAssasin</b> Mail Protection',109900,65900,3552,true),
(4,'Bisnis','<b>3X RESOURCE POWER</b><br><br><b>Unlimited</b> Disk Space<br><br><b>Umlimited</b> Bandwidth<br><br><b>Umlimited</b> POP3 Email<br><br><b>Umlimited</b> Database<br><br><b>Unlimited</b> Addon Domains<br><br><b>Magic Auto</b> Backup & Restore<br><br><b>Domain Gratis</b> Selamanya<br><br><b>Umlimited SSL</b> Gratis Selamanya<br><br><b>Private</b> Name Server<br><br><b>Prioritas</b> Layanan Support<br><br><b>SpamAssasin</b> Pro Mail Protection',109900,65900,3552,false)
