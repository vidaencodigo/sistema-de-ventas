USE `venta_db`;

ALTER TABLE `producto_table`
ADD COLUMN id_categoria BIGINT
AFTER imagen;