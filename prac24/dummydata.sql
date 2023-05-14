CREATE TABLE IF NOT EXISTS products (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  made_in VARCHAR(255) NOT NULL,
  price DECIMAL(10, 2) NOT NULL
);


INSERT INTO products (name, made_in, price) VALUES 
('Product 1', 'Country 1', 10.99),
('Product 2', 'Country 2', 19.99),
('Product 3', 'Country 3', 15.49),
('Product 4', 'Country 4', 7.99),
('Product 5', 'Country 5', 12.99),
('Product 6', 'Country 6', 9.99),
('Product 7', 'Country 7', 14.99),
('Product 8', 'Country 8', 6.99),
('Product 9', 'Country 9', 11.49),
('Product 10', 'Country 10', 8.99),
('Product 11', 'Country 11', 13.99),
('Product 12', 'Country 12', 16.49),
('Product 13', 'Country 13', 9.99),
('Product 14', 'Country 14', 11.99),
('Product 15', 'Country 15', 18.99),
('Product 16', 'Country 16', 13.49),
('Product 17', 'Country 17', 7.99),
('Product 18', 'Country 18', 10.49),
('Product 19', 'Country 19', 15.99),
('Product 20', 'Country 20', 12.49),
('Product 21', 'Country 21', 17.99),
('Product 22', 'Country 22', 8.49),
('Product 23', 'Country 23', 11.99),
('Product 24', 'Country 24', 9.49),
('Product 25', 'Country 25', 14.49),
('Product 26', 'Country 26', 10.99),
('Product 27', 'Country 27', 8.99),
('Product 28', 'Country 28', 12.99),
('Product 29', 'Country 29', 16.99),
('Product 30', 'Country 30', 9.99);

