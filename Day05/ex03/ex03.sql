INSERT INTO ft_table (login, creation_date, group)
SELECT last_name AS login, birthdate AS creation_date, 'other' AS group
from user_card
WHERE lasst_name LIKE '%a%' AND LENGTH(last_name) < 9
ORDER BY last_name ASC
LIMIT 0, 10;
