
CREATE TABLE hw_login_attempt (
  ID int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  ip varchar(50)  NULL,
  attempt_time int(11)  NULL,
  device varchar(100)  NULL
);

CREATE TABLE hw_post (
  post_id int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  post_title varchar(200)  NULL,
  post_category varchar(50)  NULL,
  post_description longtext  NULL,
  post_author varchar(100)  NULL,
  view int(11)  NULL,
  img varchar(100)  NULL,
  post_date date  NULL
);

CREATE TABLE hw_users (
  ID int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  username varchar(100)  NULL,
  user_password varchar(200)  NULL,
  email_phone varchar(200)  NULL,
  user_role varchar(20)  NULL,
  verification varchar(10)  NULL,
  last_login date  NULL,
  user_location varchar(100)  NULL,
  user_device varchar(100)  NULL,
  user_img varchar(100)  NULL,
  user_status varchar(20)  NULL,
  login_at datetime  NULL,
  otp varchar(6)  NULL,
  reg_date date  NULL
);
