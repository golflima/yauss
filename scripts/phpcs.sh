#!/bin/bash
#rm var/reports/tests/phpcs_*.txt
vendor/bin/phpcs --config-set installed_paths vendor/escapestudios/symfony2-coding-standard
vendor/bin/phpcs -i
#vendor/bin/phpcs --report-summary --report-info=var/reports/tests/phpcs_info.txt --report-full=var/reports/tests/phpcs_full.txt --report-diff=var/reports/tests/phpcs_diff.txt --report-gitblame=var/reports/tests/phpcs_gitblame.txt -- config/ src/ tests/ web/
vendor/bin/phpcs --report-full --report-summary -- config/ src/ tests/ web/