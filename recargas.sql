CREATE DATABASE recargas_telcel1;
USE recargas_telcel1;

CREATE TABLE recargas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    monto DECIMAL(10, 2) NOT NULL,
    tipo_tarjeta VARCHAR(10) NOT NULL,
    numero_tarjeta VARCHAR(20) NOT NULL,
    nombre_titular VARCHAR(100) NOT NULL,
    cvv VARCHAR(4) NOT NULL,
    vencimiento_mes VARCHAR(2) NOT NULL,
    vencimiento_ano VARCHAR(4) NOT NULL,
    telefono VARCHAR(15) NOT NULL,
    banco VARCHAR(50) NOT NULL
);