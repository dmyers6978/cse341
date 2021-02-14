CREATE TABLE items (
    itemId          SERIAL      PRIMARY KEY,
    itemName        VARCHAR(100)
);

CREATE TABLE inventory(
    invId       SERIAL      PRIMARY KEY,
    itemId      INT,
    quantity    INT,
    CONSTRAINT items_FK1
    FOREIGN KEY(itemId) 
    REFERENCES items(itemId)
    ON DELETE CASCADE
    ON UPDATE CASCADE
);

CREATE TABLE log(
    logId       SERIAL      PRIMARY KEY,
    itemId      INT,
    dateTime    TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    quantity    INT,
    CONSTRAINT items_FK2
    FOREIGN KEY(itemId) 
    REFERENCES items(itemId)
    ON DELETE CASCADE
    ON UPDATE CASCADE
);