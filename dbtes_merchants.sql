create table merchants
(
    id      int auto_increment
        primary key,
    name    text null,
    phone   text null,
    address text null
);

INSERT INTO dbtes.merchants (id, name, phone, address) VALUES (1, 'tes', '081234', 'tes');