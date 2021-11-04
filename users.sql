
CREATE TABLE 'users' (
  `id` int(11) NOT NULL, PRIMARY KEY AUTO_INCREMENT
  `Naam` varchar(80) NOT NULL,
  `Wachtwoord` varchar(80) NOT NULL,
  `Factuuradres` varchar(80) NOT NULL,
  `Factuurpostcode` varchar(6) NOT NULL,
  `Adres` varchar(80) NOT NULL,
  `Postcode` varchar(6) NOT NULL,
  `Tel` int(10) NOT NULL,
  `Email` varchar(80) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (id, Naam, Wachtwoord, Factuuradres, Factuurpostcode, Adres, Postcode, Tel, Email) VALUES
(1, 'Arwin', 'Arwin', 'Noard 129', '8711AD', 'Noard 129', '8711AD', '0612805462', 'walsweerar@gmail.com')