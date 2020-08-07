create database unionx_test;

create table users (
	id integer auto_increment primary key not null,
	name varchar(256) not null,
	email varchar(256) not null,
	pwd varchar(256) not null,
	ppLocation varchar(512) not null default "img/profiledefault.jpg";
);

create table universities(
	id integer auto_increment primary key not null,
	name varchar(512) not null,
	about varchar(2048) not null,
	lLocation varchar(512) not null default "img/offered-by.jpg";
);

create table instructors(
	id integer auto_increment primary key not null,
	name varchar(256) not null,
	email varchar(256) not null,
	pwd varchar(256) not null,
	ppLocation varchar(512) not null default "img/profiledefault.jpg",
	universityId integer not null,
	designation varchar(256) not null,
	learnerCount integer default 0,
	courseCount integer default 0,

	foreign key(universityId)
	references universities(id)
);

create table courseCategories(
	id integer auto_increment primary key not null,
	category varchar(256) not null
);

create table courseSubCategories(
	id integer auto_increment primary key not null,
	subCategory varchar(256) not null,
	categoryId integer not null,
	foreign key(categoryId)
	references courseCategories(id)
);

create table courses(
	id integer auto_increment primary key not null,
	courseName varchar(512) not null,
	about varchar(4096) not null,
	categoryId integer not null,
	subCategoryId integer not null,
	universityId integer not null,
	instructorId integer not null,
	enrollmentCount integer default 0,
	ccLocation varchar(512) default 'img/course-cover.png',
	totalWeeks integer not null,

	foreign key(categoryId)
	references courseCategories(id),

	foreign key(subCategoryId)
	references courseSubCategories(id),

	foreign key(universityId)
	references universities(id),

	foreign key(instructorId)
	references instructors(id)
);

create table courseSyllabus(
	courseId integer not null,
	weekNumber integer not null,
	moduleNumber integer not null,
	moduleHeader varchar(512) not null,
	topics varchar(2048) not null,
	assessments varchar(1024) not null,
	readingMaterials varchar(512),

	foreign key(courseId)
	references courses(id)
);

create table courseVideos(
	courseId integer not null,
	weekNumber integer(2) not null,
	module integer(2) not null,
	videoLocation varchar(512) not null,

	foreign key(courseId)
	references courses(id)
);

create table courseAssessments(
	courseId integer not null,
	weekNumber integer(2) not null,
	module integer(2) not null,
	assessmentsLocation varchar(512) not null,

	foreign key(courseId)
	references courses(id)
);

create table courseMaterials(
	courseId integer not null,
	weekNumber integer(2) not null,
	module integer(2) not null,
	materialLocation varchar(512) not null,

	foreign key(courseId)
	references courses(id)
);

create table enrollment(
	userId integer not null,
	courseId integer not null,
	subscription integer default 0,
	completed integer default 0,

	foreign key(userId)
	references users(id),

	foreign key(courseId)
	references courses(id)
);


/*Joining Multiple Tables

SELECT O.OrderID, C.CustomerName, E.FirstName, E.LastName, ProductName FROM Orders as O
INNER JOIN Employees as E on O.EmployeeID = E.EmployeeID
INNER JOIN Customers as C on O.CustomerID = C.CustomerID
Inner JOIN OrderDetails as OD on O.OrderID = OD.OrderID
INNER JOIN Products as P on OD.ProductID = P.ProductID*/
