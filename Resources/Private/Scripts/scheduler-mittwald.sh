#!/bin/sh

# Change to the TYPO3 root
cd ../../../../../../
# Call scheduler with a clean environment
env -i /usr/local/bin/php_cli -f $PWD/typo3/cli_dispatch.phpsh scheduler