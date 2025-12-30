# Modularity Contact Banner

This plugin is a [Municipio LTS](https://github.com/municipio-se/municipio-lts) version of the [Modularity Contact Banner plugin v3.1.5](https://github.com/helsingborg-stad/modularity-contact-banner/tree/3.1.5).

## Changes in this Fork

This LTS version includes several improvements focused on security and usability. The deprecated "onClick" field functionality has been removed to improve security and compatibility with modern WordPress standards.

The icon selection interface has been updated with a dropdown field, making it easier for content editors to select icons when configuring contact banners. Accessibility has been improved by correcting aria-labelledby attributes that were applied to invalid HTML elements.

The fork also includes updated package dependencies and build configurations, along with removal of GitHub Actions workflows to streamline the development process.

## New WordPress Hooks

This fork does not add any new WordPress hooks.

## Installation

1. Install the package:
   ```bash
   composer require municipio/wp-plugin-modularity-contact-banner
   ```
2. Activate the plugin in WordPress.
3. Activate the module under _Modularity → Options_.
