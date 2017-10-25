# php_sample
下記書籍を元にPHPを色々触ってみるリポジトリです。 
> 確かな力が身につくPHP「超」入門
> http://www.sbcr.jp/products/4797388725.html


## Docker用MySQLテストレコード
```
--適当にこんなテーブルを作ってみたよ
CREATE TABLE test (
id int(11) NOT NULL,
name varchar(45) NOT NULL,
create_time timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
update_time timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (id),
UNIQUE KEY id_UNIQUE (id)
) DEFAULT CHARSET=UTF8

--とりあえずテストレコード
INSERT INTO app.test (id, name, create_time, update_time) VALUES ('1', 'test', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO app.test (id, name, create_time, update_time) VALUES ('2', 'test', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO app.test (id, name, create_time, update_time) VALUES ('3', 'テストだよ', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO app.test (id, name, create_time, update_time) VALUES ('4', 'テストだね', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);
```