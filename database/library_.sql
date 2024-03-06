-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-03-2024 a las 04:54:36
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `library_`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL,
  `published_date` date NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `is_available` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `book`
--

INSERT INTO `book` (`book_id`, `name`, `author`, `category_id`, `published_date`, `user_id`, `is_available`) VALUES
(1, '1984', 'George Orwell', 1, '1949-06-08', 2, 0),
(2, 'Matar a un ruiseñor', 'Harper Lee', 1, '1960-07-11', NULL, 1),
(3, 'Harry Potter y la piedra filosofal', 'J.K. Rowling', 3, '1997-06-26', NULL, 1),
(4, 'El código Da Vinci', 'Dan Brown', 4, '2003-03-18', NULL, 1),
(5, 'Orgullo y prejuicio', 'Jane Austen', 4, '1813-01-28', NULL, 1),
(6, 'The Great Gatsby', 'F. Scott Fitzgerald', 4, '1925-04-10', NULL, 1),
(7, 'To Kill a Mockingbird', 'Harper Lee', 1, '1960-07-11', NULL, 1),
(8, '1984', 'George Orwell', 1, '1949-06-08', NULL, 1),
(9, 'The Catcher in the Rye', 'J.D. Salinger', 4, '1951-07-16', NULL, 1),
(10, 'Pride and Prejudice', 'Jane Austen', 4, '1813-01-28', NULL, 1),
(11, 'The Lord of the Rings', 'J.R.R. Tolkien', 3, '1954-07-29', NULL, 1),
(12, 'The Hunger Games', 'Suzanne Collins', 2, '2008-09-14', NULL, 1),
(13, 'The Alchemist', 'Paulo Coelho', 4, '1988-01-01', 1, 1),
(14, 'The Chronicles of Narnia: The Lion, the Witch and the Wardrobe', 'C.S. Lewis', 3, '1950-10-16', 2, 1),
(15, 'The Da Vinci Code', 'Dan Brown', 4, '2003-03-18', NULL, 1),
(16, 'asdf', 'sdfsfsf', 1, '2323-12-12', NULL, 1),
(17, 'El código Da Vinci', 'Dan Bro', 4, '2003-03-18', NULL, 1),
(18, 'El código Da Vinci', 'other', 4, '2003-03-18', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`category_id`, `name`, `description`) VALUES
(1, 'Ficción', 'Libros que no están basados en la realidad'),
(2, 'No ficción', 'Libros basados en hechos y realidad'),
(3, 'Fantasía', 'Libros que presentan mundos imaginarios, seres mágicos, etc.'),
(4, 'Historia', 'Libros que relatan eventos pasados y sucesos históricos.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`) VALUES
(1, 'Juan Pérez', 'juan@example.com'),
(2, 'María García', 'maria@example.com'),
(4, 'Fernanda Fernández', 'fernanda@example.com'),
(7, 'asdf', 'aaaaaaa'),
(8, 'asdf', 'sadf@sdf.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `fk_category` (`category_id`);

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `fk_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
