CREATE TABLE vet_clinic.appointments (
  id INT(11) NOT NULL AUTO_INCREMENT,
  pet_name VARCHAR(255) DEFAULT NULL,
  owner_name VARCHAR(255) DEFAULT NULL,
  appointment_date DATE DEFAULT NULL,
  appointment_time TIME DEFAULT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB,
CHARACTER SET utf8mb4,
COLLATE utf8mb4_general_ci;