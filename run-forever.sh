#!/bin/bash

# Define the address and port
ADDRESS="127.0.0.1:80"
# Define the document root (the directory where your PHP files are located)
DOCUMENT_ROOT="Bromine"

# Infinite loop to keep the server running
while true; do
    # Start the PHP built-in server
    php -S $ADDRESS -t $DOCUMENT_ROOT

    # Check the exit status of the PHP server
    if [ $? -ne 0 ]; then
        echo "PHP server crashed. Restarting..."
        sleep 1  # Optional: wait for a second before restarting
    fi
done
