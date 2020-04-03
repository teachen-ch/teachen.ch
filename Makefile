dump:
	/usr/local/mysql/bin/mysqldump -u root teachen --default-character-set=utf8mb4 -r backup/teachen-db.sql

pull:
	sudo -H -u teachen git pull
