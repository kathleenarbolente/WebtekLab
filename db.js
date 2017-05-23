
var mysql = require('mysql');
var express = require('express');
var session = require('express-session');
var app = express();

var urlencodedParser = bodyParser.urlencoded({ extended: false });

app.set('view engine', 'ejs');
app.use(express.static('resources'));
app.use(session({secret: 'shhhhh'}));

var connection = mysql.createConnection({
	host: "localhost",
	user : "root",
	password : "",
	database : "salon"
});

var queryString = "SELECT requests.spname, requests.custname, requests.address, requests.serviceAvailed, requests.remarks FROM requests";

app.get('/index', function (req, res) {
  sess = req.session;
  if (sess.custname){
    connection.query("SELECT spname, custname, address, serviceAvailed, remarks FROM requests ORDER BY request_id;", [1, 2], function(err, rows, fields) {
    if (err) {
      console.log(err);
    }
    else {
      res.render('index', {spname: rows[0], custname: rows[1], address: rows[2], serviceAvailed: rows[3], remarks: rows[4]});
    }
  });
}
else {
  res.render('error');
}
});

app.post('/index', function(req, res) {
  sess = req.session;
  var data = req.body;
  if (!(data.from)) {

    if (data.page) {
      connection.query("")
    }
  }
});

connection.query(queryString, function(err, results) {
  if (err) {
  	console.log(err);
  }
	else {
		console.log(results);
	}
})
connection.end();

function request_access($this){
    console.log("button clicked");
    var request_data = $this.id;
    console.log("request: " + request_data)
    $.post( "request_access",{ request_data: request_data},function(json) {
         $("#request-access").hide();
         console.log("Request Accepted!");
    })
}

function deleteRow(r) {
  if (err) {
    console.log(err);
  }
  else {
    var i = r.parentNode.parentNode.rowIndex;
    document.getElementById("status").deleteRow(i);
  }
}