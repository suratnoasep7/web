create table products
(
    id          int auto_increment
        primary key,
    name        text  null,
    weight      float null,
    price       int   null,
    stock       int   null,
    merchant_id int   null,
    user_id     int   null
);

INSERT INTO dbtes.products (id, name, weight, price, stock, merchant_id, user_id) VALUES (1, 'tes', 1, 1, 1, 1, 1);