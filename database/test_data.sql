INSERT INTO users (name, email, password) VALUES
  ('Ben', 'ben@bennys.dom', ENCRYPT('sec', 'password')),
  ('Joan', 'joan@bennys.dom', ENCRYPT('sec', 'password')),
  ('Fin', 'Fin@bennys.dom', ENCRYPT('sec', 'anotherpassword'))