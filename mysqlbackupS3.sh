# nightly DB backups dumped to S3 using /root/.s3cfg

USER="root"
HOST="localhost"
DB_NAME="teachen"

BACKUPROOT="/teachen/backup/db"
TSTAMP=$(date +"%d-%b-%Y-%H-%M-%S")
S3BUCKET="s3://teachen-cdn"
LOG_ROOT="/teachen/backup/backup.log"

echo "$(tput setaf 2)creating backup of database start at $TSTAMP" >> "$LOG_ROOT"

mysqldump -h $HOST -u $USER $DB_NAME --default-character-set=utf8mb4 -r $BACKUPROOT/$DB_NAME-$TSTAMP.sql

echo "$(tput setaf 3)Finished backup, sending it in S3 Bucket at $TSTAMP" >> "$LOG_ROOT"

#Delete files older than 15 days
find  $BACKUPROOT/*   -mtime +15   -exec rm  {}  \;
chown -R teachen:teachen $BACKUPROOT
s3cmd   put   --recursive   $BACKUPROOT   $S3BUCKET

echo "$(tput setaf 2)Moved the backup file from local to S3 bucket at $TSTAMP" >> "$LOG_ROOT"
echo "$(tput setaf 3)Coll!! Script have been executed successfully at $TSTAMP" >> "$LOG_ROOT"

