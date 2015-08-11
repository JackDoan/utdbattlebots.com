export GOPATH="/usr/local/go"
cd /var/www/utdbattlebots.com/assets/img/drive
go run /usr/local/go/src/github.com/rakyll/drive/cmd/drive/main.go pull -r -no-prompt=true Website/Pictures
chmod -R +r /var/www/utdbattlebots.com/assets/img/drive/Website
