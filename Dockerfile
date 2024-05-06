FROM php:8.0.3-cli

LABEL maintainer="yanpenabr@gmail.com"
LABEL version="1.0"
LABEL description="Container to run PHP scripts that print patterns."

WORKDIR /usr/src/myapp

COPY src/printCross.php ./printCross.php
COPY src/printX.php ./printX.php

CMD ["php", "printCross.php"]
