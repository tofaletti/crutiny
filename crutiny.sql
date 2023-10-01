CREATE DATABASE crutiny;
USE crutiny;

CREATE TABLE users(
	id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(30),
    password VARCHAR(60),
    permissions TINYINT(1),
    PRIMARY KEY(id)
);

CREATE TABLE padrones(
	id INT NOT NULL AUTO_INCREMENT,
	circuit VARCHAR(10), -- Circuito
    electoral_table VARCHAR(10), -- Mesa
    voters INT, -- Ordenes 
    school VARCHAR(60), -- Escuela
    school_address VARCHAR(100), -- Dirección de la escuela
    PRIMARY KEY (id)
);

CREATE TABLE provincial_scrutiny(
	id INT NOT NULL AUTO_INCREMENT,
    id_padron INT,
    id_user INT,
    
    voted INT, -- Votantes
    envelopes_box INT, -- Sobres en urna
    
    white_votes INT, -- Votos en blanco
    null_votes INT, -- Votos nulos
    appealed_votes INT, -- Votos recurridos
    contested_votes INT, -- Votos impugnados
    
	-- Partidos Políticos --
    lla INT, -- La Libertad Avanza <3
    jxc INT, -- Juntos por el Cambio
    uxp INT, -- Unión por la Patria
    fit INT, -- Frente de Izquierda y de los Trabajadores
    
    PRIMARY KEY (id),
    FOREIGN KEY (id_padron) REFERENCES padrones (id),
    FOREIGN KEY (id_user) REFERENCES users (id)
);

CREATE TABLE national_scrutiny(
	id INT NOT NULL AUTO_INCREMENT,
    id_padron INT,
    id_user INT,
    
    voted INT, -- Votantes
    envelopes_box INT, -- Sobres en urna
    
    white_votes INT, -- Votos en blanco
    null_votes INT, -- Votos nulos
    appealed_votes INT, -- Votos recurridos
    contested_votes INT, -- Votos impugnados
    
	-- Partidos Políticos --
    lla INT, -- La Libertad Avanza <3
    jxc INT, -- Juntos por el Cambio
    uxp INT, -- Unión por la Patria
    hnp INT, -- Hacemo por Nuestro País
    fit INT, -- Frente de Izquierda y de los Trabajadores
    
    PRIMARY KEY (id),
    FOREIGN KEY (id_padron) REFERENCES padrones (id),
    FOREIGN KEY (id_user) REFERENCES users (id)
);
