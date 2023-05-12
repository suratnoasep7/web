create table users
(
    id      int auto_increment
        primary key,
    name    text null,
    phone   text null,
    address text null
);

INSERT INTO dbtes.users (id, name, phone, address) VALUES (1, 'tes', '0812345678', 'tes');