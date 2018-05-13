-- Todas las categorias
select id, name, photo, description from categories order by id;

-- Buscamos la categoria determinada por id
select id, name, photo, description from categories where id = 1;
--

-- Buscamos toda la información significativa para el articulo 1
select distinct articles.id, categories.name,title,articles.photo,articles.dateAdd,content from articles 
	join in_category on (articles.id = in_category.article_id) 
	join categories on (in_category.category_id = categories.id) 
	join in_content on (articles.id=in_content.article_id) 
	where articles.id = 1

-- Buscamos toda la información significativa de articulos en un rango de fechas y los 3 ultimos articulos
select articles.id, categories.name,title,articles.photo,articles.dateAdd,content from articles 
	join in_category on (articles.id = in_category.article_id) 
	join categories on (in_category.category_id = categories.id) 
	join in_content on (articles.id=in_content.article_id) 
	where articles.dateADD between "2018-05-01"and "2018-05-10" 
    order by articles.id desc limit 3

