const http = require('http');

const hostname = '127.0.0.1';
const port = 3000;

const server = http.createServer(function(req, res) {
	res.statusCode = 200;
	res.setHeader('Content-Type', 'text/plain');
	res.end('This is a test pure text file.');
})

server.listen(hostname, port, function() {
	console.log(`Server running at http://${hostname}:${port}`);
})