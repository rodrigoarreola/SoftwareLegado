CREATE TABLE `proyreing`.`usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) NOT NULL,
  `apellido` VARCHAR(50) NOT NULL,
  `matricula` VARCHAR(20) NOT NULL,
  `cuatrimestre` VARCHAR(10) NULL,
  `email` VARCHAR(150) NOT NULL,
  `tipo` VARCHAR(100) NOT NULL,
  `contrasena` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `proyreing`.`cursos` (
  `id`   INT NOT NULL AUTO_INCREMENT,
  `idptc` INT NOT NULL,
  `cuatrimestre` VARCHAR(45) NOT NULL,
  `materia` VARCHAR(45) NOT NULL,
  `horario` VARCHAR(45) NOT NULL,
  `grupo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC));


CREATE TABLE `proyreing`.`alumnocursos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `idmateria` INT NOT NULL,
  `idalumno` INT NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `apellido` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC));