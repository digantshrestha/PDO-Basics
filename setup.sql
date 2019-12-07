drop database if exists pdoposts;
create database pdoposts;
use pdoposts;

create table posts(
    id int auto_increment not null primary key,
    title varchar(255) not null,
    body text not null,
    author varchar(255) not null,
    is_published boolean default true,
    created_at timestamp default current_timestamp
);

insert into posts (title, body, author) values 
('Post One', 'This is Post One', 'Itachi'),
('Post Two', 'This is Post Two', 'Sasori'),
('Post Three', 'This is Post Three', 'Deidara'),
('Post Four', 'This is Post Four', 'Pain'),
('Post Five', 'This is Post Five', 'Hidan');

insert into posts (title, body, author, is_published) values
('Post Six', 'This is Post Six', 'Itachi', false),
('Post Seven', 'This is Post Seven', 'Itachi', false);
