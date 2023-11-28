# Aula

material icon (extensão dos icones/ vscode) php getters and setters (extensão get e set/ vs code) atalhos de teclado: Control + N = Nova Pasta Control + D = Selecionar palavras iguais Git Bash (Pegar arquivos do Github) git clone + link(Git Bash/ pegar arquivos especificos) code . (Git Bash / Carregar pasta selecionada para o VS Code)

|| CRIANDO AS TABELAS DO BANCO ||
CREATE TABLE users (
    user_cod INT PRIMARY KEY AUTO_INCREMENT,
    user_name VARCHAR(20) NOT NULL,
    user_pass TEXT NOT NULL,
    user_photo TEXT,
    user_birth DATE,
    user_first_name VARCHAR(30),
    user_last_name VARCHAR(30),
    user_desc TEXT,
    user_cep VARCHAR(11),
    user_address VARCHAR(40),
    user_number VARCHAR(6),
    user_complement VARCHAR(20),
    user_neighborhood VARCHAR(30),
    user_city VARCHAR(30),
    user_state VARCHAR(3),
    user_sex VARCHAR(10),
    user_phone VARCHAR(16),
    user_email VARCHAR(40) UNIQUE,
    user_notify TINYINT(1),
    user_new_pass TEXT,
    user_status TINYINT(1)
)
