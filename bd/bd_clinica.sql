# Host: localhost  (Version: 5.5.24-log)
# Date: 2013-09-19 19:54:17
# Generator: MySQL-Front 5.3  (Build 4.9)

/*!40101 SET NAMES utf8 */;

#
# Source for table "administrador"
#

DROP TABLE IF EXISTS `administrador`;
CREATE TABLE `administrador` (
  `cpfAdm` int(14) NOT NULL,
  `rgAdm` int(11) NOT NULL,
  `nomeAdm` varchar(70) NOT NULL,
  `sexoAdm` char(1) NOT NULL,
  `nascAdm` date NOT NULL,
  `telefoneResidencialAdm` int(12) DEFAULT NULL,
  `telefoneTrabAdm` int(12) DEFAULT NULL,
  `celularAdm` int(12) NOT NULL,
  `enderecoAdm` varchar(70) NOT NULL,
  `numAdm` int(5) NOT NULL,
  `complementoAdm` varchar(8) DEFAULT NULL,
  `cepAdm` int(10) NOT NULL,
  `bairroAdm` varchar(70) NOT NULL,
  `cidadeAdm` varchar(70) NOT NULL,
  `ufAdm` varchar(3) NOT NULL,
  `dataAdm` date NOT NULL,
  `usuarioAdm` varchar(70) NOT NULL,
  `senhaAdm` varchar(70) NOT NULL,
  `fotoAdm` int(11) DEFAULT NULL,
  PRIMARY KEY (`cpfAdm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "administrador"
#


#
# Source for table "estagiario"
#

DROP TABLE IF EXISTS `estagiario`;
CREATE TABLE `estagiario` (
  `cpfEstagiario` int(14) NOT NULL,
  `rgEstagiario` int(11) NOT NULL,
  `cpfAdm` int(11) NOT NULL,
  `nomeEstagiario` varchar(70) NOT NULL,
  `sexoEstagiario` char(1) NOT NULL,
  `nascEstagiario` date NOT NULL,
  `telefoneResidencialEstagiario` int(12) DEFAULT NULL,
  `telefoneTrabEstagiario` int(12) DEFAULT NULL,
  `celularEstagiario` int(12) DEFAULT NULL,
  `enderecoEstagiario` varchar(70) NOT NULL,
  `numEstagiario` int(5) NOT NULL,
  `complementoEstagiario` varchar(8) DEFAULT NULL,
  `cepEstagiario` int(10) NOT NULL,
  `bairroEstagiario` varchar(70) NOT NULL,
  `cidadeEstagiario` varchar(70) NOT NULL,
  `ufEstagiario` varchar(3) NOT NULL,
  `dataEstagiario` int(10) NOT NULL,
  `usuarioEstagiario` varchar(70) NOT NULL,
  `senhaEstagiario` int(70) NOT NULL,
  `fotoEstagiario` int(11) DEFAULT NULL,
  PRIMARY KEY (`cpfEstagiario`),
  KEY `estagiario_ibfk_1` (`cpfAdm`),
  CONSTRAINT `estagiario_ibfk_1` FOREIGN KEY (`cpfAdm`) REFERENCES `administrador` (`cpfAdm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "estagiario"
#


#
# Source for table "paciente"
#

DROP TABLE IF EXISTS `paciente`;
CREATE TABLE `paciente` (
  `cpfPaciente` int(14) NOT NULL,
  `cpfAdm` int(11) NOT NULL,
  `nomePaciente` varchar(70) NOT NULL,
  `sexoPaciente` char(1) NOT NULL,
  `nascPaciente` date NOT NULL,
  `telefoneResidencialPaciente` int(12) DEFAULT NULL,
  `telefoneTrabPaciente` int(12) DEFAULT NULL,
  `celularPaciente` int(12) DEFAULT NULL,
  `enderecoPaciente` varchar(70) NOT NULL,
  `numPaciente` int(5) NOT NULL,
  `complementoPaciente` varchar(8) DEFAULT NULL,
  `cepPaciente` int(10) NOT NULL,
  `bairroPaciente` varchar(70) NOT NULL,
  `cidadePaciente` varchar(70) NOT NULL,
  `ufPaciente` varchar(3) NOT NULL,
  `naturalidadePaciente` varchar(70) NOT NULL,
  `nacionalidadePaciente` varchar(70) NOT NULL,
  `estadoCivilPaciente` varchar(15) NOT NULL,
  `rgPaciente` int(9) NOT NULL,
  `representanteLegalPaciente` varchar(70) DEFAULT NULL,
  `profissaoPaciente` varchar(70) DEFAULT NULL,
  `dataCadastroDoPaciente` date NOT NULL,
  `racaPaciente` varchar(20) NOT NULL,
  `ocupacaoprofissionalPaciente` varchar(70) DEFAULT NULL,
  `municipioPaciente` varchar(70) NOT NULL,
  `fotoPaciente` int(11) DEFAULT NULL,
  PRIMARY KEY (`cpfPaciente`),
  KEY `paciente_ibfk_1` (`cpfAdm`),
  CONSTRAINT `paciente_ibfk_1` FOREIGN KEY (`cpfAdm`) REFERENCES `administrador` (`cpfAdm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "paciente"
#


#
# Source for table "supervisor"
#

DROP TABLE IF EXISTS `supervisor`;
CREATE TABLE `supervisor` (
  `cpfSupervisor` int(14) NOT NULL,
  `rgSupervisor` int(11) NOT NULL,
  `cpfAdm` int(11) NOT NULL,
  `nomeSupervisor` varchar(70) NOT NULL,
  `sexoSupervisor` char(1) NOT NULL,
  `nascSupervisor` date NOT NULL,
  `telefoneResidencialSupervisor` int(12) DEFAULT NULL,
  `telefoneTrabSupervisor` int(12) DEFAULT NULL,
  `celularSupervisor` int(12) DEFAULT NULL,
  `enderecoSupervisor` varchar(70) NOT NULL,
  `numSupervisor` int(5) NOT NULL,
  `complementoSupervisor` varchar(8) DEFAULT NULL,
  `cepSupervisor` int(10) NOT NULL,
  `bairroSupervisor` varchar(70) NOT NULL,
  `cidadeSupervisor` varchar(70) NOT NULL,
  `ufSupervisor` char(3) NOT NULL,
  `dataSupervisor` date NOT NULL,
  `usuarioSupervisor` varchar(70) NOT NULL,
  `senhaSupervisor` varchar(70) NOT NULL,
  `fotoSupervisor` int(11) DEFAULT NULL,
  PRIMARY KEY (`cpfSupervisor`),
  KEY `supervisor_ibfk_1` (`cpfAdm`),
  CONSTRAINT `supervisor_ibfk_1` FOREIGN KEY (`cpfAdm`) REFERENCES `administrador` (`cpfAdm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "supervisor"
#


#
# Source for table "consulta"
#

DROP TABLE IF EXISTS `consulta`;
CREATE TABLE `consulta` (
  `id_consul` int(11) NOT NULL AUTO_INCREMENT,
  `cpfestag` int(11) NOT NULL,
  `cpfsuperv` int(11) NOT NULL,
  `cpfpaci` int(11) NOT NULL,
  `dataAvaliacaoConsulta` date NOT NULL,
  `qpConsulta` longtext NOT NULL,
  `hdaConsulta` longtext NOT NULL,
  `hppConsulta` longtext NOT NULL,
  `examesConsulta` longtext,
  `complementaresConsulta` longtext,
  `fcConsulta` varchar(5) NOT NULL,
  `tratamentoInicialConsulta` longtext NOT NULL,
  `diagnosticoMedicoConsulta` longtext NOT NULL,
  `observacoesConsulta` longtext NOT NULL,
  `ttoConsulta` varchar(20) NOT NULL,
  `dataEvolucaoConsulta` int(10) NOT NULL,
  PRIMARY KEY (`id_consul`),
  KEY `cpfestag_idx` (`cpfestag`),
  KEY `cpfpaci_idx` (`cpfpaci`),
  KEY `cpfsuperv_idx` (`cpfsuperv`),
  CONSTRAINT `cpfestag` FOREIGN KEY (`cpfestag`) REFERENCES `estagiario` (`cpfEstagiario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `cpfpaci` FOREIGN KEY (`cpfpaci`) REFERENCES `paciente` (`cpfPaciente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `cpfsuperv` FOREIGN KEY (`cpfsuperv`) REFERENCES `supervisor` (`cpfSupervisor`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "consulta"
#


#
# Source for table "reumatologia"
#

DROP TABLE IF EXISTS `reumatologia`;
CREATE TABLE `reumatologia` (
  `id_reum` int(14) NOT NULL AUTO_INCREMENT,
  `id_consul` int(14) NOT NULL,
  `hs` longtext NOT NULL,
  `avds` longtext NOT NULL,
  `pa1` int(6) NOT NULL,
  `pa2` int(6) NOT NULL,
  `inspecao` longtext NOT NULL,
  `testeARticular` longtext NOT NULL,
  `testeMuscular` longtext NOT NULL,
  `testeEspecificoouEspaciais` longtext NOT NULL,
  `mensuracao` longtext NOT NULL,
  `perimetriaobjetivosDaAssistenciaFisioterapeuticahfarpalpacao` longtext NOT NULL,
  PRIMARY KEY (`id_reum`),
  KEY `id_consul` (`id_consul`),
  CONSTRAINT `reumatologia_ibfk_1` FOREIGN KEY (`id_consul`) REFERENCES `consulta` (`id_consul`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "reumatologia"
#


#
# Source for table "respiratorio"
#

DROP TABLE IF EXISTS `respiratorio`;
CREATE TABLE `respiratorio` (
  `id_resp` int(14) NOT NULL AUTO_INCREMENT,
  `id_consul` int(14) NOT NULL,
  `hs` longtext NOT NULL,
  `peso` int(3) NOT NULL,
  `pa1` int(6) NOT NULL,
  `pa2` int(6) NOT NULL,
  `atividadeLaboral` longtext NOT NULL,
  `coloracao` longtext NOT NULL,
  `perfusaoPeriferica` longtext NOT NULL,
  `presencaDeEdemas` longtext NOT NULL,
  `cabecaePescoco` longtext NOT NULL,
  `abdome` longtext NOT NULL,
  `padraoRespiratorio` longtext NOT NULL,
  `membrosInferiores` longtext NOT NULL,
  `auscultaPulmonar` longtext NOT NULL,
  `auscultaCardiaca` longtext NOT NULL,
  PRIMARY KEY (`id_resp`),
  KEY `id_consul` (`id_consul`),
  CONSTRAINT `respiratorio_ibfk_1` FOREIGN KEY (`id_consul`) REFERENCES `consulta` (`id_consul`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "respiratorio"
#


#
# Source for table "pediatria"
#

DROP TABLE IF EXISTS `pediatria`;
CREATE TABLE `pediatria` (
  `id_ped` int(14) NOT NULL AUTO_INCREMENT,
  `id_consul` int(11) NOT NULL DEFAULT '0',
  `etnia` varchar(14) NOT NULL,
  `temperatura` int(2) NOT NULL,
  `reflexosSuperficiais` longtext NOT NULL,
  `quantasGestacoes` int(3) NOT NULL,
  `quantosPartos` int(3) NOT NULL,
  `quantosAbortos` int(3) NOT NULL,
  `cuidadosPreNatais` int(3) NOT NULL,
  `usoMaternoaDrogas` char(1) NOT NULL,
  `nutricaoFetal` char(1) NOT NULL,
  `intercorrencias` varchar(5) NOT NULL,
  `tipoDeParto` varchar(4) NOT NULL,
  `duracaoDoParto` time NOT NULL,
  `indiceDeApgar` longtext NOT NULL,
  `houverompimentodabolsa` char(1) NOT NULL,
  `tempo` time NOT NULL,
  `alteracaoPesoAltura` char(1) NOT NULL,
  `passouMaisde48internado` char(1) NOT NULL,
  `comoestaaAmamencatao` char(1) NOT NULL,
  `hfar` char(1) NOT NULL,
  `diabetes` varchar(20) NOT NULL,
  `neurologica` varchar(20) NOT NULL,
  `cardiaco` varchar(20) NOT NULL,
  `doencasMentais` varchar(20) NOT NULL,
  `outras` longtext NOT NULL,
  `comportamentodeAltoRisco` char(1) NOT NULL,
  `nutricao` char(1) NOT NULL,
  `higiene` char(1) NOT NULL,
  `saneamento` char(1) NOT NULL,
  `endemianaComunidade` varchar(20) NOT NULL,
  `nivelIntelectualDosPais` char(1) NOT NULL,
  `rendaFamiliar` char(1) NOT NULL,
  `hdoDesenvolvimentoPsicomotor` char(1) NOT NULL,
  `auscutaCardiaca` longtext NOT NULL,
  `posturaEstaticaEmQuatroApoios` char(1) NOT NULL,
  `posturaEstaticaEmSemiAjoelhado` char(1) NOT NULL,
  `posturaEstaticaAjoelhado` char(1) NOT NULL,
  `posturaEstaticaOrtostatismo` char(1) NOT NULL,
  `testesMotores` char(1) NOT NULL,
  `reflexosArcaicos` varchar(5) NOT NULL,
  `reacoesProtetorasouEndireitamento` longtext NOT NULL,
  `sensibilidade` varchar(5) NOT NULL,
  `mmsDireita` varchar(5) NOT NULL,
  `nervosCranianos` longtext NOT NULL,
  `perimetria` longtext NOT NULL,
  `diagnosticoFisioterapeutico` longtext NOT NULL,
  `objetivosdaAssistenciaFisioterapetica` longtext NOT NULL,
  `InspecaoLocal` longtext NOT NULL,
  `inspecaoFacial` longtext NOT NULL,
  `inspecaoPalpacao` longtext NOT NULL,
  `reflexosProfundosEsquerdo` longtext NOT NULL,
  `posturaEstaticaEmPupy` char(1) NOT NULL,
  `reinternacao` char(1) NOT NULL,
  PRIMARY KEY (`id_ped`),
  KEY `id_consul` (`id_consul`),
  CONSTRAINT `pediatria_ibfk_1` FOREIGN KEY (`id_consul`) REFERENCES `consulta` (`id_consul`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "pediatria"
#


#
# Source for table "necrologia"
#

DROP TABLE IF EXISTS `necrologia`;
CREATE TABLE `necrologia` (
  `id_necro` int(14) NOT NULL AUTO_INCREMENT,
  `id_consul` int(14) NOT NULL,
  `dm` longtext NOT NULL,
  `hs` longtext NOT NULL,
  `hfam` longtext NOT NULL,
  `hfisiol` longtext NOT NULL,
  `adv_antes` longtext NOT NULL,
  `av_depois` longtext NOT NULL,
  `medicamentos` longtext NOT NULL,
  `pa1` int(6) NOT NULL,
  `pa2` int(6) NOT NULL,
  `auscultoPulmonar` longtext NOT NULL,
  `inspecao` longtext NOT NULL,
  `movimentoPassivo` longtext NOT NULL,
  `movimentoAtivo` longtext NOT NULL,
  `reflexoProfundos` longtext NOT NULL,
  `reflexosSuperficiais` longtext NOT NULL,
  `sensibilidade` longtext NOT NULL,
  `nervosCranianos` longtext NOT NULL,
  `linguagem` longtext NOT NULL,
  `memoria` longtext NOT NULL,
  `gnosias` longtext NOT NULL,
  `atencao` longtext NOT NULL,
  `testes` longtext NOT NULL,
  `praxias` longtext NOT NULL,
  `sincinesias` longtext NOT NULL,
  `manobras` longtext NOT NULL,
  `testesFuncionais` longtext NOT NULL,
  `marcha` longtext NOT NULL,
  `diagnosticos` longtext NOT NULL,
  `objetivos` longtext NOT NULL,
  `palpacao` longtext NOT NULL,
  `testesdeEquilibrio` longtext NOT NULL,
  PRIMARY KEY (`id_necro`),
  KEY `id_consul_idx` (`id_consul`),
  CONSTRAINT `id_consul` FOREIGN KEY (`id_consul`) REFERENCES `consulta` (`id_consul`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "necrologia"
#


#
# Source for table "desportiva"
#

DROP TABLE IF EXISTS `desportiva`;
CREATE TABLE `desportiva` (
  `id_desp` int(14) NOT NULL AUTO_INCREMENT,
  `id_consul` int(14) NOT NULL,
  `hs` longtext NOT NULL,
  `avds` longtext NOT NULL,
  `pa1` int(6) NOT NULL,
  `pa2` int(6) NOT NULL,
  `inspecao` longtext NOT NULL,
  `testeArticular` longtext NOT NULL,
  `testeMuscular` longtext NOT NULL,
  `mensuracao` longtext NOT NULL,
  `objetivosdaAssistenciaFisioterapeutica` longtext NOT NULL,
  `hfar` longtext NOT NULL,
  `palpacao` longtext NOT NULL,
  PRIMARY KEY (`id_desp`),
  KEY `id_consul` (`id_consul`),
  CONSTRAINT `desportiva_ibfk_1` FOREIGN KEY (`id_consul`) REFERENCES `consulta` (`id_consul`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "desportiva"
#


#
# Source for table "traumatologia"
#

DROP TABLE IF EXISTS `traumatologia`;
CREATE TABLE `traumatologia` (
  `id_traum` int(14) NOT NULL AUTO_INCREMENT,
  `id_consul` int(14) NOT NULL,
  `hs` longtext NOT NULL,
  `avds` longtext NOT NULL,
  `pa1` int(6) NOT NULL,
  `pa2` int(6) NOT NULL,
  `inspecao` longtext NOT NULL,
  `testeArticular` longtext NOT NULL,
  `testeMuscular` longtext NOT NULL,
  `testeEspecificoouEspaciais` longtext NOT NULL,
  `mensuracao` longtext NOT NULL,
  `perimetria` longtext NOT NULL,
  `objetivosdaAssistenciaFisioterapeutica` longtext NOT NULL,
  `hfar` longtext NOT NULL,
  `palpacao` longtext NOT NULL,
  PRIMARY KEY (`id_traum`),
  KEY `id_consul_idx` (`id_consul`),
  CONSTRAINT `traumatologia_ibfk_1` FOREIGN KEY (`id_consul`) REFERENCES `consulta` (`id_consul`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "traumatologia"
#

