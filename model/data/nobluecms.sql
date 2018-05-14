
create database nobluecms;

create table users (
	username varchar(20) not null primary key,
	hash char(64),
	publicname text);

create table categories (
	id integer not null auto_increment primary key,
	name varchar(50) not null unique,
	photo text,
	description text);

create table articles (
	id integer not null auto_increment primary key,
	title text not null,
	title_url varchar(50) unique,
	photo text,
	dateAdd date,
	content_id char(20) not null,
	username varchar(20) not null,
		foreign key (username) references users (username));

create table in_category (
	article_id integer not null,
	category_id integer not null,
		foreign key (article_id) references articles (id),
		foreign key (category_id) references categories (id));

create table in_content (
	id char(20) not null, 
	article_id integer not null,
	dateAdd date,
	content longtext,
		primary key (id, article_id),
		foreign key (article_id) references articles (id));
