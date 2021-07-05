
CREATE TABLE Users (
                users_id INT AUTO_INCREMENT NOT NULL,
                email VARCHAR(255) NOT NULL,
                pass VARCHAR(255) NOT NULL,
                nickname VARCHAR(255) NOT NULL,
                admin TINYINT DEFAULT 0 NOT NULL,
                PRIMARY KEY (users_id)
);


CREATE TABLE Posts (
                posts_id INT AUTO_INCREMENT NOT NULL,
                title VARCHAR(255) NOT NULL,
                nickname VARCHAR(255) NOT NULL,
                leadparagraph VARCHAR(255) NOT NULL,
                content VARCHAR(1000) NOT NULL,
                creationdate DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL,
                modificationdate DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL,
                users_id INT,
                PRIMARY KEY (posts_id)
);


CREATE TABLE Comments (
                comments_id INT AUTO_INCREMENT NOT NULL,
                content VARCHAR(1000) NOT NULL,
                commentdate DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL,
                commentaccepted TINYINT DEFAULT 0 NOT NULL,
                posts_id INT NOT NULL,
                users_id INT,
                nickname VARCHAR(255) NOT NULL,
                PRIMARY KEY (comments_id)
);


ALTER TABLE Posts ADD CONSTRAINT users_posts_fk
FOREIGN KEY (users_id)
REFERENCES Users (users_id)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE Comments ADD CONSTRAINT users_comments_fk
FOREIGN KEY (users_id)
REFERENCES Users (users_id)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE Comments ADD CONSTRAINT posts_comments_fk
FOREIGN KEY (posts_id)
REFERENCES Posts (posts_id)
ON DELETE NO ACTION
ON UPDATE NO ACTION;
