USE dc1_grp1_jwd;

SELECT *
FROM photo, categorie
WHERE categorie.id = photo.categorie_id;

SELECT *
FROM photo
INNER JOIN categorie ON categorie.id = photo.categorie_id;

SELECT
	photo.id,
	photo.titre,
    photo.image,
    photo.nb_likes,
    photo.date_creation,
    DATE_FORMAT(photo.date_creation, '%e %M %Y') AS 'date_creation_format',
    categorie.titre AS categorie
FROM photo 
INNER JOIN categorie ON categorie.id = photo.categorie_id
ORDER BY photo.date_creation DESC 
LIMIT 6;

SELECT * FROM commentaire ORDER BY date_creation DESC
