drop table if exists comment;
create table comment (    
    id integer not null primary key autoincrement,    
    summary varchar(80) not null,    
    Fullname text default '', Datee text default ''
    
    
); 
insert into comment values (null, "Comment",  "Julie", "29/08/2019");
insert into comment values (null, "Canon EOS 700D", "Excellent entry-level digital SLR camera", "Danny", "29/08/2019");
insert into comment values (null, "Canon EOS 7D",  "Excellent if aging mid-range digital SLR camera.", "Danny", "29/08/2019");
insert into comment values (null, "Canon EOS 6D", "Excellent modern full-frame semi-professional digital SLR camera.", "Danny", "29/08/2019");
insert into comment values (null, "Fujifilm X-Pro1", "Outstanding compact mirrorless system camera", "Danny", "29/08/2019");
