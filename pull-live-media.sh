#!/bin/bash

REMOTE_HOST=207.246.97.230
REMOTE_USER=root
UPLOADS_PATH=/srv/www/asmm/shared/uploads/

rsync -azvh \
  "$REMOTE_USER"@"$REMOTE_HOST":"$UPLOADS_PATH" web/app/uploads
