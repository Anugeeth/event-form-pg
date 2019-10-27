<?php


$m_data="
CREATE TABLE m_data (
    auto_id INT AUTO_INCREMENT UNIQUE , 
    m_id VARCHAR(10) PRIMARY KEY , 
    name VARCHAR(50) NOT NULL, 
    sem VARCHAR(3)NOT NULL ,
    branch VARCHAR(10), 
    phone_no INT(10) UNIQUE , 
    email_id VARCHAR(50) UNIQUE , 
    diet_pref VARCHAR(10) ,
    git_profile VARCHAR(50) , 
    linkedin_profile VARCHAR(50) , 
    dob DATE NOT NULL
);  ";



 ?>