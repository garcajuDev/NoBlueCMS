INSERT INTO `users` (`username`, `hash`, `publicname`) VALUES ('user1', NULL, 'Nombre usuario1'), ('user2', NULL, 'Nombre usuario2');

INSERT INTO `categories` (`id`, `name`, `photo`, `description`) VALUES ('1', 'Western', './view/photo/img01.jpg', 'Descripcion de la categoria Western'), ('2', 'Romantica', './view/photo/img02.jpg', 'descripcion de la categoria \'Romantica\'');

INSERT INTO `articles` (`id`, `title`, `photo`,`dateAdd`, `content_id`, `username`) VALUES ('1', 'Titulo de la pelicula', './view/photo/imgA01.jpg',null, 'content10', 'user1'), ('2', 'Titulo de la pel�cula ', 'foto1',null, 'conten2', 'user1'), ('3', 'Titulo de la pelicula ', './view/photo/imgA02.jpg', null,'conten2', 'user1');

INSERT INTO `in_category` (`article_id`, `category_id`) VALUES ('1', '1'), ('1', '2');

INSERT INTO `in_content` (`id`, `article_id`, `dateAdd`,`content`) VALUES ('content10', '1',null, NULL), ('conten2', '2', null,NULL);
