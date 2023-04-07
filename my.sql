-- create
CREATE TABLE classmates (
  id INTEGER PRIMARY KEY,
  name TEXT NOT NULL,
  age INTEGER NOT NULL,
  address TEXT NOT NULL
);

-- insert
INSERT INTO classmates VALUES (1, 'Dmitriy', 32, 'Saratov');
INSERT INTO classmates VALUES (2, 'Artem', 30, 'Moskva');
INSERT INTO classmates VALUES (3, 'Alexander', 35, 'Nizhny Novgorod');
INSERT INTO classmates VALUES (4, 'Maria', 24, 'Ryazan');
INSERT INTO classmates VALUES (5, 'Natalia', 22, 'Arzamas');
INSERT INTO classmates VALUES (6, 'Svetlana', 29, 'Balashikha');
INSERT INTO classmates VALUES (7, 'Egor', 40, 'Rostov na Donu');
INSERT INTO classmates VALUES (8, 'Daria', 29, 'Moskva');
INSERT INTO classmates VALUES (9, 'Valeria', 13, 'Moskva');
INSERT INTO classmates VALUES (10, 'Nina', 666, 'Moon');

-- fetch 
SELECT name FROM classmates WHERE address = 'Moskva' AND age >= 18 AND age < 30;