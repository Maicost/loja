-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 24/01/2021 às 22:31
-- Versão do servidor: 10.3.25-MariaDB-0ubuntu0.20.04.1
-- Versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `administradores`
--

CREATE TABLE `administradores` (
  `id_admin` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `senha` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `administradores`
--

INSERT INTO `administradores` (`id_admin`, `nome`, `senha`) VALUES
(100, 'clovisson', '0b9fb9a8a915cbb9d61a48966c3415d2'),
(200, 'maico', 'aca7714e149e730e10bc051761be4384'),
(777, 'moises', '2000b7287e012511c77a7b2517e838ba');

-- --------------------------------------------------------

--
-- Estrutura para tabela `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `nome_categoria` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `cpf` varchar(15) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `nascimento` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `cep` varchar(15) NOT NULL,
  `senha_cliente` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`cpf`, `nome`, `nascimento`, `email`, `telefone`, `cep`, `senha_cliente`) VALUES
('07535601085', 'João da silva', '1986-12-04', 'joao_silva@gmail.com', '999999999', '97090999', '93446228624a8510089df08ab55d8302'),
('12345678901', 'marilia', '2021-08-12', 'email@teste.com', '123456789012', '12120000', '25d55ad283aa400af464c76d713c07ad'),
('25698703465', 'Pedro da silveira', '1996-12-17', 'pedro_silveira@gmail.com', '777777777', '97090777', 'f1952dcb1d742bd3c497a0c2bc5adca3'),
('78459831025', 'Maria Costa', '1987-04-28', 'maria_costa@gmail.com', '888888888', '97090888', 'a7d65063111122f800e29719bbefc28a'),
('78459831035', 'maico', '1987-04-28', 'maico@gmail.com', '999999999', '97190000', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Estrutura para tabela `endereco`
--

CREATE TABLE `endereco` (
  `cep` varchar(15) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `rua` varchar(40) NOT NULL,
  `bairro` varchar(40) NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `endereco`
--

INSERT INTO `endereco` (`cep`, `estado`, `cidade`, `rua`, `bairro`, `numero`) VALUES
('97090111', 'são paulo', 'são paulo', 'rua 1', 'bairro 1', 100),
('97090222', 'rio de janeiro', 'rio de janeiro', 'rua 2', 'bairro 2', 200),
('97090333', 'minas gerais', 'extrema', 'rua 3', 'bairro 3', 300),
('97090777', 'rio grande do sul', 'nova palma', 'rua 6', 'bairro 6', 600),
('97090888', 'mato grosso', 'sorriso', 'rua 5', 'bairro 5', 500),
('97090999', 'bahia', 'cícero dantas', 'rua 4', 'bairro 4', 400);

-- --------------------------------------------------------

--
-- Estrutura para tabela `fornecedores`
--

CREATE TABLE `fornecedores` (
  `cnpj` varchar(30) NOT NULL,
  `nome_fornecedor` varchar(30) NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `cep` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `fornecedores`
--

INSERT INTO `fornecedores` (`cnpj`, `nome_fornecedor`, `categoria`, `cep`) VALUES
('11111111000101', 'fornecedor 1', 'armazenamento', '97090111'),
('22222222000102', 'fornecedor 2', 'processamento', '97090222'),
('33333333000103', 'fornecedor 3', 'graficos e memorias', '97090333');

-- --------------------------------------------------------

--
-- Estrutura para tabela `imagens`
--

CREATE TABLE `imagens` (
  `id_imagem` int(11) NOT NULL,
  `nome_imagem` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `imagens`
--

INSERT INTO `imagens` (`id_imagem`, `nome_imagem`) VALUES
(1, 'Adata240GB.jpg'),
(2, 'Altomex32GB.jpg'),
(3, 'AORUSRTX3080TI.jpg'),
(4, 'EVGARTX3080.jpg'),
(5, 'Galax2080Super.jpg'),
(6, 'GeforceRTX2070.jpg'),
(7, 'GeforceRTX2080TI.jpg'),
(8, 'HyperX4GB2400MHZ.jpg'),
(9, 'HyperX16GB2666MHZ.jpg'),
(10, 'IntelI9.jpg'),
(11, 'IntelI39100F.jpg'),
(12, 'IntelI59400F.jpg'),
(13, 'IntelI79700K.jpg'),
(14, 'kingston120GB.jpg'),
(15, 'msiRTX3090.jpg'),
(16, 'Multilaser16GB.jpg'),
(17, 'rtx3090.jpg'),
(18, 'rtx20708gb.jpg'),
(19, 'Ryzen3-2200G.jpg'),
(20, 'Ryzen5-3600.jpg'),
(21, 'Ryzen7-3700.jpg'),
(22, 'Ryzen9.jpg'),
(23, 'Sandisk8GB.jpg'),
(24, 'Sandisk120GB.jpg'),
(25, 'Seagate1TB.jpg'),
(26, 'Seagate2TB.jpg'),
(27, 'Tech64GB.jpg'),
(28, 'Theadripper.jpg'),
(29, 'Vengeance8GB3000MHZ.jpg'),
(30, 'WD500GB.jpg'),
(31, 'WDgreen240GB.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(11) NOT NULL,
  `id_cliente` varchar(15) CHARACTER SET utf8 NOT NULL,
  `id_produto` int(11) NOT NULL,
  `quantidade_prod` int(11) NOT NULL,
  `status` varchar(30) NOT NULL,
  `forma_pagamento` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `id_cliente`, `id_produto`, `quantidade_prod`, `status`, `forma_pagamento`) VALUES
(38, '12345678901', 74, 1, 'pendente', 'boleto'),
(39, '12345678901', 78, 1, 'pendente', 'boleto'),
(40, '12345678901', 74, 1, 'pendente', 'boleto'),
(41, '12345678901', 73, 1, 'pendente', 'debito_master'),
(42, '12345678901', 72, 1, 'pendente', 'credito_master'),
(43, '12345678901', 73, 1, 'pendente', 'boleto'),
(44, '12345678901', 76, 1, 'pendente', 'boleto');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL,
  `nome_produto` varchar(100) NOT NULL,
  `cod_produto` varchar(50) NOT NULL,
  `descricao` varchar(5000) NOT NULL,
  `preco_custo` float DEFAULT NULL,
  `preco_final` float DEFAULT NULL,
  `cnpj` varchar(30) NOT NULL,
  `quantidade_estoque` int(11) NOT NULL,
  `id_imagem` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `nome_produto`, `cod_produto`, `descricao`, `preco_custo`, `preco_final`, `cnpj`, `quantidade_estoque`, `id_imagem`, `id_categoria`) VALUES
(72, 'SSD ADATA', '000001', 'Marca: Adata\r\nModelo: ASU630SS-240GQ-R\r\nCapacidade: 240GB\r\nInterface: SATA 6Gb/s (SATA III)\r\nNAND Flash: 3D NAND\r\nForm factor: 2.5”\r\nMTBF: 1,500,000 horas\r\nTemperatura de Operação: 0°C - 70°C\r\nTemperatura de Armazenamento: -40°C - 85°C\r\nResistência ao choque: 1500G / 0.5ms\r\nCertificações: RoHS, CE, FCC, BSMI, VCCI, KC\r\nTBW: 50TB\r\nDimensões: 100.45 x 69.85 x 7mm', 199, 270, '11111111000101', 10, 1, 1),
(73, 'Pendrive 32GB Altomex', '000002', 'Marca: Altomex\r\nModelo: AL-U-32\r\nCapacidade: 32GB (32.000.000.000 bytes reais)\r\nUSB 2.0\r\nVelocidade de transmissão: Gravação 6Mbps / Leitura 15 Mbps\r\nSistema Compatíveis: Mac OS/Linux/Win XP, 7, 8 e 10', 43.5, 56.93, '11111111000101', 10, 2, 3),
(74, 'RTX 3080TI AORUS', '000003', 'Marca: Gigabyte\r\nModelo: GV-N3080AORUS M-10GD\r\nProcessamento de Gráficos: GeForce RTX ™ 3080\r\nCore Clock: TBD\r\nRTX-OPS: TBD\r\nCUDA® Cores: 8704\r\nRelógio de memória: 19000 MHz\r\nTamanho da memória: 10 GB\r\nTipo de Memória: GDDR6X\r\nBarramento de Memória: 320 bits\r\nLargura de banda da memória (GB / s): 760 GB / s\r\nCard Bus: PCI-E 4.0 x 16\r\nResolução máxima digital: 7680x4320 @ 60Hz\r\nMulti-view: 4\r\nTamanho do cartão: TBD\r\nFormulário PCB: ATX\r\nDirectX: 12 Ultimate\r\nOpenGL: 4,6\r\nPSU recomendado: 750W\r\nConectores de energia: 8 pinos * 2\r\nSaídas: DisplayPort 1.4a * 3\r\nHDMI 2.1 * 3\r\nSuporte SLI: N / D', 4500, 6870, '33333333000103', 14, 3, 4),
(75, 'RTX 3080 EVGA', '000004', 'Marca: Evga\r\nModelo: 10G-P5-3897-KR\r\nCUDA Cores: 8704\r\nBoost Clock: 1800 MHz\r\nCapacidade: 10240 MB\r\nClock de memória: 19000 Mhz Efetivo\r\nTipo: GDDR6X\r\nBits: 320 bit\r\nMax Digital: 7680 x 4320\r\nPCIe 4.0', 4350, 5800, '33333333000103', 7, 4, 4),
(76, 'RTX 2080 Super Galax', '000005', 'Marca: Galax\r\nModelo: 28ISL6MD49ES\r\nCUDA Cores: 3072\r\nBoost Clock (MHz): 1845\r\nVelocidade de memória: 15,5 Gbps\r\nCapacidade: 8 GB\r\nLargura da interface de memória GDDR6 de 256 bits\r\nLargura de banda da memória (GB/s): 496\r\nPCI-E 3.0\r\n3 x DisplayPort 1.4', 4100, 5200, '33333333000103', 5, 5, 4),
(77, 'RTX 2070 Geforce', '000006', 'Marca: Geforce\r\nModelo: 27ISL6MD49ES\r\nCUDA Cores: 2560\r\nBoost Clock (MHz): 1815\r\nVelocidade de memória: 14Gbps\r\nCapacidade: 8 GB\r\nLargura da interface de memória GDDR6 de 256 bits\r\nLargura de banda da memória (GB/s): 448\r\nPCI-E 3.0\r\n3 x DisplayPort 1.4\r\n1 x HDMI 2.0b', 3500, 4500, '33333333000103', 6, 6, 4),
(78, 'RTX 2080TI Geforce', '000007', 'Marca: Geforce\r\nModelo: ROG-STRIX-RTX2080TI-O11G-GAMING\r\nNVIDIA GeForce RTX 2080 Ti\r\nNúcleo CUDA: 4352\r\nModo OC: GPU Boost Clock: 1665 MHz, GPU Base Clock: 1350 MHz\r\nModo Gaming (padrão) GPU Boost Clock: 1650 MHz, GPU Base Clock: 1350 MHz\r\nPCI Express 3.0\r\nCapacidade: 11GB\r\nTipo: GDDR6\r\nClock: 14000 MHz\r\nDigital: 7680 x 4320 (máximo)\r\nPSU recomendado: 650W\r\n2x HDMI 2.0b\r\n2x DisplayPort 1.4', 6200, 7500, '33333333000103', 9, 7, 4),
(79, 'Memória RAM 4GB HyperX', '000008', 'Marca: HyperX\r\nModelo: HX424C15FB3/4\r\nFormato: UDIMM\r\nCapacidades de módulo: 4GB\r\nVoltagem: 1.2V\r\nLatências CAS: 15\r\nVelocidades: 2400MHz\r\nTemperatura de operação: 0o C até +70o C', 150, 230, '33333333000103', 30, 8, 2),
(80, 'Memória RAM 8GB hyperX', '000009', 'Marca: HyperX\r\nModelo: HX426C16FB3/8\r\nFormato: UDIMM\r\nCapacidades de módulo: 8GB\r\nVoltagem: 1.2V\r\nLatências CAS: 16\r\nVelocidades: 2666MHz\r\nTemperatura de operação: 0o C até +70o C', 250, 370.66, '33333333000103', 17, 9, 2),
(81, 'Processador intel core i9 9900k', '000010', 'Marca: Intel\n Modelo: BX80684I99900KF\n Núcleos: 8\n Threads: 16\n Freqüência básica: 3.60 GHz\n Freqüência Máxima Turbo: 5.00 GHz\n Cache de 16 MB do SmartCache\n Velocidade do barramento: 8 GT / s DMI3\n TDP: 95 W', 2570.89, 3753.96, '22222222000102', 4, 10, 5),
(82, 'Processador intel core i3 39100F', '000011', 'Marca: Intel\n Modelo: i3-9100F Coffee Lake\n Litografia: 14 nm\n Número de núcleos: 4\n Número de threads: 4\n Frequência baseada em processador: 3.60 GHz\n Frequência turbo max: 4.20 GHz\n Cache: 6 MB SmartCache\n TDP: 65 W', 511, 655.78, '22222222000102', 5, 11, 5),
(83, 'Processador intel core i5 9400F', '000012', 'Marca: Intel\n Modelo: BX80684I59400F\n Litografia: 14 nm\n Núcleos: 6x\n Threads: 6x\n Frequência básica: 2,90 GHz\n Freqüência máxima: 4,10 GHz\n SmartCache de 9 MB\n Velocidade do Bus: 8 GT / s DMI3\n TDP: 65 W', 850.55, 1150.12, '22222222000102', 3, 12, 5),
(84, 'Processador intel core i7 9700K', '000013', 'Marca: Intel\n Modelo: BX80684I79700KF\n Quantidade de núcleos: 8\n Quantidade de Threads: 8\n Freqüência básica: 3.60 GHz\n Frequência Máxima: 4,90 GHz (turbo)\n SmartCache: 12 MB\n Velocidade do barramento: 8 GT / s DMI3\n TDP: 95 W', 1703.99, 2987.66, '22222222000102', 2, 13, 5),
(85, 'SSD kingston 120GB', '000014', 'Marca: Kingston\n Modelo: SA400S37/120G\n Capacidades: 120GB\n Performance de referência - até 500MB/s para leitura e 320MB/s para gravação\n Temperatura de armazenamento: -40 °C a 85 °C\n Temperatura de operação: 0 °C a 70 °C\n NAND: TLC\n  ', 89.56, 156.32, '11111111000101', 21, 14, 1),
(86, 'Placa de video RTX 3090 MSI', '000015', 'Marca: MSI\n Modelo: RTX 3090 Gaming X Trio\n PCI Express Gen 4\n Capacidade: 24GB\n Tipo: GDDR6X\n BUS: 384 bits\n 3x DisplayPort (v1.4a)\n 1x HDMI 2.1\n Suporte HDCP\n Pinos: 3x de 8-pin\n DirectX 12 API\n OpenGL 4.6\n NVLink\n VR Ready\n Display: até 4x\n Resolução: 7680 x 4320', 12500.7, 15000.3, '33333333000103', 7, 15, 4),
(87, 'Pendrive 16GB Multilaser', '000016', 'Marca: Multilaser\n Modelo: PD054\n Capacidade: 16GB\n Taxa de transmissão de dados: 13 MB/s (leitura) e 5 MB/s (gravação)\n Conexão USB 2.0: DC 5V', 15.4, 40, '11111111000101', 10, 16, 3),
(88, 'Placa de video RTX 2070 Gigabyte', '000018', 'Marca: Gigabyte\n Modelo: GV-N207SWF3-8GD\n Clock: 1770 MHz\n RTX-OPS: 52\n Núcleos CUDA: 2560\n Clock Memoria: 14000 MHz\n Capacidade: 8 GB\n Tipo: GDDR6\n Barramento: 256 bits\n Largura de Banda: 448 GB/s\n PCI-E 3.0 x16\n Resolução máxima digital: 7680 x 4320 a 60Hz\n DirectX 12\n OpenGL 4.6\n PSU Recomendado: 650W\n Conectores de Força: 1x 8-pin | 1x 6-pin\n 3x DisplayPort 1.4\n 1x HDMI 2.0b', 2999, 4150.72, '33333333000103', 7, 18, 4),
(89, 'Processador AMD Ryzen 3 2200G', '000019', 'Marca: AMD\n Modelo: YD2200C5FBBOX\n CPU Cores: 4\n Base Clock: 3.5GHz\n Cache L3 total: 4MB\n Threads: 4\n Máx. Boost Clock: 3.7GHz\n Default TDP / TDP: 65W\n GPU Cores: 8\n Total L2 Cache: 2MB\n cTDP: 46-65W\n Modelo: Radeon VEGA 8 Processor Graphics (integrado no chip do processador)', 630.42, 839.77, '22222222000102', 5, 19, 5),
(90, 'Processador AMD Ryzen 5 3600', '000020', 'Marca: AMD\n Modelo: 100-100000281BOX\n Socket: AM4\n Núcleos de CPU: 6\n Threads: 12\n Clock básico: 3.8GHz\n Clock de Max Boost: Até 4.5GHz\n Cachê L2 total: 3MB\n Cachê L3 total: 32MB\n CMOS: TSMC 7nm FinFET\n Versão do PCI Express: PCIe 4.0\n TDP / TDP Padrão: 95W', 1700.56, 2150.42, '22222222000102', 5, 20, 5),
(91, 'Processador AMD Ryzen 7 3700x', '000021', 'Marca: AMD\n Modelo: 100-100000071BOX\n Nº de núcleos de CPU: 8\n Nº de threads: 16\n Clock básico: 3.6GHz\n Clock de Max Boost: 4.4GHz\n Cachê L2 total: 4MB\n Cachê L3 total: 32MB\n Desbloqueado: Sim\n CMOS: TSMC 7nm FinFET\n Socket: AM4\n Versão do PCI Express: PCIe 4.0 x16\n TDP / TDP Padrão: 65W', 1900, 2550, '22222222000102', 9, 21, 5),
(92, 'Processador AMD Ryzen 9 3950x', '000022', 'Marca: AMD\n Modelo: 100-100000051WOF\n Núcleos de CPU: 16x\n Threads: 32x\n Clock básico: 3.5GHz\n Clock de Max Boost: Até 4.7GHz\n Cachê L1 total: 1MB\n Cachê L2 total: 8MB\n Total de Cachê L3: 64MB\n CMOS: TSMC 7nm FinFET\n Socket: AM4\n Versão do PCI Express: PCIe 4.0 x16\n Padrão TDP / TDP: 105W', 4500.63, 5989.65, '22222222000102', 7, 22, 5),
(93, 'Pendrive 8GB Sandisk', '000023', 'Marca: Sandisk\n Modelo: Cruzer Blade\n Capacidade: 8GB\n Taxa de transmissão de dados: 13 MB/s (leitura) e 5 MB/s (gravação)\n Conexão USB 2.0: DC 5V', 12.5, 25.3, '11111111000101', 6, 23, 3),
(94, 'SSD 120GB Sandisk', '000024', 'Marca: Sandisk\n Modelo: SDSSDA-120G-G27\n Capacidade: 120 GB\n Velocidade de Leitura: até 530 MB/s\n Velocidades de Gravação: até 310 MB/s\n Interface: SATA Revision 3.0 (6 Gb/s)', 112.56, 178.89, '11111111000101', 2, 24, 1),
(97, 'HDD 1TB Seagate', '000025', 'Marca: Seagate\n Modelo: ST1000DM010\n SATA 6Gb/s\n Taxas de transferência SATA suportadas (Gb / s): 6.0/3.0/1.5\n Taxa média de dados, leitura/gravação: 156\n Máx. Taxa de dados, leitura/gravação OD: 210\n Cache: 64 MB', 214.99, 245.86, '11111111000101', 20, 25, 1),
(98, 'HDD 2TB Seagate', '000026', 'Marca: Seagate\n Modelo: ST2000DM008\n Interface: SATA 6Gb/s\n Taxa de transferência suportado SATA: 6.0 / 3.0 / 1.5 Gb/s\n Taxa de transferência sustentada OD: 220MB/s\n Cache: 256 MB\n Bytes por setor: 4096\n Capacidade: 2TB', 210, 389, '11111111000101', 7, 26, 1),
(99, 'Pendrive U-TECH 64GB', '000027', 'Marca: U-Tech\n Capacidade: 64Gb\n Velocidade de Transferência: 5MB/s escrita e 15MB/s leitura\n Conexões: Usb 2.0\n Plug Play', 50.4, 73.2, '11111111000101', 8, 27, 3),
(100, 'Processador AMD Ryzen ThreadRipper 3990x', '000028', 'Marca: AMD\n Modelo: 100-100000163WOF\n Socket: sTRX4\n Núcleos: 64\n Threads: 128\n Clock base: 2.9 GHz\n Clock turbo: 4.3 GHz\n Cache L2 total: 32MB\n Cache L3 Total: 256MB\n TDP: 280 W\n CMOS: TSMC 7nm FinFET', 21600.4, 29800.5, '22222222000102', 3, 28, 5),
(101, 'Memória RAM Vengeance 8GB', '000029', 'Marca: Corsair\n Modelo: CMK8GX4M1A2400C16\n Capacidade: 8GB\n Velocidade: 2400 Mhz\n Pinagem: 288-pin\n Timing: 16-16-16-39\n Cas Latência: 16\n Tecnologia: DIMM\n Tipo: DDR4 SDRAM\n Voltagem: 1.2 volts', 187, 290.63, '33333333000103', 6, 29, 2),
(102, 'HDD 500GB WD', '000030', 'Marca: WD\n Modelo: WD5000LPCX\n Interface: SATA 6 Gb/s (LPVX, LPCX)\n RPM: 5400\n  Capacidade: 500GB\n Taxas de transferência de dados ( velocidade da interface): 6 Gb/s\n Cache: 16MB\n Latência média: 5.5 ms', 203.56, 290.55, '11111111000101', 2, 30, 1),
(103, 'SSD WD GREEN 240GB', '000031', 'Marca: Western Digital\n Modelo: WDS240G2G0A\n Capacidade: 240GB\n Interface: SATA III 6Gb s\n Leituras: 545MB/s\n Gravações: 465MB/s\n Leitura sequencial até: 545Mb/s', 195.56, 295.89, '11111111000101', 8, 31, 1);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id_admin`);

--
-- Índices de tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`cpf`);

--
-- Índices de tabela `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`cep`);

--
-- Índices de tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`cnpj`),
  ADD KEY `cep` (`cep`);

--
-- Índices de tabela `imagens`
--
ALTER TABLE `imagens`
  ADD PRIMARY KEY (`id_imagem`);

--
-- Índices de tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `id_produto` (`id_produto`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `cnpj` (`cnpj`),
  ADD KEY `id_imagem` (`id_imagem`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `imagens`
--
ALTER TABLE `imagens`
  MODIFY `id_imagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD CONSTRAINT `fornecedores_ibfk_1` FOREIGN KEY (`cep`) REFERENCES `endereco` (`cep`);

--
-- Restrições para tabelas `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`id_produto`),
  ADD CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`cpf`);

--
-- Restrições para tabelas `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`cnpj`) REFERENCES `fornecedores` (`cnpj`),
  ADD CONSTRAINT `produtos_ibfk_2` FOREIGN KEY (`id_imagem`) REFERENCES `imagens` (`id_imagem`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
