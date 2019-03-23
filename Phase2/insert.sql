\c studlearning

INSERT into dept values('CS','Computer Science',25);
INSERT into dept values('EC','Electronics and Communication',20);
INSERT into dept values('EEE','Electrical Engineering',10);
INSERT into dept values('ME','Mechanical Engineering',15);

INSERT into courses values('LSCS101','Python','CS',4,1,'None');
INSERT into courses values('LSCS151','C Programming','CS',4,2,'None');
INSERT into courses values('LSCS201','Data Structures','CS',4,3,'LSCS201');
INSERT into courses values('LSCS251','Algorithms','CS',4,4,'LSCS201');
INSERT into courses values('LSEC301','VLSI','EC',4,5,'None');
INSERT into courses values('LSEC251','Signal and system','EC',4,4,'None');
INSERT into courses values('LSME201','Fluid Mechanics','ME',4,3,'None');
INSERT into courses values('LSEEE351','Transmission System','EEE',4,6,'None');



INSERT into student values('LS20171010','Sunil Kumar','M','1999/01/12','sunilkumar@gmail.com',1,2 ,'CS');
INSERT into student values('LS20171029','Aman Gupta','M','1999/11/30','amangupta@gmail.com',1,3 ,'CS');
INSERT into student values('LS20171256','Tulika Saxena','F','2000/02/29','tulikasaxena@gmail.com',1,1 ,'EC');
INSERT into student values('LS20171412','Abhishek Tiwari','M','1999/09/18','abhiskek@gmail.com',1,0 ,'CS');
INSERT into student values('LS20171380','Ankitha Anand','F','1999/03/23','ankitha@gmail.com',1,1 ,'CS');
INSERT into student values('LS20171125','Granth Kohli','M','1999/05/07','granthkohli@gmail.com',1,0 ,'CS');
INSERT into student values('LS20171856','Aditya Verma','M','2000/04/08','adityaverma@gmail.com',1,4 ,'CS');
INSERT into student values('LS20171560','Surabhi Jain','F','1999/06/18','surabhijain@gmail.com',1,0 ,'EEE');
INSERT into student values('LS20171149','Nikitha Bhatiya','F','1999/06/15','nikitha@gmail.com',1,2 ,'CS');
INSERT into student values('LS20171623','Monika Agarwal','F','1999/09/10','monikaagarwal@gmail.com',1,0 ,'CS');
INSERT into student values('LS20171005','Rahul Mishra','M','1999/07/21','rahulmishra@gmail.com',1,0 ,'CS');
INSERT into student values('LS20171725','Gaurav Kumar','M','1999/11/29','gauravkumar@gmail.com',1,0 ,'CS');
INSERT into student values('LS20171299','Aman Sharma','M','1999/12/31','amansharma@gmail.com',1,0 ,'ME');
INSERT into student values('LS20171333','Shikar Mishra','M','1999/08/25','shikar@gmail.com',1,3 ,'ME');
INSERT into student values('LS20171444','Isha Verma','F','1999/01/12','ishaverma@gmail.com',1,4 ,'CS');

INSERT into faculty values('LSEM568','Savitha Sood','F','savithasood@gmail.com','Lecturer','CS');
INSERT into faculty values('LSEM125','Anand Kumar','M','anandkumar@gmail.com','Professor','CS');
INSERT into faculty values('LSEM896','Poonam Bisht','F','poonambisht@gmail.com','Professor','EC');
INSERT into faculty values('LSEM222','Anu Banerjee','F','anubanerjee@gmail.com','Professor','EEE');
INSERT into faculty values('LSEM346','Hari Chidella','M','harichindella@gmail.com','Lecturer','ME');
INSERT into faculty values('LSEM969','Sunitha A','F','sunitha@gmail.com','Lecturer','EEE');
INSERT into faculty values('LSEM050','Deepak Ahuja','M','deepakahuja@gmail.com','Associate Professor','CS');
INSERT into faculty values('LSEM634','Gauri Govind','F','gaurigovind@gmail.com','Lecturer','EC');
INSERT into faculty values('LSEM789','Vishal Kandpal','M','viahalkandpal@gmail.com','Assistant Professor','EC');
INSERT into faculty values('LSEM465','Chandrashekhar B V','M','chandrashekar@gmail.com','Professor','ME');

INSERT into notes values('125201101','Trees','LSCS201',0,'LSEM125','https://drive.google.com/open?id=0B8F7Frp3Od9maV8yUVFDcWVMbDQ');
INSERT into notes values('050201102','Graphs','LSCS201',0,'LSEM050','https://drive.google.com/open?id=0B8F7Frp3Od9mRGRyejlMSV81WDg');
INSERT into notes values('568151101','DataTypes','LSCS151',0,'LSEM568','https://drive.google.com/open?id=0B8F7Frp3Od9ma0d0SU03akJqM2M');
INSERT into notes values('568151101','Structures','LSCS151',0,'LSEM568','https://drive.google.com/open?id=0B8F7Frp3Od9mbkpIa2lqUmw2SU0');
INSERT into notes values('465201101','Fluid Mechanics','LSME201',0,'LSEM346','https://drive.google.com/open?id=0B8F7Frp3Od9mV1JXRlJHY09IOWc');



INSERT into test values(1,'data types in C',10,10,0,'LSCS151','LSEM568','https://www.geeksforgeeks.org/c-language-2-gq/data-types-gq/');
INSERT into test values(2,'List Tuples and Dictionary in Python',20,30,0,'LSCS101','LSEM634','https://www.techbeamers.com/python-programming-questions-list-tuple-dictionary/');
INSERT into test values(3,'Queue',15,10,0,'LSCS201','LSEM125','https://www.geeksforgeeks.org/data-structure-gq/queue-gq/');
INSERT into test values(4,'Stack',10,10,0,'LSCS201','LSEM125','https://www.geeksforgeeks.org/data-structure-gq/stack-gq/');
INSERT into test values(5,'Fluid Mechanics',30,20,0,'LSME201','LSEM465','https://examtimequiz.com/multiple-choice-questions-fluid-mechanics/');
INSERT into test values(6,'Vlsi Design and technology',25,30,0,'LSEC301','LSEM896','https://electronicspost.com/multiple-choice-questions-and-answers-on-vlsi-design-technology/');
INSERT into test values(7,'Transmission System',15,30,0,'LSEEE351','LSEM222','https://scholarexpress.com/multiple-choice-questions-mcq-on-transmission-system/');
INSERT into test values(8,'data types in python',10,10,0,'LSCS101','LSEM568','https://www.geeksforgeeks.org/c-language-2-gq/data-types-gq/');


INSERT into test_details values(6,'Vlsi Design and technology','LS20171256',15);
INSERT into test_details values(1,'data types in C','LS20171010',10);
INSERT into test_details values(1,'data types in C','LS20171029',9);
INSERT into test_details values(1,'data types in C','LS20171380',7);
INSERT into test_details values(1,'data types in C','LS20171856',10);
INSERT into test_details values(1,'data types in C','LS20171444',10);
INSERT into test_details values(1,'data types in C','LS20171149',10);
INSERT into test_details values(2,'List Tuples and Dictionary in Python','LS20171149',25);
INSERT into test_details values(2,'List Tuples and Dictionary in Python','LS20171010',25);
INSERT into test_details values(2,'List Tuples and Dictionary in Python','LS20171444',28);
INSERT into test_details values(2,'List Tuples and Dictionary in Python','LS20171333',28);
INSERT into test_details values(2,'List Tuples and Dictionary in Python','LS20171029',28);
INSERT into test_details values(2,'List Tuples and Dictionary in Python','LS20171856',30);
INSERT into test_details values(3,'Queue','LS20171444',8);
INSERT into test_details values(3,'Queue','LS20171333',5);
INSERT into test_details values(3,'Queue','LS20171029',8);
INSERT into test_details values(3,'Queue','LS20171725',8);
INSERT into test_details values(3,'Queue','LS20171856',8);
INSERT into test_details values(8,'data types in python','LS20171010',5);
INSERT into test_details values(8,'data types in python','LS20171623',7);
INSERT into test_details values(8,'data types in python','LS20171856',9);
INSERT into test_details values(8,'data types in python','LS20171444',9);
INSERT into test_details values(8,'data types in python','LS20171333',7);

INSERT INTO course_details values('LS20171010','LSCS151');
INSERT INTO course_details values('LS20171010','LSCS101');
INSERT INTO course_details values('LS20171010','LSCS201');
INSERT INTO course_details values('LS20171856','LSCS151');
INSERT INTO course_details values('LS20171856','LSCS101');
INSERT INTO course_details values('LS20171856','LSCS201');
INSERT INTO course_details values('LS20171856','LSCS251');
INSERT INTO course_details values('LS20171029','LSCS151');
INSERT INTO course_details values('LS20171444','LSCS101');
INSERT INTO course_details values('LS20171444','LSCS201');
INSERT INTO course_details values('LS20171725','LSCS201');
INSERT INTO course_details values('LS20171623','LSCS101');


INSERT INTO notes_details values('LS20171010','125201101',1);
INSERT INTO notes_details values('LS20171029','125201101',1);
INSERT INTO notes_details values('LS20171444','125201101',1);
INSERT INTO notes_details values('LS20171725','125201101',1);
INSERT INTO notes_details values('LS20171623','125201101',1);
INSERT INTO notes_details values('LS20171412','125201101',1);
INSERT INTO notes_details values('LS20171010','050201102',1);
INSERT INTO notes_details values('LS20171623','050201102',0);
INSERT INTO notes_details values('LS20171299','465201101',1);
INSERT INTO notes_details values('LS20171333','465201101',0);


