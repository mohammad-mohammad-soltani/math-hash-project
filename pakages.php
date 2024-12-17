<?php
for ext in $(php -m); do
  sudo apt install -y "php-$ext" || echo "Could not install $ext"

