-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 24, 2016 at 11:07 PM
-- Server version: 5.5.49-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `folkfiok`
--

-- --------------------------------------------------------

--
-- Table structure for table `betyarorak`
--

CREATE TABLE IF NOT EXISTS `betyarorak` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `betyarorak`
--

INSERT INTO `betyarorak` (`id`, `name`, `email`, `message`) VALUES
(1, 'Kiss Janos', 'jancsi@gmail.com', 'Hello. Szeretnek egy betyarorat.'),
(2, 'Kiss Janos', 'jancsi@gmail.com', 'Hello. Szeretnek egy betyarorat.'),
(3, 'SDFGDS', 'DSAFSDF', 'FDSAFSD'),
(4, 'sd', 'fsd', 'fdasf'),
(5, 'asdf', 'fds', 'fdsf'),
(6, 'fasdf', 'fsdaf', 'fsadf'),
(7, 'fasdf', 'fdas', 'fasdf'),
(8, 'Putz József', 'admin@folkfiok.hu', 'Jó napot kívánok!'),
(9, 'Putz József', 'admin@folkfiok.hu', 'FASDFASD'),
(10, 'Putz József', 'admin@folkfiok.hu', 'afdsfa'),
(11, 'Putz József', 'admin@folkfiok.hu', 'qqqq'),
(12, 'qqq', 'admin@folkfiok.hu', 'eewrwer'),
(13, 'wer', 'muni@quiz.com', 'fsadfsadffdsa'),
(14, 'wqer', 'admin@folkfiok.hu', 'fsadfasd'),
(15, 'Putz József', 'admin@folkfiok.hu', 'dsfafasdffds'),
(16, 'Putz József', 'admin@folkfiok.hu', 'fasdfasdfsa'),
(17, 'Putz József', 'admin@folkfiok.hu', 'werwerwqerq'),
(18, 'fsdafsd', 'muni@quiz.com', 'fdsafsadfsdfa'),
(19, 'Putz József', 'admin@folkfiok.hu', 'uyuijkjkh'),
(20, 'Putz József', 'admin@folkfiok.hu', 'iuiyui'),
(21, 'Putz József', 'admin@folkfiok.hu', 'oiuikjhjkh'),
(22, 'fsdafsd', 'admin@folkfiok.hu', 'kjhkjh'),
(23, 'fsdafsd', 'admin@folkfiok.hu', 'iggjjghjgjh'),
(24, 'hjkhkj', 'admin@folkfiok.hu', 'hjkhkjh'),
(25, 'jklj', 'admin@folkfiok.hu', 'kljlkjlk'),
(26, 'fdas', 'fds@fdas', 'fdsa'),
(27, 'Putz József', 'admin@folkfiok.hu', 'fsadfadsf'),
(28, 'Putz József', 'admin@folkfiok.hu', 'fasdf'),
(29, 'fsda', 'fds@fdas', 'fsadf'),
(30, 'Putz József', 'fds@fdas', 'sdafsd'),
(31, 'fsdafsd', 'fds@fdas', 'dsfadf'),
(32, 'Putz József', 'admin@folkfiok.hu', 'kjhjkh'),
(33, 'Putz József', 'fds@fdas', 'hjgjhgh'),
(34, 'fsdafsd', 'fds@fdas', 'jhkjh'),
(35, 'Putz József', 'admin@folkfiok.hu', 'jjhgjhgjh'),
(36, 'fsdafsd', 'fds@fdas', 'nnhnvb'),
(37, 'fsd', 'fds@fdas', 'fsdfsda'),
(38, 'Putz József', 'fds@fdas', 'fdadsf'),
(39, 'Putz József', 'fds@fdas', 'fsadfsa'),
(40, 'Putz József', 'fds@fdas', 'FDSFSDA'),
(41, 'Putz József', 'admin@folkfiok.hu', 'Jó napot kívánok! Szeretnék egy betyárórát igényelni.'),
(42, 'Putz József', 'admin@folkfiok.hu', 'Jó napot kívánok! Szeretnék egy betyárórát igényelni.'),
(43, 'Putz József', 'admin@folkfiok.hu', 'Jó napot kívánok! Szeretnék egy betyárórát igényelni.'),
(44, 'kfjdaslkj', 'fds@fdas', 'fasdfdfas'),
(45, 'Putz József', 'admin@folkfiok.hu', 'Jó napot kívánok! Szeretnék egy betyárórát igényelni.'),
(46, 'Putz József', 'admin@folkfiok.hu', 'Jó napot kívánok! Szeretnék egy betyárórát igényelni.'),
(47, 'Putz József', 'admin@folkfiok.hu', 'Jó napot kívánok! Szeretnék egy betyárórát igényelni.'),
(48, 'Putz József', 'admin@folkfiok.hu', 'Jó napot kívánok! Szeretnék egy betyárórát igényelni.'),
(49, 'Putz József', 'admin@folkfiok.hu', 'Jó napot kívánok! Szeretnék egy betyárórát igényelni.'),
(50, 'Putz József', 'admin@folkfiok.hu', 'Jó napot kívánok! Szeretnék egy betyárórát igényelni.'),
(51, 'Putz József', 'admin@folkfiok.hu', 'Jó napot kívánok! Szeretnék egy betyárórát igényelni.');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` varchar(50) NOT NULL,
  `display_order` int(11) NOT NULL,
  `author` varchar(30) NOT NULL,
  `short_description` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `preview_image_count` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `data1` text NOT NULL,
  `data2` text NOT NULL,
  `other_content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `display_order`, `author`, `short_description`, `price`, `preview_image_count`, `title`, `description`, `data1`, `data2`, `other_content`) VALUES
('egy-tucat-bakonyi-betyarmese', 1, 'Csatlós Melinda', 'A le&shy;gen&shy;dás ba&shy;ko&shy;nyi be&shy;tyá&shy;rok a&shy;lak&shy;ja&shy;i (Sob&shy;ri Jós&shy;ka, Mil&shy;fajt Fer&shy;kó, Sa&shy;va&shy;nyú Jós&shy;ka, Mó&shy;gor Jan&shy;csi, La&shy;kat Mis&shy;ka&hellip;) hí&shy;res-ne&shy;ves cse&shy;le&shy;ke&shy;de&shy;te&shy;i, a ré&shy;gi pa&shy;raszt&shy;vi&shy;lág be&shy;tyár&shy;sze&shy;re&shy;te&shy;te és min&shy;den&shy;nap&shy;ja&shy;ik leg&shy;jel&shy;lem&shy;zőbb e&shy;se&shy;mé&shy;nye&shy;i e&shy;le&shy;ve&shy;ned&shy;nek fel e&shy;zek&shy;ben a tör&shy;té&shy;ne&shy;tek&shy;ben.', 1800, 7, 'Egy tucat bakonyi betyármese', '<p>A legendás bakonyi betyárok alakjai (Sobri Jóska, Milfajt Ferkó, Savanyú Jóska, Mógor Jancsi, Lakat Miska...) híres-neves cselekedetei, a régi parasztvilág betyárszeretete és mindennapjaik legjellemzőbb eseményei elevenednek fel ezekben a történetekben. A gyerekrajzokkal illusztrált mesék, és a könyv elsődleges célja, hogy a mai modern világban egy általános képet adjon a gyerekeknek a régi magyar paraszt és betyárvilágról és annak pozitívumait megvilágítva, értéket közvetítsen számukra. A modern mesékkel ellentétben, a betyártörténetekben nincsenek kitalált vagy természetfeletti szereplők, ezekben mindenki ízig-vérig valóságos, létező ember. (Két kézzel, két lábbal és egy fejjel..)  </p>\r\n                        <p>Olvasás közben itt-ott találkozhatunk régi vagy tájjelegű kifejezésekkel, vagy olyan szavakkal, amelyek jelentése mára már feledésbe merült, és nem alkotóelemei mindennapi szókészletünknek. Ezért a gyerekek számára mindenképpen új ismeretanyagot nyújt. A mesékből azt is megtudhatjuk, hogy vajon a betyárok ma is köztünk élnek-e... </p>        ', '<table class="table-book-data">\r\n                    <tr><td class="data-label">Szerző:</td> <td>Csatlós Melinda</td></tr>            \r\n                    <tr><td class="data-label">Kiadás&nbsp;éve:</td> <td>2012</td></tr>\r\n                    <tr><td class="data-label">Oldalszám:</td> <td>51</td></tr>\r\n                    <tr><td class="data-label">ISBN:</td> <td>978-963-08-4131-3</td></tr>\r\n                    <tr><td class="data-label">Méret:</td> <td>15&nbsp;x&nbsp;21cm</td></tr>\r\n                </table>', '<table class="table-book-data">\r\n                    <tr><td class="data-label">Lektrok:</td> <td>Dr.&nbsp;Molnár Zsolt<br>Molnárné Czeglédi Cecília</td></tr>\r\n                    <tr><td class="data-label">Borító:</td> <td>keménytáblás</td></tr>             \r\n                    <tr><td class="data-label">Borítóterv:</td> <td>Nagy Balázs</td></tr>\r\n                    <tr><td class="data-label">Borítórajz:</td> <td>Hungler Réka</td></tr>\r\n                </table>', '<h2>A szerző ajánlója</h2>\r\n        <p>&#8222;Ez a könyv többek közt azért született, mert úgy gondoltam, hogy a mai világban a gyerekek többnyire rossz meséken nőnek fel. Mesére szükségük van, méghozzá olyanra, melyből tanulnak, melybe nem az agresszivitás és a durvaság a fő motívum. A betyárvilág nemzeti múltunk szerves része, s mind idáig elvétve találkozhattunk csupán egy-egy betyármesével. Ezt az űrt próbáltam a könyvemmel betölteni, s a következő nemzedék számára egy kis ízelítőt adni a régi parasztvilág történeteiből. A néhol felbukkanó tájjelegű szavak és régies kifejezések pedig a szókincsgyarapítás céljából kerültek bele a történetekbe, mivel ez a témakör a legtöbbeknek eddig kimaradt az életéből.</p>\r\n        <p>Értékes és jó mesének tartom azokat az alkotásokat, amikben van tanulság és értéket képviselő motívum. Remélem ezzel a könyvvel még inkább meg tudom kedveltetni a gyerekekkel a meséket, s nem titkolt szándékom a nemzeti múltra és annak értékeire való figyelemfelhívás sem. Remélem ezzel a kötettel valóban a jó mesék táborát gyarapítom...&#8221;</p>\r\n        <p class="text-right"><a href="./kapcsolat" class="normal-link">Csatlós Melinda</a></p>     \r\n<br>\r\n\r\n        <h2>Bódai-Sóos Judit írónő ajánlója</h2>\r\n        <p><a href="./kapcsolat" class="normal-link">Csatlós Melinda</a> könyve, amint azt a cím is mutatja, tizenkét betyártörténetet fog egy csokorba. S tényleg mesék ezek? A szerző a történeteken keresztül olyan hitelesen mutatja be a hajdani betyárvilágot, hogy akár valóban megtörtént események is lehetnek. Sobri Jóska, Milfajt Ferkó, Savanyú Jóska, Mógor Jancsi, Lakat Miska mindenesetre történelmünk létező figurái, számtalan legenda fűződik nevükhöz, s most e könyv ezt a palettát színesíti, gazdagítja, és még tovább élteti.\r\n            Az utolsó történet pedig igazi csattanó, mely átvezet a hajdani betyárvilágból a mába, a betyárbecsület vezérfonalát használva.\r\n            A könyv nyelvezete ízes, mégsem mondható régiesnek, vagy nehézkesnek. Ráadásul balladai hangulatot keltenek a sorokban megbúvó rímek, gördülékennyé, élvezetessé teszik az olvasást, anélkül, hogy verselést erőltetnének.\r\n            A történetekhez illeszkedő gyermekrajzok tovább emelik a könyv értékét, és híven bizonyítják, hogy nem csak a betyárok tudtak egykor jó csapatmunkát végezni.\r\n        </p>\r\n        <p>Szívből ajánlom ezeket a betyármeséket kicsiknek, nagyoknak egyaránt, akár a Bakonyban élnek, akár nem, mert mindenki mosolyogva tanulhat belőlük.</p>\r\n'),
('tobb-tucat-feladat-bakonyi-betyarmesekhez', 2, 'Csatlós Melinda', 'Talán a borító láttán és a cím hallatán sokan egyből az Egy tucat bakonyi betyármesékhez kötik ezt a munkafüzetet.  \r\n<br>\r\nA hasonlóság nem véletlen, hiszen közkívánatra pont ehhez a kötethez készült. Célunk az volt a munkafüzet elkészítésével, hogy elmélyítse az olvasottakat, fejlessze a szövegértési készséget, valamint, hogy plusz néprajzi információkkal szolgáljon az érdeklődőknek.', 700, 0, 'Több tucat feladat bakonyi betyármesékhez (munkafüzet)', '<p>\r\nTalán a borító láttán és a cím hallatán sokan egyből az Egy tucat bakonyi betyármesékhez kötik ezt a munkafüzetet.  \r\n</p>\r\n<p>\r\nA hasonlóság nem véletlen, hiszen közkívánatra pont ehhez a kötethez készült. Célunk az volt a munkafüzet elkészítésével, hogy elmélyítse az olvasottakat, fejlessze a szövegértési készséget, valamint, hogy plusz néprajzi információkkal szolgáljon az érdeklődőknek.\r\n</p>', '<table class="table-book-data">\r\n                    <tr><td class="data-label">Szerző:</td> <td>Csatlós Melinda</td></tr>            \r\n                    <tr><td class="data-label">Kiadás&nbsp;éve:</td> <td>2016</td></tr>\r\n                    <tr><td class="data-label">Oldalszám:</td> <td>47</td></tr>\r\n                    <tr><td class="data-label">ISBN:</td> <td>978-963-08-4131-3</td></tr>\r\n                    <tr><td class="data-label">Méret:</td> <td>15&nbsp;x&nbsp;21cm</td></tr>\r\n                </table>', '<table class="table-book-data">\r\n                    \r\n                    <tr><td class="data-label">Borító:</td> <td>keménytáblás</td></tr>             \r\n                    <tr><td class="data-label">Borítóterv:</td> <td>Putz József</td></tr>\r\n                    <tr><td class="data-label">Borítórajz:</td> <td>Hungler Réka</td></tr>\r\n                </table>', '<p>A munkafüzet feladatai ötvözik a klasszikus szövegértési feladatokat, a modern kooperatív tanulási technikákkal. A feladatok megoldásához több kompetencia-terület használatára van szükség, így nem csupán a magyar nyelv és irodalom tantárgyhoz ajánljuk. \r\n</p>'),
('tortenetek-a-falubol', 3, 'Csatlós Melinda', 'A 12 elbeszélést tartalmazó kötet, 127 oldalon keresztül repít vissza minket a 19. századba, s így betekintést nyerhetünk az akkori emberek életébe. Azonban nem csak időbeli utazásról van szó, hiszen a történetek felölelik a teljes magyar nyelvterületet.', 1500, 6, 'Történetek a faluból', '<p>A 12 elbeszélést tartalmazó kötet, 127 oldalon keresztül repít vissza minket a 19. századba, s így betekintést nyerhetünk az akkori emberek életébe. Azonban nem csak időbeli utazásról van szó, hiszen a történetek felölelik a teljes magyar nyelvterületet. Olvasás közben a Dunántúltól egészen  Moldváig szárnyalunk, közben pedig úgy érezhetjük, mintha éppen velünk történnének a dolgok itt, a 21. században. Nem hiába, hiszen az élet nagy kérdései ugyanazok maradtak...</p>\r\n', '<table class="table-book-data">\r\n                        <tr><td class="data-label">Szerző:</td> <td>Csatlós Melinda</td></tr>                        \r\n                        <tr><td class="data-label">Kiadás&nbsp;éve:</td> <td>2013</td></tr>\r\n                        <tr><td class="data-label">Oldalszám:</td> <td>127</td></tr>\r\n                        <tr><td class="data-label">ISBN:</td> <td>978-963-08-7153-2</td></tr>\r\n                        <tr><td class="data-label">Méret:</td> <td>15&nbsp;x&nbsp;21cm</td></tr> \r\n                        \r\n                    </table>', '<table class="table-book-data">\r\n                    <tr><td class="data-label">Anyanyelvi lektorok:</td> <td>Dr.&nbsp;Molnár Zsolt<br>Molnárné Czeglédi Cecília</td></tr> \r\n                    <tr><td class="data-label">Néprajzi lektor:</td> <td>Lendvai Tibor</td></tr>           \r\n                    <tr><td class="data-label">Borító:</td> <td>puhatáblás</td></tr>             \r\n                    <tr><td class="data-label">Borítóterv:</td> <td>Nagy Balázs</td></tr>\r\n                </table>', 'A kötet elbeszéléseinek helyszínei (piros foltok a térképen) felöleik a teljes magyar nyelvterületet.\r\n\r\n        <div class="text-center">\r\n            <a href="img/books/terkep-tortenetek-helyszinei.jpg" data-lightbox="terkep">\r\n                <img class="" src="img/books/terkep-tortenetek-helyszinei.jpg" alt="Történetek a faluból - a könyv helyszínei">\r\n            </a>\r\n        </div>');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(50) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `ship_address` varchar(2000) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=51 ;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `location` varchar(50) NOT NULL,
  `short_description` text NOT NULL,
  `details` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `date`, `location`, `short_description`, `details`) VALUES
('betyarmesek-a-szinpadon', 'Betyármesék a színpadon', '2015-02-26 00:00:00', 'Székesfehérvár', '2015 februárjában, három évvel az Egy tucat bakonyi betyármesék megjelenését követően, a történetek életre keltek a székesfehérvári Vörösmarty Színház színpadán. Az ifjúsági bérletben helyet kapó előadás egy szindarabba tömörítette  12 történetet, melyet színészek, népzenszek, néptáncok keltettek életre a nézők nagy örömére.', ''),
('betyarmesek-nepzene-neptanc', 'Betyármesék, népzene, néptánc', '2013-04-29 00:00:00', 'Budapest', 'Egy szép tavaszi napon a budapesti Hermann Ottó Általános Iskola diákjai Molnár Boglárka tanárnő szervezésében elevenítették meg a színpadon az Egy tucat bakonyi betyármese történeteit népzene és néptánc formájában. Az előadásban közreműködtek a Liszt Ferenc Zeneművészeti Egyetem népzenészei és Csatlós Melinda szerző.', ''),
('interaktiv-betyarora-balatoncsicson', 'Interaktív betyáróra Balatoncsicsón', '2015-12-05 00:00:00', 'Balatoncsicsó, Községháza', 'Csatlós Melinda „Egy tucat bakonyi betyármese” című könyve 2012-ben jelent meg. Ezt ajánlotta a résztvevőknek bemutatásra, sok beszélgetéssel, saját népzenei kísérettel, illetve rövid filmbemutatókkal. ', 'A régi parasztvilág betyárszeretete és mindennapjaik legjellemzőbb eseményei elevenedtek fel ezekben a történetekben. A legendás bakonyi betyárok alakjai (Sobri Jóska, Milfajt Ferkó, Savanyú Jóska, Mógor Jancsi, Lakat Miska...) híres-neves cselekedeteiből kaptak ízelítőt a gyermekek. A könyvbemutatón egy rövid játékra is sor került, melyben minden gyermek örömmel vett részt. A program nagyon sikeres volt - a mai modern világban - egy általános képet adott a gyerekeknek a régi magyar paraszt és betyárvilágról, annak pozitívumait megvilágítva, értékeket közvetítve. A program a Könyvtárellátási Szolgáltató Rendszer (KSZR) keretében valósult meg.'),
('interaktiv-betyarora-csopakon', 'Interaktív betyáróra Csopakon', '2014-10-17 00:00:00', 'Csopak, Református Általános Iskola', 'Október 17-én meglepetés várta a csopaki általános iskola alsósait. Csatlós Melinda egy interaktív betyáróráján vehettek részt, ahol betekintést nyerhettek őseink múltjába és a régi bakonyi betyárok nem mindennapi életébe. A foglalkozáson előkerült a népi furulya is mely egykor a betyárok kedvelt hangszere is volt. A tanórát egy játékos feladat zárta, mely természetesen a hallott érdekességekhez kapcsolódott. ', ''),
('interaktiv-betyarorak-gyorben', 'Interaktív betyárórák Győrben', '2015-09-29 00:00:00', 'Győr', 'Szeptember 29-én és október 1-én az Öveges Kálmán Gyakorló Általános Iskola 6. osztályosai vettek részt egy népzenével, néprajzzal és játékkal tarkított órán. A mesék és mondák témaköréhez kapcsolódóan vettek részt a tanulók: A legendás bakonyi betyárok és örökségük című interaktív foglalkozáson.', ''),
('interaktiv-neprajzorak', 'Interaktív néprajzórák', '2015-12-05 00:00:00', 'Balatoncsicsó, Óbudavár, Ajkarendek', '2015 decemberében néprajzi hétvégéket tartottunk 3 Veszprém megyei településen. Az előadások alkalmával került sor Csatlós Melinda köteteinek bemutatására és nem utolsó sorban a kicsiket megszólítva az interaktív betyárórák sem maradhattak el. Zenével, érdekességekkel és természetesen játékkal. ', ''),
('konyvbemutato-az-esti-kornel-kavehazban', 'Könyvbemutató Farkasgyepűn', '2013-10-04 00:00:00', 'Pápa, Esti Kornál Kávéház', 'Tavaly szeptemberben mutatta be első könyvét a fiatal, mosolygós lány, Csatlós Melinda, Egy tucat bakonyi betyármese címmel. Most megjelent könyvével utazni hívja az érdeklődőket, méghozzá a Dunántúltól egészen Moldováig szárnyalhat a múltban az olvasó.', '<p>A Történetek a faluból című, 12 elbeszélést tartalmazó kötetből a  19. századi magyar parasztvilág életébe nyerhetünk betekintést. Azonban nemcsak időbeli utazásról van szó, hiszen a történetek felölelik a teljes magyar nyelvterületet. A könyv olvasása közben úgy érezhetjük, hogy ma játszódik, hiszen az élet nagy kérdései ugyanazok maradtak – ajánlja Melinda. - Egészen kicsi korom óta szeretek olvasni, általános iskolás koromban írtam első az versemet. Számomra jó érzés a gondolataimat papírra vetni, s ezeket évek után visszaolvasni. Nagyon szeretem a magyar írókat, főleg Fekete Istvánt, Mikszáth Kálmánt és Móricz Zsigmondot. Úgy érzem, hozzám Mikszáth áll közelebb, mert egyszerű, humoros ember volt. \r\n</p>\r\n<p>\r\nA könyvben található írások nagy része kitalált történet a 19-20. századból, néprajzi vonásokkal. A kötetet dr. Molnár Zsolt és Molnárné Czeglédi Cecília lektorálta, a néprajzi lektor Lendvai Tibor volt. A borítót Nagy Balázs készítette.\r\n</p>\r\n<p> \r\nA könyvet péntek este mutatta be Márta Attila Kazinczy-emlékérmes művész és a szerző az Esti Kornél Kávéházban. A bemutatón Hujber Ádám működött közre. A 22 éves bakonyjákói Csatlós Melinda az általános iskola után a veszprémi Dohnányi Ernő Zeneművészeti Szakközépiskolában tanult klasszikus klarinétot, és itt kezdett érdeklődni a magyar népzene iránt. Később a Hermann László Zeneművészeti Szakközépiskola népzene szakára járt és lehetősége nyílt komolyabban megismerkedni a néprajzzal, népzenével. Jelenleg a Nyugat-magyarországi Egyetem ének-zene tanító szakos hallgatója. \r\n</p>\r\n<p>\r\nMelinda a könyvbemutató kapcsán elárulta, nem titkolt szándéka, hogy az írást nem fejezi be, legközelebbi munkájában a szülőfalujáról olvashatunk. </p>'),
('konyvbemutato-farkasgyepun', 'Könyvbemutató Farkasgyepűn', '2013-08-29 00:00:00', 'Farkasgyepű', '2013 augusztus 29-én egy bakonyi településen, Farkasgyepűn került bemutatásra Csatlós Melinda két kötete.  A bemutatóra a helyi könyvtár szervezésében került sor. A szép számú helyi lakosság örömmel fogadta az előadót, s a régi parasztvilág eseményei, körülményei, főképp az idősebbeknek nosztalgikus élményt nyújtott.  A bakonyi betyárok témaköre pedig a legjobb helyen került elő, hiszen ezen falu és környéke, a hatalmas ősbükkös is kedvelt búvóhelyük volt.', ''),
('konyvbemutato-nemetbanyan', 'Könyvbemutató Németbányán', '2012-07-21 00:00:00', 'Németbánya', '<strong>Bakonyjákó.</strong> A huszonegy éves hölgyet eddig tehetséges zenészként ismertük.  \r\nTestvéreivel együtt számtalan fellépésén tapsolhatott a közönség. Csatlós  \r\nMelinda a Nyugat-Magyarországi Egyetem hallgatója, a geo-informatikai kar  \r\nföldmérője. És nemrég egy tucat bakonyi betyármesét írt. A legendás Sobri Jóska, Milfajt Ferkó, Patkó Bandi, Savanyú Jóska, Mógor Jancsi, Lakat Miska alakja elevenedik meg a lapokon, a könyv ízes nyelvezetét gyönyörűség olvasni. De hol találkozik, találkozik-e egyáltalán a földmérés és az irodalom? Erről faggattam otthonában Melindát.', '<p>- Mindig is érdekelt a múlt, a történelem. Amikor Székesfehérváron népzenét tanultam, találkoztam a néprajzzal. Ezzel olyan világ tárult elém, amiről úgy gondoltam, nemcsak érdemes, de kell is foglalkozni. Régóta próbálkoztam írással, és ez a két dolog akkor ért így össze. Megerősítést is kaptam: a tavalyi Napló meseíró pályázat eredményeként bekerültem a Mesék könyvébe, ez is nagy lökést adott - tudom meg a mesék írójától. Mint ahogy azt is, hogy a betyártörténetek születését természetesen kutatómunka előzte meg, hiszen ez elengedhetetlen volt ahhoz, hogy a történetek hitelesek legyenek. Ezért aztán mese is, valóság is, illetve akár úgy is történhetett volna, ahogyan azt Melinda leírta. \r\n </p>\r\n  \r\n<p>\r\n- Nem szerepeltetek földöntúli dolgokat, az volt a célom, hogy a gyerekeknek új ismeretanyagot adjak, megismerjék a Bakony, a betyárok történetét és egy kicsit a nemzeti múltat is. Azt gondolom, a betyárok ma már kihalófélben lévő értékeket képviseltek, márpedig, például a betyárbecsület ma is fontos. A betyárok és kultúrájuk hungarikum, a múltban többször is előbukkannak, részei a magyar történelemnek. A témát természetesen egyrészt maga a Bakony szolgáltatta, aztán - mivel már félig meddig németbányai vagyok - a Bakonyi Betyárok Nemzeti Egylete tagjaival való barátság szolgált ihlető forrásként, másrészt maga a faluközösség. Hogy miért éppen tizenkét történet született? A tíz túl kerek, a három és a hét meseszámok, a tucat viszont még jól is hangzik - mosolyog Melinda. \r\n </p>\r\n  \r\n<p>\r\nAz első mesét, ami egyébként a könyvben is első helyen van, tavaly decemberben írta. Akkor még nem gondolta, hogy könyv lesz belőle. Aztán megtetszett a téma, és jöttek a mesék. Egyet-egyet három óra alatt rakott össze és bár prózában íródtak, a belső rímek, a mese ritmusa sokat segített az alkotásban. A tizenkettedik történet áprilisban született meg. Akkorra már összeállt a könyv gondolata is. \r\n </p>\r\n  \r\n<p>\r\n- Meghirdettem egy gyerekeknek szóló rajzpályázatot, és aki szeretett volna rajzolni, annak küldtem egy mesét. Azt figyeltem meg, hogy ahol élnek a betyárhagyományok, ott a gyerekeknek egészen konkrét elképzeléseik vannak ezzel a világgal kapcsolatban. Meglepő, hogy kicsi gyerekektől nagyon jó alkotásokat kaptam. Aztán összeválogattam a kapott illusztrációkat. A szerkesztés másfél hónapot vett igénybe, addigra már kiadót, nyomdát is találtam Miskolcon. Július elejére már itt voltak a kész könyvek, tehát nem volt akadálya annak, hogy július 21-én, a Németbányai Napokon bemutassam a közönségnek a kötetet. A fogadtatás remek volt, annyira tetszik az olvasóknak, hogy már elkészült az utánnyomás. Ismerősök mondják, hogy sokan esti meseként olvassák a gyerekeknek. Többen sürgetnek is, hogy kevés ez a tizenkét mese, írjam a folytatást. Ami ebben jó, az az, hogy a kicsik most megkapják meseként, és később jó élményként bukkanhat elő újra a betyárvilág az életükben. Elindíthat tehát egy néphagyományok, népművészet iránti érdeklődést - mondja a fiatal hölgy, és nem találok hibát az érvelésben. \r\n </p>\r\n  \r\n<p>\r\n- Hogy mitől jó egy mese? Hogy jó-e, azt a gyerekek, illetve az olvasók döntik el, hiszen ezek felnőtteknek is szólnak. Hogy mitől működik? Talán attól, hogy mennyire lehet vele azonosulni, az olvasó mennyire érzi benne otthon magát. Egy rossz mesét nem tud fejben összerakni, nem állnak össze a képek. Mindenképpen szeretnék folytatást, bár ha magától nem jön, akkor nincs értelme erőltetni. Ötlet van, de ez egy hosszú folyamat, nem mese lesz, de komoly előzményeket igényel - mondta el a közeljövő terveit Melinda. \r\n </p>\r\n  \r\n<p>\r\nA könyv kiadását erkölcsileg nagyon sokan támogatták, íróját bíztatták. Az anyagiakat - mivel magánkiadásban jelent meg, így a jogokkal az író rendelkezik - az ösztöndíjából, és a régebbi zenész kereseteiből rakta össze, és természetesen a szülei is mindenben támogatták. Búcsúzóul még megtudom, hogy Melinda tanulmányait a mese, a gyerekek, az irodalom előtérbe kerülése miatt levelezőként folytatja. De éppen e hármasnak köszönhetően úgy döntött, hogy szeptembertől a tanítói szakot is felveszi. </p>'),
('konyvbemutato-papan', 'Könyvbemutató Pápán', '2012-09-21 00:00:00', 'Pápa', 'A legendás bakonyi betyárok alakjai, Sobri Jóska, Milfajt Ferkó, Savanyú Jóska, Mógor Jancsi, Lakat Miska híres-neves cselekedetei, a régi parasztvilág betyárszeretete, a betyárbecsület és mindennapjaik legjellemzőbb eseményei, az idilli betyárvilág elevenedik meg az ifjú tehetség, Csatlós Melinda: Egy tucatnyi bakonyi betyármese című könyvében. ', '<p>Csatlós Melinda 21 éves bakonyjákói lakos. Az általános iskola után a veszprémi Dohnányi Ernő Zeneművészeti Szakközépiskolában tanult klasszikus klarinétot, és itt kezdett érdeklődni a magyar népzene iránt. Később a Hermann László Zeneművészeti Szakközépiskola népzene szakára járt, ahol népi klarinétot tanult és lehetősége nyílt komolyabban megismerkedni a néprajzzal, népzenével. Jelenleg a Nyugat-Magyarországi Egyetem tanítónő képzős hallgatója. Melinda érdeklődésünkre elmondta, már egészen kisgyermek kora óta érdeklődik a betyárvilág és a néprajz iránt.  \r\n </p>\r\n\r\n<p>- Egy éve kezdett komolyabban érdekelni a bakonyi betyárság, s azóta kutakodom utánuk. Úgy éreztem, hogy a legkisebb korosztálynak is meg kell ismerkednie a betyárokkal, s az ő életükkel, hiszen a betyárok olyan értékeket képviseltek, amelyek ma már kihalófélben vannak, ezért írtam egy mesekönyvet. A bakonyiak a legismertebbek az alföldi betyárok mellett. Véleményem szerint a betyár kultúra ismét reneszánszát éli, hiszen egyre több helyen alakulnak betyár- és hagyományőrző egyesületek.  \r\n </p>\r\n\r\n<p>A betyárvilágban szerinte a leglényegesebb erény a betyárbecsület volt, ami ma már sajnos kihaló félben van.  \r\nA könyv, ahogy címében is olvashatjuk egy tucat, azaz tizenkét betyártörténetet ír le. A gyerekrajzokkal illusztrált mesék, és a könyv elsődleges célja, hogy a mai modern világban egy általános képet adjon a gyerekeknek a betyárvilágról - vallja Csatlós Melinda. \r\n </p>\r\n\r\n<p>- Vannak a könyvben olyan részek, amelynek nyelvezete archaikus, ezért egy kicsit kiszíneztem, átalakítottam, a gyermekek számára érthetőbbé tettem. A történetek konkrét személyekről szólnak. \r\nA belső illusztrációkat gyerekek készítették a szerző által meghirdetett rajzpályázaton, többek között a Szent István Római Katolikus Általános Iskola és a Gyurátz Ferenc Evangélikus Általános Iskola tanulói. A borítót Nagy Balázs tervezte, a rajzot Hungler Réka készítette hozzá. \r\n </p>\r\n\r\n<p>A könyvbemutatón Váminé Molnár Emma könyvtáros köszöntötte a szép számban megjelenteket. A mesekönyvből részletet Narancsik János mondott. \r\n </p>\r\n\r\n<p>A könyv megvásárolható az interneten, valamint a könyvesboltokban, a fiatal írónő pedig úgy fogalmazott, nem titkolt szándéka, hogy a könyvnek legyen folytatása.  \r\n </p>'),
('konyvbemutato-szentantalfan', 'Könyvbemutató Szentantalfán', '2015-12-21 00:00:00', 'Szentantalfa, Faluház', '2015. december 21-én Szentantalfán tartott  könyvbemutatót Csatlós Melinda írónő, aki a Tizenkét betyármese és a Történetek a faluból című művéről mesélt. ', 'A karácsonyt megelőző hétvégén is szép számű közönság fogadta Csatlós Melindát Szentantalfán. A Balaton parti település lakói egy néprajzi témájú előadáson vehettek részt, melynek központjában a novelláskötete karácsonhoz kapcsolódó egykori népszokásai, a régi parasztvilág élete és természetesen a bakonyi betyrok kalandjai álltak.'),
('meselo-erdo', 'Mesélő erdő ', '2013-05-17 00:00:00', 'Isaszeg', '&#8222;2013. május 17-én 14 órakor író-olvasó találkozó lesz Csatlós Melindával az Egy tucat bakonyi betyármese című mesekönyv írónőjével. A beszélgetés helyszíne: Emlékező Angyal - Katonapallag. Belépő díj: 1 db sárgarépa. Minden érdeklődőt szeretettel várnak a szervezők.&#8221;<br><br>\r\n- Így szólt a felhívás, mely már önmagában is érdekesen hangzott, melyről 2013 júniusában a helyi lap számolt be. \r\n', 'Missziónak tekintem azt, hogy minden egyes magyar gyerekhez eljusson a magyar népi kultúra, az ősök tisztelete és kitartásuknak példája, valamint az igazságért való küzdeni tudás. Hálás köszönet a meghívásért Karádi Zsuzsannának, a program támogatásáért pedig dr. Kardos Gábor alpolgármesternek – nyilatkozta lapunknakCsatlós Melinda, az Egy tucat bakonyi betyármese című könyv szerzője, akinek varázslatostörténete Mesélő erdő címmel elevenedhetett meg egy májusi napon az Emlékező Angyalnál. Majus 17-en a Damjanich-iskola 3. b osztalyos tanuloival, valamint nehany napkozis gyermekkel a honvedsiroknal jartunk, ahol Csatlós Melinda Egy tucat bakonyi betyarmese cimű konyve elevenedett meg. Izelitőt kaptunk a betyarok eleteből, szokasaibol, ami nagyon tetszett a gyerekeknek. Az interaktiv foglalkozason harom csapat merte ossze tudasat: betyarokat abrazolo puzzle-t raktak ki, es valaszoltak az ironő kerdeseire. A foglalkozas vegen megjelentek a betyarok is, akik lohaton erkeztek az erdőbe a gyerekek legnagyobb meglepetesere. A diákok boldogan etettek meg a lovakat a magukkal hozott sargarepaval. Új élményekkel gazdagodva jöttunk vissza az iskolába, ahol elmeselték élmenyeiket a többieknek. Köszönjük a szervezőknek – mondta \r\n\r\n  \r\n\r\nPalaga Sándorné '),
('orszagos-konyvtari-napok', 'Országos Könyvtári Napok', '2014-10-17 00:00:00', 'Balatonfüred', '2014. október 13-20. között zajlottak az Országos Könyvtári Napok eseményei, melynek keretében vendégünk volt október 17-én Csatlós Melinda, aki megismertette az érdeklődőket a bakonyi betyárokkal. ', 'A bakonyi kötődésű szerzõ saját gyűjtései alapján írta meg Egy tucat bakonyi betyármese című kötetét, mely színes történeteket tartalmaz a sokak által hősöknek tartott betyárokról. Vetítéses, néprajzi elemekkel tarkított előadása sok új ismerettel gazdagította a rendezvény résztvevőit.'),
('sobri-rajzpalyazat', 'Sobri-rajzpályázat', '2015-12-11 00:00:00', 'Győr', 'Az Egy tucat bakonyi betyármese című kötet sikerén felbuzdulva hírdettük meg a Sobri rajzpáláyzatot, határon innen és túl, melyre 3 és 18 év közti gyerekek, fiatalok alkotásait vártuk.', 'A téma elég tág volt: minden, ami a legendás életű betyárokhoz kapcsolódik. A technika szintén az alkotók fantáziájára volt bízva.  A rajzpáláyzatra rengeteg, szebbnél szebb alkotás érkezett. Nagy örömünkre szolgál, hogy a határainkon túli magyar iskolákból is szép számmal érkeztek alkotások.\r\n<br><br>\r\n<p>\r\n\r\n<a href="http://slides.com/csatlosmelinda/sobri-rajzpalyazat/fullscreen" class="normal-link" target="_blank"><strong>Rajzok megtekintése\r\n</strong></a>\r\n<br>\r\n<a href="http://slides.com/csatlosmelinda/sobri-rajzpalyazat/fullscreen" target="_blank"><img src="img/esemenyek/sobri-rajzpalyazat-rajzok.jpg" style="height: 250px; margin-top:10px;"></a>\r\n\r\n</p>'),
('zirci-betyarnapok', 'Zirci betyárnapok', '2014-08-09 00:00:00', 'Zirc', 'A zirci betyárnapok a bakonyi betyárszokások és életmód hagyományörző rendezvénye, melyet 2014-ben már  14. Alkalommal rendeztek meg. Idén  Csatlós Melinda dedikálta a bakonyi betyárokról szóló mesekonyvét, mely a gyermekirodalomban eddig szinte egyáltalán nem volt feldolgozott téma. A 2012-ben megjelent könyvén kívűl a 2013-ban megjelent, szintén néprajzi vonalat követőő elbeszéléskötete is megtalálható volt.', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(50) NOT NULL,
  `product_id` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `order_date` datetime NOT NULL,
  `pay_method` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=51 ;

-- --------------------------------------------------------

--
-- Table structure for table `order_states`
--

CREATE TABLE IF NOT EXISTS `order_states` (
  `state_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_states`
--

INSERT INTO `order_states` (`state_id`, `name`) VALUES
(0, 'ordered'),
(1, 'payed'),
(2, 'shipped');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
