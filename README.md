# Formulário com MVC - O Leme ☸️

## 📃 Descrição do Projeto e Propósito

O Leme consiste no desenvolvimento de um aplicativo web que adota o padrão de arquitetura **Model-View-Controller (MVC)**. O objetivo é demonstrar a implementação completa de operações **CRUD (Create, Read, Update, Delete)** em um recurso específico (Gerenciamento de Usuários, Produtos, Tarefas, etc.), garantindo a persistência dos dados em um banco de dados. A arquitetura MVC foi escolhida para distinguir a lógica de dados (`Model`), a interface do usuário (`View`) e o controle de fluxo (`Controller`).

## 👥 Membros da Equipe

* **Mariane Matioli Zambelli**

* **Melissa Gabriela Cosmo da Silva Bezerra**

* **Rodrigo Yuuki Oie**

## 🛜 Configuração e Execução do Projeto

### 1. Pré-requisitos

Certifique-se de ter instalado:

* Linguagem de Programação (`ex: Node.js`)

* Sistema de Banco de Dados (`ex: MySQL Server`)

* Um gerenciador de pacotes (`ex: npm, pip, Composer`)

### 2. Clonagem do Repositório

```bash
# Clone o repositório
git clone [https://docs.github.com/pt/repositories/creating-and-managing-repositories/quickstart-for-repositories](https://docs.github.com/pt/repositories/creating-and-managing-repositories/quickstart-for-repositories)

# Acesse o diretório do projeto
cd [NOME DO SEU PROJETO]
```

### 3. Instalação de Dependências

Instale todas as bibliotecas e pacotes necessários:

```bash
# Exemplo para Node.js:
npm install
```

### 4. Configuração do Banco de Dados

Crie o banco de dados e execute o script SQL fornecido na Seção 5 para criar as tabelas e dados iniciais.

* **Arquivo de Configuração:** Atualize as credenciais de conexão com o banco de dados no arquivo `[caminho/do/arquivo/de/configuração.env]` ou similar.

### 5. Execução do Servidor

Inicie o aplicativo:

```bash
# Exemplo de comando de execução:
npm start
# OU
python app.py
```

## 💾 Código SQL

```sql
CREATE DATABASE calendario_estudos;

USE calendario_estudos;

CREATE TABLE atividades (    

id INT AUTO_INCREMENT PRIMARY KEY,
titulo VARCHAR(100) NOT NULL,
descricao TEXT NOT NULL,
materia VARCHAR(100) NOT NULL,
data_entrega DATE NOT NULL );

INSERT INTO atividades (titulo, descricao, materia, data_entrega) VALUES ('Revisar Sistema ABO', 'Olhar os slides e fazer anotações no caderno.', 'Biologia', '2025-11-02'), ('Resolver lista de exercícios de Matemática', 'Focar nas questões de geometria analítica.', 'Matemática', '2025-11-05'), ('Ler o livro "A visão das Plantas"', 'Ler até o capítulo 7 para a próxima aula.', 'Português', '2025-11-03');

SELECT * FROM atividades; 
```




