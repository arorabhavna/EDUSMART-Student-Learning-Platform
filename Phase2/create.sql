DROP DATABASE studlearning;
CREATE DATABASE studlearning;

\c studlearning

DROP TABLE student;
DROP TABLE dept;
DROP TABLE courses;
DROP TABLE faculty;
DROP TABLE notes;
DROP TABLE test;
DROP TABLE test_details;

CREATE TABLE dept
            (
                dept_id VARCHAR(10) PRIMARY KEY,
                name VARCHAR(60) NOT NULL,
                no_of_students INTEGER
            );

CREATE TABLE student
            (
                usn VARCHAR(15) PRIMARY KEY,
                name VARCHAR(60) NOT NULL,
                sex VARCHAR(60) NOT NULL,
		dob DATE, 
                email VARCHAR(60) UNIQUE,
		stars INTEGER,
		no_of_tests INTEGER,
		dept_id VARCHAR(10) NOT NULL,
		 FOREIGN KEY(dept_id) REFERENCES dept(dept_id)
                
            );



CREATE TABLE courses
            (
                course_id VARCHAR(10) PRIMARY KEY,
                name VARCHAR(60) NOT NULL UNIQUE,
		dept_id VARCHAR(10),
		 FOREIGN KEY(dept_id) REFERENCES dept(dept_id),
		no_of_credits INTEGER NOT NULL,
		sem INTEGER NOT NULL,
		prerequisites VARCHAR (10) 
            );

CREATE TABLE faculty
            (
                emp_id VARCHAR(15) PRIMARY KEY,
                name VARCHAR(60) NOT NULL,
		gender CHAR(1),
                email VARCHAR(60) NOT NULL UNIQUE,
		designation VARCHAR(30) NOT NULL,
		dept_id VARCHAR(10) NOT NULL,
		 FOREIGN KEY(dept_id) REFERENCES dept(dept_id)
            );

CREATE TABLE notes
            (
                notes_id varchar(10) PRIMARY KEY,
                name VARCHAR(60) NOT NULL UNIQUE,
                course_id VARCHAR(10) NOT NULL, 
		no_of_likes INTEGER,
		emp_id VARCHAR(10) NOT NULL,
		link VARCHAR(100) NOT NULL UNIQUE,
		FOREIGN KEY (course_id) REFERENCES courses(course_id),
		FOREIGN KEY(emp_id) REFERENCES faculty(emp_id)
            );

CREATE TABLE test
            (
                test_id VARCHAR(10) PRIMARY KEY,
		test_name VARCHAR(50) NOT NULL UNIQUE,
		duration INTEGER NOT NULL,
		max_marks_allotted INTEGER NOT NULL,
		avg_score INTEGER ,
		course_id VARCHAR(10),
		emp_id VARCHAR(15) ,
		link VARCHAR(100) NOT NULL,
 		FOREIGN KEY(course_id) REFERENCES courses(course_id),
		FOREIGN KEY(emp_id) REFERENCES faculty(emp_id)
                
            );

CREATE TABLE test_details
            (
                test_id VARCHAR(10) NOT NULL,
		FOREIGN KEY(test_id) REFERENCES test(test_id),
		test_name VARCHAR(50) NOT NULL ,
		FOREIGN KEY(test_name) REFERENCES test(test_name),
		usn VARCHAR(15) NOT NULL ,
		FOREIGN KEY(usn) REFERENCES student(usn),
		marks INTEGER
            );

CREATE TABLE course_details
	   (
		usn VARCHAR(15) NOT NULL ,
		course_id VARCHAR(10) NOT NULL,
		FOREIGN KEY (course_id) REFERENCES courses(course_id),
		FOREIGN KEY(usn) REFERENCES student(usn)
	   );
CREATE TABLE notes_details
	   (
		usn VARCHAR(15) NOT NULL ,
		notes_id varchar(10) NOT NULL,
		FOREIGN KEY (notes_id) REFERENCES notes(notes_id),
		FOREIGN KEY(usn) REFERENCES student(usn),
		likes INTEGER
	   );

