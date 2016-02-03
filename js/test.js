var Client = require('mariasql');

var c = new Client({
  host: 'localhost',
  user: 'root',
  password: 'Csc2016!'
});

c.query('SHOW DATABASES', function(err, rows) {
  if (err)
    throw err;
  console.dir(rows);
});

c.end();
