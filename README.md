# Fix Microsoft Email SMTP for OJS
This plugin is created to fix the error when sending an email using Microsoft Email SMTP configuration.

## The Problem
Microsoft Email doesn't allow to send email with send as email address. By default, OJS will send email with the user email address as the sender. This will cause an error when sending an email using Microsoft Email client.

## Installation
- Go to [releases](https://github.com/openjournalteam/fixMicrosoftEmail/releases) page.
- Download latest release tar.gz file.
- Upload the tar.gz file in your OJS 3 Plugin Manager
- If you dont know how to upload the plugin please refer to this [documentation](https://docs.pkp.sfu.ca/learning-ojs/3.3/en/settings-website#external-plugins) by PKP


## Configuration
Currently there's no configuration needed for this plugin. Once the plugin is enabled, the plugin will automatically change the sender email address to the email address that you have set in the SMTP configuration.

## License

This plugin is licensed under the GNU GPL v3.0 License. See the [LICENSE](LICENSE) file for more information.

---
Thank you for using our plugin for your journal! If you have any questions or need assistance, please don't hesitate to contact us to support@openjournaltheme.com
