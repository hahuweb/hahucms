
CREATE TABLE hw_login_attempt (
  ID int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  ip varchar(50) NOT NULL,
  attempt_time int(11) NOT NULL,
  device varchar(100) NOT NULL
);

CREATE TABLE hw_post (
  post_id int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  post_title varchar(200) NOT NULL,
  post_category varchar(50) NOT NULL,
  post_description longtext NOT NULL,
  post_author varchar(100) NOT NULL,
  view int(11) NOT NULL,
  img varchar(100) NOT NULL,
  img_url varchar(500) NOT NULL,
  post_date date NOT NULL
);

CREATE TABLE hw_users (
  ID int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  username varchar(100) NOT NULL,
  user_password varchar(200) NOT NULL,
  email_phone varchar(200) NOT NULL,
  user_role varchar(20) NOT NULL,
  verification varchar(10) NOT NULL,
  last_login date NOT NULL,
  user_location varchar(100) NOT NULL,
  user_device varchar(100) NOT NULL,
  user_img varchar(100) NOT NULL,
  user_status varchar(20) NOT NULL,
  login_at datetime NOT NULL,
  otp varchar(6) NOT NULL,
  reg_date date NOT NULL
);
