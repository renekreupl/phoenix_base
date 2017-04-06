#! /bin/bash

# Change to the TYPO3 root
cd ../../../../../../
# Call scheduler with a clean environment
env -i /usr/local/bin/php5-56LATEST-EXTENDED -f $PWD/typo3/cli_dispatch.phpsh scheduler
