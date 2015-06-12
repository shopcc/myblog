1、文章列表
create table my_article (id mediumint(10) not null auto_increment comment '文章ID',
artile_title varchar(100) not null default '' comment '文章标题',
author varchar(60) not null default '' comment '文章作者',
sort_id tinyint(5) not null default '0' comment '文章分类ID',
content text comment '文章内容',
add_time int(12) comment '添加时间',
keywords varchar(120) not null default '' comment '文章关键字',
description varchar(200) not null default '' comment '文章描述',
html_url varchar(200) not null default '' comment '静态链接地址',
small_content text comment '文章简介',
thumb_img varchar(200) not null default '' comment '文章微图',
click mediumint(10) not null default '0' comment '文章点击量',
a_hot tinyint(1) not null default '0' comment '是否推荐',
primary key(id),
index (`artile_title`, `keywords`),
fulltext (content,small_content)
)engine=myisam charset=utf8;

2、分类列表
create table my_category (id tinyint(5) not null auto_increment comment '分类ID',
cate_name varchar(60) not null default '' comment '分类名称',
pid tinyint(5) not null comment '上级分类',
add_time int(12) not null comment '添加日期',
is_nav tinyint(1) not null default '0' comment '导航是否显示',
status tinyint(1) not null default '1' comment '是否启用', 
primary key(id),
index (cate_name))engine=myisam charset=utf8;

3、后台用户列表
create table my_users(id mediumint(10) not null auto_increment comment '用户ID',
user_name varchar(60) not null default '' comment '用户名',
passwd varchar(120) not null default '' comment '密码',
email varchar(30) not null default '' comment '邮箱',
qqnum mediumint(20) not null default '0' comment 'QQ号码',
openid mediumint(20) not null default '0' comment 'openid',
is_admin tinyint(1) not null default '0' comment '是否管理员',
primary key(id),
unique key(user_name,openid))engine=myisam charset=utf8;

4、单页管理列表
create table my_pages(id mediumint(5) not null auto_increment comment '单页ID',
page_name varchar(60) not null default '' comment '单页名称',
page_url  varchar(200) not null default '' comment '单页地址',
order_sort tinyint(10) not null default '' comment '排序',
is_nav tinyint(1) not null default '0' comment '导航是否显示',
primary key(id),
unique (page_name))engine=myisam charset=utf8;

5、评论列表
create table my_comment(id mediumint(10) not null auto_increment comment '评论ID',
article_id mediumint(10) not null default '0' comment '文章ID',
user_id mediumint(10) not null default '0' comment '用户ID',
content text comment '评论内容',
primary key(id),
index (article_id,user_id))engine=myisam charset=utf8;

6、相册管理
create table my_gllary(id mediumint(10) not null auto_increment comment '相册ID',
g_name varchar(60) not null default '' comment '相册名称',
g_img_url varchar(120) not null default '' comment '相册封面',
g_desc text comment '相册描述',
primary key(id),
index (g_name))engine=myisam charset=utf8;