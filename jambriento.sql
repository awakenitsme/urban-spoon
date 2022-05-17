create database 'jambriento';

CREATE TABLE `personas` (
  `ID` int(11) NOT NULL,
  `Nombre` text NOT NULL,
  `Curso` text NOT NULL,
  `Telefono` text NOT NULL,
  `Combo` text NOT NULL
);

ALTER TABLE `personas`
  ADD PRIMARY KEY (`ID`);

ALTER TABLE `personas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;