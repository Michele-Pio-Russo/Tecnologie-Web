-- CREAZIONE UTENTE

CREATE ROLE www WITH
	LOGIN
	SUPERUSER
	CREATEDB
	CREATEROLE
	INHERIT
	NOREPLICATION
	BYPASSRLS
	CONNECTION LIMIT -1
	PASSWORD 'xxxxxx';

-- CREAZIONE DATABASE

CREATE DATABASE gruppo38
    WITH
    OWNER = www
    ENCODING = 'UTF8'
    LOCALE_PROVIDER = 'libc'
    CONNECTION LIMIT = -1
    IS_TEMPLATE = False;

-- CREAZIONE TABELLA

DROP TABLE IF EXISTS utente cascade;
CREATE TABLE utente(
id serial PRIMARY KEY,
username varchar(50),
email varchar(25),
password varchar(25)
);
GRANT ALL PRIVILEGES ON ALL TABLES IN SCHEMA public TO www;
GRANT ALL PRIVILEGES ON ALL SEQUENCES IN SCHEMA public TO www;

-- INSERIMENTO TABELLA

INSERT INTO Customers (CustomerName, ContactName, Address,
City, PostalCode, Country)
VALUES ('Cardinal', 'Tom B. Erichsen', 'Skagen
21', 'Stavanger', '4006', 'Norway’);