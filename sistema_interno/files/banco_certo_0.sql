CREATE DATABASE  IF NOT EXISTS `hhealth` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `hhealth`;
-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: localhost    Database: hhealth
-- ------------------------------------------------------
-- Server version	5.6.10-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Temporary view structure for view `agendamento_paciente_funcionario`
--

DROP TABLE IF EXISTS `agendamento_paciente_funcionario`;
/*!50001 DROP VIEW IF EXISTS `agendamento_paciente_funcionario`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `agendamento_paciente_funcionario` AS SELECT 
 1 AS `id_funcionario`,
 1 AS `nome_funcionario`,
 1 AS `id_paciente`,
 1 AS `nome_paciente`,
 1 AS `id_agendamento_consulta`,
 1 AS `data`,
 1 AS `ativo`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `internacao_paciente`
--

DROP TABLE IF EXISTS `internacao_paciente`;
/*!50001 DROP VIEW IF EXISTS `internacao_paciente`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `internacao_paciente` AS SELECT 
 1 AS `id_paciente_internacao`,
 1 AS `id_paciente`,
 1 AS `nome`,
 1 AS `id_quarto`,
 1 AS `numero`,
 1 AS `id_unidade`,
 1 AS `unidade`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `tbl_agendamento_consultas`
--

DROP TABLE IF EXISTS `tbl_agendamento_consultas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_agendamento_consultas` (
  `id_agendamento_consulta` int(11) NOT NULL AUTO_INCREMENT,
  `id_paciente` int(11) DEFAULT NULL,
  `id_especialidade` int(11) DEFAULT NULL,
  `id_funcionario` int(11) DEFAULT NULL,
  `id_unidade` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `ativo` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id_agendamento_consulta`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_agendamento_consultas`
--

LOCK TABLES `tbl_agendamento_consultas` WRITE;
/*!40000 ALTER TABLE `tbl_agendamento_consultas` DISABLE KEYS */;
INSERT INTO `tbl_agendamento_consultas` VALUES (1,8,7,1,3,'2018-05-07','04:04:00',0),(2,8,7,2,3,'2018-05-07','04:04:00',1),(3,8,7,1,3,'2018-05-07','04:04:00',0),(4,8,7,2,3,'2018-05-07','04:04:00',0),(5,8,7,1,3,'2018-05-07','04:04:00',0),(6,8,7,1,3,'2018-05-07','04:04:00',0),(7,8,7,2,3,'2018-05-16','04:04:00',0),(8,8,7,1,3,'2018-05-16','04:04:00',0),(9,8,6,2,2,'2018-05-22','04:04:00',1),(10,8,6,1,2,'2018-05-22','04:04:00',0),(11,8,6,1,3,'2018-05-15','04:04:00',0),(12,8,7,1,2,'2018-05-07','04:04:00',0);
/*!40000 ALTER TABLE `tbl_agendamento_consultas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_ambiente`
--

DROP TABLE IF EXISTS `tbl_ambiente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_ambiente` (
  `id_ambiente` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` tinytext,
  `imagem` text,
  `imagem2` text,
  `imagem3` text,
  `imagem4` text,
  `imagem5` text,
  `imagem6` text,
  `texto` text,
  `texto2` text,
  `texto3` text,
  `texto4` text,
  `texto5` text,
  `texto6` text,
  `status` text,
  `ativo` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id_ambiente`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_ambiente`
--

LOCK TABLES `tbl_ambiente` WRITE;
/*!40000 ALTER TABLE `tbl_ambiente` DISABLE KEYS */;
INSERT INTO `tbl_ambiente` VALUES (1,'fffff','','','','','','','fffff',NULL,NULL,NULL,NULL,NULL,'0',0),(2,'dasdas','imagem_ambiente/cirurgia5.jpg','imagem_ambiente/endoscopia.jpg','imagem_ambiente/edit_icon.png','imagem_ambiente/download.jpg','imagem_ambiente/cirurgia2.jpg','imagem_ambiente/acupuntura.jpg','asdas',NULL,NULL,NULL,NULL,NULL,'0',0),(3,'Ambientes Hospital','imagem_ambiente/ambientes3.jpg','imagem_ambiente/ambiente111.jpg','imagem_ambiente/area2.jpg','imagem_ambiente/area3.jpg','imagem_ambiente/higiene.jpg','imagem_ambiente/pesquisa.jpg','Hosital Hhealth                                            ','Área de cirugia                                      ','Aréa 2                                        ','Idosos em lazer no hospital','higiene no hospital         ','Área de pesquisa do hospital                    ','1',1),(4,'ytyuit','imagem_ambiente/home.png','imagem_ambiente/home.png','imagem_ambiente/sobre.png','imagem_ambiente/sobre.png','imagem_ambiente/sobre.png','imagem_ambiente/sobre.png','irtyit             ',NULL,NULL,NULL,NULL,NULL,'0',0),(5,'Novos Ambientes desta unidade','imagem_ambiente/4992868.jpg','imagem_ambiente/acupuntura.jpg','imagem_ambiente/cirurgia5.jpg','imagem_ambiente/cirurgia1.jpg','imagem_ambiente/cirurgia.jpg','Erro','Novos Ambientes desta unidade',NULL,NULL,NULL,NULL,NULL,'0',0);
/*!40000 ALTER TABLE `tbl_ambiente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_ambulancia`
--

DROP TABLE IF EXISTS `tbl_ambulancia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_ambulancia` (
  `id_ambulancia` int(11) NOT NULL AUTO_INCREMENT,
  `id_unidade` int(11) NOT NULL,
  `placa` varchar(45) DEFAULT NULL,
  `descricao` text,
  PRIMARY KEY (`id_ambulancia`),
  KEY `fk42_idx` (`id_unidade`),
  CONSTRAINT `fk42` FOREIGN KEY (`id_unidade`) REFERENCES `tbl_unidade` (`id_unidade`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_ambulancia`
--

LOCK TABLES `tbl_ambulancia` WRITE;
/*!40000 ALTER TABLE `tbl_ambulancia` DISABLE KEYS */;
INSERT INTO `tbl_ambulancia` VALUES (1,1,'BCD 4124','Editando os veículos'),(2,3,'HJF 8904','outro veículo pra ficar bonitinho na tela');
/*!40000 ALTER TABLE `tbl_ambulancia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_atendimento`
--

DROP TABLE IF EXISTS `tbl_atendimento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_atendimento` (
  `id_atendimento` int(11) NOT NULL AUTO_INCREMENT,
  `id_paciente` int(11) DEFAULT NULL,
  `id_atendimento_senha` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_atendimento`),
  KEY `fk213_idx` (`id_atendimento_senha`),
  KEY `fk214_idx` (`id_paciente`),
  CONSTRAINT `fk213` FOREIGN KEY (`id_atendimento_senha`) REFERENCES `tbl_atendimento_senha` (`id_atendimento_senha`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk214` FOREIGN KEY (`id_paciente`) REFERENCES `tbl_paciente` (`id_paciente`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_atendimento`
--

LOCK TABLES `tbl_atendimento` WRITE;
/*!40000 ALTER TABLE `tbl_atendimento` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_atendimento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_atendimento_senha`
--

DROP TABLE IF EXISTS `tbl_atendimento_senha`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_atendimento_senha` (
  `id_atendimento_senha` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo_senha` int(11) DEFAULT NULL,
  `senha` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_atendimento_senha`),
  KEY `fk_tipo_senha_idx` (`id_tipo_senha`),
  CONSTRAINT `fk_tipo_senha` FOREIGN KEY (`id_tipo_senha`) REFERENCES `tbl_tipo_senha` (`id_tipo_senha`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_atendimento_senha`
--

LOCK TABLES `tbl_atendimento_senha` WRITE;
/*!40000 ALTER TABLE `tbl_atendimento_senha` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_atendimento_senha` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_auditoria`
--

DROP TABLE IF EXISTS `tbl_auditoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_auditoria` (
  `id_auditoria` int(11) NOT NULL AUTO_INCREMENT,
  `data` date DEFAULT NULL,
  `hora` varchar(10) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `acao` text,
  PRIMARY KEY (`id_auditoria`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_auditoria`
--

LOCK TABLES `tbl_auditoria` WRITE;
/*!40000 ALTER TABLE `tbl_auditoria` DISABLE KEYS */;
INSERT INTO `tbl_auditoria` VALUES (1,'2018-04-26','10:16','1',' O usuario [josé], [inseriu] um usuário no banco '),(2,'2018-04-26','10:25','1',' O usuario [josé], [inseriu] um usuário no banco '),(3,'2018-04-26','10:55','1',' O usuario [josé], [inseriu] um usuário no banco '),(4,'2018-04-26','10:56','1',' O usuario [josé], [inseriu] um usuário no banco '),(5,'2018-04-26','10:56','1',' O usuario [josé], [inseriu] um usuário no banco '),(6,'2018-04-26','10:57','1',' O usuario [josé], [inseriu] um usuário no banco '),(7,'2018-05-01','16:13','1',' O usuario [josé], [inseriu] um usuário no banco '),(8,'2018-05-01','16:13','1',' O usuario [josé], [inseriu] um usuário no banco '),(9,'2018-05-01','16:13','1',' O usuario [josé], [inseriu] um usuário no banco '),(10,'2018-05-01','16:16','1',' O usuario [josé], [inseriu] um usuário no banco '),(11,'2018-05-15','08:40','1',' O usuario [josé], [inseriu] um usuário no banco '),(12,'2018-05-15','08:45','1',' O usuario [josé], [inseriu] um usuário no banco '),(13,'2018-05-15','08:47','1',' O usuario [josé], [inseriu] um usuário no banco '),(14,'2018-05-15','08:50','1',' O usuario [josé], [inseriu] um usuário no banco '),(15,'2018-05-15','08:52','1',' O usuario [josé], [inseriu] um usuário no banco '),(16,'2018-05-15','08:52','1',' O usuario [josé], [inseriu] um usuário no banco '),(17,'2018-05-15','08:53','1',' O usuario [josé], [inseriu] um usuário no banco '),(18,'2018-05-15','08:53','1',' O usuario [josé], [inseriu] um usuário no banco '),(19,'2018-05-15','08:54','1',' O usuario [josé], [inseriu] um usuário no banco '),(20,'2018-05-15','08:54','1',' O usuario [josé], [inseriu] um usuário no banco '),(21,'2018-05-15','10:54','1',' O usuario [josé], [inseriu] um usuário no banco '),(22,'2018-05-24','10:40','1',' O usuario [josé], [inseriu] um usuário no banco '),(23,'2018-05-24','10:41','1',' O usuario [josé], [inseriu] um usuário no banco '),(24,'2018-05-24','10:41','1',' O usuario [josé], [inseriu] um usuário no banco '),(25,'2018-05-24','10:47','1',' O usuario [josé], [inseriu] um usuário no banco '),(26,'2018-05-24','11:06','1',' O usuario [josé], [inseriu] um usuário no banco '),(27,'2018-05-24','11:08','1',' O usuario [josé], [inseriu] um usuário no banco '),(28,'2018-06-02','18:51','1',' O usuario [josé], [inseriu] um usuário no banco '),(29,'2018-06-02','19:18','1',' O usuario [josé], [inseriu] um usuário no banco '),(30,'2018-06-02','19:19','1',' O usuario [josé], [inseriu] um usuário no banco '),(31,'2018-06-02','19:23','1',' O usuario [josé], [inseriu] um usuário no banco '),(32,'2018-06-02','19:26','1',' O usuario [josé], [inseriu] um usuário no banco '),(33,'2018-06-02','20:10','1',' O usuario [josé], [inseriu] um usuário no banco ');
/*!40000 ALTER TABLE `tbl_auditoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_auditoria_paciente`
--

DROP TABLE IF EXISTS `tbl_auditoria_paciente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_auditoria_paciente` (
  `id_auditoria_paciente` int(11) NOT NULL AUTO_INCREMENT,
  `data` date DEFAULT NULL,
  `hora` varchar(10) DEFAULT NULL,
  `usuario` int(11) DEFAULT NULL,
  `acao` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id_auditoria_paciente`),
  KEY `fk_autidotia_paciente_idx` (`usuario`),
  CONSTRAINT `fk_autidotia_paciente` FOREIGN KEY (`usuario`) REFERENCES `tbl_paciente` (`id_paciente`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_auditoria_paciente`
--

LOCK TABLES `tbl_auditoria_paciente` WRITE;
/*!40000 ALTER TABLE `tbl_auditoria_paciente` DISABLE KEYS */;
INSERT INTO `tbl_auditoria_paciente` VALUES (1,'2018-05-10','08:23',8,'O paciente id:8, Agendou uma consulta no banco '),(2,'2018-05-28','09:41',8,'O paciente id:8, Agendou uma consulta no banco '),(3,'2018-05-28','09:42',8,'O paciente id:8, Agendou uma consulta no banco ');
/*!40000 ALTER TABLE `tbl_auditoria_paciente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_boleto`
--

DROP TABLE IF EXISTS `tbl_boleto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_boleto` (
  `id_boleto` int(11) NOT NULL AUTO_INCREMENT,
  `arquivo_boleto` text,
  `valor` float DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `data_emissao` date DEFAULT NULL,
  `data_vencimento` date DEFAULT NULL,
  PRIMARY KEY (`id_boleto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_boleto`
--

LOCK TABLES `tbl_boleto` WRITE;
/*!40000 ALTER TABLE `tbl_boleto` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_boleto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_cargo`
--

DROP TABLE IF EXISTS `tbl_cargo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_cargo` (
  `id_cargo` int(11) NOT NULL AUTO_INCREMENT,
  `id_nivel_funcionario` int(11) DEFAULT NULL,
  `cargo` varchar(45) NOT NULL,
  `descricao` varchar(45) NOT NULL,
  `ativo` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id_cargo`),
  KEY `fk_nivel_cargo_idx` (`id_nivel_funcionario`),
  CONSTRAINT `fk_nivel_cargo` FOREIGN KEY (`id_nivel_funcionario`) REFERENCES `tbl_nivel_funcionario` (`id_nivel_funcionario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_cargo`
--

LOCK TABLES `tbl_cargo` WRITE;
/*!40000 ALTER TABLE `tbl_cargo` DISABLE KEYS */;
INSERT INTO `tbl_cargo` VALUES (1,2,'Chefe Administrativo ','chefia os bgkh tudo',0),(2,2,'cargo','cargo sem descrição ',0),(3,7,'chefe não acessa senha','asdas 2',1),(4,6,'administrador','teste',1),(5,8,'nada','nada',1);
/*!40000 ALTER TABLE `tbl_cargo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_chat_bot`
--

DROP TABLE IF EXISTS `tbl_chat_bot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_chat_bot` (
  `id_chat_bot` int(11) NOT NULL AUTO_INCREMENT,
  `pergunta` text NOT NULL,
  `resposta` text NOT NULL,
  PRIMARY KEY (`id_chat_bot`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_chat_bot`
--

LOCK TABLES `tbl_chat_bot` WRITE;
/*!40000 ALTER TABLE `tbl_chat_bot` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_chat_bot` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_consulta`
--

DROP TABLE IF EXISTS `tbl_consulta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_consulta` (
  `id_consulta` int(11) NOT NULL AUTO_INCREMENT,
  `id_funcionario` int(11) NOT NULL,
  `id_agendamento_consulta` int(11) NOT NULL,
  `descricao` text,
  `data_fim` date DEFAULT NULL,
  `data` date NOT NULL,
  `hora_fim` time NOT NULL,
  `hora_inicio` time NOT NULL,
  PRIMARY KEY (`id_consulta`),
  KEY `fk16_idx` (`id_agendamento_consulta`),
  CONSTRAINT `fk16` FOREIGN KEY (`id_agendamento_consulta`) REFERENCES `tbl_agendamento_consulta` (`id_agendamento_consulta`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_consulta`
--

LOCK TABLES `tbl_consulta` WRITE;
/*!40000 ALTER TABLE `tbl_consulta` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_consulta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_contato`
--

DROP TABLE IF EXISTS `tbl_contato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_contato` (
  `id_contato` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` text,
  `subtitulo` text,
  `texto` text,
  `imagem` text,
  `status_imagem` char(1) DEFAULT NULL,
  `link_video` text,
  PRIMARY KEY (`id_contato`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_contato`
--

LOCK TABLES `tbl_contato` WRITE;
/*!40000 ALTER TABLE `tbl_contato` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_contato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_convenio`
--

DROP TABLE IF EXISTS `tbl_convenio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_convenio` (
  `id_convenio` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` tinytext,
  `texto` tinytext,
  `imagem` text,
  `status_imagem` tinyint(4) DEFAULT NULL,
  `ativo` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id_convenio`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_convenio`
--

LOCK TABLES `tbl_convenio` WRITE;
/*!40000 ALTER TABLE `tbl_convenio` DISABLE KEYS */;
INSERT INTO `tbl_convenio` VALUES (1,'agora vai','asfaf','imagem_convenio/corda.jpg',1,0),(2,'Notredame Intermedica','Como um benefício plano de saúde, a NotreDame Intermédica Saúde S/A se destaca pelos programas pioneiros de Medicina Preventiva, pela Assistência Integral à Saúde aos beneficiários e pela excelência na qualidade do atendimento.','imagem_convenio/intermedica.png',1,1),(3,'TESTE','A Amil é a maior operadora do mercado em numero de clientes e faturamento.','imagem_convenio/download.jpg',1,0),(4,'Saude Plus','A Unimed Jundiaí foi fundada na década de 80 e possui rede de clinicas próprias em Louveira, Várzea Paulista, Itupeva, Cabreúva e Cajamar','imagem_convenio/home.png',1,0),(5,'VILA BELA 2','A Unimed Jundiaí foi fundada na década de 80 e possui rede de clinicas próprias em Louveira, Várzea Paulista, Itupeva, Cabreúva e Cajamar','imagem_convenio/403734003-yoyo-wallpapers.jpg',1,0),(6,'Esperança','A Unimed Jundiaí foi fundada na década de 80 e possui rede de clinicas próprias em Louveira, Várzea Paulista, Itupeva, Cabreúva e Cajamar','imagem_convenio/home.png',1,0),(7,'Unimed Jundiai','A Unimed Jundiaí foi fundada na década de 80 e possui rede de clinicas próprias em Louveira, Várzea Paulista, Itupeva, Cabreúva e Cajamar','imagem_convenio/home.png',1,0),(8,'Unimed Guarulhos','A Unimed Guarulhos é um plano que funciona no sistema de cooperativa médica e foi fundada em 1994','imagem_convenio/Guarulhos.png',1,1),(9,'Unimed Fesp','A Federação das Unimeds do Estado de São Paulo (Fesp) foi criada em 1971','imagem_convenio/home.png',1,0),(10,'Unihosp Saúde','No dia 14 de Agosto de 1996 nasceu a UNIHOSP SAÚDE, tendo atualmente os acionistas fundadores HOSPITAL E MATERNIDADE BARTIRA, HOSPITAL E MATERNIDADE DR. CHRISTÓVÃO DA GAMA e HOSPITAL RIBEIRÃO PIRES, que juntos, somam mais de 150 anos de experiências ','imagem_convenio/unihosp.jpg',1,1),(11,'Trasmontano Saúde','A Trasmontano é um dos planos mais antigos do mercado sendo que sua fundação foi em 1932','imagem_convenio/home.png',1,0),(12,'Sul América Saúde','A SulAmérica, com 120 anos de história, é o maior grupo segurador independente do Brasil e está entre as mais sólidas e de maior credibilidade do mercado.','imagem_convenio/sulamerica-certa.png',1,1),(13,'Sompo Saúde','A Sompo é a junção da antiga Marítima Seguros com a Yasuda Seguros','imagem_convenio/home.png',1,0),(14,'Seguros Unimed Saúde','A Seguros Unimed foi fundada em 1989 e trabalha também com outros segmentos de seguros além do saúde','imagem_convenio/home.png',1,0),(15,'São Miguel Saúde','A São Miguel Saúde foi fundada em 1962 e oferece atendimento medico para a região do alto tiete','imagem_convenio/home.png',1,0),(16,'São Cristovão Saúde','A Associação de Beneficência e Filantropia São Cristóvão é um dos planos mais antigos de São Paulo pois sua fundação data de 1911','imagem_convenio/home.png',1,0),(17,'Santa Helena Saúde','A Santa Helena Saúde faz parte do grupo Amil que é a maior operadora do mercado','imagem_convenio/home.png',1,0),(18,'Samed Saúde','A Samed tem boa aceitação e procura por residentes da região de Mogi das Cruzes','imagem_convenio/home.png',1,0),(19,'Porto Seguro Saúde','A Porto é uma das maiores seguradoras do mercado e atualmente trabalha somente com plano empresa.','imagem_convenio/home.png',1,0),(20,'Plena Saúde','A Plena oferece planos com rede própria e cobertura odontológica opcional','imagem_convenio/home.png',1,0),(21,'One Health','A One Health é considerada como o melhor plano de saúde do mercado pois tem rede de alto padrão, alto reembolso e cobertura no exterior','imagem_convenio/home.png',1,0),(22,'Omint Saúde','A Omint se destaca por oferecer planos de saúde com rede de alto nível com cobertura nacional e internacional','imagem_convenio/home.png',1,0),(23,'Notre Dame Intermédica','A Intermedica foi fundada em São Paulo em 1968 e comprada em 2014 pelo grupo americano Bain Capital','imagem_convenio/home.png',1,0),(24,'Next Saúde','A Next faz parte do grupo Amil que é a maior operadora do mercado','imagem_convenio/home.png',1,0),(25,'Med Tour Saúde','A Med Tour tem atuação voltada principalmente para o município de Guarulhos','imagem_convenio/home.png',1,0),(26,'Health Santaris','Também conhecida como Santa Rita Sistema de Saúde','imagem_convenio/home.png',1,0),(27,'Greenline Saúde','A Greenline foi fundada em 1992, possui diversos hospitais próprios e 21 clinicas medicas','imagem_convenio/home.png',1,0),(28,'Garantia de Saúde','A Gs Garantia de Saúde foi fundada em 1981 e começou atendendo a zona leste','imagem_convenio/home.png',1,0),(29,'Classes Laboriosas','A Associação Auxiliadora das Classes Laboriosas é um dos planos mais antigos do mercado','imagem_convenio/home.png',1,0),(30,'Central Nacional Unimed','A CNU - Central Nacional Unimed é a operadora nacional dos planos de saúde Unimed','imagem_convenio/home.png',1,0),(31,'Care Plus Saúde','A Care Plus tem ampla rede credenciada com hospitais de alto nível','imagem_convenio/home.png',1,0),(32,'Caixa Saúde','A Caixa, um dos maiores bancos do pais agora também atua no setor de saúde','imagem_convenio/home.png',1,0),(33,'Bradesco Saúde','A Bradesco é considerada por diversas pesquisas já realizadas como um dos melhores planos de saúde do mercado','imagem_convenio/home.png',1,0),(34,'ADA','A Blue Med possui rede credenciada em São Paulo e também no litoral','imagem_convenio/corda.jpg',1,0),(35,'DFSDFSD','A Biovida possui hospitais próprios e também hospitais particulares na rede credenciada','imagem_convenio/corda.jpg',1,0),(36,'vaaaii','A Biosaude é uma das operadoras com melhor custo beneficio atualmente','imagem_convenio/download.jpg',1,0),(37,'vaaaii','A Ana Costa Saúde é um plano voltado para o publico residente na região de Santos','imagem_convenio/403734003-yoyo-wallpapers.jpg',1,0),(38,'vaaaii','A Amr - Assistência Medica Regional é a antiga Oeste Saúde','imagem_convenio/corda.jpg',1,0),(39,'vaaaii','A Ameplan tem planos com condições especiais de preços e ampla rede de hospitais, clinicas, laboratórios e consultórios particulares','imagem_convenio/download.jpg',1,0),(40,'vaaaii','A Ameno é um dos planos de saúde com menor custo atualmente.','imagem_convenio/download.jpg',1,0),(41,'vaaaii','A Allianz é uma seguradora alemã de renome mundial','imagem_convenio/download.jpg',1,0),(42,'vaaaii','ASDASDAS','imagem_convenio/carrinho.jpg',1,0);
/*!40000 ALTER TABLE `tbl_convenio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_deficiencia`
--

DROP TABLE IF EXISTS `tbl_deficiencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_deficiencia` (
  `id_deficiente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(55) DEFAULT NULL,
  `descricao` text,
  PRIMARY KEY (`id_deficiente`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_deficiencia`
--

LOCK TABLES `tbl_deficiencia` WRITE;
/*!40000 ALTER TABLE `tbl_deficiencia` DISABLE KEYS */;
INSERT INTO `tbl_deficiencia` VALUES (1,'Cego','Não enxerga');
/*!40000 ALTER TABLE `tbl_deficiencia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_dica_saude`
--

DROP TABLE IF EXISTS `tbl_dica_saude`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_dica_saude` (
  `id_dica_saude` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` tinytext,
  `descricao` text,
  `imagem` text,
  `status` tinyint(4) DEFAULT NULL,
  `ativo` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id_dica_saude`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_dica_saude`
--

LOCK TABLES `tbl_dica_saude` WRITE;
/*!40000 ALTER TABLE `tbl_dica_saude` DISABLE KEYS */;
INSERT INTO `tbl_dica_saude` VALUES (1,'34124','adfsa','imagem_dica_saude/dermatologia.jpg',1,1),(2,'Dica para o coração','                                                                \r\n                VI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalq            ','imagem_dica_saude/ortopedia.jpg',1,1),(3,'Radiologia','As novas sensações do Exercício em Casa, trazidas pelo professor Djan, o Fit Max e o Step Line, têm chamado atenção dos nossos alunos que gostam de passos métricos e dançantes, como no Step, ou de nossos alunos que preferem treinar com golpes de artes marciais, como quem curte soltar um gancho, um jab e […]','imagem_dica_saude/dicas_saude4.jpg',1,1),(4,'Dieta','Seu corpo tem que aprender qual a hora de dormir, acordar e comer. Isso fará ele funcionar melhor, irá evitar a fome frequente e as idas noturnas à geladeira, que são as que mais engordam. Além disso, descansar pelo menos 7 horas por noite dá ânimo para cumprir os compromissos, fazer mais exercícios e resistir às tentações.','imagem_dica_saude/dicas_saude3.jpg',1,1);
/*!40000 ALTER TABLE `tbl_dica_saude` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_dicas_saude`
--

DROP TABLE IF EXISTS `tbl_dicas_saude`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_dicas_saude` (
  `id_dicas_saude` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` text,
  `subtitulo` text,
  `texto` text,
  `imagem` text,
  `status_imagem` char(1) DEFAULT NULL,
  `link_video` text,
  PRIMARY KEY (`id_dicas_saude`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_dicas_saude`
--

LOCK TABLES `tbl_dicas_saude` WRITE;
/*!40000 ALTER TABLE `tbl_dicas_saude` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_dicas_saude` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_endereco`
--

DROP TABLE IF EXISTS `tbl_endereco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_endereco` (
  `id_endereco` int(11) NOT NULL AUTO_INCREMENT,
  `cep` varchar(45) DEFAULT NULL,
  `logradouro` varchar(45) DEFAULT NULL,
  `numero` varchar(21) DEFAULT NULL,
  `id_estado` int(11) NOT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `id_pais` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_endereco`),
  KEY `fkestado_idx` (`id_estado`),
  KEY `fk_idpaispaispais_idx` (`id_pais`),
  CONSTRAINT `fk_idpaispaispais` FOREIGN KEY (`id_pais`) REFERENCES `tbl_pais` (`id_pais`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fkestado` FOREIGN KEY (`id_estado`) REFERENCES `tbl_estado` (`id_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_endereco`
--

LOCK TABLES `tbl_endereco` WRITE;
/*!40000 ALTER TABLE `tbl_endereco` DISABLE KEYS */;
INSERT INTO `tbl_endereco` VALUES (38,'066830000','endereco xxx','0',1,'itapevi','gioia',NULL),(39,'06654879','teste','asd',16,'fsadfasd','asd',NULL),(40,'06654879','mudei','asdfsda',12,'fsadfasd','sdafasdf',NULL),(41,'79585445','GLEYVER','200',11,'fsadfasd','Jd Maria',NULL),(42,'06654879','mudei','asdfsda',22,'asd','sdafasdf',NULL),(43,'06654879','mudei','asdfsda',14,'fsadfasd','asd',NULL),(44,'asd','mudei aki','asd',25,'fsadfasd','sdafasdf',NULL),(45,'06654879','mudei','asdfsda',24,'fsadfasd','sdafasdf',NULL),(46,'06654879','mudei','asdfsda',21,'fsadfasd','asd',NULL),(47,'1','2','3',19,'5','4',NULL),(48,'06654879','1','2',25,'4','3',NULL),(49,'teste','teste','testeteste',24,'fsadfasd','asd',NULL),(50,'wesley','wesley wesley','asd',25,'asd','asd',NULL),(51,'06654795','Rua da prata','229',9,'Barueri','Jd Prata',NULL),(52,'06343-350','Rua Barretos','935',33,'Carapicuíba','gioia',NULL),(53,'06343-350','Rua Barretos','935',33,'Carapicuíba','gioia',NULL),(54,'06343-350','Rua Barretos','935',33,'Carapicuíba','gioia',NULL),(55,'sdfas','fasdfasd','asdfasd',12,'sadfsdf','sdfsdf',NULL),(56,'sdfas','teste','asdfasd',13,'sadfsdf','sdfsdf',NULL),(57,'sdfas','fasdfasd','asdfasd',16,'sadfsdf','sdfsdf',NULL),(58,'sdfas','fasdfasd','asdfasd',22,'sadfsdf','sdfsdf',NULL),(59,'sdfas','fasdfasd, asdfasd','asdfasd',17,'sadfsdf','sdfsdf',NULL),(60,'sdfas','fasdfasd, asdfasd, asdfasd','asdfasd',12,'sadfsdf','sdfsdf',NULL),(61,'sdfas','fasdfasd, asdfasd, asdfasd','asdfasd',12,'sadfsdf','sdfsdf',NULL);
/*!40000 ALTER TABLE `tbl_endereco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_entrada_hospital`
--

DROP TABLE IF EXISTS `tbl_entrada_hospital`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_entrada_hospital` (
  `id_entrada_hospital` int(11) NOT NULL AUTO_INCREMENT,
  `entrada` float DEFAULT NULL,
  `descricao` text,
  PRIMARY KEY (`id_entrada_hospital`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_entrada_hospital`
--

LOCK TABLES `tbl_entrada_hospital` WRITE;
/*!40000 ALTER TABLE `tbl_entrada_hospital` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_entrada_hospital` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_especialidade`
--

DROP TABLE IF EXISTS `tbl_especialidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_especialidade` (
  `id_especialidade` int(11) NOT NULL AUTO_INCREMENT,
  `especialidade` text,
  `texto` text,
  `imagem` text,
  `status` char(1) DEFAULT NULL,
  PRIMARY KEY (`id_especialidade`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_especialidade`
--

LOCK TABLES `tbl_especialidade` WRITE;
/*!40000 ALTER TABLE `tbl_especialidade` DISABLE KEYS */;
INSERT INTO `tbl_especialidade` VALUES (1,'Cardiologia haha','No Brasil, o estudo oficial da cardiologia como ciência e especialidade médica teve início com Carlos Chagas e seus colaboradores, no ano de 1909. Foram estes pesquisadores que desenvolveram as primeiras pesquisas no país a respeito das doenças do coração, além de introduzirem no Brasil o primeiro eletrocardiograma, que foi instalado no Laboratório de Manguinhos, no Rio de Janeiro.','arquivos/cirurgia2.jpg','0'),(2,'hfghfghhsfhfhfhdhghgh','hsdfhdfsghdasghdfgasdgdgh','arquivos/Cyntia SENAI 20180216_081615.jpg','0'),(3,'sdasdas','dsadasdasdas','arquivos/download.jpg','0'),(4,'Ai meu coraçaum','é dessa vez que vaaaaaai','arquivos/endocrinologia.jpg','0'),(5,'num credito que foi e fooooi viado','mas foi siiiiiiim','arquivos/mapa.png','0'),(6,'outraaaaaa2222','lalalalalalalalmakgdgafdu rf','arquivos/oftalmologia.jpg','1'),(7,'ai meu coraçaaaummmmmmmmm','la la la fooooi','arquivos/logo_hhealth.png','1'),(8,'ai meu coraçaummmmm','adfsffsdf','arquivos/acupuntura.jpg','0'),(9,'teste','teste','arquivos/Hydrangeas.jpg','0');
/*!40000 ALTER TABLE `tbl_especialidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_especialidade_hopital`
--

DROP TABLE IF EXISTS `tbl_especialidade_hopital`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_especialidade_hopital` (
  `id_especialidade_hopital` int(11) NOT NULL AUTO_INCREMENT,
  `id_unidade` int(11) NOT NULL,
  `id_especialidade` int(11) NOT NULL,
  PRIMARY KEY (`id_especialidade_hopital`),
  KEY `FK10_idx` (`id_unidade`),
  KEY `fk11_idx` (`id_especialidade`),
  CONSTRAINT `FK10` FOREIGN KEY (`id_unidade`) REFERENCES `tbl_unidade` (`id_unidade`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk11` FOREIGN KEY (`id_especialidade`) REFERENCES `tbl_especialidade` (`id_especialidade`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_especialidade_hopital`
--

LOCK TABLES `tbl_especialidade_hopital` WRITE;
/*!40000 ALTER TABLE `tbl_especialidade_hopital` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_especialidade_hopital` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_estado`
--

DROP TABLE IF EXISTS `tbl_estado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_estado` (
  `id_estado` int(11) NOT NULL AUTO_INCREMENT,
  `sigla` varchar(45) NOT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_estado`
--

LOCK TABLES `tbl_estado` WRITE;
/*!40000 ALTER TABLE `tbl_estado` DISABLE KEYS */;
INSERT INTO `tbl_estado` VALUES (1,'escolha','sdsadsad'),(9,'AC','Acre'),(10,'AL','Alagoas'),(11,'AP','Amapá'),(12,'AM','Amazonas'),(13,'BA','Bahia'),(14,'CE','Ceará'),(15,'DF','Distrito Federal'),(16,'ES','Espírito Santo'),(17,'GO','Goiás'),(18,'MA','Maranhão'),(19,'MT','Mato Grosso'),(20,'MS','Mato Grosso do Sul'),(21,'MG','Minas Gerais'),(22,'PA','Pará'),(23,'PB','Paraíba'),(24,'PR','Paraná'),(25,'PE','Pernambuco'),(26,'PI','Piauí'),(27,'RJ','Rio de Janeiro'),(28,'RN','Rio Grande do Norte'),(29,'RS','Rio Grande do Sul'),(30,'RO','Rondônia'),(31,'RR','Roraima'),(32,'SC','Santa Catarina'),(33,'SP','São Paulo'),(34,'SE','Sergipe'),(35,'TO','Tocantins');
/*!40000 ALTER TABLE `tbl_estado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_exame`
--

DROP TABLE IF EXISTS `tbl_exame`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_exame` (
  `id_exame` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` tinytext,
  `texto` text,
  `procedimento` text,
  `status` tinyint(4) DEFAULT NULL,
  `ativo` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id_exame`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_exame`
--

LOCK TABLES `tbl_exame` WRITE;
/*!40000 ALTER TABLE `tbl_exame` DISABLE KEYS */;
INSERT INTO `tbl_exame` VALUES (1,'sdfasdf','sdfsadfsd','asdfsadfasd',0,0),(2,'Exame de pé','                                \r\n                          Este é um exame de pé feito por pessoas','                                \r\n          Tem que ter um pé para fazer esse exame.                  ',0,0),(3,'Exame de Vista','                     É um exame feito para comprovar se o paciente tem algum problema de visão.           \r\n                            ','                                \r\n                            Caso o paciente use ente deverá ir sem no dia ou tirar no hospital.',0,0),(4,'Exame de braço','Um exame de braço é feito para fazer um teste no braço                           \r\n                            ','                                \r\n                            ',0,0),(5,'HEMOGRAMA','                                \r\n               O hemograma é o exame para avaliar as três principais linhagens de células do sangue (hemácias, leucócitos e plaquetas). É o mais complexo e o que merece maiores explicações. Concentre-se apenas naqueles que explicarei.             ','                                \r\n                            Estar em jejum, não beber água nas duas horas que antecede o exame. ',0,0),(6,'Hemácias (glóbulos vermelhos)','                                \r\n                            São levados em conta principalmente os valores do hematócrito e da hemoglobina. Valores um pouco fora da faixa de referência podem não ter significado clínico. Mulheres podem ter hematócrito/hemoglobina um pouco mais baixo devido a perdas de sangue na menstruação. Fumantes costumam tê-los um pouco elevado devido a pior oxigenação do sangue pelos seus pulmões. Repito: esses valores devem sempre ser interpretados','                                \r\n                            Não tomar remédio antes.',0,0),(7,'Plaquetas','                             São as células responsáveis pelo processo de coagulação do sangue. Elevações são chamadas de trombocitose e a diminuição de trombocitopenia. Pacientes com plaquetas muito baixas são mais propensos a sangramentos. Plaquetas muito elevadas podem favorecer a formação de trombos.   \r\n                            ','                                \r\n                            ',0,0),(8,'COLESTEROL','      O colesterol total é composto da soma das frações HDL+LDL+VLDL.\r\n\r\nHDL – colesterol bom. Protege os vasos da aterosclerose (Placas de gordura). Quanto mais elevado melhor.\r\n\r\nLDL e VLDL – Colesterol ruim, formador da aterosclerose que obstrui os vasos sanguíneos e leva a doenças como infarto. Quanto mais baixo melhor.\r\n\r\nTriglicerídeos – Estão relacionados ao VLDL. Normalmente equivale a 5x o seu valor. Um paciente com 150 mg/dl de triglicerídeos apresenta 30 mg/dl de VLDL.\r\n\r\nHá algum tempo se sabe que o colesterol total não é tão importante quanto os valores de suas frações. Pois vejamos 2 pacientes distintos:\r\n\r\n1- HDL = 70, LDL= 100, VLDL= 30. Colesterol total = 200 mg/dl\r\n2- HDL = 20, LDL = 160, VLDL = 20. Colesterol total = 200 mg/dl                          \r\n                            ','                                \r\n                            ',0,0),(9,'UREIA e CREATININA','                                \r\n          São as análise que avaliam a função dos rins.\r\n\r\nSeus valores são usados para cálculos do volume de sangue filtrado pelos rins a cada minuto. Os melhores laboratórios já fazem esse cálculo automaticamente para o médico e normalmente vem com o nome de “clearance de creatinina” ou “taxa de filtração glomerular”.\r\n\r\nValores aumentados de ureia e creatinina indicam diminuição da filtração pelo rim.\r\nValores menores que 60 ml/minuto de clearance de creatinina indicam insuficiência renal.\r\n\r\nEste é um dos exames que mais requerem interpretação do médico, pois o mesmo valor de creatinina pode ser normal para uma pessoa, e significar insuficiência renal para outra.                  ','                                \r\n                            ',0,0),(10,'GLICOSE','                                \r\n                     A dosagem de glicose é importante para o diagnóstico ou controle do tratamento do diabetes mellitus. Só tem valor se realizada com um jejum mínimo de 8 horas.\r\n\r\nValores menores que 100 mg/dl são normais\r\nValores entre 100 e 125 mg/dl são considerados pré-diabetes.\r\nValores acima de 126 mg/dl são compatíveis com diabetes (deve ser sempre repetido para confirmação do diagnóstico)       ','                                \r\n                            ',0,0),(11,'TGO (AST) TGP (ALP)','                                                                               São exames para se avaliar o fígado.   teste            \r\n                            \r\n                            \r\n                            ','                     teste                                                                           \r\n                            \r\n                            \r\n                            ',1,1);
/*!40000 ALTER TABLE `tbl_exame` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_fale_conosco`
--

DROP TABLE IF EXISTS `tbl_fale_conosco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_fale_conosco` (
  `id_fale_conosco` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `email` text,
  `telefone` text,
  `celular` text,
  `assunto` text,
  `mensagem` text,
  `ativo` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id_fale_conosco`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_fale_conosco`
--

LOCK TABLES `tbl_fale_conosco` WRITE;
/*!40000 ALTER TABLE `tbl_fale_conosco` DISABLE KEYS */;
INSERT INTO `tbl_fale_conosco` VALUES (1,'Kevin Eduardo Farias','kevineduardofarias-76@demasi.com.br','1135346290','1135346290','hum','sdfsdf',0);
/*!40000 ALTER TABLE `tbl_fale_conosco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_forma_pagamento`
--

DROP TABLE IF EXISTS `tbl_forma_pagamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_forma_pagamento` (
  `id_forma_pagamento` int(11) NOT NULL AUTO_INCREMENT,
  `id_paciente` int(11) NOT NULL,
  `privado` char(1) DEFAULT NULL,
  `convencional` char(1) DEFAULT NULL,
  PRIMARY KEY (`id_forma_pagamento`),
  KEY `fk_52_idx` (`id_paciente`),
  CONSTRAINT `fk_52` FOREIGN KEY (`id_paciente`) REFERENCES `tbl_paciente` (`id_paciente`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_forma_pagamento`
--

LOCK TABLES `tbl_forma_pagamento` WRITE;
/*!40000 ALTER TABLE `tbl_forma_pagamento` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_forma_pagamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_funcionario`
--

DROP TABLE IF EXISTS `tbl_funcionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_funcionario` (
  `id_funcionario` int(11) NOT NULL AUTO_INCREMENT,
  `id_cargo` int(11) NOT NULL,
  `id_endereco` int(11) DEFAULT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `sobrenome` varchar(255) DEFAULT NULL,
  `dt_nasc` date DEFAULT NULL,
  `rg` text,
  `cpf` text,
  `ativo` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id_funcionario`),
  KEY `fk_tbl_funcionario_tbl_cargo1_idx` (`id_cargo`),
  KEY `fk12312_idx` (`id_endereco`),
  CONSTRAINT `fk12312` FOREIGN KEY (`id_endereco`) REFERENCES `tbl_endereco` (`id_endereco`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_funcionario_tbl_cargo1` FOREIGN KEY (`id_cargo`) REFERENCES `tbl_cargo` (`id_cargo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_funcionario`
--

LOCK TABLES `tbl_funcionario` WRITE;
/*!40000 ALTER TABLE `tbl_funcionario` DISABLE KEYS */;
INSERT INTO `tbl_funcionario` VALUES (1,4,38,'xablau3,333','lola','1999-01-31','5454','45454',1),(2,4,38,'wesleyy','marquess','1999-01-31','5454','45454',1);
/*!40000 ALTER TABLE `tbl_funcionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_historico_administracao`
--

DROP TABLE IF EXISTS `tbl_historico_administracao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_historico_administracao` (
  `id_historico_administracao` int(11) NOT NULL AUTO_INCREMENT,
  `funcionario` varchar(90) NOT NULL,
  `data_hora` datetime NOT NULL,
  `acao` varchar(90) NOT NULL,
  `descricao` text NOT NULL,
  PRIMARY KEY (`id_historico_administracao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_historico_administracao`
--

LOCK TABLES `tbl_historico_administracao` WRITE;
/*!40000 ALTER TABLE `tbl_historico_administracao` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_historico_administracao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_historico_paciente`
--

DROP TABLE IF EXISTS `tbl_historico_paciente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_historico_paciente` (
  `id_historico_paciente` int(11) NOT NULL AUTO_INCREMENT,
  `data` date DEFAULT NULL,
  `descricao` text NOT NULL,
  PRIMARY KEY (`id_historico_paciente`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_historico_paciente`
--

LOCK TABLES `tbl_historico_paciente` WRITE;
/*!40000 ALTER TABLE `tbl_historico_paciente` DISABLE KEYS */;
INSERT INTO `tbl_historico_paciente` VALUES (1,'2018-04-20','Paciente esta testando a tabela');
/*!40000 ALTER TABLE `tbl_historico_paciente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_home`
--

DROP TABLE IF EXISTS `tbl_home`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_home` (
  `id_home` int(11) NOT NULL AUTO_INCREMENT,
  `slide1` text,
  `slide2` text,
  `slide3` text,
  `frase` varchar(45) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `ativo` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id_home`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_home`
--

LOCK TABLES `tbl_home` WRITE;
/*!40000 ALTER TABLE `tbl_home` DISABLE KEYS */;
INSERT INTO `tbl_home` VALUES (1,'imagem_home/home4.jpg','imagem_home/home3.jpg','imagem_home/home2.jpg','Onde você estiver o Hhealth estará contigo!',1,1),(2,'imagem_home/cardiologia.jpg','imagem_home/acupuntura.jpg','imagem_home/cirurgia5.jpg','Onde você for, Hhealth, cuidará de você!',0,0),(3,'imagem_home/corda.jpg','imagem_home/403734003-yoyo-wallpapers.jpg','imagem_home/403734003-yoyo-wallpapers.jpg','cfb b',0,1),(4,'imagem_home/download.jpg','imagem_home/403734003-yoyo-wallpapers.jpg','imagem_home/carrinho.jpg','vacilao',0,0),(5,'imagem_home/corda.jpg','imagem_home/download.jpg','imagem_home/carrinho.jpg','asdasd',0,0),(6,'imagem_home/corda.jpg','imagem_home/403734003-yoyo-wallpapers.jpg','imagem_home/carrinho.jpg','wesleyy',0,0);
/*!40000 ALTER TABLE `tbl_home` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_imagem_site`
--

DROP TABLE IF EXISTS `tbl_imagem_site`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_imagem_site` (
  `id_imagem_site` int(11) NOT NULL AUTO_INCREMENT,
  `imagem` text,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_imagem_site`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_imagem_site`
--

LOCK TABLES `tbl_imagem_site` WRITE;
/*!40000 ALTER TABLE `tbl_imagem_site` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_imagem_site` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_local_ambulancia`
--

DROP TABLE IF EXISTS `tbl_local_ambulancia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_local_ambulancia` (
  `id_local_ambulancia` int(11) NOT NULL AUTO_INCREMENT,
  `id_ambulancia` int(11) NOT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_local_ambulancia`),
  KEY `fk41_idx` (`id_ambulancia`),
  CONSTRAINT `fk41` FOREIGN KEY (`id_ambulancia`) REFERENCES `tbl_ambulancia` (`id_ambulancia`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_local_ambulancia`
--

LOCK TABLES `tbl_local_ambulancia` WRITE;
/*!40000 ALTER TABLE `tbl_local_ambulancia` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_local_ambulancia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_manutencao_ambulancia`
--

DROP TABLE IF EXISTS `tbl_manutencao_ambulancia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_manutencao_ambulancia` (
  `id_manutencao_ambulancia` int(11) NOT NULL,
  `id_ambulancia` int(11) NOT NULL,
  `dt_manutencao` date DEFAULT NULL,
  `comentario` text,
  PRIMARY KEY (`id_manutencao_ambulancia`),
  KEY `fk_41_idx` (`id_ambulancia`),
  CONSTRAINT `fk_41` FOREIGN KEY (`id_ambulancia`) REFERENCES `tbl_ambulancia` (`id_ambulancia`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_manutencao_ambulancia`
--

LOCK TABLES `tbl_manutencao_ambulancia` WRITE;
/*!40000 ALTER TABLE `tbl_manutencao_ambulancia` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_manutencao_ambulancia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_medico_especialidade`
--

DROP TABLE IF EXISTS `tbl_medico_especialidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_medico_especialidade` (
  `id_medico_especialidade` int(11) NOT NULL AUTO_INCREMENT,
  `id_funcionario` int(11) NOT NULL,
  `id_especialidade` int(11) NOT NULL,
  PRIMARY KEY (`id_medico_especialidade`),
  KEY `fk2_idx` (`id_especialidade`),
  CONSTRAINT `fk2` FOREIGN KEY (`id_especialidade`) REFERENCES `tbl_especialidade` (`id_especialidade`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_medico_especialidade`
--

LOCK TABLES `tbl_medico_especialidade` WRITE;
/*!40000 ALTER TABLE `tbl_medico_especialidade` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_medico_especialidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_medico_unidade`
--

DROP TABLE IF EXISTS `tbl_medico_unidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_medico_unidade` (
  `id_medico_unidade` int(11) NOT NULL AUTO_INCREMENT,
  `id_cargo` int(11) NOT NULL,
  `id_unidade` int(11) NOT NULL,
  PRIMARY KEY (`id_medico_unidade`),
  KEY `fk7_idx` (`id_cargo`),
  KEY `fk8_idx` (`id_unidade`),
  CONSTRAINT `fk7` FOREIGN KEY (`id_cargo`) REFERENCES `tbl_cargo` (`id_cargo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk8` FOREIGN KEY (`id_unidade`) REFERENCES `tbl_unidade` (`id_unidade`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_medico_unidade`
--

LOCK TABLES `tbl_medico_unidade` WRITE;
/*!40000 ALTER TABLE `tbl_medico_unidade` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_medico_unidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_nivel_acesso`
--

DROP TABLE IF EXISTS `tbl_nivel_acesso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_nivel_acesso` (
  `id_nivel` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `descricao` text,
  PRIMARY KEY (`id_nivel`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_nivel_acesso`
--

LOCK TABLES `tbl_nivel_acesso` WRITE;
/*!40000 ALTER TABLE `tbl_nivel_acesso` DISABLE KEYS */;
INSERT INTO `tbl_nivel_acesso` VALUES (1,'Paciente','Pacientes de uma unidade'),(2,'Medico','Funcionário Médico'),(3,'Paciente Criança','Paciente criança'),(4,'sdts','                                                                \r\n         sdgsdg                   ');
/*!40000 ALTER TABLE `tbl_nivel_acesso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_nivel_funcionario`
--

DROP TABLE IF EXISTS `tbl_nivel_funcionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_nivel_funcionario` (
  `id_nivel_funcionario` int(11) NOT NULL AUTO_INCREMENT,
  `nivel` varchar(45) DEFAULT NULL,
  `descricao` text,
  `ativo` tinyint(4) DEFAULT '1',
  `cargo` tinyint(4) DEFAULT NULL,
  `especialidade` tinyint(4) DEFAULT NULL,
  `funcionario` tinyint(4) DEFAULT NULL,
  `agendamento` tinyint(4) DEFAULT NULL,
  `paciente_pendente` tinyint(4) DEFAULT NULL,
  `paciente_ativo` tinyint(4) DEFAULT NULL,
  `remedio` tinyint(4) DEFAULT NULL,
  `receita` tinyint(4) DEFAULT NULL,
  `internacao` tinyint(4) DEFAULT NULL,
  `quarto` tinyint(4) DEFAULT NULL,
  `tipo_quarto` tinyint(4) DEFAULT NULL,
  `nivel_usuario` tinyint(4) DEFAULT NULL,
  `pagamento` tinyint(4) DEFAULT NULL,
  `senha` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id_nivel_funcionario`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_nivel_funcionario`
--

LOCK TABLES `tbl_nivel_funcionario` WRITE;
/*!40000 ALTER TABLE `tbl_nivel_funcionario` DISABLE KEYS */;
INSERT INTO `tbl_nivel_funcionario` VALUES (1,'administrador','Administra tudo no siteAdministra tudo no siteAdministra tudo no siteAdministra tudo no siteAdministra tudo no siteAdministra tudo no siteAdministra tudo no siteAdministra tudo no siteAdministra tudo no siteAdministra tudo no siteAdministra tudo no siteAdministra tudo no siteAdministra tudo no siteAdministra tudo no siteAdministra tudo no siteAdministra tudo no siteAdministra tudo no siteAdministra tudo no siteAdministra tudo no siteAdministra tudo no siteAdministra tudo no siteAdministra tudo no siteAdministra tudo no siteAdministra tudo no siteAdministra tudo no siteAdministra tudo no siteAdministra tudo no siteAdministra tudo no siteAdministra tudo no siteAdministra tudo no siteAdministra tudo no siteAdministra tudo no siteAdministra tudo no siteAdministra tudo no siteAdministra tudo no siteAdministra tudo no siteAdministra tudo no siteAdministra tudo no siteAdministra tudo no siteAdministra tudo no siteAdministra tudo no siteAdministra tudo no siteAdministra tudo no siteAdministra tudo no siteAdministra tudo no siteAdministra tudo no siteAdministra tudo no siteAdministra tudo no site',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,'CDC','Cria e edita conteúdos para o site',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3,'vv','ss',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,'funcionaaaadvg2gd22','asdasdas200',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(5,'teste','teste',1,1,1,1,0,1,1,0,1,0,1,1,0,1,NULL),(6,'Administrador','Administra todos os niveis',1,1,1,1,1,1,1,1,1,1,1,1,1,1,1),(7,'não acessa senha','não acessa senha',1,1,1,1,1,1,1,1,1,1,1,1,1,1,0),(8,'nada','nada',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(9,'teste2','teste',0,1,1,0,1,0,1,0,0,1,0,0,0,1,1);
/*!40000 ALTER TABLE `tbl_nivel_funcionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_paciente`
--

DROP TABLE IF EXISTS `tbl_paciente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_paciente` (
  `id_paciente` int(11) NOT NULL AUTO_INCREMENT,
  `id_endereco` int(11) NOT NULL,
  `id_convenio` int(11) DEFAULT NULL,
  `nome` varchar(45) NOT NULL,
  `sobrenome` varchar(45) NOT NULL,
  `dt_nasc` date NOT NULL,
  `rg` text,
  `cpf` text,
  `carterinha_convenio` text,
  `foto` text,
  `status` varchar(45) DEFAULT NULL,
  `ativo` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id_paciente`),
  KEY `fk3_idx` (`id_endereco`),
  CONSTRAINT `fk3` FOREIGN KEY (`id_endereco`) REFERENCES `tbl_endereco` (`id_endereco`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_paciente`
--

LOCK TABLES `tbl_paciente` WRITE;
/*!40000 ALTER TABLE `tbl_paciente` DISABLE KEYS */;
INSERT INTO `tbl_paciente` VALUES (8,38,1,'MARIA','XIQUINHA','1999-01-31','5545465','46026502874','arquivos/Cyntia SENAI 20180216_081615.jpg','arquivos/bg_login1.jpg','1',1),(9,52,1,'Kevin','Farias','2018-05-10','111111','45454','arquivos/Jellyfish.jpg','arquivos/Desert.jpg','1',1),(10,53,1,'Kevin','Farias','2018-05-10','111111','45454','arquivos/Jellyfish.jpg','arquivos/Desert.jpg','1',1),(11,54,1,'Kevin','Farias','2018-05-03','111111','45454','arquivos/Lighthouse.jpg','arquivos/Koala.jpg','1',1);
/*!40000 ALTER TABLE `tbl_paciente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_paciente_internacao`
--

DROP TABLE IF EXISTS `tbl_paciente_internacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_paciente_internacao` (
  `id_paciente_internacao` int(11) NOT NULL AUTO_INCREMENT,
  `id_paciente` int(11) DEFAULT NULL,
  `id_funcionario` int(11) DEFAULT NULL,
  `id_quarto` int(11) DEFAULT NULL,
  `id_unidade` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  PRIMARY KEY (`id_paciente_internacao`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_paciente_internacao`
--

LOCK TABLES `tbl_paciente_internacao` WRITE;
/*!40000 ALTER TABLE `tbl_paciente_internacao` DISABLE KEYS */;
INSERT INTO `tbl_paciente_internacao` VALUES (2,8,1,2,3,'2018-05-05','08:08:00'),(3,8,2,2,4,'2018-05-18','08:08:00'),(4,9,2,2,4,'2018-05-17','09:09:00'),(5,11,2,1,2,'2018-05-31','09:09:00');
/*!40000 ALTER TABLE `tbl_paciente_internacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_pais`
--

DROP TABLE IF EXISTS `tbl_pais`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_pais` (
  `id_pais` int(11) NOT NULL AUTO_INCREMENT,
  `paises` varchar(45) NOT NULL,
  PRIMARY KEY (`id_pais`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_pais`
--

LOCK TABLES `tbl_pais` WRITE;
/*!40000 ALTER TABLE `tbl_pais` DISABLE KEYS */;
INSERT INTO `tbl_pais` VALUES (1,'Brasil');
/*!40000 ALTER TABLE `tbl_pais` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_plantao`
--

DROP TABLE IF EXISTS `tbl_plantao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_plantao` (
  `id_plantao` int(11) NOT NULL AUTO_INCREMENT,
  `id_funcionario` int(11) NOT NULL,
  `hora` varchar(45) DEFAULT NULL,
  `dt_nasc` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_plantao`),
  KEY `fk_8001_idx` (`id_funcionario`),
  CONSTRAINT `fk_8001` FOREIGN KEY (`id_funcionario`) REFERENCES `tbl_funcionario` (`id_funcionario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_plantao`
--

LOCK TABLES `tbl_plantao` WRITE;
/*!40000 ALTER TABLE `tbl_plantao` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_plantao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_pre_atendimento`
--

DROP TABLE IF EXISTS `tbl_pre_atendimento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_pre_atendimento` (
  `id_pre_atendimento` int(11) NOT NULL AUTO_INCREMENT,
  `id_paciente` int(11) DEFAULT NULL,
  `id_unidade` int(11) DEFAULT NULL,
  `id_funcionario` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `hora` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_pre_atendimento`),
  KEY `fk_pre_atendimento_paciente_idx` (`id_paciente`),
  KEY `fk_pre_atendimento_unidade_idx` (`id_unidade`),
  KEY `fk_pre_atendimento_funcionario_idx` (`id_funcionario`),
  CONSTRAINT `fk_pre_atendimento_funcionario` FOREIGN KEY (`id_funcionario`) REFERENCES `tbl_funcionario` (`id_funcionario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pre_atendimento_paciente` FOREIGN KEY (`id_paciente`) REFERENCES `tbl_paciente` (`id_paciente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pre_atendimento_unidade` FOREIGN KEY (`id_unidade`) REFERENCES `tbl_unidade` (`id_unidade`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_pre_atendimento`
--

LOCK TABLES `tbl_pre_atendimento` WRITE;
/*!40000 ALTER TABLE `tbl_pre_atendimento` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_pre_atendimento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_preco_tratamento`
--

DROP TABLE IF EXISTS `tbl_preco_tratamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_preco_tratamento` (
  `id_preco_tratamento` int(11) NOT NULL AUTO_INCREMENT,
  `tratamento` varchar(55) NOT NULL,
  `preco` float NOT NULL,
  PRIMARY KEY (`id_preco_tratamento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_preco_tratamento`
--

LOCK TABLES `tbl_preco_tratamento` WRITE;
/*!40000 ALTER TABLE `tbl_preco_tratamento` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_preco_tratamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_quarto`
--

DROP TABLE IF EXISTS `tbl_quarto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_quarto` (
  `id_quarto` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo_quarto` int(11) NOT NULL,
  `id_unidade` int(11) NOT NULL,
  `numero` int(4) DEFAULT NULL,
  PRIMARY KEY (`id_quarto`),
  KEY `fk18_idx` (`id_tipo_quarto`),
  KEY `fk_18_idx` (`id_unidade`),
  CONSTRAINT `fk18` FOREIGN KEY (`id_tipo_quarto`) REFERENCES `tbl_tipo_quarto` (`id_tipo_quarto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_18` FOREIGN KEY (`id_unidade`) REFERENCES `tbl_unidade` (`id_unidade`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_quarto`
--

LOCK TABLES `tbl_quarto` WRITE;
/*!40000 ALTER TABLE `tbl_quarto` DISABLE KEYS */;
INSERT INTO `tbl_quarto` VALUES (1,3,1,27),(2,10,3,30);
/*!40000 ALTER TABLE `tbl_quarto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_receita_medica`
--

DROP TABLE IF EXISTS `tbl_receita_medica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_receita_medica` (
  `id_receita_medica` int(11) NOT NULL AUTO_INCREMENT,
  `id_funcionario` int(11) DEFAULT NULL,
  `id_paciente` int(11) DEFAULT NULL,
  `id_remedio` int(11) DEFAULT NULL,
  `tipo` text,
  `data` date DEFAULT NULL,
  PRIMARY KEY (`id_receita_medica`),
  KEY `fk_541_idx` (`id_remedio`),
  KEY `fk_idpacientepaciente_idx` (`id_paciente`),
  CONSTRAINT `fk_541` FOREIGN KEY (`id_remedio`) REFERENCES `tbl_remedio` (`id_remedio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_idpacientepaciente` FOREIGN KEY (`id_paciente`) REFERENCES `tbl_paciente` (`id_paciente`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_receita_medica`
--

LOCK TABLES `tbl_receita_medica` WRITE;
/*!40000 ALTER TABLE `tbl_receita_medica` DISABLE KEYS */;
INSERT INTO `tbl_receita_medica` VALUES (1,2,8,1,'MMEKE','2018-05-10'),(2,2,8,1,'ASDASDASD','2018-05-10');
/*!40000 ALTER TABLE `tbl_receita_medica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_remedio`
--

DROP TABLE IF EXISTS `tbl_remedio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_remedio` (
  `id_remedio` int(11) NOT NULL AUTO_INCREMENT,
  `remedio` varchar(45) DEFAULT NULL,
  `descricao` text,
  PRIMARY KEY (`id_remedio`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_remedio`
--

LOCK TABLES `tbl_remedio` WRITE;
/*!40000 ALTER TABLE `tbl_remedio` DISABLE KEYS */;
INSERT INTO `tbl_remedio` VALUES (1,'remedio','teste teste');
/*!40000 ALTER TABLE `tbl_remedio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_resultado_exame`
--

DROP TABLE IF EXISTS `tbl_resultado_exame`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_resultado_exame` (
  `id_resultado_exame` int(11) NOT NULL AUTO_INCREMENT,
  `id_exame` int(11) NOT NULL,
  `id_funcionario` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `nome` text NOT NULL,
  `id_especialidade` int(11) NOT NULL,
  `id_unidade` int(11) NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`id_resultado_exame`),
  KEY `fk_r35648_idx` (`id_paciente`),
  KEY `fk_fsdhiafbdlasd_idx` (`id_funcionario`),
  KEY `fk_fdajsdsad_idx` (`id_especialidade`),
  KEY `fk_kfbhidflas_idx` (`id_exame`),
  KEY `fk_iusafbpasdfas_idx` (`id_unidade`),
  CONSTRAINT `fk_fdajsdsad` FOREIGN KEY (`id_especialidade`) REFERENCES `tbl_especialidade` (`id_especialidade`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_fsdhiafbdlasd` FOREIGN KEY (`id_funcionario`) REFERENCES `tbl_funcionario` (`id_funcionario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iusafbpasdfas` FOREIGN KEY (`id_unidade`) REFERENCES `tbl_unidade` (`id_unidade`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_kfbhidflas` FOREIGN KEY (`id_exame`) REFERENCES `tbl_exame` (`id_exame`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_r35648` FOREIGN KEY (`id_paciente`) REFERENCES `tbl_paciente` (`id_paciente`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_resultado_exame`
--

LOCK TABLES `tbl_resultado_exame` WRITE;
/*!40000 ALTER TABLE `tbl_resultado_exame` DISABLE KEYS */;
INSERT INTO `tbl_resultado_exame` VALUES (1,1,1,8,'Sangue',1,1,'2012-10-10');
/*!40000 ALTER TABLE `tbl_resultado_exame` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_saida_hospital`
--

DROP TABLE IF EXISTS `tbl_saida_hospital`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_saida_hospital` (
  `id_saida_hospital` int(11) NOT NULL AUTO_INCREMENT,
  `valor` float DEFAULT NULL,
  `descricao` text,
  `data` date DEFAULT NULL,
  PRIMARY KEY (`id_saida_hospital`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_saida_hospital`
--

LOCK TABLES `tbl_saida_hospital` WRITE;
/*!40000 ALTER TABLE `tbl_saida_hospital` DISABLE KEYS */;
INSERT INTO `tbl_saida_hospital` VALUES (2,54,'sei la qualquer coisa','2018-05-26');
/*!40000 ALTER TABLE `tbl_saida_hospital` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_senha`
--

DROP TABLE IF EXISTS `tbl_senha`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_senha` (
  `id_senha` int(11) NOT NULL AUTO_INCREMENT,
  `emergencia` tinyint(4) DEFAULT '0',
  `senha` varchar(30) DEFAULT NULL,
  `ativo` tinyint(4) DEFAULT NULL,
  `atual` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id_senha`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_senha`
--

LOCK TABLES `tbl_senha` WRITE;
/*!40000 ALTER TABLE `tbl_senha` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_senha` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_setor`
--

DROP TABLE IF EXISTS `tbl_setor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_setor` (
  `id_setor` int(11) NOT NULL AUTO_INCREMENT,
  `id_unidade` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `descricao` text NOT NULL,
  PRIMARY KEY (`id_setor`),
  KEY `fk40_idx` (`id_unidade`),
  CONSTRAINT `fk40` FOREIGN KEY (`id_unidade`) REFERENCES `tbl_unidade` (`id_unidade`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_setor`
--

LOCK TABLES `tbl_setor` WRITE;
/*!40000 ALTER TABLE `tbl_setor` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_setor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_situacao_paciente`
--

DROP TABLE IF EXISTS `tbl_situacao_paciente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_situacao_paciente` (
  `id_situacao_paciente` int(11) NOT NULL AUTO_INCREMENT,
  `id_paciente` int(11) NOT NULL,
  `situacao` text,
  PRIMARY KEY (`id_situacao_paciente`),
  KEY `fk13_idx` (`id_paciente`),
  CONSTRAINT `fk13` FOREIGN KEY (`id_paciente`) REFERENCES `tbl_paciente` (`id_paciente`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_situacao_paciente`
--

LOCK TABLES `tbl_situacao_paciente` WRITE;
/*!40000 ALTER TABLE `tbl_situacao_paciente` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_situacao_paciente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_slide_saude`
--

DROP TABLE IF EXISTS `tbl_slide_saude`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_slide_saude` (
  `id_slide_saude` int(11) NOT NULL AUTO_INCREMENT,
  `imagem` text,
  `status` tinyint(4) DEFAULT NULL,
  `ativo` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id_slide_saude`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_slide_saude`
--

LOCK TABLES `tbl_slide_saude` WRITE;
/*!40000 ALTER TABLE `tbl_slide_saude` DISABLE KEYS */;
INSERT INTO `tbl_slide_saude` VALUES (1,'imagem_slide_saude/dicas_saude2.jpg',1,1),(2,'imagem_slide_saude/403734003-yoyo-wallpapers.jpg',0,0),(3,'imagem_slide_saude/dicas_saude1.jpg',1,1);
/*!40000 ALTER TABLE `tbl_slide_saude` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_sobre`
--

DROP TABLE IF EXISTS `tbl_sobre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_sobre` (
  `id_sobre` int(11) NOT NULL AUTO_INCREMENT,
  `sobre` text,
  `missao` text,
  `visao` text,
  `valores` text,
  `imagem1` text,
  `imagem2` text,
  `imagem3` text,
  `status` tinyint(4) DEFAULT NULL,
  `ativo` tinyint(4) DEFAULT NULL,
  `id_convenio` int(11) NOT NULL DEFAULT '0',
  `titulo` text CHARACTER SET latin1,
  `subtitulo` text CHARACTER SET latin1,
  `texto` text CHARACTER SET latin1,
  `imagem` text CHARACTER SET latin1,
  `status_imagem` char(1) CHARACTER SET latin1 DEFAULT NULL,
  `link_video` text CHARACTER SET latin1,
  PRIMARY KEY (`id_sobre`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_sobre`
--

LOCK TABLES `tbl_sobre` WRITE;
/*!40000 ALTER TABLE `tbl_sobre` DISABLE KEYS */;
INSERT INTO `tbl_sobre` VALUES (3,'A empresa HHealth com mais de 20 anos de experiência em serviços de saúde, realizando inúmeros atendimentos de urgência e emergência por ano, oferece a seus pacientes os mais avançados recursos diagnósticos buscando satisfação do paciente e excelência no atendimento. O hospital conta com tecnologia avançada, disponibilizando ao paciente diversos equipamentos de última geração que dão segurança e eficiência no tratamento. Conta também com os melhores profissionais sempre à disposição tudo para o cuidado da saúde e garantir o bem estar do paciente.','O Hospital HHealth tem como missão melhorar a qualidade de vida das pessoas por meio da saúde, além de é claro, salvar a vida delas.','A HHealth quer manter-se tão importante quanto é na área da saúde desse país e melhorar em detalhes pois eles realizam grandes mudanças quando observados de modo holístico.','A HHealth tem como valores otimismo e determinação e responsabilidade para com as pessoas que utilizarem seus serviços.','imagem_sobre/missao.jpg','imagem_sobre/visao.jpg','imagem_sobre/valores.jpg',1,1,0,NULL,NULL,NULL,NULL,NULL,NULL),(11,'teste','teste','teste','teste','imagem_sobre/novorio.jpg','imagem_sobre/novorio.jpg','imagem_sobre/novorio.jpg',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `tbl_sobre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_tipo_quarto`
--

DROP TABLE IF EXISTS `tbl_tipo_quarto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_tipo_quarto` (
  `id_tipo_quarto` int(11) NOT NULL AUTO_INCREMENT,
  `nivel` varchar(50) NOT NULL,
  `descricao` text NOT NULL,
  PRIMARY KEY (`id_tipo_quarto`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_tipo_quarto`
--

LOCK TABLES `tbl_tipo_quarto` WRITE;
/*!40000 ALTER TABLE `tbl_tipo_quarto` DISABLE KEYS */;
INSERT INTO `tbl_tipo_quarto` VALUES (3,'teste','teste'),(9,'tipo_quarto2','tipo_quarto'),(10,'teste','teste'),(17,'Suite 14','Wesley viado');
/*!40000 ALTER TABLE `tbl_tipo_quarto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_tipo_senha`
--

DROP TABLE IF EXISTS `tbl_tipo_senha`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_tipo_senha` (
  `id_tipo_senha` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `descricao` text,
  PRIMARY KEY (`id_tipo_senha`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_tipo_senha`
--

LOCK TABLES `tbl_tipo_senha` WRITE;
/*!40000 ALTER TABLE `tbl_tipo_senha` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_tipo_senha` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_trabalhe_conosco`
--

DROP TABLE IF EXISTS `tbl_trabalhe_conosco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_trabalhe_conosco` (
  `id_trabalhe_conosco` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `telefone` tinytext NOT NULL,
  `celular` tinytext NOT NULL,
  `dt_nasc` date NOT NULL,
  `sexo` char(1) NOT NULL,
  `id_pais` int(11) NOT NULL,
  `estado_civil` int(11) NOT NULL,
  `trabalha_atualmente` varchar(45) NOT NULL,
  `id_deficiencia` int(11) NOT NULL,
  `resumo_qualificacoes` text NOT NULL,
  `id_endereco` int(11) DEFAULT NULL,
  `ativo` tinyint(4) DEFAULT NULL,
  `registro_profissional` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_trabalhe_conosco`),
  KEY `fk21389_idx` (`id_pais`),
  KEY `fk213325_idx` (`id_deficiencia`),
  CONSTRAINT `fk213325` FOREIGN KEY (`id_deficiencia`) REFERENCES `tbl_deficiencia` (`id_deficiente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk21389` FOREIGN KEY (`id_pais`) REFERENCES `tbl_pais` (`id_pais`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_trabalhe_conosco`
--

LOCK TABLES `tbl_trabalhe_conosco` WRITE;
/*!40000 ALTER TABLE `tbl_trabalhe_conosco` DISABLE KEYS */;
INSERT INTO `tbl_trabalhe_conosco` VALUES (3,'wesley','wesley@welsye','jgjfj','kgkgbk','2018-04-03','M',1,1,'1',1,'1',NULL,1,NULL),(5,'wesley','wesley@welsye','jgjfj','kgkgbk','2018-04-03','M',1,1,'1',1,'5',NULL,1,1),(6,'wesley','wesley@welsye','jgjfj','kgkgbk','2018-04-09','M',1,1,'1',1,'vai',NULL,1,1),(7,'wesley','wesley@welsye','jgjfj','kgkgbk','2018-04-09','',1,1,'1',1,'asdasd',50,1,1),(8,'sdfsdf','sdfsdf@asdas','sadfasdf','sdfsdf','2018-05-09','M',1,1,'1',1,'teste',57,1,1),(9,'vamo','vamo@vamo','1141414141','4141414141','2018-05-16','M',1,1,'1',1,'asdasd',58,1,1),(10,'vamo','vamo@vamo','1141414141','1141414141','2018-05-15','M',1,1,'1',1,'vamo',59,1,1),(13,'vamo','vamo@vamo','1141414141','1141414141','2018-05-15','M',1,1,'1',1,'sfdfsd',61,1,1);
/*!40000 ALTER TABLE `tbl_trabalhe_conosco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_tratamento`
--

DROP TABLE IF EXISTS `tbl_tratamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_tratamento` (
  `id_tratamento` int(11) NOT NULL AUTO_INCREMENT,
  `id_paciente` int(11) NOT NULL,
  `id_preco_tratamento` int(11) DEFAULT NULL,
  `id_quarto` int(11) NOT NULL,
  `id_funcionario` int(11) DEFAULT NULL,
  `tipo_tratamento` varchar(45) DEFAULT NULL,
  `data_inicio` date DEFAULT NULL,
  `data_fim` date DEFAULT NULL,
  `hora_inicio` time DEFAULT NULL,
  `hora_fim` time DEFAULT NULL,
  PRIMARY KEY (`id_tratamento`),
  KEY `dk21_idx` (`id_paciente`),
  KEY `fk_21_idx` (`id_preco_tratamento`),
  KEY `fk22_idx` (`id_quarto`),
  CONSTRAINT `dk21` FOREIGN KEY (`id_paciente`) REFERENCES `tbl_paciente` (`id_paciente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_21` FOREIGN KEY (`id_preco_tratamento`) REFERENCES `tbl_preco_tratamento` (`id_preco_tratamento`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_tratamento`
--

LOCK TABLES `tbl_tratamento` WRITE;
/*!40000 ALTER TABLE `tbl_tratamento` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_tratamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_unidade`
--

DROP TABLE IF EXISTS `tbl_unidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_unidade` (
  `id_unidade` int(11) NOT NULL AUTO_INCREMENT,
  `id_endereco` int(11) DEFAULT NULL,
  `imagem` text,
  `nome_unidade` tinytext,
  `status` tinyint(4) DEFAULT NULL,
  `ativo` tinyint(4) DEFAULT NULL,
  `latitude` decimal(10,0) DEFAULT NULL,
  `longitude` decimal(10,0) DEFAULT NULL,
  `texto` text,
  `telefone` text,
  PRIMARY KEY (`id_unidade`),
  KEY `fk_enderreco_idx` (`id_endereco`),
  CONSTRAINT `fk_enderreco` FOREIGN KEY (`id_endereco`) REFERENCES `tbl_endereco` (`id_endereco`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_unidade`
--

LOCK TABLES `tbl_unidade` WRITE;
/*!40000 ALTER TABLE `tbl_unidade` DISABLE KEYS */;
INSERT INTO `tbl_unidade` VALUES (1,39,'imagem_unidade/download2.jpg','Osasco',1,0,NULL,NULL,NULL,NULL),(2,41,'imagem_unidade/ambientes3.jpg','Osasco',1,1,12312,3412,'Unidade de Osasco\r\n                            ','123123412'),(3,51,'imagem_unidade/ambientes1.jpg','Barueri',1,1,12312,12321,'Unidade de Barueri                            ','21341234'),(4,56,'imagem_unidade/ambiente3.jpg','Unidade Jandira',1,1,125522,41241,'Unidade de jandira  ','165235');
/*!40000 ALTER TABLE `tbl_unidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_usuario_funcionario`
--

DROP TABLE IF EXISTS `tbl_usuario_funcionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_usuario_funcionario` (
  `id_usuario_funcionario` int(11) NOT NULL AUTO_INCREMENT,
  `id_funcionario` int(11) NOT NULL,
  `id_nivel_acesso` int(11) NOT NULL,
  `usuario` text NOT NULL,
  `senha` text NOT NULL,
  PRIMARY KEY (`id_usuario_funcionario`),
  KEY `fknivel_acesso_idx` (`id_nivel_acesso`),
  CONSTRAINT `fknivel_acesso` FOREIGN KEY (`id_nivel_acesso`) REFERENCES `tbl_nivel_acesso` (`id_nivel`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_usuario_funcionario`
--

LOCK TABLES `tbl_usuario_funcionario` WRITE;
/*!40000 ALTER TABLE `tbl_usuario_funcionario` DISABLE KEYS */;
INSERT INTO `tbl_usuario_funcionario` VALUES (1,1,2,'473.792.828.32','login123'),(2,2,2,'490.660.718-77','123');
/*!40000 ALTER TABLE `tbl_usuario_funcionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_usuario_paciente`
--

DROP TABLE IF EXISTS `tbl_usuario_paciente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_usuario_paciente` (
  `id_usuario_paciente` int(11) NOT NULL AUTO_INCREMENT,
  `id_paciente` int(11) NOT NULL,
  `id_nivel_acesso` int(11) NOT NULL,
  `usuario` text NOT NULL,
  `senha` text NOT NULL,
  PRIMARY KEY (`id_usuario_paciente`),
  KEY `fk_dasd_idx` (`id_paciente`),
  KEY `fk_id_nivel_idx` (`id_nivel_acesso`),
  CONSTRAINT `fk_dasd` FOREIGN KEY (`id_paciente`) REFERENCES `tbl_paciente` (`id_paciente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_nivel` FOREIGN KEY (`id_nivel_acesso`) REFERENCES `tbl_nivel_acesso` (`id_nivel`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_usuario_paciente`
--

LOCK TABLES `tbl_usuario_paciente` WRITE;
/*!40000 ALTER TABLE `tbl_usuario_paciente` DISABLE KEYS */;
INSERT INTO `tbl_usuario_paciente` VALUES (1,8,1,'abc','123');
/*!40000 ALTER TABLE `tbl_usuario_paciente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario_medico_administrador`
--

DROP TABLE IF EXISTS `usuario_medico_administrador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario_medico_administrador` (
  `id_usuario_medico_administrador` int(11) NOT NULL AUTO_INCREMENT,
  `permissao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_usuario_medico_administrador`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario_medico_administrador`
--

LOCK TABLES `usuario_medico_administrador` WRITE;
/*!40000 ALTER TABLE `usuario_medico_administrador` DISABLE KEYS */;
INSERT INTO `usuario_medico_administrador` VALUES (1,'Administração de conteúdo'),(2,'Gerenciar sistema interno'),(3,'Usuário ROOT');
/*!40000 ALTER TABLE `usuario_medico_administrador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `agendamento_paciente_funcionario`
--

/*!50001 DROP VIEW IF EXISTS `agendamento_paciente_funcionario`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `agendamento_paciente_funcionario` AS select `f`.`id_funcionario` AS `id_funcionario`,`f`.`nome` AS `nome_funcionario`,`p`.`id_paciente` AS `id_paciente`,`p`.`nome` AS `nome_paciente`,`ac`.`id_agendamento_consulta` AS `id_agendamento_consulta`,`ac`.`data` AS `data`,`ac`.`ativo` AS `ativo` from ((`tbl_funcionario` `f` join `tbl_paciente` `p`) join `tbl_agendamento_consultas` `ac`) where ((`p`.`id_paciente` = `ac`.`id_paciente`) and (`f`.`id_funcionario` = `ac`.`id_funcionario`) and (`ac`.`ativo` = 0)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `internacao_paciente`
--

/*!50001 DROP VIEW IF EXISTS `internacao_paciente`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `internacao_paciente` AS select `i`.`id_paciente_internacao` AS `id_paciente_internacao`,`p`.`id_paciente` AS `id_paciente`,`p`.`nome` AS `nome`,`q`.`id_quarto` AS `id_quarto`,`q`.`numero` AS `numero`,`u`.`id_unidade` AS `id_unidade`,`u`.`nome_unidade` AS `unidade` from (((`tbl_paciente` `p` join `tbl_paciente_internacao` `i`) join `tbl_quarto` `q`) join `tbl_unidade` `u`) where ((`i`.`id_paciente` = `p`.`id_paciente`) and (`i`.`id_quarto` = `q`.`id_quarto`) and (`i`.`id_unidade` = `u`.`id_unidade`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-04 10:21:42
