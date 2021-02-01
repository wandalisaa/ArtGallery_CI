-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2021 at 04:36 AM
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
-- Stand-in structure for view `art`
-- (See below for the actual view)
--
CREATE TABLE `art` (
`id_artikel` int(11)
,`judul` varchar(255)
,`id_art` int(11)
,`judul_art` varchar(255)
,`desk_art` text
,`tahun_dibuat` int(11)
,`dimensi` varchar(255)
,`gambar` varchar(255)
,`tempat_dibuat` varchar(255)
,`nama_seniman` varchar(255)
,`id_seniman` int(11)
,`id_media` int(11)
,`nama_media` varchar(255)
,`id_galeri` int(11)
,`nama_galeri` varchar(255)
,`kota` varchar(255)
,`negara` varchar(255)
,`id_jenis` int(11)
,`nama_jenis` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `artikel`
-- (See below for the actual view)
--
CREATE TABLE `artikel` (
`id_artikel` int(11)
,`judul` varchar(255)
,`deskripsi` text
,`id_galeri` int(11)
,`nama_galeri` varchar(255)
,`kota` varchar(255)
,`negara` varchar(255)
,`id_jenis` int(11)
,`nama_jenis` varchar(255)
,`id_seniman` int(11)
,`nama_seniman` varchar(255)
,`id_media` int(11)
,`nama_media` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `gerakan_seni`
-- (See below for the actual view)
--
CREATE TABLE `gerakan_seni` (
`total` bigint(21)
,`tahun_awal` int(11)
,`nama_jenis` varchar(255)
,`id_jenis` int(11)
,`gambar` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `m_galeri`
--

CREATE TABLE `m_galeri` (
  `id_galeri` int(11) NOT NULL,
  `nama_galeri` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `negara` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `desk_galeri` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_galeri`
--

INSERT INTO `m_galeri` (`id_galeri`, `nama_galeri`, `kota`, `negara`, `foto`, `desk_galeri`) VALUES
(1, 'Chrysler Museum of Art', 'Norfolk', 'Amerika Serikat', 'Chrysler_Museum_of_Art.png', 'The Chrysler Museum of Art is one of America’s most distinguished mid-sized art museums, with a nationally recognized collection of more than 30,000 objects, including one of the great glass collections in America. The core of the Chrysler’s collection co'),
(2, 'Lettl Collection', 'Augsburg', 'German', 'Lettl_Collection.png', 'Approx. 500 surreal paintings by the Augsburg artist Wolfgang Lettl (1919-2008) are the focus of this collection. The collection has been supported since 1992 by the Wolfgang Lettl Association for the Advancement of Surreal Art. It was the wish of Wolfgan'),
(3, 'Clyfford Still Museum', 'Denver', 'Amerika Serikat', 'Clyfford_Still_Museum.png', 'The Mission of the Clyfford Still Museum is to advance the understanding and appreciation of Clyfford Still\'s art and legacy through the presentation, research, interpretation, preservation, and stewardship of its unique collections.'),
(8, 'aadad', 'asad', 'adad', NULL, ''),
(9, 'Sydney Opera House', 'Sydney', 'Australia', 'Sydney_Opera_House.PNG', '\"It stands by itself as one of the indisputable masterpieces of human creativity, not only in the 20th century but in the history of humankind.\" Expert evaluation report to the UNESCO World Heritage Committee, 2007.  Fusing ancient and modernist influences, the sculptural elegance of the Sydney Opera House has made it one of the most recognisable buildings of the twentieth century, synonymous with inspiration and creativity. As Pritzker Prize judge, Frank Gehry, said when awarding architecture’s highest award in 2003: \"[Jørn] Utzon made a building well ahead of its time, far ahead of available technology... a building that changed the image of an entire country.\"  Built to \"help mould a better and more enlightened community,\" in the words of then New South Wales Premier Joseph Cahill, Sydney Opera House has, since opening in 1973, been home to many of the world’s greatest artists and performances and a meeting place for matters of local and international significance. Today it is one of the world’s busiest performing arts centres and Australia’s number one destination, presenting uniquely diverse experiences to more than 8.2 million visitors, 363 days a year.  Those experiences range from the work of seven flagship performing arts companies – Opera Australia, the Sydney Symphony Orchestra, Australian Chamber Orchestra, Sydney Theatre Company, The Australian Ballet, Bell Shakespeare and Bangarra Dance Theatre – to burgeoning contemporary music, talks-and-ideas and children’s programming, and award-winning restaurants and bars.  As the Opera House approaches its 45th Anniversary in 2018, a year that also marks the centenary of architect Jørn Utzon’s birth, a suite of projects is underway to renew the building for future generations of artists, audiences and visitors. As part of this Renewal, the Opera House is committed to bringing the vision and ambition that inspired its creation to all that it does. Google Cultural Institute provides an unparalleled opportunity to share the many facets of the Opera House, past, present and future, with people wherever they are.'),
(10, 'Museo e Real Bosco di Capodimonte', 'Napoli', 'Italia', 'Museo_e_Real_Bosco_di_Capodimonte.PNG', 'The Capodimonte Museum boasts 47,000 works of art that form one of the largest and most complex collections of medieval, early modern, modern and contemporary art in the world. In 126 galleries spread across 151,000 square feet, works of the great artists are exhibited such as: Michelangelo, Caravaggio, Raphael, Titian, Botticelli, Simone Martini, Giovanni Bellini, Colantonio, Artemisia Gentileschi, Jusepe de Ribera, Battistello, Luca Giordano, Mattia Preti, Francesco Solimena, the Carracci, Guido Reni, Lanfranco, Bruegel the Elder, and Van Dyck to name a few.  It all began with the Farnese Collection that Charles I of Bourbon, son of the King of Spain, inherited from his mother Elisabetta and took with him to Naples in 1735, with the desire to display it in this hilltop Palace. Construction of the Palace began in 1738, to function as a picture gallery and hunting lodge. Capodimonte is the only Italian museum that in addition to representing almost all the schools of early modern Italian art, can also boast works by contemporary artists such as Burri, Paolini, Bourgeois, Warhol, and Kiefer.  The Royal Park of Capodimonte, with its 300 acres and more than 400 plant species, is an unspoiled green space that overlooks the city and Gulf of Naples. Exotic species were planted here, including the first mandarin trees in Italy. It is the largest urban park in Italy, with roughly 1,500,000 visitors a year. Within the Royal Park you can admire the last baroque garden of sino-english design replete with rare oriental fragrances.  Majestically nestled within its Royal Park overlooking the Bay of Naples - Capodimonte offers a truly singular combination of artistic and natural beauty that is utterly unique throughout the world.'),
(11, 'English National Ballet', 'London', 'Britania Raya', 'English_National_Ballet.PNG', 'English National Ballet brings world-class classical ballet to the widest possible audience - delighting them with the traditional and inspiring them with the new. We aspire to be the United Kingdom’s most exciting and creative ballet company.  We honor the tradition of great classical ballet while embracing change, evolving the art form for future generations and encouraging audiences to deepen their appreciation of it.  Alicia Markova, Anton Dolin and Julian Braunsweg founded Festival Ballet in 1950. It arose from successful gala programmes featuring Markova and Dolin that had been presented throughout the previous year. The Company\'s original title was chosen by Markova to reflect the imminent Festival of Britain. From the start, touring throughout England has been at the heart of the Company\'s activities and from 1951 the Company has toured abroad on a regular basis. In 1951 the Company began touring both nationally and internationally. The first appearance in Manchester was on the 5 February 1951 at the Opera House which is where English National Ballet had been on the pre-company tour which consisted of the Gala Performances.'),
(12, 'UNESCO World Heritage', 'London', ' Britania Raya', 'UNESCO_World_Heritage.PNG', 'The United Nations Educational, Scientific and Cultural Organization (UNESCO) seeks to encourage the identification, protection and preservation of cultural and natural heritage around the world considered to be of outstanding value to humanity. This is embodied in an international treaty called the Convention concerning the Protection of the World Cultural and Natural Heritage, adopted by UNESCO in 1972.'),
(13, 'Central Museum of Textiles in Lodz', 'Lodz', 'Polandia', NULL, ''),
(14, 'Museu Nacional de Machado de Castro', 'Coimbra', 'Portugal', 'Museu_Nacional_de_Machado_de_Castro.PNG', 'Welcome to the Machado de Castro National Museum! We are in a space whose history goes back two thousands of years. The Museum is located in a national monument, which has witnessed several architectural developments. It was a Roman Forum during the early years of the Christian era, an Episcopal Palace after Portugal was established and a Museum after the founding of the Portuguese Republic. The name chosen for this Museum was a deserved tribute to Joaquim Machado de Castro, an important Portuguese sculptor who was originally from Coimbra. Nearly a century after its creation, the Museum has been renovated and expanded, according to a project designed by architect Gonçalo Byrne. We hope you enjoy your visit!'),
(15, 'Museo del Traje', 'Madrid', 'Spanyol', 'Museo_del_Traje.PNG', 'The Museo del Traje is a National Museum which depends on the Ministry of Culture and Sports. Its basic aim is to promote an understanding of the historical development of costume. Its collections draw a path throw four centuries of the history of fashion, from the 17th century to nowadays.'),
(16, 'Mart, Museum of modern and contemporary art of Trento and Rovereto', 'Rovereto', 'Italia', 'Mart,_Museum_of_modern_and_contemporary_art_of_Trento_and_Rovereto.JPG', '');

-- --------------------------------------------------------

--
-- Table structure for table `m_jenis`
--

CREATE TABLE `m_jenis` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(255) NOT NULL,
  `desk_jenis` text DEFAULT NULL,
  `tahun_awal` int(11) NOT NULL,
  `tahun_akhir` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_jenis`
--

INSERT INTO `m_jenis` (`id_jenis`, `nama_jenis`, `desk_jenis`, `tahun_awal`, `tahun_akhir`) VALUES
(1, 'Pop Art', 'International movement in painting, sculpture and printmaking. The term originated in the mid-1950s at the ICA, London, in the discussions held by the Independent Group concerning the artefacts of popular culture. This small group included the artists Ric', 1950, 2000),
(2, 'Street Art', 'Street art is unofficial and independent visual art created in public locations for public visibility. Street art is associated with the terms \"independent art\", \"post-graffiti\", \"neo-graffiti\", and guerrilla art, but is not public art. Common forms and m', 1970, NULL),
(3, 'Surrealism', 'International intellectual movement, which was centred mainly in Paris and occupied with the problems of thought and expression in all their forms. The Surrealists perceived a deep crisis in Western culture and responded with a revision of values at every', 1920, NULL),
(4, 'Abstract expressionism', 'Term applied to a movement in American painting that flourished in the 1940s and 1950s, sometimes referred to as the New York School or, very narrowly, as action planning, although it was first coined in relation to the work of Vasily Kandinsky in 1929. T', 1946, NULL),
(5, 'Barok', 'The principal European style in the visual arts in the 17th century and the first half of the 18th; generally considered to be characteristic of the period of Caravaggio, Rubens, Rembrandt, Giordano and Tiepolo in painting, Bernini in sculpture, and Borromini, Fischer von Erlach and Wren in architecture. Usage of the term is often extended to the whole period 1600–1750 without qualifying restrictions, or improperly to mean a florid and elaborate style in art, architecture, music or literature, of any date from late antiquity to the early 20th century.', 1600, 1940),
(6, 'Abad Renaisans', 'Term generally used for periods that hark back to the culture of Classical antiquity. Though it has applications elsewhere, it is most often used to refer to that era in Europe, beginning approximately in the 14th century, in which a new style in painting, sculpture and architecture was forged in succession to that of Gothic and in which, in a broader cultural sense, the transition from the Middle Ages to the modern age was made. This', 1300, NULL),
(7, 'Northern Renaissance', 'The adoption in northern Europe, mainly Germany and the Netherlands, of the artistic ideals of the Italian Renaissance. The prime mover was the German artist Albrecht Dürer (1471–1528) who travelled twice to Italy to discover the ‘secrets’ of the Italian masters, especially the mathematical principles of perspecitve and proportion. Dürer\'s own ideas were widely disseminated through his prints and his writings. Flemish artists who travelled to Italy and were strongly influenced by its art included Jan Gossaert and Jan van Scorel.', 1430, 1830),
(8, 'Ekspresionisme', 'International movement in art and architecture, which flourished between c. 1905 and c. 1920, especially in Germany. It also extended to literature, music, dance and theatre. The term was originally applied more widely to various avant-garde movements: for example it was adopted as an alternative to the use of ‘Post-Impressionism’ by Roger Fry in exhibitions in London in 1910 and 1912. It was also used contemporaneously in Scandinavia and Germany, being gradually confined to the specific groups of artists and architects to which it is now applied. Expressionism in the fine arts developed from the Symbolist and expressive trends in European art at the end of the 19th century. The period of ‘classical Expressionism’ began in 1905, with the foundation of the group Die Brucke, and ended c. 1920. Although in part an artistic reaction both to academic art and to Impressionism, the movement should be understood as a form of ‘new Humanism’, which sought to communicate man’s spiritual life. It reflected the deep intellectual unrest c. 1900, reflected in contemporary literary sources, about the destruction of the traditional relationship of trust between man and the world.', 1912, NULL),
(9, 'Pasca-impresionisme', 'Term applied to the reaction against impressionism led by Paul Cézanne, Paul Gauguin, Vincent van Gogh, and Georges Seurat. It can be roughly dated from 1886, the year of the last Impressionist exhibition, to c. 1905, when Fauvism appeared and the first moves towards Cubism were made. While it was predominantly a French movement, there were related developments in other countries, which often occurred somewhat later. Post-Impressionism can be loosely defined as a rejection of the Impressionists’ concern for the naturalistic depiction of light and colour in favour of an emphasis on abstract qualities or symbolic content. It therefore includes neo-impressionism, symbolism, Cloisonnism, synthetism, and the later work of some Impressionists. The term was coined in 1910 by the English critic and painter Roger Fry for an exhibition of late 19th-century French painting, drawing, and sculpture that he organized at the Grafton Galleries in London.', 1886, NULL),
(11, 'Seni Jalanan', '', 1970, 0),
(13, 'adad', 'adadd', 313231, 0),
(14, 'Seni kontemporer', 'Seni Kontemporer adalah perkembangan seni yang terpengaruh dampak modernisasi dan berkembang di Barat sebagai produk seni yang dibuat sejak Perang Dunia II. Secara umum seni kontemporer berarti seni yang saat ini sedang terjadi atau berlangsung, tidak memiliki aturan konvensional. Istilah ini berkembang di Indonesia seiring makin beragamnya teknik dan medium yang digunakan untuk memproduksi suatu karya seni, juga karena telah terjadi suatu percampuran antara praktik dari disiplin yang berbeda, pilihan artistik, dan pilihan presentasi karya yang tidak terikat batas-batas ruang dan waktu. Tafsiran lain mengenai praktik seni kontemporer di Indonesia: Dihilangkannya sekat antara berbagai kecenderungan artistik, ditandai dengan meleburnya batas-batas antara seni rupa, teater, tari, dan musik. Intervensi disiplin ilmu sains dan sosial, terutama yang dicetuskan sebagai pengetahuan populer atau memanfaatkan teknologi mutakhir. Istilah ini dianggap bisa menyertai sebutan seni visual, musik, tari, dan teater.', 1980, 0),
(16, 'Romantisisme', 'Dominant cultural tendency in the Western world in the late 18th and early 19th centuries. It caused a re-evaluation of the nature of art and the role of the artist in society. Significantly, from the 1790s it was a self-proclaimed movement, the first such, and so initiated a tradition that has remained in Western culture since. Romanticism was rejected or ignored by most of the major artists later seen as associated with it, but it nevertheless identified several key tendencies of the period. Though hard to define precisely, it essentially involves: 1) placing emotion and intuition before (or at least on an equal footing with) reason; 2) a belief that there are crucial areas of experience neglected by the rational mind; and 3) a belief in the general importance of the individual, the personal and the subjective. In fact it embodies a critique of that faith in progress and rationality that had characterized the main trend of Western thought and action since the Renaissance.', 1770, 1850),
(17, 'Rokoko', 'A decorative style of the early to mid-18th century, primarily influencing the ornamental arts in Europe, especially in France, southern Germany and Austria. The character of its formal idiom is marked by asymmetry and naturalism, displaying in particular a fascination with shell-like and watery forms. Further information on the Rococo can be found in this dictionary within the survey articles on the relevant countries.', 1730, 0),
(18, 'Seni rakyat', 'Term used broadly to describe those arts that exist outside the received canons of taste established by or on behalf of the leaders of a given society. Implicit in such a definition is the existence of a society that is sufficiently complex to permit more than one level of cultural activity to thrive. The art of the élite may be dominant, but it is usually a minority aesthetic. In countries or regions that have at some time formed part of larger political entities, the élite culture may have dwindled while the folk culture has developed as a symbol of nationalism. Folk art exists in clearly defined geographical regions among peoples with shared characteristics such as language or religion. Tradition usually provides some component, not only in terms of content, subject-matter or use but also in structure, craft techniques, tools and materials. Folk art is as inseparable from folk building as it was inseparable from daily life. The ‘applied’ or ‘decorative’ arts (e.g. furniture) have their ‘folk’ equivalents.', 1850, 0),
(19, 'Seni Gotik', 'Gothic is a term denoting styles in the art and architecture of the West from about the mid-12th century to the 15th (Italy) or mid-16th (elsewhere). It was first used by Vasari to describe pre-Renaissance architecture, following humanist writers who had associated architecture before Brunelleschi with gente barbara or Germans. From the 18th century, when antiquaries distinguished a Romanesque style, Gothic was restricted to the centuries between Romanesque and the Renaissance.', 1150, 1375),
(20, 'Minimalisme', 'Term used in the 20th century, in particular from the 1960s, to describe a style characterized by an impersonal austerity, plain geometric configurations and industrially processed materials. It was first used by David Burlyuk in the catalogue introduction for an exhibition of John Graham’s paintings at the Dudensing Gallery in New York in 1929. Burlyuk wrote: ‘Minimalism derives its name from the minimum of operating means. Minimalist painting is purely realistic—the subject being the painting itself.’ The term gained currency in the 1960s. Accounts and explanations of Minimalism varied considerably, as did the range of work to which it was related. This included the monochrome paintings of Yves Klein, Robert Rauschenberg, Ad Reinhardt, Frank Stell and Brice Marden, and even aspects of Pop art and Post-painterly Abstraction. Typically the precedents cited were Marcel Duchamp’s ready-mades, the Suprematist compositions of Kazimir Malevich and Barnett Newman’s Abstract Expressionist paintings. The rational grid paintings of Agnes Martin were also mentioned in connection with such Minimalist artists as Sol Lewitt.', 1960, 0),
(21, 'Barok', 'The principal European style in the visual arts in the 17th century and the first half of the 18th; generally considered to be characteristic of the period of Caravaggio, Rubens, Rembrandt, Giordano and Tiepolo in painting, Bernini in sculpture, and Borromini, Fischer von Erlach and Wren in architecture. Usage of the term is often extended to the whole period 1600–1750 without qualifying restrictions, or improperly to mean a florid and elaborate style in art, architecture, music or literature, of any date from late antiquity to the early 20th century.', 1600, 1937),
(22, 'Futurisme', 'Italian movement, literary in origin, that grew to embrace painting, sculpture, photography and architecture, which was launched by the publication on 20 February 1909 of ‘Le Futurisme’ by Filippo Tommaso Marinetti in the Paris newspaper Le Figaro. Marinetti’s intention was to reject the past, to revolutionize culture and make it more modern. The new ideology of Futurism set itself with violent enthusiasm against the weighty inheritance of an art tied to the Italian cultural tradition and exalted the idea of an aesthetic generated by the modern myth of the machine and of speed.', 1909, 0),
(23, 'Pop Art', 'International movement in painting, sculpture and printmaking. The term originated in the mid-1950s at the ICA, London, in the discussions held by the Independent Group concerning the artefacts of popular culture. This small group included the artists Ric', 1950, 2001),
(29, 'test', '', 1234, 0),
(31, 'test', '', 1234, 0),
(32, 'test', '', 1234, 0);

-- --------------------------------------------------------

--
-- Table structure for table `m_media`
--

CREATE TABLE `m_media` (
  `id_media` int(11) NOT NULL,
  `nama_media` varchar(255) NOT NULL,
  `desk_media` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_media`
--

INSERT INTO `m_media` (`id_media`, `nama_media`, `desk_media`) VALUES
(1, 'Cat minyak', 'ethod of painting using pigments dispersed in oil. It is not known how oil painting was first developed, but in Western Europe there are indications of its use from at least the 12th century AD, and it was widely used from the Renaissance. This article discusses the characteristics and development of oil painting in Western'),
(2, 'Karton', 'Cardboard is a generic term for heavy-duty paper-based products having greater thickness and superior durability or other specific mechanical attributes to paper; such as foldability, rigidity and impact resistance. The construction can range from a thick sheet known as paperboard to corrugated fiberboard which'),
(3, 'Kayu', 'Material derived from the trunks, boughs and other hard parts of trees and shrubs and serving a wide range of artistic purposes. It has been used as a raw material for millennia, first to construct houses and make tools and weapons, and later to build temples, palaces and boats and to carve sculptures and furniture.'),
(5, 'Kertas', 'Random or felted sheet of isolated vegetable fibre produced by sieving the macerated vegetable fibre from a watery slurry. Certain criteria must be met for a substance to be called paper: most importantly, the fibre must be vegetable; it must be processed in some way to break the material into individual fibres; and the sheets must be formed by casting the macerated fibre–water mixture on a sieve, usually a screen that is dipped into the aqueous mixture and allows the excess water to drain away. Paper is the most common support for drawing, printing, prints, watercolour painting and writing; with parchment, it was also widely used for the medieval manuscript, and for the development, from the 15th century onwards, of the printed book.'),
(6, 'Newsprint', 'Newsprint is a low-cost, non-archival paper consisting mainly of wood pulp and most commonly used to print newspapers and other publications and advertising material. Invented in 1844 by Charles Fenerty of Nova Scotia, Canada, it usually has an off white cast and distinctive feel. It is designed for use in printing presses that employ a long web of paper rather than individual sheets of paper. Newsprint is favored by publishers and printers as it is relatively low cost, strong and can accept four-color printing at qualities that meet the needs of typical newspapers.'),
(7, 'addadwa', ''),
(8, 'Gamping', 'A stone chiefly composed of calcium carbonate. It is mainly used for building, but also sometimes for sculpture. Limestone that can be polished is often incorrectly called marble.'),
(9, 'Fabric', 'A fabric is a material made through weaving, knitting, spreading, felting, stitching, crocheting or bonding that may be used in the production of further products');

-- --------------------------------------------------------

--
-- Table structure for table `m_seniman`
--

CREATE TABLE `m_seniman` (
  `id_seniman` int(11) NOT NULL,
  `nama_seniman` varchar(255) NOT NULL,
  `desk_seniman` text DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_seniman`
--

INSERT INTO `m_seniman` (`id_seniman`, `nama_seniman`, `desk_seniman`, `tanggal_lahir`) VALUES
(1, 'Idelle Weber', 'Idelle Lois Weber was an American artist most closely aligned with the Pop art and Photorealist movements.\r\n', '1932-03-12'),
(2, 'Wolfgang Lettl', 'Wolfgang Lettl was a surrealist painter who was born and who died in Augsburg, Germany.\r\nIn 1939, at the age of 20, Wolfgang joined the German Army and served as a communications officer in occupied Paris from 1940 to 1943, during which time he worked on ', '1919-12-18'),
(3, 'Clyfford Still ', 'Clyfford Still was an American painter, and one of the leading figures in the first generation of Abstract Expressionists, who developed a new, powerful approach to painting in the years immediately following World War II. Still has been credited with lay', '1974-06-04'),
(4, 'Pieter Bruegel Senior', 'Pieter Bruegel Senior adalah pelukis Renaissance Belanda atau Flem. Ia terkenal untuk karya pemandangan dan petani kecilnya. Ia dijuluki \'Petani Bruegel\' untuk memisahkannya dari anggota keluarga Brueghel lainnya. Namun ia merupakan yang paling terkenal di antaranya. Dari tahun 1559 ia menanggalkan huruf \'h\' dari namanya dan mulai menandatangani lukisannya dengan nama Bruegel.', '1993-07-07'),
(12, 'Johannes Vermeer', 'Johannes, Jan atau Johan Vermeer adalah seorang pelukis Belanda yang terutama melukis pemandangan dalam ruang di rumah kediaman kelas menengah. Semasa hidupnya, Vermeer adalah seorang pelukis genre art tingkat provinsi yang kesuksesannya sedang-sedang saja. Dia tampaknya tidak pernah menjadi kaya, dia mati meninggalkan utang untuk istri dan anak-anaknya, kemungkinan karena lukisan yang dihasilkannya relatif sedikit. Vermeer bekerja perlahan-lahan dan dengan sangat teliti, menggunakan warna-warni cerah dan kadang-kadang pigmen berharga mahal, terutama memakai warna kesenangannya, yakni cornflower biru dan kuning. Dia sangat terkenal untuk ketelitian pencahayaan dalam lukisannya. Lukisan Vermeer sebagian besar adalah pemandangan interior dalam rumah. ', '1632-10-05');

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
  `desk_art` text DEFAULT NULL,
  `tahun_dibuat` int(11) DEFAULT NULL,
  `dimensi` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `tempat_dibuat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tr_art`
--

INSERT INTO `tr_art` (`id_art`, `id_artikel`, `judul_art`, `desk_art`, `tahun_dibuat`, `dimensi`, `gambar`, `tempat_dibuat`) VALUES
(1, 1, '13 Attempts to Become a Rooster - 13', 'The series ', 1978, 'w35 x h32.5 cm (without frame)', 'images/13_Attempts_to_Become_a_Rooster_-_13.jpg', 'Augsburg'),
(2, 1, '13 Attempts to Become a Rooster - 12', 'The series ', 1978, 'w35 x h32,5 cm (without frame)', 'images/13_Attempts_to_Become_a_Rooster_-_12.jpg', 'Augsburg'),
(3, 2, 'PH-272', 'Each color theme in this exhibition includes at least one pre-abstract expressionist period work (before around 1945) as well as a “late-period” work (made after his move to Maryland in 1961), allowing for a fuller picture of the prominent role color play', 1950, '223 x 267 cm', 'images/PH-272.jpg', 'New York'),
(4, 2, 'PH-18', 'Each color theme in this exhibition includes at least one pre-abstract expressionist period work (before around 1945) as well as a “late-period” work (made after his move to Maryland in 1961), allowing for a fuller picture of the prominent role color played over Still\'s five-decade career. Still’s use of color also represents the ways he influenced, and was in dialogue with artists such as Mark Rothko and Barnett Newman, his closest allies in the late 1940s.', 1955, 'h108 x w92 in', 'images/PH-18.jpg', 'New York'),
(6, 3, 'The Fall of the Rebel Angels', 'Bruegel painted this picture when he was still living in Antwerp and supplying drawings to the engraver Hieronymus Cock. Turning his back on the then-dominant Italian models, he plunges into the then old-fashioned tradition of Hieronymus Bosch’s world. An apparently inextricable mixture of persons and shapes offers itself to our bewildered gaze', 1562, 'w162 x h117 cm (without frame)', 'images/The_Fall_of_the_Rebel_Angels.jpg', 'Belgium, Brussels'),
(12, 6, 'Mural por DALeast', 'DALeast proveniente de China; es escultor, pintor y diseñador gráfico (digital). Ha creado impresionantes murales con un estilo único lleno de un dinamismo que muestra animales interactuando con el mundo de los seres humanos. Si te acercas a sus impresionantes murales, solo verás garabatos de metal que simulan cintas de casetes, pero cuando te alejas podrás apreciar diversos animales que pareciesen que cobraran vida. En sus obras podemos encontrar leones, ciervos, caballos, ballenas y otras criaturas que van llenándose de vida y energía hasta llegar a convertirse en algo tan real que podrían salir huyendo de las paredes que los enmarcan.', 2013, '2d', 'images/Mural_por_DALeast.jpg', 'Puerto Rico'),
(16, 18, 'The Walthamstow Tapestry', 'In the Walthamstow Tapestry Grayson Perry explores the emotional role and meaning of brand names in our lives, and by extension our quasi religious relationship with consumerism. The tapestry depicts a human life, punctuated with an endless series of commercial brands that the individual encounters along the way. Stripped of their logos and thus their identity, the brand names walk alongside the subjects of the portraits: ordinary people going about their daily business, caring for their children, walking the dog, skateboarding and – of course – shopping. Everyone of Grayson Perry’s vases or tapestries is a marvel of craftsmanship and devotion. There is a dissonance in the unusual scenes that adorn his otherwise traditional works. With image and text, Perry tells stories of social injustice, hypocrisy and his alter ego, Claire.  This long, traditionally woven tapestry is reminiscent of the world-renowned, seventy metre long Bayeux Tapestry (c. 1070), depicting the heroic events of the Battle of Hastings (1066). The name Walthamstow refers to a suburb of London where Perry kept a studio for many years', 2009, '140 x 700 cm', 'images/The_Walthamstow_Tapestry.PNG', ''),
(19, 20, 'Jurgita Dronina as The Sylph in La Sylphide', '', 0, '', 'images/Jurgita_Dronina_as_The_Sylph_in_La_Sylphide.PNG', ''),
(20, 20, 'Artists of English National Ballet in La Sylphide', '', 0, '', 'images/Artists_of_English_National_Ballet_in_La_Sylphide.PNG', ''),
(21, 20, 'Jurgita Dronina as The Sylph in La Sylphide', '', 0, '', 'images/Jurgita_Dronina_as_The_Sylph_in_La_Sylphide1.PNG', ''),
(22, 21, 'A masterpiece', 'The Sanctuary of Bom Jesus de Matosinhos is remarkable for its architecture and its landscape that includes a church, a churchyard and six chapels.', 0, '', 'images/A_masterpiece.PNG', 'Brazil'),
(23, 22, 'Clothing fabric', '', 1964, '', 'images/Clothing_fabric.PNG', 'Lodz, Poland'),
(24, 22, 'Clothing fabrics', '', 1966, '', 'images/Clothing_fabrics.PNG', 'Lodz, Poland'),
(25, 23, 'Virgin of the Annunciation', 'This limestone image is unequalled in Renaissance sculpture. It depicts the Virgin of the Annunciation, kneeling on a cushioned prayer stool, following a model common in the 16th century, in which the Virgin, surprised, looks up and raises her hand to her heart. In some ways, this piece is something of an enigma, with many studies and theses having been written on the subjects of its iconography and the identity of the artist. It formerly belonged to the Cathedral of Coimbra.', 0, ' 98 cm x 46 cm x 75 cm', 'images/Virgin_of_the_Annunciation.PNG', ' Coimbra, Portugal'),
(26, 24, 'Dress', 'Ladies´coat in gros de Tours of wool voile in black, length to below the knee, straight, taolored and double breasted. It has an asymmetrical apperance, creatd by the fact that the sleeves are unlike each other. Thus, the right side maintains the form of a straight coat with a long sleeve, while the left has the appearance of a cape.', 2002, ' 108cmx60cm', 'images/Dress.PNG', 'Madrid, Spanyol'),
(28, 26, 'Movimento d\'uccello', '', 0, '', 'images/Movimento_duccello.JPG', '');

-- --------------------------------------------------------

--
-- Table structure for table `tr_artikel`
--

CREATE TABLE `tr_artikel` (
  `id_artikel` int(11) NOT NULL,
  `id_seniman` int(11) DEFAULT NULL,
  `id_media` int(11) DEFAULT NULL,
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
(6, 1, 5, 1, 1, 'Los Muros Hablan: The Walls Speak', ' Muralism has become one of the largest artistic and cultural movements in the history of the art world.\r\n\r\nThe art form is very democratic. Anyone who wants to express themselves can leave their mark so future generations can enjoy their artistry. Los Muros Hablan seeks to rescue the abandoned spaces of the city with art.The project builds on the international artistic movements of major cities. It has created a multicultural urban art initiative in Puerto Rico through the participation of local and international artists.\r\n\r\n<br>\r\nDALeast\r\nDALeast is easily one of the most prolific street artists of our time. He is also an accomplished painter, sculptor, and digital artist. He was born in 1984 in Wuhan, China and is currently based in Cape Town, South Africa. He studied Sculpture at the Institute of Fine Arts and began making public art in 2004. His murals can be found in cities around the world including the U.S., Switzerland, Namibia, France, Israel, Australia and China. He mainly uses animals as his works’ subject matter. He regularly includes faint line work in the background of his paintings. This line work creates a shadowing effect for his images in the foreground. The resulting effect is magic-like, and DALeast delivers a sense of wonder with his work every time. DALeast’s art is meant to capture its audience’s emotion in every possible way.\r\n\r\n<br>\r\nFrancisco Fasoli alias Jaz, born in Buenos Aires, Argentina, doesn\'t seek to establish a social or political opinion with his art. His goals are to break up the monotony and express himself freely. He began painting in 1999 as part of a new generation of Argentine artists interested in representing traditional themes of their culture. Through the years, his major themes and inspiration has changed. Nowadays he focuses on themes such as cities, identity clashes, and interesting characters composed of human bodies. We can find his work in Barcelona, ​​New York, Atlanta, Paris and Brazil.'),
(18, 4, 1, 9, 14, 'The Walthamstow Tapestry', 'Zoom into Grayson Perry\'s contemporary epic narrative about the dangers of consumerism\r\n'),
(20, NULL, NULL, 11, 16, 'Five things about La Sylpide', 'August Bournonville’s La Sylphide, one of the oldest ballets in existence, was born from an 1832 French ballet by Filippo Taglioni which signalled the dawn of a new, Romantic era of ballet. Here are five facts about this captivating ballet.\r\n'),
(21, NULL, NULL, 12, 17, 'Sanctuary of Bom Jesus do Congonhas', 'A masterpiece of the Baroque style reflecting in its architecture and ornamentation the transition period in which it was built\r\n'),
(22, 2, 0, 13, 18, 'Be Colourful!', ' olish printed textiles and garments created between 1950 and 1989 from the collection of the Central Museum of Textiles in Lodz\r\n\r\n'),
(23, NULL, 8, 14, 19, 'Carved images and symbols', 'Stone, wood, terracota and ivory sculpture '),
(24, 0, 9, 15, 20, 'Fashion in Spain: Contemporary Designers Making Their Mark', ' Half a century of Spanish fashion revealing the enormous potential of our most prominent creators.\r\n\r\n'),
(26, 0, 0, 16, 22, 'Futurismo', 'In the literary field, all logical and psychological consequentiality was eliminated, the delusional immediacy of onomatopoeia, f. promoted the \'words in freedom\', in which an exasperated analogical associationism translated into the iconism of visual poetry (\'self-illustration\') and in the typographical revolution, but it also infected the expressive style of the \'posters\', which remain the most remarkable of the movement, and it did not remain without consequences even on the political oratory of the time. '),
(28, NULL, NULL, 12, 20, 'test', 'test');

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
(6, 1, 1),
(2, 2, 1),
(7, 3, 1),
(8, 12, 1),
(29, 12, 2),
(10, 12, 7),
(23, 25, 2),
(25, 26, 2),
(32, 28, 8);

-- --------------------------------------------------------

--
-- Structure for view `art`
--
DROP TABLE IF EXISTS `art`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `art`  AS SELECT `a`.`id_artikel` AS `id_artikel`, `a`.`judul` AS `judul`, `b`.`id_art` AS `id_art`, `b`.`judul_art` AS `judul_art`, `b`.`desk_art` AS `desk_art`, `b`.`tahun_dibuat` AS `tahun_dibuat`, `b`.`dimensi` AS `dimensi`, `b`.`gambar` AS `gambar`, `b`.`tempat_dibuat` AS `tempat_dibuat`, `c`.`nama_seniman` AS `nama_seniman`, `c`.`id_seniman` AS `id_seniman`, `d`.`id_media` AS `id_media`, `d`.`nama_media` AS `nama_media`, `e`.`id_galeri` AS `id_galeri`, `e`.`nama_galeri` AS `nama_galeri`, `e`.`kota` AS `kota`, `e`.`negara` AS `negara`, `f`.`id_jenis` AS `id_jenis`, `f`.`nama_jenis` AS `nama_jenis` FROM (((((`tr_artikel` `a` join `tr_art` `b` on(`a`.`id_artikel` = `b`.`id_artikel`)) left join `m_seniman` `c` on(`a`.`id_seniman` = `c`.`id_seniman`)) left join `m_media` `d` on(`a`.`id_media` = `d`.`id_media`)) join `m_galeri` `e` on(`a`.`id_galeri` = `e`.`id_galeri`)) join `m_jenis` `f` on(`a`.`id_jenis` = `f`.`id_jenis`)) ;

-- --------------------------------------------------------

--
-- Structure for view `artikel`
--
DROP TABLE IF EXISTS `artikel`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `artikel`  AS SELECT `a`.`id_artikel` AS `id_artikel`, `a`.`judul` AS `judul`, `a`.`deskripsi` AS `deskripsi`, `b`.`id_galeri` AS `id_galeri`, `b`.`nama_galeri` AS `nama_galeri`, `b`.`kota` AS `kota`, `b`.`negara` AS `negara`, `c`.`id_jenis` AS `id_jenis`, `c`.`nama_jenis` AS `nama_jenis`, `d`.`id_seniman` AS `id_seniman`, `d`.`nama_seniman` AS `nama_seniman`, `e`.`id_media` AS `id_media`, `e`.`nama_media` AS `nama_media` FROM ((((`tr_artikel` `a` join `m_galeri` `b` on(`a`.`id_galeri` = `b`.`id_galeri`)) join `m_jenis` `c` on(`a`.`id_jenis` = `c`.`id_jenis`)) left join `m_seniman` `d` on(`a`.`id_seniman` = `d`.`id_seniman`)) left join `m_media` `e` on(`a`.`id_media` = `e`.`id_media`)) ;

-- --------------------------------------------------------

--
-- Structure for view `gerakan_seni`
--
DROP TABLE IF EXISTS `gerakan_seni`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `gerakan_seni`  AS SELECT count(`c`.`id_art`) AS `total`, `a`.`tahun_awal` AS `tahun_awal`, `a`.`nama_jenis` AS `nama_jenis`, `a`.`id_jenis` AS `id_jenis`, `c`.`gambar` AS `gambar` FROM ((`m_jenis` `a` join `tr_artikel` `b` on(`a`.`id_jenis` = `b`.`id_jenis`)) join `tr_art` `c` on(`c`.`id_artikel` = `b`.`id_artikel`)) GROUP BY `a`.`id_jenis` ;

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
  ADD PRIMARY KEY (`id_art`),
  ADD KEY `id_artikel` (`id_artikel`);

--
-- Indexes for table `tr_artikel`
--
ALTER TABLE `tr_artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `id_seniman` (`id_seniman`,`id_media`,`id_galeri`,`id_jenis`),
  ADD KEY `id_jenis` (`id_jenis`),
  ADD KEY `id_galeri` (`id_galeri`),
  ADD KEY `id_media` (`id_media`);

--
-- Indexes for table `tr_fav`
--
ALTER TABLE `tr_fav`
  ADD PRIMARY KEY (`id_fav`),
  ADD KEY `id_art` (`id_art`,`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_galeri`
--
ALTER TABLE `m_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `m_jenis`
--
ALTER TABLE `m_jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `m_media`
--
ALTER TABLE `m_media`
  MODIFY `id_media` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `m_seniman`
--
ALTER TABLE `m_seniman`
  MODIFY `id_seniman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `m_user`
--
ALTER TABLE `m_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tr_art`
--
ALTER TABLE `tr_art`
  MODIFY `id_art` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tr_artikel`
--
ALTER TABLE `tr_artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tr_fav`
--
ALTER TABLE `tr_fav`
  MODIFY `id_fav` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tr_art`
--
ALTER TABLE `tr_art`
  ADD CONSTRAINT `tr_art_ibfk_1` FOREIGN KEY (`id_artikel`) REFERENCES `tr_artikel` (`id_artikel`) ON DELETE CASCADE;

--
-- Constraints for table `tr_artikel`
--
ALTER TABLE `tr_artikel`
  ADD CONSTRAINT `tr_artikel_ibfk_2` FOREIGN KEY (`id_jenis`) REFERENCES `m_jenis` (`id_jenis`) ON DELETE CASCADE,
  ADD CONSTRAINT `tr_artikel_ibfk_3` FOREIGN KEY (`id_galeri`) REFERENCES `m_galeri` (`id_galeri`) ON DELETE CASCADE,
  ADD CONSTRAINT `tr_artikel_ibfk_4` FOREIGN KEY (`id_media`) REFERENCES `m_media` (`id_media`) ON DELETE SET NULL,
  ADD CONSTRAINT `tr_artikel_ibfk_5` FOREIGN KEY (`id_seniman`) REFERENCES `m_seniman` (`id_seniman`) ON DELETE SET NULL;

--
-- Constraints for table `tr_fav`
--
ALTER TABLE `tr_fav`
  ADD CONSTRAINT `tr_fav_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `m_user` (`id_user`) ON DELETE CASCADE,
  ADD CONSTRAINT `tr_fav_ibfk_2` FOREIGN KEY (`id_art`) REFERENCES `tr_art` (`id_art`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
