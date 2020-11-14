CREATE TABLE workson (
   ssn char(9),
   projectnumber int(10),
   hours int(10),
  primary key (ssn) /* ,
  foreign key (projectnumber) references employee(projectnumber),
  */
);