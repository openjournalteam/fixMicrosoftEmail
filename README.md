# About
Based on our experience when handling our clients when using the Microsoft email in the config.inc.php file as the sending server, using the default setting you will get blocked or the OJS cannot send the email. 
So our team share this plugin to fix the issue. 
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

## Version 
Support for version 3.3


## License

This plugin is licensed under the GNU GPL v3.0 License. See the [LICENSE](LICENSE) file for more information.

## Support term 

Since the plugin is free, we are not take any responsibility for any damage caused by the plugin. 
The support for the plugin is limited since the plugin is provided with free of charge. We don't have any obligation to provide any support for this plugin. 

## Support Contribution 

This open-source project is actively developed and maintained thanks to the dedicated efforts of our team. While the software is freely available, your financial support ensures its long-term sustainability and continued improvement. If you find value in using this project, please consider sponsoring its development or making a donation - any contribution, no matter how small, is greatly appreciated and helps us provide updates and maintenance for the benefit of the entire community. Contact us via email for any generous donation. 

---
Thank you for using our plugin for your journal! If you have any questions or need assistance, please don't hesitate to contact us to support@openjournaltheme.com
Don't forget to subscribe to our channel [subscribe now!](https://subscription.openjournaltheme.com/lists/63bfa9ae7633a/sign-up) and visit our site for the latest free plugin : https://openjournaltheme.com
