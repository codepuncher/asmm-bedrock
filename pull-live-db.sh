#!/bin/bash

REMOTE_DOMAIN='www.secularmeditation.me'
LOCAL_DOMAIN='asmm.test'
LOCAL_PATH="$(pwd)/bedrock/web/wp"

wp db reset --yes && \
wp @production db export - | \
wp db import - && \
wp search-replace "$REMOTE_DOMAIN" "$LOCAL_DOMAIN"
