create TABLE Donors(
donor_id INT NOT NULL,
donor_firstname VARCHAR(30) NOT NULL,
donor_lastname VARCHAR(30) NOT NULL,
donor_bloodgroup VARCHAR(30) NOT NULL,
donor_gender VARCHAR(30) NOT NULL,
PRIMARY KEY (donor_id),
UNIQUE (donor_lastname)
);