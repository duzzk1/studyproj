#!/bin/bash

php artisan serve &
sleep 5 # wait for 5 seconds to allow the server to start
npm run dev
