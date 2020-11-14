LOAD DATA INFILE 'dependent.dat' 
INTO TABLE dependent 
FIELDS ENCLOSED BY '\"' TERMINATED BY ','
;

select * from dependent;
