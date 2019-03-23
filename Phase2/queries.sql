/*to select all the students who have taken maximum number of test*/
SELECT usn,name from student where usn in (SELECT usn FROM test_details 
GROUP BY usn
HAVING COUNT(usn) = 
	(SELECT MAX(num) FROM
		(SELECT COUNT(usn) AS num FROM test_details GROUP BY usn)y));

/*to select all the subjects in which students have taken maximum number of test*/
SELECT test_name FROM test_details 
GROUP BY test_name 
HAVING COUNT(test_name) = 
	(SELECT MAX(num) FROM
		(SELECT COUNT(test_name) AS num FROM test_details GROUP BY test_name)y);

/* to find average marks of students in a course which is uploaded by a particular faculty*/
SELECT AVG(marks) FROM test_details
WHERE test_name IN
	(SELECT test_name FROM test WHERE emp_id = 
'LSEM568')group by test_name;

/* how many courses a particular student has taken*/
select count(*) from course_details where usn = 'LS20171010';

/*select total numbeer of students from each department*/
select dept_id,count(*) from student group by dept_id;

/* how many credits a student has taken */
select usn,sum(courses.no_of_credits) from courses,course_details
where course_details.course_id = courses.course_id
group by usn;

/*to find average of all the subjets*/
select test_name,avg(marks) from test_details
group by test_name;

/* select notes names where likes>5 or if it belongs to a cs dept*/
SELECT DISTINCT  notes.name from notes,courses,dept 
WHERE no_of_likes>5 OR dept.dept_id = courses.dept_id and dept.dept_id = 'CS' and courses.course_id = notes.course_id;
