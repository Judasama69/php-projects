PROJECT SCENARIO

Negros Oriental State University (NORSU) is implementing a digital Campus ID Access System (CIAS).

Every person entering the campus—students, teachers, and staff—must be registered in a system that determines their access privileges.



You have been hired to develop the first prototype of CIAS using inheritance.



Your system must model how different types of campus individuals share common properties but also have unique access levels.



SYSTEM REQUIREMENTS

You must create three php classes that demonstrate proper inheritance:

1. Parent Class: Person

Represents any individual inside the NORSU campus.

 Common Attributes:

name

idNumber

department

 Common Method:

displayInfo() → prints all Person attributes

getAccessLevel() → returns a generic message (will be overridden) 

2. Child Class 1: Student (extends Person)

 Additional Attribute:

course 

Overridden Method:

getAccessLevel()

Returns: “Access Level: Student – Access to classrooms, library, and computer labs.” 

3. Child Class 2: Teacher (extends Person)

 Additional Attribute:

specialization 

Overridden Method:

getAccessLevel()

Returns: “Access Level: Teacher – Access to classrooms, faculty rooms, and laboratories.” 

4. Child Class 3: Staff (extends Person)

 Additional Attribute:

role

 Overridden Method:

getAccessLevel()

Returns: “Access Level: Staff – Access to administrative offices and service areas.” 

5. Main Program Requirements

In Main.java, you must:

Create one Student object

Create one Teacher object

Create one Staff object

Assign values to all attributes

Call:

displayInfo()

getAccessLevel()

