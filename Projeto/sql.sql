SELECT * FROM usuario;

INSERT INTO usuario(usuario, senha) VALUES ('petshop',md5('petshop'));

SELECT * FROM usuario WHERE usuario ='petshop' AND senha = md5('petshop');
