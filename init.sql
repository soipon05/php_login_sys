create database dotinstall_sns_php;
-- testdb

grant all on dotinstall_sns_php.* to dbuser@localhost identified by 'password';

use dotinstall_sns_php

-- use testdb

create table users(
    id int not null auto_increment primary key,
    email varchar(255) unique,
    password varchar(255),
    created datetime,
    modified datetime
);

desc users;