drop table if exists t_post;
drop table if exists t_comment;
drop table if exists t_user;
drop table if exists t_tag;
drop table if exists t_pst_tag;

create table t_post (
    pst_id integer not null primary key auto_increment,
    pst_title varchar(150) not null,
    pst_content text not null,
    pst_date datetime not null
) engine=innodb character set utf8 collate utf8_unicode_ci;

create table t_user (
    usr_id integer not null primary key auto_increment,
    usr_name varchar(50) not null,
    usr_password varchar(88) not null
    /*usr_salt varchar(23) not null,
    usr_role varchar(50) not null*/
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
    constraint fk_cmt_pst foreign key(pst_id) references t_post(pst_id)
    /*constraint fk_com_usr foreign key(usr_id) references t_user(usr_id)*/
) engine=innodb character set utf8 collate utf8_unicode_ci;

create table t_tag (
    tag_id integer not null primary key auto_increment,
    tag_name varchar(30) not null
) engine=innodb character set utf8 collate utf8_unicode_ci;

create table t_pst_tag (
    pst_id integer not null,
    tag_id integer not null,
    constraint fk_pst foreign key(pst_id) references t_post(pst_id) ON DELETE RESTRICT ON UPDATE CASCADE,
    constraint fk_tag foreign key(tag_id) references t_tag(tag_id) ON DELETE RESTRICT ON UPDATE CASCADE
) engine=innodb character set utf8 collate utf8_unicode_ci;
