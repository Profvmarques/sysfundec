# MySQL-Front 3.2  (Build 7.19)

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES 'latin1' */;

DROP DATABASE IF EXISTS `sysduque`;
CREATE DATABASE `sysduque` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `sysduque`;
CREATE TABLE `adm_acesso_usuario` (
  `idusuarios` int(11) NOT NULL default '0',
  `idmenu` int(11) NOT NULL default '0',
  `apagar` tinyint(4) default NULL,
  `alterar` tinyint(4) default NULL,
  `consultar` tinyint(4) default NULL,
  `incluir` tinyint(4) default NULL,
  `publico` int(11) NOT NULL default '1',
  PRIMARY KEY  (`idusuarios`,`idmenu`),
  KEY `idmenu` (`idmenu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `adm_acesso_usuario` VALUES (106,1,1,1,1,1,1);
INSERT INTO `adm_acesso_usuario` VALUES (106,2,1,1,1,1,1);
INSERT INTO `adm_acesso_usuario` VALUES (106,3,1,1,1,1,1);
INSERT INTO `adm_acesso_usuario` VALUES (106,4,1,1,1,1,1);
INSERT INTO `adm_acesso_usuario` VALUES (106,5,1,1,1,1,1);
INSERT INTO `adm_acesso_usuario` VALUES (106,6,1,1,1,1,1);
INSERT INTO `adm_acesso_usuario` VALUES (106,7,1,1,1,1,1);
INSERT INTO `adm_acesso_usuario` VALUES (106,8,1,1,1,1,1);
INSERT INTO `adm_acesso_usuario` VALUES (106,9,1,1,1,1,1);
INSERT INTO `adm_acesso_usuario` VALUES (106,10,1,1,1,1,1);
INSERT INTO `adm_acesso_usuario` VALUES (106,11,1,1,1,1,1);
INSERT INTO `adm_acesso_usuario` VALUES (106,12,1,1,1,1,1);
INSERT INTO `adm_acesso_usuario` VALUES (106,13,1,1,1,1,1);
INSERT INTO `adm_acesso_usuario` VALUES (106,14,1,1,1,1,1);
INSERT INTO `adm_acesso_usuario` VALUES (106,15,1,1,1,1,1);
INSERT INTO `adm_acesso_usuario` VALUES (106,16,1,1,1,1,1);
INSERT INTO `adm_acesso_usuario` VALUES (106,17,1,1,1,1,1);
INSERT INTO `adm_acesso_usuario` VALUES (106,18,1,1,1,1,1);
INSERT INTO `adm_acesso_usuario` VALUES (106,19,1,1,1,1,1);
INSERT INTO `adm_acesso_usuario` VALUES (106,20,1,1,1,1,1);
INSERT INTO `adm_acesso_usuario` VALUES (106,21,1,1,1,1,1);
INSERT INTO `adm_acesso_usuario` VALUES (106,22,1,1,1,1,1);
INSERT INTO `adm_acesso_usuario` VALUES (106,23,1,1,1,1,1);
INSERT INTO `adm_acesso_usuario` VALUES (106,24,1,1,1,1,1);
INSERT INTO `adm_acesso_usuario` VALUES (106,25,1,1,1,1,1);
INSERT INTO `adm_acesso_usuario` VALUES (106,26,1,1,1,1,1);
INSERT INTO `adm_acesso_usuario` VALUES (106,27,1,1,1,1,1);
INSERT INTO `adm_acesso_usuario` VALUES (106,28,1,1,1,1,1);
INSERT INTO `adm_acesso_usuario` VALUES (106,29,1,1,1,1,1);
INSERT INTO `adm_acesso_usuario` VALUES (106,30,0,1,0,1,1);

CREATE TABLE `adm_configuracao` (
  `idperfil` int(11) NOT NULL default '0',
  `idmenu` int(11) NOT NULL default '0',
  `apagar` tinyint(4) default NULL,
  `alterar` tinyint(4) default NULL,
  `consultar` tinyint(4) default NULL,
  `incluir` tinyint(4) default NULL,
  PRIMARY KEY  (`idperfil`,`idmenu`),
  KEY `idmenu` (`idmenu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `adm_configuracao` VALUES (1,1,1,1,1,1);
INSERT INTO `adm_configuracao` VALUES (1,2,1,1,1,1);
INSERT INTO `adm_configuracao` VALUES (1,3,1,1,1,1);
INSERT INTO `adm_configuracao` VALUES (1,4,1,1,1,1);
INSERT INTO `adm_configuracao` VALUES (1,5,1,1,1,1);
INSERT INTO `adm_configuracao` VALUES (1,6,1,1,1,1);
INSERT INTO `adm_configuracao` VALUES (1,7,1,1,1,1);
INSERT INTO `adm_configuracao` VALUES (1,8,1,1,1,1);
INSERT INTO `adm_configuracao` VALUES (1,9,1,1,1,1);
INSERT INTO `adm_configuracao` VALUES (1,10,1,1,1,1);
INSERT INTO `adm_configuracao` VALUES (1,11,1,1,1,1);
INSERT INTO `adm_configuracao` VALUES (1,12,1,1,1,1);
INSERT INTO `adm_configuracao` VALUES (1,13,1,1,1,1);
INSERT INTO `adm_configuracao` VALUES (1,14,1,1,1,1);
INSERT INTO `adm_configuracao` VALUES (1,15,1,1,1,1);
INSERT INTO `adm_configuracao` VALUES (1,16,1,1,1,1);
INSERT INTO `adm_configuracao` VALUES (1,17,1,1,1,1);
INSERT INTO `adm_configuracao` VALUES (1,18,1,1,1,1);
INSERT INTO `adm_configuracao` VALUES (1,19,1,1,1,1);
INSERT INTO `adm_configuracao` VALUES (1,20,1,1,1,1);
INSERT INTO `adm_configuracao` VALUES (1,21,1,1,1,1);
INSERT INTO `adm_configuracao` VALUES (1,22,1,1,1,1);
INSERT INTO `adm_configuracao` VALUES (1,23,1,1,1,1);
INSERT INTO `adm_configuracao` VALUES (1,24,1,1,1,1);
INSERT INTO `adm_configuracao` VALUES (1,25,1,1,1,1);
INSERT INTO `adm_configuracao` VALUES (1,26,1,1,1,1);
INSERT INTO `adm_configuracao` VALUES (1,27,1,1,1,1);
INSERT INTO `adm_configuracao` VALUES (1,28,1,1,1,1);
INSERT INTO `adm_configuracao` VALUES (1,29,1,1,1,1);
INSERT INTO `adm_configuracao` VALUES (1,30,1,1,1,1);
INSERT INTO `adm_configuracao` VALUES (2,1,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (2,2,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (2,3,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (2,4,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (2,5,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (2,6,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (2,7,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (2,8,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (2,9,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (2,10,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (2,11,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (2,12,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (2,13,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (2,14,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (2,15,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (2,16,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (2,17,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (2,18,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (2,19,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (2,20,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (2,21,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (2,22,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (2,23,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (2,24,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (2,25,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (2,26,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (2,27,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (2,28,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (2,29,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (2,30,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (3,1,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (3,2,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (3,3,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (3,4,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (3,5,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (3,6,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (3,7,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (3,8,1,1,1,1);
INSERT INTO `adm_configuracao` VALUES (3,9,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (3,10,0,0,0,1);
INSERT INTO `adm_configuracao` VALUES (3,11,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (3,12,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (3,13,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (3,14,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (3,15,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (3,16,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (3,17,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (3,18,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (3,19,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (3,20,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (3,21,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (3,22,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (3,23,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (3,24,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (3,25,1,1,1,1);
INSERT INTO `adm_configuracao` VALUES (3,26,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (3,27,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (3,28,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (3,29,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (3,30,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (4,1,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (4,2,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (4,3,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (4,4,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (4,5,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (4,6,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (4,7,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (4,8,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (4,9,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (4,10,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (4,11,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (4,12,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (4,13,1,1,1,1);
INSERT INTO `adm_configuracao` VALUES (4,14,1,1,1,1);
INSERT INTO `adm_configuracao` VALUES (4,15,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (4,16,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (4,17,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (4,18,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (4,19,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (4,20,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (4,21,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (4,22,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (4,23,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (4,24,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (4,25,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (4,26,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (4,27,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (4,28,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (4,29,0,0,0,0);
INSERT INTO `adm_configuracao` VALUES (4,30,0,0,0,0);

CREATE TABLE `adm_menu` (
  `idmenu` int(11) NOT NULL auto_increment,
  `idmodulos` int(11) default NULL,
  `id_pai` int(11) default NULL,
  `ordem_menu` int(11) default NULL,
  `imagem` varchar(200) default NULL,
  `nome_menu` varchar(100) default NULL,
  `class_css` varchar(50) default NULL,
  `link_externo` tinyint(4) NOT NULL default '0',
  `link_menu` varchar(100) default NULL,
  `publico` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`idmenu`),
  KEY `idmodulos` (`idmodulos`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

INSERT INTO `adm_menu` VALUES (1,1,0,2,'','Cadastro','icon-save',0,'#',1);
INSERT INTO `adm_menu` VALUES (2,1,1,21,NULL,'Administrador','',0,'default.php?pg=view/administrador/incluir.php&form=Cadastro de Administrador',1);
INSERT INTO `adm_menu` VALUES (3,1,3,23,'','Curso','',0,'default.php?pg=view/curso/incluir.php&form=Cadastro de Curso',1);
INSERT INTO `adm_menu` VALUES (4,1,4,20,NULL,'Disciplinas','',0,'visao/adm_sistemas/consulta.php',1);
INSERT INTO `adm_menu` VALUES (5,1,5,25,NULL,'Espaço','',0,'visao/usuarios/consulta.php',1);
INSERT INTO `adm_menu` VALUES (6,1,6,26,NULL,'Matrículas','',0,'visao/adm_menu/consulta.php',1);
INSERT INTO `adm_menu` VALUES (7,1,7,27,NULL,'Período Letivo','',0,'default.php?pg=view/periodoletivo/incluir.php&form=Cadastro de Período Letivo',1);
INSERT INTO `adm_menu` VALUES (8,1,8,28,'','Professor','',0,'default.php?pg=view/professor/consulta.php&form=Cadastro de Professor',1);
INSERT INTO `adm_menu` VALUES (9,2,0,1,NULL,'Painel de Controle','icon-dashboard',0,'#',1);
INSERT INTO `adm_menu` VALUES (10,2,1,11,NULL,'Acertos sistêmicos',NULL,0,'default.php?pg=view/correcao/consultar.php&form=Acertos Sistêmicos',1);
INSERT INTO `adm_menu` VALUES (11,3,0,3,NULL,'Consulta','icon-edit',0,'#',1);
INSERT INTO `adm_menu` VALUES (12,3,1,31,NULL,'Administrador',NULL,0,'default.php?pg=view/administrador/consulta.php&form=Consulta de Administrador',1);
INSERT INTO `adm_menu` VALUES (13,3,2,32,NULL,'Aluno',NULL,0,'default.php?pg=view/alunos/incluir.php&form=Consulta de Aluno',1);
INSERT INTO `adm_menu` VALUES (14,1,2,22,'','Aluno','',0,'default.php?pg=view/alunos/consulta.php&form=Cadastro de Aluno',1);
INSERT INTO `adm_menu` VALUES (15,2,2,12,NULL,'Configuração de perfil',NULL,0,'default.php?pg=view/adm_configuracao/incluir.php&form=Acesso por Perfil de Usuários',1);
INSERT INTO `adm_menu` VALUES (16,2,3,13,NULL,'Menu',NULL,0,'default.php?pg=view/adm_menu/incluir.php&form=Configuração de Menus&idmodulos=2',1);
INSERT INTO `adm_menu` VALUES (17,2,4,14,NULL,'Módulos',NULL,0,'default.php?pg=view/adm_modulos/consulta.php&form=Informação sobre Módulos',1);
INSERT INTO `adm_menu` VALUES (18,2,5,15,NULL,'Privilégio por usuários',NULL,0,'default.php?pg=view/adm_acesso_usuario/incluir.php&form=Acesso de usuarios',1);
INSERT INTO `adm_menu` VALUES (19,2,6,16,NULL,'Sistemas',NULL,0,'default.php?pg=view/adm_sistemas/incluir.php&form=Consulta de Sistemas',1);
INSERT INTO `adm_menu` VALUES (20,3,3,33,'','Curso','',0,'default.php?pg=view/curso/consulta.php&form=Consulta de Curso',1);
INSERT INTO `adm_menu` VALUES (21,3,4,34,NULL,'Disciplinas',NULL,0,'default.php?pg=view/disciplinas/incluir.php&form=Consulta de Disciplinas',1);
INSERT INTO `adm_menu` VALUES (22,3,5,35,NULL,'Espaços',NULL,0,'default.php?pg=view/alunos/incluir.php&form=Consulta de Espa‡os',1);
INSERT INTO `adm_menu` VALUES (23,3,6,36,NULL,'Matrículas',NULL,0,'default.php?pg=view/disciplinas/incluir.php&form=Consulta de Matr¡culas',1);
INSERT INTO `adm_menu` VALUES (24,3,7,37,'','Período Letivo','',0,'default.php?pg=view/periodoletivo/consulta.php&form=Consulta de Período Letivo',1);
INSERT INTO `adm_menu` VALUES (25,3,8,38,NULL,'Professor',NULL,0,'default.php?pg=view/disciplinas/incluir.php&form=Consulta de Professor',1);
INSERT INTO `adm_menu` VALUES (26,3,9,39,'','Tipo de Curso','',0,'default.php?pg=view/tipocurso/consulta.php&form=Consulta de Tipo de Curso',1);
INSERT INTO `adm_menu` VALUES (27,3,10,310,NULL,'Turmas',NULL,0,'default.php?pg=view/disciplinas/incluir.php&form=Consulta de Turmas',1);
INSERT INTO `adm_menu` VALUES (28,1,9,29,'','Tipo de Curso','',0,'default.php?pg=view/tipocurso/incluir.php&form=Cadastro de Tipo de Curso',1);
INSERT INTO `adm_menu` VALUES (29,1,10,210,NULL,'Turmas',NULL,0,NULL,1);
INSERT INTO `adm_menu` VALUES (30,2,7,17,'','Ouvidoria','',0,'default.php?pg=view/ouvidoria/incluir.php&form=Consulta da Ouvidoria',1);

CREATE TABLE `adm_modulo_gestor` (
  `idmodulos` int(11) NOT NULL default '0',
  `idusuarios` int(11) NOT NULL default '0',
  `dtreg` timestamp NULL default NULL,
  PRIMARY KEY  (`idmodulos`,`idusuarios`),
  KEY `idusuarios` (`idusuarios`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `adm_modulo_gestor` VALUES (1,106,NULL);
INSERT INTO `adm_modulo_gestor` VALUES (2,106,NULL);
INSERT INTO `adm_modulo_gestor` VALUES (3,106,NULL);

CREATE TABLE `adm_modulos` (
  `idmodulos` int(11) NOT NULL auto_increment,
  `idsistemas` int(11) default NULL,
  `sigla_modulo` varchar(20) default NULL,
  `nome` varchar(120) default NULL,
  `dtreg` timestamp NULL default NULL,
  PRIMARY KEY  (`idmodulos`),
  KEY `idsistemas` (`idsistemas`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `adm_modulos` VALUES (1,1,'CadGeral','Cadastros em Geral',NULL);
INSERT INTO `adm_modulos` VALUES (2,1,'Painel','Painel de configuração',NULL);
INSERT INTO `adm_modulos` VALUES (3,1,'ConsultGeral','Consultas em Geral',NULL);

CREATE TABLE `adm_sistemas` (
  `idsistemas` int(11) NOT NULL auto_increment,
  `descricao` varchar(120) default NULL,
  `dtreg` timestamp NULL default NULL,
  PRIMARY KEY  (`idsistemas`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `adm_sistemas` VALUES (1,'Sysduque','2012-05-21 18:10:58');

CREATE TABLE `alunos` (
  `idpessoas` int(11) NOT NULL default '0',
  `idestado_civil` int(11) default NULL,
  `idetnia` int(11) default NULL,
  `cpf` varchar(255) default NULL,
  `rgnumero` varchar(20) default NULL,
  `rgdataemissao` date default NULL,
  `rgorgaoemissor` varchar(50) default NULL,
  `certidaonascimentonumero` varchar(20) default NULL,
  `certidaonascimentolivro` varchar(20) default NULL,
  `certidaonascimentofolha` varchar(20) default NULL,
  `certidaonascimentocidade` varchar(20) default NULL,
  `certidaonascimentosubdistrito` varchar(30) default NULL,
  `certidaonascimentouf` varchar(2) default NULL,
  `certidaocasamentonumero` int(11) default NULL,
  `certidaocasamentolivro` varchar(20) default NULL,
  `certidaocasamentofolha` varchar(20) default NULL,
  `certidaocasamentocidade` varchar(20) default NULL,
  `certidaocasamentosubdistrito` varchar(20) default NULL,
  `certidaocasamentouf` varchar(2) default NULL,
  `estabcursoorigem` varchar(30) default NULL,
  `estabcursoorigemuf` varchar(2) default NULL,
  `curso_origem_ano_conclusao` int(11) default NULL,
  `modalidade_curso_origem` varchar(50) default NULL,
  `ctps` varchar(20) default NULL,
  `deficiencia_visual` int(11) NOT NULL default '0',
  `deficiencia_motora` int(11) NOT NULL default '0',
  `deficiencia_auditiva` int(11) NOT NULL default '0',
  `deficiencia_mental` int(11) NOT NULL default '0',
  `responsavel_legal` varchar(100) default NULL,
  `rg_responsavel` varchar(20) default NULL,
  `titulo_eleitor_numero` varchar(20) default NULL,
  `titulo_eleitor_data` date default NULL,
  `titulo_eleitor_zona` varchar(20) default NULL,
  `titulo_eleitor_secao` varchar(11) default NULL,
  `certificado_alistamento_militar_numero` int(11) default NULL,
  `certificado_alistamento_militar_serie` varchar(11) default NULL,
  `certificado_alistamento_militar_data` date default NULL,
  `certificado_alistamento_militar_rm` varchar(20) default NULL,
  `certificado_alistamento_militar_csm` varchar(20) default NULL,
  `certificado_reservista_numero` varchar(20) default NULL,
  `certificado_reservista_serie` varchar(20) default NULL,
  `certificado_reservista_data` date default NULL,
  `certificado_reservista_cat` varchar(20) default NULL,
  `certificado_reservista_rm` varchar(20) default NULL,
  `certificado_reservista_csm` varchar(20) default NULL,
  `carteira_trabalho` varchar(50) default NULL,
  `instituicao` varchar(50) NOT NULL,
  `modalidade` varchar(50) NOT NULL,
  `ano_conclusao` int(11) NOT NULL,
  `uf_ensino` varchar(2) NOT NULL,
  PRIMARY KEY  (`idpessoas`),
  KEY `idestado_civil` (`idestado_civil`),
  KEY `idetnia` (`idetnia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `alunos` VALUES (2,1,2,'09831133781','5565323263','2014-01-01','DETRAN','1223','1','1','DUQUE DE CAXIAS','1','AC',2,'2','2','2','2','AL','','',0,'','',0,0,0,0,'','','','0000-00-00','','',3,'3','2014-01-03','7','3','','','0000-00-00','','','','','','ENSINO MEDIO',2008,'AL');

CREATE TABLE `atividadesfuncionais` (
  `idatividadesfuncionais` int(11) NOT NULL auto_increment,
  `idfuncionarios` int(11) default NULL,
  `idfuncao` int(11) default NULL,
  `data_inicio` date default NULL,
  `data_termino` date default NULL,
  `dtreg` timestamp NULL default NULL,
  PRIMARY KEY  (`idatividadesfuncionais`),
  KEY `idfuncionarios` (`idfuncionarios`),
  KEY `idfuncao` (`idfuncao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `baseconhecimentos` (
  `idbaseconhecimentos` int(11) NOT NULL auto_increment,
  `sigla` varchar(20) default NULL,
  `descricao` varchar(50) default NULL,
  `email` varchar(100) default NULL,
  PRIMARY KEY  (`idbaseconhecimentos`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `baseconhecimentos` VALUES (1,'SECAD','SECRETARIA ACADÊMICA',NULL);
INSERT INTO `baseconhecimentos` VALUES (2,'GESET','GESET',NULL);

CREATE TABLE `classificacao` (
  `idclassificacao` int(11) NOT NULL auto_increment,
  `descricao` varchar(50) default NULL,
  PRIMARY KEY  (`idclassificacao`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `classificacao` VALUES (1,'Elogio');
INSERT INTO `classificacao` VALUES (2,'Sugestão');
INSERT INTO `classificacao` VALUES (3,'Reclamação');

CREATE TABLE `componentecurricular` (
  `idmatriz` int(11) NOT NULL auto_increment,
  `siglacurso` varchar(11) NOT NULL default '',
  `sigladisciplina` varchar(20) NOT NULL,
  `creditos` int(11) default NULL,
  `ch` int(11) default NULL,
  `periodo` int(11) default NULL,
  `idtipocomponente` int(11) default NULL,
  PRIMARY KEY  (`idmatriz`,`siglacurso`,`sigladisciplina`),
  KEY `siglacurso` (`siglacurso`),
  KEY `sigladisciplina` (`sigladisciplina`),
  KEY `idtipocomponente` (`idtipocomponente`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `componentecurricular` VALUES (1,'TPG','CONTGEREN',3,60,5,1);
INSERT INTO `componentecurricular` VALUES (1,'TPG','DIREMPR',3,60,1,1);
INSERT INTO `componentecurricular` VALUES (1,'TPG','ELET',3,60,2,1);
INSERT INTO `componentecurricular` VALUES (1,'TPG','EL_COMPHUM',3,60,2,2);
INSERT INTO `componentecurricular` VALUES (1,'TPG','EL_METTECDINGR',3,60,2,1);
INSERT INTO `componentecurricular` VALUES (1,'TPG','EMPREEND',2,40,4,1);
INSERT INTO `componentecurricular` VALUES (1,'TPG','ESTAPLIC',3,60,1,1);
INSERT INTO `componentecurricular` VALUES (1,'TPG','GESESTRPES',3,60,2,1);
INSERT INTO `componentecurricular` VALUES (1,'TPG','GESESTRTI',3,60,2,1);
INSERT INTO `componentecurricular` VALUES (1,'TPG','GESTAMBRESPSOC',3,60,4,1);
INSERT INTO `componentecurricular` VALUES (1,'TPG','GESTCOMSUPR',2,40,3,1);
INSERT INTO `componentecurricular` VALUES (1,'TPG','GESTCUSFORMPREC',3,60,5,1);
INSERT INTO `componentecurricular` VALUES (1,'TPG','GESTEMPR',3,60,5,1);
INSERT INTO `componentecurricular` VALUES (1,'TPG','GESTESTRPLAN',3,60,3,1);
INSERT INTO `componentecurricular` VALUES (1,'TPG','GESTFINTRIB',3,60,5,1);
INSERT INTO `componentecurricular` VALUES (1,'TPG','GESTMARK',3,60,4,1);
INSERT INTO `componentecurricular` VALUES (1,'TPG','GESTPROCORGA',2,40,3,1);
INSERT INTO `componentecurricular` VALUES (1,'TPG','GESTPROD',3,60,3,1);
INSERT INTO `componentecurricular` VALUES (1,'TPG','GESTPROJ',3,60,3,1);
INSERT INTO `componentecurricular` VALUES (1,'TPG','GESTQUAL',3,60,3,1);
INSERT INTO `componentecurricular` VALUES (1,'TPG','GESTTAL',3,60,2,1);
INSERT INTO `componentecurricular` VALUES (1,'TPG','GESTVENNEG',3,60,4,1);
INSERT INTO `componentecurricular` VALUES (1,'TPG','INFINSTR',3,60,1,1);
INSERT INTO `componentecurricular` VALUES (1,'TPG','INGLINSTR1',2,40,1,1);
INSERT INTO `componentecurricular` VALUES (1,'TPG','INGLINSTR2',2,40,2,1);
INSERT INTO `componentecurricular` VALUES (1,'TPG','INTADM',3,60,1,1);
INSERT INTO `componentecurricular` VALUES (1,'TPG','INTECO',2,40,1,1);
INSERT INTO `componentecurricular` VALUES (1,'TPG','INTEMOGER',3,60,2,1);
INSERT INTO `componentecurricular` VALUES (1,'TPG','LEGTRIB',2,40,5,1);
INSERT INTO `componentecurricular` VALUES (1,'TPG','LOGDISTR',3,60,3,1);
INSERT INTO `componentecurricular` VALUES (1,'TPG','MATAPLICADM',3,60,1,1);
INSERT INTO `componentecurricular` VALUES (1,'TPG','MATCOMFIN',3,60,5,1);
INSERT INTO `componentecurricular` VALUES (1,'TPG','METMATAPLPG1',3,60,4,1);
INSERT INTO `componentecurricular` VALUES (1,'TPG','METMATAPLPG2',3,60,5,1);
INSERT INTO `componentecurricular` VALUES (1,'TPG','METPECITEC',3,60,1,1);
INSERT INTO `componentecurricular` VALUES (1,'TPG','NEGINTER',2,40,4,1);
INSERT INTO `componentecurricular` VALUES (1,'TPG','ORCEMPANALINV',2,40,5,1);
INSERT INTO `componentecurricular` VALUES (1,'TPG','PESQANALMERC',3,60,4,1);
INSERT INTO `componentecurricular` VALUES (1,'TPG','PI_GESSTFIN',3,60,5,1);
INSERT INTO `componentecurricular` VALUES (1,'TPG','PI_PLANMARK',3,60,4,1);
INSERT INTO `componentecurricular` VALUES (1,'TPG','PI_PLANOPERLOG',3,60,3,1);
INSERT INTO `componentecurricular` VALUES (1,'TPG','PI_PLANRH',3,60,2,1);
INSERT INTO `componentecurricular` VALUES (1,'TPG','PLANCARQVT',3,60,2,1);
INSERT INTO `componentecurricular` VALUES (1,'TPG','PLANNEG',3,60,4,1);
INSERT INTO `componentecurricular` VALUES (1,'TPG','PORTINSTR',3,60,1,1);
INSERT INTO `componentecurricular` VALUES (1,'TPG','RECRSELPES',2,40,2,1);
INSERT INTO `componentecurricular` VALUES (1,'TPG','SISTINFGER',3,60,3,1);

CREATE TABLE `curso` (
  `siglacurso` varchar(11) NOT NULL default '',
  `descricao` varchar(255) default NULL,
  `idtipocurso` int(11) default NULL,
  PRIMARY KEY  (`siglacurso`),
  KEY `idtipocurso` (`idtipocurso`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `curso` VALUES ('TPG','TECNOLOGIA EM PROCESSOS GERENCIAIS',1);

CREATE TABLE `disciplinas` (
  `sigladisciplina` varchar(20) NOT NULL,
  `descricao` varchar(255) default NULL,
  PRIMARY KEY  (`sigladisciplina`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `disciplinas` VALUES ('CONTGEREN','CONTABILIDADE GERENCIAL');
INSERT INTO `disciplinas` VALUES ('DIREMPR','DIREITO EMPRESARIAL');
INSERT INTO `disciplinas` VALUES ('ELET','ELETIVA');
INSERT INTO `disciplinas` VALUES ('EL_COMPHUM','COMPORTAMENTO HUMANO');
INSERT INTO `disciplinas` VALUES ('EL_METTECDINGR','MÉTODOS E TÉCNICAS PARA DINÂMICA EM GRUPO');
INSERT INTO `disciplinas` VALUES ('EMPREEND','EMPREENDEDORISMO');
INSERT INTO `disciplinas` VALUES ('ESTAPLIC','ESTATÍSTICA APLICADA');
INSERT INTO `disciplinas` VALUES ('GESESTRPES','GESTÃO ESTRATÉGICA DE PESSOAS');
INSERT INTO `disciplinas` VALUES ('GESESTRTI','GESTÃO ESTRATÉGICA DA TI');
INSERT INTO `disciplinas` VALUES ('GESTAMBRESPSOC','GESTÃO AMBIENTAL E RESPONSABILIDADE SOCIAL');
INSERT INTO `disciplinas` VALUES ('GESTCOMSUPR','GESTÃO DE COMPRAS E SUPRIMENTOS');
INSERT INTO `disciplinas` VALUES ('GESTCUSFORMPREC','GESTÃO DE CUSTOS E FORMAÇÃO DE PREÇOS');
INSERT INTO `disciplinas` VALUES ('GESTEMPR','GESTÃO EMPRESARIAL');
INSERT INTO `disciplinas` VALUES ('GESTESTRPLAN','GESTÃO ESTRATÉGICA E PLANEJAMENTO');
INSERT INTO `disciplinas` VALUES ('GESTFINTRIB','GESTÃO FINANCEIRA E TRIBUTÁRIA');
INSERT INTO `disciplinas` VALUES ('GESTMARK','GESTÃO DE MARKETING');
INSERT INTO `disciplinas` VALUES ('GESTPROCORGA','GESTÃO DE PROCESSOS ORGANIZACIONAIS');
INSERT INTO `disciplinas` VALUES ('GESTPROD','GESTÃO DA PRODUÇÃO');
INSERT INTO `disciplinas` VALUES ('GESTPROJ','GESTÃO DE PROJETOS');
INSERT INTO `disciplinas` VALUES ('GESTQUAL','GESTÃO DA QUALIDADE');
INSERT INTO `disciplinas` VALUES ('GESTTAL','GESTÃO DE TALENTOS');
INSERT INTO `disciplinas` VALUES ('GESTVENNEG','GESTÃO DE VENDAS E NEGOCIAÇÕES');
INSERT INTO `disciplinas` VALUES ('INFINSTR','INFORMÁTICA INSTRUMENTAL');
INSERT INTO `disciplinas` VALUES ('INGLINSTR1','INGLÊS INSTRUMENTAL 1');
INSERT INTO `disciplinas` VALUES ('INGLINSTR2','INGLÊS INSTRUMENTAL 2');
INSERT INTO `disciplinas` VALUES ('INTADM','INTRODUÇÃO À ADMINISTRAÇÃO');
INSERT INTO `disciplinas` VALUES ('INTECO','INTRODUÇÃO À ECONOMIA');
INSERT INTO `disciplinas` VALUES ('INTEMOGER','INTELIGÊNCIA EMOCIONAL NO GERENCIAMENTO');
INSERT INTO `disciplinas` VALUES ('LEGTRIB','LEGISLAÇÃO TRIBUTÁRIA');
INSERT INTO `disciplinas` VALUES ('LOGDISTR','LOGÍSTICA E DISTRIBUIÇÃO');
INSERT INTO `disciplinas` VALUES ('MATAPLICADM','MATEMÁTICA APLICADA À ADMINISTRAÇÃO');
INSERT INTO `disciplinas` VALUES ('MATCOMFIN','MATEMÁTICA COMERCIAL E FINANCEIRA');
INSERT INTO `disciplinas` VALUES ('METMATAPLPG1','MÉTODOS MATEMÁTICOS APLICADOS A PROCESSOS GERENCIAIS I');
INSERT INTO `disciplinas` VALUES ('METMATAPLPG2','MÉTODOS MATEMÁTICOS APLICADOS A PROCESSOS GERENCIAIS II');
INSERT INTO `disciplinas` VALUES ('METPECITEC','METODOLOGIA DA PESQUISA CIENTÍFICO-TECNOLÓGICO');
INSERT INTO `disciplinas` VALUES ('NEGINTER','NEGÓCIOS INTERNACIONAIS');
INSERT INTO `disciplinas` VALUES ('ORCEMPANALINV','ORÇAMENTO EMPRESARIAL E ANÁLISE DE INVESTIMENTOS');
INSERT INTO `disciplinas` VALUES ('PESQANALMERC','PESQUISA E ANÁLISE DE MERCADO');
INSERT INTO `disciplinas` VALUES ('PI_GESSTFIN','PROJETO INTEGRADOR - GESTÃO DE FINANÇAS');
INSERT INTO `disciplinas` VALUES ('PI_PLANMARK','PROJETO INTEGRADOR - PLANEJAMENTO DE MARKETING');
INSERT INTO `disciplinas` VALUES ('PI_PLANOPERLOG','PROJETO INTEGRADOR - PLANEJAMENTO DE OPERAÇÕES E LOGÍSTICA');
INSERT INTO `disciplinas` VALUES ('PI_PLANRH','PROJETO INTEGRADOR - PLANEJAMENTO DE RH');
INSERT INTO `disciplinas` VALUES ('PLANCARQVT','PLANEJAMENTO DE CARREIRA E QUALIDADE DE VIDA NO TRABALHO');
INSERT INTO `disciplinas` VALUES ('PLANNEG','PLANO DE NEGÓCIOS');
INSERT INTO `disciplinas` VALUES ('PORTINSTR','PORTUGUÊS INSTRUMENTAL');
INSERT INTO `disciplinas` VALUES ('RECRSELPES','RECRUTAMENTO E SELEÇÃO DE PESSOAL');
INSERT INTO `disciplinas` VALUES ('SISTINFGER','SISTEMAS DE INFORMAÇÕES GERENCIAIS');

CREATE TABLE `estado_civil` (
  `idestado_civil` int(11) NOT NULL auto_increment,
  `descricao` varchar(50) default NULL,
  PRIMARY KEY  (`idestado_civil`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `estado_civil` VALUES (1,'CASADO(A)');
INSERT INTO `estado_civil` VALUES (2,'SOLTEIRO(A)');
INSERT INTO `estado_civil` VALUES (3,'OUTROS');

CREATE TABLE `etnia` (
  `idetnia` int(11) NOT NULL auto_increment,
  `descricao` varchar(50) default NULL,
  PRIMARY KEY  (`idetnia`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `etnia` VALUES (1,'AMARELA');
INSERT INTO `etnia` VALUES (2,'BRANCA');
INSERT INTO `etnia` VALUES (3,'INDÍGENA');
INSERT INTO `etnia` VALUES (4,'NEGRA');
INSERT INTO `etnia` VALUES (5,'PARDA');

CREATE TABLE `eventoperiodoletivo` (
  `idevento_periodo_letivo` int(11) NOT NULL auto_increment,
  `idperiodoletivo` int(11) default NULL,
  `idtipoevento` int(11) default NULL,
  `data` date default NULL,
  `descricao` varchar(255) default NULL,
  `dtreg` timestamp NULL default NULL,
  PRIMARY KEY  (`idevento_periodo_letivo`),
  KEY `idperiodoletivo` (`idperiodoletivo`),
  KEY `idtipoevento` (`idtipoevento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `exigedocumento` (
  `siglacurso` varchar(255) default NULL,
  `matricula_aluno` varchar(255) default NULL,
  `idtipodocumento` int(11) default NULL,
  `isento` varchar(255) default NULL,
  `dataentrega` date default NULL,
  KEY `siglacurso` (`siglacurso`),
  KEY `matricula_aluno` (`matricula_aluno`),
  KEY `idtipodocumento` (`idtipodocumento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `formaingresso` (
  `idformaingresso` int(11) NOT NULL auto_increment,
  `descricao` varchar(255) default NULL,
  PRIMARY KEY  (`idformaingresso`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO `formaingresso` VALUES (1,'CONCURSO COTA REGULAR');
INSERT INTO `formaingresso` VALUES (2,'CONCURSO COTA REDE PÚBLICA');
INSERT INTO `formaingresso` VALUES (3,'CONCURSO COTA COR NEGRA');
INSERT INTO `formaingresso` VALUES (4,'CONCURSO COTA DEFICIENTE');

CREATE TABLE `funcao` (
  `idfuncao` int(11) NOT NULL auto_increment,
  `funcao` varchar(70) default NULL,
  `descricao` longtext,
  `dtreg` timestamp NULL default NULL,
  PRIMARY KEY  (`idfuncao`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

INSERT INTO `funcao` VALUES (1,'DIRETOR GERAL',NULL,NULL);
INSERT INTO `funcao` VALUES (2,'COORDENADOR ACADÊMICO AUXILIAR',NULL,NULL);
INSERT INTO `funcao` VALUES (3,'DIRETOR(A) ADJUNTO(A)',NULL,NULL);
INSERT INTO `funcao` VALUES (4,'COORDENADOR(A) DE ESTÁGIO',NULL,NULL);
INSERT INTO `funcao` VALUES (5,'COORDENADOR DE TCC',NULL,NULL);
INSERT INTO `funcao` VALUES (6,'COORDENADOR GESTEC',NULL,NULL);
INSERT INTO `funcao` VALUES (7,'COORDENADOR ACADÊMICO',NULL,NULL);
INSERT INTO `funcao` VALUES (8,'COORDENADORA DE EXTENSÃO E PESQUISA',NULL,NULL);
INSERT INTO `funcao` VALUES (9,'SECRETARIA ACADÊMICA',NULL,NULL);
INSERT INTO `funcao` VALUES (10,'AUXILIAR DE SECRETARIA',NULL,NULL);
INSERT INTO `funcao` VALUES (11,'COORDENADOR(A) DO NADD',NULL,NULL);
INSERT INTO `funcao` VALUES (12,'AUXILIAR DE BIBLIOTECA',NULL,NULL);
INSERT INTO `funcao` VALUES (13,'AUXILIAR DE COORDENAÇÃO',NULL,NULL);
INSERT INTO `funcao` VALUES (14,'AUXILIAR DE DIREÇÃO',NULL,NULL);
INSERT INTO `funcao` VALUES (15,'WEB DEVELOPER',NULL,NULL);
INSERT INTO `funcao` VALUES (16,'TÉCNICO DE INFORMÁTICA',NULL,NULL);

CREATE TABLE `funcionarios` (
  `idfuncionarios` int(11) NOT NULL auto_increment,
  `idpessoas` int(11) default NULL,
  PRIMARY KEY  (`idfuncionarios`),
  KEY `idpessoas` (`idpessoas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `inscricao` (
  `idturma` int(11) NOT NULL default '0',
  `matricula_aluno` int(11) NOT NULL default '0',
  `data_inscricao` date default NULL,
  `nota1` decimal(10,2) default NULL,
  `falta_api` int(11) default NULL,
  `nota2` decimal(10,2) default NULL,
  `falta_apii` int(11) default NULL,
  `mediafinal` decimal(10,2) default NULL,
  `situacao` varchar(255) default NULL,
  PRIMARY KEY  (`idturma`,`matricula_aluno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `itemprotocolo` (
  `iditemprotocolo` int(11) NOT NULL auto_increment,
  `protocolo` int(11) default NULL,
  `resposta` longtext,
  `idusuarios` int(11) default NULL,
  `dtreg` timestamp NULL default NULL,
  PRIMARY KEY  (`iditemprotocolo`),
  UNIQUE KEY `iditemprotocolo` (`iditemprotocolo`),
  KEY `protocolo` (`protocolo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `logs` (
  `idlogs` int(11) unsigned NOT NULL auto_increment,
  `idusuarios` int(11) default NULL,
  `queryexecutada` longtext NOT NULL,
  `dtreg` timestamp NULL default NULL,
  `nome_tabela` varchar(50) default NULL,
  `acao` varchar(50) default NULL,
  PRIMARY KEY  (`idlogs`),
  KEY `idusuarios` (`idusuarios`)
) ENGINE=InnoDB AUTO_INCREMENT=286 DEFAULT CHARSET=latin1;

INSERT INTO `logs` VALUES (1,106,'insert into usuarios(login,senha,situacao,idperfil,dtreg)values(\"aluno\",\"123\",\"SIM\",\"3\",\"2014-01-12 16:49:21\")','2014-01-12 16:49:21','usuarios','Inserir');
INSERT INTO `logs` VALUES (2,106,'insert into pessoas(nome,sexo,endereco,bairro,cidade,cep,uf,nascimento,nacionalidade,telefone,celular,email,foto,idusuarios)\r\n            values(\"VINÃ­CIUS MARQUES DA SILVA FERREIRA\",\"M\",\"RUA LAURINDO RABELO, NÂ° 95 CASA 02\",\"DOUTOR LAUREANO\",\"DUQUE DE CAXIAS\",\"25060470\",\"RJ\",\"1983-01-02\",\"BRASILEIRA\",\r\n                \"(21) 2673-1597\",\"(21) 98717-9672\",\"vinimars1@gmail.com\",\"\",\"137\")','2014-01-12 16:49:21','pessoas','Inserir');
INSERT INTO `logs` VALUES (3,106,'insert into alunos(idpessoas,idestado_civil,idetnia,cpf,rgnumero,rgdataemissao,rgorgaoemissor,certidaonascimentonumero,certidaonascimentolivro,certidaonascimentofolha,certidaonascimentocidade,certidaonascimentosubdistrito,certidaonascimentouf,certidaocasamentonumero,certidaocasamentolivro,certidaocasamentofolha,certidaocasamentocidade,certidaocasamentosubdistrito,certidaocasamentouf,estabcursoorigem,estabcursoorigemuf,curso_origem_ano_conclusao,modalidade_curso_origem,ctps,deficiencia_visual,deficiencia_motora,deficiencia_auditiva,deficiencia_mental,responsavel_legal,rg_responsavel,titulo_eleitor_numero,titulo_eleitor_data,titulo_eleitor_zona,titulo_eleitor_secao,certificado_alistamento_militar_numero,certificado_alistamento_militar_serie,certificado_alistamento_militar_data,certificado_alistamento_militar_rm,certificado_alistamento_militar_csm,certificado_reservista_numero,certificado_reservista_serie,certificado_reservista_data,certificado_reservista_cat,certificado_reservista_rm,certificado_reservista_csm,carteira_trabalho,inistituicao,modalidade,ano_conclusao,uf_ensino) values(\"2\",\"1\",\"2\",\"09831133781\",\"5565323263\",\"2014-01-01\",\"DETRAN\",\"22\",\"1\",\"1\",\"DUQUE DE CAXIAS\",\"1\",\"RJ\",\"2\",\"2\",\"2\",\"2\",\"2\",\"AC\",\"\",\"\",\"\",\"\",\"\",\"\",\"1\",\"1\",\"\",\"\",\"\",\"5\",\"2014-02-28\",\"5\",\"5\",\"3\",\"3\",\"2014-01-03\",\"7\",\"--3\",\"4\",\"\",\"2014-01-30\",\"\",\"99\",\"\",\"777777777777\",\"\",\"ENSINO MEDIO\",\"2008\",\"AL\")','2014-01-12 16:49:21','alunos','Inserir');
INSERT INTO `logs` VALUES (4,106,'insert into matriculaaluno(matricula_aluno,idpessoas,siglacurso,idmatriz,\r\n            idperiodoletivo,idsituacao_matricula,idformaingresso,data_matricula,\r\n            idturno, pontos_concursos, classificacao_concurso, data_conclusao) \r\n            values(\"34566\",\"2\",\"TPG\",\"1\",\r\n                \"2\",\"1\",\"3\",\"2014-01-09\"\r\n                    ,\"1\",\"88\",\"77\",\"--\")','2014-01-12 16:49:21','matriculaaluno','Inserir');
INSERT INTO `logs` VALUES (5,106,'insert into ocorrencias(idusuarios,descricao,funcionalidade,data_hora,situacao) \r\n            values(\"106\",\"REALIZADO CADASTRO DO ALUNO VINÍCIUS MARQUES DA SILVA FERREIRA PELO USUÁRIO <B>SYSDUQUE</B>\",\"CADASTRO DE NOVO ALUNO\",\"2014-01-12 16:49:21\",\"A VALIDAR\")','2014-01-12 16:49:21','Ocorrencias','Inserir');
INSERT INTO `logs` VALUES (6,106,'update adm_configuracao set incluir=\"\",\r\n            consultar=\"\",alterar=\"\",apagar=\"\" where idperfil=\"3\" and idmenu=\"1\"','2014-01-12 22:48:19','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (7,106,'update adm_acesso_usuario set apagar=\"\",alterar=\"\",consultar=\"\",incluir=\"\",publico=\"\" \r\n            where idmenu=\"1\" and idusuarios=\"137\"','2014-01-12 22:48:19','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (8,106,'update adm_configuracao set incluir=\"\",\r\n            consultar=\"\",alterar=\"\",apagar=\"\" where idperfil=\"3\" and idmenu=\"2\"','2014-01-12 22:48:19','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (9,106,'update adm_acesso_usuario set apagar=\"\",alterar=\"\",consultar=\"\",incluir=\"\",publico=\"\" \r\n            where idmenu=\"2\" and idusuarios=\"137\"','2014-01-12 22:48:19','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (10,106,'update adm_configuracao set incluir=\"\",\r\n            consultar=\"\",alterar=\"\",apagar=\"\" where idperfil=\"3\" and idmenu=\"14\"','2014-01-12 22:48:19','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (11,106,'update adm_acesso_usuario set apagar=\"\",alterar=\"\",consultar=\"\",incluir=\"\",publico=\"\" \r\n            where idmenu=\"14\" and idusuarios=\"137\"','2014-01-12 22:48:19','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (12,106,'update adm_configuracao set incluir=\"\",\r\n            consultar=\"\",alterar=\"\",apagar=\"\" where idperfil=\"3\" and idmenu=\"3\"','2014-01-12 22:48:19','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (13,106,'update adm_acesso_usuario set apagar=\"\",alterar=\"\",consultar=\"\",incluir=\"\",publico=\"\" \r\n            where idmenu=\"3\" and idusuarios=\"137\"','2014-01-12 22:48:19','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (14,106,'update adm_configuracao set incluir=\"\",\r\n            consultar=\"\",alterar=\"\",apagar=\"\" where idperfil=\"3\" and idmenu=\"4\"','2014-01-12 22:48:19','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (15,106,'update adm_acesso_usuario set apagar=\"\",alterar=\"\",consultar=\"\",incluir=\"\",publico=\"\" \r\n            where idmenu=\"4\" and idusuarios=\"137\"','2014-01-12 22:48:19','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (16,106,'update adm_configuracao set incluir=\"\",\r\n            consultar=\"\",alterar=\"\",apagar=\"\" where idperfil=\"3\" and idmenu=\"5\"','2014-01-12 22:48:19','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (17,106,'update adm_acesso_usuario set apagar=\"\",alterar=\"\",consultar=\"\",incluir=\"\",publico=\"\" \r\n            where idmenu=\"5\" and idusuarios=\"137\"','2014-01-12 22:48:19','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (18,106,'update adm_configuracao set incluir=\"\",\r\n            consultar=\"\",alterar=\"\",apagar=\"\" where idperfil=\"3\" and idmenu=\"6\"','2014-01-12 22:48:19','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (19,106,'update adm_acesso_usuario set apagar=\"\",alterar=\"\",consultar=\"\",incluir=\"\",publico=\"\" \r\n            where idmenu=\"6\" and idusuarios=\"137\"','2014-01-12 22:48:19','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (20,106,'update adm_configuracao set incluir=\"\",\r\n            consultar=\"\",alterar=\"\",apagar=\"\" where idperfil=\"3\" and idmenu=\"7\"','2014-01-12 22:48:19','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (21,106,'update adm_acesso_usuario set apagar=\"\",alterar=\"\",consultar=\"\",incluir=\"\",publico=\"\" \r\n            where idmenu=\"7\" and idusuarios=\"137\"','2014-01-12 22:48:19','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (22,106,'update adm_configuracao set incluir=\"on\",\r\n            consultar=\"on\",alterar=\"on\",apagar=\"on\" where idperfil=\"3\" and idmenu=\"8\"','2014-01-12 22:48:19','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (23,106,'update adm_acesso_usuario set apagar=\"on\",alterar=\"on\",consultar=\"on\",incluir=\"on\",publico=\"\" \r\n            where idmenu=\"8\" and idusuarios=\"137\"','2014-01-12 22:48:19','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (24,106,'update adm_configuracao set incluir=\"\",\r\n            consultar=\"\",alterar=\"\",apagar=\"\" where idperfil=\"3\" and idmenu=\"28\"','2014-01-12 22:48:19','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (25,106,'update adm_acesso_usuario set apagar=\"\",alterar=\"\",consultar=\"\",incluir=\"\",publico=\"\" \r\n            where idmenu=\"28\" and idusuarios=\"137\"','2014-01-12 22:48:19','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (26,106,'update adm_configuracao set incluir=\"\",\r\n            consultar=\"\",alterar=\"\",apagar=\"\" where idperfil=\"3\" and idmenu=\"29\"','2014-01-12 22:48:20','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (27,106,'update adm_acesso_usuario set apagar=\"\",alterar=\"\",consultar=\"\",incluir=\"\",publico=\"\" \r\n            where idmenu=\"29\" and idusuarios=\"137\"','2014-01-12 22:48:20','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (28,106,'update adm_configuracao set incluir=\"\",\r\n            consultar=\"\",alterar=\"\",apagar=\"\" where idperfil=\"3\" and idmenu=\"9\"','2014-01-12 22:48:20','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (29,106,'update adm_acesso_usuario set apagar=\"\",alterar=\"\",consultar=\"\",incluir=\"\",publico=\"\" \r\n            where idmenu=\"9\" and idusuarios=\"137\"','2014-01-12 22:48:20','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (30,106,'update adm_configuracao set incluir=\"on\",\r\n            consultar=\"\",alterar=\"\",apagar=\"\" where idperfil=\"3\" and idmenu=\"10\"','2014-01-12 22:48:20','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (31,106,'update adm_acesso_usuario set apagar=\"\",alterar=\"\",consultar=\"\",incluir=\"on\",publico=\"\" \r\n            where idmenu=\"10\" and idusuarios=\"137\"','2014-01-12 22:48:20','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (32,106,'update adm_configuracao set incluir=\"\",\r\n            consultar=\"\",alterar=\"\",apagar=\"\" where idperfil=\"3\" and idmenu=\"15\"','2014-01-12 22:48:20','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (33,106,'update adm_acesso_usuario set apagar=\"\",alterar=\"\",consultar=\"\",incluir=\"\",publico=\"\" \r\n            where idmenu=\"15\" and idusuarios=\"137\"','2014-01-12 22:48:20','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (34,106,'update adm_configuracao set incluir=\"\",\r\n            consultar=\"\",alterar=\"\",apagar=\"\" where idperfil=\"3\" and idmenu=\"16\"','2014-01-12 22:48:20','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (35,106,'update adm_acesso_usuario set apagar=\"\",alterar=\"\",consultar=\"\",incluir=\"\",publico=\"\" \r\n            where idmenu=\"16\" and idusuarios=\"137\"','2014-01-12 22:48:20','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (36,106,'update adm_configuracao set incluir=\"\",\r\n            consultar=\"\",alterar=\"\",apagar=\"\" where idperfil=\"3\" and idmenu=\"17\"','2014-01-12 22:48:20','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (37,106,'update adm_acesso_usuario set apagar=\"\",alterar=\"\",consultar=\"\",incluir=\"\",publico=\"\" \r\n            where idmenu=\"17\" and idusuarios=\"137\"','2014-01-12 22:48:20','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (38,106,'update adm_configuracao set incluir=\"\",\r\n            consultar=\"\",alterar=\"\",apagar=\"\" where idperfil=\"3\" and idmenu=\"18\"','2014-01-12 22:48:20','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (39,106,'update adm_acesso_usuario set apagar=\"\",alterar=\"\",consultar=\"\",incluir=\"\",publico=\"\" \r\n            where idmenu=\"18\" and idusuarios=\"137\"','2014-01-12 22:48:20','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (40,106,'update adm_configuracao set incluir=\"\",\r\n            consultar=\"\",alterar=\"\",apagar=\"\" where idperfil=\"3\" and idmenu=\"19\"','2014-01-12 22:48:20','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (41,106,'update adm_acesso_usuario set apagar=\"\",alterar=\"\",consultar=\"\",incluir=\"\",publico=\"\" \r\n            where idmenu=\"19\" and idusuarios=\"137\"','2014-01-12 22:48:20','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (42,106,'update adm_configuracao set incluir=\"\",\r\n            consultar=\"\",alterar=\"\",apagar=\"\" where idperfil=\"3\" and idmenu=\"30\"','2014-01-12 22:48:20','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (43,106,'update adm_acesso_usuario set apagar=\"\",alterar=\"\",consultar=\"\",incluir=\"\",publico=\"\" \r\n            where idmenu=\"30\" and idusuarios=\"137\"','2014-01-12 22:48:20','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (44,106,'update adm_configuracao set incluir=\"\",\r\n            consultar=\"\",alterar=\"\",apagar=\"\" where idperfil=\"3\" and idmenu=\"11\"','2014-01-12 22:48:20','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (45,106,'update adm_acesso_usuario set apagar=\"\",alterar=\"\",consultar=\"\",incluir=\"\",publico=\"\" \r\n            where idmenu=\"11\" and idusuarios=\"137\"','2014-01-12 22:48:20','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (46,106,'update adm_configuracao set incluir=\"\",\r\n            consultar=\"\",alterar=\"\",apagar=\"\" where idperfil=\"3\" and idmenu=\"12\"','2014-01-12 22:48:20','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (47,106,'update adm_acesso_usuario set apagar=\"\",alterar=\"\",consultar=\"\",incluir=\"\",publico=\"\" \r\n            where idmenu=\"12\" and idusuarios=\"137\"','2014-01-12 22:48:20','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (48,106,'update adm_configuracao set incluir=\"\",\r\n            consultar=\"\",alterar=\"\",apagar=\"\" where idperfil=\"3\" and idmenu=\"13\"','2014-01-12 22:48:20','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (49,106,'update adm_acesso_usuario set apagar=\"\",alterar=\"\",consultar=\"\",incluir=\"\",publico=\"\" \r\n            where idmenu=\"13\" and idusuarios=\"137\"','2014-01-12 22:48:20','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (50,106,'update adm_configuracao set incluir=\"\",\r\n            consultar=\"\",alterar=\"\",apagar=\"\" where idperfil=\"3\" and idmenu=\"20\"','2014-01-12 22:48:20','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (51,106,'update adm_acesso_usuario set apagar=\"\",alterar=\"\",consultar=\"\",incluir=\"\",publico=\"\" \r\n            where idmenu=\"20\" and idusuarios=\"137\"','2014-01-12 22:48:20','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (52,106,'update adm_configuracao set incluir=\"\",\r\n            consultar=\"\",alterar=\"\",apagar=\"\" where idperfil=\"3\" and idmenu=\"21\"','2014-01-12 22:48:20','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (53,106,'update adm_acesso_usuario set apagar=\"\",alterar=\"\",consultar=\"\",incluir=\"\",publico=\"\" \r\n            where idmenu=\"21\" and idusuarios=\"137\"','2014-01-12 22:48:20','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (54,106,'update adm_configuracao set incluir=\"\",\r\n            consultar=\"\",alterar=\"\",apagar=\"\" where idperfil=\"3\" and idmenu=\"22\"','2014-01-12 22:48:20','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (55,106,'update adm_acesso_usuario set apagar=\"\",alterar=\"\",consultar=\"\",incluir=\"\",publico=\"\" \r\n            where idmenu=\"22\" and idusuarios=\"137\"','2014-01-12 22:48:20','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (56,106,'update adm_configuracao set incluir=\"\",\r\n            consultar=\"\",alterar=\"\",apagar=\"\" where idperfil=\"3\" and idmenu=\"23\"','2014-01-12 22:48:20','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (57,106,'update adm_acesso_usuario set apagar=\"\",alterar=\"\",consultar=\"\",incluir=\"\",publico=\"\" \r\n            where idmenu=\"23\" and idusuarios=\"137\"','2014-01-12 22:48:20','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (58,106,'update adm_configuracao set incluir=\"\",\r\n            consultar=\"\",alterar=\"\",apagar=\"\" where idperfil=\"3\" and idmenu=\"24\"','2014-01-12 22:48:20','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (59,106,'update adm_acesso_usuario set apagar=\"\",alterar=\"\",consultar=\"\",incluir=\"\",publico=\"\" \r\n            where idmenu=\"24\" and idusuarios=\"137\"','2014-01-12 22:48:20','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (60,106,'update adm_configuracao set incluir=\"on\",\r\n            consultar=\"on\",alterar=\"on\",apagar=\"on\" where idperfil=\"3\" and idmenu=\"25\"','2014-01-12 22:48:20','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (61,106,'update adm_acesso_usuario set apagar=\"on\",alterar=\"on\",consultar=\"on\",incluir=\"on\",publico=\"\" \r\n            where idmenu=\"25\" and idusuarios=\"137\"','2014-01-12 22:48:20','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (62,106,'update adm_configuracao set incluir=\"\",\r\n            consultar=\"\",alterar=\"\",apagar=\"\" where idperfil=\"3\" and idmenu=\"26\"','2014-01-12 22:48:20','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (63,106,'update adm_acesso_usuario set apagar=\"\",alterar=\"\",consultar=\"\",incluir=\"\",publico=\"\" \r\n            where idmenu=\"26\" and idusuarios=\"137\"','2014-01-12 22:48:20','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (64,106,'update adm_configuracao set incluir=\"\",\r\n            consultar=\"\",alterar=\"\",apagar=\"\" where idperfil=\"3\" and idmenu=\"27\"','2014-01-12 22:48:20','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (65,106,'update adm_acesso_usuario set apagar=\"\",alterar=\"\",consultar=\"\",incluir=\"\",publico=\"\" \r\n            where idmenu=\"27\" and idusuarios=\"137\"','2014-01-12 22:48:20','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (66,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"1\"','2014-01-12 22:49:56','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (67,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"1\" and idusuarios=\"137\"','2014-01-12 22:49:56','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (68,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"2\"','2014-01-12 22:49:56','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (69,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"2\" and idusuarios=\"137\"','2014-01-12 22:49:56','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (70,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"14\"','2014-01-12 22:49:56','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (71,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"14\" and idusuarios=\"137\"','2014-01-12 22:49:56','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (72,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"3\"','2014-01-12 22:49:56','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (73,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"3\" and idusuarios=\"137\"','2014-01-12 22:49:56','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (74,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"4\"','2014-01-12 22:49:57','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (75,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"4\" and idusuarios=\"137\"','2014-01-12 22:49:57','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (76,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"5\"','2014-01-12 22:49:57','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (77,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"5\" and idusuarios=\"137\"','2014-01-12 22:49:57','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (78,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"6\"','2014-01-12 22:49:57','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (79,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"6\" and idusuarios=\"137\"','2014-01-12 22:49:57','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (80,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"7\"','2014-01-12 22:49:57','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (81,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"7\" and idusuarios=\"137\"','2014-01-12 22:49:57','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (82,106,'update adm_configuracao set incluir=\"1\",\r\n            consultar=\"1\",alterar=\"1\",apagar=\"1\" where idperfil=\"3\" and idmenu=\"8\"','2014-01-12 22:49:57','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (83,106,'update adm_acesso_usuario set apagar=\"1\",alterar=\"1\",consultar=\"1\",incluir=\"1\",publico=\"\" \r\n            where idmenu=\"8\" and idusuarios=\"137\"','2014-01-12 22:49:57','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (84,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"28\"','2014-01-12 22:49:57','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (85,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"28\" and idusuarios=\"137\"','2014-01-12 22:49:57','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (86,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"29\"','2014-01-12 22:49:57','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (87,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"29\" and idusuarios=\"137\"','2014-01-12 22:49:57','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (88,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"9\"','2014-01-12 22:49:57','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (89,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"9\" and idusuarios=\"137\"','2014-01-12 22:49:57','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (90,106,'update adm_configuracao set incluir=\"1\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"10\"','2014-01-12 22:49:57','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (91,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"1\",publico=\"\" \r\n            where idmenu=\"10\" and idusuarios=\"137\"','2014-01-12 22:49:57','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (92,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"15\"','2014-01-12 22:49:57','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (93,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"15\" and idusuarios=\"137\"','2014-01-12 22:49:57','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (94,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"16\"','2014-01-12 22:49:57','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (95,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"16\" and idusuarios=\"137\"','2014-01-12 22:49:57','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (96,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"17\"','2014-01-12 22:49:57','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (97,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"17\" and idusuarios=\"137\"','2014-01-12 22:49:57','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (98,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"18\"','2014-01-12 22:49:57','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (99,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"18\" and idusuarios=\"137\"','2014-01-12 22:49:57','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (100,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"19\"','2014-01-12 22:49:57','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (101,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"19\" and idusuarios=\"137\"','2014-01-12 22:49:57','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (102,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"30\"','2014-01-12 22:49:57','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (103,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"30\" and idusuarios=\"137\"','2014-01-12 22:49:57','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (104,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"11\"','2014-01-12 22:49:57','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (105,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"11\" and idusuarios=\"137\"','2014-01-12 22:49:57','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (106,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"12\"','2014-01-12 22:49:57','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (107,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"12\" and idusuarios=\"137\"','2014-01-12 22:49:57','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (108,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"13\"','2014-01-12 22:49:57','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (109,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"13\" and idusuarios=\"137\"','2014-01-12 22:49:57','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (110,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"20\"','2014-01-12 22:49:57','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (111,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"20\" and idusuarios=\"137\"','2014-01-12 22:49:57','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (112,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"21\"','2014-01-12 22:49:57','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (113,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"21\" and idusuarios=\"137\"','2014-01-12 22:49:57','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (114,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"22\"','2014-01-12 22:49:57','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (115,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"22\" and idusuarios=\"137\"','2014-01-12 22:49:57','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (116,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"23\"','2014-01-12 22:49:57','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (117,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"23\" and idusuarios=\"137\"','2014-01-12 22:49:57','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (118,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"24\"','2014-01-12 22:49:57','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (119,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"24\" and idusuarios=\"137\"','2014-01-12 22:49:57','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (120,106,'update adm_configuracao set incluir=\"1\",\r\n            consultar=\"1\",alterar=\"1\",apagar=\"1\" where idperfil=\"3\" and idmenu=\"25\"','2014-01-12 22:49:57','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (121,106,'update adm_acesso_usuario set apagar=\"1\",alterar=\"1\",consultar=\"1\",incluir=\"1\",publico=\"\" \r\n            where idmenu=\"25\" and idusuarios=\"137\"','2014-01-12 22:49:57','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (122,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"26\"','2014-01-12 22:49:57','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (123,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"26\" and idusuarios=\"137\"','2014-01-12 22:49:57','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (124,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"27\"','2014-01-12 22:49:57','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (125,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"27\" and idusuarios=\"137\"','2014-01-12 22:49:57','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (126,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"1\"','2014-01-12 22:50:13','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (127,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"1\" and idusuarios=\"137\"','2014-01-12 22:50:13','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (128,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"2\"','2014-01-12 22:50:13','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (129,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"2\" and idusuarios=\"137\"','2014-01-12 22:50:13','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (130,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"14\"','2014-01-12 22:50:13','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (131,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"14\" and idusuarios=\"137\"','2014-01-12 22:50:13','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (132,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"3\"','2014-01-12 22:50:13','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (133,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"3\" and idusuarios=\"137\"','2014-01-12 22:50:13','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (134,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"4\"','2014-01-12 22:50:13','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (135,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"4\" and idusuarios=\"137\"','2014-01-12 22:50:13','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (136,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"5\"','2014-01-12 22:50:13','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (137,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"5\" and idusuarios=\"137\"','2014-01-12 22:50:13','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (138,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"6\"','2014-01-12 22:50:13','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (139,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"6\" and idusuarios=\"137\"','2014-01-12 22:50:13','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (140,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"7\"','2014-01-12 22:50:13','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (141,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"7\" and idusuarios=\"137\"','2014-01-12 22:50:13','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (142,106,'update adm_configuracao set incluir=\"1\",\r\n            consultar=\"1\",alterar=\"1\",apagar=\"1\" where idperfil=\"3\" and idmenu=\"8\"','2014-01-12 22:50:13','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (143,106,'update adm_acesso_usuario set apagar=\"1\",alterar=\"1\",consultar=\"1\",incluir=\"1\",publico=\"\" \r\n            where idmenu=\"8\" and idusuarios=\"137\"','2014-01-12 22:50:13','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (144,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"28\"','2014-01-12 22:50:13','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (145,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"28\" and idusuarios=\"137\"','2014-01-12 22:50:13','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (146,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"29\"','2014-01-12 22:50:13','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (147,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"29\" and idusuarios=\"137\"','2014-01-12 22:50:13','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (148,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"9\"','2014-01-12 22:50:13','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (149,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"9\" and idusuarios=\"137\"','2014-01-12 22:50:13','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (150,106,'update adm_configuracao set incluir=\"1\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"10\"','2014-01-12 22:50:13','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (151,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"1\",publico=\"\" \r\n            where idmenu=\"10\" and idusuarios=\"137\"','2014-01-12 22:50:13','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (152,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"15\"','2014-01-12 22:50:14','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (153,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"15\" and idusuarios=\"137\"','2014-01-12 22:50:14','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (154,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"16\"','2014-01-12 22:50:14','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (155,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"16\" and idusuarios=\"137\"','2014-01-12 22:50:14','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (156,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"17\"','2014-01-12 22:50:14','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (157,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"17\" and idusuarios=\"137\"','2014-01-12 22:50:14','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (158,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"18\"','2014-01-12 22:50:14','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (159,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"18\" and idusuarios=\"137\"','2014-01-12 22:50:14','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (160,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"19\"','2014-01-12 22:50:14','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (161,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"19\" and idusuarios=\"137\"','2014-01-12 22:50:14','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (162,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"30\"','2014-01-12 22:50:14','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (163,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"30\" and idusuarios=\"137\"','2014-01-12 22:50:14','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (164,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"11\"','2014-01-12 22:50:14','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (165,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"11\" and idusuarios=\"137\"','2014-01-12 22:50:14','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (166,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"12\"','2014-01-12 22:50:14','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (167,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"12\" and idusuarios=\"137\"','2014-01-12 22:50:14','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (168,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"13\"','2014-01-12 22:50:14','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (169,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"13\" and idusuarios=\"137\"','2014-01-12 22:50:14','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (170,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"20\"','2014-01-12 22:50:14','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (171,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"20\" and idusuarios=\"137\"','2014-01-12 22:50:14','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (172,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"21\"','2014-01-12 22:50:14','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (173,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"21\" and idusuarios=\"137\"','2014-01-12 22:50:14','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (174,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"22\"','2014-01-12 22:50:14','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (175,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"22\" and idusuarios=\"137\"','2014-01-12 22:50:14','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (176,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"23\"','2014-01-12 22:50:14','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (177,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"23\" and idusuarios=\"137\"','2014-01-12 22:50:14','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (178,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"24\"','2014-01-12 22:50:14','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (179,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"24\" and idusuarios=\"137\"','2014-01-12 22:50:14','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (180,106,'update adm_configuracao set incluir=\"1\",\r\n            consultar=\"1\",alterar=\"1\",apagar=\"1\" where idperfil=\"3\" and idmenu=\"25\"','2014-01-12 22:50:14','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (181,106,'update adm_acesso_usuario set apagar=\"1\",alterar=\"1\",consultar=\"1\",incluir=\"1\",publico=\"\" \r\n            where idmenu=\"25\" and idusuarios=\"137\"','2014-01-12 22:50:14','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (182,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"26\"','2014-01-12 22:50:14','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (183,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"26\" and idusuarios=\"137\"','2014-01-12 22:50:14','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (184,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"27\"','2014-01-12 22:50:14','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (185,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"27\" and idusuarios=\"137\"','2014-01-12 22:50:14','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (186,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"1\"','2014-01-12 22:50:27','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (187,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"1\" and idusuarios=\"137\"','2014-01-12 22:50:27','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (188,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"2\"','2014-01-12 22:50:27','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (189,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"2\" and idusuarios=\"137\"','2014-01-12 22:50:27','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (190,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"14\"','2014-01-12 22:50:27','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (191,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"14\" and idusuarios=\"137\"','2014-01-12 22:50:27','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (192,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"3\"','2014-01-12 22:50:27','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (193,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"3\" and idusuarios=\"137\"','2014-01-12 22:50:27','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (194,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"4\"','2014-01-12 22:50:28','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (195,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"4\" and idusuarios=\"137\"','2014-01-12 22:50:28','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (196,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"5\"','2014-01-12 22:50:28','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (197,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"5\" and idusuarios=\"137\"','2014-01-12 22:50:28','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (198,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"6\"','2014-01-12 22:50:28','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (199,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"6\" and idusuarios=\"137\"','2014-01-12 22:50:28','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (200,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"7\"','2014-01-12 22:50:28','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (201,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"7\" and idusuarios=\"137\"','2014-01-12 22:50:28','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (202,106,'update adm_configuracao set incluir=\"1\",\r\n            consultar=\"1\",alterar=\"1\",apagar=\"1\" where idperfil=\"3\" and idmenu=\"8\"','2014-01-12 22:50:28','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (203,106,'update adm_acesso_usuario set apagar=\"1\",alterar=\"1\",consultar=\"1\",incluir=\"1\",publico=\"\" \r\n            where idmenu=\"8\" and idusuarios=\"137\"','2014-01-12 22:50:28','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (204,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"28\"','2014-01-12 22:50:28','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (205,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"28\" and idusuarios=\"137\"','2014-01-12 22:50:28','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (206,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"29\"','2014-01-12 22:50:28','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (207,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"29\" and idusuarios=\"137\"','2014-01-12 22:50:28','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (208,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"9\"','2014-01-12 22:50:28','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (209,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"9\" and idusuarios=\"137\"','2014-01-12 22:50:28','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (210,106,'update adm_configuracao set incluir=\"1\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"10\"','2014-01-12 22:50:28','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (211,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"1\",publico=\"\" \r\n            where idmenu=\"10\" and idusuarios=\"137\"','2014-01-12 22:50:28','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (212,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"15\"','2014-01-12 22:50:28','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (213,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"15\" and idusuarios=\"137\"','2014-01-12 22:50:28','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (214,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"16\"','2014-01-12 22:50:28','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (215,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"16\" and idusuarios=\"137\"','2014-01-12 22:50:28','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (216,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"17\"','2014-01-12 22:50:28','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (217,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"17\" and idusuarios=\"137\"','2014-01-12 22:50:28','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (218,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"18\"','2014-01-12 22:50:28','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (219,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"18\" and idusuarios=\"137\"','2014-01-12 22:50:28','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (220,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"19\"','2014-01-12 22:50:28','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (221,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"19\" and idusuarios=\"137\"','2014-01-12 22:50:28','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (222,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"30\"','2014-01-12 22:50:28','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (223,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"30\" and idusuarios=\"137\"','2014-01-12 22:50:28','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (224,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"11\"','2014-01-12 22:50:28','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (225,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"11\" and idusuarios=\"137\"','2014-01-12 22:50:28','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (226,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"12\"','2014-01-12 22:50:28','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (227,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"12\" and idusuarios=\"137\"','2014-01-12 22:50:28','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (228,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"13\"','2014-01-12 22:50:28','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (229,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"13\" and idusuarios=\"137\"','2014-01-12 22:50:28','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (230,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"20\"','2014-01-12 22:50:28','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (231,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"20\" and idusuarios=\"137\"','2014-01-12 22:50:28','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (232,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"21\"','2014-01-12 22:50:28','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (233,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"21\" and idusuarios=\"137\"','2014-01-12 22:50:28','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (234,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"22\"','2014-01-12 22:50:28','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (235,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"22\" and idusuarios=\"137\"','2014-01-12 22:50:28','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (236,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"23\"','2014-01-12 22:50:28','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (237,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"23\" and idusuarios=\"137\"','2014-01-12 22:50:28','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (238,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"24\"','2014-01-12 22:50:28','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (239,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"24\" and idusuarios=\"137\"','2014-01-12 22:50:28','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (240,106,'update adm_configuracao set incluir=\"1\",\r\n            consultar=\"1\",alterar=\"1\",apagar=\"1\" where idperfil=\"3\" and idmenu=\"25\"','2014-01-12 22:50:28','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (241,106,'update adm_acesso_usuario set apagar=\"1\",alterar=\"1\",consultar=\"1\",incluir=\"1\",publico=\"\" \r\n            where idmenu=\"25\" and idusuarios=\"137\"','2014-01-12 22:50:28','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (242,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"26\"','2014-01-12 22:50:28','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (243,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"26\" and idusuarios=\"137\"','2014-01-12 22:50:28','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (244,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"3\" and idmenu=\"27\"','2014-01-12 22:50:28','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (245,106,'update adm_acesso_usuario set apagar=\"0\",alterar=\"0\",consultar=\"0\",incluir=\"0\",publico=\"\" \r\n            where idmenu=\"27\" and idusuarios=\"137\"','2014-01-12 22:50:28','adm_acesso_usuario','Alterar');
INSERT INTO `logs` VALUES (246,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"4\" and idmenu=\"1\"','2014-01-12 22:55:36','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (247,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"4\" and idmenu=\"2\"','2014-01-12 22:55:36','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (248,106,'update adm_configuracao set incluir=\"1\",\r\n            consultar=\"1\",alterar=\"1\",apagar=\"1\" where idperfil=\"4\" and idmenu=\"14\"','2014-01-12 22:55:36','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (249,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"4\" and idmenu=\"3\"','2014-01-12 22:55:36','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (250,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"4\" and idmenu=\"4\"','2014-01-12 22:55:36','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (251,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"4\" and idmenu=\"5\"','2014-01-12 22:55:36','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (252,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"4\" and idmenu=\"6\"','2014-01-12 22:55:36','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (253,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"4\" and idmenu=\"7\"','2014-01-12 22:55:36','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (254,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"4\" and idmenu=\"8\"','2014-01-12 22:55:36','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (255,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"4\" and idmenu=\"28\"','2014-01-12 22:55:36','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (256,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"4\" and idmenu=\"29\"','2014-01-12 22:55:36','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (257,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"4\" and idmenu=\"9\"','2014-01-12 22:55:36','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (258,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"4\" and idmenu=\"10\"','2014-01-12 22:55:36','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (259,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"4\" and idmenu=\"15\"','2014-01-12 22:55:36','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (260,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"4\" and idmenu=\"16\"','2014-01-12 22:55:36','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (261,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"4\" and idmenu=\"17\"','2014-01-12 22:55:36','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (262,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"4\" and idmenu=\"18\"','2014-01-12 22:55:36','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (263,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"4\" and idmenu=\"19\"','2014-01-12 22:55:36','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (264,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"4\" and idmenu=\"30\"','2014-01-12 22:55:36','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (265,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"4\" and idmenu=\"11\"','2014-01-12 22:55:36','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (266,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"4\" and idmenu=\"12\"','2014-01-12 22:55:36','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (267,106,'update adm_configuracao set incluir=\"1\",\r\n            consultar=\"1\",alterar=\"1\",apagar=\"1\" where idperfil=\"4\" and idmenu=\"13\"','2014-01-12 22:55:36','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (268,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"4\" and idmenu=\"20\"','2014-01-12 22:55:37','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (269,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"4\" and idmenu=\"21\"','2014-01-12 22:55:37','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (270,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"4\" and idmenu=\"22\"','2014-01-12 22:55:37','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (271,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"4\" and idmenu=\"23\"','2014-01-12 22:55:37','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (272,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"4\" and idmenu=\"24\"','2014-01-12 22:55:37','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (273,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"4\" and idmenu=\"25\"','2014-01-12 22:55:37','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (274,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"4\" and idmenu=\"26\"','2014-01-12 22:55:37','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (275,106,'update adm_configuracao set incluir=\"0\",\r\n            consultar=\"0\",alterar=\"0\",apagar=\"0\" where idperfil=\"4\" and idmenu=\"27\"','2014-01-12 22:55:37','adm_configuracao','Alterar');
INSERT INTO `logs` VALUES (276,106,'insert into periodoletivo(siglacurso,siglaperiodo,data_inicio,data_fim,dtreg) \r\n            values(\"TPG\",\"2011.1\",\"2011-02-01\",\"2011-06-22\",\"2014-01-12 23:09:52\")','2014-01-12 23:09:52','periodoletivo','Inserir');
INSERT INTO `logs` VALUES (277,106,'update periodoletivo set siglacurso=\"TPG\",\r\n            siglaperiodo=\"2011.1\",data_inicio=\"2011-02-02\"\r\n            ,data_fim=\"2011-06-22\" where idperiodoletivo=\"3\"','2014-01-12 23:13:08','periodoletivo','Alterar');
INSERT INTO `logs` VALUES (278,106,'update adm_menu set id_pai=\"7\",\r\n          ordem_menu=\"37\",imagem=\"\",\r\n                nome_menu=\"PerÃ­odo Letivo\",class_css=\"\",\r\n                    link_menu=\"default.php?pg=view/periodoletivo/incluir.php&form=Consulta de PerÃ­odo Letivo\",publico=\"1\"\r\n                        where idmenu=\"24\"','2014-01-13 00:06:26','adm_menu','Alterar');
INSERT INTO `logs` VALUES (281,106,' update usuarios set login=\"aluno\",senha=\"\",\r\n            idperfil=\"4\" where idusuarios=\"106\"','2014-01-13 00:32:48','usuarios','Alterar');
INSERT INTO `logs` VALUES (282,106,'update pessoas set nome=\"VINÍCIUS MARQUES DA SILVA FERREIRA\",sexo=\"M\",\r\n            endereco=\"RUA LAURINDO RABELO, NÂ° 95 CASA 02\",bairro=\"DOUTOR LAUREANO\",cidade=\"DUQUE DE CAXIAS\",cep=\"25060470\",uf=\"RJ\",celular=\"(21) 98717-9672\",telefone=\"(21) 2673-1597\",\r\n            email=\"vinimars1@gmail.com\",foto=\"\" where idpessoas=\"2\"','2014-01-13 00:32:48','pessoas','Alterar');
INSERT INTO `logs` VALUES (283,106,' update alunos set idpessoas=\"2\",idestado_civil=\"1\",idetnia=\"2\",cpf=\"09831133781\",rgnumero=\"5565323263\",rgdataemissao=\"2014-01-01\",rgorgaoemissor=\"DETRAN\",certidaonascimentonumero=\"1223\",certidaonascimentolivro=\"1\",certidaonascimentofolha=\"1\",certidaonascimentocidade=\"DUQUE DE CAXIAS\",certidaonascimentosubdistrito=\"1\",certidaonascimentouf=\"AC\",certidaocasamentonumero=\"2\",certidaocasamentolivro=\"2\",certidaocasamentofolha=\"2\",certidaocasamentocidade=\"2\",certidaocasamentosubdistrito=\"2\",certidaocasamentouf=\"AL\",estabcursoorigem=\"\",estabcursoorigemuf=\"\",curso_origem_ano_conclusao=\"\",modalidade_curso_origem=\"\",ctps=\"\",deficiencia_visual=\"\",deficiencia_motora=\"\",deficiencia_auditiva=\"\",deficiencia_mental=\"\",responsavel_legal=\"\",rg_responsavel=\"\",titulo_eleitor_numero=\"\",titulo_eleitor_data=\"--\",titulo_eleitor_zona=\"\",titulo_eleitor_secao=\"\",certificado_alistamento_militar_numero=\"3\",certificado_alistamento_militar_serie=\"3\",certificado_alistamento_militar_data=\"2014-01-03\",certificado_alistamento_militar_rm=\"7\",certificado_alistamento_militar_csm=\"3\",certificado_reservista_numero=\"\",certificado_reservista_serie=\"\",certificado_reservista_data=\"--\",certificado_reservista_cat=\"\",certificado_reservista_rm=\"\",certificado_reservista_csm=\"\",carteira_trabalho=\"\",instituicao=\"\",modalidade=\"ENSINO MEDIO\",ano_conclusao=\"2008\",uf_ensino=\"AL\" where idpessoas=\"2\"','2014-01-13 00:32:48','alunos','Alterar');
INSERT INTO `logs` VALUES (284,106,'insert into ocorrencias(idusuarios,descricao,funcionalidade,data_hora,situacao) \r\n            values(\"106\",\"REALIZADO A ATUALIZAÇÃO DO CADASTRO DE ALUNO VINÍCIUS MARQUES DA SILVA FERREIRA PELO USUÁRIO <B>SYSDUQUE</B>\",\"ATUALIZAÇÃO DOS DADOS DO ALUNO\",\"2014-01-13 00:32:48\",\"A VALIDAR\")','2014-01-13 00:32:48','Ocorrencias','Inserir');
INSERT INTO `logs` VALUES (285,106,'update usuarios set senha=\"YWx1bm8=\" where idusuarios=\"106\"','2014-01-13 08:19:14','usuarios','alterar senha');

CREATE TABLE `matriculaaluno` (
  `matricula_aluno` varchar(11) NOT NULL default '',
  `idpessoas` int(11) default NULL,
  `idturno` int(11) default NULL,
  `siglacurso` varchar(11) default NULL,
  `idmatriz` int(11) default NULL,
  `idperiodoletivo` int(11) default NULL,
  `idsituacao_matricula` int(11) default NULL,
  `idformaingresso` int(11) default NULL,
  `data_matricula` date default NULL,
  `pontos_concursos` int(11) default NULL,
  `classificacao_concurso` int(11) default NULL,
  `data_conclusao` date default NULL,
  PRIMARY KEY  (`matricula_aluno`),
  KEY `idpessoas` (`idpessoas`),
  KEY `siglacurso` (`siglacurso`),
  KEY `idmatriz` (`idmatriz`),
  KEY `idperiodoletivo` (`idperiodoletivo`),
  KEY `idsituacao_matricula` (`idsituacao_matricula`),
  KEY `idformaingresso` (`idformaingresso`),
  KEY `idturno` (`idturno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `matriculaaluno` VALUES ('34566',2,1,'TPG',1,2,1,3,'2014-01-09',88,77,'0000-00-00');

CREATE TABLE `matriculaprofessor` (
  `matriculaprofessor` varchar(11) NOT NULL,
  `idpessoas` int(11) default NULL,
  `carga_horaria` int(11) default NULL,
  `data_inicio` date default NULL,
  `data_fim` date default NULL,
  PRIMARY KEY  (`matriculaprofessor`),
  KEY `idpessoas` (`idpessoas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `matriz` (
  `idmatriz` int(11) NOT NULL auto_increment,
  `siglacurso` varchar(255) default NULL,
  `data_vigencia` date default NULL,
  PRIMARY KEY  (`idmatriz`),
  KEY `siglacurso` (`siglacurso`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `matriz` VALUES (1,'TPG','2012-01-01');

CREATE TABLE `ocorrencias` (
  `idocorrencias` int(11) NOT NULL auto_increment,
  `idusuarios` int(11) default NULL,
  `descricao` longtext,
  `funcionalidade` varchar(70) default NULL,
  `data_hora` timestamp NULL default NULL,
  `situacao` varchar(50) default NULL,
  PRIMARY KEY  (`idocorrencias`),
  KEY `idusuarios` (`idusuarios`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `ocorrencias` VALUES (1,106,'REALIZADO CADASTRO DO ALUNO VINÍCIUS MARQUES DA SILVA FERREIRA PELO USUÁRIO <B>SYSDUQUE</B>','CADASTRO DE NOVO ALUNO','2014-01-12 16:49:21','A VALIDAR');
INSERT INTO `ocorrencias` VALUES (2,106,'REALIZADO A ATUALIZAÇÃO DO CADASTRO DE ALUNO VINÍCIUS MARQUES DA SILVA FERREIRA PELO USUÁRIO <B>SYSDUQUE</B>','ATUALIZAÇÃO DOS DADOS DO ALUNO','2014-01-13 00:32:48','A VALIDAR');

CREATE TABLE `ouvidoria` (
  `idouvidoria` int(11) NOT NULL auto_increment,
  `idusuarios` int(11) default NULL,
  `idclassificacao` int(11) default NULL,
  `idbaseconhecimentos` int(11) default NULL,
  `protocolo` varchar(50) NOT NULL,
  `assunto` varchar(70) default NULL,
  `observacao` longtext,
  `foto` varchar(250) default NULL,
  `situacao` varchar(30) default NULL,
  `dtreg` timestamp NULL default NULL,
  PRIMARY KEY  (`idouvidoria`),
  KEY `idclassificacao` (`idclassificacao`),
  KEY `idbaseconhecimentos` (`idbaseconhecimentos`),
  KEY `protocolo` (`protocolo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `perfil` (
  `idperfil` int(11) NOT NULL auto_increment,
  `descricao` varchar(30) default NULL,
  `dtreg` timestamp NULL default NULL,
  PRIMARY KEY  (`idperfil`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO `perfil` VALUES (1,'ADMINISTRADOR',NULL);
INSERT INTO `perfil` VALUES (2,'SECRETARIA ACADÊMICA',NULL);
INSERT INTO `perfil` VALUES (3,'PROFESSOR',NULL);
INSERT INTO `perfil` VALUES (4,'ALUNO',NULL);

CREATE TABLE `periodoletivo` (
  `idperiodoletivo` int(11) NOT NULL auto_increment,
  `siglacurso` varchar(255) default NULL,
  `siglaperiodo` varchar(11) default NULL,
  `data_inicio` date default NULL,
  `data_fim` date default NULL,
  `dtreg` timestamp NULL default NULL,
  PRIMARY KEY  (`idperiodoletivo`),
  KEY `siglacurso` (`siglacurso`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `periodoletivo` VALUES (2,'TPG','2013.2','2013-05-08','2013-12-12','2013-11-10 21:52:17');
INSERT INTO `periodoletivo` VALUES (3,'TPG','2011.1','2011-02-02','2011-06-22','2014-01-12 23:09:52');

CREATE TABLE `pessoas` (
  `idpessoas` int(11) NOT NULL auto_increment,
  `nome` varchar(255) default NULL,
  `sexo` char(1) default NULL,
  `endereco` varchar(255) default NULL,
  `bairro` varchar(100) default NULL,
  `cidade` varchar(100) default NULL,
  `cep` varchar(10) default NULL,
  `uf` varchar(2) default NULL,
  `nascimento` date default NULL,
  `nacionalidade` varchar(255) default NULL,
  `telefone` varchar(255) default NULL,
  `celular` varchar(255) default NULL,
  `email` varchar(255) default NULL,
  `foto` varchar(255) default NULL,
  `idusuarios` int(11) default NULL,
  PRIMARY KEY  (`idpessoas`),
  KEY `idusuarios` (`idusuarios`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `pessoas` VALUES (1,'Vinícius','M',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'vinicius_1.jpg',106);
INSERT INTO `pessoas` VALUES (2,'VINÍCIUS MARQUES DA SILVA FERREIRA','M','RUA LAURINDO RABELO, NÂ° 95 CASA 02','DOUTOR LAUREANO','DUQUE DE CAXIAS','25060470','RJ','1983-01-02','BRASILEIRA','(21) 2673-1597','(21) 98717-9672','vinimars1@gmail.com','',137);

CREATE TABLE `professor` (
  `idpessoas` int(11) NOT NULL auto_increment,
  `idtitulacao` int(11) default NULL,
  `cvlattes` varchar(255) default NULL,
  `nome_guerra` varchar(255) default NULL,
  `corfundo` varchar(255) default NULL,
  PRIMARY KEY  (`idpessoas`),
  KEY `idtitulacao` (`idtitulacao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `situacaomatricula` (
  `idsituacao_matricula` int(11) NOT NULL auto_increment,
  `descricao` varchar(255) default NULL,
  PRIMARY KEY  (`idsituacao_matricula`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO `situacaomatricula` VALUES (1,'CURSANDO');
INSERT INTO `situacaomatricula` VALUES (2,'TRANCADO');
INSERT INTO `situacaomatricula` VALUES (3,'EVADIDO');
INSERT INTO `situacaomatricula` VALUES (4,'CONCLUÍDO');
INSERT INTO `situacaomatricula` VALUES (5,'DESISTENTE');
INSERT INTO `situacaomatricula` VALUES (6,'DESLIGADO');

CREATE TABLE `situacaoturma` (
  `idsituacaoturma` int(11) NOT NULL auto_increment,
  `descricao` varchar(20) default NULL,
  PRIMARY KEY  (`idsituacaoturma`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `situacaoturma` VALUES (1,'PLANEJADA');
INSERT INTO `situacaoturma` VALUES (2,'LIBERADA');
INSERT INTO `situacaoturma` VALUES (3,'CANCELADA');
INSERT INTO `situacaoturma` VALUES (4,'CONFIRMADA');
INSERT INTO `situacaoturma` VALUES (5,'FINALIZADA');

CREATE TABLE `solicitacaodocumento` (
  `idsolicitacaodocumento` int(11) NOT NULL auto_increment,
  `idusuarios` int(11) default NULL,
  `idtipodocumento` int(11) default NULL,
  `idsituacaodocumento` int(11) default NULL,
  `data_solicitacao` date default NULL,
  `observacao` longtext,
  `situacao` int(11) default NULL,
  `dtreg` timestamp NULL default NULL,
  PRIMARY KEY  (`idsolicitacaodocumento`),
  KEY `idusuarios` (`idusuarios`),
  KEY `idtipodocumento` (`idtipodocumento`),
  KEY `idsituacaodocumento` (`idsituacaodocumento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `teste` (
  `matricula` int(11) default NULL,
  `nome` varchar(255) default NULL,
  `idmatriz` int(11) NOT NULL default '0',
  `idturma` int(11) default NULL,
  `siglacurso` varchar(20) default NULL,
  `sigladisciplina` varchar(20) default NULL,
  `disciplina` varchar(255) default NULL,
  `periodoletivo` varchar(20) default NULL,
  `turno` varchar(20) default NULL,
  `periodo` int(11) default NULL,
  `idsituacaoturma` int(11) default NULL,
  `idperiodoletivo` int(11) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `teste` VALUES (12110021,'CARLOS ALBERTO DE A. MENDES',1,124,'TPG','GESTVENNEG','GESTÃO DE VENDAS E NEGOCIAÇÕES','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110018,'DANIELLE CAVALCANTI S. PINTO',1,124,'TPG','GESTVENNEG','GESTÃO DE VENDAS E NEGOCIAÇÕES','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110012,'DANIELLE DA PENHA M. DE A. ALVES',1,124,'TPG','GESTVENNEG','GESTÃO DE VENDAS E NEGOCIAÇÕES','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12310022,'DELVA DA SILVA BARROS',1,124,'TPG','GESTVENNEG','GESTÃO DE VENDAS E NEGOCIAÇÕES','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12310036,'DOUGLAS DE SOUZA',1,124,'TPG','GESTVENNEG','GESTÃO DE VENDAS E NEGOCIAÇÕES','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12310003,'FABRINNY GONÇALVES GOMES SANTOS',1,124,'TPG','GESTVENNEG','GESTÃO DE VENDAS E NEGOCIAÇÕES','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110023,'FELIPE BARBOSA DRUMOND',1,124,'TPG','GESTVENNEG','GESTÃO DE VENDAS E NEGOCIAÇÕES','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110013,'GABRIEL PEREIRA F. DE MORAES',1,124,'TPG','GESTVENNEG','GESTÃO DE VENDAS E NEGOCIAÇÕES','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110020,'GABRIELLE HENRIQUES SILVA',1,124,'TPG','GESTVENNEG','GESTÃO DE VENDAS E NEGOCIAÇÕES','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12310037,'RAQUEL DA SILVA DIAS',1,124,'TPG','GESTVENNEG','GESTÃO DE VENDAS E NEGOCIAÇÕES','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110010,'ROBSON DOS SANTOS CINTRA',1,124,'TPG','GESTVENNEG','GESTÃO DE VENDAS E NEGOCIAÇÕES','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (1077470,'THIAGO DE SOUZA B. TEIXEIRA',1,124,'TPG','GESTVENNEG','GESTÃO DE VENDAS E NEGOCIAÇÕES','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110027,'WILSON CORDEIRO M. JUNIOR',1,124,'TPG','GESTVENNEG','GESTÃO DE VENDAS E NEGOCIAÇÕES','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110026,'ANA CAROLINA COELHO DE SOUZA',1,324,'TPG','GESTVENNEG','GESTÃO DE VENDAS E NEGOCIAÇÕES','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110002,'ANDRÉ LUIZ GOMES DA SILVA',1,324,'TPG','GESTVENNEG','GESTÃO DE VENDAS E NEGOCIAÇÕES','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110022,'ARYANE MENDES DA SILVA ',1,324,'TPG','GESTVENNEG','GESTÃO DE VENDAS E NEGOCIAÇÕES','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310004,'CAROLINA RODRIGUES DE O. LIMA',1,324,'TPG','GESTVENNEG','GESTÃO DE VENDAS E NEGOCIAÇÕES','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310021,'CREUSIENI GOMES DA S. AGOSTINI',1,324,'TPG','GESTVENNEG','GESTÃO DE VENDAS E NEGOCIAÇÕES','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310015,'CREZILDA FURTADO ALVES',1,324,'TPG','GESTVENNEG','GESTÃO DE VENDAS E NEGOCIAÇÕES','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310009,'EDSON DE SOUZA RANGEL',1,324,'TPG','GESTVENNEG','GESTÃO DE VENDAS E NEGOCIAÇÕES','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310005,'ESTER LEONARDO CIRINO SOARES',1,324,'TPG','GESTVENNEG','GESTÃO DE VENDAS E NEGOCIAÇÕES','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310006,'FABIANA GONÇALVES',1,324,'TPG','GESTVENNEG','GESTÃO DE VENDAS E NEGOCIAÇÕES','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310028,'FABIO DE AZEVEDO GUEDES',1,324,'TPG','GESTVENNEG','GESTÃO DE VENDAS E NEGOCIAÇÕES','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310001,'FABIO DE SOUSA MARVILA',1,324,'TPG','GESTVENNEG','GESTÃO DE VENDAS E NEGOCIAÇÕES','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110007,'FERNANDA M. DA S. DE ALEXANDRIA',1,324,'TPG','GESTVENNEG','GESTÃO DE VENDAS E NEGOCIAÇÕES','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110017,'GABRIELA SLOAN DOS S. GUEDES',1,324,'TPG','GESTVENNEG','GESTÃO DE VENDAS E NEGOCIAÇÕES','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310030,'GRAZIELLE ARAUJO MOREIRA',1,324,'TPG','GESTVENNEG','GESTÃO DE VENDAS E NEGOCIAÇÕES','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310012,'JOÃO ROBERTO SILVA FILHO',1,324,'TPG','GESTVENNEG','GESTÃO DE VENDAS E NEGOCIAÇÕES','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310014,'JOELMA FURTADO ALVES',1,324,'TPG','GESTVENNEG','GESTÃO DE VENDAS E NEGOCIAÇÕES','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310020,'JULIO CESAR ROCHA DA SILVA',1,324,'TPG','GESTVENNEG','GESTÃO DE VENDAS E NEGOCIAÇÕES','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310023,'KALINE CALDEIRA DA SILVA',1,324,'TPG','GESTVENNEG','GESTÃO DE VENDAS E NEGOCIAÇÕES','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310031,'LILIA FERREIRA DOS SANTOS',1,324,'TPG','GESTVENNEG','GESTÃO DE VENDAS E NEGOCIAÇÕES','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310027,'LIVIA DO NASCIMENTO E SILVA',1,324,'TPG','GESTVENNEG','GESTÃO DE VENDAS E NEGOCIAÇÕES','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110006,'LUIS CARLOS DE OLIVEIRA',1,324,'TPG','GESTVENNEG','GESTÃO DE VENDAS E NEGOCIAÇÕES','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110015,'MARCIO RODRIGUES DE OLIVEIRA',1,324,'TPG','GESTVENNEG','GESTÃO DE VENDAS E NEGOCIAÇÕES','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310011,'MAX  JANUARIO  SOARES',1,324,'TPG','GESTVENNEG','GESTÃO DE VENDAS E NEGOCIAÇÕES','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (1077470,'PAULO SERGIO RIZZO DA CUNHA',1,324,'TPG','GESTVENNEG','GESTÃO DE VENDAS E NEGOCIAÇÕES','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (1040570,'RENAN VIGNOLI DE ALEXANDRIA ',1,324,'TPG','GESTVENNEG','GESTÃO DE VENDAS E NEGOCIAÇÕES','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310018,'RODRIGO TORRESDA SILVA ',1,324,'TPG','GESTVENNEG','GESTÃO DE VENDAS E NEGOCIAÇÕES','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (1865668,'ROSANE E SILVABARBOSA',1,324,'TPG','GESTVENNEG','GESTÃO DE VENDAS E NEGOCIAÇÕES','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310002,'WALLACE MARCELO MANOEL',1,324,'TPG','GESTVENNEG','GESTÃO DE VENDAS E NEGOCIAÇÕES','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110021,'CARLOS ALBERTO DE A. MENDES',1,124,'TPG','GESTMARK','GESTÃO DE MARKETING ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110018,'DANIELLE CAVALCANTI S. PINTO',1,124,'TPG','GESTMARK','GESTÃO DE MARKETING ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110012,'DANIELLE DA PENHA M. DE A. ALVES',1,124,'TPG','GESTMARK','GESTÃO DE MARKETING ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12310022,'DELVA DA SILVA BARROS',1,124,'TPG','GESTMARK','GESTÃO DE MARKETING ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12310036,'DOUGLAS DE SOUZA',1,124,'TPG','GESTMARK','GESTÃO DE MARKETING ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12310003,'FABRINNY GONÇALVES GOMES SANTOS',1,124,'TPG','GESTMARK','GESTÃO DE MARKETING ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110023,'FELIPE BARBOSA DRUMOND',1,124,'TPG','GESTMARK','GESTÃO DE MARKETING ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110013,'GABRIEL PEREIRA F. DE MORAES',1,124,'TPG','GESTMARK','GESTÃO DE MARKETING ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110020,'GABRIELLE HENRIQUES SILVA',1,124,'TPG','GESTMARK','GESTÃO DE MARKETING ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12310037,'RAQUEL DA SILVA DIAS',1,124,'TPG','GESTMARK','GESTÃO DE MARKETING ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110010,'ROBSON DOS SANTOS CINTRA',1,124,'TPG','GESTMARK','GESTÃO DE MARKETING ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (1077470,'THIAGO DE SOUZA B. TEIXEIRA',1,124,'TPG','GESTMARK','GESTÃO DE MARKETING ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110027,'WILSON CORDEIRO M. JUNIOR',1,124,'TPG','GESTMARK','GESTÃO DE MARKETING ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110026,'ANA CAROLINA COELHO DE SOUZA',1,324,'TPG','GESTMARK','GESTÃO DE MARKETING ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110002,'ANDRÉ LUIZ GOMES DA SILVA',1,324,'TPG','GESTMARK','GESTÃO DE MARKETING ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110022,'ARYANE MENDES DA SILVA ',1,324,'TPG','GESTMARK','GESTÃO DE MARKETING ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310004,'CAROLINA RODRIGUES DE O. LIMA',1,324,'TPG','GESTMARK','GESTÃO DE MARKETING ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310021,'CREUSIENI GOMES DA S. AGOSTINI',1,324,'TPG','GESTMARK','GESTÃO DE MARKETING ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310015,'CREZILDA FURTADO ALVES',1,324,'TPG','GESTMARK','GESTÃO DE MARKETING ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310009,'EDSON DE SOUZA RANGEL',1,324,'TPG','GESTMARK','GESTÃO DE MARKETING ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310005,'ESTER LEONARDO CIRINO SOARES',1,324,'TPG','GESTMARK','GESTÃO DE MARKETING ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310006,'FABIANA GONÇALVES',1,324,'TPG','GESTMARK','GESTÃO DE MARKETING ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310028,'FABIO DE AZEVEDO GUEDES',1,324,'TPG','GESTMARK','GESTÃO DE MARKETING ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310001,'FABIO DE SOUSA MARVILA',1,324,'TPG','GESTMARK','GESTÃO DE MARKETING ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110007,'FERNANDA M. DA S. DE ALEXANDRIA',1,324,'TPG','GESTMARK','GESTÃO DE MARKETING ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110017,'GABRIELA SLOAN DOS S. GUEDES',1,324,'TPG','GESTMARK','GESTÃO DE MARKETING ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310030,'GRAZIELLE ARAUJO MOREIRA',1,324,'TPG','GESTMARK','GESTÃO DE MARKETING ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310012,'JOÃO ROBERTO SILVA FILHO',1,324,'TPG','GESTMARK','GESTÃO DE MARKETING ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310014,'JOELMA FURTADO ALVES',1,324,'TPG','GESTMARK','GESTÃO DE MARKETING ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310020,'JULIO CESAR ROCHA DA SILVA',1,324,'TPG','GESTMARK','GESTÃO DE MARKETING ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310023,'KALINE CALDEIRA DA SILVA',1,324,'TPG','GESTMARK','GESTÃO DE MARKETING ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310031,'LILIA FERREIRA DOS SANTOS',1,324,'TPG','GESTMARK','GESTÃO DE MARKETING ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310027,'LIVIA DO NASCIMENTO E SILVA',1,324,'TPG','GESTMARK','GESTÃO DE MARKETING ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110006,'LUIS CARLOS DE OLIVEIRA',1,324,'TPG','GESTMARK','GESTÃO DE MARKETING ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110015,'MARCIO RODRIGUES DE OLIVEIRA',1,324,'TPG','GESTMARK','GESTÃO DE MARKETING ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310011,'MAX  JANUARIO  SOARES',1,324,'TPG','GESTMARK','GESTÃO DE MARKETING ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (1077470,'PAULO SERGIO RIZZO DA CUNHA',1,324,'TPG','GESTMARK','GESTÃO DE MARKETING ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (1040570,'RENAN VIGNOLI DE ALEXANDRIA ',1,324,'TPG','GESTMARK','GESTÃO DE MARKETING ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310018,'RODRIGO TORRESDA SILVA ',1,324,'TPG','GESTMARK','GESTÃO DE MARKETING ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (1865668,'ROSANE E SILVABARBOSA',1,324,'TPG','GESTMARK','GESTÃO DE MARKETING ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310002,'WALLACE MARCELO MANOEL',1,324,'TPG','GESTMARK','GESTÃO DE MARKETING ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110021,'CARLOS ALBERTO DE A. MENDES',1,124,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110018,'DANIELLE CAVALCANTI S. PINTO',1,124,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110012,'DANIELLE DA PENHA M. DE A. ALVES',1,124,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12310022,'DELVA DA SILVA BARROS',1,124,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12310036,'DOUGLAS DE SOUZA',1,124,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12310003,'FABRINNY GONÇALVES GOMES SANTOS',1,124,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110023,'FELIPE BARBOSA DRUMOND',1,124,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110013,'GABRIEL PEREIRA F. DE MORAES',1,124,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110020,'GABRIELLE HENRIQUES SILVA',1,124,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12310037,'RAQUEL DA SILVA DIAS',1,124,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110010,'ROBSON DOS SANTOS CINTRA',1,124,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (1077470,'THIAGO DE SOUZA B. TEIXEIRA',1,124,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110027,'WILSON CORDEIRO M. JUNIOR',1,124,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110026,'ANA CAROLINA COELHO DE SOUZA',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110002,'ANDRÉ LUIZ GOMES DA SILVA',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110022,'ARYANE MENDES DA SILVA ',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310004,'CAROLINA RODRIGUES DE O. LIMA',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310021,'CREUSIENI GOMES DA S. AGOSTINI',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310015,'CREZILDA FURTADO ALVES',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310009,'EDSON DE SOUZA RANGEL',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310005,'ESTER LEONARDO CIRINO SOARES',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310006,'FABIANA GONÇALVES',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310028,'FABIO DE AZEVEDO GUEDES',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310001,'FABIO DE SOUSA MARVILA',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110007,'FERNANDA M. DA S. DE ALEXANDRIA',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110017,'GABRIELA SLOAN DOS S. GUEDES',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310030,'GRAZIELLE ARAUJO MOREIRA',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310012,'JOÃO ROBERTO SILVA FILHO',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310014,'JOELMA FURTADO ALVES',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310020,'JULIO CESAR ROCHA DA SILVA',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310023,'KALINE CALDEIRA DA SILVA',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310031,'LILIA FERREIRA DOS SANTOS',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310027,'LIVIA DO NASCIMENTO E SILVA',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110006,'LUIS CARLOS DE OLIVEIRA',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110015,'MARCIO RODRIGUES DE OLIVEIRA',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310011,'MAX  JANUARIO  SOARES',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (1077470,'PAULO SERGIO RIZZO DA CUNHA',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (1040570,'RENAN VIGNOLI DE ALEXANDRIA ',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310018,'RODRIGO TORRESDA SILVA ',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (1865668,'ROSANE E SILVABARBOSA',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310002,'WALLACE MARCELO MANOEL',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110021,'CARLOS ALBERTO DE A. MENDES',1,124,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110018,'DANIELLE CAVALCANTI S. PINTO',1,124,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110012,'DANIELLE DA PENHA M. DE A. ALVES',1,124,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12310022,'DELVA DA SILVA BARROS',1,124,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12310036,'DOUGLAS DE SOUZA',1,124,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12310003,'FABRINNY GONÇALVES GOMES SANTOS',1,124,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110023,'FELIPE BARBOSA DRUMOND',1,124,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110013,'GABRIEL PEREIRA F. DE MORAES',1,124,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110020,'GABRIELLE HENRIQUES SILVA',1,124,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12310037,'RAQUEL DA SILVA DIAS',1,124,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110010,'ROBSON DOS SANTOS CINTRA',1,124,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (1077470,'THIAGO DE SOUZA B. TEIXEIRA',1,124,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110027,'WILSON CORDEIRO M. JUNIOR',1,124,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110026,'ANA CAROLINA COELHO DE SOUZA',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110002,'ANDRÉ LUIZ GOMES DA SILVA',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110022,'ARYANE MENDES DA SILVA ',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310004,'CAROLINA RODRIGUES DE O. LIMA',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310021,'CREUSIENI GOMES DA S. AGOSTINI',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310015,'CREZILDA FURTADO ALVES',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310009,'EDSON DE SOUZA RANGEL',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310005,'ESTER LEONARDO CIRINO SOARES',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310006,'FABIANA GONÇALVES',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310028,'FABIO DE AZEVEDO GUEDES',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310001,'FABIO DE SOUSA MARVILA',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110007,'FERNANDA M. DA S. DE ALEXANDRIA',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110017,'GABRIELA SLOAN DOS S. GUEDES',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310030,'GRAZIELLE ARAUJO MOREIRA',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310012,'JOÃO ROBERTO SILVA FILHO',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310014,'JOELMA FURTADO ALVES',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310020,'JULIO CESAR ROCHA DA SILVA',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310023,'KALINE CALDEIRA DA SILVA',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310031,'LILIA FERREIRA DOS SANTOS',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310027,'LIVIA DO NASCIMENTO E SILVA',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110006,'LUIS CARLOS DE OLIVEIRA',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110015,'MARCIO RODRIGUES DE OLIVEIRA',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310011,'MAX  JANUARIO  SOARES',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (1077470,'PAULO SERGIO RIZZO DA CUNHA',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (1040570,'RENAN VIGNOLI DE ALEXANDRIA ',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310018,'RODRIGO TORRESDA SILVA ',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (1865668,'ROSANE E SILVABARBOSA',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310002,'WALLACE MARCELO MANOEL',1,324,'TPG','NEGINTER','NEGÓCIOS INTERNACIONAIS ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110021,'CARLOS ALBERTO DE A. MENDES',1,124,'TPG','PESQANALMERC','PESQUISA E ANÁLISE DE MERCADO ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110018,'DANIELLE CAVALCANTI S. PINTO',1,124,'TPG','PESQANALMERC','PESQUISA E ANÁLISE DE MERCADO ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110012,'DANIELLE DA PENHA M. DE A. ALVES',1,124,'TPG','PESQANALMERC','PESQUISA E ANÁLISE DE MERCADO ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12310022,'DELVA DA SILVA BARROS',1,124,'TPG','PESQANALMERC','PESQUISA E ANÁLISE DE MERCADO ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12310036,'DOUGLAS DE SOUZA',1,124,'TPG','PESQANALMERC','PESQUISA E ANÁLISE DE MERCADO ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12310003,'FABRINNY GONÇALVES GOMES SANTOS',1,124,'TPG','PESQANALMERC','PESQUISA E ANÁLISE DE MERCADO ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110023,'FELIPE BARBOSA DRUMOND',1,124,'TPG','PESQANALMERC','PESQUISA E ANÁLISE DE MERCADO ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110013,'GABRIEL PEREIRA F. DE MORAES',1,124,'TPG','PESQANALMERC','PESQUISA E ANÁLISE DE MERCADO ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110020,'GABRIELLE HENRIQUES SILVA',1,124,'TPG','PESQANALMERC','PESQUISA E ANÁLISE DE MERCADO ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12310037,'RAQUEL DA SILVA DIAS',1,124,'TPG','PESQANALMERC','PESQUISA E ANÁLISE DE MERCADO ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110010,'ROBSON DOS SANTOS CINTRA',1,124,'TPG','PESQANALMERC','PESQUISA E ANÁLISE DE MERCADO ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (1077470,'THIAGO DE SOUZA B. TEIXEIRA',1,124,'TPG','PESQANALMERC','PESQUISA E ANÁLISE DE MERCADO ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110027,'WILSON CORDEIRO M. JUNIOR',1,124,'TPG','PESQANALMERC','PESQUISA E ANÁLISE DE MERCADO ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110026,'ANA CAROLINA COELHO DE SOUZA',1,324,'TPG','PESQANALMERC','PESQUISA E ANÁLISE DE MERCADO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110002,'ANDRÉ LUIZ GOMES DA SILVA',1,324,'TPG','PESQANALMERC','PESQUISA E ANÁLISE DE MERCADO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110022,'ARYANE MENDES DA SILVA ',1,324,'TPG','PESQANALMERC','PESQUISA E ANÁLISE DE MERCADO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310004,'CAROLINA RODRIGUES DE O. LIMA',1,324,'TPG','PESQANALMERC','PESQUISA E ANÁLISE DE MERCADO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310021,'CREUSIENI GOMES DA S. AGOSTINI',1,324,'TPG','PESQANALMERC','PESQUISA E ANÁLISE DE MERCADO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310015,'CREZILDA FURTADO ALVES',1,324,'TPG','PESQANALMERC','PESQUISA E ANÁLISE DE MERCADO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310009,'EDSON DE SOUZA RANGEL',1,324,'TPG','PESQANALMERC','PESQUISA E ANÁLISE DE MERCADO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310005,'ESTER LEONARDO CIRINO SOARES',1,324,'TPG','PESQANALMERC','PESQUISA E ANÁLISE DE MERCADO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310006,'FABIANA GONÇALVES',1,324,'TPG','PESQANALMERC','PESQUISA E ANÁLISE DE MERCADO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310028,'FABIO DE AZEVEDO GUEDES',1,324,'TPG','PESQANALMERC','PESQUISA E ANÁLISE DE MERCADO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310001,'FABIO DE SOUSA MARVILA',1,324,'TPG','PESQANALMERC','PESQUISA E ANÁLISE DE MERCADO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110007,'FERNANDA M. DA S. DE ALEXANDRIA',1,324,'TPG','PESQANALMERC','PESQUISA E ANÁLISE DE MERCADO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110017,'GABRIELA SLOAN DOS S. GUEDES',1,324,'TPG','PESQANALMERC','PESQUISA E ANÁLISE DE MERCADO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310030,'GRAZIELLE ARAUJO MOREIRA',1,324,'TPG','PESQANALMERC','PESQUISA E ANÁLISE DE MERCADO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310012,'JOÃO ROBERTO SILVA FILHO',1,324,'TPG','PESQANALMERC','PESQUISA E ANÁLISE DE MERCADO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310014,'JOELMA FURTADO ALVES',1,324,'TPG','PESQANALMERC','PESQUISA E ANÁLISE DE MERCADO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310020,'JULIO CESAR ROCHA DA SILVA',1,324,'TPG','PESQANALMERC','PESQUISA E ANÁLISE DE MERCADO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310023,'KALINE CALDEIRA DA SILVA',1,324,'TPG','PESQANALMERC','PESQUISA E ANÁLISE DE MERCADO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310031,'LILIA FERREIRA DOS SANTOS',1,324,'TPG','PESQANALMERC','PESQUISA E ANÁLISE DE MERCADO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310027,'LIVIA DO NASCIMENTO E SILVA',1,324,'TPG','PESQANALMERC','PESQUISA E ANÁLISE DE MERCADO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110006,'LUIS CARLOS DE OLIVEIRA',1,324,'TPG','PESQANALMERC','PESQUISA E ANÁLISE DE MERCADO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110015,'MARCIO RODRIGUES DE OLIVEIRA',1,324,'TPG','PESQANALMERC','PESQUISA E ANÁLISE DE MERCADO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310011,'MAX  JANUARIO  SOARES',1,324,'TPG','PESQANALMERC','PESQUISA E ANÁLISE DE MERCADO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (1077470,'PAULO SERGIO RIZZO DA CUNHA',1,324,'TPG','PESQANALMERC','PESQUISA E ANÁLISE DE MERCADO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (1040570,'RENAN VIGNOLI DE ALEXANDRIA ',1,324,'TPG','PESQANALMERC','PESQUISA E ANÁLISE DE MERCADO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310018,'RODRIGO TORRESDA SILVA ',1,324,'TPG','PESQANALMERC','PESQUISA E ANÁLISE DE MERCADO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (1865668,'ROSANE E SILVABARBOSA',1,324,'TPG','PESQANALMERC','PESQUISA E ANÁLISE DE MERCADO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310002,'WALLACE MARCELO MANOEL',1,324,'TPG','PESQANALMERC','PESQUISA E ANÁLISE DE MERCADO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110021,'CARLOS ALBERTO DE A. MENDES',1,124,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110018,'DANIELLE CAVALCANTI S. PINTO',1,124,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110012,'DANIELLE DA PENHA M. DE A. ALVES',1,124,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12310022,'DELVA DA SILVA BARROS',1,124,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12310036,'DOUGLAS DE SOUZA',1,124,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12310003,'FABRINNY GONÇALVES GOMES SANTOS',1,124,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110023,'FELIPE BARBOSA DRUMOND',1,124,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110013,'GABRIEL PEREIRA F. DE MORAES',1,124,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110020,'GABRIELLE HENRIQUES SILVA',1,124,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12310037,'RAQUEL DA SILVA DIAS',1,124,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110010,'ROBSON DOS SANTOS CINTRA',1,124,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (1077470,'THIAGO DE SOUZA B. TEIXEIRA',1,124,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110027,'WILSON CORDEIRO M. JUNIOR',1,124,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110026,'ANA CAROLINA COELHO DE SOUZA',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110002,'ANDRÉ LUIZ GOMES DA SILVA',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110022,'ARYANE MENDES DA SILVA ',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310004,'CAROLINA RODRIGUES DE O. LIMA',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310021,'CREUSIENI GOMES DA S. AGOSTINI',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310015,'CREZILDA FURTADO ALVES',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310009,'EDSON DE SOUZA RANGEL',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310005,'ESTER LEONARDO CIRINO SOARES',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310006,'FABIANA GONÇALVES',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310028,'FABIO DE AZEVEDO GUEDES',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310001,'FABIO DE SOUSA MARVILA',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110007,'FERNANDA M. DA S. DE ALEXANDRIA',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110017,'GABRIELA SLOAN DOS S. GUEDES',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310030,'GRAZIELLE ARAUJO MOREIRA',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310012,'JOÃO ROBERTO SILVA FILHO',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310014,'JOELMA FURTADO ALVES',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310020,'JULIO CESAR ROCHA DA SILVA',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310023,'KALINE CALDEIRA DA SILVA',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310031,'LILIA FERREIRA DOS SANTOS',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310027,'LIVIA DO NASCIMENTO E SILVA',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110006,'LUIS CARLOS DE OLIVEIRA',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110015,'MARCIO RODRIGUES DE OLIVEIRA',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310011,'MAX  JANUARIO  SOARES',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (1077470,'PAULO SERGIO RIZZO DA CUNHA',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (1040570,'RENAN VIGNOLI DE ALEXANDRIA ',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310018,'RODRIGO TORRESDA SILVA ',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (1865668,'ROSANE E SILVABARBOSA',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310002,'WALLACE MARCELO MANOEL',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110021,'CARLOS ALBERTO DE A. MENDES',1,124,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110018,'DANIELLE CAVALCANTI S. PINTO',1,124,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110012,'DANIELLE DA PENHA M. DE A. ALVES',1,124,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12310022,'DELVA DA SILVA BARROS',1,124,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12310036,'DOUGLAS DE SOUZA',1,124,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12310003,'FABRINNY GONÇALVES GOMES SANTOS',1,124,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110023,'FELIPE BARBOSA DRUMOND',1,124,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110013,'GABRIEL PEREIRA F. DE MORAES',1,124,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110020,'GABRIELLE HENRIQUES SILVA',1,124,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12310037,'RAQUEL DA SILVA DIAS',1,124,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110010,'ROBSON DOS SANTOS CINTRA',1,124,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (1077470,'THIAGO DE SOUZA B. TEIXEIRA',1,124,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110027,'WILSON CORDEIRO M. JUNIOR',1,124,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110026,'ANA CAROLINA COELHO DE SOUZA',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110002,'ANDRÉ LUIZ GOMES DA SILVA',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110022,'ARYANE MENDES DA SILVA ',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310004,'CAROLINA RODRIGUES DE O. LIMA',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310021,'CREUSIENI GOMES DA S. AGOSTINI',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310015,'CREZILDA FURTADO ALVES',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310009,'EDSON DE SOUZA RANGEL',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310005,'ESTER LEONARDO CIRINO SOARES',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310006,'FABIANA GONÇALVES',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310028,'FABIO DE AZEVEDO GUEDES',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310001,'FABIO DE SOUSA MARVILA',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110007,'FERNANDA M. DA S. DE ALEXANDRIA',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110017,'GABRIELA SLOAN DOS S. GUEDES',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310030,'GRAZIELLE ARAUJO MOREIRA',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310012,'JOÃO ROBERTO SILVA FILHO',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310014,'JOELMA FURTADO ALVES',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310020,'JULIO CESAR ROCHA DA SILVA',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310023,'KALINE CALDEIRA DA SILVA',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310031,'LILIA FERREIRA DOS SANTOS',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310027,'LIVIA DO NASCIMENTO E SILVA',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110006,'LUIS CARLOS DE OLIVEIRA',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110015,'MARCIO RODRIGUES DE OLIVEIRA',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310011,'MAX  JANUARIO  SOARES',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (1077470,'PAULO SERGIO RIZZO DA CUNHA',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (1040570,'RENAN VIGNOLI DE ALEXANDRIA ',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310018,'RODRIGO TORRESDA SILVA ',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (1865668,'ROSANE E SILVABARBOSA',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310002,'WALLACE MARCELO MANOEL',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110021,'CARLOS ALBERTO DE A. MENDES',1,124,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110018,'DANIELLE CAVALCANTI S. PINTO',1,124,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110012,'DANIELLE DA PENHA M. DE A. ALVES',1,124,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12310022,'DELVA DA SILVA BARROS',1,124,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12310036,'DOUGLAS DE SOUZA',1,124,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12310003,'FABRINNY GONÇALVES GOMES SANTOS',1,124,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110023,'FELIPE BARBOSA DRUMOND',1,124,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110013,'GABRIEL PEREIRA F. DE MORAES',1,124,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110020,'GABRIELLE HENRIQUES SILVA',1,124,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12310037,'RAQUEL DA SILVA DIAS',1,124,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110010,'ROBSON DOS SANTOS CINTRA',1,124,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (1077470,'THIAGO DE SOUZA B. TEIXEIRA',1,124,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110027,'WILSON CORDEIRO M. JUNIOR',1,124,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110026,'ANA CAROLINA COELHO DE SOUZA',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110002,'ANDRÉ LUIZ GOMES DA SILVA',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110022,'ARYANE MENDES DA SILVA ',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310004,'CAROLINA RODRIGUES DE O. LIMA',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310021,'CREUSIENI GOMES DA S. AGOSTINI',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310015,'CREZILDA FURTADO ALVES',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310009,'EDSON DE SOUZA RANGEL',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310005,'ESTER LEONARDO CIRINO SOARES',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310006,'FABIANA GONÇALVES',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310028,'FABIO DE AZEVEDO GUEDES',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310001,'FABIO DE SOUSA MARVILA',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110007,'FERNANDA M. DA S. DE ALEXANDRIA',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110017,'GABRIELA SLOAN DOS S. GUEDES',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310030,'GRAZIELLE ARAUJO MOREIRA',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310012,'JOÃO ROBERTO SILVA FILHO',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310014,'JOELMA FURTADO ALVES',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310020,'JULIO CESAR ROCHA DA SILVA',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310023,'KALINE CALDEIRA DA SILVA',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310031,'LILIA FERREIRA DOS SANTOS',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310027,'LIVIA DO NASCIMENTO E SILVA',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110006,'LUIS CARLOS DE OLIVEIRA',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110015,'MARCIO RODRIGUES DE OLIVEIRA',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310011,'MAX  JANUARIO  SOARES',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (1077470,'PAULO SERGIO RIZZO DA CUNHA',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (1040570,'RENAN VIGNOLI DE ALEXANDRIA ',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310018,'RODRIGO TORRESDA SILVA ',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (1865668,'ROSANE E SILVABARBOSA',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310002,'WALLACE MARCELO MANOEL',1,324,'TPG','PLANNEG','PLANO DE NEGÓCIOS','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110021,'CARLOS ALBERTO DE A. MENDES',1,124,'TPG','EMPREEND','EMPREENDEDORISMO ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110018,'DANIELLE CAVALCANTI S. PINTO',1,124,'TPG','EMPREEND','EMPREENDEDORISMO ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110012,'DANIELLE DA PENHA M. DE A. ALVES',1,124,'TPG','EMPREEND','EMPREENDEDORISMO ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12310022,'DELVA DA SILVA BARROS',1,124,'TPG','EMPREEND','EMPREENDEDORISMO ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12310036,'DOUGLAS DE SOUZA',1,124,'TPG','EMPREEND','EMPREENDEDORISMO ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12310003,'FABRINNY GONÇALVES GOMES SANTOS',1,124,'TPG','EMPREEND','EMPREENDEDORISMO ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110023,'FELIPE BARBOSA DRUMOND',1,124,'TPG','EMPREEND','EMPREENDEDORISMO ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110013,'GABRIEL PEREIRA F. DE MORAES',1,124,'TPG','EMPREEND','EMPREENDEDORISMO ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110020,'GABRIELLE HENRIQUES SILVA',1,124,'TPG','EMPREEND','EMPREENDEDORISMO ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12310037,'RAQUEL DA SILVA DIAS',1,124,'TPG','EMPREEND','EMPREENDEDORISMO ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110010,'ROBSON DOS SANTOS CINTRA',1,124,'TPG','EMPREEND','EMPREENDEDORISMO ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (1077470,'THIAGO DE SOUZA B. TEIXEIRA',1,124,'TPG','EMPREEND','EMPREENDEDORISMO ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110027,'WILSON CORDEIRO M. JUNIOR',1,124,'TPG','EMPREEND','EMPREENDEDORISMO ','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110026,'ANA CAROLINA COELHO DE SOUZA',1,324,'TPG','EMPREEND','EMPREENDEDORISMO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110002,'ANDRÉ LUIZ GOMES DA SILVA',1,324,'TPG','EMPREEND','EMPREENDEDORISMO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110022,'ARYANE MENDES DA SILVA ',1,324,'TPG','EMPREEND','EMPREENDEDORISMO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310004,'CAROLINA RODRIGUES DE O. LIMA',1,324,'TPG','EMPREEND','EMPREENDEDORISMO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310021,'CREUSIENI GOMES DA S. AGOSTINI',1,324,'TPG','EMPREEND','EMPREENDEDORISMO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310015,'CREZILDA FURTADO ALVES',1,324,'TPG','EMPREEND','EMPREENDEDORISMO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310009,'EDSON DE SOUZA RANGEL',1,324,'TPG','EMPREEND','EMPREENDEDORISMO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310005,'ESTER LEONARDO CIRINO SOARES',1,324,'TPG','EMPREEND','EMPREENDEDORISMO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310006,'FABIANA GONÇALVES',1,324,'TPG','EMPREEND','EMPREENDEDORISMO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310028,'FABIO DE AZEVEDO GUEDES',1,324,'TPG','EMPREEND','EMPREENDEDORISMO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310001,'FABIO DE SOUSA MARVILA',1,324,'TPG','EMPREEND','EMPREENDEDORISMO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110007,'FERNANDA M. DA S. DE ALEXANDRIA',1,324,'TPG','EMPREEND','EMPREENDEDORISMO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110017,'GABRIELA SLOAN DOS S. GUEDES',1,324,'TPG','EMPREEND','EMPREENDEDORISMO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310030,'GRAZIELLE ARAUJO MOREIRA',1,324,'TPG','EMPREEND','EMPREENDEDORISMO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310012,'JOÃO ROBERTO SILVA FILHO',1,324,'TPG','EMPREEND','EMPREENDEDORISMO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310014,'JOELMA FURTADO ALVES',1,324,'TPG','EMPREEND','EMPREENDEDORISMO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310020,'JULIO CESAR ROCHA DA SILVA',1,324,'TPG','EMPREEND','EMPREENDEDORISMO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310023,'KALINE CALDEIRA DA SILVA',1,324,'TPG','EMPREEND','EMPREENDEDORISMO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310031,'LILIA FERREIRA DOS SANTOS',1,324,'TPG','EMPREEND','EMPREENDEDORISMO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310027,'LIVIA DO NASCIMENTO E SILVA',1,324,'TPG','EMPREEND','EMPREENDEDORISMO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110006,'LUIS CARLOS DE OLIVEIRA',1,324,'TPG','EMPREEND','EMPREENDEDORISMO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110015,'MARCIO RODRIGUES DE OLIVEIRA',1,324,'TPG','EMPREEND','EMPREENDEDORISMO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310011,'MAX  JANUARIO  SOARES',1,324,'TPG','EMPREEND','EMPREENDEDORISMO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (1077470,'PAULO SERGIO RIZZO DA CUNHA',1,324,'TPG','EMPREEND','EMPREENDEDORISMO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (1040570,'RENAN VIGNOLI DE ALEXANDRIA ',1,324,'TPG','EMPREEND','EMPREENDEDORISMO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310018,'RODRIGO TORRESDA SILVA ',1,324,'TPG','EMPREEND','EMPREENDEDORISMO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (1865668,'ROSANE E SILVABARBOSA',1,324,'TPG','EMPREEND','EMPREENDEDORISMO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310002,'WALLACE MARCELO MANOEL',1,324,'TPG','EMPREEND','EMPREENDEDORISMO ','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110021,'CARLOS ALBERTO DE A. MENDES',1,124,'TPG','GESTAMBRESPSOC','GESTÃO AMBIENTAL E RESPONSABILIDADE SOCIAL','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110018,'DANIELLE CAVALCANTI S. PINTO',1,124,'TPG','GESTAMBRESPSOC','GESTÃO AMBIENTAL E RESPONSABILIDADE SOCIAL','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110012,'DANIELLE DA PENHA M. DE A. ALVES',1,124,'TPG','GESTAMBRESPSOC','GESTÃO AMBIENTAL E RESPONSABILIDADE SOCIAL','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12310022,'DELVA DA SILVA BARROS',1,124,'TPG','GESTAMBRESPSOC','GESTÃO AMBIENTAL E RESPONSABILIDADE SOCIAL','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12310036,'DOUGLAS DE SOUZA',1,124,'TPG','GESTAMBRESPSOC','GESTÃO AMBIENTAL E RESPONSABILIDADE SOCIAL','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12310003,'FABRINNY GONÇALVES GOMES SANTOS',1,124,'TPG','GESTAMBRESPSOC','GESTÃO AMBIENTAL E RESPONSABILIDADE SOCIAL','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110023,'FELIPE BARBOSA DRUMOND',1,124,'TPG','GESTAMBRESPSOC','GESTÃO AMBIENTAL E RESPONSABILIDADE SOCIAL','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110013,'GABRIEL PEREIRA F. DE MORAES',1,124,'TPG','GESTAMBRESPSOC','GESTÃO AMBIENTAL E RESPONSABILIDADE SOCIAL','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110020,'GABRIELLE HENRIQUES SILVA',1,124,'TPG','GESTAMBRESPSOC','GESTÃO AMBIENTAL E RESPONSABILIDADE SOCIAL','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12310037,'RAQUEL DA SILVA DIAS',1,124,'TPG','GESTAMBRESPSOC','GESTÃO AMBIENTAL E RESPONSABILIDADE SOCIAL','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110010,'ROBSON DOS SANTOS CINTRA',1,124,'TPG','GESTAMBRESPSOC','GESTÃO AMBIENTAL E RESPONSABILIDADE SOCIAL','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (1077470,'THIAGO DE SOUZA B. TEIXEIRA',1,124,'TPG','GESTAMBRESPSOC','GESTÃO AMBIENTAL E RESPONSABILIDADE SOCIAL','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110027,'WILSON CORDEIRO M. JUNIOR',1,124,'TPG','GESTAMBRESPSOC','GESTÃO AMBIENTAL E RESPONSABILIDADE SOCIAL','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110026,'ANA CAROLINA COELHO DE SOUZA',1,324,'TPG','GESTAMBRESPSOC','GESTÃO AMBIENTAL E RESPONSABILIDADE SOCIAL','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110002,'ANDRÉ LUIZ GOMES DA SILVA',1,324,'TPG','GESTAMBRESPSOC','GESTÃO AMBIENTAL E RESPONSABILIDADE SOCIAL','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110022,'ARYANE MENDES DA SILVA ',1,324,'TPG','GESTAMBRESPSOC','GESTÃO AMBIENTAL E RESPONSABILIDADE SOCIAL','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310004,'CAROLINA RODRIGUES DE O. LIMA',1,324,'TPG','GESTAMBRESPSOC','GESTÃO AMBIENTAL E RESPONSABILIDADE SOCIAL','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310021,'CREUSIENI GOMES DA S. AGOSTINI',1,324,'TPG','GESTAMBRESPSOC','GESTÃO AMBIENTAL E RESPONSABILIDADE SOCIAL','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310015,'CREZILDA FURTADO ALVES',1,324,'TPG','GESTAMBRESPSOC','GESTÃO AMBIENTAL E RESPONSABILIDADE SOCIAL','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310009,'EDSON DE SOUZA RANGEL',1,324,'TPG','GESTAMBRESPSOC','GESTÃO AMBIENTAL E RESPONSABILIDADE SOCIAL','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310005,'ESTER LEONARDO CIRINO SOARES',1,324,'TPG','GESTAMBRESPSOC','GESTÃO AMBIENTAL E RESPONSABILIDADE SOCIAL','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310006,'FABIANA GONÇALVES',1,324,'TPG','GESTAMBRESPSOC','GESTÃO AMBIENTAL E RESPONSABILIDADE SOCIAL','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310028,'FABIO DE AZEVEDO GUEDES',1,324,'TPG','GESTAMBRESPSOC','GESTÃO AMBIENTAL E RESPONSABILIDADE SOCIAL','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310001,'FABIO DE SOUSA MARVILA',1,324,'TPG','GESTAMBRESPSOC','GESTÃO AMBIENTAL E RESPONSABILIDADE SOCIAL','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110007,'FERNANDA M. DA S. DE ALEXANDRIA',1,324,'TPG','GESTAMBRESPSOC','GESTÃO AMBIENTAL E RESPONSABILIDADE SOCIAL','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110017,'GABRIELA SLOAN DOS S. GUEDES',1,324,'TPG','GESTAMBRESPSOC','GESTÃO AMBIENTAL E RESPONSABILIDADE SOCIAL','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310030,'GRAZIELLE ARAUJO MOREIRA',1,324,'TPG','GESTAMBRESPSOC','GESTÃO AMBIENTAL E RESPONSABILIDADE SOCIAL','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310012,'JOÃO ROBERTO SILVA FILHO',1,324,'TPG','GESTAMBRESPSOC','GESTÃO AMBIENTAL E RESPONSABILIDADE SOCIAL','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310014,'JOELMA FURTADO ALVES',1,324,'TPG','GESTAMBRESPSOC','GESTÃO AMBIENTAL E RESPONSABILIDADE SOCIAL','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310020,'JULIO CESAR ROCHA DA SILVA',1,324,'TPG','GESTAMBRESPSOC','GESTÃO AMBIENTAL E RESPONSABILIDADE SOCIAL','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310023,'KALINE CALDEIRA DA SILVA',1,324,'TPG','GESTAMBRESPSOC','GESTÃO AMBIENTAL E RESPONSABILIDADE SOCIAL','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310031,'LILIA FERREIRA DOS SANTOS',1,324,'TPG','GESTAMBRESPSOC','GESTÃO AMBIENTAL E RESPONSABILIDADE SOCIAL','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310027,'LIVIA DO NASCIMENTO E SILVA',1,324,'TPG','GESTAMBRESPSOC','GESTÃO AMBIENTAL E RESPONSABILIDADE SOCIAL','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110006,'LUIS CARLOS DE OLIVEIRA',1,324,'TPG','GESTAMBRESPSOC','GESTÃO AMBIENTAL E RESPONSABILIDADE SOCIAL','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110015,'MARCIO RODRIGUES DE OLIVEIRA',1,324,'TPG','GESTAMBRESPSOC','GESTÃO AMBIENTAL E RESPONSABILIDADE SOCIAL','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310011,'MAX  JANUARIO  SOARES',1,324,'TPG','GESTAMBRESPSOC','GESTÃO AMBIENTAL E RESPONSABILIDADE SOCIAL','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (1077470,'PAULO SERGIO RIZZO DA CUNHA',1,324,'TPG','GESTAMBRESPSOC','GESTÃO AMBIENTAL E RESPONSABILIDADE SOCIAL','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (1040570,'RENAN VIGNOLI DE ALEXANDRIA ',1,324,'TPG','GESTAMBRESPSOC','GESTÃO AMBIENTAL E RESPONSABILIDADE SOCIAL','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310018,'RODRIGO TORRESDA SILVA ',1,324,'TPG','GESTAMBRESPSOC','GESTÃO AMBIENTAL E RESPONSABILIDADE SOCIAL','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (1865668,'ROSANE E SILVABARBOSA',1,324,'TPG','GESTAMBRESPSOC','GESTÃO AMBIENTAL E RESPONSABILIDADE SOCIAL','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310002,'WALLACE MARCELO MANOEL',1,324,'TPG','GESTAMBRESPSOC','GESTÃO AMBIENTAL E RESPONSABILIDADE SOCIAL','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110021,'CARLOS ALBERTO DE A. MENDES',1,124,'TPG','METMATAPLPG1','MÉTODOS MATEMÁTICOS APLICADOS A PROCESSOS GERENCIAIS I','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110018,'DANIELLE CAVALCANTI S. PINTO',1,124,'TPG','METMATAPLPG1','MÉTODOS MATEMÁTICOS APLICADOS A PROCESSOS GERENCIAIS I','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110012,'DANIELLE DA PENHA M. DE A. ALVES',1,124,'TPG','METMATAPLPG1','MÉTODOS MATEMÁTICOS APLICADOS A PROCESSOS GERENCIAIS I','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12310022,'DELVA DA SILVA BARROS',1,124,'TPG','METMATAPLPG1','MÉTODOS MATEMÁTICOS APLICADOS A PROCESSOS GERENCIAIS I','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12310036,'DOUGLAS DE SOUZA',1,124,'TPG','METMATAPLPG1','MÉTODOS MATEMÁTICOS APLICADOS A PROCESSOS GERENCIAIS I','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12310003,'FABRINNY GONÇALVES GOMES SANTOS',1,124,'TPG','METMATAPLPG1','MÉTODOS MATEMÁTICOS APLICADOS A PROCESSOS GERENCIAIS I','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110023,'FELIPE BARBOSA DRUMOND',1,124,'TPG','METMATAPLPG1','MÉTODOS MATEMÁTICOS APLICADOS A PROCESSOS GERENCIAIS I','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110013,'GABRIEL PEREIRA F. DE MORAES',1,124,'TPG','METMATAPLPG1','MÉTODOS MATEMÁTICOS APLICADOS A PROCESSOS GERENCIAIS I','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110020,'GABRIELLE HENRIQUES SILVA',1,124,'TPG','METMATAPLPG1','MÉTODOS MATEMÁTICOS APLICADOS A PROCESSOS GERENCIAIS I','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12310037,'RAQUEL DA SILVA DIAS',1,124,'TPG','METMATAPLPG1','MÉTODOS MATEMÁTICOS APLICADOS A PROCESSOS GERENCIAIS I','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110010,'ROBSON DOS SANTOS CINTRA',1,124,'TPG','METMATAPLPG1','MÉTODOS MATEMÁTICOS APLICADOS A PROCESSOS GERENCIAIS I','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (1077470,'THIAGO DE SOUZA B. TEIXEIRA',1,124,'TPG','METMATAPLPG1','MÉTODOS MATEMÁTICOS APLICADOS A PROCESSOS GERENCIAIS I','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110027,'WILSON CORDEIRO M. JUNIOR',1,124,'TPG','METMATAPLPG1','MÉTODOS MATEMÁTICOS APLICADOS A PROCESSOS GERENCIAIS I','2013.2','MANHÃ',4,4,2);
INSERT INTO `teste` VALUES (12110026,'ANA CAROLINA COELHO DE SOUZA',1,324,'TPG','METMATAPLPG1','MÉTODOS MATEMÁTICOS APLICADOS A PROCESSOS GERENCIAIS I','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110002,'ANDRÉ LUIZ GOMES DA SILVA',1,324,'TPG','METMATAPLPG1','MÉTODOS MATEMÁTICOS APLICADOS A PROCESSOS GERENCIAIS I','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110022,'ARYANE MENDES DA SILVA ',1,324,'TPG','METMATAPLPG1','MÉTODOS MATEMÁTICOS APLICADOS A PROCESSOS GERENCIAIS I','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310004,'CAROLINA RODRIGUES DE O. LIMA',1,324,'TPG','METMATAPLPG1','MÉTODOS MATEMÁTICOS APLICADOS A PROCESSOS GERENCIAIS I','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310021,'CREUSIENI GOMES DA S. AGOSTINI',1,324,'TPG','METMATAPLPG1','MÉTODOS MATEMÁTICOS APLICADOS A PROCESSOS GERENCIAIS I','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310015,'CREZILDA FURTADO ALVES',1,324,'TPG','METMATAPLPG1','MÉTODOS MATEMÁTICOS APLICADOS A PROCESSOS GERENCIAIS I','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310009,'EDSON DE SOUZA RANGEL',1,324,'TPG','METMATAPLPG1','MÉTODOS MATEMÁTICOS APLICADOS A PROCESSOS GERENCIAIS I','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310005,'ESTER LEONARDO CIRINO SOARES',1,324,'TPG','METMATAPLPG1','MÉTODOS MATEMÁTICOS APLICADOS A PROCESSOS GERENCIAIS I','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310006,'FABIANA GONÇALVES',1,324,'TPG','METMATAPLPG1','MÉTODOS MATEMÁTICOS APLICADOS A PROCESSOS GERENCIAIS I','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310028,'FABIO DE AZEVEDO GUEDES',1,324,'TPG','METMATAPLPG1','MÉTODOS MATEMÁTICOS APLICADOS A PROCESSOS GERENCIAIS I','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310001,'FABIO DE SOUSA MARVILA',1,324,'TPG','METMATAPLPG1','MÉTODOS MATEMÁTICOS APLICADOS A PROCESSOS GERENCIAIS I','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110007,'FERNANDA M. DA S. DE ALEXANDRIA',1,324,'TPG','METMATAPLPG1','MÉTODOS MATEMÁTICOS APLICADOS A PROCESSOS GERENCIAIS I','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110017,'GABRIELA SLOAN DOS S. GUEDES',1,324,'TPG','METMATAPLPG1','MÉTODOS MATEMÁTICOS APLICADOS A PROCESSOS GERENCIAIS I','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310030,'GRAZIELLE ARAUJO MOREIRA',1,324,'TPG','METMATAPLPG1','MÉTODOS MATEMÁTICOS APLICADOS A PROCESSOS GERENCIAIS I','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310012,'JOÃO ROBERTO SILVA FILHO',1,324,'TPG','METMATAPLPG1','MÉTODOS MATEMÁTICOS APLICADOS A PROCESSOS GERENCIAIS I','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310014,'JOELMA FURTADO ALVES',1,324,'TPG','METMATAPLPG1','MÉTODOS MATEMÁTICOS APLICADOS A PROCESSOS GERENCIAIS I','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310020,'JULIO CESAR ROCHA DA SILVA',1,324,'TPG','METMATAPLPG1','MÉTODOS MATEMÁTICOS APLICADOS A PROCESSOS GERENCIAIS I','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310023,'KALINE CALDEIRA DA SILVA',1,324,'TPG','METMATAPLPG1','MÉTODOS MATEMÁTICOS APLICADOS A PROCESSOS GERENCIAIS I','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310031,'LILIA FERREIRA DOS SANTOS',1,324,'TPG','METMATAPLPG1','MÉTODOS MATEMÁTICOS APLICADOS A PROCESSOS GERENCIAIS I','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310027,'LIVIA DO NASCIMENTO E SILVA',1,324,'TPG','METMATAPLPG1','MÉTODOS MATEMÁTICOS APLICADOS A PROCESSOS GERENCIAIS I','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110006,'LUIS CARLOS DE OLIVEIRA',1,324,'TPG','METMATAPLPG1','MÉTODOS MATEMÁTICOS APLICADOS A PROCESSOS GERENCIAIS I','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110015,'MARCIO RODRIGUES DE OLIVEIRA',1,324,'TPG','METMATAPLPG1','MÉTODOS MATEMÁTICOS APLICADOS A PROCESSOS GERENCIAIS I','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310011,'MAX  JANUARIO  SOARES',1,324,'TPG','METMATAPLPG1','MÉTODOS MATEMÁTICOS APLICADOS A PROCESSOS GERENCIAIS I','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (1077470,'PAULO SERGIO RIZZO DA CUNHA',1,324,'TPG','METMATAPLPG1','MÉTODOS MATEMÁTICOS APLICADOS A PROCESSOS GERENCIAIS I','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (1040570,'RENAN VIGNOLI DE ALEXANDRIA ',1,324,'TPG','METMATAPLPG1','MÉTODOS MATEMÁTICOS APLICADOS A PROCESSOS GERENCIAIS I','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310018,'RODRIGO TORRESDA SILVA ',1,324,'TPG','METMATAPLPG1','MÉTODOS MATEMÁTICOS APLICADOS A PROCESSOS GERENCIAIS I','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (1865668,'ROSANE E SILVABARBOSA',1,324,'TPG','METMATAPLPG1','MÉTODOS MATEMÁTICOS APLICADOS A PROCESSOS GERENCIAIS I','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310002,'WALLACE MARCELO MANOEL',1,324,'TPG','METMATAPLPG1','MÉTODOS MATEMÁTICOS APLICADOS A PROCESSOS GERENCIAIS I','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110021,'CARLOS ALBERTO DE A. MENDES',1,124,'TPG','PI_PLANMARK','PROJETO INTEGRADOR - PLANEJAMENTO DE MARKETING','2013.2','MANHÃ ',4,4,2);
INSERT INTO `teste` VALUES (12110018,'DANIELLE CAVALCANTI S. PINTO',1,124,'TPG','PI_PLANMARK','PROJETO INTEGRADOR - PLANEJAMENTO DE MARKETING','2013.2','MANHÃ ',4,4,2);
INSERT INTO `teste` VALUES (12110012,'DANIELLE DA PENHA M. DE A. ALVES',1,124,'TPG','PI_PLANMARK','PROJETO INTEGRADOR - PLANEJAMENTO DE MARKETING','2013.2','MANHÃ ',4,4,2);
INSERT INTO `teste` VALUES (12310022,'DELVA DA SILVA BARROS',1,124,'TPG','PI_PLANMARK','PROJETO INTEGRADOR - PLANEJAMENTO DE MARKETING','2013.2','MANHÃ ',4,4,2);
INSERT INTO `teste` VALUES (12310036,'DOUGLAS DE SOUZA',1,124,'TPG','PI_PLANMARK','PROJETO INTEGRADOR - PLANEJAMENTO DE MARKETING','2013.2','MANHÃ ',4,4,2);
INSERT INTO `teste` VALUES (12310003,'FABRINNY GONÇALVES GOMES SANTOS',1,124,'TPG','PI_PLANMARK','PROJETO INTEGRADOR - PLANEJAMENTO DE MARKETING','2013.2','MANHÃ ',4,4,2);
INSERT INTO `teste` VALUES (12110023,'FELIPE BARBOSA DRUMOND',1,124,'TPG','PI_PLANMARK','PROJETO INTEGRADOR - PLANEJAMENTO DE MARKETING','2013.2','MANHÃ ',4,4,2);
INSERT INTO `teste` VALUES (12110013,'GABRIEL PEREIRA F. DE MORAES',1,124,'TPG','PI_PLANMARK','PROJETO INTEGRADOR - PLANEJAMENTO DE MARKETING','2013.2','MANHÃ ',4,4,2);
INSERT INTO `teste` VALUES (12110020,'GABRIELLE HENRIQUES SILVA',1,124,'TPG','PI_PLANMARK','PROJETO INTEGRADOR - PLANEJAMENTO DE MARKETING','2013.2','MANHÃ ',4,4,2);
INSERT INTO `teste` VALUES (12310037,'RAQUEL DA SILVA DIAS',1,124,'TPG','PI_PLANMARK','PROJETO INTEGRADOR - PLANEJAMENTO DE MARKETING','2013.2','MANHÃ ',4,4,2);
INSERT INTO `teste` VALUES (12110010,'ROBSON DOS SANTOS CINTRA',1,124,'TPG','PI_PLANMARK','PROJETO INTEGRADOR - PLANEJAMENTO DE MARKETING','2013.2','MANHÃ ',4,4,2);
INSERT INTO `teste` VALUES (1077470,'THIAGO DE SOUZA B. TEIXEIRA',1,124,'TPG','PI_PLANMARK','PROJETO INTEGRADOR - PLANEJAMENTO DE MARKETING','2013.2','MANHÃ ',4,4,2);
INSERT INTO `teste` VALUES (12110027,'WILSON CORDEIRO M. JUNIOR',1,124,'TPG','PI_PLANMARK','PROJETO INTEGRADOR - PLANEJAMENTO DE MARKETING','2013.2','MANHÃ ',4,4,2);
INSERT INTO `teste` VALUES (12110026,'ANA CAROLINA COELHO DE SOUZA',1,324,'TPG','PI_PLANMARK','PROJETO INTEGRADOR - PLANEJAMENTO DE MARKETING','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110002,'ANDRÉ LUIZ GOMES DA SILVA',1,324,'TPG','PI_PLANMARK','PROJETO INTEGRADOR - PLANEJAMENTO DE MARKETING','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110022,'ARYANE MENDES DA SILVA ',1,324,'TPG','PI_PLANMARK','PROJETO INTEGRADOR - PLANEJAMENTO DE MARKETING','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310004,'CAROLINA RODRIGUES DE O. LIMA',1,324,'TPG','PI_PLANMARK','PROJETO INTEGRADOR - PLANEJAMENTO DE MARKETING','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310021,'CREUSIENI GOMES DA S. AGOSTINI',1,324,'TPG','PI_PLANMARK','PROJETO INTEGRADOR - PLANEJAMENTO DE MARKETING','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310015,'CREZILDA FURTADO ALVES',1,324,'TPG','PI_PLANMARK','PROJETO INTEGRADOR - PLANEJAMENTO DE MARKETING','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310009,'EDSON DE SOUZA RANGEL',1,324,'TPG','PI_PLANMARK','PROJETO INTEGRADOR - PLANEJAMENTO DE MARKETING','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310005,'ESTER LEONARDO CIRINO SOARES',1,324,'TPG','PI_PLANMARK','PROJETO INTEGRADOR - PLANEJAMENTO DE MARKETING','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310006,'FABIANA GONÇALVES',1,324,'TPG','PI_PLANMARK','PROJETO INTEGRADOR - PLANEJAMENTO DE MARKETING','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310028,'FABIO DE AZEVEDO GUEDES',1,324,'TPG','PI_PLANMARK','PROJETO INTEGRADOR - PLANEJAMENTO DE MARKETING','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310001,'FABIO DE SOUSA MARVILA',1,324,'TPG','PI_PLANMARK','PROJETO INTEGRADOR - PLANEJAMENTO DE MARKETING','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110007,'FERNANDA M. DA S. DE ALEXANDRIA',1,324,'TPG','PI_PLANMARK','PROJETO INTEGRADOR - PLANEJAMENTO DE MARKETING','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110017,'GABRIELA SLOAN DOS S. GUEDES',1,324,'TPG','PI_PLANMARK','PROJETO INTEGRADOR - PLANEJAMENTO DE MARKETING','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310030,'GRAZIELLE ARAUJO MOREIRA',1,324,'TPG','PI_PLANMARK','PROJETO INTEGRADOR - PLANEJAMENTO DE MARKETING','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310012,'JOÃO ROBERTO SILVA FILHO',1,324,'TPG','PI_PLANMARK','PROJETO INTEGRADOR - PLANEJAMENTO DE MARKETING','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310014,'JOELMA FURTADO ALVES',1,324,'TPG','PI_PLANMARK','PROJETO INTEGRADOR - PLANEJAMENTO DE MARKETING','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310020,'JULIO CESAR ROCHA DA SILVA',1,324,'TPG','PI_PLANMARK','PROJETO INTEGRADOR - PLANEJAMENTO DE MARKETING','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310023,'KALINE CALDEIRA DA SILVA',1,324,'TPG','PI_PLANMARK','PROJETO INTEGRADOR - PLANEJAMENTO DE MARKETING','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310031,'LILIA FERREIRA DOS SANTOS',1,324,'TPG','PI_PLANMARK','PROJETO INTEGRADOR - PLANEJAMENTO DE MARKETING','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310027,'LIVIA DO NASCIMENTO E SILVA',1,324,'TPG','PI_PLANMARK','PROJETO INTEGRADOR - PLANEJAMENTO DE MARKETING','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110006,'LUIS CARLOS DE OLIVEIRA',1,324,'TPG','PI_PLANMARK','PROJETO INTEGRADOR - PLANEJAMENTO DE MARKETING','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12110015,'MARCIO RODRIGUES DE OLIVEIRA',1,324,'TPG','PI_PLANMARK','PROJETO INTEGRADOR - PLANEJAMENTO DE MARKETING','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310011,'MAX  JANUARIO  SOARES',1,324,'TPG','PI_PLANMARK','PROJETO INTEGRADOR - PLANEJAMENTO DE MARKETING','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (1077470,'PAULO SERGIO RIZZO DA CUNHA',1,324,'TPG','PI_PLANMARK','PROJETO INTEGRADOR - PLANEJAMENTO DE MARKETING','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (1040570,'RENAN VIGNOLI DE ALEXANDRIA ',1,324,'TPG','PI_PLANMARK','PROJETO INTEGRADOR - PLANEJAMENTO DE MARKETING','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310018,'RODRIGO TORRESDA SILVA ',1,324,'TPG','PI_PLANMARK','PROJETO INTEGRADOR - PLANEJAMENTO DE MARKETING','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (1865668,'ROSANE E SILVABARBOSA',1,324,'TPG','PI_PLANMARK','PROJETO INTEGRADOR - PLANEJAMENTO DE MARKETING','2013.2','NOITE ',4,4,2);
INSERT INTO `teste` VALUES (12310002,'WALLACE MARCELO MANOEL',1,324,'TPG','PI_PLANMARK','PROJETO INTEGRADOR - PLANEJAMENTO DE MARKETING','2013.2','NOITE ',4,4,2);

CREATE TABLE `tipocomponente` (
  `idtipocomponente` int(11) NOT NULL auto_increment,
  `descricao` varchar(30) default NULL,
  PRIMARY KEY  (`idtipocomponente`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `tipocomponente` VALUES (1,'OBRIGATÓRIA');
INSERT INTO `tipocomponente` VALUES (2,'OPCIONAL');

CREATE TABLE `tipocurso` (
  `idtipocurso` int(11) NOT NULL auto_increment,
  `descricao` varchar(70) default NULL,
  PRIMARY KEY  (`idtipocurso`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `tipocurso` VALUES (1,'GRADUAÇÃO');
INSERT INTO `tipocurso` VALUES (2,'PÓS GRAGUAÇÃO LATO SENSU');

CREATE TABLE `tipodocumento` (
  `idtipodocumento` int(11) NOT NULL auto_increment,
  `descricao` varchar(255) default NULL,
  PRIMARY KEY  (`idtipodocumento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `tipoevento` (
  `idtipoevento` int(11) NOT NULL auto_increment,
  `descricao` varchar(255) default NULL,
  PRIMARY KEY  (`idtipoevento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `titulacao` (
  `idtitulacao` int(11) NOT NULL auto_increment,
  `descricao` varchar(255) default NULL,
  PRIMARY KEY  (`idtitulacao`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `titulacao` VALUES (1,'ESPECIALISTA');
INSERT INTO `titulacao` VALUES (2,'MESTRE');
INSERT INTO `titulacao` VALUES (3,'DOUTOR');

CREATE TABLE `turma` (
  `idturma` int(11) NOT NULL default '0',
  `siglacurso` varchar(255) NOT NULL default '',
  `sigladisciplina` varchar(255) NOT NULL default '',
  `idmatriz` int(11) NOT NULL default '0',
  `matriculaprofessor` varchar(11) default NULL,
  `grade_horario` int(11) default NULL,
  `idperiodoletivo` int(11) NOT NULL default '0',
  `turno` varchar(5) NOT NULL default '',
  `idsituacaoturma` int(11) default NULL,
  `qtdetotal` int(11) default NULL,
  PRIMARY KEY  (`idturma`,`siglacurso`,`sigladisciplina`,`idmatriz`,`turno`,`idperiodoletivo`),
  KEY `siglacurso` (`siglacurso`),
  KEY `sigladisciplina` (`sigladisciplina`),
  KEY `idmatriz` (`idmatriz`),
  KEY `matriculaprofessor` (`matriculaprofessor`),
  KEY `idperiodoletivo` (`idperiodoletivo`),
  KEY `idsituacaoturma` (`idsituacaoturma`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `turma` VALUES (121,'TPG','DIREMPR',1,NULL,NULL,2,'MANHÃ',4,NULL);
INSERT INTO `turma` VALUES (121,'TPG','ESTAPLIC',1,NULL,NULL,2,'MANHA',4,NULL);
INSERT INTO `turma` VALUES (121,'TPG','INFINSTR',1,NULL,NULL,2,'MANHÃ',4,NULL);
INSERT INTO `turma` VALUES (121,'TPG','INGLINSTR1',1,NULL,NULL,2,'MANHÃ',4,NULL);
INSERT INTO `turma` VALUES (121,'TPG','INTADM',1,NULL,NULL,2,'MANHÃ',4,NULL);
INSERT INTO `turma` VALUES (121,'TPG','INTECO',1,NULL,NULL,2,'MANHÃ',4,NULL);
INSERT INTO `turma` VALUES (121,'TPG','MATAPLICADM',1,NULL,NULL,2,'MANHÃ',4,NULL);
INSERT INTO `turma` VALUES (121,'TPG','METPECITEC',1,NULL,NULL,2,'MANHÃ',4,NULL);
INSERT INTO `turma` VALUES (121,'TPG','METPECITEC',1,NULL,NULL,2,'NOITE',4,NULL);
INSERT INTO `turma` VALUES (121,'TPG','PORTINSTR',1,NULL,NULL,2,'MANHÃ',4,NULL);
INSERT INTO `turma` VALUES (122,'TPG','EL_COMPHUM',1,NULL,NULL,2,'MANHÃ',4,NULL);
INSERT INTO `turma` VALUES (122,'TPG','EL_COMPHUM',1,NULL,NULL,2,'NOITE',4,NULL);
INSERT INTO `turma` VALUES (122,'TPG','EL_METTECDINGR',1,NULL,NULL,2,'MANHÃ',4,NULL);
INSERT INTO `turma` VALUES (122,'TPG','EL_METTECDINGR',1,NULL,NULL,2,'NOITE',4,NULL);
INSERT INTO `turma` VALUES (122,'TPG','GESESTRPES',1,NULL,NULL,2,'MANHÃ',4,NULL);
INSERT INTO `turma` VALUES (122,'TPG','GESESTRTI',1,NULL,NULL,2,'MANHÃ',4,NULL);
INSERT INTO `turma` VALUES (122,'TPG','GESTTAL',1,NULL,NULL,2,'MANHÃ',4,NULL);
INSERT INTO `turma` VALUES (122,'TPG','INGLINSTR2',1,NULL,NULL,2,'MANHÃ',4,NULL);
INSERT INTO `turma` VALUES (122,'TPG','INTEMOGER',1,NULL,NULL,2,'MANHÃ',4,NULL);
INSERT INTO `turma` VALUES (122,'TPG','PI_PLANRH',1,NULL,NULL,2,'MANHÃ',4,NULL);
INSERT INTO `turma` VALUES (122,'TPG','PI_PLANRH',1,NULL,NULL,2,'NOITE',4,NULL);
INSERT INTO `turma` VALUES (122,'TPG','RECRSELPES',1,NULL,NULL,2,'MANHÃ',4,NULL);
INSERT INTO `turma` VALUES (123,'TPG','GESTCOMSUPR',1,NULL,NULL,2,'MANHÃ',4,NULL);
INSERT INTO `turma` VALUES (123,'TPG','GESTESTRPLAN',1,NULL,NULL,2,'MANHÃ',4,NULL);
INSERT INTO `turma` VALUES (123,'TPG','GESTPROCORGA',1,NULL,NULL,2,'MANHÃ',4,NULL);
INSERT INTO `turma` VALUES (123,'TPG','GESTPROD',1,NULL,NULL,2,'MANHÃ',4,NULL);
INSERT INTO `turma` VALUES (123,'TPG','GESTPROJ',1,NULL,NULL,2,'MANHÃ',4,NULL);
INSERT INTO `turma` VALUES (123,'TPG','GESTQUAL',1,NULL,NULL,2,'MANHÃ',4,NULL);
INSERT INTO `turma` VALUES (123,'TPG','LOGDISTR',1,NULL,NULL,2,'MANHÃ',4,NULL);
INSERT INTO `turma` VALUES (123,'TPG','PI_PLANOPERLOG',1,NULL,NULL,2,'MANHÃ',4,NULL);
INSERT INTO `turma` VALUES (123,'TPG','SISTINFGER',1,NULL,NULL,2,'MANHÃ',4,NULL);
INSERT INTO `turma` VALUES (124,'TPG','EMPREEND',1,NULL,NULL,2,'MANHÃ',4,NULL);
INSERT INTO `turma` VALUES (124,'TPG','GESTAMBRESPSOC',1,NULL,NULL,2,'MANHÃ',4,NULL);
INSERT INTO `turma` VALUES (124,'TPG','GESTMARK',1,NULL,NULL,2,'MANHÃ',4,NULL);
INSERT INTO `turma` VALUES (124,'TPG','GESTVENNEG',1,NULL,NULL,2,'MANHÃ',4,NULL);
INSERT INTO `turma` VALUES (124,'TPG','METMATAPLPG1',1,NULL,NULL,2,'MANHÃ',4,NULL);
INSERT INTO `turma` VALUES (124,'TPG','NEGINTER',1,NULL,NULL,2,'MANHÃ',4,NULL);
INSERT INTO `turma` VALUES (124,'TPG','PESQANALMERC',1,NULL,NULL,2,'MANHÃ',4,NULL);
INSERT INTO `turma` VALUES (124,'TPG','PI_PLANMARK',1,NULL,NULL,2,'MANHÃ',4,NULL);
INSERT INTO `turma` VALUES (124,'TPG','PLANNEG',1,NULL,NULL,2,'MANHÃ',4,NULL);
INSERT INTO `turma` VALUES (321,'TPG','DIREMPR',1,NULL,NULL,2,'NOITE',4,NULL);
INSERT INTO `turma` VALUES (321,'TPG','ESTAPLIC',1,NULL,NULL,2,'NOITE',4,NULL);
INSERT INTO `turma` VALUES (321,'TPG','INFINSTR',1,NULL,NULL,2,'NOITE',4,NULL);
INSERT INTO `turma` VALUES (321,'TPG','INGLINSTR1',1,NULL,NULL,2,'NOITE',4,NULL);
INSERT INTO `turma` VALUES (321,'TPG','INTADM',1,NULL,NULL,2,'NOITE',4,NULL);
INSERT INTO `turma` VALUES (321,'TPG','INTECO',1,NULL,NULL,2,'NOITE',4,NULL);
INSERT INTO `turma` VALUES (321,'TPG','MATAPLICADM',1,NULL,NULL,2,'NOITE',4,NULL);
INSERT INTO `turma` VALUES (321,'TPG','PORTINSTR',1,NULL,NULL,2,'NOITE',4,NULL);
INSERT INTO `turma` VALUES (322,'TPG','GESESTRPES',1,NULL,NULL,2,'NOITE',4,NULL);
INSERT INTO `turma` VALUES (322,'TPG','GESESTRTI',1,NULL,NULL,2,'NOITE',4,NULL);
INSERT INTO `turma` VALUES (322,'TPG','GESTTAL',1,NULL,NULL,2,'NOITE',4,NULL);
INSERT INTO `turma` VALUES (322,'TPG','INGLINSTR2',1,NULL,NULL,2,'NOITE',4,NULL);
INSERT INTO `turma` VALUES (322,'TPG','INTEMOGER',1,NULL,NULL,2,'NOITE',4,NULL);
INSERT INTO `turma` VALUES (322,'TPG','RECRSELPES',1,NULL,NULL,2,'NOITE',4,NULL);
INSERT INTO `turma` VALUES (323,'TPG','GESTCOMSUPR',1,NULL,NULL,2,'NOITE',4,NULL);
INSERT INTO `turma` VALUES (323,'TPG','GESTESTRPLAN',1,NULL,NULL,2,'NOITE',4,NULL);
INSERT INTO `turma` VALUES (323,'TPG','GESTPROCORGA',1,NULL,NULL,2,'NOITE',4,NULL);
INSERT INTO `turma` VALUES (323,'TPG','GESTPROD',1,NULL,NULL,2,'NOITE',4,NULL);
INSERT INTO `turma` VALUES (323,'TPG','GESTPROJ',1,NULL,NULL,2,'NOITE',4,NULL);
INSERT INTO `turma` VALUES (323,'TPG','GESTQUAL',1,NULL,NULL,2,'NOITE',4,NULL);
INSERT INTO `turma` VALUES (323,'TPG','LOGDISTR',1,NULL,NULL,2,'NOITE',4,NULL);
INSERT INTO `turma` VALUES (323,'TPG','PI_PLANOPERLOG',1,NULL,NULL,2,'NOITE',4,NULL);
INSERT INTO `turma` VALUES (323,'TPG','SISTINFGER',1,NULL,NULL,2,'NOITE',4,NULL);
INSERT INTO `turma` VALUES (324,'TPG','EMPREEND',1,NULL,NULL,2,'NOITE',4,NULL);
INSERT INTO `turma` VALUES (324,'TPG','GESTAMBRESPSOC',1,NULL,NULL,2,'NOITE',4,NULL);
INSERT INTO `turma` VALUES (324,'TPG','GESTMARK',1,NULL,NULL,2,'NOITE',4,NULL);
INSERT INTO `turma` VALUES (324,'TPG','GESTVENNEG',1,NULL,NULL,2,'NOITE',4,NULL);
INSERT INTO `turma` VALUES (324,'TPG','METMATAPLPG1',1,NULL,NULL,2,'NOITE',4,NULL);
INSERT INTO `turma` VALUES (324,'TPG','NEGINTER',1,NULL,NULL,2,'NOITE',4,NULL);
INSERT INTO `turma` VALUES (324,'TPG','PESQANALMERC',1,NULL,NULL,2,'NOITE',4,NULL);
INSERT INTO `turma` VALUES (324,'TPG','PI_PLANMARK',1,NULL,NULL,2,'NOITE',4,NULL);
INSERT INTO `turma` VALUES (324,'TPG','PLANNEG',1,NULL,NULL,2,'NOITE',4,NULL);

CREATE TABLE `turno` (
  `idturno` int(11) NOT NULL auto_increment,
  `descricao` varchar(30) default NULL,
  PRIMARY KEY  (`idturno`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `turno` VALUES (1,'MANHÃ');
INSERT INTO `turno` VALUES (2,'TARDE');
INSERT INTO `turno` VALUES (3,'NOITE');

CREATE TABLE `usuarios` (
  `idusuarios` int(11) NOT NULL auto_increment,
  `login` varchar(40) character set latin1 collate latin1_bin NOT NULL,
  `senha` varchar(40) character set latin1 collate latin1_bin NOT NULL,
  `situacao` varchar(5) NOT NULL COMMENT 'Ativo',
  `idperfil` int(11) NOT NULL,
  `dtreg` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`idusuarios`),
  KEY `idperfil` (`idperfil`)
) ENGINE=InnoDB AUTO_INCREMENT=138 DEFAULT CHARSET=latin1;

INSERT INTO `usuarios` VALUES (106,'aluno','YWx1bm8=','SIM',4,'2014-01-13 08:19:14');
INSERT INTO `usuarios` VALUES (137,'aluno','123','SIM',4,'2014-01-12 22:56:47');


ALTER TABLE `adm_acesso_usuario`
  ADD FOREIGN KEY (`idmenu`) REFERENCES `adm_menu` (`idmenu`),
  ADD FOREIGN KEY (`idusuarios`) REFERENCES `usuarios` (`idusuarios`);

ALTER TABLE `adm_configuracao`
  ADD FOREIGN KEY (`idperfil`) REFERENCES `perfil` (`idperfil`),
  ADD FOREIGN KEY (`idmenu`) REFERENCES `adm_menu` (`idmenu`);

ALTER TABLE `adm_menu`
  ADD FOREIGN KEY (`idmodulos`) REFERENCES `adm_modulos` (`idmodulos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `adm_modulo_gestor`
  ADD FOREIGN KEY (`idmodulos`) REFERENCES `adm_modulos` (`idmodulos`),
  ADD FOREIGN KEY (`idusuarios`) REFERENCES `usuarios` (`idusuarios`);

ALTER TABLE `adm_modulos`
  ADD FOREIGN KEY (`idsistemas`) REFERENCES `adm_sistemas` (`idsistemas`);

ALTER TABLE `alunos`
  ADD FOREIGN KEY (`idpessoas`) REFERENCES `pessoas` (`idpessoas`),
  ADD FOREIGN KEY (`idestado_civil`) REFERENCES `estado_civil` (`idestado_civil`),
  ADD FOREIGN KEY (`idetnia`) REFERENCES `etnia` (`idetnia`);

ALTER TABLE `atividadesfuncionais`
  ADD FOREIGN KEY (`idfuncionarios`) REFERENCES `funcionarios` (`idfuncionarios`),
  ADD FOREIGN KEY (`idfuncao`) REFERENCES `funcao` (`idfuncao`);

ALTER TABLE `componentecurricular`
  ADD FOREIGN KEY (`siglacurso`) REFERENCES `curso` (`siglacurso`),
  ADD FOREIGN KEY (`sigladisciplina`) REFERENCES `disciplinas` (`sigladisciplina`),
  ADD FOREIGN KEY (`idtipocomponente`) REFERENCES `tipocomponente` (`idtipocomponente`);

ALTER TABLE `curso`
  ADD FOREIGN KEY (`idtipocurso`) REFERENCES `tipocurso` (`idtipocurso`);

ALTER TABLE `eventoperiodoletivo`
  ADD FOREIGN KEY (`idperiodoletivo`) REFERENCES `periodoletivo` (`idperiodoletivo`),
  ADD FOREIGN KEY (`idtipoevento`) REFERENCES `tipoevento` (`idtipoevento`);

ALTER TABLE `exigedocumento`
  ADD FOREIGN KEY (`siglacurso`) REFERENCES `curso` (`siglacurso`),
  ADD FOREIGN KEY (`matricula_aluno`) REFERENCES `matriculaaluno` (`matricula_aluno`),
  ADD FOREIGN KEY (`idtipodocumento`) REFERENCES `tipodocumento` (`idtipodocumento`);

ALTER TABLE `funcionarios`
  ADD FOREIGN KEY (`idpessoas`) REFERENCES `pessoas` (`idpessoas`);

ALTER TABLE `logs`
  ADD FOREIGN KEY (`idusuarios`) REFERENCES `usuarios` (`idusuarios`);

ALTER TABLE `matriculaaluno`
  ADD FOREIGN KEY (`idsituacao_matricula`) REFERENCES `situacaomatricula` (`idsituacao_matricula`),
  ADD FOREIGN KEY (`idturno`) REFERENCES `turno` (`idturno`),
  ADD FOREIGN KEY (`idpessoas`) REFERENCES `alunos` (`idpessoas`),
  ADD FOREIGN KEY (`siglacurso`) REFERENCES `curso` (`siglacurso`),
  ADD FOREIGN KEY (`idmatriz`) REFERENCES `matriz` (`idmatriz`),
  ADD FOREIGN KEY (`idperiodoletivo`) REFERENCES `periodoletivo` (`idperiodoletivo`),
  ADD FOREIGN KEY (`idformaingresso`) REFERENCES `formaingresso` (`idformaingresso`);

ALTER TABLE `matriz`
  ADD FOREIGN KEY (`siglacurso`) REFERENCES `curso` (`siglacurso`);

ALTER TABLE `ocorrencias`
  ADD FOREIGN KEY (`idusuarios`) REFERENCES `usuarios` (`idusuarios`);

ALTER TABLE `pessoas`
  ADD FOREIGN KEY (`idusuarios`) REFERENCES `usuarios` (`idusuarios`);

ALTER TABLE `professor`
  ADD FOREIGN KEY (`idtitulacao`) REFERENCES `titulacao` (`idtitulacao`);

ALTER TABLE `turma`
  ADD FOREIGN KEY (`idmatriz`) REFERENCES `matriz` (`idmatriz`),
  ADD FOREIGN KEY (`idperiodoletivo`) REFERENCES `periodoletivo` (`idperiodoletivo`),
  ADD FOREIGN KEY (`idsituacaoturma`) REFERENCES `situacaoturma` (`idsituacaoturma`),
  ADD FOREIGN KEY (`matriculaprofessor`) REFERENCES `matriculaprofessor` (`matriculaprofessor`);

ALTER TABLE `usuarios`
  ADD FOREIGN KEY (`idperfil`) REFERENCES `perfil` (`idperfil`);
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
