drop table if exists t_comment;
drop table if exists t_post;
drop table if exists t_auth;

create table t_auth (
    auth_id integer not null primary key auto_increment,
    auth_name varchar(50) not null,
    auth_password varchar(88) not null,
    auth_full_name varchar(50),
    auth_bio varchar(255) not null
    -- auth_bio varchar(255) not null
    -- usr_salt varchar(23) not null,
    -- usr_role varchar(50) not null
) engine=innodb character set utf8 collate utf8_unicode_ci;

create table t_post (
    pst_id integer not null primary key auto_increment,
    pst_auth integer not null,
    pst_title varchar(150) not null,
    pst_content text not null,
    pst_date datetime not null,
    constraint fk_pst_auth foreign key(pst_auth) references t_auth(auth_id) ON DELETE CASCADE
) engine=innodb character set utf8 collate utf8_unicode_ci;

create table t_comment (
    cmt_id integer not null primary key auto_increment,
    cmt_content text not null,
    pst_id integer not null,
    cmt_author varchar(30) not null,
    cmt_date datetime not null,
    cmt_email varchar(30),
    cmt_web varchar(50),
    /*usr_id integer not null,*/
    constraint fk_cmt_pst foreign key(pst_id) references t_post(pst_id) ON DELETE CASCADE
    /*constraint fk_com_usr foreign key(usr_id) references t_user(usr_id)*/
) engine=innodb character set utf8 collate utf8_unicode_ci;


