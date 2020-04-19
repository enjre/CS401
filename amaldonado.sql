create DATABASE amald;

CREATE TABLE "Users" (
    ID INT NOT NULL,
    email VARCHAR(64) NOT NULL PRIMARY KEY ,
    password VARCHAR(64) NOT NULL,
    name VARCHAR(256) NOT NULL,
    message VARCHAR(500) NOT NULL,
    
);

CREATE TABLE "songs" (
    ID INT NOT NULL,
    song VARCHAR(64) NOT NULL PRIMARY KEY,
    length VARCHAR(1024)
)

CREATE TABLE "albums" (
    ID INT NOT NULL,
    album VARCHAR(64) NOT NULL PRIMARY KEY,
    length VARCHAR(64) NOT NULL,
)

/*mysql://b38372fd919298:90733de7@us-cdbr-iron-east-01.cleardb.net/heroku_b42d25b6e0581b1?reconnect=true