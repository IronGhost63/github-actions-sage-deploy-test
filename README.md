# GitHub Action - Sage 11 Deployment
I'm trying to create GitHub Actions Workflows that deploy [Sage 11](https://github.com/roots/sage) to Cloudways

## Setup
This workflow assumes we have 3 environments: `Development`, `Staging`, and `Production`. You will need to create one Cloudways app then clone it as Staging and Development. Then create 3 environments in GitHub as well, and name them accordingly.

Each __GitHub__ environments will need 1 secret and 3 variables

#### Secret
- `CLOUDWAYS_API_KEY` Store Cloudways API Key (You can obtain one [here](https://unified.cloudways.com/api))

#### Variables
- `CLOUDWAYS_APP_ID` Look in URL `https://unified.cloudways.com/apps/<AppID>/access_detail`
- `CLOUDWAYS_SERVER_ID` Look in URL `https://unified.cloudways.com/server/<ServerID>/access_detail`
- `THEME_PATH` Relative path to your theme directory. For example: `wp-content/themes/wp63`
