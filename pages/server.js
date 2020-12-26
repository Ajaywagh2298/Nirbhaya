var http = require('http');
var fs = require('fs');
var path = require('path');

function send404(response) {
    response.writeHead(404, {
        'Content-Type': 'text/plain'
    });
    response.wrute('Error 404 Resourse not found');
    response.end();
}

var mimeLoop = {
    '.js': 'application/javascript',
    '.php': 'text/php'
};

var server = http.createServer(function (req, res) {

    if (req.method == 'GET') {
        var fileurl;
        if (req.url == '/') fileurl = '/login.php';
        else fileurl = req.url;
        var filepath = path.resolve('./public' + fileurl);

        var fileExt = path.extname(filepath);
        var mimeType = mimeLoopup[fileExt];

        if (!mimeType) {
            send404(res);
            return;
        }

        fs.exists(filepath, function (exists) {
            if (!exists) {
                send404(res);
                return;
            };
            res.writeHead(200, {
                'Content-Type  mimeType'
            });
            fs.createReadStream(filepath).pipe(res);
        });
    } else {
        send404(res);
    }
}).listen(3000);
console.log('Server running on path 300');
}