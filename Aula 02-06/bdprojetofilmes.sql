-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 15-Jun-2023 às 01:09
-- Versão do servidor: 5.7.40
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdprojetofilmes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbadmin`
--

DROP TABLE IF EXISTS `tbadmin`;
CREATE TABLE IF NOT EXISTS `tbadmin` (
  `idAdmin` int(11) NOT NULL AUTO_INCREMENT,
  `emailAdmin` varchar(40) DEFAULT NULL,
  `senhaAdmin` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idAdmin`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbadmin`
--

INSERT INTO `tbadmin` (`idAdmin`, `emailAdmin`, `senhaAdmin`) VALUES
(1, 'anaadmin', '1234'),
(2, 'tiagoadmin', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcargo`
--

DROP TABLE IF EXISTS `tbcargo`;
CREATE TABLE IF NOT EXISTS `tbcargo` (
  `idcargo` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(150) CHARACTER SET utf8mb4 DEFAULT NULL,
  `adimin` varchar(150) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`idcargo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcontato`
--

DROP TABLE IF EXISTS `tbcontato`;
CREATE TABLE IF NOT EXISTS `tbcontato` (
  `idContato` int(11) NOT NULL AUTO_INCREMENT,
  `nomeContato` varchar(40) DEFAULT NULL,
  `emailContato` varchar(40) DEFAULT NULL,
  `assuntoContato` varchar(400) DEFAULT NULL,
  `mensagemContato` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`idContato`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbcontato`
--

INSERT INTO `tbcontato` (`idContato`, `nomeContato`, `emailContato`, `assuntoContato`, `mensagemContato`) VALUES
(2, 'Tiago', 'tiago@gmail.com', 'serie', 'add serie'),
(6, 'Ana ', 'ana@gmail.com', 'Filme', 'Adicionar filme');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbfilme`
--

DROP TABLE IF EXISTS `tbfilme`;
CREATE TABLE IF NOT EXISTS `tbfilme` (
  `idFilme` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `diretor` varchar(50) DEFAULT NULL,
  `duracao` varchar(50) NOT NULL,
  `descricao` varchar(500) DEFAULT NULL,
  `classificacao` varchar(100) NOT NULL,
  `ano` varchar(50) NOT NULL,
  `idGenero` int(11) DEFAULT NULL,
  `link` varchar(1000) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `secao` varchar(50) NOT NULL,
  PRIMARY KEY (`idFilme`),
  KEY `idGenero` (`idGenero`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbfilme`
--

INSERT INTO `tbfilme` (`idFilme`, `titulo`, `diretor`, `duracao`, `descricao`, `classificacao`, `ano`, `idGenero`, `link`, `img`, `secao`) VALUES
(2, 'Super Mario Bros. O Filme', 'Aaron Horvath, Michael Jelenic', '1h 32m', 'Mario é um encanador junto com seu irmão Luigi. Um dia, eles vão parar no reino dos cogumelos, governado pela Princesa Peach, mas ameaçado pelo rei dos Koopas, que faz de tudo para conseguir reinar em todos os lugares', 'Livre', '2023', 5, 'https://www.youtube.com/embed/Cb4WV4aXBpk', 'mario.jpg', 'cartaz'),
(3, 'Velozes e Furiosos 10', 'Louis Leterrier', '2h 21m', 'Dom Toretto e sua família devem lidar com o adversário mais letal que já enfrentaram. Alimentada pela vingança, uma ameaça terrível emerge das sombras do passado para destruir o mundo de Dom e todos que ele ama.', '14', '2023', 1, 'https://www.youtube.com/embed/a1w9x5U88jU', 'velozes.jpg', 'cartaz'),
(4, 'Guardiões da Galáxia - Vol. 3', 'James Gunn', '2h 29m', 'Agora já conhecidos como os Guardiões da Galáxia, os guerreiros viajam ao longo do cosmos e lutam para manter sua nova família unida. Enquanto isso tentam desvendar os mistérios da verdadeira paternidade de Peter Quill (Chris Pratt). compatível com App Mo', '14', '2023', 8, 'https://www.youtube.com/embed/d1yNc9skssk', 'guardiao.jpg', 'cartaz'),
(8, 'Homem-Aranha no Aranhaverso', ' Peter Ramsey, Bob Persichetti, Rodney Rothman', '2h 16m', 'Após ser atingido por uma teia radioativa, Miles Morales, um jovem negro do Brooklyn, se torna o Homem-Aranha, inspirado no legado do já falecido Peter Parker. Entretanto, ao visitar o túmulo de seu ídolo em uma noite chuvosa, ele é surpreendido com a presença do próprio Peter, vestindo o traje do herói por baixo de um sobretudo. A surpresa fica ainda maior quando Miles descobre que ele veio de uma dimensão paralela, assim como outras versões do Homem-Aranha.', 'Livre', '2023', 1, 'https://www.youtube.com/embed/LZBlXkDvhh4', 'aranha.jpg', 'cartaz'),
(9, 'A Morte do Demônio: A Ascensão', ' Lee Cronin', '2 horas', 'Uma mulher se encontra em uma luta por sua vida quando um livro antigo dá à luz demônios sedentos por sangue. Eles se tornam cada vez mais agressivos em um prédio em Los Angeles.', '18', '2023', 13, 'https://www.youtube.com/embed/5n9v35xgRpw', 'demonio.png', 'cartaz'),
(10, 'Avatar: O caminho da Água', 'James Cameron', '3h 12m', 'Após formar uma família, Jake Sully e Ney\'tiri fazem de tudo para ficarem juntos. No entanto, eles devem sair de casa e explorar as regiões de Pandora quando uma antiga ameaça ressurge, e Jake deve travar uma guerra difícil contra os humanos.', '12', '2022', 8, 'https://www.youtube.com/embed/fMdb0nGsICE', 'avatar.jpg', 'populares'),
(11, 'M3GAN', 'Gerard Johnstone', '1h 42m', 'M3GAN é uma maravilha da inteligência artificial, uma boneca realista programada para ser a melhor amiga de uma criança. Uma robótica brilhante dá a sua jovem sobrinha um protótipo M3GAN, mas a máquina logo se torna violenta.', '14', '2022', 13, 'https://www.youtube.com/embed/JcKRaUGJcqY', 'megan.jpg', 'populares'),
(16, 'Mistério em Paris', 'Jeremy Garelick', '1h 29m', 'Nick e Audrey Spitz abrem uma agência de investigação e finalmente conseguem um caso importante: um amigo bilionário é sequestrado no dia de seu casamento.', '14', '2023', 2, 'https://www.youtube.com/embed/FDcsfr7bsE8', 'paris.png', 'populares'),
(17, 'Shrek para Sempre', 'Mike Mitchell', '1h 33m', 'Há muito tempo ajustado à vida de casado e totalmente domesticado, Shrek fica entediado e começa a ter saudades dos dias em que se sentia um ogro de verdade. Para recuperá-los, ele firma um pacto com Rumpelstiltskin e é levado a um mundo onde ogros são caçados e ele e Fiona nunca se conheceram, além de que seus amigos Burro e Gato de Botas também não o reconhecem. Shrek precisa encontrar um jeito de se livrar do contrato para recuperar sua vida normal e seu grande amor.', 'Livre', '2010', 2, 'https://www.youtube.com/embed/TlRgGvROYOM', 'shrek.jpg', 'familia'),
(18, 'A Menina Índigo', 'Wagner de Assis', '1h45min', 'Sofia é uma criança que desenvolveu o dom de curar enfermidades. Um jornalista sensacionalista descobre seus poderes e a notícia se espalha. Os pais da menina, divorciados, são obrigados a se unir para protegê-la.', 'Livre', '2016', 6, 'https://www.youtube.com/embed/6yd2QQIcgD0', 'indigo.jpg', 'familia'),
(19, 'O Céu É de Verdade\r\n\r\n', 'Randall Wallace', '1h 40m', 'Todd Burpo é pastor e bombeiro voluntário em uma pequena cidade do Nebraska. Ele e sua esposa enfrentam uma situação complicada quando seu filho, Colton, precisa ser operado às pressas. Felizes com a recuperação milagrosa da criança, eles não estão preparados para o que vem a seguir. Colton conta que foi ao céu e voltou e diz coisas que não teria como saber. Convicto de que o filho visitou o paraíso, Todd passa a questionar sua própria fé daquilo que pregava até então.', 'Livre', ' 2014', 6, 'https://www.youtube.com/embed/4Gn4YAUgU3A', 'ceu.png', 'familia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbgenero`
--

DROP TABLE IF EXISTS `tbgenero`;
CREATE TABLE IF NOT EXISTS `tbgenero` (
  `idGenero` int(11) NOT NULL AUTO_INCREMENT,
  `genero` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`idGenero`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbgenero`
--

INSERT INTO `tbgenero` (`idGenero`, `genero`) VALUES
(1, 'Ação'),
(2, 'Comédia'),
(3, 'Drama'),
(4, 'Animação'),
(5, 'Aventura'),
(6, 'Drama'),
(7, 'Fantasia'),
(8, 'Ficção científica'),
(9, 'Musical'),
(10, 'Policial'),
(11, 'Romance'),
(12, 'Suspence'),
(13, 'Terror');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusuario`
--

DROP TABLE IF EXISTS `tbusuario`;
CREATE TABLE IF NOT EXISTS `tbusuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `emailUsuario` varchar(40) DEFAULT NULL,
  `senhaUsuario` varchar(255) DEFAULT NULL,
  `tipoUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbusuario`
--

INSERT INTO `tbusuario` (`idUsuario`, `emailUsuario`, `senhaUsuario`, `tipoUsuario`) VALUES
(1, 'admin', 'admin', 1),
(2, 'tiago', '123456', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
