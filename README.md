
# PHP Pattern Printer Code Challenge

The challenge is to print an "X" and a "cross" on the command line and this project includes two PHP scripts that print "cross" and "X" patterns in the console for a freelance code challenge. The scripts are designed to be run in a Docker container to avoid the need to install PHP on your local machine.

## Prerequisites

- Docker

## Usage Instructions

1. Build the Docker image:

```bash
docker build -t php-pattern-printer .
```

2. Run the container to print the cross:

```bash
docker run --rm php-pattern-printer php printCross.php
```

3. Run the container to print the "X":

```bash
docker run --rm php-pattern-printer php printX.php
```

These commands allow you to view the output of the scripts directly in your console. Docker takes care of all the environment setup needed to run the PHP scripts.