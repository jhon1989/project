/*
** sistema gestor de base de datos  10.1.21-MariaDB
** Author: Jhon Janer Moreno
*/

CREATE DATABASE facturex;

/* Table employee */
CREATE TABLE employee(
                      identification INT PRIMARY KEY,
                      name VARCHAR(100),
                      last_name VARCHAR(100),
                      phone VARCHAR(25),
                      email VARCHAR(150),
                      address VARCHAR(100),
                      password VARCHAR(50),
                      status CHAR(1),
                      level INT,
                      date_time TIMESTAMP
                    );

/* Table client */
CREATE TABLE client (
                     identification INT PRIMARY KEY,
                     name VARCHAR(100),
                     last_name VARCHAR(100),
                     address VARCHAR(25),
                     email VARCHAR(150),
                     date_time DATETIME
                   );

/* Table business */
CREATE TABLE business (
                      nit INT PRIMARY KEY,
                      business_name TEXT,
                      phone VARCHAR(25),
                      address VARCHAR(25),
                      logo TEXT,
                      descripcion TEXT,
                      date_time DATETIME
                    );

/* Table Provider */
CREATE TABLE provider (
                      nit INT PRIMARY KEY,
                      address VARCHAR(25),
                      phone VARCHAR(25),
                      email VARCHAR(150),
                      business_name TEXT,
                      date_time DATETIME
                    );

/* Table product */
CREATE TABLE product (
                      code_produc INT PRIMARY KEY,
                      name VARCHAR(250),
                      type_measure VARCHAR(10),
                      stock_maximoSHOW INT,
                      stock_minimo INT,
                      unit_value FLOAT(2),
                      quantity INT,
                      nit_provider INT,
                      id_category INT,
                      FOREIGN KEY (nit_provider) REFERENCES provider(nit) ON DELETE CASCADE ON UPDATE CASCADE,
                      FOREIGN KEY (id_category) REFERENCES category(id) ON DELETE CASCADE ON UPDATE CASCADE,
                      date_time DATETIME
                     );

/* Table category */
CREATE TABLE category (
                        id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
                        name VARCHAR(150),
                        descriPtion VARCHAR(150),
                        date_time DATETIME
                      );

/* Table Factura */
CREATE Table bill(
                  number_bill INT PRIMARY KEY,
                  date_time DATETIME,
                  id_client INT,
                  id_employee INT,
                  nit_business INT,
                  FOREIGN KEY (nit_business) REFERENCES business(nit) ON DELETE CASCADE ON UPDATE CASCADE,
                  FOREIGN KEY (id_employee) REFERENCES employee(identification) ON DELETE CASCADE ON UPDATE CASCADE,
                  FOREIGN KEY (id_client) REFERENCES client(identification) ON DELETE CASCADE ON UPDATE CASCADE,
                  date_time DATETIME
                );

/* Table detalle */
CREATE TABLE detail(
                    id_detail INT PRIMARY KEY,
                    quantity FLOAT(2),
                    total FLOAT(2),
                    iva FLOAT(2),
                    price FLOAT(2),
                    subtotal FLOAT(2),
                    number_bill INT,
                    code_produc INT,
                    FOREIGN KEY (code_produc) REFERENCES product(code_produc) ON DELETE CASCADE ON UPDATE CASCADE,
                    FOREIGN KEY (number_bill) REFERENCES bill(number_bill) ON DELETE CASCADE ON UPDATE CASCADE,
                    date_time DATETIME
                  );

/* Table inventory */
CREATE TABLE inventory(
                        id_inventory INT PRIMARY KEY AUTO_INCREMENT,
                        type_movement VARCHAR(100),
                        quantity_available FLOAT(2),
                        name_product VARCHAR(100),
                        date_time DATETIME,
                        stock_minimo INT,
                        code_produc INT,
                        id_client INT,
                        FOREIGN KEY (code_produc) REFERENCES product(code_produc) ON DELETE CASCADE ON UPDATE CASCADE,
                        date_time DATETIME
                      );

/*  Inser datas */
INSERT INTO employee (identification, name, last_name, phone, email, address, password, status, level)
VALUES("1192894386", "jhon", "moreno", "3104232945", "jhonjamoca1989@gmail.com", "cra 1", "12345", "1", "1");

INSERT INTO employee (identification, name, last_name, phone, email, address, password, status, level)
VALUES("119289438", "janer", "caceres", "31042329125", "jhon989@gmail.com", "cra 2", "12345", "1", "1");

INSERT INTO client (identification, name, last_name, address, phone, email)
VALUES(10123457, "carlos", "marin",  "cra 2", "314265987", "jhon989@gmail.com");
