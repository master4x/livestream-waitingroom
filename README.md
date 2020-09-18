# Livestream Waitingroom
Website to secure your private YouTube-Livestream with login credentials for your viewers.

## Features
- Secure YouTube livestreams with login credentials.
- Secure connection without tracking cookies from YouTube.
- Privat Media sharing for events during pandemic.
- Google Analytics snippet support (optional).
- Custom HTML & CSS injection (optional).

## Requirements
- A Full-Stack webhosting service/server
- A domain (this can also be a free .tk domain)
- A aged YouTube account
  - with activated feature 'Livestreaming'
    and 'Embed Livestrems'
   
**Go to your Livestream-Dashboard and set up a planned Livestream event to get an URL.**
    
YouTube Account Features: https://www.youtube.com/features

YouTube Livestream-Dashboard: https://www.youtube.com/live_dashboard

## Installation
1. Change login credentials in `logindata.php`
2. Change code to your livestream,

    2.1 Open `index.php`
    
    2.2 Go to line 77 in `index.php`
    
    2.3 Change YOUR_CODE
```
<iframe id="player1" src="https://www.youtube-nocookie.com/embed/YOUR_CODE?vq=hd1080&autoplay=1&loop=1&showinfo=0&rel=0&iv_load_policy=3" ...

for example:  https://www.youtube.com/watch?v=P2OCJ8b2RxQ  -->  YOUR_CODE will be P2OCJ8b2RxQ
```

> *Note: I coded this project for social purpose while covid pandemic, this isn't the safest solution on the market!*



#### License
This code is under MIT license.

Copyright 2020 github.com/master4x & github.com/T0X7C

----

**Free Code!**
