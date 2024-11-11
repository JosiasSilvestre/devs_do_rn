# Devs do RN

Este é um sistema de gestão para a associação "Devs do RN", desenvolvido em PHP puro. O sistema permite cadastrar associados, gerenciar anuidades, processar pagamentos e visualizar o status de associados.

## 🚀 Funcionalidades

- Cadastro de associados (nome, e-mail, CPF, data de filiação)
- Cadastro de anuidades (ano e valor)
- Cobrança de anuidades devidas por associado
- Pagamento de anuidades (com status pago/não pago)
- Consulta do status dos associados (pagamento em dia ou em atraso)

## 📋 Pré-requisitos

Certifique-se de ter os seguintes softwares instalados:

- [XAMPP](https://www.apachefriends.org/index.html) ou [WAMP](http://www.wampserver.com/) (para servidor Apache e MySQL)
- [Git](https://git-scm.com/)
- Navegador Web (Chrome, Firefox, etc.)

## ⚙️ Como Configurar o Projeto Localmente

1. **Clone o repositório:**

   Abra o terminal (Prompt de Comando, Git Bash, etc.) e execute:

   ```bash
   git clone https://github.com/JosiasSilvestre/devs_do_rn.git
Navegue até o diretório do projeto:

bash
Copiar código
cd devs_do_rn
Mover para o diretório do servidor local:

Copie a pasta devs_do_rn para o diretório htdocs (no XAMPP) ou www (no WAMP). Exemplo:

bash
Copiar código
mv devs_do_rn C:/xampp/htdocs/
Configurar o Banco de Dados:

Abra o phpMyAdmin.
Crie um banco de dados com o nome devs_do_rn.
Importe o arquivo meu_database.sql localizado na raiz do projeto:
Clique em Importar.
Selecione o arquivo meu_database.sql.
Clique em Executar.
Iniciar o Servidor Apache e MySQL:

Abra o XAMPP e inicie o Apache e MySQL.
Acessar o Sistema:

Abra o navegador e digite:

plaintext
Copiar código
http://localhost/devs_do_rn/index.php
🛠️ Tecnologias Utilizadas
Linguagem: PHP
Banco de Dados: MySQL
Front-end: HTML, CSS, JavaScript
Servidor Local: Apache (via XAMPP ou WAMP)
💡 Dicas de Uso
Validação de CPF: Certifique-se de inserir um CPF válido no formato 000.000.000-00.
Validação de Data: Não é permitido usar datas futuras ao cadastrar a data de filiação.
Pagamentos: Marcar manualmente o status de pagamentos no sistema.
🔧 Comandos Úteis do Git
Caso você precise atualizar o projeto:

bash
Copiar código
# Adicionar novos arquivos ou alterações
git add .

# Fazer commit das alterações
git commit -m "Descrição das alterações"

# Enviar para o GitHub
git push origin master
📄 Licença
Este projeto é de código aberto e pode ser utilizado livremente.
