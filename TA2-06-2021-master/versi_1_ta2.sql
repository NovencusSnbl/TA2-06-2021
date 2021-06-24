CREATE DATABASE ta2;

DROP DATABASE ta2;

USE ta2;


DROP TABLE IF EXISTS mahasiswa;

CREATE TABLE mahasiswa  (
	mahasiswa_id INT(11) PRIMARY KEY AUTO_INCREMENT,
	nim VARCHAR(15) NOT NULL,
	nama VARCHAR(255) NOT NULL,
	email VARCHAR(255) NOT NULL,
	created_by VARCHAR(32) DEFAULT NULL,
	created_at DATETIME DEFAULT NULL,
	updated_by VARCHAR(32) DEFAULT NULL,
	updated_at DATETIME DEFAULT NULL,
	users_id INT(11),
	KEY FK_mahasiswa (users_id),
	CONSTRAINT FK_mahasiswa FOREIGN KEY (users_id) REFERENCES Users(users_id)

);



DROP TABLE IF EXISTS users;
CREATE TABLE users(
	users_id INT(11) NOT NULL PRIMARY KEY,
	role INT(11) NOT NULL,
	username VARCHAR(255) NOT NULL,
	PASSWORD VARCHAR(255) NOT NULL
);



DROP TABLE IF EXISTS baak;  
CREATE TABLE baak(
	baak_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nama VARCHAR(30) NOT NULL,
	users_id INT(11) NOT NULL,
	email VARCHAR(255) NOT NULL,
	desc_baak VARCHAR(255),
	created_by VARCHAR(32) DEFAULT NULL,
	created_at DATETIME DEFAULT NULL,
	updated_by VARCHAR(32) DEFAULT NULL,
	updated_at DATETIME DEFAULT NULL,
	KEY FK_baak (users_id),
	CONSTRAINT FK_baak FOREIGN KEY (users_id) REFERENCES Users(users_id)
);



DROP TABLE IF EXISTS dokumen;
CREATE TABLE dokumen(
	dokumen_id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	jenis_dokumen INT(11) NOT NULL,
	mahasiswa_id INT(11) NOT NULL,
	baak_id INT(11) NOT NULL,
	ipk FLOAT(10) NOT NULL,
	tahun DATE NOT NULL,
	file_mahasiswa VARCHAR(255) NOT NULL,
	hash_file VARCHAR(255) NOT NULL,
	created_by VARCHAR(32) DEFAULT NULL,
	created_at DATETIME DEFAULT NULL,
	updated_by VARCHAR(32) DEFAULT NULL,
	updated_at DATETIME DEFAULT NULL,
	KEY FK_dokumen (baak_id),
	KEY FK_dokumen2 (mahasiswa_id),
	CONSTRAINT FK_dokumen FOREIGN KEY (baak_id) REFERENCES Baak(baak_id),
	CONSTRAINT FK_dokumen2 FOREIGN KEY (mahasiswa_id) REFERENCES Mahasiswa(mahasiswa_id)

);