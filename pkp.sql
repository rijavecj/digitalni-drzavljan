-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Gostitelj: 127.0.0.1
-- Čas nastanka: 04. avg 2018 ob 17.11
-- Različica strežnika: 10.1.31-MariaDB
-- Različica PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Zbirka podatkov: `test`
--

-- --------------------------------------------------------

--
-- Struktura tabele `kategorije`
--

CREATE TABLE `kategorije` (
  `idp` int(11) NOT NULL,
  `imeKategorije` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `idk` int(11) NOT NULL,
  `icon` varchar(250) COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci ROW_FORMAT=COMPACT;

--
-- Odloži podatke za tabelo `kategorije`
--

INSERT INTO `kategorije` (`idp`, `imeKategorije`, `idk`, `icon`) VALUES
(1, 'Zdravje', 1, ''),
(1, 'Prehrana', 2, ''),
(1, 'Prevoz', 3, ''),
(1, 'Bivanje', 4, ''),
(1, 'Šolanje', 5, ''),
(2, 'Pravica in status', 6, ''),
(2, 'Finačna in druga pomoč', 7, ''),
(2, 'Pridobivanje pravic in statusov', 8, ''),
(2, 'Svetovanje in usmeritve', 9, ''),
(2, 'Zdravje', 10, ''),
(3, 'Socialna pomoč', 11, ''),
(3, 'Informacijski paket', 12, ''),
(3, 'ZPIZ', 13, ''),
(3, 'Zdravje', 14, ''),
(4, 'Davki', 15, ''),
(4, 'Uprava', 16, ''),
(4, 'Zdravje', 17, ''),
(5, 'Otroško varstvo', 18, ''),
(5, 'Socialna pomoč', 19, ''),
(6, 'Digitalno potrdilo', 20, ''),
(6, 'smsPASS', 21, ''),
(6, 'Uporaba e-uprave', 22, '');

-- --------------------------------------------------------

--
-- Struktura tabele `paketi`
--

CREATE TABLE `paketi` (
  `idp` int(11) NOT NULL,
  `imePaketa` varchar(50) COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci ROW_FORMAT=COMPACT;

--
-- Odloži podatke za tabelo `paketi`
--

INSERT INTO `paketi` (`idp`, `imePaketa`) VALUES
(1, 'Mladi'),
(2, 'Brezposelni'),
(3, 'Upokojenci'),
(4, 'Delovno Aktivni'),
(5, 'Starši'),
(6, 'Splošno');

-- --------------------------------------------------------

--
-- Struktura tabele `prenosi`
--

CREATE TABLE `prenosi` (
  `idk` int(11) NOT NULL,
  `idt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Odloži podatke za tabelo `prenosi`
--

INSERT INTO `prenosi` (`idk`, `idt`) VALUES
(1, 1),
(1, 2),
(1, 22),
(1, 24),
(2, 3),
(6, 25),
(6, 26),
(2, 20),
(3, 21),
(4, 27),
(4, 4),
(5, 23),
(22, 32),
(22, 33),
(21, 30),
(21, 31),
(20, 28),
(20, 29),
(11, 17),
(19, 34),
(12, 19),
(13, 35),
(15, 10),
(11, 14),
(14, 1),
(14, 2),
(14, 22),
(15, 11),
(15, 12),
(15, 36),
(15, 13),
(15, 15),
(15, 37),
(16, 16),
(17, 2),
(18, 38),
(18, 39);

-- --------------------------------------------------------

--
-- Struktura tabele `tematike`
--

CREATE TABLE `tematike` (
  `idt` int(11) NOT NULL,
  `ime_tematike` varchar(100) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `opis` varchar(1000) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `posnetek` tinyint(1) DEFAULT NULL,
  `digitalno_potrdilo` tinyint(1) DEFAULT NULL,
  `tel` varchar(100) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `video_link` text COLLATE utf8_slovenian_ci NOT NULL,
  `info-link` text COLLATE utf8_slovenian_ci NOT NULL,
  `Page-link` text COLLATE utf8_slovenian_ci NOT NULL,
  `icon` text COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci ROW_FORMAT=COMPACT;

--
-- Odloži podatke za tabelo `tematike`
--

INSERT INTO `tematike` (`idt`, `ime_tematike`, `opis`, `posnetek`, `digitalno_potrdilo`, `tel`, `video_link`, `info-link`, `Page-link`, `icon`) VALUES
(1, 'e_napotnica', 'e-napotnice ne bo več nujno potrebno prevzeti v ambulanti ampak bo mogoče pridobiti potrebne podatke e-napotnice po telefonu ali elektronski pošti\r\npacient bo imel preko elektronskega naročanja možnost vpogleda v čakalne vrste posameznih izvajalcev znotraj izbrane regije ter si tako sam izbral prvi možen termin za pregled', 0, 0, '080 24 25', '', 'http://www.mz.gov.si/si/pogoste_vsebine_za_javnost/projekt_e_zdravje/enapotnica/', '', ''),
(2, 'e_recept', 'Registrirani uporabniki portala zVEM vidijo glede na nastavljeno časovno obdobje svoje izdane recepte, datume izdaje, njihovo veljavnost, ime zdravil in druge podatke. Podatke lahko pregledujejo tudi za recepte izdane za njihove otroke.', 1, 1, '0', '', '0', '', ''),
(3, 'Pridobivanje študentskih bonov', 'Študentje prvo prijavo za pridobitev študentskih subvencij opravijo preko spletnega obrazca. S pridobljeno kodo ob koncu prijavnega postopka, potrdilom o vpisu in osebnim telefonom se je nato potrebno osebno oglasiti na eni izmed info točk subvencionirane študentske prehrane v Sloveniji in zaključiti pridobitev. ', 1, 0, '0', '', '0', '', ''),
(4, 'prijava začasnega prebivališča', 'Vlogo za prijavo začasnega prebivališča se vloži pri upravni enoti. Začasno prebivališče je potrebno prijaviti v primeru, ko bo državljan ali tujec z dovoljenjem za stalno prebivanje, ki začasno prebiva zunaj naslova stalnega prebivališča, vendar ne pri stanodajalcu ali gostitelju, na tem naslovu prebival več kot 90 dni.', 1, 1, '0', '', '0', '', ''),
(5, 'Prijava v evidenco brezposelnih', 'Če niste v delovnem razmerju, niste samozaposleni ali upokojeni, se ne izobražujete ali nimate statusa kmeta, pa želite aktivno iskati zaposlitev, vas praviloma uvrstimo v evidenco brezposelnih. Postopek lahko opravite elektronsko na portalu poiscidelo.si. Po registraciji in prijavi v slednjega, najprej v zgornjem desnem kotu izberite MOJI DOKUMENTI, na to pa med ponujenimi možnostmi še \"Evidenca iskalcev brezposenih oseb\".', 1, 1, '0802055', '', '0', '', ''),
(6, 'Prijava v evidenco iskalcev zaposlitve', 'Niste brez zaposlitve, pa jo vseeno iščete? Prijavite se pri Zavodu in uvrstili vas bomo v evidenco iskalcev zaposlitve. Če pričakujete odpoved pogodbe o zaposlitvi iz poslovnega razloga ali razloga nesposobnosti, se v treh delovnih dneh po vročeni odpovedi nujno prijavite pri Zavodu.\r\nPostopek lahko opravite elektronsko na portalu poiscidelo.si. Po registraciji in prijavi v slednjega, najprej v zgornjem desnem kotu izberite MOJI DOKUMENTI, na to pa med ponujenimi možnostmi še \"Evidenca iskalcev zaposlitve\".', 1, 1, '0802055', '', '0', '', ''),
(7, 'Vloga za denarno nadomestilo', 'Denarno nadomestilo lahko ob izpolnjevanju pogojev pridobite, če se prijavite pri Zavodu RS za zaposlovanje in vložite zahtevo za uveljavitev pravice do denarnega nadomestila v 30 dneh po prenehanju obveznega zavarovanja. Postopek lahko opravite elektronsko na portalu poiscidelo.si. Po registraciji in prijavi v slednjega, najprej v zgornjem desnem kotu izberite MOJI DOKUMENTI, na to pa med ponujenimi možnostmi še \"Vloga za denarno nadomestilo\".', 1, 1, '0802055', '', '0', '', ''),
(8, 'Portal eSvetovanje', 'eSvetovanje je spletni portal za učinkovito načrtovanje kariere in iskanje zaposlitve. Svetujemo vam, da se pred uporabo registrirate in si tako zagotovite dostop do vseh storitev. Kot prijavljen uporabnik lahko v Moji mapi shranjujete podatke in dostopate do shranjenih rezultatov izpolnjenih vprašalnikov. Na vaši poti do zaposlitve vas bo usmeril proti odgovorom na vprašanja kot so: Kakšen sem? Kaj znam? Kaj me zanima? Kaj naj delam? Kje iščem zaposlitev? Kako kandidiram na delovno mesto? Kako naj bom aktiven?', 1, 1, '0802055', '', '0', '', ''),
(9, 'Vloga za brezplačno pravno pomoč', 'Postopek vlaganja prošnje za brezplačno pravno pomoč poteka osebno ali po pošti. Socialno ogrožene osebe imajo zagotovljeno pravico do brezplačne pravne pomoči. Upravičenci lahko zaprosite za celotno ali delno pokritje stroškov pravne pomoči in sodnega postopka. O prošnji za dodelitev odloča pristojni organ za BPP tistega sodišča, na območju katerega ima prosilec stalno ali začasno prebivališče. Okrožno sodišče je tako pristojno v zadevah iz splošne sodne pristojnosti, v zadevah individualnih in kolektivnih delovnih sporov ter socialnih sporov delovno in socialno sodišče, pri upravnih sporih upravno sodišče, v zvezi z ustavno pritožbo, pobudo za oceno ustavnosti in zakonitosti ali spore pred mednarodnimi sodišči pa tisto od navedenih sodišč, ki je po vsebini pristojno za zadevo. Vlogo in več informacij kot so - komu pripada in kaj se pri odločitvi upošteva, najdete na spodnjem info znaku.', 1, 1, '0802002', '', '0', '', ''),
(10, 'Napoved za odmero dohodnine na letni ravni', 'Dohodnina je davek od dohodka fizičnih oseb. Odmera dohodnine se izvede enkrat letno. ', 1, 1, '013693000', '', '0', '', ''),
(11, 'Vloga za ugovor zoper informativni izračun dohodnine', 'Če ugotovite, da so podatki v informativnem izračunu dohodnine nepravilni ali nepopolni, lahko v 15 dneh od vročitve informativnega izračuna, vložite ugovor. ', 1, 1, '013693000', '', '0', '', ''),
(12, 'Zahtevek za namenitev dela dohodnine za donacije', 'Vsak zavezanec za dohodnino lahko del svoje odmerjene dohodnine nameni za donacijo organizaciji, ki deluje s splošno koristnim namenom', 1, 0, '013693000', '', '0', '', ''),
(13, 'Vloga za odpis, odlog in obročno plačilo davka v največ treh mesečnih obrokih za fizične osebe', 'Davčni zavezanec ima pravico, da odmerjen davek poravna v več obrokih. Poleg odpisa je možen tudi odlog ali obročno plačilo na 3, 12 ali največ 24 obrokov. ', 1, 0, '013693000', '', '0', '', ''),
(14, 'Razkritje podatkov o obveznih prispevkih za socialno varnost iz delovnega razmerja', 'Opis postopka za pridobitev pravice do razkritja podatkov o obveznih prispevkih za socialno varnost iz delovnega razmerja.', 1, 0, '013693000', '', '0', '', ''),
(15, 'Mednarodna obdavčitev rezidenta RS', 'Rezidenti Slovenije so dolžni plačati dohodnino od vseh dohodkov, ki imajo vir v Sloveniji ali izven nje. ', 1, 0, '013693000', '', '0', '', ''),
(16, 'Pravice iz delovnega razmerja', 'Delovno razmerje je razmerje med zaposlenim in delodajalcem, v katerem sta obe strani dolžni izvrševati dogovorjene in predpisane obveznosti in pravice. ', 1, 0, '013693000', '', '0', '', ''),
(17, 'Vloga za uveljavljanje pravice do dodatka za pomoč in postrežbo z vprašalnikom', 'Dodatek lahko pridobite, če ne morete samostojno opravljati vseh ali večine življenjskih potreb.\r\nČe zaradi trajnih sprememb v zdravstvenem stanju ne morete zadovoljevati vseh ali večine življenjskih potreb, lahko uveljavite nujno potrebo po stalni pomoči in postrežbi.\r\n', 1, 0, '0802002', '', '0', 'https://e-uprava.gov.si/si/podrocja/sociala-zdravje-smrt/socialne-pomoci/dodatek-za-pomoc-in-postrezbo', ''),
(18, 'Zahteva za priznanje pravice do dodatka za pomoč in postrežbo', 'Vojni veterani lahko s to vlogo uveljavite priznanje dodatka za pomoč in postrežbo, ko ga ne morete uveljaviti po drugih predpisih. ', 1, 1, '0802002', '', '0', '', ''),
(19, 'Upokojitev ', 'Vrste pokojnin, ugodnosti ob poznejši upokojitvi, domovi za starejše, delna upokojitev, predčasna upokojitev …', 1, 0, '0802002', '', '0', '', ''),
(20, 'pregled porabljenih študentski subvencij', 'Študentje lahko sedaj spremljajo svojo porabo študentskih subvencij, ki jim omogoča vpogled v lokale, kjer so koristili subvencije, cene doplačil in mesečni seštevek vseh doplačil.', 1, 0, '0', '', '0', '', ''),
(21, 'Subvencije potniškega prometa', 'Posamezniki, ki uporabljajo subvencioniran prevoz z vlakom, mestnim ali regionalnim avtobusom lahko pridobijo različne informacije v zvezi z vozovnicami ter gradiva (vloge, obrazci) za pridobitev subvencij. ', 1, 0, '0', '', '0', '', ''),
(22, 'e-naročanje', 'Pri zdravniku ste prejeli eNapotnico ali potrdilo o izdani eNapotnici. Na zdravstveno storitev vas lahko naroči zdravnik, medicinska sestra, administratorka, lahko se naročite sami preko portala ezdrav.\r\n ', 1, 0, '0802425', '', '0', '', ''),
(23, 'Štipendija', 'Nabor, ki vsebuje nekaj osnovnih informacij o različnih štipendijah, njihovi pridobitvi, višini, trajanju, izplačevanju  in dodatkih. ', 1, 0, '0', '', '0', '', ''),
(24, 'e-čakalne dobe\r\n', 'Uporabnik lahko glede na iskano zdravstveno storitev poišče zdravstvene ustanove, ki ponujajo to storitev in izve predviden termin izvedbe storitve glede na stopnjo nujnosti', 1, 0, '080 2445\r\n', 'https://www.youtube.com/watch?v=n-Nbxz8fEd0&feature=youtu.be', '', '', ''),
(25, 'prijava v evidenco brezposlenih', 'Če niste v delovnem razmerju, niste samozaposleni ali upokojeni, se ne izobražujete ali nimate statusa kmeta, pa želite aktivno iskati zaposlitev, vas praviloma uvrstimo v evidenco brezposelnih. Postopek lahko opravite elektronsko na portalu poiscidelo.si. Po registraciji in prijavi v slednjega, najprej v zgornjem desnem kotu izberite MOJI DOKUMENTI, na to pa med ponujenimi možnostmi še \"Evidenca iskalcev brezposelnih oseb\".', 0, 0, '080 20 55', '', '', 'https://www.poiscidelo.si/', ''),
(26, 'prijava v evidenco iskalcev zaposlitve', 'Niste brez zaposlitve, pa jo vseeno iščete? Prijavite se pri Zavodu in uvrstili vas bomo v evidenco iskalcev zaposlitve. Če pričakujete odpoved pogodbe o zaposlitvi iz poslovnega razloga ali razloga nesposobnosti, se v treh delovnih dneh po vročeni odpovedi nujno prijavite pri Zavodu.\r\nPostopek lahko opravite elektronsko na portalu poiscidelo.si. Po registraciji in prijavi v slednjega, najprej v zgornjem desnem kotu izberite MOJI DOKUMENTI, na to pa med ponujenimi možnostmi še \"Evidenca iskalcev zaposlitve\".', 0, 0, '080 20 55', '', '', 'https://www.poiscidelo.si/', ''),
(27, 'Subvencija za bivanje študentov', 'Najbolj ugodno je bivanje v študentskih domovih. Ker pa v nekaterih študijskih središčih (trenutno Ljubljana in Primorska) ni dovolj mest v študentskih domovih, država nudi tudi subvencijo za bivanje pri zasebniku.', 0, 1, '080 2002', '', 'http://www.studentska-org.si/studentski-kazipot/bivanje/studentski-domovi/', 'https://e-uprava.gov.si/podrocja/izobrazevanje-kultura/visoka-in-visja-sola/subvencija-za-bivanje-studentov.html', ''),
(28, 'Vloga za digitalno potrdilo', 'Digitalno potrdilo je računalniški zapis, ki vsebuje podatke o imetniku in njegov javni ključ, poleg tega pa še podatke o izdajatelju digitalnega potrdila ter obdobje veljavnosti digitalnega potrdila.', 0, 0, ' \r\n 				\r\n\r\n080 2002\r\n', '', 'http://evem.gov.si/info/zacenjam/digitalna-potrdila/', 'https://www.sigen-ca.si/prevzem-spletno.php', ''),
(29, 'Prevzem digitalnega potrdila', 'Prevzem dig. potrdila v brskalnikih Opera, Google Chrome in Microsoft Edge ni mogoč, saj zadnje različice brskalnika Opera ne omogočajo popolnega prevzema dig. potrdila, brskalnik Google Chrome pa ne uporablja svoje shrambe potrdil, temveč privzeto shrambo gostujočega operacijskega sistema, Microsoft Edge pa kot okrnjena različica brskalnika ne podpira shrambe potrdil.', 0, 0, '080 20 55', '', 'https://edavki.durs.si/OpenPortal/Pages/Registration/DigicertRequestIndividual.aspx', 'https://www.sigen-ca.si/prevzem-spletno.php', ''),
(30, 'Vloga za smsPASS (če že imate digitalno potrdilo)', NULL, 0, 1, NULL, '', '', '', ''),
(31, 'Vloga za smsPASS (če nimate digitalnega potrdila)', NULL, 0, 0, NULL, '', '', '', ''),
(32, 'Ustvarjanje uporabniškega računa SI-PASS', 'Če želite uporabljati storitve portala eUprave, se lahko na portal prijavljate na različne načine. Osnovni način pa je prijava z SI-PASS uporabniškim računom, ki je tudi pogoj, da kasneje lahko uporabite prijavo z digitalnim potrdilom ali mobilnim telefonom (smsPASS). Uporabniški račun si ustvarite tako, da v postopku uporabite svoj elektronski naslov, si izmislite geslo in potrdite prijavo preko poslanega e-sporočila.', 1, 0, NULL, 'https://www.youtube.com/watch?v=rOoO4KGJBPE', 'http://www.si-ca.si/dokumenti/Registracija-SI-PASS.pdf', 'https://sicas.gov.si/bl/login?entityID=SICAS_USER-PAGES', ''),
(33, 'Nastavitve uporabniškega računa SI-PASS', NULL, 0, 1, NULL, '', '', '', ''),
(34, 'Socialna pomoče za otroke', NULL, 0, 1, NULL, '', '', '', ''),
(35, 'Pravice upokojenskega statusa', NULL, 0, 1, '386 1 474 51 00', '', '', 'https://www.zpiz.si/cms/content/obrazcivlog', ''),
(36, 'Vloga za uveljavljanje posebne dohodninske olajšave za vzdrževane družinske člane', 'Pri izračunu dohodnine lahko uveljavljate tudi olajšavo za vzdrževane družinske člane ter s tem znižate svojo dohodninsko osnovo.', 1, 0, '01 369 3000', '', 'https://data.si/blog/2017/12/29/olajsava-za-vzdrzevane-druzinske-clane/', 'https://bit.ly/2kuEHXZ ', ''),
(37, 'Vloga za poročilo o doseženem dohodku iz naslova osebnega dopolnilnega dela', 'V primeru, da se ukvarjate z osebnim dopolnilnim delom, morate Finančni upravi oddati poročilo o doseženem dohodku znotraj tega dela. ', 0, 1, NULL, '', 'https://data.si/blog/2015/03/20/katere-obrazce-morajo-oddajati-izvajalci-dopolnilnega-dela/', 'https://bit.ly/2JcFHOn', ''),
(38, 'Znižano plačilo vrtca', NULL, 0, 0, NULL, '', '', '', ''),
(39, 'Prijava otroka v vrtec', NULL, 0, 0, NULL, '', '', '', ''),
(40, 'Socialna pomoč za otroke', NULL, 0, 0, NULL, '', '', '', '');

--
-- Indeksi zavrženih tabel
--

--
-- Indeksi tabele `kategorije`
--
ALTER TABLE `kategorije`
  ADD PRIMARY KEY (`idk`),
  ADD KEY `FK_vsebuje` (`idp`);

--
-- Indeksi tabele `paketi`
--
ALTER TABLE `paketi`
  ADD PRIMARY KEY (`idp`);

--
-- Indeksi tabele `prenosi`
--
ALTER TABLE `prenosi`
  ADD KEY `FK_ima` (`idt`);

--
-- Indeksi tabele `tematike`
--
ALTER TABLE `tematike`
  ADD PRIMARY KEY (`idt`);

--
-- AUTO_INCREMENT zavrženih tabel
--

--
-- AUTO_INCREMENT tabele `paketi`
--
ALTER TABLE `paketi`
  MODIFY `idp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT tabele `tematike`
--
ALTER TABLE `tematike`
  MODIFY `idt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
