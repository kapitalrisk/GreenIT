PRAGMA foreign_keys = off;
BEGIN TRANSACTION;

-- Table: FormAnswer
CREATE TABLE FormAnswer (
    form_id  INTEGER NOT NULL ON CONFLICT ROLLBACK
                     PRIMARY KEY ON CONFLICT ROLLBACK
                     UNIQUE ON CONFLICT ROLLBACK,
    quest_id INTEGER,
    ans_id   INTEGER REFERENCES Answers (ans_id) 
)
WITHOUT ROWID;


COMMIT TRANSACTION;
PRAGMA foreign_keys = on;


PRAGMA foreign_keys = off;
BEGIN TRANSACTION;

-- Table: Answers
CREATE TABLE Answers (
    ans_id         PRIMARY KEY ON CONFLICT ROLLBACK
                   NOT NULL ON CONFLICT ROLLBACK
                   UNIQUE ON CONFLICT ROLLBACK,
    ans_value TEXT NOT NULL
                   UNIQUE
)
WITHOUT ROWID;


COMMIT TRANSACTION;
PRAGMA foreign_keys = on;

PRAGMA foreign_keys = off;
BEGIN TRANSACTION;

-- Table: User
CREATE TABLE User (
    user_id   INTEGER UNIQUE ON CONFLICT ROLLBACK
                      PRIMARY KEY ON CONFLICT ROLLBACK
                      NOT NULL ON CONFLICT ROLLBACK,
    form_id   INTEGER REFERENCES FormAns (form_id) 
                      UNIQUE,
    completed BOOLEAN
)
WITHOUT ROWID;


COMMIT TRANSACTION;
PRAGMA foreign_keys = on;