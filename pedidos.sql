CREATE TABLE pedidos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    data_pedido DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    status ENUM('Pendente', 'Processando', 'Enviado', 'Entregue') DEFAULT 'Pendente',
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
);
