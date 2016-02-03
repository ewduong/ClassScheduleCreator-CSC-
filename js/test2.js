var Client = require('mariasql');

var c = new Client({
  host: 'localhost',
  user: 'root',
  password: 'Csc2016!',
  db: 'spring_2016'
});

var query = c.query('SELECT * FROM class', function(err, rows) {
  if(err) throw err; 
  
  console.log('Data received from DB:\n');
  console.log(rows);
  c.end();  
});
