CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sobrenome` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


INSERT INTO `users` (`id`, `name`, `sobrenome`, `email`, `password`) VALUES
(18, 'Vladimir', 'Pezzole', 'vladimir.hipermidia@gmail.com', '123'),
(19, 'Julia', 'Pezzole', 'juliasemprefeliz@gmail.com', '265'),
(20, 'Manuella', 'Pezzole', 'manu@gmail.com', '789'),
(22, 'ALTERATIVOS HIPERMIDIA', 'VLADIMIR LUCIANO PEZZOLE 71555340997', 'alterativos.hipermidia@gmail.com', '888'),
(23, 'Vladimir', 'Pezzole', 'vladimir.calixtoagmail.com', 'dd'),
(25, 'Olliver', 'Pezzole', 'olliver.hipermidia@gmail.com', '556');