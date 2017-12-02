#!/bin/bash
vendor/bin/phpcbf --config-set installed_paths vendor/escapestudios/symfony2-coding-standard
vendor/bin/phpcbf -i
vendor/bin/phpcbf -v config/ src/ tests/ web/