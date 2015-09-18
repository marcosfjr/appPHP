# appPHP
App desenvolvida em php  para listagem e comparação de veiculos

DADOS DO BANCO
_________________________________________________________________________________________


CREATE TABLE carro(
	cod_carro int(11) NOT NULL AUTO_INCREMENT,
	marca varchar(30) NOT NULL DEFAULT '',
	modelo varchar(30) NOT NULL DEFAULT '',
	motor varchar(30) NOT NULL DEFAULT '',
	ano int(11) NOT NULL DEFAULT '2015',
	preco decimal(11,2) NOT NULL DEFAULT '0.00',
	cavalos varchar(15)  NOT NULL DEFAULT '',
	etanol decimal(11,1)  NOT NULL DEFAULT '0.0',
	gasolina decimal(11,1)  NOT NULL DEFAULT '0.0',
	revisao decimal(11,2)  NOT NULL DEFAULT '0.00',
	seguro decimal(11,2)  NOT NULL DEFAULT '0.00',
	PRIMARY KEY (cod_carro) 
);

INSERT INTO carro(
	marca ,
	modelo ,
	motor ,
	ano ,
	preco ,
	cavalos ,
	etanol ,
	gasolina ,
	revisao ,
	seguro
)VALUES(
	"VW",
	"Gol" ,
	"1.0",
	"2015" ,
	"29500" ,
	"68" ,
	"8.5" ,
	"13" ,
	"365" ,
	"2700"
);

INSERT INTO carro(
	marca ,
	modelo ,
	motor ,
	ano ,
	preco ,
	cavalos ,
	etanol ,
	gasolina ,
	revisao ,
	seguro
)VALUES(
	"Fiat",
	"Palio" ,
	"1.0",
	"2015" ,
	"27900" ,
	"65" ,
	"9.2" ,
	"14.5" ,
	"388" ,
	"1200"
);

INSERT INTO carro(
	marca ,
	modelo ,
	motor ,
	ano ,
	preco ,
	cavalos ,
	etanol ,
	gasolina ,
	revisao ,
	seguro
)VALUES(
	"Honta",
	"Fit" ,
	"1.5",
	"2015" ,
	"51600" ,
	"116" ,
	"9.5" ,
	"13.6" ,
	"410" ,
	"3200"
);

INSERT INTO carro(
	marca ,
	modelo ,
	motor ,
	ano ,
	preco ,
	cavalos ,
	etanol ,
	gasolina ,
	revisao ,
	seguro
)VALUES(
	"Fiat",
	"Uno" ,
	"1.0",
	"2015" ,
	"29220" ,
	"75" ,
	"9.4" ,
	"14.5" ,
	"370" ,
	"1900"
);

INSERT INTO carro(
	marca ,
	modelo ,
	motor ,
	ano ,
	preco ,
	cavalos ,
	etanol ,
	gasolina ,
	revisao ,
	seguro
)VALUES(
	"VW",
	"Voyage" ,
	"1.0",
	"2015" ,
	"40390" ,
	"76" ,
	"9.6" ,
	"13.9" ,
	"420" ,
	"3100"
);

