CREATE TABLE wish (
    id VARCHAR(40) NOT NULL,
    user_id VARCHAR(40) DEFAULT NULL,
    movie_id VARCHAR(40) DEFAULT NULL,
    created_at DATETIME DEFAULT NULL,
    INDEX IDX_D7D174C9A76ED395 (user_id),
    INDEX IDX_D7D174C98F93B6FC (movie_id),
    PRIMARY KEY (id)
)  DEFAULT CHARACTER SET UTF8 COLLATE UTF8_UNICODE_CI ENGINE=INNODB;
CREATE TABLE friend (
    id VARCHAR(40) NOT NULL,
    user_id VARCHAR(40) DEFAULT NULL,
    friend_id VARCHAR(250) NOT NULL,
    state VARCHAR(250) NOT NULL,
    created_at DATETIME DEFAULT NULL,
    INDEX IDX_55EEAC61A76ED395 (user_id),
    PRIMARY KEY (id)
)  DEFAULT CHARACTER SET UTF8 COLLATE UTF8_UNICODE_CI ENGINE=INNODB;
CREATE TABLE movie (
    id VARCHAR(40) NOT NULL,
    name VARCHAR(250) NOT NULL,
    synopsis TEXT DEFAULT NULL,
    status VARCHAR(250) NOT NULL,
    created_at DATETIME DEFAULT NULL,
    PRIMARY KEY (id)
)  DEFAULT CHARACTER SET UTF8 COLLATE UTF8_UNICODE_CI ENGINE=INNODB;
CREATE TABLE user (
    id VARCHAR(40) NOT NULL,
    password VARCHAR(250) NOT NULL,
    username VARCHAR(250) NOT NULL,
    created_at DATETIME DEFAULT NULL,
    name VARCHAR(250) DEFAULT NULL,
    surname VARCHAR(250) DEFAULT NULL,
    phone VARCHAR(250) DEFAULT NULL,
    email VARCHAR(250) DEFAULT NULL,
    country VARCHAR(250) DEFAULT NULL,
    city VARCHAR(250) DEFAULT NULL,
    home_address VARCHAR(250) DEFAULT NULL,
    PRIMARY KEY (id)
)  DEFAULT CHARACTER SET UTF8 COLLATE UTF8_UNICODE_CI ENGINE=INNODB;
ALTER TABLE wish ADD CONSTRAINT FK_D7D174C9A76ED395A76ED395 FOREIGN KEY (user_id) REFERENCES user (id);
ALTER TABLE wish ADD CONSTRAINT FK_D7D174C98F93B6FC8F93B6FC FOREIGN KEY (movie_id) REFERENCES movie (id);
ALTER TABLE friend ADD CONSTRAINT FK_55EEAC61A76ED395A76ED395 FOREIGN KEY (user_id) REFERENCES user (id);
