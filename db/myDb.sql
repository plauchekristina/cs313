CREATE TABLE account
(
    account_id serial PRIMARY KEY,
    first_name VARCHAR (20) NOT NULL,
    last_name VARCHAR (20) NOT NULL,
    username VARCHAR(30) NOT NULL,
    email VARCHAR (100) NOT NULL,
    user_password VARCHAR(30) NOT NULL
);
CREATE TABLE coop
(
    coop_id serial PRIMARY KEY,
    coop_user_id INTEGER references account(account_id),
    coop_name VARCHAR(50) NOT NULL,
    coop_contact_name VARCHAR (50) NOT NULL,
    coop_contact_email VARCHAR (50) NOT NULL,
    coop_full_budget INTEGER NOT NULL,
    coop_half_budget INTEGER NOT NULL
);
CREATE TABLE orders
(
    orders_id serial PRIMARY KEY,
    orders_account_id INTEGER references account(account_id),
    orders_coop_id INTEGER references coop(coop_id),
    orders_date DATE NOT NULL,
    orders_total NUMERIC NOT NULL,
    orders_full_qty INTEGER NOT NULL,
    orders_half_qty INTEGER NOT NULL,
    orders_full_budget INTEGER NOT NULL,
    orders_half_budget INTEGER NOT NULL,
    coop_name VARCHAR (80) NOT NULL
);
CREATE TABLE item
(
    item_id serial PRIMARY KEY,
    item_orders_id INTEGER references orders(orders_id),
    item_name VARCHAR(80) NOT NULL,
    item_count INTEGER NOT NULL,
    item_unit VARCHAR(30) NOT NULL,
    item_price NUMERIC NOT NULL,
    item_full_qty INTEGER NOT NULL,
    item_half_qty INTEGER NOT NULL,
    item_order_qty INTEGER NOT NULL,
    item_order_cost NUMERIC NOT NULL
);

INSERT INTO account (first_name, last_name, username, email, user_password)
VALUES (
    'Kristina', 'Plauche', 'kristinaplauche', 'kristina@plauche.org', 'admin123'
);

INSERT INTO coop (coop_user_id, coop_name, coop_contact_name, coop_contact_email,coop_full_budget,coop_half_budget)
VALUES (
1, 'Farmers Market Baskets', 'Kristina', 'kristina@farmersmarketbaskets.com', 10, 5);



 