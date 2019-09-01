drop table if exists item;
create table item (    
    id integer not null primary key autoincrement,    
    summary varchar(80) not null,    
    details text default '', Fullname text default '', Datee text default ''
    
    
); 
insert into item values (null, "What a nice day",  "So sunny outside", "Danny Bugarski", "29/08/2019");
insert into item values (null, "Post Two", "This is another post!", "John Hollins", "27/08/2019");
insert into item values (null, "Post Three",  "This is another post!", "Chris Mills", "26/08/2019");
insert into item values (null, "Post four?", "This is another post!", "James Lewer", "25/08/2019");

