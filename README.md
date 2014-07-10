ExpressionEngine Force HTTPS or HTTP using tags
===========================

ExpressionEngine Plugin for tags to force 301 redirection to HTTPS or HTTP


### Installation
Copy `pb_forcehttps` plugin folder to your ExpressionEngine `third_party` folder, usually in `/system/ExpressionEngine/third_party`.

### Usage
Use the following snippets in your templates to redirect your desired pages. To redirect globally add to your `header` embed.

To force a page to HTTPS: `{exp:pb_forcehttps:tohttps}`
To force a page back to HTTP: `{exp:pb_forcehttps:tohttp}`

### Notes
- Uses `301` type redirection.
- This plugin will `exit();` after redirection so no other server side processing will be completed.
- Google is now happy to have an entire site in HTTPS and will not negativly impact your SEO - [see this article](http://searchengineland.com/google-want-to-switch-to-https-go-ahead-140068).
