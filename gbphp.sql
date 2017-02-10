--
-- PostgreSQL database dump
--

-- Dumped from database version 9.5.5
-- Dumped by pg_dump version 9.5.5

-- Started on 2017-02-10 13:56:59

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 1 (class 3079 OID 12355)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 2108 (class 0 OID 0)
-- Dependencies: 1
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

--
-- TOC entry 181 (class 1259 OID 16385)
-- Name: id; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE id
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;


ALTER TABLE id OWNER TO postgres;

SET default_tablespace = '';

SET default_with_oids = true;

--
-- TOC entry 182 (class 1259 OID 16423)
-- Name: users; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE users (
    id integer DEFAULT nextval('id'::regclass) NOT NULL,
    name character varying(70),
    email character varying(40),
    password character varying(100),
    ip_adress character varying(12),
    login character varying(50),
    str_time character varying
);


ALTER TABLE users OWNER TO postgres;

--
-- TOC entry 2109 (class 0 OID 0)
-- Dependencies: 181
-- Name: id; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('id', 51, true);


--
-- TOC entry 2100 (class 0 OID 16423)
-- Dependencies: 182
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY users (id, name, email, password, ip_adress, login, str_time) FROM stdin;
35	admin	admin@admin.ru	1bbd886460827015e5d605ed44252251	\N	admin	\N
37	kit	hkjhkhkjhk@khkjhkh.ru	bae5e3208a3c700e3db642b6631e95b9	127.0.0.1	kiter	1486649912
38	dic	wewewewe@fgdfgfg.ru	bae5e3208a3c700e3db642b6631e95b9	127.0.0.1	dicer	1486650041
39	zic	sdsfdf@djfgsjd.ru	bae5e3208a3c700e3db642b6631e95b9	127.0.0.1	zicster	1486650204
45	dfdsfsd	sdfsdssdfsdf@mfkfk.ru	bae5e3208a3c700e3db642b6631e95b9	127.0.0.1	dsfdsfsdf	1486706054
46	fdgdfgdfg	rytryrtyrtyrty@tryrtyrry.rt	d27d320c27c3033b7883347d8beca317	127.0.0.1	gdfgdfgdfg	1486706091
47	rtetertert	erterterterte@tyrtyrty.ty	bae5e3208a3c700e3db642b6631e95b9	127.0.0.1	tertertertert	1486706438
48	cvcvbcvb	cvbcvb@dgdfg.gd	d27d320c27c3033b7883347d8beca317	127.0.0.1	cvbvbcvbcvbc	1486706943
49	x,cvn,cxmv,x	asdasd@dfgdg.ru	bae5e3208a3c700e3db642b6631e95b9	127.0.0.1	vxc.v.xcvmvxm	1486707113
50	fhgfhfgh	gfhgf@dgdfgdg.rr	bae5e3208a3c700e3db642b6631e95b9	127.0.0.1	hfhgfhfghfghfghf	1486707182
51	dgfgdfgdfg	tererter@fghfhfg.ty	bae5e3208a3c700e3db642b6631e95b9	127.0.0.1	cxvxcvxcvx	1486709662
\.


--
-- TOC entry 1984 (class 2606 OID 16441)
-- Name: users_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- TOC entry 2107 (class 0 OID 0)
-- Dependencies: 7
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


-- Completed on 2017-02-10 13:56:59

--
-- PostgreSQL database dump complete
--

