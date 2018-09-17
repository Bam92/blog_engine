drop table if exists t_comment;
/*drop table if exists t_user;*/
drop table if exists t_post;

create table t_post (
    pst_id integer not null primary key auto_increment,
    pst_title varchar(150) not null,
    pst_content text not null,
    pst_date datetime not null
) engine=innodb character set utf8 collate utf8_unicode_ci;

/*create table t_user (
    usr_id integer not null primary key auto_increment,
    usr_name varchar(50) not null,
    usr_password varchar(88) not null,
    usr_salt varchar(23) not null,
    usr_role varchar(50) not null
) engine=innodb character set utf8 collate utf8_unicode_ci;
*/
create table t_comment (
    cmt_id integer not null primary key auto_increment,
    pst_id integer not null,
    cmt_content text not null,
    cmt_author varchar(100) not null,
    cmt_date datetime not null,
    /*usr_id integer not null,*/
    constraint fk_cmt_pst foreign key(pst_id) references t_post(pst_id)
    /*constraint fk_com_usr foreign key(usr_id) references t_user(usr_id)*/
) engine=innodb character set utf8 collate utf8_unicode_ci;
