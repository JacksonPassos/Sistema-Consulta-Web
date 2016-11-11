-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09-Nov-2016 às 19:10
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `med_system_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `especialidades`
--

CREATE TABLE `especialidades` (
  `id` int(25) NOT NULL,
  `especialidades` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `especialidades`
--

INSERT INTO `especialidades` (`id`, `especialidades`) VALUES
(1, 'Acupuntura'),
(2, 'Alergia e Imunologia'),
(3, 'Angiologia'),
(54, 'Anestesiologia'),
(79, 'Cancerologia (oncologia)'),
(80, 'Tumores malignos ou câncer.'),
(81, 'Cardiologia'),
(82, 'Cirurgia Cardiovascular'),
(83, 'Cirurgia da Mão'),
(84, 'Cirurgia de Cabeça e Pescoço'),
(87, 'Cirurgia Geral'),
(88, 'Cirurgia Pediátrica'),
(89, 'Cirurgia Plástica'),
(90, 'Cirurgia Torácica'),
(91, 'Cirurgia Vascular'),
(92, 'Clínica Médica'),
(93, 'Coloproctologia'),
(94, 'Dermatologia'),
(95, 'Endocrinologia e Metabologia'),
(96, 'Tratamento das glândulas.'),
(97, 'Endoscopia'),
(99, 'Genética médica'),
(100, 'Geriatria'),
(102, 'Ginecologia e Obstetrícia'),
(103, 'Hematologia e Hemoterapia'),
(104, 'Homeopatia'),
(105, 'Infectologia'),
(106, 'Mastologia'),
(107, 'Medicina de Família e Comunidade'),
(108, 'Medicina do Tráfego'),
(109, 'Medicina Esportiva'),
(110, 'Medicina Física e Reabilitação'),
(115, 'Medicina Intensiva'),
(116, 'Medicina Legal'),
(117, 'Medicina Nuclear'),
(118, 'Medicina Preventiva e Social'),
(119, 'Nefrologia'),
(120, 'Neurocirurgia'),
(121, 'Neurologia'),
(122, 'Nutrologia'),
(123, 'Oftalmologia'),
(124, 'Ortopedia e Traumatologia'),
(126, 'Otorrinolaringologia'),
(128, 'Patologia Clínica/Medicina Laboratorial..'),
(130, 'Neonatologia'),
(131, 'Pneumologia'),
(132, 'Psiquiatria'),
(134, 'Radiologia e Diagnóstico por Imagem'),
(135, 'Radioterapia'),
(137, 'Reumatologia'),
(142, 'Urologia'),
(143, 'Cirurgia do Aparelho Digestório'),
(144, 'Gastroenterologia'),
(145, 'Pediatria'),
(146, 'Neonatologia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `exame_medicos`
--

CREATE TABLE `exame_medicos` (
  `id` int(11) NOT NULL,
  `exames` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `exame_medicos`
--

INSERT INTO `exame_medicos` (`id`, `exames`) VALUES
(3, 'Acetona'),
(4, 'Acido lático – lactato'),
(5, 'Acido úrico no sangue'),
(6, 'ACTH'),
(7, 'Albumina'),
(8, 'Alfa-1-antitripsina, dosagem no soro'),
(9, 'Alfafetoproteína'),
(10, 'Alterações do ferro e de sua capacidade de fixação'),
(11, 'Amilase na Urina'),
(12, 'Amilase no sangue'),
(13, 'Amilase ou alfa-amilase, isoenzimas'),
(14, 'Amniocentese e análise do líquido amniótico'),
(15, 'Análise de Gases Arteriais'),
(16, 'Análise de líquido sinovial'),
(17, 'Androstenediona'),
(18, 'Angiografia abdominal ou Arteriografia celíaca e mesentérica'),
(19, 'Angiografia cerebral'),
(20, 'Angiotomografia de aorta - abdominal e torácica'),
(21, 'Anticorpo anti-ilhota de langerhans'),
(22, 'Anticorpos anti-endomísio'),
(23, 'Anticorpos antiácido desoxirribonucleico'),
(24, 'Anticorpos antimitocondriais'),
(25, 'Anticorpos antimúsculo liso'),
(26, 'Anticorpos antitireoideanos'),
(27, 'Anticortex supra-renal'),
(28, 'Antiestreptolisina O'),
(29, 'Arteriografia de membros inferiores'),
(30, 'Arteriografia de membros inferiores'),
(31, 'Arteriografia seletiva renal'),
(32, 'Artroscopia'),
(33, 'Audiometria'),
(34, 'Auto-anticorpos'),
(35, 'Bilirrubina na urina'),
(36, 'Bilirrubina no sangue'),
(37, 'Biópsia de pulmão com agulha'),
(38, 'Biópsia hepática'),
(39, 'Biópsia por aspiração de um nódulo no pescoço'),
(40, 'Biópsia renal, Biópsia renal percutânea'),
(41, 'BNP – peptídeo natriurético cerebral'),
(42, 'CA 125'),
(43, 'CA 19.9'),
(44, 'Cálcio no sangue'),
(45, 'Cardiolipina, auto-anticorpos IgG'),
(46, 'CEA – antígeno carcinoembrionário'),
(47, 'Chlamydia trachomatis, cultura'),
(48, 'Chumbo no sangue'),
(49, 'Cintilografia miocárdica de perfusão'),
(50, 'Cintilografia óssea'),
(51, 'Cistografia'),
(52, 'Citogenética'),
(53, 'Citogenética – diagnóstico pré-natal'),
(54, 'Clearance de creatinina'),
(55, 'Clearance de Uréia'),
(56, 'Cloreto de sódio no suor'),
(57, 'Cloro no Sangue'),
(58, 'Colecistografía'),
(59, 'radiografia seriada da vesícula biliar.'),
(60, 'radiografia da vesícula biliar'),
(61, 'Colesterol total'),
(62, 'Colinesterase em etritrócitos'),
(63, 'Colonoscopia'),
(64, 'Complemento sérico'),
(65, 'Contagem de plaquetas'),
(66, 'Coombs indireto'),
(67, 'Coronariografia'),
(68, 'Cortisol plasmático'),
(69, 'Creatinina no sangue'),
(70, 'Creatinofosfoquinase ou CPK'),
(71, 'Criofibrinogênio'),
(72, 'Crioglobulinas'),
(73, 'Cromatina sexual'),
(74, 'Cultura bacteriológica do sangue'),
(75, 'Curva de tolerância a glicose'),
(76, 'Dengue, sorologia'),
(77, 'Densitometria Óssea'),
(78, 'Desidrogenase lática'),
(79, 'Diagnóstico laboratorial da Hepatite'),
(80, 'Digoxina no sangue'),
(81, 'Dímero D'),
(82, 'Dismorfismo eritrocitário, pesquisa na urina'),
(83, 'Doppler scan colorido arterial de membro inferior'),
(84, 'Doppler scan colorido arterial de membro superior'),
(85, 'Doppler scan colorido de vísceras abdominais'),
(86, 'Doppler scan de carótidas e vertebrais'),
(87, 'Doppler Scan Venoso'),
(88, 'Dosagem da hemoglobina fetal ou teste de Kleihauer-Betke'),
(89, 'Dosagem de Ácido Valpróico'),
(90, 'Dosagem de Benzodiazepínicos e similares'),
(91, 'Dosagem de Carbamazepina'),
(92, 'Dosagem de Carboxihemoglobina'),
(93, 'Dosagem de Fenitoína'),
(94, 'Dosagem de Glicose'),
(95, 'Dosagem de Opióides'),
(96, 'Dosagem de renina plasmática'),
(97, 'Ecocardiografia'),
(98, 'Eletrocardiograma'),
(99, 'Eletroforese de hemoglobina'),
(100, 'Eletromiografia'),
(101, 'Endoscopia'),
(102, 'Enema Opaco'),
(103, 'Eritropoetina'),
(104, 'Estudo isotópico cardíaco'),
(105, 'Estudo radiográfico por contraste do trato digestivo alto'),
(106, 'esofagograma seriado gastroduodenal'),
(107, 'trânsito intestinal alto'),
(108, 'Etanol no sangue'),
(109, 'Exame cromossômico, cariótipo, exame citogenético'),
(110, 'Exame parasitológico de fezes'),
(111, 'Fator antinúcleo'),
(112, 'Fator reumatóide'),
(113, 'Ferritina no sangue'),
(114, 'Ferro sérico'),
(115, 'Fibrinogênio plasmático'),
(116, 'Fibrose cística, estudo genético'),
(117, 'Fosfatase ácida'),
(118, 'Fosfatase alcalina'),
(119, 'Fosfatase alcalina neutrofílica ou leucocitária'),
(120, 'Fosfatos no sangue'),
(121, 'Fração C3 do complemento, ou C3'),
(122, 'Fração C4 do complemento, ou C4'),
(123, 'Fragilidade capilar'),
(124, 'Frutosamina'),
(125, 'Gama-glutamil transferase – GGT'),
(126, 'Gasometria Venosa'),
(127, 'Gastrina no sangue'),
(128, 'Glicemia pós prandial'),
(129, 'Glicohemoglobina'),
(130, 'Gordura nas fezes'),
(131, 'Hemograma'),
(132, 'Hemossedimentação'),
(133, 'Histerossalpingografia'),
(134, 'Histerossonografia'),
(135, 'HIV - Aids'),
(136, 'HIV - Aids'),
(137, 'HLA'),
(138, 'Holter de 24 horas'),
(139, 'Hormônio de Crescimento, no sangue. Hormônio somatotrófico'),
(140, 'Hormônio luteinizante no plasma'),
(141, 'Hormônio paratireoideano no sangue'),
(142, 'HPV – Captura Híbrida'),
(143, 'Imunofenotipagem'),
(144, 'Imunoglobulina E total'),
(145, 'Imunoglobulinas G, A e M no sangue'),
(146, 'Insulina no sangue'),
(147, 'Lipase'),
(148, 'Líquido cefalorraquídeo'),
(149, 'Lítio no sangue'),
(150, 'Magnésio no sangue'),
(151, 'Mamografia'),
(152, 'Manometria anorretal'),
(153, 'Manometria esofageana'),
(154, 'Marcadores de superfície Linfocitários'),
(155, 'Microalbuminúria'),
(156, 'Mielograma'),
(157, 'Monoteste – mononucleose'),
(158, 'Papanicolau'),
(159, 'Paracoccidiodomicose, sorologia'),
(160, 'Peptídeo C'),
(161, 'Pieleografia excretora ou Urografia excretora'),
(162, 'Potássio no sangue'),
(163, 'PPD – tuberculina'),
(164, 'Proteína C reativa'),
(165, 'Prova de lise ácida em soro acidificado'),
(166, 'Prova do laço'),
(167, 'Radiografia da Coluna Vertebral Cervical'),
(168, 'Radiografia da Coluna Vertebral Lombossacra'),
(169, 'Radiografia de bacia'),
(170, 'Radiografia de tórax'),
(171, 'Radiografia do Abdome'),
(172, 'Radiografia do Crânio'),
(173, 'Radiografia do Pé'),
(174, 'Radiografia mão e punhos para idade óssea'),
(175, 'Radioscopia'),
(176, 'Raio X da Perna'),
(177, 'Raio X do antebraço'),
(178, 'Raio X do Braço'),
(179, 'Raio X dos Seios da Face'),
(180, 'Reação de Polimerase em Cadeia'),
(181, 'Ressonância magnética'),
(182, 'Ressonância Magnética da Coluna'),
(183, 'Reticulócitos'),
(184, 'Salicilatos no sangue'),
(185, 'Sangue oculto nas fezes, pesquisa'),
(186, 'Tempo de coagulação e de retração do coágulo'),
(187, 'Tempo de sangria'),
(188, 'Tempo parcial de tromboplastina ativada'),
(189, 'Teofilina no sangue'),
(190, 'Teste combinado de função da hipófise anterior'),
(191, 'Teste de Esforço'),
(192, 'Teste de função plaquetária'),
(193, 'Teste de gravidez'),
(194, 'Teste de gravidez'),
(195, 'Teste de privação hídrica'),
(196, 'Teste de supressão com Dexametasona em dose baixa'),
(197, 'Teste de Supressão da Dexametasona em dose alta'),
(198, 'Teste de tolerância insulínica'),
(199, 'Teste do óxido nítrico'),
(200, 'Testosterona livre'),
(201, 'Tiroxina'),
(202, 'Tomografia computadorizada'),
(203, 'Tomografia computadorizada'),
(204, 'Tomografia computadorizada'),
(205, 'Tomografia computadorizada'),
(206, 'Tomografia Computadorizada dos Seios Paranasais'),
(207, 'Transaminase oxalacética – TGO'),
(208, 'Transaminase pirúvica – TGP'),
(209, 'Transferrina'),
(210, 'Tri iodo tironina'),
(211, 'Triglicérides'),
(212, 'Triptase mastocitária'),
(213, 'TSH'),
(214, 'Ultra-sonografia'),
(215, 'Ultra-sonografia'),
(216, 'Ultrassom Abdominal'),
(217, 'Ultrassom da Tireóide'),
(218, 'Ultrassom Pélvico'),
(219, 'Ultrassonografia da mama'),
(220, 'Uréia no sangue'),
(221, 'Uretrografia'),
(222, 'Urina'),
(223, 'Urocultura');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` text NOT NULL,
  `sobrenome` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `cpf` text NOT NULL,
  `carteira` text NOT NULL,
  `pws` varchar(200) NOT NULL,
  `sexo` text NOT NULL,
  `dnascimento` varchar(15) NOT NULL,
  `permissao` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `sobrenome`, `email`, `cpf`, `carteira`, `pws`, `sexo`, `dnascimento`, `permissao`) VALUES
(14, 'josimar', 'silva', 'josimar.os23@gmail.com', '12345678900', '01234567890', '$1$I43.xE..$9XVKm7x1pnVqZgREZnfWt/', 'masculino', '19/Outubro/1988', 0),
(15, 'teste', 'teste', 'teste@teste.com.br', '00123456789', '1234123412341234', '$1$nA2.kP3.$bSFjqcDIutMJL85G1trAj.', 'masculino', '1/04/1988', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `especialidades`
--
ALTER TABLE `especialidades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exame_medicos`
--
ALTER TABLE `exame_medicos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `especialidades`
--
ALTER TABLE `especialidades`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;
--
-- AUTO_INCREMENT for table `exame_medicos`
--
ALTER TABLE `exame_medicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
