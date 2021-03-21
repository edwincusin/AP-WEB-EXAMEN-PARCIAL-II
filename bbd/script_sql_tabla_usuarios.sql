-- Database generated with pgModeler (PostgreSQL Database Modeler).
-- pgModeler  version: 0.7.2
-- PostgreSQL version: 9.4
-- Project Site: pgmodeler.com.br
-- Model Author: ---

SET check_function_bodies = false;
-- ddl-end --


-- Database creation must be done outside an multicommand file.
-- These commands were put in this file only for convenience.
-- -- object: new_database | type: DATABASE --
-- -- DROP DATABASE new_database;
-- CREATE DATABASE new_database
-- ;
-- -- ddl-end --
-- 

-- object: public.usuarios | type: TABLE --
-- DROP TABLE public.usuarios;
CREATE TABLE public.usuarios(
	codigo_user serial,
	nombre_user varchar(21),
	apellido_user varchar(21),
	email_user varchar(30),
	"contraseña_user" varchar(20),
	CONSTRAINT pk_usuarios PRIMARY KEY (codigo_user)

);
-- ddl-end --



---RESGRISTRO PRIMER USUARIO ADMIN----

INSERT INTO public.usuarios(
	codigo_user, nombre_user, apellido_user, email_user, contraseña_user)
	VALUES (1, 'admin', 'admin', 'admin@email.com', 'admin');



