var app = angular.module('google-analytics', ['angular-google-analytics'])
    .config(function(AnalyticsProvider) {
        // initial configuration
        AnalyticsProvider.setAccount('UA-52860840-3');
        // using multiple tracking objects (analytics.js only)
        // AnalyticsProvider.setAccount([
        //   { tracker: 'UA-12345-12', name: "tracker1" },
        //   { tracker: 'UA-12345-34', name: "tracker2" }
        // ]);

        // track all routes (or not)
        AnalyticsProvider.trackPages(true);

        // track all url query params (default is false)
        AnalyticsProvider.trackUrlParams(true);

        // Optional set domain (Use 'none' for testing on localhost)
        // AnalyticsProvider.setDomainName('XXX');

        // Use display features plugin
        AnalyticsProvider.useDisplayFeatures(true);

        // url prefix (default is empty)
        // - for example: when an app doesn't run in the root directory
        AnalyticsProvider.trackPrefix('my-application');

        // Use analytics.js instead of ga.js
        AnalyticsProvider.useAnalytics(true);

        // Use cross domain linking
        AnalyticsProvider.useCrossDomainLinker(true);
        AnalyticsProvider.setCrossLinkDomains(['domain-1.com', 'domain-2.com']);

        // Ignore first page view... helpful when using hashes and whenever your bounce rate looks obscenely low.
        AnalyticsProvider.ignoreFirstPageLoad(true);

        // Enabled eCommerce module for analytics.js(uses legacy ecommerce plugin)
        AnalyticsProvider.useECommerce(true, false);

        // Enabled eCommerce module for analytics.js(uses ec plugin instead of ecommerce plugin)
        AnalyticsProvider.useECommerce(true, true);

        // Enable enhanced link attribution
        AnalyticsProvider.useEnhancedLinkAttribution(true);

        // Enable analytics.js experiments
        AnalyticsProvider.setExperimentId('12345');

        // Set custom cookie parameters for analytics.js
        AnalyticsProvider.setCookieConfig({
          cookieDomain: 'foo.example.com',
          cookieName: 'myNewName',
          cookieExpires: 20000
        });

        // change page event name
        AnalyticsProvider.setPageEvent('$stateChangeSuccess');


        // Delay script tage creation
        // must manually call Analytics.createScriptTag(cookieConfig) or Analytics.createAnalyticsScriptTag(cookieConfig)
        AnalyticsProvider.delayScriptTag(true);
    })
    .run(function(Analytics) {
      // In case you are relying on automatic page tracking, you need to inject Analytics
      // at least once in your application (for example in the main run() block)
    });