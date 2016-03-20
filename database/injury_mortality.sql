
CREATE TABLE IF NOT EXISTS injury_mortalities (
  household_unique_code varchar(255) NOT NULL COLLATE utf8_unicode_ci ,
  f01 varchar(255) COLLATE utf8_unicode_ci ,
  f02 varchar(255) COLLATE utf8_unicode_ci ,
  f03 varchar(255) COLLATE utf8_unicode_ci ,
  f04 varchar(255) COLLATE utf8_unicode_ci ,
  f05 varchar(255) COLLATE utf8_unicode_ci ,
  f06 varchar(255) COLLATE utf8_unicode_ci ,
  f07 varchar(255) COLLATE utf8_unicode_ci ,
  f08 varchar(255) COLLATE utf8_unicode_ci ,
  f09 varchar(255) COLLATE utf8_unicode_ci ,
  f10 varchar(255) COLLATE utf8_unicode_ci ,
  f11 varchar(255) COLLATE utf8_unicode_ci ,
  f12 varchar(255) COLLATE utf8_unicode_ci ,
  f13 varchar(255) COLLATE utf8_unicode_ci ,
  f14 varchar(255) COLLATE utf8_unicode_ci ,
  f15 varchar(255) COLLATE utf8_unicode_ci ,
  f16 varchar(255) COLLATE utf8_unicode_ci ,
  f17 varchar(255) COLLATE utf8_unicode_ci ,
  f18 varchar(255) COLLATE utf8_unicode_ci ,
  f19 varchar(255) COLLATE utf8_unicode_ci ,
  f20 varchar(255) COLLATE utf8_unicode_ci ,
  f21 varchar(255) COLLATE utf8_unicode_ci ,
  f22 varchar(255) COLLATE utf8_unicode_ci ,
  f23 varchar(255) COLLATE utf8_unicode_ci ,
  f24 varchar(255) COLLATE utf8_unicode_ci ,
  f25 varchar(255) COLLATE utf8_unicode_ci ,
  f26 varchar(255) COLLATE utf8_unicode_ci ,
  f27 varchar(255) COLLATE utf8_unicode_ci ,
  f28 varchar(255) COLLATE utf8_unicode_ci ,
  f29 varchar(255) COLLATE utf8_unicode_ci ,
  f30 varchar(255) COLLATE utf8_unicode_ci ,
  f31 varchar(255) COLLATE utf8_unicode_ci ,
  f32 varchar(255) COLLATE utf8_unicode_ci ,
  f33 varchar(255) COLLATE utf8_unicode_ci ,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL,
  PRIMARY KEY (household_unique_code)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=0;

ALTER TABLE injury_mortalities ADD h01 varchar(255);
ALTER TABLE injury_mortalities ADD h02 varchar(255);
ALTER TABLE injury_mortalities ADD h03 varchar(255);
ALTER TABLE injury_mortalities ADD h04 varchar(255);
ALTER TABLE injury_mortalities ADD h05 varchar(255);
ALTER TABLE injury_mortalities ADD h06 varchar(255);
ALTER TABLE injury_mortalities ADD h07 varchar(255);
ALTER TABLE injury_mortalities ADD h08 varchar(255);
ALTER TABLE injury_mortalities ADD h09 varchar(255);
