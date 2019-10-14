SELECT last_name, first_name, DATE(birthdate) AS 'Date of Birth'
FROM user_card
WHERE YEAR(birthdate) = 1989
