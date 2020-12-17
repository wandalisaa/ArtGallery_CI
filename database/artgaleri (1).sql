-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2020 at 03:43 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artgaleri`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_galeri`
--

CREATE TABLE `m_galeri` (
  `id_galeri` int(11) NOT NULL,
  `nama_galeri` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `negara` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `desk_galeri` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_galeri`
--

INSERT INTO `m_galeri` (`id_galeri`, `nama_galeri`, `kota`, `negara`, `foto`, `desk_galeri`) VALUES
(1, 'Chrysler Museum of Art', 'Norfolk', 'Amerika Serikat', 'images/Chrysler_Museum_of_Art.png', 'The Chrysler Museum of Art is one of America’s most distinguished mid-sized art museums, with a nationally recognized collection of more than 30,000 objects, including one of the great glass collections in America. The core of the Chrysler’s collection co'),
(2, 'Lettl Collection', 'Augsburg', 'German', 'images/Lettl_Collection.png', 'Approx. 500 surreal paintings by the Augsburg artist Wolfgang Lettl (1919-2008) are the focus of this collection. The collection has been supported since 1992 by the Wolfgang Lettl Association for the Advancement of Surreal Art. It was the wish of Wolfgan'),
(3, 'Clyfford Still Museum', 'Denver', 'Amerika Serikat', 'images/Clyfford_Still_Museum.png', 'The Mission of the Clyfford Still Museum is to advance the understanding and appreciation of Clyfford Still\'s art and legacy through the presentation, research, interpretation, preservation, and stewardship of its unique collections.');

-- --------------------------------------------------------

--
-- Table structure for table `m_jenis`
--

CREATE TABLE `m_jenis` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(255) NOT NULL,
  `desk_jenis` text NOT NULL,
  `tahun_awal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_jenis`
--

INSERT INTO `m_jenis` (`id_jenis`, `nama_jenis`, `desk_jenis`, `tahun_awal`) VALUES
(1, 'Pop Art', 'International movement in painting, sculpture and printmaking. The term originated in the mid-1950s at the ICA, London, in the discussions held by the Independent Group concerning the artefacts of popular culture. This small group included the artists Ric', 1950),
(2, 'Street Art', 'Street art is unofficial and independent visual art created in public locations for public visibility. Street art is associated with the terms \"independent art\", \"post-graffiti\", \"neo-graffiti\", and guerrilla art, but is not public art. Common forms and m', 1970),
(3, 'Surrealism', 'International intellectual movement, which was centred mainly in Paris and occupied with the problems of thought and expression in all their forms. The Surrealists perceived a deep crisis in Western culture and responded with a revision of values at every', 1920),
(4, 'Abstract expressionism', 'Term applied to a movement in American painting that flourished in the 1940s and 1950s, sometimes referred to as the New York School or, very narrowly, as action planning, although it was first coined in relation to the work of Vasily Kandinsky in 1929. T', 1946),
(5, 'Barok', 'The principal European style in the visual arts in the 17th century and the first half of the 18th; generally considered to be characteristic of the period of Caravaggio, Rubens, Rembrandt, Giordano and Tiepolo in painting, Bernini in sculpture, and Borromini, Fischer von Erlach and Wren in architecture. Usage of the term is often extended to the whole period 1600–1750 without qualifying restrictions, or improperly to mean a florid and elaborate style in art, architecture, music or literature, of any date from late antiquity to the early 20th century.', 1600),
(6, 'Abad Renaisans', 'Term generally used for periods that hark back to the culture of Classical antiquity. Though it has applications elsewhere, it is most often used to refer to that era in Europe, beginning approximately in the 14th century, in which a new style in painting, sculpture and architecture was forged in succession to that of Gothic and in which, in a broader cultural sense, the transition from the Middle Ages to the modern age was made. This', 1300),
(7, 'Northern Renaissance', 'The adoption in northern Europe, mainly Germany and the Netherlands, of the artistic ideals of the Italian Renaissance. The prime mover was the German artist Albrecht Dürer (1471–1528) who travelled twice to Italy to discover the ‘secrets’ of the Italian masters, especially the mathematical principles of perspecitve and proportion. Dürer\'s own ideas were widely disseminated through his prints and his writings. Flemish artists who travelled to Italy and were strongly influenced by its art included Jan Gossaert and Jan van Scorel.', 1430),
(8, 'Ekspresionisme', 'International movement in art and architecture, which flourished between c. 1905 and c. 1920, especially in Germany. It also extended to literature, music, dance and theatre. The term was originally applied more widely to various avant-garde movements: for example it was adopted as an alternative to the use of ‘Post-Impressionism’ by Roger Fry in exhibitions in London in 1910 and 1912. It was also used contemporaneously in Scandinavia and Germany, being gradually confined to the specific groups of artists and architects to which it is now applied. Expressionism in the fine arts developed from the Symbolist and expressive trends in European art at the end of the 19th century. The period of ‘classical Expressionism’ began in 1905, with the foundation of the group Die Brucke, and ended c. 1920. Although in part an artistic reaction both to academic art and to Impressionism, the movement should be understood as a form of ‘new Humanism’, which sought to communicate man’s spiritual life. It reflected the deep intellectual unrest c. 1900, reflected in contemporary literary sources, about the destruction of the traditional relationship of trust between man and the world.', 1912),
(9, 'Pasca-impresionisme', 'Term applied to the reaction against impressionism led by Paul Cézanne, Paul Gauguin, Vincent van Gogh, and Georges Seurat. It can be roughly dated from 1886, the year of the last Impressionist exhibition, to c. 1905, when Fauvism appeared and the first moves towards Cubism were made. While it was predominantly a French movement, there were related developments in other countries, which often occurred somewhat later. Post-Impressionism can be loosely defined as a rejection of the Impressionists’ concern for the naturalistic depiction of light and colour in favour of an emphasis on abstract qualities or symbolic content. It therefore includes neo-impressionism, symbolism, Cloisonnism, synthetism, and the later work of some Impressionists. The term was coined in 1910 by the English critic and painter Roger Fry for an exhibition of late 19th-century French painting, drawing, and sculpture that he organized at the Grafton Galleries in London.', 1886);

-- --------------------------------------------------------

--
-- Table structure for table `m_media`
--

CREATE TABLE `m_media` (
  `id_media` int(11) NOT NULL,
  `nama_media` varchar(255) NOT NULL,
  `desk_media` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_media`
--

INSERT INTO `m_media` (`id_media`, `nama_media`, `desk_media`) VALUES
(1, 'Cat minyak', 'ethod of painting using pigments dispersed in oil. It is not known how oil painting was first developed, but in Western Europe there are indications of its use from at least the 12th century AD, and it was widely used from the Renaissance. This article discusses the characteristics and development of oil painting in Western'),
(2, 'Karton', 'Cardboard is a generic term for heavy-duty paper-based products having greater thickness and superior durability or other specific mechanical attributes to paper; such as foldability, rigidity and impact resistance. The construction can range from a thick sheet known as paperboard to corrugated fiberboard which'),
(3, 'Kayu', 'Material derived from the trunks, boughs and other hard parts of trees and shrubs and serving a wide range of artistic purposes. It has been used as a raw material for millennia, first to construct houses and make tools and weapons, and later to build temples, palaces and boats and to carve sculptures and furniture.'),
(5, 'Kertas', 'Random or felted sheet of isolated vegetable fibre produced by sieving the macerated vegetable fibre from a watery slurry. Certain criteria must be met for a substance to be called paper: most importantly, the fibre must be vegetable; it must be processed in some way to break the material into individual fibres; and the sheets must be formed by casting the macerated fibre–water mixture on a sieve, usually a screen that is dipped into the aqueous mixture and allows the excess water to drain away. Paper is the most common support for drawing, printing, prints, watercolour painting and writing; with parchment, it was also widely used for the medieval manuscript, and for the development, from the 15th century onwards, of the printed book.'),
(6, 'Newsprint', 'Newsprint is a low-cost, non-archival paper consisting mainly of wood pulp and most commonly used to print newspapers and other publications and advertising material. Invented in 1844 by Charles Fenerty of Nova Scotia, Canada, it usually has an off white cast and distinctive feel. It is designed for use in printing presses that employ a long web of paper rather than individual sheets of paper. Newsprint is favored by publishers and printers as it is relatively low cost, strong and can accept four-color printing at qualities that meet the needs of typical newspapers.');

-- --------------------------------------------------------

--
-- Table structure for table `m_seniman`
--

CREATE TABLE `m_seniman` (
  `id_seniman` int(11) NOT NULL,
  `nama_seniman` varchar(255) NOT NULL,
  `desk_seniman` text NOT NULL,
  `tanggal_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_seniman`
--

INSERT INTO `m_seniman` (`id_seniman`, `nama_seniman`, `desk_seniman`, `tanggal_lahir`) VALUES
(1, 'Idelle Weber', 'Idelle Lois Weber was an American artist most closely aligned with the Pop art and Photorealist movements.\r\n', '1932-03-12'),
(2, 'Wolfgang Lettl', 'Wolfgang Lettl was a surrealist painter who was born and who died in Augsburg, Germany.\r\nIn 1939, at the age of 20, Wolfgang joined the German Army and served as a communications officer in occupied Paris from 1940 to 1943, during which time he worked on ', '1919-12-18'),
(3, 'Clyfford Still ', 'Clyfford Still was an American painter, and one of the leading figures in the first generation of Abstract Expressionists, who developed a new, powerful approach to painting in the years immediately following World War II. Still has been credited with lay', '1974-06-04'),
(4, 'Pieter Bruegel Senior', 'Pieter Bruegel Senior adalah pelukis Renaissance Belanda atau Flem. Ia terkenal untuk karya pemandangan dan petani kecilnya. Ia dijuluki \'Petani Bruegel\' untuk memisahkannya dari anggota keluarga Brueghel lainnya. Namun ia merupakan yang paling terkenal di antaranya. Dari tahun 1559 ia menanggalkan huruf \'h\' dari namanya dan mulai menandatangani lukisannya dengan nama Bruegel.', '1993-07-07'),
(5, 'Daumier, Honore Victorien', 'Honore Victorien Daumier adalah salah satu pelukis terkenal berkebangsaan Prancis, lahir di Marseille 26 Februari tahun 1808 dan meninggal pada tanggal 10 Februari 1879 di Valmondais. Pada masanya, Daumier lebih dikenal sebgai karikaturis di majalah mingguan Caricature sejak 1823, yang mana majalah ini menentang kehidupan sosial politik saat itu, hingga tahun 1837 dilarang untuk diterbitkan. Hal ini membuatnya harus pindah ke harian Charivari yang membahas tentang adat kebiasaan. Karikatur-karikatur buatannya telah banyak dinikmati oleh masyarakat melalui dua media tersebut, meskipun karya-karya tersebut mengandung sindiran tajam terhadap keadaan waktu itu. Namun di sisi yang lain, nilai artistik serta estetiknya mampu menandingi imajinasi yang terdapat di dalamnya. Awal abad ke-20, barulah karikatur-karikatur milik Daumier mendapat perhatian berupa penilaian dan penghargaan yang kemudian mendapat tempat yang sejajar dengan Michelangelo, walaupun sebelumnya dia pernah dipenjara karena memihak golongan Republiken. Dia merupakan pelukis yang memperkenalkan tehnik-tehnik lukisan bertemakan impresionisme dalam seni modern.', '1976-02-26');

-- --------------------------------------------------------

--
-- Table structure for table `m_user`
--

CREATE TABLE `m_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_user`
--

INSERT INTO `m_user` (`id_user`, `username`, `email`, `password`, `level`) VALUES
(1, 'wandades', 'wanda@mantappu.com', 'wanda', 0),
(2, 'admin', 'admin@artgallery.com', 'admin', 1),
(6, 'usertest', 'user@user.com', 'user', 0),
(7, 'wnd', 'wnd@gmail.com', 'wnd', 0),
(8, 'wanda', 'wnd@gmail.com', 'wanda', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tr_art`
--

CREATE TABLE `tr_art` (
  `id_art` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `judul_art` varchar(255) NOT NULL,
  `desk_art` text NOT NULL,
  `tahun_dibuat` int(11) NOT NULL,
  `dimensi` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tempat_dibuat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tr_art`
--

INSERT INTO `tr_art` (`id_art`, `id_artikel`, `judul_art`, `desk_art`, `tahun_dibuat`, `dimensi`, `gambar`, `tempat_dibuat`) VALUES
(1, 1, '13 Attempts to Become a Rooster - 13', 'The series ', 1978, 'w35 x h32.5 cm (without frame)', 'images/13_Attempts_to_Become_a_Rooster_-_13.jpg', 'Augsburg'),
(2, 1, '13 Attempts to Become a Rooster - 12', 'The series ', 1978, 'w35 x h32,5 cm (without frame)', 'images/13_Attempts_to_Become_a_Rooster_-_12.jpg', 'Augsburg'),
(3, 2, 'PH-272', 'Each color theme in this exhibition includes at least one pre-abstract expressionist period work (before around 1945) as well as a “late-period” work (made after his move to Maryland in 1961), allowing for a fuller picture of the prominent role color play', 1950, '223 x 267 cm', 'images/PH-272.jpg', 'New York'),
(4, 2, 'PH-18', 'Each color theme in this exhibition includes at least one pre-abstract expressionist period work (before around 1945) as well as a “late-period” work (made after his move to Maryland in 1961), allowing for a fuller picture of the prominent role color played over Still\'s five-decade career. Still’s use of color also represents the ways he influenced, and was in dialogue with artists such as Mark Rothko and Barnett Newman, his closest allies in the late 1940s.', 1955, 'h108 x w92 in', 'images/PH-18.jpg', 'New York'),
(5, 4, 'The Census at Bethlehem', 'In the foreground, a man carrying a carpenter’s saw is followed by a women wrapped in a big blue coat, sitting on a donkey. The image is of Joseph and Mary who have come to Bethlehem to register themselves on the census ordered by Emperor Augustus (Luke 2:1-5). This biblical event is associated with paying taxes. The scene is set in a snowy Brabant village, which brings together /spiritual and temporal considerations', 1566, '115,5 x 163,5 cm', 'images/The_Census_at_Bethlehem.jpg', ' Belgium, Brussels'),
(6, 3, 'The Fall of the Rebel Angels', 'Bruegel painted this picture when he was still living in Antwerp and supplying drawings to the engraver Hieronymus Cock. Turning his back on the then-dominant Italian models, he plunges into the then old-fashioned tradition of Hieronymus Bosch’s world. An apparently inextricable mixture of persons and shapes offers itself to our bewildered gaze', 1562, 'w162 x h117 cm (without frame)', 'images/The_Fall_of_the_Rebel_Angels.jpg', 'Belgium, Brussels'),
(12, 6, 'Mural por DALeast', 'DALeast proveniente de China; es escultor, pintor y diseñador gráfico (digital). Ha creado impresionantes murales con un estilo único lleno de un dinamismo que muestra animales interactuando con el mundo de los seres humanos. Si te acercas a sus impresionantes murales, solo verás garabatos de metal que simulan cintas de casetes, pero cuando te alejas podrás apreciar diversos animales que pareciesen que cobraran vida. En sus obras podemos encontrar leones, ciervos, caballos, ballenas y otras criaturas que van llenándose de vida y energía hasta llegar a convertirse en algo tan real que podrían salir huyendo de las paredes que los enmarcan.', 2013, '2d', 'images/Mural_por_DALeast.jpg', 'Puerto Rico');

-- --------------------------------------------------------

--
-- Table structure for table `tr_artikel`
--

CREATE TABLE `tr_artikel` (
  `id_artikel` int(11) NOT NULL,
  `id_seniman` int(11) NOT NULL,
  `id_media` int(11) NOT NULL,
  `id_galeri` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tr_artikel`
--

INSERT INTO `tr_artikel` (`id_artikel`, `id_seniman`, `id_media`, `id_galeri`, `id_jenis`, `judul`, `deskripsi`) VALUES
(1, 3, 6, 3, 3, '13 Attempts to Become a Rooster', ' 2002 opening of the Lettl Museum in Lindau\r\n\r\n2004 to mark his 85th birthday, the multimedia project \"Doors\" is produced.\r\n\r\n2008 Lettl dies surrounded by his paintings.\r\n\r\n2019 was inaugurated the „LETTL-Museum of Surreal Art”'),
(2, 3, 2, 3, 4, 'Red/Yellow/Blue (and Black and White)', 'Among the characteristics that define Clyfford Still’s paintings — dramatic textures, monumental scale, and jagged, vertical forms — Still’s use of color contributes substantially to a viewer’s experience.  This exhibition highlights the importance – and possible meaning – of color throughout Still’s career.\r\n\r\nStill’s interest in high-key color — red, yellow, and blue, in particular — is apparent in very early works where landscape and clothing are reduced to these “primary colors.” Acutely knowledgeable about both color theory and the history of art, Still was keenly attuned to how artists used color in both modern as well as much earlier times.  While Still never acknowledged an overt color symbolism for his work (for example, blue implying melancholy or red equating violence), this exhibition raises essential questions about the role and function of color in his art.'),
(3, 1, 1, 1, 6, 'THE FALL OF THE REBEL ANGELS', ' The Fall of the Rebel Angels by Pieter Bruegel the Elder is one of the masterpieces at the Royal Museums of Fine Arts of Belgium.\r\n\r\nThe Royal Museums acquired the painting in 1846 thinking it was the work of his son, Pieter Brueghel the Younger.\r\n\r\nThe work was then attributed to Hieronymus Bosch (1450-1516) until 1898 when the date and signature \"MDLXII / Brvegel\" were found in the bottom left-hand corner, hidden by the frame.'),
(4, 5, 5, 1, 5, 'THE CENSUS AT BETHLEHEM', '  At first glance, a number of remarkable things catch the eye in The Census of Bethlehem, a painting by Pieter Bruegel the Elder. However, the disordered feel of the scene does not hinder the viewer\'s interpretation. This rich and diverse picture seduces onlookers with its scale and the balance of colours and composition.'),
(6, 1, 1, 2, 1, 'Los Muros Hablan: The Walls Speak', 'Muralism has become one of the largest artistic and cultural movements in the history of the art world.\r\n\r\nThe art form is very democratic. Anyone who wants to express themselves can leave their mark so future generations can enjoy their artistry. Los Muros Hablan seeks to rescue the abandoned spaces of the city with art.The project builds on the international artistic movements of major cities. It has created a multicultural urban art initiative in Puerto Rico through the participation of local and international artists.\r\n\r\n<br>\r\nDALeast\r\nDALeast is easily one of the most prolific street artists of our time. He is also an accomplished painter, sculptor, and digital artist. He was born in 1984 in Wuhan, China and is currently based in Cape Town, South Africa. He studied Sculpture at the Institute of Fine Arts and began making public art in 2004. His murals can be found in cities around the world including the U.S., Switzerland, Namibia, France, Israel, Australia and China. He mainly uses animals as his works’ subject matter. He regularly includes faint line work in the background of his paintings. This line work creates a shadowing effect for his images in the foreground. The resulting effect is magic-like, and DALeast delivers a sense of wonder with his work every time. DALeast’s art is meant to capture its audience’s emotion in every possible way.\r\n\r\n<br>\r\nFrancisco Fasoli alias Jaz, born in Buenos Aires, Argentina, doesn\'t seek to establish a social or political opinion with his art. His goals are to break up the monotony and express himself freely. He began painting in 1999 as part of a new generation of Argentine artists interested in representing traditional themes of their culture. Through the years, his major themes and inspiration has changed. Nowadays he focuses on themes such as cities, identity clashes, and interesting characters composed of human bodies. We can find his work in Barcelona, ​​New York, Atlanta, Paris and Brazil.');

-- --------------------------------------------------------

--
-- Table structure for table `tr_fav`
--

CREATE TABLE `tr_fav` (
  `id_fav` int(11) NOT NULL,
  `id_art` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tr_fav`
--

INSERT INTO `tr_fav` (`id_fav`, `id_art`, `id_user`) VALUES
(2, 2, 1),
(6, 1, 1),
(7, 3, 1),
(8, 12, 1),
(10, 12, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_galeri`
--
ALTER TABLE `m_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `m_jenis`
--
ALTER TABLE `m_jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `m_media`
--
ALTER TABLE `m_media`
  ADD PRIMARY KEY (`id_media`);

--
-- Indexes for table `m_seniman`
--
ALTER TABLE `m_seniman`
  ADD PRIMARY KEY (`id_seniman`);

--
-- Indexes for table `m_user`
--
ALTER TABLE `m_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tr_art`
--
ALTER TABLE `tr_art`
  ADD PRIMARY KEY (`id_art`);

--
-- Indexes for table `tr_artikel`
--
ALTER TABLE `tr_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tr_fav`
--
ALTER TABLE `tr_fav`
  ADD PRIMARY KEY (`id_fav`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_galeri`
--
ALTER TABLE `m_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `m_jenis`
--
ALTER TABLE `m_jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `m_media`
--
ALTER TABLE `m_media`
  MODIFY `id_media` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `m_seniman`
--
ALTER TABLE `m_seniman`
  MODIFY `id_seniman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `m_user`
--
ALTER TABLE `m_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tr_art`
--
ALTER TABLE `tr_art`
  MODIFY `id_art` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tr_artikel`
--
ALTER TABLE `tr_artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tr_fav`
--
ALTER TABLE `tr_fav`
  MODIFY `id_fav` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
