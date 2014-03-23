#mdump-SocialMediocracy

##Endpoints

##Usage
"http://msom.eu01.aws.af.cm/index.php/companies/<company>" -> returns data for <company> from mongo
"http://msom.eu01.aws.af.cm/index.php/companies/" -> returns all companies from mongo

If company is not in mongo will fetch for all fields, build an object, inject into mongo, return. - This is transparent and does not affect the client (bar query time)

Create a new apiKeys.php, apiKeys_sample.php provides a template.

##Imports
- toroweb

##Sample output
http://msom.eu01.aws.af.cm/index.php/companies/amazon>

```json

{
    "name": "rackspace",
    "lastRefresh": "1395507353",
    "tweets": [
        {
            "text": "@bengoerz Please DM us or email your account# to help@rackspace.com, and we'll help investigate. Thanks!",
            "dateTime": "Fri Mar 21 21:26:26 +0000 2014",
            "user_name": "Rackspace",
            "verified": ""
        },
        {
            "text": "@bengoerz There can be several factors that influence resize time, but sounds like it would be best to have Support take a look.",
            "dateTime": "Fri Mar 21 21:25:52 +0000 2014",
            "user_name": "Rackspace",
            "verified": ""
        },
        {
            "text": "@botchagalupe We'll pass along your suggestion :) The world shall one day know the awesomeness that is Jason Grimm.",
            "dateTime": "Fri Mar 21 19:10:52 +0000 2014",
            "user_name": "Rackspace",
            "verified": ""
        },
        {
            "text": "SumAll talks scale, performance; new Cloud Block Storage feature; a startup demo day; more in the weekly digest http://t.co/C6LX4cDWYB",
            "dateTime": "Fri Mar 21 15:09:23 +0000 2014",
            "user_name": "Rackspace",
            "verified": ""
        },
        {
            "text": "@dgomez ¿Hay algo que pueda ayudar?",
            "dateTime": "Fri Mar 21 15:05:40 +0000 2014",
            "user_name": "Rackspace",
            "verified": ""
        },
        {
            "text": "@MomonMars Very happy you like them! :) cc @kr8tr",
            "dateTime": "Fri Mar 21 12:07:13 +0000 2014",
            "user_name": "Rackspace",
            "verified": ""
        },
        {
            "text": "@mcowger Thanks, we try! Can we offer a free tshirt as a welcome gift? Please email help@rackspace.com with your size &amp; address!",
            "dateTime": "Fri Mar 21 00:59:20 +0000 2014",
            "user_name": "Rackspace",
            "verified": ""
        },
        {
            "text": "@seanpcoyle so sorry about that. We are investigating. In the meantime, could you give us a call? http://t.co/BQXJ6bPmGJ @jwazdet",
            "dateTime": "Thu Mar 20 22:41:05 +0000 2014",
            "user_name": "Rackspace",
            "verified": ""
        },
        {
            "text": "@seanpcoyle Apologies for the wait - were you successful getting through to a Racker? @jwazdet",
            "dateTime": "Thu Mar 20 21:55:38 +0000 2014",
            "user_name": "Rackspace",
            "verified": ""
        },
        {
            "text": "@dglancy Is there anything particular you're having difficulty with? Would like to understand and improve. Thanks!",
            "dateTime": "Thu Mar 20 21:45:41 +0000 2014",
            "user_name": "Rackspace",
            "verified": ""
        },
        {
            "text": "@KultureShockNet We're really sorry to hear that. What happened? We'd like to follow up. Please send details to help@rackspace.com.",
            "dateTime": "Thu Mar 20 19:27:30 +0000 2014",
            "user_name": "Rackspace",
            "verified": ""
        },
        {
            "text": "@tonyfabeen Your account manager can help with that! Please DM us or email your contact to help@rackspace.com.",
            "dateTime": "Thu Mar 20 18:31:24 +0000 2014",
            "user_name": "Rackspace",
            "verified": ""
        },
        {
            "text": "@joeltimothy Can you please email help@rackspace.com and remind us of your tshirt size and address? ;)",
            "dateTime": "Thu Mar 20 18:14:58 +0000 2014",
            "user_name": "Rackspace",
            "verified": ""
        },
        {
            "text": "Join the discussion on scalable databases on our LIVE Cloud Office Hours Hangout - Right Now http://t.co/iIhtyJV9mf #CloudQA",
            "dateTime": "Thu Mar 20 18:01:40 +0000 2014",
            "user_name": "Rackspace",
            "verified": ""
        },
        {
            "text": "@onedeadgod Happy to have a Racker reach out to you. Please send your acct info to help@rackspace.com and we'll contact you ASAP. Thanks!",
            "dateTime": "Thu Mar 20 16:37:28 +0000 2014",
            "user_name": "Rackspace",
            "verified": ""
        },
        {
            "text": "@jepettoruti Have you reached out to support? We're happy to jump in and help. Feel free to email acct/ticket details to help@rackspace.com.",
            "dateTime": "Thu Mar 20 16:06:44 +0000 2014",
            "user_name": "Rackspace",
            "verified": ""
        },
        {
            "text": "@nickstenning This should be resolved now. Thanks again for reporting this! :)",
            "dateTime": "Thu Mar 20 14:48:52 +0000 2014",
            "user_name": "Rackspace",
            "verified": ""
        },
        {
            "text": "@WayneElsey Ok thanks! We'll follow up.",
            "dateTime": "Thu Mar 20 14:10:32 +0000 2014",
            "user_name": "Rackspace",
            "verified": ""
        },
        {
            "text": "@MarylandIT sure thing! Just email your address and shirt size to help@rackspace.com. :)",
            "dateTime": "Thu Mar 20 13:28:41 +0000 2014",
            "user_name": "Rackspace",
            "verified": ""
        },
        {
            "text": "@real_ate Thanks for the notice! We're looking into this right now.",
            "dateTime": "Thu Mar 20 13:25:11 +0000 2014",
            "user_name": "Rackspace",
            "verified": ""
        },
        {
            "text": "@nickstenning Can we send you a tshirt as a Thank You? Email your shirt size &amp; address to help@rackspace.com. :)",
            "dateTime": "Thu Mar 20 12:54:05 +0000 2014",
            "user_name": "Rackspace",
            "verified": ""
        },
        {
            "text": "@nickstenning Thanks for the heads up! We'll check it out.",
            "dateTime": "Thu Mar 20 12:53:57 +0000 2014",
            "user_name": "Rackspace",
            "verified": ""
        },
        {
            "text": "@charliebadger99 It's an awesome NoSQL type of database. Check out http://t.co/d6qvTO9rMT. :)",
            "dateTime": "Thu Mar 20 12:07:00 +0000 2014",
            "user_name": "Rackspace",
            "verified": ""
        },
        {
            "text": "@backendy Please let us know if we can help!",
            "dateTime": "Thu Mar 20 12:04:18 +0000 2014",
            "user_name": "Rackspace",
            "verified": ""
        },
        {
            "text": "@skwashd We'd like to research this further for you. Would you mind emailing your account# to help@rackspace.com? Thanks.",
            "dateTime": "Thu Mar 20 05:03:06 +0000 2014",
            "user_name": "Rackspace",
            "verified": ""
        }
    ]
}

```
