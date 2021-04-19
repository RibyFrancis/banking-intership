var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "root"
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
  con.query("select * from ", function (error, result) {
    if (error) throw error;
    console.log("Result: " + result);
  });
});