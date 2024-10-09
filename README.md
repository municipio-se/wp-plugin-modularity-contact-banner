# Modularity Contact Banner

This plugin is an LTS version of the [Modularity Contact Banner plugin v3.1.5](https://github.com/helsingborg-stad/modularity-contact-banner/tree/3.1.5).

## Installation

1. Add the following to your `composer.json` file:
   ```json
   {
     "repositories": [
       {
         "type": "vcs",
         "url": "https://github.com/municipio-lts/wp-plugin-modularity-contact-banner-2024.git",
         "only": [
           "municipio-lts/wp-plugin-modularity-contact-banner-2024"
         ],
         "no-api": true
       },
     ]
   }
   ```
2. Install the package:
   ```bash
   composer require municipio-lts/wp-plugin-modularity-contact-banner-2024:dev-main
   ```
3. Activate the plugin in WordPress.
4. Activate the module under _Modularity → Options_.
