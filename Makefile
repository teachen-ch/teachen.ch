SHELL := DOTENV_DEFAULT=.env ./dotenv /bin/sh

localdump:
	/usr/local/mysql/bin/mysqldump -u root teachen --default-character-set=utf8mb4 -r backup/teachen-db.sql
pull:
	git pull
dump:
	mysqldump -u $$DB_USER $$DB_NAME -p$$DB_PASSWORD -h $$DB_HOST --set-gtid-purged=OFF --column-statistics=0 --default-character-set=utf8mb4 -r backup/teachen-db.sql
