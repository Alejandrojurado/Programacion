CREATE TABLE `empleados` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `cargo` varchar(100) DEFAULT NULL,
  `salario` double DEFAULT NULL,
  `observaciones` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `empleados` (`nombre`, `apellido`, `cargo`, `salario`) VALUES 
                       ('Robin', 'Jackman', 'Software Engineer', 5500),
                       ('Taylor', 'Edward', 'Software Architect', 7200),
                       ('Vivian', 'Dickens', 'Database Administrator', 6000),
                       ('Harry', 'Clifford', 'Database Administrator', 6800),
                       ('Eliza', 'Clifford', 'Software Engineer', 4750),
                       ('Nancy', 'Newman', 'Software Engineer', 5100),
                       ('Melinda', 'Clifford', 'Project Manager', 8500),
                       ('Harley', 'Gilbert', 'Software Architect', 8000);