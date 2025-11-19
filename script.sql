CREATE TABLE categories (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL UNIQUE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO categories (name) VALUES
('Alimentació sostenible'),
('Higiene eco'),
('Llar eficient'),
('Tecnologia responsable'),
('Moda sostenible'),
('Mobilitat verda'),
('Reduir/Reutilitzar'),
('Compostatge i jardí'),
('Energia renovable'),
('Altres');

CREATE TABLE IF NOT EXISTS Producte(
  id_producte INT NOT NULL auto_increment PRIMARY KEY,
  id_categoria INT NOT NULL,
  nom_producte VARCHAR(250) NOT NULL,
  descripcio_curta VARCHAR(250) NOT NULL,
  productor VARCHAR(250) NOT NULL,
  email_contacte VARCHAR(250) NOT NULL,
  preu INT NOT NULL,
  data_alta DATETIME NOT NULL,
  FOREIGN KEY (id_categoria) REFERENCES categories(id)
)