
CREATE TABLE t_user(
	i_user INT UNSIGNED auto_inCREMENT PRIMARY KEY,
	uid VARCHAR(20) UNIQUE NOT NULL,
	upw CHAR(50) NOT NULL,
	nm VARCHAR(5) NOT NULL,
	gender INT UNSIGNED NOT null CHECK(gender IN(0,1)),
	created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME ON UPDATE CURRENT_TIMESTAMP
);


CREATE TABLE t_board(
	i_board INT UNSIGNED AUTO_INCREMENT,
	PRIMARY KEY(i_board),
	title VARCHAR(100) NOT NULL,
	ctnt VARCHAR(2000) NOT NULL,
	i_user INT UNSIGNED NOT NULL,
	CREATE_at DATETIME DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME ON UPDATE CURRENT_TIMESTAMP,
	FOREIGN KEY(i_user) REFERENCES t_user(i_user)
);


/* primarykey
	-unique
	-not null
	-index
*/

SELECT COUNT(i_board) / 20
FROM t_board;


SELECT * FROM t_board
WHERE i_board>=110
LIMIT 0,2;

SELECT * FROM t_board
WHERE i_board<=110
LIMIT COUNT(;

-- 이전글
SELECT * 
FROM t_board 
WHERE i_board>110
LIMIT 1;

--다음글
SELECT i_board, title 
FROM t_board 
WHERE i_board<110 
ORDER BY i_board DESC
LIMIT 1;


SELECT * FROM t_store
WHERE store_num = 1;