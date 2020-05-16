CREATE TABLE users
( 
    userId SERIAL NOT NULL PRIMARY KEY,
    userName VARCHAR(35) NOT NULL,
    userFirstName VARCHAR(35) NOT NULL,
    userLastName VARCHAR(35) NOT NULL,
    userPhoneNumber INT NOT NULL,
    userLevel INT,
    userPassword VARCHAR(100)
);

CREATE TABLE status
( 
    statusId SERIAL NOT NULL PRIMARY KEY,
    statusName VARCHAR(35) NOT NULL
);

CREATE TABLE jobs
( 
    jobId SERIAL NOT NULL PRIMARY KEY,
    userId INT NOT NULL,
    statusId INT NOT NULL,
    lastUpdated TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (userId) REFERENCES users (userId),
    FOREIGN KEY (statusId) REFERENCES status (statusId)
);

CREATE TABLE services
( 
    serviceId SERIAL NOT NULL PRIMARY KEY,
    serviceName VARCHAR(35) NOT NULL,
    servicePrice DECIMAL(5,2) NOT NULL,
    serviceTime INT NOT NULL
);

CREATE TABLE jobService
(
    jobServiceId SERIAL NOT NULL PRIMARY KEY,
    serviceId INT NOT NULL,
    jobId INT NOT NULL,
    FOREIGN KEY (serviceId) REFERENCES services (serviceId),
    FOREIGN KEY (jobId) REFERENCES jobs (jobId)
);