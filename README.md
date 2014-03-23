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
    "lastRefresh": "1395576555",
    "tweets": [
        {
            "text": "@EvositeAran @rackspaceUK It is very new so we can't speak to it in depth, but we will certainly investigate.",
            "dateTime": "Sun Mar 23 08:54:23 +0000 2014",
            "user_name": "Rackspace",
            "verified": "1",
            "sentiment": "1.40625"
        },
        {
            "text": "@leydon Thanks! Looking into it now and will reply momentarily.",
            "dateTime": "Sat Mar 22 20:29:27 +0000 2014",
            "user_name": "Rackspace",
            "verified": "1",
            "sentiment": "-0.15"
        },
        {
            "text": "@leydon Happy to have a Racker reach out to you for an assist. Send your account details to help@rackspace.com and we'll contact you ASAP.",
            "dateTime": "Sat Mar 22 20:13:36 +0000 2014",
            "user_name": "Rackspace",
            "verified": "1",
            "sentiment": "0"
        },
        {
            "text": "@bengoerz Please DM us or email your account# to help@rackspace.com, and we'll help investigate. Thanks!",
            "dateTime": "Fri Mar 21 21:26:26 +0000 2014",
            "user_name": "Rackspace",
            "verified": "1",
            "sentiment": "0.1"
        },
        {
            "text": "@bengoerz There can be several factors that influence resize time, but sounds like it would be best to have Support take a look.",
            "dateTime": "Fri Mar 21 21:25:52 +0000 2014",
            "user_name": "Rackspace",
            "verified": "1",
            "sentiment": "-0.4375"
        },
        {
            "text": "@botchagalupe We'll pass along your suggestion :) The world shall one day know the awesomeness that is Jason Grimm.",
            "dateTime": "Fri Mar 21 19:10:52 +0000 2014",
            "user_name": "Rackspace",
            "verified": "1",
            "sentiment": "0.25"
        },
        {
            "text": "SumAll talks scale, performance; new Cloud Block Storage feature; a startup demo day; more in the weekly digest http://t.co/C6LX4cDWYB",
            "dateTime": "Fri Mar 21 15:09:23 +0000 2014",
            "user_name": "Rackspace",
            "verified": "1",
            "sentiment": "0.291666666667"
        },
        {
            "text": "@dgomez ¿Hay algo que pueda ayudar?",
            "dateTime": "Fri Mar 21 15:05:40 +0000 2014",
            "user_name": "Rackspace",
            "verified": "1",
            "sentiment": "0"
        },
        {
            "text": "@MomonMars Very happy you like them! :) cc @kr8tr",
            "dateTime": "Fri Mar 21 12:07:13 +0000 2014",
            "user_name": "Rackspace",
            "verified": "1",
            "sentiment": "1.40625"
        },
        {
            "text": "@mcowger Thanks, we try! Can we offer a free tshirt as a welcome gift? Please email help@rackspace.com with your size &amp; address!",
            "dateTime": "Fri Mar 21 00:59:20 +0000 2014",
            "user_name": "Rackspace",
            "verified": "1",
            "sentiment": "1.25"
        },
        {
            "text": "@seanpcoyle so sorry about that. We are investigating. In the meantime, could you give us a call? http://t.co/BQXJ6bPmGJ @jwazdet",
            "dateTime": "Thu Mar 20 22:41:05 +0000 2014",
            "user_name": "Rackspace",
            "verified": "1",
            "sentiment": "-0.083333333333"
        },
        {
            "text": "@seanpcoyle Apologies for the wait - were you successful getting through to a Racker? @jwazdet",
            "dateTime": "Thu Mar 20 21:55:38 +0000 2014",
            "user_name": "Rackspace",
            "verified": "1",
            "sentiment": "0.625"
        },
        {
            "text": "@dglancy Is there anything particular you're having difficulty with? Would like to understand and improve. Thanks!",
            "dateTime": "Thu Mar 20 21:45:41 +0000 2014",
            "user_name": "Rackspace",
            "verified": "1",
            "sentiment": "0.0375"
        },
        {
            "text": "@KultureShockNet We're really sorry to hear that. What happened? We'd like to follow up. Please send details to help@rackspace.com.",
            "dateTime": "Thu Mar 20 19:27:30 +0000 2014",
            "user_name": "Rackspace",
            "verified": "1",
            "sentiment": "1.291666666667"
        },
        {
            "text": "@tonyfabeen Your account manager can help with that! Please DM us or email your contact to help@rackspace.com.",
            "dateTime": "Thu Mar 20 18:31:24 +0000 2014",
            "user_name": "Rackspace",
            "verified": "1",
            "sentiment": "0.625"
        },
        {
            "text": "@joeltimothy Can you please email help@rackspace.com and remind us of your tshirt size and address? ;)",
            "dateTime": "Thu Mar 20 18:14:58 +0000 2014",
            "user_name": "Rackspace",
            "verified": "1",
            "sentiment": "1.75"
        },
        {
            "text": "Join the discussion on scalable databases on our LIVE Cloud Office Hours Hangout - Right Now http://t.co/iIhtyJV9mf #CloudQA",
            "dateTime": "Thu Mar 20 18:01:40 +0000 2014",
            "user_name": "Rackspace",
            "verified": "1",
            "sentiment": "1.157967032967"
        },
        {
            "text": "@onedeadgod Happy to have a Racker reach out to you. Please send your acct info to help@rackspace.com and we'll contact you ASAP. Thanks!",
            "dateTime": "Thu Mar 20 16:37:28 +0000 2014",
            "user_name": "Rackspace",
            "verified": "1",
            "sentiment": "0.475"
        },
        {
            "text": "@jepettoruti Have you reached out to support? We're happy to jump in and help. Feel free to email acct/ticket details to help@rackspace.com.",
            "dateTime": "Thu Mar 20 16:06:44 +0000 2014",
            "user_name": "Rackspace",
            "verified": "1",
            "sentiment": "-0.5625"
        },
        {
            "text": "@nickstenning This should be resolved now. Thanks again for reporting this! :)",
            "dateTime": "Thu Mar 20 14:48:52 +0000 2014",
            "user_name": "Rackspace",
            "verified": "1",
            "sentiment": "0.85"
        },
        {
            "text": "@WayneElsey Ok thanks! We'll follow up.",
            "dateTime": "Thu Mar 20 14:10:32 +0000 2014",
            "user_name": "Rackspace",
            "verified": "1",
            "sentiment": "0.75625"
        },
        {
            "text": "@MarylandIT sure thing! Just email your address and shirt size to help@rackspace.com. :)",
            "dateTime": "Thu Mar 20 13:28:41 +0000 2014",
            "user_name": "Rackspace",
            "verified": "1",
            "sentiment": "1.660714285714"
        },
        {
            "text": "@real_ate Thanks for the notice! We're looking into this right now.",
            "dateTime": "Thu Mar 20 13:25:11 +0000 2014",
            "user_name": "Rackspace",
            "verified": "1",
            "sentiment": "0.686538461538"
        },
        {
            "text": "@nickstenning Can we send you a tshirt as a Thank You? Email your shirt size &amp; address to help@rackspace.com. :)",
            "dateTime": "Thu Mar 20 12:54:05 +0000 2014",
            "user_name": "Rackspace",
            "verified": "1",
            "sentiment": "1.375"
        },
        {
            "text": "@nickstenning Thanks for the heads up! We'll check it out.",
            "dateTime": "Thu Mar 20 12:53:57 +0000 2014",
            "user_name": "Rackspace",
            "verified": "1",
            "sentiment": "0.1"
        }
    ],
    "fbSelfPosts": [
        {
            "message": "Join Racker and Sharepoint MVP Jennifer Mason for a series of \"No-Code\" webinars. More info at http://sharepoint.rackspace.com/resource-center. Registration at https://www1.gotomeeting.com/register/270318265. ",
            "dateTime": "2014-03-18T06:56:27+0000",
            "page_name": "Rackspace Hosting",
            "like_count": "8",
            "sentiment": "0"
        },
        {
            "message": "\"Hello Zoltan! Thanks for...\" on Zoltan Sztrelcsik's post on Rackspace Hosting's wall.",
            "dateTime": "2014-03-12T13:30:56+0000",
            "page_name": "Rackspace Hosting",
            "like_count": "0",
            "sentiment": "0.225"
        },
        {
            "message": "\"What happened? We'd greatly...\" on their own link.",
            "dateTime": "2014-03-04T20:34:16+0000",
            "page_name": "Rackspace Hosting",
            "like_count": "0",
            "sentiment": "0.25"
        },
        {
            "message": "\"Glad to hear about your...\" on Stacie Kurt Jensen's post on Rackspace Hosting's wall.",
            "dateTime": "2014-03-02T20:30:53+0000",
            "page_name": "Rackspace Hosting",
            "like_count": "0",
            "sentiment": "0.5"
        },
        {
            "message": "Our specialists will be bringing the awesome to SXSW 2014 - see the full lineup at http://gag.gl/r5uOg  #SXRackspace",
            "dateTime": "2014-03-02T19:33:47+0000",
            "page_name": "Rackspace Hosting",
            "like_count": "17",
            "sentiment": "1.291666666667"
        },
        {
            "message": "\"Hi Justin! Thank you so much...\" on Justin Olsen's post on Rackspace Hosting's wall.",
            "dateTime": "2014-03-01T19:30:01+0000",
            "page_name": "Rackspace Hosting",
            "like_count": "0",
            "sentiment": "0.375"
        },
        {
            "message": "\"We're very sorry that you've...\" on Andrew Patricio's post on Rackspace Hosting's wall.",
            "dateTime": "2014-02-28T01:36:21+0000",
            "page_name": "Rackspace Hosting",
            "like_count": "0",
            "sentiment": "-0.177083333333"
        },
        {
            "message": "\"Hi George, let us see what we...\" on George Haskell's post on Rackspace Hosting's wall.",
            "dateTime": "2014-02-26T15:19:21+0000",
            "page_name": "Rackspace Hosting",
            "like_count": "0",
            "sentiment": "0.416666666667"
        },
        {
            "message": "\"Alec - can you please send...\" on Alec Paul's post on Rackspace Hosting's wall.",
            "dateTime": "2014-02-24T22:02:58+0000",
            "page_name": "Rackspace Hosting",
            "like_count": "0",
            "sentiment": "1"
        },
        {
            "message": "\"Please let us know what...\" on Kimberly Reck's post on Rackspace Hosting's wall.",
            "dateTime": "2014-02-22T12:11:01+0000",
            "page_name": "Rackspace Hosting",
            "like_count": "0",
            "sentiment": "0.125"
        },
        {
            "message": "\"Hello Nick Greene! Thanks for...\" on their own link.",
            "dateTime": "2014-02-18T23:58:45+0000",
            "page_name": "Rackspace Hosting",
            "like_count": "0",
            "sentiment": "0.35"
        },
        {
            "message": "Rackspace Hosted Exchange 2013 is now available with 100GB mailboxes and public folders! Check it out: http://bit.ly/1orKHwa",
            "dateTime": "2014-02-13T23:15:39+0000",
            "page_name": "Rackspace Hosting",
            "like_count": "25",
            "sentiment": "0"
        },
        {
            "message": "\"S Al Lindemann Here's the...\" on their own link.",
            "dateTime": "2014-02-13T14:32:28+0000",
            "page_name": "Rackspace Hosting",
            "like_count": "0",
            "sentiment": "0.25"
        },
        {
            "message": "Yesterday we announced that Lanham Napier has made a personal decision to retire from Rackspace. \n\nGraham Weston, our co-founder, Executive Chairman of the board and CEO from 1999 to 2006, has been appointed CEO while the board conducts a search for a permanent CEO among internal and external candidates. \n\nWe are grateful for Lanham’s leadership over the years and the way he positioned Rackspace for continuing success in this attractive and growing market. We wish him all the best as he pursues his other passions and are enthusiastic about the opportunities ahead.   \n\nRead our full press release announcing Lanham’s retirement as well as our fourth quarter and full year 2013 earnings release here: \n\nhttp://ir.rackspace.com/phoenix.zhtml?c=221673&p=irol-newsArticle&ID=1898609",
            "dateTime": "2014-02-11T19:32:07+0000",
            "page_name": "Rackspace Hosting",
            "like_count": "25",
            "sentiment": "4.820833333333"
        },
        {
            "message": "\"Understood. We're working to...\" on Bart Wilson's post on Rackspace Hosting's wall.",
            "dateTime": "2014-02-04T17:39:30+0000",
            "page_name": "Rackspace Hosting",
            "like_count": "0",
            "sentiment": "0.5"
        },
        {
            "message": "\"Hi Michael, please send a quick...\" on Michael Holstein Hansen's post on Rackspace Hosting's wall.",
            "dateTime": "2014-02-03T17:24:51+0000",
            "page_name": "Rackspace Hosting",
            "like_count": "0",
            "sentiment": "1"
        },
        {
            "message": "Rackspace Hosting likes a post.",
            "dateTime": "2014-02-03T16:16:43+0000",
            "page_name": "Rackspace Hosting",
            "like_count": "0",
            "sentiment": "0"
        },
        {
            "message": "\"We're very sorry to hear about...\" on their own link.",
            "dateTime": "2014-01-28T14:08:07+0000",
            "page_name": "Rackspace Hosting",
            "like_count": "0",
            "sentiment": "0.322916666667"
        },
        {
            "message": "Want to see MongoDB in action? Come listen to Rackspace customers, Appboy and Untappd, talk about how they scaled their applications with MongoDB and ObjectRocket in an upcoming webinar on Wed, Feb 12th at 1pm CST.  Kenny Gorman, Founder of ObjectRocket and Chief Architect at Rackspace, will also be available to answer questions.\n\nhttp://bit.ly/1dxCZuL",
            "dateTime": "2014-01-18T02:10:52+0000",
            "page_name": "Rackspace Hosting",
            "like_count": "25",
            "sentiment": "1.354166666667"
        },
        {
            "message": "\"We're very sorry to hear that...\" on Stacie Kurt Jensen's post on Rackspace Hosting's wall.",
            "dateTime": "2014-01-17T01:45:04+0000",
            "page_name": "Rackspace Hosting",
            "like_count": "0",
            "sentiment": "-0.177083333333"
        },
        {
            "message": "\"Thanks so much for the kind...\" on Stacie Kurt Jensen's post on Rackspace Hosting's wall.",
            "dateTime": "2014-01-15T00:28:00+0000",
            "page_name": "Rackspace Hosting",
            "like_count": "0",
            "sentiment": "0.78125"
        },
        {
            "message": "Rackspace Hosting likes a link.",
            "dateTime": "2014-01-13T20:22:08+0000",
            "page_name": "Rackspace Hosting",
            "like_count": "0",
            "sentiment": "0"
        },
        {
            "message": "We are pleased to announce the appointment of seven-year Racker Taylor Rhodes as President of Rackspace!",
            "dateTime": "2014-01-13T20:15:09+0000",
            "page_name": "Rackspace Hosting",
            "like_count": "25",
            "sentiment": "0.16666666667"
        },
        {
            "message": "\"What happened? Please let us...\" on their own status.",
            "dateTime": "2014-01-07T22:58:18+0000",
            "page_name": "Rackspace Hosting",
            "like_count": "0",
            "sentiment": "0.875"
        },
        {
            "message": "Our lead storyteller and videographer is back from his recent travels around the world. Along the way he captured these videos that each highlight a typical day-in-the-life of Rackers in Asia Pacific, Benelux, and the United Kingdom. \n\nhttp://www.rackspace.com/blog/an-inside-look-at-rackspaces-global-culture-video/",
            "dateTime": "2014-01-07T19:15:37+0000",
            "page_name": "Rackspace Hosting",
            "like_count": "25",
            "sentiment": "-0.375"
        }
    ]
}

```
