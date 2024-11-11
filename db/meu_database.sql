USE devs_do_rn;

CREATE TABLE associados (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    cpf VARCHAR(11) UNIQUE NOT NULL,
    data_filiacao DATE NOT NULL
);

CREATE TABLE anuidades (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ano INT NOT NULL,
    valor DECIMAL(10, 2) NOT NULL,
    associado_id INT NOT NULL,
    pago BOOLEAN DEFAULT FALSE,
    FOREIGN KEY (associado_id) REFERENCES associados(id)
);
