

CREATE VIEW tprofile_view as SELECT users.id, users.firstname, users.mname,
 users.lastname, users.reg_no, teacher.email, teacher.dob, teacher.
 gender, teacher.office_no, teacher.phoneno, 
teacher.dept_id FROM users inner JOIN teacher WHERE users.id=teacher.user_id



CREATE VIEW sprofile_view as SELECT users.id, users.firstname, users.mname, users.lastname, 
users.reg_no, student.email, student.dob, student.gender, student.location, student.phoneno, 
student.program_id FROM users inner JOIN student WHERE users.id=student.user_id


CREATE VIEW user_view as SELECT sprofile_view.id, sprofile_view.firstname, 
sprofile_view.mname, sprofile_view.lastname, 
sprofile_view.reg_no, program.program_id FROM sprofile_view 
inner JOIN program where sprofile_view.program_id = program.id 

CREATE VIEW course_view as SELECT course.id, course.course_name, course.course_code,
teacher_course.teacher_id FROM course inner JOIN teacher_course
where course.id = teacher_course.course_id

SELECT * FROM course_view inner JOIN users WHERE users.id = course_view.id

SELECT course_name, course_code,
			 CONCAT(firstname, mname, lastname) as byname 
			FROM course_view inner JOIN users WHERE users.id = course_view.id


SELECT CONCAT( users.firstname, users.mname, users.lastname) as Byname, course.course_name, course.course_code
FROM users 
JOIN teacher on users.id = teacher.user_id
JOIN teacher_course on teacher.id = teacher_course.teacher_id
JOIN course on teacher_course.course_id = course.id
WHERE role_id = 1 