CREATE TABLE tb_imobiliaria(
imobiliaria_id int NOT NULL,
imobiliaria_cep varchar(255),
imobiliaria_razao_social varchar(255),
imobiliaria_cnpj varchar(255),
imobiliaria_rua varchar(255),
imobiliaria_numero varchar(255),
imobiliaria_complemento varchar(255),
imobiliaria_responsavel varchar(255),
imobiliaria_anotacoes varchar(255),
PRIMARY KEY (imobiliaria_id)
);

CREATE TABLE tb_cargos(
cargo_id int NOT NULL,
cargo_imobiliaria int,
cargo_nome varchar(255),
cargo_descricao varchar(255),
PRIMARY KEY (cargo_id),
FOREIGN KEY (cargo_imobiliaria) REFERENCES tb_imobiliaria(imobiliaria_id)
);

CREATE TABLE tb_setor(
setor_id int NOT NULL,
setor_imobiliaria int,
setor_nome varchar(255),
setor_descricao varchar(255),
PRIMARY KEY (setor_id),
FOREIGN KEY (setor_imobiliaria) REFERENCES tb_imobiliaria(imobiliaria_id)
);

CREATE TABLE tb_recursos_humanos(
recurso_id int NOT NULL,
recurso_imobiliaria int,
recurso_nome varchar(255),
recurso_rg varchar(255),
recurso_cpf varchar(255),
recurso_ctps varchar(255),
recurso_pis varchar(255),
recurso_data_admissao varchar(255),
recurso_nacionalidade varchar(255),
recurso_naturalidade varchar(255),
recurso_cep varchar(255),
recurso_rua varchar(255),
recurso_numero varchar(255),
recurso_complemento varchar(255),
recurso_bairro varchar(255),
recurso_cidade varchar(255),
recurso_estado varchar(255),
recurso_anotacao varchar(255),
PRIMARY KEY (recurso_id),
FOREIGN KEY (recurso_imobiliaria) REFERENCES tb_imobiliaria(imobiliaria_id)
);

CREATE TABLE tb_organograma(
organograma_id int NOT NULL,
organograma_imobiliaria int,
organograma_cargo int,
organograma_recurso_humano int,
PRIMARY KEY (organograma_id),
FOREIGN KEY (organograma_cargo) REFERENCES tb_cargos(cargo_id),
FOREIGN KEY (organograma_recurso_humano) REFERENCES tb_recursos_humanos(recurso_id),
FOREIGN KEY (organograma_imobiliaria) REFERENCES tb_imobiliaria(imobiliaria_id)
);

	CREATE TABLE tb_clientes (
clientes_id int NOT NULL,
clientes_imobiliaria int,
clientes_nome varchar(255),
clientes_rg varchar(255),
clientes_tipo_pessoa varchar(255),
clientes_cpf_cnpj varchar(255),
clientes_nacionalidade varchar(255),
clientes_naturalidade varchar(255),
clientes_cep varchar(255),
clientes_rua varchar(255),
clientes_numero varchar(255),
clientes_complemento varchar(255),
clientes_bairro varchar(255),
clientes_cidade varchar(255),
clientes_estado varchar(255),
clientes_pais varchar(255),
clientes_anotacao varchar(255),
PRIMARY KEY (clientes_id),
FOREIGN KEY (clientes_imobiliaria) REFERENCES tb_imobiliaria(imobiliaria_id)
);

CREATE TABLE tb_imoveis(
imoveis_id int NOT NULL,
imoveis_imobiliaria int,
imoveis_proprietario int,
imoveis_cep varchar(255),
imoveis_rua varchar(255),
imoveis_numero varchar(255),
imoveis_complemento varchar(255),
imoveis_bairro varchar(255),
imoveis_cidade varchar(255),
imoveis_estado varchar(255),
imoveis_pais varchar(255),
imoveis_sala varchar(255),
imoveis_dormitorio varchar(255),
imoveis_suite varchar(255),
imoveis_cozinha varchar(255),
imoveis_banheiro varchar(255),
imoveis_condominio varchar(255),
imoveis_anotacao varchar(255),
PRIMARY KEY (imoveis_id),
FOREIGN KEY (imoveis_imobiliaria) REFERENCES tb_imobiliaria(imobiliaria_id),
FOREIGN KEY (imoveis_proprietario) REFERENCES tb_clientes(clientes_id)
);
