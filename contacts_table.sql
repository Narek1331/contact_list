create table contacts(
   id INT AUTO_INCREMENT primary key NOT NULL,
   name VARCHAR(255) NOT NULL,
   phone_number BIGINT(40) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;