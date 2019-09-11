DROP SCHEMA if exists hayridedb;
CREATE SCHEMA hayridedb;
USE hayridedb;

drop table if exists Users;
drop table if exists Orders;
drop table if exists Order_flight;
drop table if exists Order_parking;
drop table if exists Booking;
drop table if exists Flight;
drop table if exists Prepaid_parking;
drop table if exists Parking;


create table Users(
	ID int NOT NULL AUTO_INCREMENT, 
    Username varchar(20) NOT NULL,
	Email varchar(50) NOT NULL,
	Fname varchar(50) NOT NULL,
	Lname varchar(50) NOT NULL,
	Passwrd varchar(20) NOT NULL,
    Phone_num varchar(12),
    Street varchar(20),
    City varchar(20),
    State char(2),
    Zipcode varchar(10),
    Avatar varchar(100),
	primary key (ID),
	unique (Email),
    unique (Username)
);

create table Orders(
	ID int NOT NULL AUTO_INCREMENT,
	User_id int,
	Total int,
	primary key (ID),
	foreign key (User_id) references Users(ID)
);

create table Flight(
	ID 	int NOT NULL AUTO_INCREMENT,
    Loc_from varchar(20),
    Loc_dest varchar(20),
    Dep_date date,
    Dep_time varchar(7),
    Price int,
    Reserved_seats int,
    Num_seats int,
    primary key(ID)
);

create table Booking(
	ID int NOT NULL AUTO_INCREMENT,
    Qty int,
    Flight_id int,
    primary key (ID),
    foreign key (Flight_id) references Flight(ID)
);

create table Order_flight(
	ID int NOT NULL AUTO_INCREMENT,
    Order_id int,
    Booking_id int,
    primary key (ID),
    foreign key (Order_id) references Orders(ID),   
    foreign key (Booking_id) references Booking(ID)
);

create table Parking(
	ID int NOT NULL AUTO_INCREMENT,
    Location varchar(20),
    Vip_price int,
    Normal_price int,
    Num_vip_total int,
    Num_vip_reserved int,
    Num_normal_total int,
    Num_normal_reserved int,
    primary key (ID)
);

create table Prepaid_parking(
	ID int NOT NULL AUTO_INCREMENT,
    Parking_date date,
    Num_days int,
    Parking_id int,
    primary key (ID),
    foreign key (Parking_id) references Parking(ID)
);

create table Order_parking(
	ID int NOT NULL AUTO_INCREMENT,
    Order_id int,
    Parking_id int,
    primary key (ID),
    foreign key (Order_id) references Orders(ID),
    foreign key (Parking_id) references Prepaid_parking(ID)
);
    